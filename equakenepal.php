<?php include("header.php") ?>

<section id="home" class="parallax-bg3">
    <div class="parallax-overlay"></div>
        <div class="parallax-inner-cont"> 
            <div class="home-content" style="display: none;">
                <div class="container">
                    <!-- <div class="slide-logo text-center wow fadeIn" data-wow-delay="200ms"><img class="image-responsive" src="images/Logo_SustainNepal_white.png" style="width: 100px; height: 155px;"></div> -->
                    <div class="main-flex-slider wow fadeIn" data-wow-delay="400ms">
                        <h1>NEPAL EARTHQUAKE 2015</h1>
                    </div> 
                    <h2 class="slide-btm-text wow fadeIn" data-wow-delay="600ms" style="margin-top: 15px;">MAGNITUDE 7.9</h2>
                    <div class="text-center scrollto wow animated fadeInUp" data-wow-delay="400ms">
                        <a id="about-scroll" href="#about" class="btn btn-default earthquake">Read More<span class="icon-down" style="margin-left: 10px;"></span></a>
                    </div>
                </div>
            </div>
        </div>
</section>

<section id="about" style="margin-top: 0; padding-top: 0;">
    <div class="container">        
        <div class="margin-top80 margin-bottom80 text-center section-heading wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
            <div class="label-text margin-bottom25">Our mission is to accelerate the transition and growth of a new green economic paradigm in Nepal to achieve goals of sustainable development.</div>
            <p class="text-small about-paragraph">Sustainable Nepal was established on the occasion of World Environment Day - June 5, 2012. This organization aims to foster ecological, economical and social sustainable development of Nepal though projects that combines knowledge and action, both on national and international levels, to help create conditions for a sustainable future.</p>
        </div>
    </div>
</section>

<?php
// assign all the required links and header text for each news in the $gridArray
// imageUrl : the main image Url for the news, make sure the images are stored in /images
// newLink: the redirect link which will take you to the news page, save the news page under /news
// date: date of the news
// title: title of the news
// keep on adding the new one at the top of the array and it will show top one first and bottom one last. 

    $gridArrays = [
        ['imageUrl' => 'e1.jpg', 'date' => 'Mar 11 2015', 'title' => 'News Main Header 2', 'newsLink' => 'sn_news_1.php'],
        ['imageUrl' => 'e2.jpg', 'date' => 'Mar 12 2015', 'title' => 'News Main Header 3', 'newsLink' => 'sn_news_1.php'],
        ['imageUrl' => 'e3.jpg', 'date' => 'Mar 13 2015', 'title' => 'News Main Header 4', 'newsLink' => 'sn_news_1.php'],
        ['imageUrl' => 'e4.jpg', 'date' => 'Mar 14 2015', 'title' => 'News Main Header 5', 'newsLink' => 'sn_news_1.php'],
        ['imageUrl' => 'e5.jpg', 'date' => 'Mar 15 2015', 'title' => 'News Main Header 6', 'newsLink' => 'sn_news_1.php'],
        ['imageUrl' => 'e6.jpg', 'date' => 'Mar 16 2015', 'title' => 'News Main Header 7', 'newsLink' => 'sn_news_1.php'],
        ['imageUrl' => 'e7.jpg', 'date' => 'Mar 16 2015', 'title' => 'News Main Header 7', 'newsLink' => 'sn_news_1.php'],
        ['imageUrl' => 'e8.jpg', 'date' => 'June 05 2012', 'title' => 'Launch of Forest Himalaya', 'newsLink' => 'sn_news_1.php']
    ];
?>

<div class="clearfix margin-top10">
    <?php
        foreach ($gridArrays as $individualGrid) {
    ?>
            <div class="quarter-grid">
                <div style="background-image:url(images/<?php echo $individualGrid['imageUrl']; ?>)" class="quarter-grid-main-img"></div>
            </div>
    <?php
        }
    ?>
</div>

<div id="donate">
    <div class="container text-center">
        <h4 class="margin-bottom25">NEPAL EARTHQUAKE MAPPING</h4>
        <p>Consider donating to our projects. Your gift will help our organization<br/>to mobilize our resources for a better Nepal.</p>
        <a href="http://equakenepal.sustainablemap.org/" target="_blank" class="btn btn-default donate">VIEW MAP</a>
                <!-- <a href="" class="btn btn-default donate">DONATE</a> -->
        </form>
    </div>
</div>
<div id="donate" style="background-color: #ffffff;">
    <div class="container text-center">
        <h4 class="margin-bottom25">STAY STRONG NEPAL</h4>
        <p>Your gift will fund the most urgent needs for earthquake survivors in Nepal.</p>
        <a href="http://www.redcross.se/teman/nepal/" target="_blank" class="btn btn-default donate">DONATE</a>
                <!-- <a href="" class="btn btn-default donate">DONATE</a> -->
        </form>
    </div>
</div>
<?php include("footer.php") ?>