<?php
ob_start();
require_once("incl/participant2.php");?>
						<div class="col-md-12 t">
						<h3 style="margin-top:100px;TEXT-ALIGN:CENTER;"><?php 
							if(isset($_GET["id"]) and isset($_GET["id2"]) ){
								echo "LIST OF SUB ADMIN";
							}
							if(isset($_GET["id24"]) and isset($_GET["id3"]) ){
								echo "LIST OF VIP";
							}
						?></h3>
				<!----------------------------------------------------div body---------------------------------------------------->				
								<div class="row" style="margin-top:50px;">
					<div class="col-md-12">
					<?PHP
						if(isset($_GET["id"]) and isset($_GET["id2"]) ){
											$username=test_input($_GET['id']);
										$query1="delete  from  subadmin where username='$username'";
											$k=mysql_query($query1);
											if ($k)
								{
									$nam="<H4>$username account has been successfully deleted</H4>";
									echo "<div class=\"alert alert-success\">";
									echo "	<strong>";
									echo 	"{$nam}";
									echo "	</strong>";
									echo "</div>";
									header('Refresh:2; url=manageadmin.php');
								}
								else
								{
									//echo mysql_error();
									$nam="try again";
									echo "<div class=\"alert alert-danger\">";
									echo "	<strong>";
									echo 	"{$nam}";
									echo "	</strong>";
									echo "</div>";
									header('Refresh:3; url=manageadmin.php');
								}
						}
						if(isset($_GET["id24"]) and isset($_GET["id3"]) ){
											$username=test_input($_GET['id24']);
											$query141="select * from vip where username='$username'";
											$result101=mysql_query($query141);
											$fet=mysql_fetch_array($result101);
											$kc=$fet['image'];
									if(mysql_num_rows($result101)>0 and $kc!=null)
											{
												$result102=mysql_query($query141);
												while($result2=mysql_fetch_array($result102)){
												unlink("vip/{$result2['image']}");
												}
												$query1="delete  from  vip where username='$username'";
												$k=mysql_query($query1);
												if ($k)
												{
													//echo "errror +";
													$nam="<H4>$username account has been successfully deleted</H4>";
													echo "<div class=\"alert alert-success\">";
													echo "	<strong>";
													echo 	"{$nam}";
													echo "	</strong>";
													echo "</div>";
													header('Refresh:2; url=manageadmin.php');
												}
												else
												{
													//echo mysql_error();
													$nam="try again";
													echo "<div class=\"alert alert-danger\">";
													echo "	<strong>";
													echo 	"{$nam}";
													echo "	</strong>";
													echo "</div>";
													header('Refresh:3; url=manageadmin.php');
												}
											}
									else if(mysql_num_rows($result101)>0 and $kc==null)
											{
												
												$query1="delete  from  vip where username='$username'";
												$k=mysql_query($query1);
												if ($k)
												{
													$nam="<H4>$username account has been successfully deleted</H4>";
													echo "<div class=\"alert alert-success\">";
													echo "	<strong>";
													echo 	"{$nam}";
													echo "	</strong>";
													echo "</div>";
													header('Refresh:2; url=manageadmin.php');
												}
												else
												{
													//echo mysql_error();
													$nam="try again";
													echo "<div class=\"alert alert-danger\">";
													echo "	<strong>";
													echo 	"{$nam}";
													echo "	</strong>";
													echo "</div>";
													header('Refresh:3; url=manageadmin.php');
												}
											}	








											
						}
						?>  
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
				include("incl/footer.php");
				ob_end_flush();
			?>
		</footer>
	</div>
</body>
</html>