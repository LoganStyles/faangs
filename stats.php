




<?php
ob_start();
require_once("incl/participant2.php");?>
<?php
require_once("incl/function.php");
?>
<?php
//require_once("incl/function.php");
if(isset($_POST['submit'])){
$post=test_input($_POST['post']);
$query1="select * from registration where username='$post'";
											$result1=mysql_query($query1);
											if(mysql_num_rows($result1)>0){
												$rec=mysql_fetch_array($result1);
												$user=$rec['username'];
												header("location:mana.php?id=$user");
											}
											else{
											$nam="user not found";
											echo "<div class=\"alert alert-danger\">";
											echo "	<strong>";
											echo 	"{$nam}";
											echo "	</strong>";
											echo "</div>";
											header('Refresh:2; url=adminpage.php');
											}
}
?>


						<div class="col-md-12 t">
						<h3 style="margin-top:100px;TEXT-ALIGN:CENTER;">ACTIVE CONTESTANT</h3>
				<!----------------------------------------------------div body---------------------------------------------------->				
								<div class="row" style="margin-top:50px;">
								
									<div class="col-md-12">
										<form class="navbar-form" role="search" method="post" action="">
											<div class="input-group col-md-12 col-xs-12">
												<input type="text" class="form-control" placeholder="enter username" name="post">
												<div class="input-group-btn">
													<button class="btn btn-default" type="submit" name="submit"><i class="glyphicon glyphicon-search"></i></button>
												</div>
											</div>
									</form>									
				
								</div>
						<div class="col-md-12" style="overflow-y:scroll">
					<?PHP
					
										$query1="SELECT  total.tos,fund.balance,registration.fullname,registration.model,registration.username FROM registration left JOIN fund ON fund.username=registration.username 
									  left join total on fund.username=total.username order by total.tos";
											$result1=mysql_query($query1);
											if(mysql_num_rows($result1)>0)
												{
														echo "<table class=\"table\">";
														echo "<thead>";
												
														echo "		<th >Full Name</th>";
														echo "		<th >Username Name</th>";
														echo "		<th >Available fund</th>";
														echo "		<th >Total like</th>";
														
														echo " </thead>";
												while($rec=mysql_fetch_array($result1))
														{
															echo " <tr>";
														echo "		<td>{$rec["fullname"]}</td>";
														echo "		<td>{$rec["username"]}</td>";
														echo "		<td>{$rec["balance"]}</td>";
														
														echo "		<td>{$rec["tos"]}</td>";
														
														$p=$rec["model"];
														//echo "		<td>{$_SESSION['model']}</td>";
														
														echo "		<td><a href=\"mana.php?id={$rec["username"]}&&id2=$p\">MANAGE</a></td>";
														
													
														
														echo " </tr>";
														}
														
													echo " </table>";
												}
											else{
											
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