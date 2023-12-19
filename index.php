<?php

class NewPage extends Page
{
    public function cover()
    {
        return $this->content()
            ->cover()
            ->toFile() ?? $this->image();
    }

    public function published($format = null)
    {
        return parent::date()->toDate($format ?? 'd M, Y');
    }
}

Kirby::plugin('pixelopen/kirby-news', [
    'api' => [
        'routes' => [
            [
                'pattern' => 'getAllNews/(:num)',
                'action' => function ($num) {
                    $news = collection('news')
                        ->paginate($num);
                    $res = [];
                    foreach ($news as $new) {
                        $elt = [
                            "title" => $new->content()
                                ->title()
                                ->value(),
                            "description" => $new->content()
                                ->description()
                                ->value(),
                            "url" => $new->url(),
                            "cover" => $new->content()
                                ->cover()
                                ->toFile()
                                ->url(),
                        ];
                        array_push($res, $elt);
                    }
                    return $res;
                },
            ],
        ],
    ],
    'blueprints' => [
        'pages/new' => __DIR__ . "/blueprints/pages/new.yml",
        'pages/news' => __DIR__ . "/blueprints/pages/news.yml",
        'sections/news' => __DIR__ . "/blueprints/sections/news.yml",
        'blocks/news' => __DIR__ . "/blueprints/blocks/news.yml",
    ],
    'models' => [
        'new' => "NewPage",
    ],
    'collections' => [
        'news' => require __DIR__ . "/collections/news.php",
    ],
    'controllers' => [
        'news' => require __DIR__ . "/controllers/news.php",
        'new' => require __DIR__ . "/controllers/new.php",
    ],
    'snippets' => [
        'new' => __DIR__ . "/snippets/new.php",
        'news-pagination' => __DIR__ . "/snippets/news-pagination.php",
        'blocks/news' => __DIR__ . "/snippets/blocks/news.php",
    ],
    'templates' => [
        'news' => __DIR__ . "/templates/news.php",
        'new' => __DIR__ . "/templates/new.php",
    ],
    'areas' => [
        'news' => function ($kirby) {
            return [
                'label' => t('pixelopen.news'),
                'icon' => 'pen',
                'menu' => true,
                'link' => "pages/news",
                'current' => function (string $current): bool {
                    $path = \Kirby\Cms\App::instance()->request()->path()->toString();
                    return \Kirby\Toolkit\Str::contains($path, 'pages/news');
                },
            ];
        },
    ],
    'hooks' => [
        'system.loadPlugins:after' => function () {
            if (! Kirby::site()->childrenAndDrafts()->find('news')) {
                Page::create([
                    'slug' => 'news',
                    'template' => 'news',
                    'isDraft' => false,
                    'content' => [
                        'title' => t('pixelopen.news'),
                    ],
                ]);
            }
        },
    ],
    'translations' => require __DIR__ . '/i18n.php',
    'assets' => fn () => [
        'styles.css' => __DIR__ . '/assets/styles.css',
        'new.css' => __DIR__ . '/assets/new.css',
    ],
]);
