<?php
require_once("incl/participant2.php");?>


						<div class="col-md-12 t">
						<h3 style="margin-top:100px;TEXT-ALIGN:CENTER;">Propose Client</h3>
				<!----------------------------------------------------div body---------------------------------------------------->				
								<div class="row" style="margin-top:50px;">
					<div class="col-md-12">
					<?PHP
					
										/**$query1="SELECT  total.tos,fund.balance,registration.fullname,registration.model,registration.username FROM registration left JOIN fund ON fund.username=registration.username 
									  left join total on fund.username=total.username order by total.tos desc limit 20";*/
									  if(isset($_GET['id'])){
										  $ids=$_GET['id'];
										  $query2="update bookmodel set sta=1 where id='$ids'";
													$result2=mysql_query($query2);
									  }
									  else{
										  header('location:index.php');
									  }
									  $query1="select * from bookmodel where id=$ids";
											$result1=mysql_query($query1);
											if(mysql_num_rows($result1)>0)
												{
													$rec=mysql_fetch_array($result1);
													echo "<table class=\"table\">";
														
												
														echo "<tr><td>Full name</td><td>{$rec["fullname"]}</td></tr>";
														echo "<tr><td>Smail</td><td>{$rec["email"]}</td></tr>";
														echo "<tr><td>Phone number</td><td>{$rec["phonenumber"]}</td></tr>";
														echo "<tr><td>Countr</td><td>{$rec["country"]}</td></tr>";
														echo "<tr><td>State</td><td>{$rec["state"]}</td></tr>";
														echo "<tr><td>Sex</td><td>{$rec["sex"]}</td></tr>";
														echo "<tr><td>Reason</td><td>{$rec["reason"]}</td></tr>";
														echo "<tr><td>Model Username</td><td>{$rec["username"]}</td></tr>";
											
															
														
														
														
														
													echo " </table>";
													echo "<a href=\"vipnoti.php\">Back</a>";
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
			?>
		</footer>
	</div>
</body>
</html>