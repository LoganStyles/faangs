<?php
ob_start();
	require_once("incl/cons.php");
	require_once("incl/function.php");
	cont();
?>
<html lang="en">
	<?php
		require_once("incl/title.php");
	?>
	<link rel="stylesheet" href="css/form.css">
<body>
		<!--header line-->
						<?php
						include("incl/header.php");
						?>
						
		<!--end of header line-->
		
		<!---content of your code-->
				<!--FORM BODY-->
	<div class="container-fluild">
									<?php
										if(isset($_POST["submit"]))
										{
											$email=test_input($_POST['email']);
											$p1=test_input($_POST['p1']);
										$p2=test_input($_POST['p2']);
										if($p1==$p2)
										{
											$p1=md5($p1);
											//echo $email;
											
											
											$query1="update registration set password='$p1' where email='$email'";
										$result=mysql_query($query1);
											if(mysql_affected_rows()>=1)
											{
												$nam="<H4>your password have been successfully updated</H4>";
													echo "<div class=\"alert alert-success\">";
													echo "	<strong>";
													echo 	"{$nam}";
													echo "	</strong>";
													echo "</div>";
													header('Refresh:1; url=login.php');
											}
										
											else
												{
													$nam="<H4>update fail</H4>";
													echo "<div class=\"alert alert-danger\">";
													echo "	<strong>";
													echo 	"{$nam}";
													echo "	</strong>";
													echo "</div>";
													header("Refresh:1; url=forget2.php?email=$email");	
											
												}
								
											
										}
										else
												{
													$nam="<H4>Password Mis-match</H4>";
													echo "<div class=\"alert alert-danger\">";
													echo "	<strong>";
													echo 	"{$nam}";
													echo "	</strong>";
													echo "</div>";
													header("Refresh:1; url=forget2.php?email=$email");	
											
												}
									}
							?>
		<div class="row">
			<div class="col-md-5 col-md-offset-4" style="font-weight:bold;font-size:2em;margin-top:0.7em;margin-bottom:0.7em">
				Reset your password below
			</div>
		</div>
		<div class="row">
					<div class="col-md-5 col-md-offset-4">
					
					<?php
					  if(isset($_GET['email'])){
					
						 echo "  <form method =\"post\" action=\"\" class=\"form-horizontal\" role=\"form\">";
						 echo "		<fieldset>";
						 echo "		  <div class=\"form-group\">";
						 echo "			<div class=\"col-md-7 input-group al\">";
						 echo "				                    <span class=\"input-group-addon\">";
						 echo "											<span class=\"glyphicon glyphicon-user\"></span>";
						 echo "									</span>";
						 echo "			  <input type=\"text\" class=\"form-control\" name=\"email\" value=\"{$_GET['email']}\" readonly/>";
						 echo "			</div>";
						 echo "		  </div>";
						 echo "		  <div class=\"form-group\">";
						 echo "			<div class=\"col-md-7 input-group al\">";
						 echo "				 <span class=\"input-group-addon\">";
						 echo "						<span class=\"glyphicon glyphicon-lock\"></span>";
						 echo "				</span>";
						 echo "			  <input type=\"password\" class=\"form-control\"  name=\"p1\" placeholder=\"Enter password\" required/>";
						 echo "			</div>";
						 echo "		  </div>";
						  echo "		  <div class=\"form-group\">";
						 echo "			<div class=\"col-md-7 input-group al\">";
						 echo "				 <span class=\"input-group-addon\">";
						 echo "						<span class=\"glyphicon glyphicon-lock\"></span>";
						 echo "				</span>";
						 echo "			  <input type=\"password\" class=\"form-control\"  name=\"p2\" placeholder=\"Confirm password\" required/>";
						 echo "			</div>";
						 echo "		  </div>";
						 echo "		  <div class=\"form-group\">";
						 echo "			  <button type=\"submit\" class=\"btn btn-default col-md-2 al\" name=\"submit\" onclick=\"valid()\">Submit</button>";
						 echo "				<a href=\"registration.php\" class=\"btn btn-default col-md-4  col-md-offset-1\">Register account</a>";
						 echo "		  </div>";
						 
							  
						 echo "		</fieldset>";
						 echo "	</form>";
					  }
					  else{
						  
						  
						 // header("location:login.php");
					  }
					?>
					</div>					
		</div>
			<!--FOOTER-->
		<footer>
			<?php 
			ob_end_flush();
				include("incl/footer.php");
			?>
		</footer>
	</div>	
</body>
</html>