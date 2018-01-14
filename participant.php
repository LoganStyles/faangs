<?php
				require_once("incl/cons.php");
				require_once("incl/ses.php");
			
				cont();
						?>
<!DOCTYPE html>
<style>
.men1 li {
    display: inline-block;
    color: #000;
    padding: 8px 0 8px 16px;
    text-decoration: none;
	font-size:2em;
	
}
 /* Dropdown Button */
.dropbtn {
   // background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: none;
}
#myDropdown{
	display:none;
}
/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

</style>
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
						?>
			
		
			<div class="clearfix"> </div>
		</div>
		<!--------header2-->
		
	<div class="container-fluild">
	
		<div class="row" style="margin:0px;">
			<div class="col-md-12" style="background:#fec303;">
			<?php 
				if(isset($_SESSION['username'])&&($_SESSION['status']==2)){
					echo $_SESSION['username'];
					$contestant=$_SESSION['username'];
							$query="SELECT * from total where username='$contestant' limit 1";
									 
									$result1 = mysql_query ($query);
								$rec=mysql_fetch_array($result1);
					
								$query2="SELECT * from fund where username='$contestant' limit 1";
									 
									$result2 = mysql_query ($query2);
								$rec2=mysql_fetch_array($result2);
					
					
										echo "<div class=\"men1\">";
										echo"<ul>";
										echo "	<li>Total like:"; 
											if($rec['tos']==null){
										echo "0";
											}
										else{
										echo "{$rec['tos']}";	
										}
										
										echo"</li>";
										echo "	<li id=\"fund\">Fund Balance:";
											if($rec2['balance']==null){
												echo "0";
											}
											else{
												echo $rec2['balance'];	
											}
										echo "</li>";
										echo"</ul>";
										echo "</div>";
									}
				$query21="SELECT * from picture where username='{$_SESSION['username']}' and profile='YES' limit 1";
				$result21 = mysql_query ($query21);
							
				echo $_SESSION['username'];
			?>
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
							echo" <ul class=\"nav navbar-nav\" id=\"pro\">";
							
									echo"		<li><img src=\"images/female.jgp\" class=\"img-rounded\" width=\"250px\" height=\"200px\"/></li>";
									 echo"		<li><a href=\"participate.php\"><span class=\"glyphicon glyphicon-user\"></span>PROFILE</a></li>";
							// echo"		<li><a href=\"uploadimage.php\"><span class=\"glyphicon glyphicon-upload\"></span>UPLOAD IMAGE</a></li>";
							 echo"		<li><a href=\"buycredit.php\"><span class=\"glyphicon glyphicon-usd\"></span>BUY CREDIT</a></li>";
							// echo"		<li><a href=\"request.php\"><span class=\"glyphicon glyphicon-usd\"></span>REQUEST PAYMENT</a></li>";
							 //echo"		<li><a href=\"mypage.php\"><span class=\"glyphicon glyphicon-home\"></span>MY PAGE</a></li>";
									
							 echo" </ul>";
							
								 echo" <ul class=\"nav navbar-nav\" id=\"pro\">";
							 echo"		<li><a href=\"participate.php\"><span class=\"glyphicon glyphicon-user\"></span>PROFILE</a></li>";
							 echo"		<li><a href=\"uploadimage.php\"><span class=\"glyphicon glyphicon-upload\"></span>UPLOAD IMAGE</a></li>";
							 echo"		<li><a href=\"buycredit.php\"><span class=\"glyphicon glyphicon-usd\"></span>BUY CREDIT</a></li>";
							 echo"		<li><a href=\"request.php\"><span class=\"glyphicon glyphicon-usd\"></span>REQUEST PAYMENT</a></li>";
							 echo"		<li><a href=\"#\"><span class=\"glyphicon glyphicon-home\"></span>MY PAGE</a></li>";
							  echo"		<li><a href=\"del.php\"><span class=\"glyphicon glyphicon-plus\"></span>PICTURE MANAGEMENT</a></li>";
							    echo"		<li><a href=\"edit.php\"><span class=\"glyphicon glyphicon-pencil\"></span>EDIT PROFILE</a></li>";
							echo"		<li><a href=\"chat.php\"><span class=\"glyphicon glyphicon-pencil\"></span>FORUM</a></li>";
							 echo"		<li class=\"dropdown\" id=\"\">";
							 echo"			<a href=\"#\" class=\"dropbtn\" onmouseover=\"myFunction()\"><span class=\"glyphicon glyphicon-envelope\">MESSAGE</a>";
							  echo"			 <ul class=\"dropdown-content\" id=\"myDropdown\">";
							   echo"			<li><a href=\"msg.php\" >MESSAGE ADMIN</a></li>";
							 echo"				<li><a href=\"noti.php\" onmouseout=\"myFunction2()\">NOTIFICATION</a></li>";
							   echo" 		</ul>";
							 echo"      </li>";
							 echo" </ul>";
							}
							
							?>
						</div><!--/.nav-collapse -->
					</div>
				</div>
				<script>
				
				
				
				
				function myFunction() {
    var t=document.getElementById("myDropdown");
	t.style.display="block";
	
}

				function myFunction2() {
    var t=document.getElementById("myDropdown");
	t.style.display="none";
	
}

// Close the dropdown menu if the user clicks outside of it
	
				
				
				
				
				</script>
				</div>
				<div class="col-md-8" style="background:#F5F5F5;">
				
					<div class="row" style="">