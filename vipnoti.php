<?php
require_once("incl/participant2.php");?>


						<div class="col-md-12 t">
						<h3 style="margin-top:100px;TEXT-ALIGN:CENTER;">Booked Model</h3>
				<!----------------------------------------------------div body---------------------------------------------------->				
								<div class="row" style="margin-top:50px;">
					<div class="col-md-12">
					<?PHP
					
										/**$query1="SELECT  total.tos,fund.balance,registration.fullname,registration.model,registration.username FROM registration left JOIN fund ON fund.username=registration.username 
									  left join total on fund.username=total.username order by total.tos desc limit 20";*/
									  $query1="select * from bookmodel";
											$result1=mysql_query($query1);
											if(mysql_num_rows($result1)>0)
												{
														echo "<table class=\"table\">";
														echo "<thead>";
												
														echo "		<th >Full Name</th>";
														echo "		<th >Phone Number</th>";
														echo "		<th >Email</th>";
														echo "		<th >Date</th>";
														
														
														echo " </thead>";
												while($rec=mysql_fetch_array($result1))
														{
															echo " <tr>";
														echo "		<td>{$rec["fullname"]}</td>";
														echo "		<td>{$rec["phonenumber"]}</td>";
															echo "		<td>{$rec["email"]}</td>";
														echo "		<td>{$rec["date"]}</td>";
														
														
														
														$p=$rec["id"];
														//echo "		<td>{$_SESSION['model']}</td>";
														
														echo "		<td><a href=\"vipnoti2.php?id=$p\">More</a></td>";
														
													
														
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
			?>
		</footer>
	</div>
</body>
</html>