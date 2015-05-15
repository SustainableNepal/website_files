<?php include("header.php") ?>

<section id="home" class="parallax-bg3">
    <div class="parallax-overlay"></div>
        <div class="parallax-inner-cont"> 
            <div class="home-content" style="display: none;">
                <div class="container">
                    <div class="slide-logo text-center wow fadeIn" data-wow-delay="200ms"><img class="image-responsive" src="images/Logo_SustainNepal_white.png" style="width: 100px; height: 155px;"></div>
                    <div class="main-flex-slider wow fadeIn" data-wow-delay="200ms">
                        <h1> Nepal Earthquake Map 2015</h1>
                    </div> 
                    <h2 class="slide-btm-text wow fadeIn" data-wow-delay="350ms" style="margin-top: 15px;">MAGNITUDE 7.9 & 7.4</h2>
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
            <div class="label-text margin-bottom25">On 25 April, an earthquake of 7.9 magnitude and on 12 May, an earthquake of 7.4 magnitude hit Nepal killing thousands of people and leaving behind a trail of destruction. </div>
            <p class="text-small about-paragraph">The epicentre of the 25 April earthquake was in a remote area of Gorkha district , 80 km north-west of Kathmandu. The earthquake on 12 May started about 80km north-east of Kathmandu, halfway to Everest. A series of aftershocks has followed the earthquakes and the damages have been severe and catastrophic.</p>
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
        ['imageUrl' => 'e2.jpg', 'date' => 'Mar 11 2015', 'title' => 'News Main Header 2', 'newsLink' => 'sn_news_1.php'],
        ['imageUrl' => 'e5.jpg', 'date' => 'Mar 12 2015', 'title' => 'News Main Header 3', 'newsLink' => 'sn_news_1.php'],
        ['imageUrl' => 'e4.jpg', 'date' => 'Mar 13 2015', 'title' => 'News Main Header 4', 'newsLink' => 'sn_news_1.php'],
        ['imageUrl' => 'e8.jpg', 'date' => 'Mar 14 2015', 'title' => 'News Main Header 5', 'newsLink' => 'sn_news_1.php'],
        ['imageUrl' => 'e3.jpg', 'date' => 'Mar 15 2015', 'title' => 'News Main Header 6', 'newsLink' => 'sn_news_1.php'],
        ['imageUrl' => 'e6.jpg', 'date' => 'Mar 16 2015', 'title' => 'News Main Header 7', 'newsLink' => 'sn_news_1.php'],
        ['imageUrl' => 'e7.jpg', 'date' => 'Mar 16 2015', 'title' => 'News Main Header 7', 'newsLink' => 'sn_news_1.php'],
        ['imageUrl' => 'e1.jpg', 'date' => 'June 05 2012', 'title' => 'Launch of Forest Himalaya', 'newsLink' => 'sn_news_1.php']
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

<section id="about" style="margin-top: 0; padding-top: 0; background-color: #ffffff;">
    <div class="container">        
        <div class="margin-top80 margin-bottom80 section-heading wow animated fadeInUp text-center" data-wow-duration="700ms" data-wow-delay="300ms">
            <div class="label-text margin-bottom25">Nepal Earthquake Map 2015</div>
            <p class="text-small">Sustainable Nepal has developed an interactive and crowd-sourced earthquake-mapping tool based on open source libraries and data. This tool helps users to post information about earthquake impacts as well activities related to the earthquake.</p>
            <p class="text-small">During the recovery process, this tool can be useful for communities at different stages of recovering from the earthquake. For instance allowing them to focus resources into areas with the biggest need of intervention, as well to prepare and plan the recovery and rescue operations. Also visualizing on-going activities and enhancing information exchange among local, national and International actors will be easier.</p>
            <p class="text-small">This map is completely open and available for everyone to contribute to and to use for rescue and recovery processes. The more people contribute in adding markers – the better and more informed decisions could be made in coming days.</p>
            <p style="font-size: 27px; line-height: 40px; margin-bottom: 0;">Together we can build up Nepal again – this time, in a sustainable way!</p>
        </div>
    </div>
</section>

<div id="donate" style="background-image:url(images/map.png);   background-position: 15%; background-size: cover; padding-top: 150px; padding-bottom: 150px;">
    <div class="parallax-overlay" style="margin-top: -150px; height: 400px;"></div>
    <div class="container text-center" style=" color: #ffffff;; position: relative;">
        <a href="http://www.sustainablemap.org/earthquakenepal" target="_blank" class="map btn btn-default" style=" background: #e04515; border-color: #e04515; color: #fff;">VIEW MAP</a>
                <!-- <a href="" class="btn btn-default donate">DONATE</a> -->
        </form>
    </div>
</div>
<div id="donate">
    <div class="container text-center">
        <h4 class="margin-bottom25">STAY STRONG NEPAL</h4>
        <p>Sustainable Nepal is one of the organizations behind the initiative “Katastrofhjälp Nepal” (in Sweden) - which is a collaboration between various Swedish and Nepalese non-profit organizations - to reach out to mobilize financial assistance to the victims of the earthquake in Nepal.</p>
        <a href="http://www.katastrofhjalpnepal.se/" target="_blank" class="btn btn-default map" style=" background: #e04515; border-color: #e04515; color: #fff;">DONATE</a>
                <!-- <a href="" class="btn btn-default donate">DONATE</a> -->
        </form>
    </div>
</div>
<footer class="sn-footer">
    <div class="container" style="min-height: 115px;">
        <div id="daya-inner-footer" class="row">
            <div class="col-sm-6 col-sm-4">
                <div class="country-code left">
                    <h5 class="footer-title">SWEDEN</h5>
                    <p style="height: 100%;">Stiftsvägen, Lund</p>
                    <p><span class="phone"></span> <span>+46 761 3385</span></p>
                    <p><span class="email"></span> <span style="margin-top:0;">info@sustainablenepal.com</span></p>
               </div>
            </div>
            <div class="col-sm-6 col-sm-4">
                <div class="country-code right" style="margin-bottom: 0;">
                    <h5 class="footer-title">NEPAL</h5>
                    <p style="height: 100%;">Ganeshbasti, Maharajgunj, Kathmandu</p>
                    <p><span class="phone"></span> <span>+977 9841 218779</span></p>
                    <p><span class="email"></span> <span style="margin-top:0;">info@sustainablenepal.com</span></p>
               </div>
            </div>
            <div class="col-sm-6 col-sm-4 social-follow">
                <h5>FOLLOW US:</h5>
                <div style="margin-top: 25px; margin-bottom: 5px;">
                    <a href="https://www.facebook.com/SustainableNepal" target="_blank" style="margin-right: 5px;"><span class="icon-facebook"></span></a>
                    <a href="https://twitter.com/SustainNepal" target="_blank" style="margin-right: 5px;"><span class="icon-twitter"></span></a>
                    <a href="https://plus.google.com/u/0/111460931409352126597/posts" target="_blank" style="margin-right: 5px;"><span class="icon-googleplus"></span></a>
                    <a href="https://instagram.com/sustainepal/" target="_blank"><span class="icon-instagram"></span></a>

                </div>
                <div id="copyright">
                    Copyright © 2015 Sustainable Nepal. 
                </div>
            </div>
        </div>
    </div>
</footer>
<?php include("footer.php") ?>