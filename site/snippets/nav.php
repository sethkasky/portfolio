<nav class="navbar">
<a class="navbar__name" href="<?php echo $site->homePage()->url() ?>"><span class="navbar__name-title">Seth Kasky</span><span class="hide-small">, Graphic Designer</span></a>
<?php if($page->isHomePage()): ?>
  <?php else: ?>
  <div class="navbar__nav">
    <?php if($prev = $page->prevVisible()): ?>
      <a class="navbar__arrow" href="<?php echo $prev->url() ?>">
        <img src="../assets/images/left-arrow.svg">
      </a>
      <?php else: ?>
        <a class="navbar__arrow" href="<?php echo $page->homePage()->url() ?>">
          <img style="opacity: 0.5;" src="../assets/images/left-arrow.svg">
        </a>
    <?php endif ?>
    <?php if($next = $page->nextVisible()): ?>
      <a class="navbar__arrow" href="<?php echo $next->url() ?>">
        <img src="../assets/images/right-arrow.svg">
      </a>
      <?php else: ?>
        <a class="navbar__arrow" href="<?php echo $page->homePage()->url() ?>">
          <img style="opacity: 0.5;" src="../assets/images/right-arrow.svg">
        </a>
    <?php endif ?>
  <?php endif ?>
</div>
</nav>
