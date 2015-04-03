<?php 
    if (strstr($_SERVER['REQUEST_URI'], 'news')) { 
        $isNewsPage = true;
    } else {
        $isNewsPage = false;
    }
?>  
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
                <a class="navbar-brand" href="<?php dirname(__FILE__) ?>/index"><img src="/images/min-logo1.png" style="height: 50px;"></a>
            </div>
            <div class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                <ul class="nav navbar-nav navbar-right scrollto">
                    <li><a href="/#home">Home</a></li>
                    <li><a href="/#about">About</a></li>
                    <li class="<?php if (!$isNewsPage) { echo 'active'; } ?>"><a href="/#project">Current Projects</a></li>
                    <li><a href="/#involved">Get Involved</a></li>
                    <li><a href="/#team">Team</a></li>
                    <li><a href="/#page-contact">Contact</a></li>
                    <!-- <li class="<?php if ($isNewsPage) { echo 'active'; } ?>"><a href="news.php">news</a></li> -->
                </ul>
            </div>
        </div>
    </div></div>
</section>