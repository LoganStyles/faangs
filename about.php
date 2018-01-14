<?php
require_once("incl/homaboutheader.php");
?>

</div>
<!-- //banner -->
<!-- modal -->

<!-- //modal -->
<!-- welcome -->

<div class="welcome">
    <div class="container">
        <div class="wthree-heading" id="about">
            <h2>THE FACE OF ANGELS #FAANGS</h2>
            <p>Face of Angels is an empowerment scheme,a platform designed to empower all upcoming/aspiring models with uniqueness. 
                Face of Angels is one of its kind with emphases on promoting photography, beauty, and fitness through the means of 
                cash prize reward for the best voted model.</p>
        </div>
        <div class="w3-welcome-grids">
            <div class="col-md-3 w3-welcome-grid">
                <div class="w3-welcome-grid-info">
                    <img class="img-responsive" src="images/3.jpg" alt="" />
                    <h4>BUSINESS PHOTO CONTEST</h4>
                    <p>Join the Face of Angels Business Photo Contest and get the chance to win $5000 Cash Prize</p>
                </div>
                <?php
                if (!isset($_SESSION['username'])) {
                    echo "<a style=\"text-decoration:none;\" href=\"registration.php\"><div align=\"center\" 
						style=\" margin-left:25PX; background:#414143; color:#FFC20F; padding:10px; 
						border: 1px solid #414143; border-radius:10px; width:200px; text-align:center;
						font-size:20px; font-weight:bold;\"> JOIN CONTEST</div></a>";
                } else {
                    echo "";
                }
                ?>
            </div>
            <div class="col-md-3 w3-welcome-grid">
                <div class="w3-welcome-grid-info">
                    <img class="img-responsive" src="images/4.jpg" alt="" />
                    <h4>DATING PHOTO CONTEST</h4>
                    <p>Join the Face of Angels Dating Photo Contest and get the chance to win $5000 Cash Prize.</p>
                </div>
<?php
if (!isset($_SESSION['username'])) {
    echo "<a style=\"text-decoration:none;\" href=\"registration.php\"><div align=\"center\" style=\" 
	margin-top:20PX; margin-left:25PX; background:#FFC20F; color:#414143; padding:10px;
	border: 1px solid #414143; border-radius:10px; width:200px; text-align:center; 
	font-size:20px; font-weight:bold;\">JOIN CONTEST</div></a>";
} else {
    echo "";
}
?>
            </div>
            <div class="col-md-3 w3-welcome-grid">
                <div class="w3-welcome-grid-info">
                    <img class="img-responsive" src="images/5.jpg" alt="" />
                    <h4>SOCIAL PHOTO CONTEST</h4>
                    <p>Join the Face of Angels Social Photo Contest and get the chance to win $5000 Cash Prize</p>
                </div>
<?php
if (!isset($_SESSION['username'])) {
    echo "<a style=\"text-decoration:none;\" href=\"registration.php\">
	<div align=\"center\" style=\" margin-top:20px; margin-left:25PX; background:#414143; 
        color:#FFC20F; padding:10px; border: 1px solid #414143; border-radius:10px; width:200px;
        text-align:center; font-size:20px; font-weight:bold;\">JOIN CONTEST</div></a>";
} else {
    echo "";
}
?>
            </div>
            <div class="col-md-3 w3-welcome-grid">
                <div class="w3-welcome-grid-info">
                    <img class="img-responsive" src="images/6.jpg" alt="" />
                    <h4>RELIGIOUS PHOTO CONTEST</h4>
                    <p>Join the Face of Angels Religious Photo Contest and get the chance to win $5000 Cash Prize</p>
                </div>
                <?php
                if (!isset($_SESSION['username'])) {
                    echo "<a style=\"text-decoration:none;\" href=\"registration.php\">
			<div align=\"center\" style=\" margin-top:10PX; margin-left:25PX; 
			background:#FFC20F; color:#414143; padding:10px; border:
			1px solid #414143; border-radius:10px; width:200px; 
			text-align:center; font-size:20px; font-weight:bold;\">JOIN CONTEST </div></a>";
                } else {
                    echo "";
                }
                ?>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="wthree-heading" id="vision" style="margin-top: 2%;">
            <h3>Our Vision</h3>
            <p>To be the source of motivation to all who aspire high in the world of Fashion,
            Beauty, and Photography.By placing all in the hall of fame</p>
        </div>
    </div>
</div>
<!-- //welcome -->
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
    $(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear' 
         };
         */
        $().UItoTop({easingType: 'easeOutQuart'});
    });
</script>
<!-- //here ends scrolling icon -->
</body>	
</html>