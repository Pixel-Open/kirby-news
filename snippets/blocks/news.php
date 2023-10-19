<?= css('media/plugins/pixelopen/news/styles.css') ?>

<?php $news = collection('news')->paginate($block->pagination()->toInt()) ?>

<div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?= ($block->name() != "") ? esc($block->name(), 'html') : t('pixelopen.news.blueprints.blocks.title')?></h2>
      <p class="mt-2 text-lg leading-8 text-gray-600"><?= esc($block->description(), 'html')?></p>
    </div>
    <div class="mx-auto mt-16 grid max-w-7xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-<?= count($news) ?>">

    <?php if ($block->show_image()->toBool()) : ?>
      <?php foreach ($news as $new): ?>
        <?php snippet('new', [
            'new' => $new,
        ]) ?>
      <?php endforeach ?>
    <?php else : ?>
      <?php foreach ($news as $new): ?>
        <article>
          <a class="no-underline" href="<?= $new->url() ?>">
            <h3><?= esc($new->title(), 'html') ?></h2>
            <p class="font-normal"><?= esc($new->description(), 'html') ?></p>
          </a>
        </article>
      <?php endforeach ?>
    <?php endif ?>
    </div>
  </div>
</div>
