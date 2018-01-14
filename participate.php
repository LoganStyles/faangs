<?php
ob_start();
require_once("incl/participant.php");

?>
<?php
	
if(isset($_POST['submit']))
							{
								$username=$_GET['user'];
								$status=test_input($_POST['status']);
									
								if($status=='off'){		
												$query1="update registration set phs='0'
										

										where username='$username'";
										$result=mysql_query($query1);
										if(mysql_affected_rows()>=1){
											$nam="<H4>your phone will now be visible on your gallery page</H4>";
													echo "<div class=\"alert alert-success\">";
													echo "	<strong>";
													echo 	"{$nam}";
													echo "	</strong>";
													echo "</div>";
													header("Refresh:1; url=contest2.php?id={$username}");
											}
									}
									else{
									$query1="update registration set phs='2'
										

										where username='$username'";
										$result=mysql_query($query1);
										if(mysql_affected_rows()>=1)
											{
											$nam="<H4>your phone number can no longer be visible on the gallery page</H4>";
													echo "<div class=\"alert alert-success\">";
													echo "	<strong>";
													echo 	"{$nam}";
													echo "	</strong>";
													echo "</div>";
													header("Refresh:1; url=contest2.php?id={$username}");
											}
										
								}	
							}

?>
						
						<div class="col-md-12 t">
				<!----------------------------------------------------div body---------------------------------------------------->				
								<?php
								$contestant=$_SESSION['username'];
							$query1="select * from registration where username='$contestant'";
											$result1=mysql_query($query1);
												if($rec=mysql_fetch_array($result1))
														{
															echo "<table class=\"table\">";
															echo "<thead><th>Personal data<th></thead>";
															
															echo "		<td >Full Name</td>";
															echo "		<td> {$rec['fullname']}</td>";
															echo " </tr>";
															
															//echo "		<td >Email</td>";
															//echo "		<td> {$rec['email']}</td>";
															echo " </tr>";
															
															echo "		<td >Phone Number</td>";
															echo "		<td> {$rec['phonenumber']}</td>";
															echo " </tr>";
															
															echo "		<td >Country</td>";
															echo "		<td> {$rec['country']}</td>";
															echo " </tr>";
															
															echo "		<td >State</td>";
															echo "		<td> {$rec['state']}</td>";
															echo " </tr>";
															
															echo "		<td >Email</td>";
															echo "		<td> {$rec['email']}</td>";
															echo " </tr>";
															echo " </table>";
														}
									//////////////////for model
															if($rec['model']=="YES")
																{
																	echo "<table class=\"table\">";
																	echo "<thead><th>Model Information<th></thead>";
																	
																	echo "		<td >Age</td>";
																	echo "		<td> {$rec['age']}</td>";
																	echo " </tr>";
																	
																	echo "		<td >Height</td>";
																	echo "		<td> {$rec['height']}</td>";
																	echo " </tr>";
																	
																	echo "		<td >Waist</td>";
																	echo "		<td> {$rec['waist']}</td>";
																	echo " </tr>";
																	
																	echo "		<td >Shoe</td>";
																	echo "		<td> {$rec['shoe']}</td>";
																	echo " </tr>";
																	
																	echo "		<td >Hip</td>";
																	echo "		<td> {$rec['hip']}</td>";
																	echo " </tr>";
																	
																	echo "		<td >Chest</td>";
																	echo "		<td> {$rec['chest']}</td>";
																	echo " </tr>";
																	
																	echo "		<td >Shoulder</td>";
																	echo "		<td> {$rec['shoulder']}</td>";
																	echo " </tr>";
																	echo " </table>";
																}
															else{
																	echo "";
																}		
							?>
							<?php 
							/**
							$query="SELECT * from registration where username='$contestant'";
															 
															$result1 = mysql_query ($query);
														$rec=mysql_fetch_array($result1);
														$pe3=$rec['phs'];
																		
																		if($pe3==0){
																			$pe="on";
																		}
																		if($pe3==2){
																			$pe="off";
																		}
							echo "<p style=\"text-align:center;font-weight:bold;\">Turn on/off phone number on your gallery</p>";
												echo "<div class=\"col-md-7 col-md-offset-4 \">";
							echo "<form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"participate.php?user={$contestant}\" id=\"form1\">";
													echo "		  <div class=\"form-group\">";
													echo "			 <div class=\"col-md-5 input-group\">";
													echo "			 <span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-phone\">status</span>";
													echo "				</span>";
																		
																			
													echo "				<input type=\"text\" value=\"{$pe}\" class=\"form-control\" name=\"status\" readonly/>";
													echo "			</div>";
													echo "		</div>";
													
													
													echo "		 <div class=\"form-group\">";
													echo "				<input type=\"submit\" name=\"submit\" class=\" btn btn-default col-md-offset-1\"  value=\"Change State\"/>";
													echo "		  </div>";
													echo "</form>";
								echo "		  </div>";
							
							
							*/
							
							?>
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