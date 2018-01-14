<?php
require_once("incl/participant2.php");

if(isset($_GET['id'])&& isset($_GET['id2']))
			{
			
					$stast=test_input($_GET['id']);
					$nam=test_input($_GET['id2']);
					$transid=test_input($_GET['id3']);
				if($stast==1)
				{
					$query2="update request set status='confirm' where username='$nam' and id='$transid'";
					$result=mysql_query($query2);
					if(mysql_affected_rows()>0)
					{
						$nam=" This account has been successfully confirmed";
												echo "<div class=\"alert alert-success\">";
												echo "	<strong>";
												echo 	"{$nam}";
												echo "	</strong>";
												echo "</div>";
							header('Refresh:2; url=adminpage.php');
					}
				}
			
			
			
			}
	
?>
						<div class="col-md-12 t">
						<h3 style="margin-top:100px;TEXT-ALIGN:CENTER;">WITHDRAWAL REQUEST</h3>
				<!----------------------------------------------------div body---------------------------------------------------->				
								<div class="row" style="margin-top:50px;">
					<div class="col-md-12">
					<?PHP
					$query1="SELECT  registration.fullname,registration.phonenumber,registration.bankname,registration.accountname,registration.accountnumber,request.amount,request.username,request.id FROM request left JOIN registration ON request.username=registration.username 
									  where request.status='pending' order by request.date";
											$result1=mysql_query($query1);
											if(mysql_num_rows($result1)>0)
												{
														echo "<table class=\"table\">";
														echo "<thead>";
												
														echo "		<th >Full Name</th>";
														echo "		<th >Phone number</th>";
														echo "		<th >Amount</th>";
														echo "		<th >Bank Name</th>";
														echo "		<th >Account Name</th>";
														echo "		<th >Account Number</th>";
														echo "		<th >Status</th>";
														echo " </thead>";
												while($rec=mysql_fetch_array($result1))
														{
															echo " <tr>";
														echo "		<td>{$rec["fullname"]}</td>";
														
														echo "		<td>{$rec["phonenumber"]}</td>";
														echo "		<td>{$rec["amount"]}</td>";
														echo "		<td>{$rec["bankname"]}</td>";
														echo "		<td>{$rec["accountname"]}</td>";
														echo "		<td>{$rec["accountnumber"]}</td>";
														echo "		<td><a href=\"approve.php?id=1&&id2={$rec["username"]}&&id3={$rec["id"]}\" class=\"btn btn-default\">Approve</a></td>";
														echo " </tr>";
														}
														
													echo " </table>";
												}
											else{
											$nam="no  pending request";
											echo "<div class=\"alert alert-danger\">";
											echo "	<strong>";
											echo 	"{$nam}";
											echo "	</strong>";
											echo "</div>";
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