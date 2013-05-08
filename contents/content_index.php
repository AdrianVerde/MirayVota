<div class="container">
<center>
<!--  Carousel - consult the Twitter Bootstrap docs at
      http://twitter.github.com/bootstrap/javascript.html#carousel -->
<div id="this-carousel-id" class="carousel slide carousel-fade presentation" style="max-width:555px;"><!-- class of slide for animation -->
  <div class="carousel-inner">
<div class="item active"><!-- class of active since it's the first item -->
      <img src="/img/p/mirayvota_Page_01.jpg" alt="" />
      <!-- <div class="carousel-caption">
        <p>Caption text here</p>
      </div> -->
    </div>
<?php
for ($i = 2; $i <= 14; $i++) {
echo "<div class=\"item\">
      <img src=\"/img/p/mirayvota_Page_".substr("00" . $i, -2).".jpg\" alt=\"\" />
    </div>";
	}
?>
  </div><!-- /.carousel-inner -->
  <!--  Next and Previous controls below
        href values must reference the id for this carousel -->
    <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
</div><!-- /.carousel -->
</center>

        </div> <!-- /container -->