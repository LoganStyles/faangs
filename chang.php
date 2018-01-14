<?php

ob_start();
require_once("incl/participant2.php");

?>
				<?php
if(isset($_POST['submit']))
							{
								
							
								
								$p1=test_input($_POST['exc']);
										$p2=test_input($_POST['exc1']);
										$p1=strtolower($p1);
										$p2=strtolower($p2);
										
										if($p1==$p2){
											$p1=md5($p1);
											$query1="update admin set password='$p1' where id=1";
										

										
										$result=mysql_query($query1);
										if(mysql_affected_rows()>=1){
											$nam="<H4>admin password has been successfully changed</H4>";
													echo "<div class=\"alert alert-success\">";
													echo "	<strong>";
													echo 	"{$nam}";
													echo "	</strong>";
													echo "</div>";
													header('Refresh:1; url=adminpage.php');
											}
										}
										else{
										$nam="<H4>update fail</H4>";
													echo "<div class=\"alert alert-success\">";
													echo "	<strong>";
													echo 	"{$nam}";
													echo "	</strong>";
													echo "</div>";
													header('Refresh:1; url=adminpage.php');	
											
										}
								
								
								
							}

								
								
								
							



?>


						<div class="col-md-12 t">
						<h3 style="margin-top:100px;TEXT-ALIGN:CENTER;">CHANGE ADMIN PASSWORD</h3>
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
																	<span class="glyphicon glyphicon-lock"></span>
															</span>
									  <input type="password" class="form-control" name="exc" placeholder="Enter new password">
									</div>
								  </div>
								  <div class="form-group">
									<div class="col-md-7 input-group al">
										                    <span class="input-group-addon">
																	<span class="glyphicon glyphicon-lock"></span>
															</span>
									  <input type="password" class="form-control" name="exc1" placeholder="confirm password">
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