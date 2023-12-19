<?php if ($pagination->hasPages()): ?>
<nav class="pagination">
  <a class="pagination__prev" <?php if ($pagination->hasPrevPage()): ?>href="<?= $pagination->prevPageUrl() ?>"<?php endif ?>>&larr;</a>
  <a class="pagination__next" <?php if ($pagination->hasNextPage()): ?>href="<?= $pagination->nextPageUrl() ?>"<?php endif ?>>&rarr;</a>
</nav>
<?php endif ?>
