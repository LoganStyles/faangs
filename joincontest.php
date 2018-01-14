<?php
ob_start();

require_once("incl/joincontes.php");

?>
<?php
									if(isset($_POST["submit"]))
										{
											
											$contestname=$_GET["id"];
											if(isset($_SESSION['username'])&&($_SESSION['status']=='1'))
											{
												$username= $_SESSION['username'];
											
													$query2="update registration set contestname='$contestname', status=2 where username='$username'";
													//$query2="update registration set contestname='NO', status='1'";
													$result=mysql_query($query2);		
																
																	if ($result)
																	{
																		$query=" INSERT into  fund(username,balance)values
																			('$username','50')";
																			$k=mysql_query($query);
																										
																			
																					
																		echo "<div class=\"alert alert-success\">";
																		echo "	<strong>";
																										
																		echo 	"You have successfully joined the Contest";
																		echo "	</strong>";
																		echo "</div>";
																		header('Refresh:2; url=login.php');
																				
																	}
											}
											else{
												
												echo "login to  join this contest";
											}
										}		
																
																
																
															
						
							?>			
						
						<div class="col-md-12 t">
				<!----------------------------------------------------div body---------------------------------------------------->				
								<div style="margin-top:100px;">
					
					
					<div style="margin:0px auto;width:60%;">
					<?php
											$query1="select * from contest where status='active' limit 1";
											$result1=mysql_query($query1);
												if($rec=mysql_fetch_array($result1)){
													$contest=$rec['contestname'];
												}
										
										?>
					<form method ="post" action="joincontest.php?id=<?php echo $contest; ?>" class="form-horizontal" role="form">
					
								<fieldset>
									<legend>Join the 
										
													<?php
											
													echo $rec['contestname'];
												
										
										?>


									contest</legend>
								  
								  <div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
									  <button type="submit" class="btn btn-default" name="submit">JOIN CONTEST</button>
									</div>
								  </div>
								</fieldset>
							</form>
					</div>
			<!---------------------------------------------------------------body ends here!---------------------------------------->
							
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
				include("incl/footer.php");
				ob_end_flush();
			?>
		</footer>
	</div>
</body>
</html>