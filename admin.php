<?php
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
											$username=test_input($_POST['username']);
											$password=test_input($_POST['password']);
											$password=strtolower($password);
											$password=md5($password);
											$query1="select * from admin where username='$username' and password='$password' limit 1";
											$result1=mysql_query($query1);
												if($rec=mysql_fetch_array($result1))
														{
																	session_start();
															
																	$_SESSION['admin']=$rec['username'];
																	$_SESSION['status']=$rec['status'];
																
																	header('location:adminpage.php');
																	die();
														}
													else
														{
																	
																	$query12="select * from subadmin where username='$username' and password='$password' limit 1";
																	$result12=mysql_query($query12);
																	if($rec2=mysql_fetch_array($result12))
																	{
																		session_start();
															
																		$_SESSION['admin']=$rec2['username'];
																		$_SESSION['status']=$rec2['status'];
																		$_SESSION['createcontest']=$rec2['create_contest'];
																		$_SESSION['paymentrequest']=$rec2['payment_request'];
																		$_SESSION['vcontestant']=$rec2['view_contestant'];
																		$_SESSION['updateuser']=$rec2['update_user_data'];
																		$_SESSION['bankdetail']=$rec2['update_bank_detail'];
																		$_SESSION['modelinfo']=$rec2['update_model_info'];
																		$_SESSION['updatelike']=$rec2['update_like'];
																		$_SESSION['updateufund']=$rec2['update_user_fund'];
																		$_SESSION['suspend']=$rec2['suspend_user'];
																		$_SESSION['deleteu']=$rec2['delete_user'];
																		$_SESSION['uploadb']=$rec2['upload_banner'];
																		$_SESSION['deleteb']=$rec2['delete_banner'];
																		$_SESSION['xchange']=$rec2['exchange_rate'];
																		$_SESSION['forum']=$rec2['forum'];
																		$_SESSION['deletef']=$rec2['delete_forum'];
																		$_SESSION['vip']=$rec2['vip'];
																		$_SESSION['viewvip']=$rec2['view_vip'];
																		$_SESSION['addvip']=$rec2['add_vip'];
																		$_SESSION['deletevip']=$rec2['delete_vip'];
																		$_SESSION['message']=$rec2['message'];
																		$_SESSION['messagepart']=$rec2['message_part'];
																		$_SESSION['messagenoti']=$rec2['message_noti'];
																		$_SESSION['changeupass']=$rec2['changeupassword'];
																		
																
																
																		header('location:adminpage.php');
																		die();
																	}		
																	else
																	{
																	
																	
																		$nam="incorrect login detail";
																		echo "<div class=\"alert alert-danger\">";
																		echo "	<strong>";
																		echo 	"{$nam}";
																		echo "	</strong>";
																		echo "</div>";
																		header('Refresh:3; url=admin.php');
																	}
														}
										}
							?>
		<div class="row">
			<div class="col-md-5 col-md-offset-4">
				
		</div>
		<div class="row">
					<div class="col-md-5 col-md-offset-4" style="margin-top:3em;">
					<h5 style="font-weight:bold;margin-bottom:2em;text-transform:uppercase;font-size:1em;">un-authorize access is totally prohibited</h5>
						   <form method ="post" action=" " class="form-horizontal" role="form">
								<fieldset>
								  <div class="form-group">
									<div class="col-md-7 input-group al">
										                    <span class="input-group-addon">
																	<span class="glyphicon glyphicon-user"></span>
															</span>
									  <input type="text" class="form-control" name="username" placeholder="Enter your username">
									</div>
								  </div>
								  <div class="form-group">
									<div class="col-md-7 input-group al">
										 <span class="input-group-addon">
												<span class="glyphicon glyphicon-lock"></span>
										</span>
									  <input type="password" class="form-control "  name="password" placeholder="Enter password">
									</div>
								  </div>
								  <div class="form-group">
									  <button type="submit" class="btn btn-default col-md-2 al" name="submit">Submit</button>
										
								  </div>
								 
								</fieldset>
							</form>
					</div>					
		</div>
			<!--FOOTER-->
		<footer>
			<?php 
				include("incl/footer.php");
			?>
		</footer>
	</div>	
</body>
</html>