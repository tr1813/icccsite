<!DOCTYPE html>
<html lang="en">
<head>
  <title>Imperial College Caving Club</title>
  <!-- Using the latest rendering mode for IE -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <meta name="author" content="Stores Gnomes" />

  <link rel="stylesheet" href="/theme/css/main.css" type="text/css"/>

  <script src="/theme/js/jquery.js"></script>

</head>
<body>

  <div class="banner">
    <div class="logo"></div>
    <div class="banner-title">
    </div>
  </div>

  <div style="clear: both;"></div>

  <div class="left-col">
<div class="sidebar">
      <hr class="hrsidebartop">

      <div class="sidebar-content-box">
        <div class="sidebar-item"><a href="/">Home</a></div>
        <div class="sidebar-item"><a href="/pages/introduction.html">Introduction</a></div>
        <div class="sidebar-item"><a href="/pages/team.html">Team</a></div>
        <div class="sidebar-item"><a href="/pages/itinerary.html">Itinerary</a></div>
      </div>

      <hr class="hrsidebar">

      <div class="sidebar-content-box">
        <div class="sidebar-item" data-idouter="posts-outer" data-idinner="posts-inner"><a>Trips and Posts</a></div>
        <div class="sidebar-outer collapsed" id="posts-outer">
          <div class="sidebar-inner" id="posts-inner">
                <div class="sidebar-sub-item"><a href="/mendips.html">Mendips</a></div>
                <div class="sidebar-sub-item"><a href="/france-2012.html">France 2012</a></div>
          </div>
        </div>
      </div>

      <hr class="hrsidebar">

      <div class="sidebar-content-box">
        <div class="sidebar-item"><a >Photos</a></div>
      </div>

      <script>
      $(function() {
        $('div.sidebar-item, div.sidebar-sub-item').click(function(){
          var outer = $(this).data("idouter");
          var inner = $(this).data("idinner");
          var outerelement = $('#' + outer);
          var innerelement = $('#' + inner);
          if (outerelement.hasClass('collapsed')) {
            outerelement.css({ 'max-height': innerelement.outerHeight() + 'px' });
            var height = innerelement.outerHeight();
          } else {
            outerelement.css({ 'max-height': '0px' });
          }
          outerelement.toggleClass('collapsed');

          if ($(this).data("upidouter") != null && $(this).data("upidinner")) {
            var outer = $(this).data("upidouter");
            var inner = $(this).data("upidinner");
            var outerelement = $('#' + outer);
            var innerelement = $('#' + inner);
            if (!outerelement.hasClass('collapsed')) {
              var newheight = parseInt(outerelement.css('max-height'), 10) + height;
              outerelement.css({ 'max-height': newheight + 'px' });
            }
          }

        });
      });
      </script>

</div>  </div>

  <div style="clear: both;"></div>

    <div class="center-col">
    </div>

    <div class="right-col">
      <p> right </p>
    </div>

</body>
</html>