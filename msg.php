<?php
ob_start();
//require_once("incl/mail2.php");
require_once("incl/participant.php");

if(isset($_POST['submit']))
							{
								$title=test_input($_POST['title']);
										$title=strtoupper($title);
										$description=test_input($_POST['description']);
										$description=strtolower($description);
										$user=$_SESSION['username'];
										 $email=$_SESSION['email'];
										 $header="From ".$email;
										 $admin_email='support@faangs.com';
										$dat= date("Y/m/d");
								$query=" INSERT into  msg(sender,title,message,date,rec)values('$user','$title','$description','$dat','admin')";	
								$k=mysql_query($query);
										if ($k)
										{
											mail($admin_email, $description, $title,$header);
											$nam="you will soon been contacted";
											echo "<div class=\"alert alert-success\">";
											echo "	<strong>";
											echo 	"{$nam}";
											echo "	</strong>";
											echo "</div>";
											header('Refresh:3; url=participate.php');
										}
										else
										{
												$nam="review your information";
												echo "<div class=\"alert alert-danger\">";
												echo "	<strong>";
												echo 	"{$nam}";
												echo "	</strong>";
												echo "</div>";
												header('Refresh:3; url=participate.php');
										}	
							}

?>
						
						<div class="col-md-12 t" style="padding-top:100px;">

				<!----------------------------------------------------div body---------------------------------------------------->	
							<img id="output_image"/>
							<H3  style="text-align:center;padding-bottom:20px;">ALL MESSAGES ARE SENT TO OUR ADMIN</h3>
					<form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data"/>				
						<div class="form-group">
							<!--<label class="control-label col-md-2" for="title">Title:</label>-->
							<div class="col-md-5 col-md-offset-2">
							  <input type="text" class="form-control" id="title"  name="title" placeholder="message title" required>
							</div>
						  </div>
						 <div class="form-group">
							
							<div class="col-md-5 col-md-offset-2">
							  <textarea class="form-control" id="description" name="description" placeholder="message content" required></textarea>
							</div>
						  </div>
						   <div class="form-group">
						   
						   
						  
						  
						   
						 
						  <div class="form-group">
							<div class="col-md-offset-2 col-md-10">
							<?php 
							
							echo" <button type=\"submit\" class=\"btn btn-default\" name=\"submit\">SEND</button>";
													
							?>
							</div>
						  </div>
					</form>
			<!---------------------------------------------------------------body ends here!---------------------------------------->
							</div>
						</div>
					</div>
				
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