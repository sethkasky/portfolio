<script type="text/javascript">
$(function() {
  // Get page title
    var pageTitle = $("title").text();

  // Change page title on blur
  $(window).blur(function() {
    $("title").text("Psst...over here · " + pageTitle);
  });

  // Change page title back on focus
  $(window).focus(function() {
    $("title").text(pageTitle);
  });
});
</script>
