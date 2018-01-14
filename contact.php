<?php
require_once("incl/homaboutheader.php");

?>

		
	</div>
	<!-- //banner -->
	<!-- modal -->
	
	<!-- //modal -->
	<!-- welcome -->
	
	<div class="contact" id="contact">
		<div class="container">
			<div class="wthree-heading">
				<h3>Contact Us</h3>
				<p>For inquiry,advert request,suggestion,comment,questions or any need.reach our team by filling this form
				</p>
			</div>
			<div class="address">
				<div class="col-sm-4 address-grids">
					<h4>Address :</h4>
					<p>BRONXVILLE NY 10708<br>
						<span>24 ETON ROAD</span>
						NEW YORK USA.
					</p>	
				</div>
				<div class="col-sm-4 address-grids">
					<h4>Phone :</h4>
					<p>+13472644062</p>
					
				</div>
				<div class="col-sm-4 address-grids">
					<h4>Email :</h4>
					<p> info@faangs.com</p>
					<p> support@faangs.com</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="contact-form">
				<h4>Contact Form</h4>
				<form action="#" method="post">
					<div class="fields-grid">
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="fname" required="">
							<label>Full Name</label>
							<span></span>
						</div>
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="phone" required=""> 
							<label>Phone</label>
							<span></span>
						</div>
						<div class="styled-input">
							<input type="email" name="email" required=""> 
							<label>Email</label>
							<span></span>
						</div> 
						<div class="styled-input">
							<input type="text" name="subject" required="">
							<label>Subject</label>
							<span></span>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="styled-input textarea-grid">
						<textarea name="message" required=""></textarea>
						<label>Message</label>
						<span></span>
					</div>	 
					<input type="submit" name="submit" value="SEND">
				</form>
			</div>
			<!--<div class="agileits-w3layouts-map">
				<h4>Location</h4>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783" style="border:0" allowfullscreen></iframe>
			</div>-->
		</div>
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