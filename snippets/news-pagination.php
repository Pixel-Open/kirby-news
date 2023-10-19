<?php if ($pagination->hasPages()): ?>
<nav class="pagination">
  <div class="w-max m-auto">
    <?php if ($pagination->hasPrevPage()): ?>
    <a class="pagination-prev" href="<?= $pagination->prevPageUrl() ?>">&larr;</a>
    <?php else: ?>
    <span class="pagination-prev">&larr;</span>
    <?php endif ?>
    <?php if ($pagination->hasNextPage()): ?>
    <a class="pagination-next" href="<?= $pagination->nextPageUrl() ?>">&rarr;</a>
    <?php else: ?>
    <span class="pagination-next">&rarr;</span>
    <?php endif ?>
  </div>
</nav>
<?php endif ?>
