<!--
author: Ethredah
author URL: http://ethredah.github.io
-->

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="images/icon.png">
<title>Title</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coalition Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/googlemap.js"></script>
	<style type="text/css">
		.container {
			height: 450px;
		}
		#map {
			width: 100%;
			height: 100%;
			border: 1px solid blue;
		}
		#data, #allData {
			display: none;
		}
	</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			<div class="w3_agile_banner_top">
				<div class="agile_phone_mail">
					<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i>+60 199828462</li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@Companyonline.net">fadzilhafizi@gmail.com</a></li>
					</ul>
				</div>
			</div>
			<div class="agileits_w3layouts_banner_nav">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="index.php"><img src="images/nug.png" class="img-responsive"></a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav class="cl-effect-13" id="cl-effect-13">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Home</a></li>
							<li class="active"><a href="about.php">Google Map</a></li>
							<li><a href="portfolio.php">Contacts</a></li>
							<li><a href="blog.php">News and Info</a></li>
							<li><a href="contact.php">Donation Form</a></li>
						</ul>
						
					</nav>

					</div>
				</nav>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- about -->
	<div class="about-wthree">
			<h2 class="w3l_head w3l_head1">Google Maps API</h2>
				<div class="furniture">
					<div class="container">
		
		<?php 
			require 'education.php';
			$edu = new education;
			$coll = $edu->getCollegesBlankLatLng();
			$coll = json_encode($coll, true);
			echo '<div id="data">' . $coll . '</div>';

			$allData = $edu->getAllColleges();
			$allData = json_encode($allData, true);
			echo '<div id="allData">' . $allData . '</div>';			
		 ?>
		<div id="map"></div>
	</div>	
			</div>
			<!---Standards--->
			
		
	</div>
<!-- about -->
<!-- statistics -->
	<div class="statistics">

	
			</div>
<!-- //statistics -->
<!-- team -->
<div class="team">
		<div class="container">
			<h3 class="w3l_head w3l_head1">Our Team </h3>
			<div class="team-row">
				<div class="col-md-3 team-grids">
					<h5>Smithy</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipi est eligendi scing elit consectetur</p>
						<div class="social-icons1">
							<ul class="social-icons">
								<li><a href="#" class="icon icon-border facebook"></a></li>
								<li><a href="#" class="icon icon-border twitter"></a></li>
								<li><a href="#" class="icon icon-border instagram"></a></li>
								<li><a href="#" class="icon icon-border pinterest"></a></li>
							</ul>
						</div>
					<div class="team-img">
						<img src="images/t4.jpg" alt="">
					</div>
				</div>
				<div class="col-md-3 team-grids team-mdl">
					<h5>Aliquam</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipi est eligendi scing elit consectetur</p>
						<div class="social-icons1">
							<ul class="social-icons">
								<li><a href="#" class="icon icon-border facebook"></a></li>
								<li><a href="#" class="icon icon-border twitter"></a></li>
								<li><a href="#" class="icon icon-border instagram"></a></li>
								<li><a href="#" class="icon icon-border pinterest"></a></li>
							</ul>
						</div>
					<div class="team-img">
						<img src="images/t5.jpg" alt="">
					</div>
				</div>
				<div class="col-md-3 team-grids team-mdl1">
					<h5>Nyari</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipi est eligendi scing elit consectetur</p>
						<div class="social-icons1">
							<ul class="social-icons">
								<li><a href="#" class="icon icon-border facebook"></a></li>
								<li><a href="#" class="icon icon-border twitter"></a></li>
								<li><a href="#" class="icon icon-border instagram"></a></li>
								<li><a href="#" class="icon icon-border pinterest"></a></li>
							</ul>
						</div>
					<div class="team-img">
						<img src="images/t6.jpg" alt="">
					</div>
				</div>
				<div class="col-md-3 team-grids">
					<h5>Ipsum</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipi est eligendi scing elit consectetur</p>
						<div class="social-icons1">
							<ul class="social-icons">
								<li><a href="#" class="icon icon-border facebook"></a></li>
								<li><a href="#" class="icon icon-border twitter"></a></li>
								<li><a href="#" class="icon icon-border instagram"></a></li>
								<li><a href="#" class="icon icon-border pinterest"></a></li>
							</ul>
						</div>
					<div class="team-img">
						<img src="images/t7.jpg" alt="">
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->
<!-- footer -->


<div class="footer">
		<div class="col-md-4 footer-left-agileits">
			<h3>Address</h3>
				<ul>
					<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span>USIM, Nilai, Negeri Sembilan, Malaysia</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@Companyonline.net">fadzilhafizi@gmail.com.com</a></li>
					<!-- <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +(254) 754 235 535</li> -->
				</ul>
		</div>
		<div class="col-md-4 footer-left-agileinfo">
			<h3>Get In Touch</h3>
			<p>Follow us, Tweet us, Tag us, Pin us.</p>
				<ul class="social-icons">
					<li><a href="#" class="icon icon-border facebook"></a></li>
					<li><a href="#" class="icon icon-border twitter"></a></li>
					<li><a href="#" class="icon icon-border instagram"></a></li>
					<li><a href="#" class="icon icon-border pinterest"></a></li>
				</ul>
		</div>
		<div class="col-md-4 footer-left-w3-agileits">
			<h3>Newsletter</h3>
			<p>Subscribe to our newsletter and be the first to know what we are upto.</p>
				<form action="functions/subscribe.php" method="post">
					<input type="email" name="email" placeholder="Your email..." required="">
					<input type="submit" value=" " name="submit">
				</form>
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //footer --> 
	<div class="copyright-w3-agile">
		<div class="container">
			<p>© 2018 company | All rights reserved.</p>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- for bootstrap working -->
	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeMgEnQhVVIX1rxHNNnBa24hoUDEto0nU&callback=loadMap">
	</script>

	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>
