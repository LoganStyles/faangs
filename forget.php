<?php
 ob_start();
require_once("incl/mail2.php");
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
										
							

											$query1="select * from registration where email='{$email}' ";

											$result1=mysql_query($query1);
														$rec=mysql_fetch_array($result1);
												if($rec['email'])
															{
																$subject = 'Password Reset'; 
																$message = "
																
																Please follow this link to reset your password:http://faangs.com/forget2.php?email=$email";
															$mail->sendmail("$email","$message","$subject");
																	
															$nam="<H4> A  PASSWORD RESET LINK HAS BEEN SENT TO YOUR EMAIL</H4>";
															echo "<div class=\"alert alert-success\">";
															echo "	<strong>";
															echo 	"{$nam}";
															echo "	</strong>";
															echo "</div>";
															header('Refresh:3; url=login.php');
															
														}
																					
															
															else
																{
																									
																	$nam="email does not exist";
																									
																		
																				
																	echo "<div class=\"alert alert-danger\">";
																	echo "	<strong>";
																									
																	echo 	"{$nam}";
																	echo "	</strong>";
																	echo "</div>";
																	header('Refresh:3; url=login.php');

																}
															  

										}
							?>
				
		<div class="row">
					<div class="col-md-12">
						
						   <form method ="post" action=" " class="form-horizontal" role="form" id="form2">
								<fieldset>
									<legend style="color:#fec30c;">Forget Password</legend>
								  <div class="form-group">
								
								<div class="col-md-5  col-md-offset-4 input-group">
										 <span class="input-group-addon">
														<span class="glyphicon glyphicon-envelope"></span>
											</span>
									  <input type="text" class="form-control" id="pwd" name="email" placeholder="Enter email">
									</div>
								  </div>
								  
								  
								  
								  <div class="form-group">
									
									  <button type="submit" class="btn btn-default col-md-offset-4 col-md-2" name="submit">Submit</button>
										
								  </div>
								</fieldset>
							</form>
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