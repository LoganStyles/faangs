<?php
				require_once("incl/cons.php");
				session_start();
			
				cont();
						?>
<!DOCTYPE html>
<html lang="en">
	<?php
		require_once("incl/title.php");
	?>
	<link rel="stylesheet" href="css/form.css">
	<link rel="stylesheet" href="css/contest.css">
	<link rel="stylesheet" href="css/profile2.css">
<body>
		<!--header line-->
		<!--header line-->
		<?php
						include("incl/header3.php");
						include("incl/function.php");
						$query21="SELECT * from picture where username='{$_SESSION['username']}' limit 1";
				$result21 = mysql_query ($query21);
						?>
			
		
			<div class="clearfix"> </div>
		</div>
		<!--------header2-->
		
	<div class="container-fluild">
	
		<div class="row" style="margin:0px;">
			<div class="col-md-12" style="background:#fec303;font-size:2em;word-spacing:0.6em;">
			<marquee>Join the contest to become the next face of angel</marquee></div>
			</div>
		
		</div>
		
		<!---side nav-->
		<div class="row" style="margin:0;">
				<div class="col-md-3" style="background:#fec303;height:750px;margin-top:30px;">
					<div class="sidebar-nav">
					  <div class="navbar navbar-default" role="navigation">
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  
						</div>
						<div class="navbar-collapse collapse sidebar-navbar-collapse">
							<?php
							if(isset($_SESSION['username'])&&($_SESSION['status']==1)){
								 echo" <ul class=\"nav navbar-nav\" id=\"pro\">";
							$gen=$_SESSION['sex'];
								if(mysql_num_rows($result21)>0){
								$rec21=mysql_fetch_array($result21);
								$pic=$rec21['img'];
								//echo $pic;
								echo"		<li><img src=\"images/{$pic}\" class=\"img-rounded\" width=\"250px\" height=\"200px\"/></li>";
							}
								
							else{	
								
								if($gen=='female'){
								 echo"		<li><img src=\"images/female.png\" class=\"img-rounded\" width=\"250px\" height=\"200px\"/></li>";
									 }
								else{
								 echo"		<li><img src=\"images/male.png\" class=\"img-rounded\" width=\"250px\" height=\"200px\"/></li>";	
								}
							}
							 echo"		<li><a href=\"participate.php\"><span class=\"glyphicon glyphicon-user\"></span>PROFILE</a></li>";
							// echo"		<li><a href=\"uploadimage.php\"><span class=\"glyphicon glyphicon-upload\"></span>UPLOAD IMAGE</a></li>";
							 echo"		<li><a href=\"buycredit.php\"><span class=\"glyphicon glyphicon-usd\"></span>BUY CREDIT</a></li>";
							// echo"		<li><a href=\"request.php\"><span class=\"glyphicon glyphicon-usd\"></span>REQUEST PAYMENT</a></li>";
							 echo"		<li><a href=\"mypage.php\"><span class=\"glyphicon glyphicon-home\"></span>MY PAGE</a></li>";
									
							 echo" </ul>";
							}
							if(isset($_SESSION['username'])&&($_SESSION['status']==2)){
								 echo" <ul class=\"nav navbar-nav\" id=\"pro\">";
							$gen=$_SESSION['sex'];
								if(mysql_num_rows($result21)>0){
								$rec21=mysql_fetch_array($result21);
								$pic=$rec21['img'];
								//echo $pic;
								echo"		<li><img src=\"images/{$pic}\" class=\"img-rounded\" width=\"250px\" height=\"200px\"/></li>";
							}
								
							else{	
								
								if($gen=='female'){
								 echo"		<li><img src=\"images/female.png\" class=\"img-rounded\" width=\"250px\" height=\"200px\"/></li>";
									 }
								else{
								 echo"		<li><img src=\"images/male.png\" class=\"img-rounded\" width=\"250px\" height=\"200px\"/></li>";	
								}
							}
							 echo"		<li><a href=\"participate.php\"><span class=\"glyphicon glyphicon-user\"></span>PROFILE</a></li>";
							 echo"		<li><a href=\"uploadimage.php\"><span class=\"glyphicon glyphicon-upload\"></span>UPLOAD IMAGE</a></li>";
							 echo"		<li><a href=\"buycredit.php\"><span class=\"glyphicon glyphicon-usd\"></span>BUY CREDIT</a></li>";
							 echo"		<li><a href=\"request.php\"><span class=\"glyphicon glyphicon-usd\"></span>REQUEST PAYMENT</a></li>";
							 echo"		<li><a href=\"mypage.php\"><span class=\"glyphicon glyphicon-home\"></span>MY PAGE</a></li>";
									
							 echo" </ul>";
							}
							
							?>
						</div><!--/.nav-collapse -->
					</div>
				</div>
				
				</div>
				<div class="col-md-8" style="background:#F5F5F5;">
				
					<div class="row" style="">