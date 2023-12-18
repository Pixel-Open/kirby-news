# Kirby News plugin

![GitHub release (with filter)](https://img.shields.io/github/v/release/Pixel-Open/kirby-news?style=for-the-badge) [![Dependency](https://img.shields.io/badge/kirby-4-cca000.svg?style=for-the-badge)](https://getkirby.com/)

A plugin for [Kirby CMS](http://getkirby.com) to add a news module

## Requirements

+ Kirby >= 4
+ PHP >= 8

## Commercial Usage

This plugin is free

## Installation

### Download

[Download the files](https://github.com/Pixel-Open/kirby-news/releases) and place them inside `site/plugins/kirby-news`.

### Composer

```
composer require pixelopen/kirby-news
```

### Git Submodule

You can add the plugin as a Git submodule.

    $ cd your/project/root
    $ git submodule add https://github.com/Pixel-Open/kirby-news.git site/plugins/kirby-news
    $ git submodule update --init --recursive
    $ git commit -am "Add Kirby News plugin"

Run these commands to update the plugin:

    $ cd your/project/root
    $ git submodule foreach git checkout master
    $ git submodule foreach git pull
    $ git commit -am "Update submodules"
    $ git submodule update --init --recursive

### Initialization

Run your website.
You should the a new page named News.
From this page you can create individual news and publish them.

## Options

If you want to use the block, you'll need to add the fieldsets `news` with the following lines in your `/site/config/config.php`:

```php
return [
    'blocks' => [
        'fieldsets' => [
            'custom' => [
                'label' => 'Custom blocks',
                'type' => 'group',
                'fieldsets' => [
                    'news',
                    // Other global custom blocks
                ]
            ],
          'kirby' => [
                'label' => 'Kirby blocks',
                'type' => 'group',
                'fieldsets' => [
                    'heading',
                    'text',
                    'list',
                    'quote',
                    'image',
                    'video',
                    'code',
                    'markdown'
                ]
            ]
        ]
    ]
];
```

You can also add your own fieldsets when you extend the fields, to add the `news` block and all the other block you want to use.
