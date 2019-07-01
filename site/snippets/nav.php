<nav class="nav" style="color: <?= $page->color()->html() ?>;">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <a class="nav__name" style="color:<?= $page->color()->html() ?>;" href="<?php echo $site->homePage()->url() ?>">
          Seth Kasky<span class="nav__name-title">, Product & Brand Designer</span>
        </a>
        <?php if($page->isHomePage()): ?>
          <?php else: ?>
          <div class="nav__arrows">
            <?php if($prev = $page->prevVisible()): ?>
              <a class="nav__arrow" href="<?php echo $prev->url() ?>" style="color:<?= $page->color()->html() ?>;margin-right: 15px;">
                &larr;
              </a>
              <?php else: ?>
                <a class="nav__arrow" href="<?php echo $page->homePage()->url() ?>" style="color:<?= $page->color()->html() ?>;margin-right: 15px;">
                  	&#10063;
                </a>
            <?php endif ?>
            <?php if($next = $page->nextVisible()): ?>
              <a class="nav__arrow"  href="<?php echo $next->url() ?>" style="color:<?= $page->color()->html() ?>;margin-left: 15px;">
                &rarr;
              </a>
              <?php else: ?>
                <a class="nav__arrow" href="<?php echo $page->homePage()->url() ?>" style="color:<?= $page->color()->html() ?>;margin-left: 15px;">
                  &#10063;
                </a>
            <?php endif ?>
          <?php endif ?>
        </div>
      </div>
    </div>
  </div>
</nav>
