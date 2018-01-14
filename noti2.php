<?php
ob_start();
require_once("incl/participant.php");
if(isset($_POST['submit']))
							{
								$title=test_input($_POST['title']);
										$title=strtoupper($title);
										$description=test_input($_POST['description']);
										$description=strtolower($description);
										$user=$_SESSION['username'];
								$query=" INSERT into  msg(sender,title,message)values('$user','$title','$description')";	
								$k=mysql_query($query);
										if ($k)
										{
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
						
						<div class="col-md-12 t" style="padding-top:100px;background: #fefbd8;overflow-y:scroll;">

				<!----------------------------------------------------div body---------------------------------------------------->	
				
							
							
							<div class="col-md-12" style="padding-top:10px;background: #fefbd8;"><?PHP
							   
														
								if(isset($_GET['id'])){
									$id=$_GET['id'];
									$query1="select * from msg where id='$id'";
											$result1=mysql_query($query1);
											
											if(mysql_num_rows($result1)>0)
												{
													while($rec=mysql_fetch_array($result1)){
														
															echo "<div class=\"col-md-12 \" style=\"padding-bottom:10px;padding-left:3em;font-weight:bold;\">";
																	echo "{$rec['sender']}";
														echo "</div>";
														echo "<div class=\"col-md-12 \" style=\"padding-bottom:10px;padding-left:3em;font-weight:bold;\">";
																	echo "{$rec['title']}";
										
														echo "</div>";
														echo "<div class=\"col-md-12 \" style=\"padding-bottom:10px;padding-left:3em;overflow-y:scroll;\">";
																echo "{$rec['message']}";
										
														echo "</div>";
														
												
													}
													$query2="update msg set state=1 where id='$id'";
													$result2=mysql_query($query2);
												}
								}
							?>
							</div>
							<a href="noti.php"><H3  style="text-align:center;padding-bottom:10px;">back</h3></a>
					
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