<style type="text/css">
.carousel img { overflow: hidden; height: 495px; }
.carousel { position: relative; margin-bottom: 20px; line-height: 1; width: 100%; margin: 20px auto !important; height: 495px; overflow: hidden; box-shadow: 0 10px 115px 0 #fff; }
.carousel-inner { overflow: hidden; width: 100%; position: relative; }
.carousel-inner > .item { display: none; position: relative; -webkit-transition: 0.6s ease-in-out left; -moz-transition: 0.6s ease-in-out left; -o-transition: 0.6s ease-in-out left; transition: 0.6s ease-in-out left; }
.carousel-inner > .item > img, .carousel-inner > .item > a > img { display: block; line-height: 1; }
.carousel-inner > .active, .carousel-inner > .next, .carousel-inner > .prev { display: block }
.carousel-inner > .active { left: 0 }
.carousel-inner > .next, .carousel-inner > .prev { position: absolute; top: 0; width: 100%; }
.carousel-inner > .next { left: 100% }
.carousel-inner > .prev { left: -100% }
.carousel-inner > .next.left, .carousel-inner > .prev.right { left: 0 }
.carousel-inner > .active.left { left: -100% }
.carousel-inner > .active.right { left: 100% }
.carousel-control { position: absolute; top: 40%; left: 15px; width: 40px; height: 40px; margin-top: -20px; font-size: 60px; font-weight: 100; line-height: 36px; color: #ffffff; text-align: center; background: #222222; opacity: 0.5; filter: alpha(opacity=50); text-decoration: none; font-size: 18px; }
.carousel-control.right { left: auto; right: 15px; }
.carousel-control:hover, .carousel-control:focus { color: #ffffff; text-decoration: none; opacity: 0.9; filter: alpha(opacity=90); }
.carousel-indicators { position: absolute; top: 15px; right: 15px; z-index: 5; margin: 0; list-style: none; }
.carousel-indicators li { display: block; float: left; width: 10px; height: 10px; margin-left: 5px; text-indent: -999px; background-color: #ccc; background-color: rgba(170, 170, 170, 0.8); border-radius: 5px; }
.carousel-indicators .active { background-color: rgba(178,0,0,.8); }
.carousel-caption { position: absolute; left: 0; right: 0; bottom: 0; padding: 15px; background: #333333; background: rgba(0, 0, 0, 0.75); }
.carousel-caption h4, .carousel-caption p { color: #ffffff; line-height: 20px; }
.carousel-caption h4 { margin: 0 0 5px; font-size: 20px; }
.carousel-caption p { margin-bottom: 0 }
</style>
<div id="myCarousel" class="carousel slide">
		<ol class="carousel-indicators">
		  <li data-target="#myCarousel" data-slide-to="0" class=""></li>
		  <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
		  <li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
		  <div class="item">
		<img src="images/v/home/images/image_1.jpg" alt="">
		<div class="carousel-caption">
		  <h4>Bombardier CRJ700</h4>
		  <p>A Seaboard CRJ700 sits at the regional terminal within Concourse A at Boston.</p>
		</div>
		  </div>
		  <div class="item active">
		<img src="images/v/home/images/image_2.jpg" alt="">
		<div class="carousel-caption">
		  <h4>Boeing 757-200</h4>
		  <p>One of our 757s arrives on the ILS approach into runway 4R in Boston.</p>
		</div>
		  </div>
		  <div class="item">
		<img src="images/v/home/images/image_3.jpg" alt="">
		<div class="carousel-caption">
		  <h4>Boeing 737-800</h4>
		  <p>A 737 skyrockets on the PATSS3 departure out of Boston.</p>
		</div>
		  </div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lt;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&gt;</a>
		</div>


<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="images/v/home/scripts/slider.js"></script>
<script type="text/javascript">
	$('.carousel').carousel({
	  interval: 5000
	})
</script>