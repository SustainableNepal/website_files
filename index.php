<?php include("header.php") ?>

<section id="home" class="parallax-bg">
    <div class="parallax-overlay"></div> 
    <div class="home-content">
        <div class="container">
            <div class="slide-logo text-center"><img class="image-responsive" src="images/Logo_SustainNepal_white.png" style="width: 100px; height: 155px;"></div>
            <div class="main-flex-slider">
                <h1 class="rotate">Environmental Sustainability, Economic Sustainability, Social Sustainability</h1>
            </div> 
            <h2 class="slide-btm-text">For a green future in nepal.</h2>
            <div class="text-center scrollto">
                <a id="about-scroll" href="#about" class="btn btn-default">Get Started<span class="icon-down" style="margin-left: 10px;"></span></a>
            </div>
        </div>
    </div>
</section>

<section id="navigation">
    <div id="undefined-sticky-wrapper" class="sticky-wrapper" style="height: 72px;"><div class="navbar navbar-inverse navbar-static-top " role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/min-logo1.png" style="height: 50px;"></a>
            </div>
            <div class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                <ul class="nav navbar-nav navbar-right scrollto">
                    <li class="active"><a href="#home">Home</a></li>
                    <li class=""><a href="#about">About</a></li>
                    <li class=""><a href="#project">Current Projects</a></li>
                    <li class=""><a href="#involved">Get Involved</a></li>
                    <li><a href="#team">Team</a></li>
                    <li class=""><a href="#page-contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div></div>
</section>

<section id="about">
    <div class="container">        
        <div class="margin-top80 margin-bottom80 text-center section-heading wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
            <h2 id="scroll-watch" class="section-heading">ABOUT US</h2>
            <hr>
            <div class="label-text margin-bottom25">Our mission is to accelerate the transition and growth of a new green economic paradigm in Nepal to achieve goals of sustainable development.</div>
            <!-- <p class="text-small about-paragraph">Sustainable Nepal is a non-profit umbrella orgranization for all other organizations working on sustainable development in Nepal. It focuses on connecting, supporting, strengthening the work of organizations with similar visions and bringing people together to collaborate because together we are stronger - together we can create a 'Sustainable Nepal'.</p> -->
            <p class="text-small about-paragraph">Sustainable Nepal was established on the occasion of World Environment Day - June 5, 2012. This organization aims to foster ecological, economical and social sustainable development of Nepal though projects that combines knowledge and action, both on national and international levels, to help create conditions for a sustainable future.</p>
        </div>
    </div>
    <img src="images/illustation1.png" style="width:100%;">
    
    <section class="tabs tabs-style-iconbox">
        <nav id="tab-menu">
            <ul>
                <li class="tab-current"><a href="javascript:void(0);" data-content="goal-content"><div class="section-heading"><h2>GOALS</h2></div></a></li>
                <li><a href="javascript:void(0);" data-content="vision-content"><div class="section-heading"><h2>VISION</h2></div></a></li>
                <li><a href="javascript:void(0);" data-content="approach-content"><div class="section-heading"><h2>APPROACH</h2></div></a></li>
            </ul>
        </nav>
        <div class="content-wrap container">
            <article id="tab-content-container" class="margin-top80 margin-bottom80">
                <section id="goal-content" class="clearfix section-heading active">
                    <div class="col-sm-6">
                        <p><b>The organization’s main goal is to promote environmental, economical and social sustainable development in Nepal. Our goals are to :</b></p>
                        <ul>
                            <li>Raise awareness of environmental problems and sustainable development in general in Nepal.</li>
                            <li>Communicate and reinforce individual's sense of the ability to influence and change towards sustainable development.</li>
                            <li>Research on the environmental, social and economic problems and their possible solutions.</li>
                            <li>Development and application of digital tools that facilitate and inspire communication and dissemination of information between different stakeholders.</li>
                        </ul>
                    </div>
                    <div class="col-sm-6 text-center">
                        <img class="margin-top10" src="images/Ecology-18.png">
                    </div>
                </section>
                <section id="vision-content" class="clearfix section-heading" style="display:none;">
                    <div class="col-sm-6 text-center">
                         <img src="images/Ecology-21.png" style="margin-top: -23px;">
                    </div>
                    <div class="col-sm-6">
                        <p>At Sustainable Nepal, we are driven by our vision to make Nepal a better place to live in. Our work is primarily focused at the grassroots level.  An important part of the change process is to visualize local changes and how each contributes unique change in a larger perspective. It is hoped that this in turn will influence and inspire other stakeholders and decision makers to drive change towards sustainable development - both in Nepal and abroad.  </p>
                    </div>
                </section>
                <section id="approach-content" class="clearfix section-heading" style="display:none;">
                    <div class="col-sm-6">
                        <p><b>Sustainable Nepal is a non-profit and voluntary organisation. We work closely with individuals within organisations in :</b></p>
                        <ul claa="animate zoomIn">
                            <li>Development of projects that contribute to sustainable solutions.</li>
                            <li>Education and distribution of information about sustainable development via online platforms and social media.</li>
                            <li>Achieve real and long-term changes at the local level.</li>
                            <li>Inspire, set examples and provide lessons for similar projects.</li>
                            <li>Influence policy makers to take decisions towards the overall goal.</li>
                        </ul>
                    </div>
                    <div class="col-sm-6 text-center">
                        <img class="margin-top10" src="images/Ecology-09.png" style="margin-top: 65px;">
                    </div>
                </section>
            </article>
        </div>
    </section>
</section>

<section id="project">
    <div class="container">        
        <div class="margin-top80 margin-bottom60 text-center section-heading">
            <h2 class="section-heading">CURRENT PROJECTS</h2>
            <hr>
            <div class="label-text margin-bottom25">Organizations / individuals who share a common vision are welcome to collaborate and start projects together with us. Here are few of our current projects.</div>
        </div>
    </div>
    <?php include("project.php") ?>
</section>

<section id="involved">
    <div class="container">
        <div class="margin-top80 margin-bottom60 text-center section-heading">
            <h2 class="section-heading">GET INVOLVED</h2>
            <hr>
            <div class="label-text">Make a difference in your community and the world.</div>
        </div>
        <div class="row margin-bottom80">
            <div class="col-sm-4 wow animated fadeInLeft animated"  data-wow-duration="900ms" data-wow-delay="400ms">
                <div class="panel text-center">
                    <img class="image-responsive margin-top40" src="images/vol.png">
                    <div class="content">
                        <h3 class="margin-bottom25">VOLUNTEERS</h3>
                        <p>If you are interested in helping Nepal in some way and volunteering in Sustainable Nepal, please send us your application letter and your CV.</p>
                        <a href="mailto:info@sustainablenepal.com?subject=" class="sus-link">Learn More <span class="icon-rightarrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 wow animated fadeInLeft animated"  data-wow-duration="900ms" data-wow-delay="500ms">
                <div class="panel text-center">
                    <img class="image-responsive margin-top40" src="images/stu.png">
                    <div class="content">
                        <h3 class="margin-bottom25">STUDENTS</h3>
                        <p>If you are interested in an exchange program in schools between Nepal and abroad, we can help you with contacts and prepare a complete program for you.</p>
                        <a href="sustainableexchange.php" class="sus-link">Learn More <span class="icon-rightarrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 wow animated fadeInLeft animated"  data-wow-duration="900ms" data-wow-delay="600ms">
                <div class="panel text-center">
                    <img class="image-responsive margin-top40" src="images/edu.png">
                    <div class="content">
                        <h3 class="margin-bottom25">EDUCATORS</h3>
                        <p> If you are a teacher in a school and are interested in finding out more about the exchange program, contact us for more information.</p>
                        <a href="sustainableexchange.php" class="sus-link">Learn More <span class="icon-rightarrow"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="donate">
        <div class="container text-center">
            <h4 class="margin-bottom25">NOT READY TO GET INVOLVED?</h4>
            <p>Consider donating to our projects. You gift will help our organization<br/>to mobilize our resources for a better Nepal.</p>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="RBZLGH4A8P4J4">
                <input type="submit" value="DONATE" placeholder="Username" class="btn btn-default donate" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <!-- <a href="" class="btn btn-default donate">DONATE</a> -->
            </form>
        </div>
    </div>
</section>

<section class="parallax-bg new">
    <div class="parallax-overlay" style="height:100%;"></div> 
        <div class="home-content">
            <div class="container">
                <div class="parallax-quote text-center">
                    <div>
                        "Look deep into nature, and then you will understand everything better."
                    </div>
                     <span style="font-size: 20px;">- Albert Einstein</span>
                </div>
            </div>
        </div>
</section>

<section id="team" class="section-padding">
    <div class="container">
        <div class="margin-top80 margin-bottom60 text-center section-heading">
            <h2 class="section-heading">OUR TEAM</h2>
            <hr>
            <div class="label-text">Make a difference in your community and world.</div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="team-col wow animated fadeInLeft"  data-wow-duration="700ms" data-wow-delay="100ms">
                    <img src="images/sardu.jpg" alt="">
                    <h4>Sardu Bajracharya</h4>
                    <span>Founder & Program Director</span>
                </div>
            </div><!--team col-->
            <div class="col-sm-3">
                <div class="team-col wow animated fadeInLeft"  data-wow-duration="700ms" data-wow-delay="200ms">
                    <img src="images/johan.jpg" alt="">
                    <h4>Johan Lahti</h4>
                    <span>Geographic IT Developer</span>
                </div>
            </div><!--team col-->
            <div class="col-sm-3">
                <div class="team-col wow animated fadeInLeft"  data-wow-duration="700ms" data-wow-delay="400ms">
                    <img src="images/tobjorn.jpg" alt="">
                    <h4>Torbjörn Lahti</h4>
                    <span>Advisor</span>
                </div>
            </div><!--team col-->
            <div class="col-sm-3">
                <div class="team-col wow animated fadeInLeft"  data-wow-duration="700ms" data-wow-delay="300ms">
                    <img src="images/sahaj.jpg" alt="">
                    <h4>Sahaj Bajracharya</h4>
                    <span>Web Application Developer</span>
                </div>
            </div><!--team col-->
        </div><div class="divided-50"></div>
        <div class="row">
            <div class="col-sm-3">
                <div class="team-col wow animated fadeInLeft"  data-wow-duration="700ms" data-wow-delay="500ms">
                    <img src="images/Srijan.jpg" alt="">
                    <h4>Srijan Tamrakar</h4>
                    <span>Designer</span>
                </div>
            </div><!--team col-->
            <div class="col-sm-3">
                <div class="team-col wow animated fadeInLeft"  data-wow-duration="700ms" data-wow-delay="600ms">
                    <img src="images/surina.jpg" alt="">
                    <h4>Surina Gurung</h4>
                    <span>Exchange Program Coordinator, Nepal</span>
                </div>
            </div><!--team col-->
            <div class="col-sm-3">
                <div class="team-col wow animated fadeInLeft"  data-wow-duration="700ms" data-wow-delay="700ms">
                    <img src="images/rai.jpg" alt="">
                    <h4>Pratap Rai</h4>
                    <span>Communications Coordinator</span>
                </div>
            </div><!--team col-->
            <div class="col-sm-3">
                <div class="team-col wow animated fadeInLeft"  data-wow-duration="700ms" data-wow-delay="800ms">
                    <img src="images/Friederike.jpg" alt="">
                    <h4>Friederike Arndt</h4>
                    <span>Designer</span>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="new-div text-center">
    <div class="container text-center">
        <h4 class="margin-bottom25">MAKE A DIFFERENCE. JOIN SUSTAINABLE NEPAL</h4>
        <hr>
        <p class="text-small" style="font-size: 18px; margin-left: 15px; margin-right: 15px;">Sustainable Nepal is a non-profit umbrella organization for all other organizations working on sustainable development in Nepal. It focuses on connecting, supporting, strengthening the work of organizations with similar visions and bringing people together to collaborate because together we are stronger - together we can create a 'Sustainable Nepal'.</p>
    </div>
</div>

<section id="page-contact" class="contact">
    <div class="container text-center section-heading" style="padding-top: 80px;">
        <h2 class="section-heading">CONTACT US</h2>
        <hr>
        <p>
            Get in touch with us if you are interested<br/>
            in collaborating and making a Sustainable Change
        </p>
        <div class="row margin-top40 text-center">
            <form class="form-horizontal" id="contact-form" novalidate="novalidate">
                <div class="form-contact float-left">
                    <input type="text" name="name" id="name" placeholder="Name" required="true" class="form-control input-lg">
                    <input type="text" name="email" id="email" placeholder="Email" required="true" class="form-control input-lg margin-top20">
                    <input type="text" name="organization" id="organization" placeholder="Organization" required="true" class="form-control input-lg margin-top20">
                </div>
                <div class="msg-box">
                    <textarea name="message" placeholder="Message" id="message" required="true" rows="8" class="form-control input-lg" style="height: 175px;"></textarea>
                    <div class="clearfix">
                        <div id="error1" class="display0 margin-top10 float-right" style="color: #e04515; clear: both;"><i>* Please Enter Your Name</i></div>
                        <div id="error2" class="display0 margin-top10 float-right" style="color: #e04515; clear: both;"><i>* Please Enter Your Valid Email</i></div>
                        <div id="error4" class="display0 margin-top10 float-right" style="color: #e04515; clear: both;"><i>* Please Enter Your Organization Name</i></div>
                        <div id="error3" class="display0 margin-top10 float-right" style="color: #e04515; clear: both;"><i>* Please Enter Your Message</i></div>
                    </div>
                    <a id="contact-submit" href="" class="btn btn-default float-right new">SEND</a>
                </div>
            </form>
        </div>
    </div>
</section>

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
                    <a href="https://twitter.com/SustainNepal" target="_blank"><span class="icon-twitter"></span></a>
                </div>
                <div id="copyright">
                    Copyright © 2015 Sustainable Nepal. 
                    <a id="ack" href="">Acknowledgements</a>.
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="ack-modal" class="modal fade">
<<<<<<< HEAD
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Acknowledgements</h4>
            </div>
            <div class="modal-body">
                <p><b>Sustainable Nepal would like to thank the following individuals for their support :</b></p>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="team-col team">
                                <img src="images/mohan.jpg" alt="">
                                <h4>Mohan Duwal</h4>
                                <span>Photographer</span>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="team-col">
                                <img src="images/Bivek.jpg" alt="">
                                <h4>Bivek Mahat</h4>
                                <span>Intern</span>
                            </div>
                        </div>
=======
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Acknowledgements</h4>
      </div>
      <div class="modal-body">
        <p><b>Sustainable Nepal would like to thank the following individuals for their support :</b></p>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="team-col team">
                        <img src="images/mohan.jpg" alt="">
                        <h4>Mohan Duwal</h4>
                        <span>Photographer</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-col">
                        <img src="images/Bivek.jpg" alt="">
                        <h4>Bivek Mahat</h4>
                        <span>Intern, Nepal</span>
>>>>>>> origin/master
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="thank-modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Thank You</h4>
            </div>
            <div class="modal-body">
                <p class="margin-bottom25">Thank You for your message. We will be in touch with you shortly.</p>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php") ?>



