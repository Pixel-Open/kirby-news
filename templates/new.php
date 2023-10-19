<?php snippet('header') ?>

<?= css('media/plugins/pixelopen/news/styles.css') ?>
<?= css('media/plugins/pixelopen/news/new.css') ?>

<article class="article isolate ">

    <div class="py-8 sm:py-12">
        <div class="mx-auto max-w-7xl">
            <?php if ($cover = $page->cover()): ?>
            <header class="article-header h1 mb-16 grid grid-cols-1 xl:grid-cols-2 items-center gap-x-8">
                <div class="titleBlock text-center xl:text-left">
                    <p class="article-date mt-4 text-sm" datetime="<?= $page->date()
                ->toDate('c') ?>">Publier
                        le <?= $page->date()
                ->esc()
                ->toDate('d/m/Y') ?></p>
                    <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?= $page->title()
                ->esc() ?></h1>

                </div>
                <div class="max-w-7xl mx-auto mt-16 xl:mt-36 order-first xl:order-last">
                    <img src="<?= $cover->toFile()
                ->resize(1200)
                ->url() ?>" alt="<?= $cover->alt()
                ->esc() ?>" class="rounded-xl shadow-lg aspect-[4/3]">
                </div>
            </header>
            <?php else : ?>
                <header class="article-header h1 mb-16">
                    <div class="titleBlock">
                        <p class="article-date mt-4 text-sm text-center" datetime="<?= $page->date()
                ->toDate('c') ?>">Publier
                            le <?= $page->date('d/m/Y')
                ->esc() ?></p>
                        <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl text-center"><?= $page->title()
                ->esc() ?></h1>

                    </div>
                </header>
            <?php endif ?>
            <div class="wrapper">
                <div class="article text mx-auto prose max-w-none" id="content">
                    <?= $page->text()
                        ->toBlocks() ?>
                </div>

            </div>

        </div>
    </div>
</article>

<?php snippet('footer') ?>
