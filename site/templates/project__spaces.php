<?php snippet('header') ?>
<?php snippet('nav') ?>
<main role="main">
  <?php snippet('project__intro') ?>
  <div class="animated fadeIn project__content">
  <div class="spaces__video-bg">

  <div class="flex">
    <div class="flex__item">
      <div class="spaces__video">
        <div class="project--padding">
          <video id="video" style="width:100%;" autoplay loop>
            <source src="../assets/images/spaces/deskpass-spaces-video.mp4">
          </video>
          <label for="video" style="display:none;">Video touring the individualized space pages.</label>
        </div>
      </div>
    </div>
    <div class="flex__item">
      <div class="spaces__video-text">
        <div class="project--padding base-line-height typography">
          <h4>City First</h4>
          <p>Visitors are served up targeted spaces based on their location to the nearest Deskpass city. Users can filter spaces based on amenities and location, or view spaces via a map.</p>
        </div>
      </div>
    </div>
  </div>


  </div>
  <div class="project--padding-img" style="background-color:#237da0;">
    <div class="container">
      <div class="row">
        <div class="col-12">
            <img src="../assets/images/spaces/deskpass-spaces-locations.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="container typography">
    <div class="row">
      <div class="col-3">
      </div>
      <div class="col-6 text-center" style="padding-top: 4%;padding-bottom: 4%;">
        <h4>Similar, But Different</h4>
        <p>The styling of the Locations page abandons the split view of the app for a faster loading list view by default.</p>
      </div>
    </div>
  </div>
  <div style="padding-top: 4%;padding-bottom: 4%;background-color:#237da0;">
    <div class="container">
      <div class="row">
        <div class="col-12">
            <img src="../assets/images/spaces/deskpass-spaces-individual.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="container typography">
    <div class="row">
      <div class="col-3">
      </div>
      <div class="col-6 text-center" style="padding-top: 4%;padding-bottom: 4%;">
        <h4>Individual Pages</h4>
        <p>Individual space pages increase Deskpass SEO ranking and help better showcase the coworking locations.</p>
      </div>
    </div>
  </div>
  <?php snippet('project__outro') ?>
</div>
</main>
<?php snippet('footer') ?>
