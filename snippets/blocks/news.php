<?php $news = collection('news')->paginate($block->pagination()->toInt()) ?>

<section <?= ! $block->content()->get('id') ? "" : "id=\"{$block->content()->get('id')->esc()}\"" ?>
         <?= $block->class()->isEmpty() ? "" : "class=\"{$block->class()->esc()}\"" ?>
>
  <div class="news_block__header">
    <h2 class="news_block__header__title"><?= ($block->name() != "") ? esc($block->name(), 'html') : t('pixelopen.news.blueprints.blocks.title')?></h2>
    <p class="news_block__header__description"><?= esc($block->description(), 'html')?></p>
  </div>
  <div class="news_block__content">
    <?php foreach ($news as $new): ?>
      <?php snippet('new', [
    'new' => $new,
          'showImage' => $block->show_image()->toBool(),
]) ?>
    <?php endforeach ?>
  </div>
</section>
