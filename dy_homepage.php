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
 	<link rel="stylesheet" href="css/foundation.css">
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
		<section id="wrapper">
			<header id="homeBanner">
				<div id="bannerText" class="header-info">
					<h3>George Mason University Fall 2013</h3>
					<h1>ART + DESIGN SENIOR SHOW</h1>
					<h3>6pm-10pm Friday, December 13th Art & Design Building</h3>
				</div>
				<div class="down-arrow"></div>

			</header>
			<section class="about"> 
				<h2>About</h2>
					<ul class="small-block-grid-1 large-block-grid-3">
						<li><div class="about-circle-food"></div><span class="circle-subtitle">Free Food</span></li>
						<li><div class="about-circle-projects"></div><span class="circle-subtitle">Forty Projects</span></li>
						<li><div class="about-circle-parking"></div><span class="circle-subtitle">Free Parking</span></li>
					</ul>
					<p>Join us! We’re thrilled to share the culminating work of our college careers with you. Explore the cultural roots of minimalism, wrestle with the hidden world of homelessness, and learn about the nuances of beer and wine. 
					Enjoy complimentary refreshments, convenient parking, and the opportunity to meet the artists behind the projects.
					Free parking will be available in lots A and K for the closing reception on December 13th. If you can’t make the official reception, stop by beforehand. Our show runs from Monday the 9th through Friday the 13th. </p>

			</section>
			<section class="map">
				<h2>Map</h2>
			</section>
			<section class="students">
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
						$artiststatement = $value["artiststatement"];	
						$partyDonation = $value["partyDonation"];	
						$exibitDontion = $value["exibitDontion"];	
						$posterPayment = $value["posterPayment"];

						  	## EDIT HERE
						  	## This is the <li> that is loop over and over 
						    echo '	<li>';
						    echo "		<a href='#' data-largesrc='images/1.jpg' data-title='$name' data-description='$artiststatement'>";
						    echo "		<img src='images/thumbs/2.jpg' alt='img02'/> </a> <p>  </p>";
						    echo '	</li>';
						}
					?> 
					</ul>
			</section>
			<section class="quote">
				<span class="quote-text">"Through space the universe encompasses and swallows me up like an atom; through thought I comprehend the world."</span>
			</section>

			<section id="contact">
				<p class="contact-info">
				info@masonseniorshow.com</br>
				(703) 993-8898</br>
				Art and Design Building</br>
				4400 University Drive Fairfax, VA 22030 </br>
				</p>
			</section>
			<footer>
				This site has been made possible by: 
			</footer>
		<!--wrapper close-->
		</section>
		<!--wrapper close-->
	</body>
  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script> 
  
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
