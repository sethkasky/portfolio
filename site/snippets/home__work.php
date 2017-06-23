<section class="padding home__animation-4 animated fadeIn">
  <div class="container typography">
    <div class="home__projects">
      <ul>
        <?php foreach(page('work')->children()->visible() as $project): ?>
        <li class="row">
          <a href="<?php echo $project->url() ?>">
            <div class="col-6 col-11-sm home__projects-title">
              <?php echo $project->title() ?>
              <?php if($project->featured() == 'true'): ?>
              <div class="new font-heavy base-line-height">New</div>
              <?php endif ?>
            </div>
            <div class="col-5 home__projects-category hidden-sm">
              <?php echo $project->category() ?>
            </div>
            <div class="col-1 col-1-sm text-right home__projects-arrow">
              &rarr;
            </div>
          </a>
        </li>
        <?php endforeach ?>
      </ul>
    </div>
  </div>
</section>
