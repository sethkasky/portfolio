<?php snippet('header') ?>
<?php snippet('nav') ?>
<main role="main">
  <?php snippet('project__intro') ?>
  <div class="animated fadeIn project__content">
  <div class="row-nm">
    <div class="col-3-nm col-6-nm-sm">
      <img src="../assets/images/gettingthere/bond-gowanus.jpg" alt="">
    </div>
    <div class="col-3-nm col-6-nm-sm">
      <img src="../assets/images/gettingthere/second-shift.jpg" alt="">
    </div>
    <div class="col-3-nm col-6-nm-sm">
      <img src="../assets/images/gettingthere/village-workspaces-olympic-blvd.jpg" alt="">
    </div>
    <div class="col-3-nm col-6-nm-sm">
      <img src="../assets/images/gettingthere/platform-ravenswood.jpg" alt="">
    </div>
  </div>
  <div class="gettingthere--bg">
    <div class="flex">
      <div class="flex__item">
        <div class="gettingthere__image">
          <img src="../assets/images/gettingthere/deskpass-getting-there.jpg">
        </div>
      </div>
      <div class="flex__item">
        <div class="flex-vert">
          <div class="flex__item-vert">
            <div class="typography gettingthere__solution">
              <h4>Solution</h4>
              <p>The solution we arrived at was the implementation of an endpoint in our API known as “getting_there”. This allows spaces to list a series of simple steps for the Deskpass member to take upon arriving at the location.</p>
              <p>This information is private, everchanging, and is on a "need-to-know" basis. It was important to not disclose the informaton unless the member had a reservation at the location. To solve this problem, we updated space reservation email design.</p>
              <p>The design of this email informs the member of everything that they need to know when accessing the space including the address, hours, contact information, space photo (visual confirmation), link to cancel the reservation, and most importantly, how to access the space.</p>
            </div>
          </div>
          <div class="flex__item-vert">
            <div class="typography gettingthere__results">
              <h4>Results</h4>
              <p>The addition of this feature led to a dramatic reduction in morningtime customer support issues. We no longer had to devote unnecessary additional time and resources assisting users getting into locations. This led to happier customers and a more seamless Deskpass experience.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php snippet('project__outro') ?>
  </div>
</main>
<?php snippet('footer') ?>
