  <?php
  ob_start();
	require_once("incl/cons.php");
	session_start();
//require_once("incl/mail2.php");
require_once("incl/function.php");
//require_once 'face/fbConfig.php';
//require_once 'face/User.php';
/////////////////////////////////
// require_once 'ins/instagram.class.php';
 //require_once'ins/instagram.config.php';
	cont();
?>

<style type="text/css">
      * {
        margin: 0px;
        padding: 0px;
      }
      a.button {
        background: url(ins/instagram-login-button.png) no-repeat transparent;
        cursor: pointer;
        display: block;
        height: 29px;
       // margin: 50px auto;
        overflow: hidden;
        text-indent: -9999px;
        width: 250px;
      }
      a.button:hover {
        background-position: 0 -29px;
      }
	  .gallery{
		  position:relative;
		  //border-style:solid;
		 height:200px;
		 margin:5px;
		 padding:0px !important;
		   box-shadow: 2px 2px grey;
	  }
	  .gallery img{
		  position:absolute;
		 width:100%;
		 height:150px;
		 padding:0px !important;
		 margin:0px !important;
		
	  }
	.add{
		  position:absolute;
		  bottom:0px;
		font-weight:bold;
		margin-left:30%;
	  }
	 
    </style>
<html lang="en">
	<?php
	///////////////////////////form.css
		require_once("incl/title.php");
	?>

<body>
		<div class="w3-header-bottom">
		<h6>
			<a href="index.php"><img src="images/logo.png" class="img-responsive" "></a>
		</h6>
			<div class="tops-nav">
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
								<ul class="nav navbar-nav navbar-right">
									
									
									

						<li><a href="login.php"class="scroll">Sign-in</a></li>
						<li><a href="registration.php">Sign-up</a></li>
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		
			</div>
			<div class="clearfix"> </div>
		</div>
		<!--end of header line-->
		<!---content of your code-->
				<!--FORM BODY-->
		<div class="container-fluild">
		<div class="row">
			<div class="col-md-5 col-md-offset-5" style="margin-top:10px;">
			
					<h5 style="font-weight:bold;font-size:2em;">SELECT YOUR CHOICE MODEL</H5>
			</div>
		</div>
			<div class="row">
					
				<?php 
			
			
				//$_SESSION['model']=array();
				
				echo "	<div class=\"col-md-12\" style=\"margin:5%\">";
				
							//$_SESSION['model'][0]=[[]];
						 //UNSET($_SESSION['model']);
							
					
					
					
					
					
					
					
					
					
					
				
				
				
						if(isset($_GET['user']) and $_GET['sta'])
										{
											if($_GET['sta']==1){
													$nam=test_input($_GET['user']);
													$nam=strtolower($nam);
													
													$_SESSION['model'][]=$nam;
														
												
											}
											else if($_GET['sta']==2){
													$nam=test_input($_GET['user']);
													$nam=strtolower($nam);
													foreach($_SESSION['model'] as $k=>$v){
														
													     if($v==$nam){
															unset($_SESSION['model'][$k]); 
														 }
													}
													
														
												
											}
											else{
												header('location:index.php');
											}
											
										}
							$query="select * from vip";
							$result=mysql_query($query);
							while($row=mysql_fetch_array($result))
							{
						echo "		<div class=\"col-md-2 gallery\">";
						echo "			<img src=\"vip/{$row['image']}\"/>";
										if(isset($_GET['sta']) and $_GET['sta']==1 or $_GET['sta']==2)
										{
											$nam=test_input($_GET['user']);
											$nam=strtolower($nam);
											$user=$row['username'];
											$user=strtolower($user);
											if(in_array($user,$_SESSION['model'])){
												echo "		<p class=\"add\"><a href=\"modelg.php?user={$row['username']}&&sta=2\">REMOVE MODEL</a><p>"; 
											}
											else{
											echo "		<p class=\"add\"><a href=\"modelg.php?user={$row['username']}&&sta=1\">ADD MODEL</a><p>";
											}
										}
										else{
											echo "		<p class=\"add\"><a href=\"modelg.php?user={$row['id']}&&sta=1\">ADD MODEL</a><p>";
										}
						echo "		</div>";
							
							
							}
				echo "</div>";
				echo "	<div class=\"col-md-5 col-md-offset-5\" style=\"FONT-WEIGHT:BOLD;FONT-SIZE:2EM;\">";
				echo "         <A HREF=\"bookmodel.php?user2=user2\">SUBMIT YOUR REQUEST </A>                       ";
				echo "</div>";
				?>	
				
			</div>
	</div>
			<!--FOOTER-->
		<footer>
			<?php 
				include("incl/footer.php");
				ob_end_flush();
			?>
		</footer>
	<script type ="text/javascript" src="css/form.js"></script>
</body>
</html>