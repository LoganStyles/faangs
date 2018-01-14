<?php

ob_start();
require_once("incl/participant2.php");

?>
				<?PHP
					if(isset($_POST['submit']))
			
					{
						$exc=test_input($_POST['exc']);
												
					
							$chk="select * from  vip where username='$exc'";
			
											$result1=mysql_query($chk);
										if(mysql_nUM_ROWS($result1)>0){
											$nam="<H4>$exc already exist</H4>";
									echo "<div class=\"alert danger\">";
									echo "	<strong>";
									echo 	"{$nam}";
									echo "	</strong>";
									echo "</div>";
									header('Refresh:2; url=manageadmin.php');
									die();
										}
					
					
					
					
					
						
						
								$query2=" INSERT into vip(username)values('$exc')";
				
										$k=mysql_query($query2);
										
								if ($k)
								{
										$nam="$exc has been successfully added to the vip list";
																	echo "<div class=\"alert alert-success\">";
																	echo "	<strong>";
																	echo 	"{$nam}";
																	echo "	</strong>";
																	echo "</div>";
																	header('Refresh:3; url=adminpage.php');
								}
						
					
					}
				?>
						<div class="col-md-12 t">
						<h3 style="margin-top:100px;TEXT-ALIGN:CENTER;">Enter Vip Username</h3>
				<!----------------------------------------------------div body---------------------------------------------------->				
								<div class="row" style="margin-top:50px;">
								
						<div class="col-md-12" style="text-align:center;margin-bottom:2em;font-weight:bold;">
						
						</div>
					<div class="col-md-5 col-md-offset-4">
						   <form method ="post" action=" " class="form-horizontal" role="form">
								<fieldset>
								  <div class="form-group">
									<div class="col-md-7 input-group al">
										                    <span class="input-group-addon">
																	<span class="glyphicon glyphicon-user"></span>
															</span>
									  <input type="text" class="form-control" name="exc" placeholder="Enter username of vip">
									</div>
								  </div>
								  
								  <div class="form-group">
									  <button type="submit" class="btn btn-default col-md-2 al" name="submit">Submit</button>
										
								  </div>
								  
								</fieldset>
							</form>
					</div>					
		</div>
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