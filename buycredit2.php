<?php
ob_start();


require_once("incl/participant.php");

?>
<?php
						if(isset($_POST["submit2"]))
										{
											
											//$username=test_input($_POST['username']);
											//$username=strtolower($username);
											//$password=test_input($_POST['password']);
											
										$contestant=$_SESSION['username'];
										$cred=$_SESSION['credit'];
									
									$query1="select * from fund where username='$contestant'";
									$result1=mysql_query($query1);	
									if(mysql_num_rows($result1)>0){
										$query2="update fund set balance=balance+'$cred' where username='$contestant'";
											$result=mysql_query($query2);
											if(mysql_affected_rows()>0){
													$nam="You transaction has been completed successfully";
																	echo "<div class=\"alert alert-success\">";
																	echo "	<strong>";
																	echo 	"{$nam}";
																	echo "	</strong>";
																	echo "</div>";
																	header('Refresh:3; url=participate.php');
											}
									}
									else{
										
										$query=" INSERT into  fund(username,balance)values
										('$contestant','$cred')";
										$k=mysql_query($query);
										if ($k)
										{
																	$nam="You transaction has been completed successfully";
																	echo "<div class=\"alert alert-success\">";
																	echo "	<strong>";
																	echo 	"{$nam}";
																	echo "	</strong>";
																	echo "</div>";
																	header('Refresh:3; url=participate.php');
										}
									}
											
											
											
											
											
											
											
											
											
											
											
											
											
											
											
											
											
										}
						
						?>
						
						
						
						<div class="col-md-12 t">
	
				<TABLE CLASS="table">
						<thead><th>Transaction detail</th></thead>
						<Tr class="success">
							
							<td>TOTAL CREDIT</td>
							<td><?php 
								if(isset($_POST['submit'])){
									$_SESSION['credit']=$_POST['credit'];
								echo $_SESSION['credit'];
								}
								else{
									echo "";
								}
							?></td>
						</Tr>
						<Tr class="info">
							<td>COST</td>
							<td><?php  if(isset($_POST['submit']))
										{
											if($_SESSION['credit']=='500')
											{
												$_SESSION['cost']='$7'; 
												echo $_SESSION['cost'];
											}
											
											if($_SESSION['credit']=='1000')
											{
												$_SESSION['cost']='$13'; 
												echo $_SESSION['cost'];
											}
											
											if($_SESSION['credit']=='3000')
											{
												$_SESSION['cost']='$19'; 
												echo $_SESSION['cost'];
											}
											if($_SESSION['credit']=='5000')
											{
												$_SESSION['cost']='$32'; 
												echo $_SESSION['cost'];
											}
										
										
										
										
										}
								else{
									echo "";
									}
							
							?></td>
						</Tr>
						
					</TABLE>
					<div style="margin:0px auto;width:60%;">
							<img src="images/buy.jpg"/>
						
						<form method="post" action="">
						<INPUT TYPE="SUBMIT" NAME="submit2" VALUE="PAY"/>
						
						</form>
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