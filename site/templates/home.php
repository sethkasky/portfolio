<?php snippet('header') ?>
<section class="home__intro">
<div class="container typography" style="height:100%;">
  <div class="home__intro-top">
    <div class="row">
        <div class="col-6 home__animation-1 animated fadeIn">
          <a class="home__name" href="<?php echo $site->homePage()->url() ?>"><span class="navbar__name-title">Seth Kasky</span>, Graphic Designer</a>
        </div>
    </div>
  </div>
  <div class="home__intro-bottom">
    <div class="row">
      <div class="col-6 home__animation-1 animated fadeIn">
        <?= $page->text()->kirbytext() ?>
        <p>Thanks for stopping by. Have a great <?php echo date('l');?>.</p>
      </div>
      <div class="col-3 home__animation-2 animated fadeIn">
        <?= $page->irl()->kirbytext() ?>
      </div>
      <div class="col-3 home__animation-3 animated fadeIn">
        <ul>
          <li class="home__social"><a class="home__social-icon" href="https://twitter.com/sethkasky" target="_blank"><img src="assets/images/home/twitter-icon.svg" alt="Twitter Icon"></a><a href="https://twitter.com/sethkasky" target="_blank">Twitter</a></li>
          <li class="home__social"><a class="home__social-icon" href="https://m.me/sethkasky" target="_blank"><img src="assets/images/home/messenger-icon.svg" alt="Messenger Icon"></a><a href="https://m.me/sethkasky" target="_blank">Messenger</a></li>
          <li class="home__social"><a class="home__social-icon" href="https://www.instagram.com/sethkasky/" target="_blank"><img src="assets/images/home/instagram-icon.svg" alt="Instagram Icon"></a><a href="https://www.instagram.com/sethkasky/" target="_blank">Instagram</a></li>
          <li class="home__social"><a class="home__social-icon" href="https://dribbble.com/kasky" target="_blank"><img src="assets/images/home/dribbble-icon.svg" alt="Dribbble Icon"></a><a href="https://dribbble.com/kasky" target="_blank">Dribbble</a></li>
          <li class="home__social"><a class="home__social-icon" href="https://www.linkedin.com/in/sethkasky/" target="_blank"><img src="assets/images/home/linkedin-icon.svg" alt="LinkedIn Icon"></a><a href="https://www.linkedin.com/in/sethkasky/" target="_blank">LinkedIn</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</section>
<section class="padding home__animation-4 animated fadeIn">
  <div class="container">
    <div class="home__projects typography">
      <ul>
        <?php foreach(page('work')->children()->visible() as $project): ?>
            <li class="row">
              <a href="<?php echo $project->url() ?>">
                <div class="col-6 home__projects-title">
                  <?php echo $project->title() ?>
                  <?php if($project->featured() == 'true'): ?>
                    <div class="new font-heavy base-line-height">New</div>
                  <?php endif ?>
                </div>
                <div class="col-5 home__projects-category hidden-sm">
                  <?php echo $project->category() ?>
                </div>
                <div class="col-1 col-1-sm text-right home__projects-arrow hidden-sm">
                  &rarr;
                </div>
              </a>
            </li>
          <?php endforeach ?>
      </ul>
    </div>
  </div>
</section>
<?php snippet('home__footer') ?>
