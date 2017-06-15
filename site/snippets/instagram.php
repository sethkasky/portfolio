<section class="home__instagram">
  <div class="container">
  <div class="row">
    <div id="instafeed"></div>
  </div>
</div>
</section>
<script type="text/javascript" src="assets/js/vendor/instafeed.min.js"></script>
<script type="text/javascript">
  var feed = new Instafeed({
      get: 'user',
      userId: '174598882',
      limit: '4',
      clientId: '3e5a49b3b23647349adabc765c0f4b81',
      accessToken: '174598882.1677ed0.d5c0af830d7148a992ee7bdad4749acc',
      resolution: 'standard_resolution',
      template: '<div class="col-3 col-6-sm"><a target="_blank" href="{{link}}"><img class="" alt="Instagram Image" src="{{image}}"/></a></div>',
  });
  feed.run();
</script>
