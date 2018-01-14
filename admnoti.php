<?php
ob_start();
require_once("incl/participant2.php");
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
						
						<div class="col-md-12 t" style="padding-top:50px;background: #fefbd8;overflow-y:scroll;">

				<!----------------------------------------------------div body---------------------------------------------------->	
				
							<H3  style="text-align:center;padding-bottom:10px;">NOTIFICATION</h3>
							
							<div class="col-md-12" style="padding-top:10px;background: #fefbd8;"><?PHP
							   
														
									$user="admin";
									
									$query1="select * from msg where rec='$user' limit 10 ";
											$result1=mysql_query($query1);
											
											if(mysql_num_rows($result1)>0)
												{
													while($rec=mysql_fetch_array($result1)){
														if($rec["state"]==1){
														 echo "<a href=\"admnoti2.php?id={$rec['id']}\"><div style=\"height:50px;margin-bottom:1px;background:#f4e1d2;line-height:3;\">";
														}
														else{
														 echo "<a href=\"admnoti2.php?id={$rec['id']}\"><div style=\"height:50px;margin-bottom:1px;background:white;line-height:3;\">";	
														}
															echo "<div class=\"col-md-3 \">";
																	echo "{$rec['sender']}";
															echo "</div>";
														echo "<div class=\"col-md-7 \">";
																	//echo "{$rec['message']}";
																$p=	substr($rec['message'],0,60);
																echo $p;
																
																
										
														echo "</div>";
														echo "<div class=\"col-md-2 \">";
																echo "{$rec['date']}";
										
														echo "</div>";
														
														echo "</div></a>";
													}
												}
							?>
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