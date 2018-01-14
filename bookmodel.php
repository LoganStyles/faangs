  <?php
  ob_start();
	require_once("incl/cons.php");

require_once("incl/function.php");

	cont();
?>
<script type="text/javascript" src="js/cou.js"></script>
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
    </style>
<html lang="en">
	<?php
	///////////////////////////form.css
		require_once("incl/title.php");
	?>
<link rel="stylesheet" href="css/form.css">
<body>
		<!--header line-->
						<?php
							session_start();
						require_once("incl/header.php");
						/**foreach($_SESSION['model'] as $key=>$value){
							//echo $_SESSION['model'][$key2];
							 /**foreach ($key as $value){
								
							 }
							//  echo $value."</br>";
							echo "THIS IS KEY".$key."</br>";
							echo $_SESSION['model'][$key];
							echo "</br>";
						}
						$user=implode(',',$_SESSION['model']);
						echo $user;*/
						//echo "         <A HREF=\"modelg.php\">SUBMIT YOUR REQUEST </A>  ";
					?>
		<!--end of header line-->
		<!---content of your code-->
				<!--FORM BODY-->
		<div class="container-fluild">
		<div class="row">
			<div class="col-md-5 col-md-offset-4" style="margin-top:10px;">
			
	
			</div>
		</div>
			<div class="row">
					<div class="col-md-7 col-md-offset-4">
						<?php
							if(isset($_POST['submit']))
							{
								 
										$username=implode(',',$_SESSION['model']);
										
										
										
										
										
										$_SESSION['fullname']=test_input($_POST['fullname']);
										
										$_SESSION['email']=test_input($_POST['email']);
										//$confirmpassword=test_input($_POST['confirmpassword']);
										$_SESSION['phonenumber']=test_input($_POST['phonenumber']);
										$_SESSION['reason']=test_input($_POST['reason']);
										$dat=date("y-m-d");
										
										
										
										
								  
								//////////////////////////////////////////////////////////////////////////////////
								
								
										$fullname=test_input($_POST['fullname']);
										$fullname=strtoupper($fullname);
									
										$username=strtolower($username);
										
										$email=test_input($_POST['email']);
										$email=strtolower($email);
										
										$reason=test_input($_POST['reason']);
										
										$phonenumber=test_input($_POST['phonenumber']);
										
										$country=test_input($_POST['country']);
										$country=strtoupper($country);
										
										$state=test_input($_POST['state']);
										$state=strtoupper($state);
										echo $fullname;
										$gender=test_input($_POST['gender']);
										$gender=strtoupper($gender);
										//index();
										$query="INSERT into  bookmodel(fullname,username,email,phonenumber,reason,country,state,sex,sta,date)
										VALUES('$fullname','$username','$email','$phonenumber','$reason','$country','$state','$gender',0,'$dat')";
										
										
										$k=mysql_query($query);
										if ($k)
										{
											
										
											$nam="<H4>We shall soon get back to you </H4>";
											echo "<div class=\"alert alert-success\">";
											echo "	<strong>";
											echo 	"{$nam}";
											echo "	</strong>";
											echo "</div>";
											
											/**unset($_SESSION['fullname']);
											unset($_SESSION['usname']);
											unset($_SESSION['email']);
											unset($_SESSION['phonenumber']);
												
											unset($_SESSION['model']);
											
											unset($_SESSION['reason']);*/
											
											
											//header('Refresh:3; url=index.php');
										}
										else
										{
												$nam="your form submission was not successful.Try again";
												echo "<div class=\"alert alert-danger\">";
												echo "	<strong>";
												echo 	"{$nam}";
												echo "	</strong>";
												echo "</div>";
												echo mysql_error();
												//header('Refresh:3; url=index.php');
										}	
									
							}
?>					
					   <form class="form-horizontal" role="form" method="post" action="" id="form1">
							  <div style="background:white;margin-bottom:5px;">
							</div>
							<fieldset>
									<legend>Please enter your contact information</legend>
									 
									  <div class="form-group">
										 <div class="col-md-5 input-group">
										 <span class="input-group-addon">
														<span class="glyphicon glyphicon-user"></span>
											</span>
										<?php    if(isset ($_SESSION["fullname"])){
													$nam=$_SESSION["fullname"];
												}
												else{
													$nam="";
												}
										echo"	<input type=\"text\" placeholder=\"enter your fullname\" class=\"form-control\" name=\"fullname\" value=\"$nam\" required/>";?>
										</div>
									</div>
									 
									  <div class="form-group">
										<div class="col-md-5 input-group">
											<span class="input-group-addon">
														<span class="glyphicon glyphicon-phone"></span>
											</span>
										 	<?php if (isset($_SESSION["phonenumber"])){
													$phoneno=$_SESSION["phonenumber"];
												}
												else{
													$phoneno="";
												}
												echo" <input type=\"text\" class=\"form-control text_field\" id=\"pno\" name=\"phonenumber\" placeholder=\"Enter phone number\" value=\"$phoneno\" required/>";?>
										</div>
									  </div>
									<div class="form-group">
										<div class="col-md-5 input-group">
										  <select class="form-control text_field" id="country" name="country" onchange="pop(this.value)">
										  <OPTION>SELECT YOUR COUNTRY</OPTION>
										  <?PHP 
										   $country="select * from countries";
										   $rcount=mysql_query($country);
										   while($r=mysql_fetch_array($rcount)){
											  
											   echo "<option value=\"{$r['name']}\">{$r['name']}</option>";
										   }
										  ?>
										  </select>
										</div>
									  </div>
									  <div class="form-group">
										<div class="col-md-5 input-group">
										  <select class="form-control text_field" id="state" name="state">
										<option>select your state</option>
										</select>
										</div>
									  </div>
									   
									<div class="form-group">
										 <div class="col-md-5 input-group">
										 <span class="input-group-addon">
														<span class="glyphicon glyphicon-envelope"></span>
											</span>
											<?php if(isset ($_SESSION["email"])){
													$email=$_SESSION["email"];
												}
												else{
													$email="";
												}echo"<input type=\"email\" placeholder=\"Enter email address\" class=\"form-control\" name=\"email\"  value=\"$email\" required/>";?>
										</div>
									</div>
									<div class="form-group">
										<?php
										
											 echo "<label class=\"radio-inline\">";
										  echo " <input type=\"radio\" name=\"gender\" id=\"gender\" value=\"Male\">Male</label>";
										 echo "<label class=\"radio-inline\">";
										 echo "<input type=\"radio\" name=\"gender\" id=\"gender2\" value=\"Female\" checked>Female</label>";
										
										?>
										</div>
									<div class="form-group">
										 <div class="col-md-5 input-group">
											<span class="input-group-addon">
														<span class="glyphicon glyphicon-pencil"></span>
											</span>
											<?php if(isset ($_SESSION["reason"])){
													$reason=$_SESSION["reason"];
													echo"	<textarea class=\"form-control\" name=\"reason\">$reason</textarea>";
												}
											else{
													$reason="";
												echo"	<textarea placeholder=\"Enter brief description about yourself\" class=\"form-control\" name=\"reason\" value=\"\" required ></textarea>";
												}
												?>
										</div>
									</div>
							</fieldset>	
						
							<fieldset id="third">
									
									  <div class="form-group">
												<?php echo"<input type=\"submit\" name=\"submit\" class=\" btn btn-default col-md-offset-2\"  value=\"Submit\" onClick=\"return valid();\"/>";?>
									  </div>
							</fieldset>	
						</form>
				</div>
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