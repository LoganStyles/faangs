<!DOCTYPE html>
<html lang="en">
<head>
	<title>FAANGS - Face of Angels- Photo Contest | Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Go Taxi Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<link href='css/simplelightbox.min.css' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/button.css" type="text/css" media="all" />
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script> 
</head>
									
<body>
	<!-- banner -->
	<div class="jarallax" style="margin-top:0px;border-style:solid;padding:0px">
		
		
		<div class="w3-header-bottom">
			<div class="w3layouts-logo">
				<h1>
					<a href="index.php"><img src="images/logo.png"></a>
				</h1>
			</div>
			<div class="top-nav">
						<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li class="first-list"><a href="index.php">Home</a></li>
									<li><a href="about.php">About us</a></li>
									<li><a href="contest.php?category=general">Contestants</a></li>
									<li><a href="contact.php">Contact us</a></li>
									<li><a href="part.php">HOW IT WORKS</a></li>
									
									
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		
			</div>
			<div class="agileinfo-social-grids">
			
				<ul>
					<?php
						
					if(isset($_SESSION['username'])){
						echo "<li><a href=\"participate.php\" >Profile</a></li>";
						echo "<li><a href=\"incl/outs.php\" >Sign-Out</a></li>";
					}
					if(isset($_SESSION['admin'])){
						echo "<li><a href=\"adminpage.php\" >Dashboard</a></li>";
						echo "<li><a href=\"incl/outs.php\" >Sign-Out</a></li>";
					
					}
					ELSE IF(!isset($_SESSION['username'])){
					echo "<li><a href=\"login.php\" >Login</a></li>";
					echo "<li><a href=\"registration.php\" >Sign-up</a></li>";
						}
					?>
					
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>