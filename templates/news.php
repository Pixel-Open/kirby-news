<?php snippet('header') ?>

<?= css('media/plugins/pixelopen/news/styles.css') ?>

<main>
<?php if (empty($tag) === false): ?>
<header class="h1">
  <h1>
    <small>Tag:</small> <?= esc($tag) ?>
    <a href="<?= $page->url() ?>" aria-label="Tous les articles">&times;</a>
  </h1>
</header>


<?php endif ?>

<!-- Blog section -->
<div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?= $page->headline()
    ->or($page->title())
    ->esc() ?></h2>
      <p class="mt-2 text-lg leading-8 text-gray-600"><?= $page->subheadline()
    ->esc() ?></p>
    </div>
    <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">

      <?php foreach ($news as $new): ?>
        <?php snippet('new', [
            'new' => $new,
        ]) ?>

      <?php endforeach ?>
      <!-- More posts... -->
    </div>
  </div>
</div>


</main>

<?php snippet('news-pagination', [
    'pagination' => $news->pagination(),
]) ?>
<?php snippet('footer') ?>
