<?php snippet('header') ?>
<div class="container typography">
  <div class="row">
    <div class="col-3">
    </div>
    <div class="col-6 text-center">
      <h1><?= $page->title()->kirbytext() ?></h1>
      <?= $page->intro()->kirbytext() ?>
      <?= $page->text()->kirbytext() ?>
    </div>
  </div>
</div>
