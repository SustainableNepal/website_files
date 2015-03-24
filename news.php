<?php include("header.php") ?>
<?php include("multipage_header.php") ?>

<?php
// assign all the required links and header text for each news in the $gridArray
// imageUrl : the main image Url for the news, make sure the images are stored in /images
// newLink: the redirect link which will take you to the news page, save the news page under /news
// date: date of the news
// title: title of the news
// keep on adding the new one at the top of the array and it will show top one first and bottom one last. 

	$gridArrays = [
        ['imageUrl' => 'slide-bg.jpg', 'date' => 'June 05 2012', 'title' => 'Launch of Forest Himalaya', 'newsLink' => 'sn_news_1.php'],
        ['imageUrl' => 'slide-bg.jpg', 'date' => 'Mar 11 2015', 'title' => 'News Main Header 2', 'newsLink' => 'sn_news_1.php'],
        ['imageUrl' => 'slide-bg.jpg', 'date' => 'Mar 12 2015', 'title' => 'News Main Header 3', 'newsLink' => 'sn_news_1.php'],
        ['imageUrl' => 'slide-bg.jpg', 'date' => 'Mar 13 2015', 'title' => 'News Main Header 4', 'newsLink' => 'sn_news_1.php'],
        ['imageUrl' => 'slide-bg.jpg', 'date' => 'Mar 14 2015', 'title' => 'News Main Header 5', 'newsLink' => 'sn_news_1.php'],
        ['imageUrl' => 'slide-bg.jpg', 'date' => 'Mar 15 2015', 'title' => 'News Main Header 6', 'newsLink' => 'sn_news_1.php'],
        ['imageUrl' => 'slide-bg.jpg', 'date' => 'Mar 16 2015', 'title' => 'News Main Header 7', 'newsLink' => 'sn_news_1.php'],
        ['imageUrl' => 'slide-bg.jpg', 'date' => 'Mar 17 2015', 'title' => 'News Main Header 8', 'newsLink' => 'sn_news_1.php']
    ];
?>

<div class="clearfix margin-top10">
	<?php
		foreach ($gridArrays as $individualGrid) {
	?>
			<div class="quarter-grid">
				<a href="news/<?php echo $individualGrid['newsLink']; ?>">
					<div style="background-image:url(images/<?php echo $individualGrid['imageUrl']; ?>)" class="quarter-grid-main-img"></div>
					<div class="quarter-grid-overlay">
						<div>
							<h3 class=""><strong><?php echo $individualGrid['date']; ?></strong></h3>
			    			<h2 class=""><?php echo $individualGrid['title']; ?></h2>
			  			</div>
					</div>
			  	</a>
			</div>
	<?php
		}
	?>
</div>

<?php include("sn_footer.php") ?>
<?php include("footer.php") ?>