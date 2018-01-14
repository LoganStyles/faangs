<div class="w3-header-bottom">
			<div class="w3layouts-logo">
				<h1>
					<a href="index.php"><img src="images/logo.png"></a>
				</h1>
			</div>
			<div class="tops-nav">
			<!------------------------HEADER 2 IS FOR CONTEST/CONTEST2.PHP--------------->
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
							<?php
									if(isset($_SESSION['username'])&&($_SESSION['status']==1)){
											//echo "	<li><a href=\"joincontest.php\">Join-Contest</a></li>";
											echo "	<li><a href=\"participate.php\">Profile</a></li>";
											echo "	<li><a href=\"incl/outs.php\">Sign-Out</a></li>";
									}
									if(isset($_SESSION['username'])&&($_SESSION['status']==2)){
									echo "	<li><a href=\"chat2.php?user={$_SESSION['username']}\">Profile</a></li>";
										echo "	<li><a href=\"incl/outs.php\">Sign-Out</a></li>";
									}
									if(isset($_SESSION['admin'])){
										echo "	<li><a href=\"adminpage.php\">Dashboard</a></li>";
										echo "	<li><a href=\"incl/outs.php\">Sign-Out</a></li>";
									}
									else if(!isset($_SESSION['username'])){
										//echo "	<li><a href=\"joincontest.php\">Join-Contest</a></li>";
										echo "	<li><a href=\"login.php\">Sign-In</a></li>";
											echo "	<li><a href=\"registration.php\">Sign-Up</a></li>";
									}
							?>
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		
			</div>