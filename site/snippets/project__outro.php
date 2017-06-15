<?php if($page->collaborators()->isNotEmpty()): ?>
  <div class="typography project__outro" style="color: <?= $page->color()->html() ?>; background-color: <?= $page->bg()->html() ?>;">
    <div class="container">
      <div class="row">
          <div class="col-4">
            <h5>Collaborators</h5>
            <div><?php echo $page->collaborators()->kirbytext() ?></div>
          </div>
      </div>
    </div>
  </div>
<?php endif ?>
