  <div class="typography project__outro" style="color: <?= $page->color()->html() ?>; background-color: <?= $page->bg()->html() ?>;">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <?php if($page->collaborators()->isNotEmpty()): ?>
            <h5>Collaborators</h5>
            <div><?php echo $page->collaborators()->kirbytext() ?></div>
          <?php endif ?>
        </div>
        <div class="col-6">
          <?php if($next = $page->nextVisible()): ?>
            <h5>Next Project &rarr;</h5>
            <p><a href="<?php echo $next->url() ?>"><?php echo $next->title() ?></a></p>
            <?php else: ?>
              <h5>&nbsp;</h5>
            <p><a href="<?php echo $page->homePage()->url() ?>">Home &rarr;</a></p>
          <?php endif ?>
        </div>
      </div>
    </div>
  </div>
