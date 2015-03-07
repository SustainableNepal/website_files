<?php include("header.php") ?>
<?php include("multipage_header.php") ?>
<div class="project-section">
	<div class="fixed-section" style="background-image: url('../images/slide-bg.jpg');">
		<div class="fixed-title clearfix">
			<div class="caption-section">
				<div class="view-more">
					VIEW ALL PROJECTS
				</div>
				<?php include("slider.php") ?>
			</div>
		</div>
	</div>
	<div class="fixed-section right right-content">
		<div class="section-heading">
			<h2 class="margin-top120" style="color: #55A43D;">FOREST HIMALAYA</h2>
		</div>
		<div class="margin-top30 secondary-title">
			<p class="margin-bottom40">Forest Himalaya aims to improve environmental conditions in the Himalayas by promoting reforestation and uplifting the livelihoods of the people through ecological practices.</p>
		</div>
		<p class="margin-top30">Sustainable management of the forests not only meets people’s subsistence needs of fuel wood, fodder but also plays a major role in reducing deforestation and degradation and providing a global benefit of carbon sequestration. </p>
		<p class="margin-top30">The core belief of Forest Himalaya is that forests play an important role in sequestering carbon naturally and reforestation programs improve livelihood opportunities for local communities of the Himalayas and lead to environmentally sustainable ways of living. </p>
		<p class="margin-top30">On the occasion of World Environment Day 2012, Forest Himalaya launched its activities with a reforestation program in Nallu community forest in Nepal.</p>
		<div id="myCarousel" class="carousel slide">
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>
		  <!-- Carousel items -->
		  <div class="carousel-inner">
		    <div class="active item"><img class="image-responsive" src="/images/sn-slider1.jpg"></div>
		    <div class="item"><img class="image-responsive" src="/images/sn-slider2.jpg"></div>
		    <div class="item"><img class="image-responsive" src="/images/sn-slider3.jpg"></div>
		  </div>
		  <!-- Carousel nav -->
		  <a class="carousel-control left" href="#myCarousel" data-slide="prev"><span class="icon-rightarrow"></span></a>
		  <a class="carousel-control right" href="#myCarousel" data-slide="next"><span class="icon-leftarrow"></span></a>
		</div>
	</div>
	<div class="mobile-project-contianer">
		<div class="text-center section-heading">
	        <h2 class="section-heading">CURRENT PROJECTS</h2>
	        <hr>
	    </div>
		<?php include("project.php") ?>
	</div>
</div>
<?php include("footer.php") ?>