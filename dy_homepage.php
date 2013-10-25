<?php require('php/studentinfo.php') ?>

<!DOCTYPE html>
<!--[if IE 8]> 				 
	<html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="en" > 
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>GMU | Art and Design Senior Show 2013</title>
 	<link rel="stylesheet" href="css/foundation.css">
 	<link rel="stylesheet" href="css/main.css">
 	<link rel="stylesheet" type="text/css" href="css/icons.css" />
 	<script src="js/vendor/custom.modernizr.js"></script>
 	<script type="text/javascript" src="//use.typekit.net/vvp1wxb.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
	<body>
		<section id="wrapper">
			<header id="homeBanner">
				<div id="bannerText" class="header-info">
					<h3>Fly me to the moon</h3>
					<h1>ART + DESIGN SENIOR SHOW</h1>
					<h3>Let me play among the stars.</h3>
					<div class="down-arrow"></div>
				</div>
			</header>
			<section class="about"> 
				<h2>About</h2>
					<ul class="small-block-grid-1 large-block-grid-3">
						<li><div class="about-circle"></div><span class="circle-subtitle">Whadup Dawg</span></li>
						<li><div class="about-circle"></div><span class="circle-subtitle">Whadup Kat</span></li>
						<li><div class="about-circle"></div><span class="circle-subtitle">Whadup Phish</span></li>
					</ul>
					<p>Maecenas consequat eleifend odio, a lobortis risus laoreet vel. Sed faucibus metus at ultricies sollicitudin. Suspendisse potenti. Vestibulum volutpat molestie sapien. Aenean euismod sed sapien eu porta. Aliquam neque metus, consectetur vel est sed, condimentum semper tortor. Donec hendrerit viverra ornare.</p>
			</section>
			<section class="details">
				<h2>Details</h2>
				<section class="small-block-grid-1 large-block-grid-2"></section>
				</section>
			<section class="map">
				<h2>Map</h2>
			</section>
			<section class="students">
				<h2>Students</h2>
					<ul class="small-block-grid-1 large-block-grid-3">

					<!-- PHP Loops thru the studentinfo.csv file -->
					<?php
						foreach($student_info as $value){
						  $name = $value["name"];
						  $image_loc = $value["image_loc"];

						  	## EDIT HERE
						  	## This is the <li> that is loop over and over 
						    echo '	<li>';
						    echo "		<div class='student-circle'></div>";
						    echo "		<span class='circle-name'>$name</span>";
						    echo '	</li>';
						}
					?>

					</ul>
			</section>
			<section class="quote">
				<blockquote>"Through space the universe encompasses and swallows me up like an atom; through thought I comprehend the world."</blockquote>
			</section>
			<footer>
				<h1>#	graduationbitchesss</h1>
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
    $(document).foundation();
  </script>
</html>
