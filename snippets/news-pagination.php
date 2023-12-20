<?php if ($pagination->hasPages()): ?>
<nav class="news__pagination">
  <a class="news__pagination__prev" <?php if ($pagination->hasPrevPage()): ?>href="<?= $pagination->prevPageUrl() ?>"<?php endif ?>>&larr;</a>
  <a class="news__pagination__next" <?php if ($pagination->hasNextPage()): ?>href="<?= $pagination->nextPageUrl() ?>"<?php endif ?>>&rarr;</a>
</nav>
<?php endif ?>
