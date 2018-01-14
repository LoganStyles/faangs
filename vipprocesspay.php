<?php
ob_start();
require_once("incl/participant.php");
?>
			<div class="col-md-12 t">
			<!---------------------------------------------------------------body ends here!---------------------------------------->
<?php
$amountpaid="";$like="";
						if(isset($_GET["reference"])&&($_GET["reference"]==$_SESSION["reference"])&&isset($_GET["id2"])&&isset($_GET["id3"]))
							{
										$exc=$_SESSION['username'];
										$amountpaid=$_GET['id2'];
										/////////////////////////////////////
									$chk="select * from  vip where username='$exc'";
											$result1=mysql_query($chk);
										if(mysql_nUM_ROWS($result1)>0){
											$nam="<H4>you transaction has been completed successfully</H4>";
									echo "<div class=\"alert success\">";
									echo "	<strong>";
									echo 	"{$nam}";
									echo "	</strong>";
									echo "</div>";
								header('Refresh:9000; url=participate.php');
									die();
										}
								$query2=" INSERT into vip(username)values('$exc')";
										$k=mysql_query($query2);
								if ($k)
								{
										$nam="$exc has been successfully added to the vip list";
																	echo "<div class=\"alert alert-success\">";
																	echo "	<strong>";
																	echo 	"{$nam}";
																	echo "	</strong>";
																	echo "</div>";
																	header('Refresh:9000; url=participate.php');
								}
							}
							else{
								$nam="no current transaction";
																	echo "<div class=\"alert alert-danger\">";
																	echo "	<strong>";
																	echo 	"{$nam}";
																	echo "	</strong>";
																	echo "</div>";
																header('Refresh:9000; url=participate.php');
												//die();
							}
						?>
					<div style="font-weight:bold;font-size:1em;text-align:center;margin-top:3em;margin-bottom:3em;">
						<h5 style="font-weight:bold;font-size:1em;text-align:center;">BELOW IS YOUR TRANSACTION DETAIL</h5>
					</div>
						<table class="table table-hover">
										<tbody>
											<tr>
												<td>Your reference</td>
												<td><?php 
													if(isset($_GET["reference"])){
														echo $_GET["reference"];
													}
													else{
														echo "nothing";
													}
												?></td>
											</tr>
											<tr>
												<td>Amount paid</td>
												<td><?php 
													if(isset($_GET["reference"])){
													echo $amountpaid;
													}
													else{
														echo "nothing";
													}
													?>
												</td>
											</tr>
											
										</tbody>
						</table>
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
<script>
var pe=document.getElementById("fun").innerHTML;
document.getElementById("fund").innerHTML="Fund Balance:"+pe;
 //alert("ok");
</script>
</html>