<?php snippet('header') ?>

<main class="news">
  <?php if (empty($tag) === false): ?>
  <header>
    <h1>
      <small>Tag:</small> <?= esc($tag) ?>
      <a href="<?= $page->url() ?>" aria-label="Tous les articles">&times;</a>
    </h1>
  </header>
  <?php endif ?>

  <div class="news__header">
    <h2 class="news__header__title"><?= $page->headline()->or($page->title())->esc() ?></h2>
    <p class="news__header__subtitle"><?= $page->subheadline()->esc() ?></p>
  </div>
  <div class="news__content">
    <?php foreach ($news as $new): ?>
      <?php snippet('new', [
          'new' => $new,
      ]) ?>
    <?php endforeach ?>
  </div>

  <?php snippet('news-pagination', [
      'pagination' => $news->pagination(),
  ]) ?>
</main>

<?php snippet('footer') ?>
