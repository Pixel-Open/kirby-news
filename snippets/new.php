<?php if (! isset($showImage)) {
    $showImage = true;
} ?>

<article class="new_snippet">
  <a href="<?= $new->url() ?>">
    <?php if (($cover = $new->cover()) && $showImage): ?>
      <img class="new_snippet__cover" src="<?= $cover->toFile()->resize(390, 260)->url() ?>" alt="<?= $new->title()->esc() ?>">
    <?php endif ?>
    <h3 class="new_snippet__title">
      <?= $new->title()->esc() ?>
    </h3>
  </a>
</article>