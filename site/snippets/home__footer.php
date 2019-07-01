  <footer class="footer__home" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <p>Thanks for stopping by. Happy <?php echo date('l');?>.</p>
        </div>
        <div class="col-6">
          <p>
            <?= $site->copyright()->kirbytext() ?>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <?php snippet('tab-message') ?>
</body>
</html>
<?php echo snippet('ga'); ?>
