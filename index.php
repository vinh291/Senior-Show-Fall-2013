<?php require('php/studentinfo.php') ?>

<!DOCTYPE html>
<!--[if IE 8]> 				 
	<html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="en" > 
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<title>GMU | Art and Design Senior Show 2013</title>
	<!-- facebook meta tags -->
	<meta property="og:site_name" content="GMU Fall 2013 Art & Design Senior Show"/>
	<meta property="og:title" content="GMU Fall 2013 Art & Design Show"/>
	<meta property="og:description" content="George Mason University School of Art presents the Fall 2013 Art & Design Senior Show. Showing December 9 - 13 with the closing party on Friday, 6pm - 10pm."/>
	<meta property="og:image" content="img/facebook.jpg">
	<meta property="og:url" content="http://fall2013.masonseniorshow.com/">
	<meta property="og:type" content="Website"/>
<!-- stylesheets -->
 	<link rel="stylesheet" href="css/foundation.css">
 	 	<link rel="stylesheet" type="text/css" href="css/sidebar/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/sidebar/icons.css" />
		<link rel="stylesheet" type="text/css" href="css/sidebar/component.css" />
 	<link rel="stylesheet" href="css/main.css">
 	<!-- Drop down style -->
	<link rel="stylesheet" href="css/component.css" /> 
		<script src="js/modernizr.custom.js"></script>

 	<!-- <script src="js/vendor/custom.modernizr.js"></script> -->
 	<script type="text/javascript" src="//use.typekit.net/vvp1wxb.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<script src="js/jq.js"></script>
</head>
	<body>
	<!-- google analytics -->
	<?php include_once("php/analyticstracking.php") ?>

				<div id="st-container" class="st-container">
		    <!-- content push wrapper -->
		    <div class="st-pusher">
			    <nav class="st-menu st-effect-8" id="menu-8">
					<h2 class="icon">Mason Senior<br/>Show 2013</h2>
					<ul id="menu-list">
						<li><a id="nav1" href="#">About</a></li>
						<li><a id="nav2" href="#details">Details</a></li>
						<li><a id="nav-item3" href="#map">Map</a></li>
						<li><a id="nav-item4" href="#students">Students</a></li>
						<li><a id="nav-item5" href="#contact">Questions?</a></li>
					</ul>
				</nav>
		 
<div class="st-content">
<div id="st-trigger-effects" class="nav-menu-btn"><button data-effect="st-effect-8">Menu</button></div>
    <div class="st-content-inner">
        <!-- the content -->
		<section id="wrapper">
			<header id="homeBanner">
				<div class="header-info">
					<div id="bannerText">
						<h3>George Mason University Fall 2013</h3>
						<h1>ART + DESIGN</br> SENIOR SHOW</h1>
						<h4>Showing December 9 - 13</br>
					Closing Reception on Friday December 13, 6pm - 10pm
					</br>Art &amp; Design Building</h4>
					<div class="down-arrow floating"></div>
					</div>
				</div>

			</header>
			<section class="about"> 
			<a id="details"></a>
				<h2>Details</h2>
					<ul class="small-block-grid-1 large-block-grid-3">
						<li><div class="about-circle-food"></div><span class="circle-subtitle">Free Food</span></li>
						<li><div class="about-circle-projects"></div><span class="circle-subtitle">Forty Projects</span></li>
						<li><div class="about-circle-parking"></div><span class="circle-subtitle">Free Parking</span></li>
					</ul>
					<p>Join us! We’re thrilled to share the culminating work of our college careers with you. Explore the cultural roots of minimalism, wrestle with the hidden world of homelessness, and learn about the nuances of beer and wine. 
					Enjoy complimentary refreshments, convenient parking, and the opportunity to meet the artists behind the projects.
					If you can’t make the official reception, stop by beforehand. <span class="bold">Our show runs from Monday the 9th through Friday the 13th.</span>
					Free parking will be available in lots A and K for the closing reception on December 13th. </p>

			</section>
			<a id="map"></a>
			<section class="map">
			</section>
			<section class="students">
			<a id="students"></a>
				<h2>Students</h2>
					
					<ul id="og-grid" class="og-grid">

					<!-- PHP Loops thru the studentinfo.csv file -->
					<?php
						foreach($student_info as $value){
						$name = $value["name"];	
						$major = $value["major"];	
						$gmuemail = $value["gmuemail"];	
						$personalemail = $value["personalemail"];	
						$website = $value["website"];	
						$picture = $value["picture"];
						$artiststatement = htmlentities($value["artiststatement"]);	
						$partyDonation = $value["partyDonation"];	
						$exibitDontion = $value["exibitDontion"];	
						$posterPayment = $value["posterPayment"];

						  	## EDIT HERE
						  	## This is the <li> that is loop over and over 
						    echo '	<li>';
						    echo "	<p style='color:white;'> $name </p>";
						    echo "		<a href='#' data-largesrc='img/photo.jpg' data-title='$name' data-description='$artiststatement'>";
						    echo "		<img src='img/photo2.jpg' alt='img02'/> </a>";
						    echo '	</li>';
						}
					?> 
					</ul>
			</section>
			<section class="quote">
				<span class="quote-text">"Through space the universe encompasses and swallows me up like an atom; through thought I comprehend the world."</span>
				<h6>Blaise Pascal</h6>
			</section>

			<section id="contact">
			<a id="contact"></a>
				<p class="contact-info">
				info@masonseniorshow.com</br>
				(703) 993-8898</br>
				Art and Design Building</br>
				4400 University Drive Fairfax, VA 22030 </br>
				</p>
			</section>
			<footer>
				<span class="credit">This site has been made possible by these amazing people:</span>
				<p></p>
				<ul>
				    <li>Vinh Le</li>
				    <li>Chris Amador</li>
				    <li>Katie Strylowski</li>
				    <li>Will Ward</li>
				    <li>George Bartz</li>
				    <li>Henry Harding</li>
				    <li>Klare Frank</li>
				    <li>Joseph Abrahams</li>
				</ul>
				<a href="http://www.gmu.edu/"><img src="img/gmu.png" alt=""></a>
			</footer>
		<!--wrapper close-->
		</section>
		<!--wrapper close-->
				           </div><!-- /st-content-inner -->
        </div><!-- /st-content -->
    </div><!-- /st-pusher -->
</div><!-- /st-container -->
	</body>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  	<script>
		$(document).ready(function() {
		    var bHeight = $(window).height();
			$('#homeBanner').css('height', bHeight);
		});

		// for the window resize
		$(window).resize(function() {
			var bHeight = $(window).height();
			$('#homeBanner').css('height', bHeight);
		});		
	</script>
  <script src="js/sidebar/classie.js"></script>
		<script src="js/sidebar/sidebarEffects.js"></script>
  
  <script src="js/foundation.min.js"></script>
  <script src="js/super.js"></script>

  <script>
    jQuery(document).foundation();
  </script>
	
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/grid.js"></script>
<script>
	$(function() {
		Grid.init();
	});
</script>




</html>
