<?php 
	function isMobile() {
		return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
	}
?>
<?php
if (isMobile()) {
   ?>
  <style type="text/css">
   		.mobile-slider {
   			overflow-x: scroll;
   			-webkit-overflow-scrolling: touch;
   		}
   </style>
<?php
}?>

<div id="multi-slide">
<div class="hide-slider" style="right: 2%; bottom: 170px; display:none;">
	X
</div>
	<div class="multiple-slider height0">
		<div class="multiple-slider-cont mobile-slider">
			<a class="slider-link" href="/foresthimalaya.php">
				<div class="each-slider" style="transform: translateX(0px); opacity: 1; transition: transform 500ms; -webkit-transition: transform 500ms;">
					<img src="/images/slide-bg.jpg">
					<div class="parallax-overlay" style="top: 0;"></div>
					<div class="slider-title">Forest Himalaya</div>
				</div>
			</a>
			<a class="slider-link" href="/sustainablemap.php">
				<div class="each-slider" style="transform: translateX(0px); opacity: 1; transition: transform 500ms; -webkit-transition: transform 500ms;">
					<img src="/images/world_map.jpg">
					<div class="parallax-overlay" style="top: 0;"></div>
					<div class="slider-title">Sustainable Map</div>
				</div>
			</a>
			<a class="slider-link" href="/flygreen.php">
				<div class="each-slider" style="transform: translateX(0px); opacity: 1; transition: transform 500ms; -webkit-transition: transform 500ms;">
					<img src="/images/Paragliding_Nepal.jpg">
					<div class="parallax-overlay" style="top: 0;"></div>
					<div class="slider-title">Fly Green</div>
				</div>
			</a>
			<a class="slider-link" href="/greenliving.php">
				<div class="each-slider" style="transform: translateX(0px); opacity: 1; transition: transform 500ms; -webkit-transition: transform 500ms;">
					<img src="/images/greenliving.jpg">
					<div class="parallax-overlay" style="top: 0;"></div>
					<div class="slider-title">Green Living</div>
				</div>
			</a>
			<a class="slider-link" href="/sustainableexchange.php">
				<div class="each-slider" style="transform: translateX(0px); opacity: 1; transition: transform 500ms; -webkit-transition: transform 500ms;">
					<img src="/images/exchange.jpg">
					<div class="parallax-overlay" style="top: 0;"></div>
					<div class="slider-title">sustainable Exchange</div>
				</div>
			</a>
			<a class="slider-link" href="/mynepal.php">
				<div class="each-slider" style="transform: translateX(0px); opacity: 1; transition: transform 500ms; -webkit-transition: transform 500ms;">
					<img src="/images/nepal123.jpg">
					<div class="parallax-overlay" style="top: 0;"></div>
					<div class="slider-title">Research Nepal</div>
				</div>
			</a>
		</div>
		<div class="slider-arrow left-arrow">
			<span class="icon-lefttarrow"></span>
		</div>
		<div class="slider-arrow right-arrow">
			<span class="icon-rightarrow"></span>
		</div>
	</div>
</div>