<?php snippet('header') ?>
<?php snippet('nav') ?>
<main role="main">
  <?php snippet('project__intro') ?>
  <div class="animated fadeIn project__content">
    <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
      <div style="background-color:<?= $image->imgbgcolorhex()->text() ?>;">
        <div class="container">
          <figure>
            <img src="<?= $image->url() ?>" alt="<?= $image->imgalt()->text() ?>" title="<?= $image->imgtitle()->text() ?>" />
          </figure>
        </div>
      </div>
        <?php if($image->imgcaption()->isNotEmpty()): ?>
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <?php echo $image->imgcaption()->kirbytext() ?>
            </div>
          </div>
        </div>
        <?php endif ?>
    <?php endforeach ?>
  <?php snippet('project__outro') ?>
  </div>
</main>
<?php snippet('footer') ?>
