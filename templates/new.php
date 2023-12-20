<?php snippet('header')?>

<article class="new">
    <header class="new__header">
        <p class="new__header__date" datetime="<?= $page->date()->toDate('c') ?>">Publier le <?= $page->date()->esc()->toDate('d/m/Y') ?></p>
        <h1 class="new__header__title"><?= $page->title()->esc() ?></h1>
    <?php if ($cover = $page->cover()): ?>
        <img class="new__header__cover" src="<?= $cover->toFile()->url() ?>" alt="<?= $cover->alt()->esc() ?>">
    <?php endif ?>
    <div class="new__content">
        <?= $page->text()->toBlocks() ?>
    </div>
</article>

<?php snippet('footer')?>
