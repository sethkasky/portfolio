  <footer class="footer" role="contentinfo" style="color: <?= $page->color()->html() ?>; background-color: <?= $page->bg()->html() ?>;">
    <div class="container">
      <div class="row">
        <div class="col-3">
          <div>&copy; 2017 Seth Kasky</div>
        </div>
      </div>
    </div>
  </footer>
  <?php snippet('tab-message') ?>
</body>
</html>
<?php echo snippet('ga'); ?>
