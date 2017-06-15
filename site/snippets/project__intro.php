<div class="project__intro typography" style="color: <?= $page->color()->html() ?>; background-color: <?= $page->bg()->html() ?>;">
  <div class="container">
    <div class="row">
      <div class="col-8">
        <div class="project__intro-title animated fadeIn"><h1><?= $page->title()->html() ?></h1></div>
        <div class="project__intro-text animated fadeIn"><?= $page->text()->kirbytext() ?></div>
      </div>
    </div>
    <div class="row">
      <?php if($page->category()->isNotEmpty()): ?>
        <div class="col-4 animated fadeIn project__intro-category">
          <h5>Category</h5>
          <div><?php echo $page->category()->text() ?></div>
        </div>
      <?php endif ?>
      <?php if($page->client()->isNotEmpty()): ?>
        <div class="col-4 animated fadeIn project__intro-company">
          <h5>Company</h5>
          <div><?php echo $page->client()->html() ?></div>
        </div>
      <?php endif ?>
    </div>
  </div>
</div>
