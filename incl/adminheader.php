<style>
li #mydropdown{
	display:none;
}
li:hover>#mydropdown{
	position:absolute;
	display:block;
	float:none;
	z-index:2;
}
</style>
<div class="w3-header-bottom">
			<div class="w3layouts-logo">
				<h1>
					<a href="index.php"><img src="images/logo.png"></a>
				</h1>
			</div>
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
									
									<?php
										$query21="select * from msg where rec='admin' and state=0 ";
											$result21=mysql_query($query21);
											
											$a=mysql_num_rows($result21);
											
										$query212="select * from bookmodel where sta=0 ";
											$result212=mysql_query($query212);
											
											$b=mysql_num_rows($result212);
									
										echo "<li><a href=\"vipnoti.php\">{$b}Vip-order</a></li>";
										echo"		<li class=\"dropdown\" id=\"\">";
										echo"			<a href=\"#\" class=\"dropbtn\" onmouseover=\"myFunction()\"><span class=\"glyphicon glyphicon-envelope\">$a</a>";
										echo"			 <ul class=\"dropdown-content\" id=\"mydropdown\">";
										if(isset($_SESSION['messagepart']) and ($_SESSION['messagepart']==1) or $_SESSION['admin']=="$admin"){ 
											echo"			<li><a href=\"admmsg.php\" >Send</a></li>";
										}
										if(isset($_SESSION['messagenoti']) and ($_SESSION['messagenoti']==1) or $_SESSION['admin']=="$admin"){ 
											echo"				<li><a href=\"admnoti.php\" onmouseout=\"myFunction2()\">Inbox</a></li>";
										}
										echo" 		</ul>";
										echo"      </li>";
									
									
									?>
										<li><a href="incl/outs.php">Log-out</a></li>
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		
			</div>