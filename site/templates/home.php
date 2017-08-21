<?php snippet('header') ?>
<?php snippet('nav') ?>
<section class="home__intro">
  <div class="container typography">
    <div class="row">
      <div style="font-size:175%;padding-bottom:0.5em;" class="col-6 home__animation-1 animated fadeIn">
        <?= $page->text()->kirbytext() ?>
      </div>
    </div>
    <div class="row">
      <div class="col-3 home__animation-2 animated fadeIn">
        <?= $page->irl()->kirbytext() ?>
      </div>
      <div class="col-3 home__animation-3 animated fadeIn">
        <ul>
          <li class="home__social"><a class="home__social-icon" href="https://twitter.com/sethkasky" target="_blank"><img src="assets/images/home/twitter-icon.svg" alt="Twitter Icon"></a><a href="https://twitter.com/sethkasky" target="_blank">Twitter</a></li>
          <li class="home__social"><a class="home__social-icon" href="https://www.instagram.com/sethkasky/" target="_blank"><img src="assets/images/home/instagram-icon.svg" alt="Instagram Icon"></a><a href="https://www.instagram.com/sethkasky/" target="_blank">Instagram</a></li>
          <li class="home__social"><a class="home__social-icon" href="https://dribbble.com/kasky" target="_blank"><img src="assets/images/home/dribbble-icon.svg" alt="Dribbble Icon"></a><a href="https://dribbble.com/kasky" target="_blank">Dribbble</a></li>
          <li class="home__social"><a class="home__social-icon" href="https://www.linkedin.com/in/sethkasky/" target="_blank"><img src="assets/images/home/linkedin-icon.svg" alt="LinkedIn Icon"></a><a href="https://www.linkedin.com/in/sethkasky/" target="_blank">LinkedIn</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<?php snippet('home__work') ?>
<?php snippet('home__footer') ?>
<script type="text/javascript">
tippy('.tippy', {
  theme: 'kasky',
  followCursor: 'true',
  inertia: 'true',
  position: 'top',
  animation: 'perspective',
  duration: 500,
  distance: 5,
  interactive: 'true',
})
</script>
