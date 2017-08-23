<script type="text/javascript">
$(function() {
  // Get page title
    var pageTitle = $("title").text();

  // Change page title on blur
  $(window).blur(function() {
    $("title").text("Hey! Where'd you go? · " + pageTitle);
  });

  // Change page title back on focus
  $(window).focus(function() {
    $("title").text(pageTitle);
  });
});
</script>
