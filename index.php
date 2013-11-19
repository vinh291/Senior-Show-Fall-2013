<?php require('php/studentinfo.php') ?>
<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>

<!DOCTYPE html>
<!--[if IE 8]> 				 
	<html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="en" > 
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<title>GMU | Art and Design Senior Show 2013</title>
 	<link rel="stylesheet" href="css/foundation.css">
 	<link rel="stylesheet" href="css/main.css">

<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
 	<!-- facebook meta tags -->
	<meta property="og:site_name" content="GMU Fall 2013 Art &amp; Design Senior Show"/>
	<meta property="og:title" content="GMU Fall 2013 Art &amp; Design Show"/>
	<meta property="og:description" content="George Mason University School of Art presents the Fall 2013 Art &amp; Design Senior Show. Showing December 9 - 13 with the closing party on Friday, 6pm - 10pm."/>
	<meta property="og:image" content="img/facebook.jpg">
	<meta property="og:url" content="http://fall2013.masonseniorshow.com/">
	<meta property="og:type" content="Website"/>

 	<!-- Drop down style -->
	<link rel="stylesheet" href="css/component.css" /> 
		<script src="js/modernizr.custom.js"></script>

<!-- typekit -->
 	<script type="text/javascript" src="//use.typekit.net/vvp1wxb.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<!-- mapbox -->
	<script src='//api.tiles.mapbox.com/mapbox.js/v1.4.2/mapbox.js'></script>
  	<link href='//api.tiles.mapbox.com/mapbox.js/v1.4.2/mapbox.css' rel='stylesheet' />

</head>
	<body>
	<!-- google analytics -->
	<?php include_once("php/analyticstracking.php") ?>

			<div class="topnav">
			<div class="large-12 columns">
				<div id="menu-button"><a name="menu-button"><img src='img/fi-list.svg' alt='Menu'  class='menu-icon' /></a></div>
			</div>
	</div>
	<div id="menu">
		<!-- <h2 class="icon">MENU</h2> -->
					<ul id="menu-list">
						<li><a class="scroll" href="#about">ABOUT</a></li>
						<li><a class="scroll" href="#details">DETAILS</a></li>
						<li><a class="scroll" href="#map">MAP</a></li>
						<li><a class="scroll" href="#students">STUDENTS</a></li>
						<li><a class="scroll" href="#contact">CONTACT</a></li>
					</ul>
	</div>
<div class="back-top"><a href="#top" class="scroll">Back to top &uarr;</a></div>
  
        <!-- the content -->

			<header id="about" name="about">
				<div class="header-info" id="top">
					<div id="bannerText">
						<h3>George Mason University Fall 2013</h3>
						<h1>ART + DESIGN SENIOR SHOW</h1>
						<h4>Showing December 9 - 13</br>
					Closing Reception on Friday December 13, 6pm - 10pm
					</br>Art &amp; Design Building</h4>
					</div>
				</div>
				<a href="#details" class="down-arrow floating"></a>

			</header>
			<section class="about" id="details" name="details"> 

				<h2>Details</h2>
				
					<ul class="small-block-grid-1 large-block-grid-3">
						<li><div class="about-circle-food"></div><span class="circle-subtitle">Free Food</span></li>
						<li><div class="about-circle-projects"></div><span class="circle-subtitle">Forty Projects</span></li>
						<li><div class="about-circle-parking"></div><span class="circle-subtitle">Free Parking</span></li>
					</ul>
					<p>Join us! We’re thrilled to share the culminating work of our college careers with you. Explore the cultural roots of minimalism, wrestle with the hidden world of homelessness, and learn about the nuances of beer and wine. 
					Enjoy complimentary refreshments, convenient parking, and the opportunity to meet the artists behind the projects.
					Free parking will be available in lots A and K for the closing reception on December 13th. Our show runs from Monday the 9th through Friday the 13th. </p>
			</section>
				<div id="map" class="map">
				</div>
			</section>
			<section class="students" id="students" name="students">
				
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
						    echo "	<p style='color:white;margin-bottom:5px;'> $name </p>";
						    echo "		<a class='face-box' href='$website' data-largesrc='$picture' data-title='$name' data-description='$artiststatement'>";
						    echo "		<img src='$picture' alt='Student Portrait'/> </a>";
						    echo '	</li>';
						}
					?> 
					</ul>
			</section>
			<section class="quote" id="quote" name="quote">
				
				<p class="quote-text">"Through space the universe encompasses and swallows me up like an atom; through thought I comprehend the world."</p>
				<span class="pascal">Blaise Pascal</span>
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
				<span class="credit">This site has been made possible by these amazing people:</span>
				<p></p>
				<ul>
				    <li>Vinh Le</li>
				    <li>Chris Amador</li>
				    <li>Katie Strylowski</li>
				    <li>Will Wiard</li>
				    <li>George Bartz</li>
				    <li>Henry Harding</li>
				    <li>Klare Frank</li>
				    <li>Joseph Abrahams</li>
				</ul>
				<a href="http://www.gmu.edu/"><img src="img/gmu.png" alt=""></a>
				
			</footer>
	</body>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  	

  	<script>

		$(document).ready(function() {   
		    var bHeight = $(window).height();
			$('#about').css('height', bHeight);
			$('.topnav').delay(800).animate({top:'0px'},400);
		});

		// for the window resize
		$(window).resize(function() {
			var bHeight = $(window).height();
			$('#about').css('height', bHeight);
		});


	</script>

	    <script type="text/javascript">
    	var j = 0;
			$('.topnav, .close, #menu a').click(function() {
			  $('#menu').slideToggle(500, function() {
			  });
			  $('body').toggleClass('open');
		   
			    if (j==0) {
			        $('#menu-button').html("X")
			        j=1
			    } else {
			        $('#menu-button').html("<img src='img/fi-list.svg' alt='Menu' class='menu-icon' />")
			        j=0
			    }
		    
			});

    </script>
  
  <script>
  $(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 500);
        return false;
      }
    }
  });
});
</script>

	
<script src="js/grid.js"></script>
<script>
	$(function() { Grid.init(); });
</script>


<!-- mapbox -->

<script type='text/javascript'>

	var map = L.mapbox.map('map', 'vinh291.ga199lnk', {zoomControl: false});
    // disable drag and zoom handlers
    // map.dragging.disable();
    // map.touchZoom.disable();
    map.doubleClickZoom.disable();
    map.scrollWheelZoom.disable();

</script>


</html>
