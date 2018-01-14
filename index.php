<?php
										if(isset($_POST["submit"]))
										{
											//index();
											$fname=test_input($_POST['fname']);
											$email=test_input($_POST['email']);
											$header="From".$email;
											$subject=test_input($_POST['subject']);
											$phone=test_input($_POST['phone']);
											$message=test_input($_POST['message']);
											$admin_email='support@faangs.com';
											$message=wordwrap($message);
											//$headers = 'From:okomemmanuel1@gmail.com' . "\r\n";
											 //send email
														  mail($admin_email, $subject, $message,$header);
														  $mail->sendmail("$email","$message","$subject",$header);
														  //Email response
														  $nam="thank you for contacting us";
												echo "<div class=\"alert alert-success\">";
												echo "	<strong>";
												echo 	"{$nam}";
												echo "	</strong>";
												echo "</div>";
												header('Refresh:2; url=index.php');
									}
									else
										echo "";
				?>
<?php
ob_start();
	require_once("incl/cons.php");
	require_once("incl/function.php");
	require_once("incl/mail2.php");
	session_start();
	cont();
?>
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
	<link rel="stylesheet" href="css/index.css" type="text/css" media="all" />
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
	<div class="banner jarallax">
		<!--<div class="header">
			<div class="header-left">
				<div class="agileinfo-phone">
					<p><i class="fa fa-volume-control-phone" aria-hidden="true"></i>+13472644062</p>
				</div>
				<div class="agileinfo-phone agileinfo-map">
					<p><i class="fa fa-map-marker" aria-hidden="true"></i> 24 ETON ROAD BRONXVILLE NY 10708 NEW YORK USA.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>--->
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
									<li class="first-list"><a class="active" href="index.php">Home</a></li>
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
					if(isset($_SESSION['username'])&&($_SESSION['status']==2)){
						echo "<li><a href=\"chat2.php?user={$_SESSION['username']}\" >Profile</a></li>";
						echo "<li><a href=\"incl/outs.php\" >Sign-Out</a></li>";
					}
					if(isset($_SESSION['username'])&&($_SESSION['status']==1)){
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
		<div class="banner-info">
			<div class="container">
				<div class="w3-banner-info">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider4">
								<li>
									<div class="w3layouts-banner-info">
										<h3>Share your <br><span>PHOTOS</span><br>Online</h3>
										<p>BECOME THE FACE OF ANGELS</p>
										<div class="w3ls-button">
												<!--<a href="#" data-toggle="modal" data-target="#myModal">Participate Now</a>-->
										<script type="text/javascript">
												$(window).on('load',function(){
											$('#myModal').modal('show');
											$('#myModal').css({"height":"38em"});
											//$("#vip").fadeIn(3000);
											var slideInd=0;
	slider2();
	function slider2(){
		var i;
	  var right2 = $(".islide");
	for (i = 0; i < right2.length; i++) {
      right2[i].style.display = "none"; 
  }
	slideInd++;
	if (slideInd > right2.length) {slideInd = 1}
		var element3 = right2.eq(slideInd-1);
				element3.fadeIn(3000);
	setTimeout(slider2,5000);
	}
												});
												</script>
											<a href="login.php">Participate Now</a>
										</div>
									</div>
								</li>
								<li>
									<div class="w3layouts-banner-info">
										<h3>Become a <BR><span>Contestant</span><br>Now</h3>
										<p>$5000 CASH PRIZE TO BE WON FOR HIGHEST VOTE</p>
										<div class="w3ls-button">
											<a href="login.php">Contest Now</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
									<script>
										// You can also use "$(window).load(function() {"
										$(function () {
										  // Slideshow 4
										  $("#slider4").responsiveSlides({
											auto: true,
											pager:true,
											nav:false,
											speed: 400,
											namespace: "callbacks",
											before: function () {
											  $('.events').append("<li>before event fired.</li>");
											},
											after: function () {
											  $('.events').append("<li>after event fired.</li>");
											}
										  });
										});
									 </script>
									<!--banner Slider starts Here-->
					</div>
				</div>
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					<h4 class="modal-title" style="text-align:center;">TOP MODEL</h4>
				</div> 
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<?PHP
								$query4="select * from vip  order by rand()";
											$res4=mysql_query($query4);
												if(mysql_num_rows($res4)>0){
													while($res41=mysql_fetch_array($res4)){
													echo"		<a href=\"chat2.php?user={$res41['username']}\"><img src=\"vip/{$res41['image']}\" class=\"islide\"  height=400/></a>	";	
													}
												}
						?>
					<?php

				echo"	<p id=\"vip\" style=\"text-align:center;font-weight:bold;font-size:2em;\"><a href=\"modelg.php\">Book models</a></p>";
					
					?>
					</div>
				</div>
			</div>
		</div>
	</div>
				<div class="row">
						<div class="col-md-12 col-md-offset-1" style="font-weight:bold;font-size:3em;color:#FFC20F;margin-top:1em; ">
						 <?PHP require_once("incl/timer.php");?>
						</div>
					</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- modal -->
	<!-- //modal -->
	<!-- welcome -->
	<!-- //contact -->
	<!-- footer -->
		<footer>
			<?php
						include("incl/footer.php");
						ob_end_flush();
						?>
		</footer>
	<!-- //footer -->
	<script src="js/responsiveslides.min.js"></script>
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			//$("p #vip").fadeIn(3000);
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
	var slideIndex=0;
	slider();
	function slider(){
		var i;
	  // var right = document.getElementsByClassName("rightcl");
	  var right = $(".rightcl");
	for (i = 0; i < right.length; i++) {
      right[i].style.display = "none"; 
  }
	slideIndex++;
	if (slideIndex > right.length) {slideIndex = 1}
	///right[slideIndex-1].style.display = "block"; 
		var element2 = right.eq(slideIndex-1);
				element2.fadeIn(3000);
	setTimeout(slider,5000);
	}
	</script>
	<!-- //here ends scrolling icon -->
</body>	
</html>