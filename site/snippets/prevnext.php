<div class="col-6 text-right">
  <?php if($next = $page->nextVisible()): ?>
    <p>Next</p>
    <p><a href="<?php echo $next->url() ?>"><?php echo $next->title() ?></a></p>
    <?php else: ?>
      <p>&nbsp;</p>
    <p><a href="<?php echo $page->homePage()->url() ?>">Home &rarr;</a></p>
  <?php endif ?>
</div>
