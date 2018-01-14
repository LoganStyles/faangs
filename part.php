<?php
require_once("incl/homaboutheader.php");

?>

		
	</div>
	<!-- //banner -->
	<!-- modal -->
	
	<!-- //modal -->
	<!-- welcome -->
	
	<div class="about-bottom jarallax" id="participate">
		<!-- container -->
		<div class="container">
			<div class="wthree-heading about-heading">
				<h3>HOW TO PARTICIPATE</h3>
				<p>To be a participant you will register and activate your account with the listed packages then you will be able to upload your unique photos and campaign for public votes. At the end of every contest (3months) the model with the highest votes will be rewarded with cash prize of $5000</p>
			</div>
			<div class="about-bottom-grids">
				<div class="col-md-6 about-bottom-left">
					<h4>OPEN A FREE ACCOUNT</h4>
					<p>Click on the Register now Button at the top of the Page or Contest Now to Open a Free Contestant Account, you will be required to fill in your details and upload a passport Photograph
					</p>
				</div>
				<div class="col-md-6 about-bottom-left about-bottom-right">
					<h4>CHOOSE CATEGORY & UPLOAD PHOTOS</h4>
					<p>Oce you are registered, you will recieve a Confirmation message in your mail box, you can Login and access your account to Choose a category and upload your Photos
					</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="about-bottom-grids w3ls-about-bottom-grids">
				<div class="col-md-6 about-bottom-left">
					<h4>BUY CREDITS TO GET VOTES / LIKES</h4>
					<p>You are now live, other members can view your photos, but they cant Like or Vote for you, untill you have a Like / Vote Credit in your Account, you have to buy Credits which will be Converted to Like / Vote Credits 
					</p>
				</div>
				<div class="col-md-6 about-bottom-left about-bottom-right">
					<h4>WIN $5000 IF YOU HAVE HIGHEST LIKES/VOTES</h4>
					<p>Members can start liking your Photos and if yo have the Highest Likes / Vote you will be the winner of $5000 Cash Prize, if you are not a winner, yuou can convert your Like Credits to Cash, by requesting withdrawal
					</p>
				</div>
				<div class="clearfix"> </div>
			</div>
						<div class="col-md-12" style="margin-top:3em;">
							
							<a href="registration.php" class="btn2 btn2-default col-md-7  col-md-offset-3" style=" background:#414143 ; color:#FFf; padding:10px;">PARTICIPATE NOW</a>
						</div>
		</div>
		<!-- //container -->
	</div>
	<!-- about-bottom -->
	
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
	</script>
	<!-- //here ends scrolling icon -->
</body>	
</html>