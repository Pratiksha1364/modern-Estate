<?php
include "connection.php";
session_start();

if(!isset($_SESSION['gmailuser']))
{
  if (!isset($_GET['reload'])) {
    echo '<meta http-equiv=Refresh content="0;url=../login-v2.php">';
        }
}
else{
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Morden Estate | Agent </title>
  <link rel="stylesheet" href="assets/css/style-freedom.css">
</head>
<body>
<script src='../../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>
<!--<script>(function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "//a.vdo.ai/core/w3layouts_V2/vdo.ai.js?vdo=34");</script>-->
<div id="codefund"><!-- fallback content --></div>
<script src="../../../../../../../codefund.io/properties/441/funder.js" async="async"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=UA-149859901-1'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149859901-1');
</script>

<script>
     window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
     ga('create', 'UA-149859901-1', 'demo.w3layouts.com');
     ga('require', 'eventTracker');
     ga('require', 'outboundLinkTracker');
     ga('require', 'urlChangeTracker');
     ga('send', 'pageview');
   </script>
<script async src='../../../../../../js/autotrack.js'></script>

<meta name="robots" content="noindex">
<body>
	<!-- Demo bar start -->
  <link rel="stylesheet" href="../../../../../../assests/css/font-awesome.min.css">
<!-- New toolbar-->
<style>
* {
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}


#w3lDemoBar.w3l-demo-bar {
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  padding: 40px 5px;
  padding-top:70px;
  margin-bottom: 70px;
  background: #0D1326;
  border-top-left-radius: 9px;
  border-bottom-left-radius: 9px;
}

#w3lDemoBar.w3l-demo-bar a {
  display: block;
  color: #e6ebff;
  text-decoration: none;
  line-height: 24px;
  opacity: .6;
  margin-bottom: 20px;
  text-align: center;
}

#w3lDemoBar.w3l-demo-bar span.w3l-icon {
  display: block;
}

#w3lDemoBar.w3l-demo-bar a:hover {
  opacity: 1;
}

#w3lDemoBar.w3l-demo-bar .w3l-icon svg {
  color: #e6ebff;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons {
  margin-top: 30px;
  border-top: 1px solid #41414d;
  padding-top: 40px;
}
#w3lDemoBar.w3l-demo-bar .demo-btns {
  border-top: 1px solid #41414d;
  padding-top: 30px;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
  font-size: 26px;
}
#w3lDemoBar.w3l-demo-bar .no-margin-bottom{
  margin-bottom:0;
}
.toggle-right-sidebar span {
  background: #0D1326;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  color: #e6ebff;
  border-radius: 50px;
  font-size: 26px;
  cursor: pointer;
  opacity: .5;
}
.pull-right {
  float: right;
  position: fixed;
  right: 0px;
  top: 70px;
  width: 90px;
  z-index: 99999;
  text-align: center;
}
/* ============================================================
RIGHT SIDEBAR SECTION
============================================================ */

#right-sidebar {
  width: 90px;
  position: fixed;
  height: 100%;
  z-index: 1000;
  right: 0px;
  top: 0;
  margin-top: 60px;
  -webkit-transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  -o-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  overflow-y: auto;
}

/* ============================================================
RIGHT SIDEBAR TOGGLE SECTION
============================================================ */

.hide-right-bar-notifications {
  margin-right: -300px !important;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}



@media (max-width: 992px) {
  #w3lDemoBar.w3l-demo-bar a.desktop-mode{
      display: none;

  }
}
@media (max-width: 767px) {
  #w3lDemoBar.w3l-demo-bar a.tablet-mode{
      display: none;

  }
}
@media (max-width: 568px) {
  #w3lDemoBar.w3l-demo-bar a.mobile-mode{
      display: none;
  }
  #w3lDemoBar.w3l-demo-bar .responsive-icons {
      margin-top: 0px;
      border-top: none;
      padding-top: 0px;
  }
  #right-sidebar,.pull-right {
      width: 90px;
  }
  #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile{
      margin-bottom: 0;
  }
}
</style>



<!-- Topmenu-4 block -->
<section class="w3l-top-menu-4">
    <header class="top-menu4">
        <div class="wrapper">
            <div class="d-grid align-topmenu4">
                <div class="top-menu4-left d-grid align-items-menu4">
                    <ul class="social-icons">
                        <li class="facebook"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                        <li class="twitter"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                        <li class="instagram"><a href="#instagram"><span class="fa fa-instagram"></span></a></li>
                        <li class="google-plus"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                        <li class="linkedin"><a href="#linkedin"><span class="fa fa-linkedin"></span></a></li>
                    </ul>
                </div>
                <div class="top-menu4-right">
                    <ul class="top-menu-right">
                        <li><a href="tel:+404 11-22-89"> <span class="fa fa-phone"> </span>+(12) 502 45-67-89</a> <span>Call us today</span> </li>
                        <li><a href="mailto:mail@estate.com"> <span class="fa fa-envelope-open-o"> </span>mail@estate.com</a> <span>Email us at</span> </li>
                        <li><p> <span class="fa fa-clock-o"> </span>09am- 12pm</p> <span>Open everyday</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
</section>
<!-- /Topmenu-4 block -->
<!-- Headers-4 block -->
<section class="w3l-header-4">
    <header id="headers4-block">
        <div class="wrapper">
            <div class="d-grid nav-mobile-block header-align">
                <div class="logo">
                    <a class="brand-logo" href="index.html"><span>Morden Estate</span></a>
                    <!-- if logo is image enable this   
                    <a class="brand-logo" href="#index.html">
                        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                    </a> -->
                </div>
                <input type="checkbox" id="nav" />
                <label class="nav" for="nav"></label>
                <nav>
                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop">
                    <ul class="menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li>
                            <!-- sumenu Drop Down -->
                            <label for="drop-3" class="toggle toogle-3">Pages <span class="angle-dropdown"
                                    aria-hidden="true"></span>
                            </label>
                            <a href="#pages">Pages <span class="angle-dropdown" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-3">

                            <ul>
                                <li><a href="team.html" class="drop-text">Our Team</a></li>
                                <li><a href="properties.html" class="drop-text">Properties</a></li>
                                <li><a href="pricing.html" class="drop-text">Pricing</a></li>
                                <li>
                                    <label for="drop-6" class="toggle toogle-6">Submenu <span class="angle-dropdown-sub"
                                            aria-hidden="true"></span>
                                    </label>
                                    <a href="#submenu">Submenu <span class="angle-dropdown-sub" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-6">

                                    <ul>
                                        <li><a href="error.html" class="drop-text">404</a></li>
                                        <li><a href="coming-soon.html" class="drop-text">Coming soon</a></li>
                                        <li><a href="login.html" class="drop-text">Login</a></li>
                                        <li><a href="signup.html" class="drop-text">Register</a></li>
                                    </ul>
                                </li>
                                <li><a href="search-results.html" class="drop-text">Search results</a></li>
                                <li><a href="timeline.html" class="drop-text">Timeline</a></li>
                                <li><a href="faq.html" class="drop-text">Faq</a></li>
                                <li><a href="email-template.html" class="drop-text">Email Template</a></li>
                            </ul>
                        </li>
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-4" class="toggle toogle-4">Blog <span class="angle-dropdown"
                                    aria-hidden="true"></span>
                            </label>
                            <a href="#blog">Blog <span class="angle-dropdown" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-4">

                            <ul>
                                <li><a href="blog.html" class="drop-text">Blog</a></li>
                                <li><a href="blog-single.html" class="drop-text">Blog Details</a></li>
                            </ul>
                        </li>
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-5" class="toggle toogle-5">Single pages <span class="angle-dropdown"
                                    aria-hidden="true"></span>
                            </label>
                            <a href="#shop">Single pages<span class="angle-dropdown" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-5">

                            <ul>
                                <li><a href="properties-single.html" class="drop-text">Properties Single</a></li>
                                <li><a href="team-single.html" class="drop-text">Team Single</a></li>
                                <li><a href="blog-single.html" class="drop-text">Blog Single</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</section>
<!-- Headers-4 block -->
<section class="w3l-breadcrumns">
    <div class="wrapper">
        <ul>    
            <li><a href="index.html">Home</a> <span class="fa fa-angle-double-right"></span></li>
            <li>Agent single</li>
        </ul>
    </div>
</section>
<section class="w3l-text-22">
	<!-- text-22 -->
	<div class="text">
		<div class="wrapper">
			<h3 class="heading-title">Team member</h3>
			<div class="text-txt">
				<h3 class="no-margin">Smith Roy</h3>
				<p class="sm-text-28 margin-bottom">Commercial broker | Real estate</p>
				<div class="two-columns">
					<div class="left-column">
						<img src="assets/images/team1.jpg" class="img-responsive">
					</div>
					<div class="right-column">
						<h6><a href="#team" class="title-team-28">My Information</a></h6>
						<p class="sm-text-28">Commercial broker | Real estate</p>
						<ul class="team-details">
							<li><a href="tel:+7-800-999-800"><span class="fa fa-phone"></span><strong>Phone:</strong></strong> +(21)-255-999-8888</a></li>
							<li><a href="tel:+7-800-999-800"><span class="fa fa-mobile"></span><strong>Mobile:</strong> +(21)-255-999-8888</a></li>
							<li><a href="mailto:agent1@mail.com" class="mail"><span class="fa fa-envelope-open-o"></span><strong>Gmail:</strong> agent1@mail.com</a></li>
							<li><a href="#skype" class="mail"><span class="fa fa-skype"></span><strong>Skypeid:</strong> agent1-skype-id</a></li>
							<li><p class="address"><span class="fa fa-map-marker"></span><strong>Address:</strong> #32841 block, #221DRS Real estate business building, UK. </p></li>
						</ul>
						<div class="social-teams">
							<a href="#team" class="facebook"><span class="fa fa-facebook"></span></a>
							<a href="#team" class="twitter"><span class="fa fa-twitter"></span></a>
							<a href="#team" class="pinterest"><span class="fa fa-pinterest"></span></a>
						</div>
					</div>
				</div>
				<div class="details-grid">
					<div class="column">
						<h4><span class="fa fa-clock-o"></span> Daily schedule</h4>
						<p>9am to 8pm</p>
					</div>
					<div class="column">
						<h4><span class="fa fa-language"></span> Languages</h4>
						<p>English, french.</p>
					</div>
					<div class="column">
						<h4><span class="fa fa-id-card-o"></span> Agent license</h4>
						<p>AGNT12345566</p>
					</div>
				</div>
				<div class="team-single-details">
					<h3>About Me</h3>
					<p>Praesent posuere erat eget posuere molestie. Cras id sapien fermentum, ornare dolor vel, imperdiet urna.
						 Sed ornare molestie ipsum id mollis. Maecenas lacinia magna sit amet nisi gravida placerat. Maecenas
						  lacinia magna sit amet nisi gravida placerat. Donec tincidunt blandit dignissim. Nulla tempus nunc
						   in ipsum aliquam, vitae vehicula purus dignissim</p>
					<p> Maecenas lacinia magna sit amet nisi gravida placerat. Donec tincidunt blandit dignissim. Nulla tempus
						 nunc in ipsum aliquam, vitae vehicula purus dignissim</p>
				</div>
				<div class="team-single-details">
					<h3>Contact Me</h3>
					<form action="#" method="post" class="">
						<div class="main-input">
							<input type="text" placeholder="Your name" class="contact-input" required="">
							<input type="email" placeholder="Your email id" class="contact-input" required="">
						</div>
						<textarea class="contact-textarea" placeholder="Your message here"></textarea>
						<a href="#submit" class="actionbg btn">Send message</a>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //text-22 -->
</section>
<!---728x90--->

<!-- footer-29 block -->
<section class="w3l-footer-29-main">
    <div class="footer-29">
        <div class="wrapper">
            <div class="d-grid grid-col-4 footer-top-29">
                <div class="footer-list-29 footer-1">
                    <h6 class="footer-title-29">Contact Us</h6>
                    <ul>
                        <li><p><span class="fa fa-map-marker"></span> Estate Business, #32841 block, #221DRS Real estate business building, UK.</p></li>
                        <li><a href="tel:+7-800-999-800"><span class="fa fa-phone"></span> +(21)-255-999-8888</a></li>
                        <li><a href="mailto:estate-mail@support.com" class="mail"><span class="fa fa-envelope-open-o"></span> estate-mail@support.com</a></li>
                    </ul>
                    <div class="main-social-footer-29">
                        <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                        <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                        <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                        <a href="#google-plus" class="google-plus"><span class="fa fa-google-plus"></span></a>
                        <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                    </div>
                </div>
                <div class="footer-list-29 footer-2">
                    <ul>
                        <h6 class="footer-title-29">Category</h6>
                        <li><a href="#link">Apartments (15)</a></li>
                        <li><a href="#link">Houses (120)</a></li>
                        <li><a href="#link">Villas (19)</a></li>
                        <li><a href="#link">Retail (04)</a></li>
                        <li><a href="#link">Properties (5)</a></li>
                    </ul>
                </div>
                <div class="footer-list-29 footer-3">
                    <div class="properties">
                        <h6 class="footer-title-29">Latest Properties</h6>
                        <a href="blog-single.html"><img src="assets/images/blog-3.jpg" class="img-responsive" alt="" /><p>Park avenue apartment for sale<span>$210</span></p></a>
                        <a href="blog-single.html"><img src="assets/images/blog-2.jpg" class="img-responsive" alt="" /><p>Luxury Villa for rent<span>$450</span></p></a>
                        <a href="blog-single.html"><img src="assets/images/blog-4.jpg" class="img-responsive" alt="" /><p>Apartment for sale<span>$210</span></p></a>
                    </div>
                </div>
                <div class="footer-list-29 footer-4">
                    <ul>
                        <h6 class="footer-title-29">Quick Links</h6>
                        <li><a href="about.html">About company</a></li>
                        <li><a href="properties.html">Featured properties</a></li>
                        <li><a href="team.html">Professional Agents</a></li>
                        <li><a href="blog.html">Properties Blog</a></li>
                        <li><a href="contact.html">Get in touch</a></li>
                    </ul>
                </div>
            </div>
            <div class="d-grid grid-col-2 bottom-copies">
                    <p class="copy-footer-29">© 2019 Tenant. All rights reserved | Designed by <a href="https://w3layouts.com/">W3layouts</a></p>
                 <ul class="list-btm-29">
                        <li><a href="#link">Privacy policy</a></li>
                        <li><a href="#link">Terms of service</a></li>
                        <li>
                            <select name="carlist" form="carform">
                                <option value="Language">Language</option>
                                <option value="Language">Language 1</option>
                                <option value="Language">Language 2</option>
                                <option value="Language">Language 3</option>
                            </select>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
</section>
<!-- //footer-29 block -->

<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-angle-up"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
        }
        
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }
        </script>
    <!-- /move top -->


<div id = "v-w3layouts"></div><script>(function(v,d,o,ai){ai=d.createElement('script');ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, '../../../../../../../a.vdo.ai/core/v-w3layouts/vdo.ai.js');</script>
	</body>

<!-- Mirrored from demo.w3layouts.com/demosWTR/Freedom/07-04-2020/tenant-freedom-demo_Free/421164263/web/team-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Sep 2021 09:39:41 GMT -->
</html>