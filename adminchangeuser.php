<style>
.menu2 li {
    display:block;
	width:430px;
    color: green;
    padding: 8px 0 8px 16px;
    text-decoration: none;
	text-transform: capitalize;
	height:90px;
	background:#fec303;
	font-weight:bold;
	font-size:1.5em;
	border-bottom: 1px solid #fff;
}
.menu2 li a{
	color:#000000;
}
.menu21 li {
    display:block;
    padding: 8px 0 8px 16px;
    text-decoration: none;
	text-transform: capitalize;
	height:70px;
	background:#000000;
	font-weight:bold;
	font-size:1.5em;
	margin-left:0;
	border-bottom: 1px solid #fff;
}
.menu21 li a{
	color:#fec303;
}
.menu21 li:hover {
    display:block;
    padding: 8px 0 8px 16px;
    text-decoration: none;
	text-transform: capitalize;
	height:70px;
	background:#50394c;
	font-weight:bold;
	font-size:1.5em;
	margin-left:0;
	border-bottom: 1px solid #fff;
}
.menu2 li:hover {
    display:block;
    padding: 8px 0 8px 16px;
    text-decoration: none;
	text-transform: capitalize;
	height:70px;
	background:#50394c;
	font-weight:bold;
	font-size:1.5em;
	margin-left:0;
	border-bottom: 1px solid #fff;
}
</style>
<?php
ob_start();
require_once("incl/participant2.php");?>

<?php
if(isset($_POST['submit4']))
							{
								
										$balance=test_input($_POST['balance']);
							
							$query3="select * from registration where username='$balance'";
											$result1=mysql_query($query3);
											
												
							if(mysql_num_rows($result1)>=1) 
							{
								$nam="<H4> {$balance}  already exit</H4>";
											echo "<div class=\"alert alert-danger\">";
											echo "	<strong>";
											echo 	"{$nam}";
											echo "	</strong>";
											echo "</div>";
											header('Refresh:1; url=stats.php');
							}
							
							else{
							
							
							
							
							
										$query1="update registration set username='$balance'
								where status2=5";
								$result=mysql_query($query1);
								if(mysql_affected_rows()>=1){
									$nam="<H4>{$balance} is now your new username</H4>";
											echo "<div class=\"alert alert-success\">";
											echo "	<strong>";
											echo 	"{$nam}";
											echo "	</strong>";
											echo "</div>";
											header('Refresh:1; url=stats.php');
									}
							}
						}
?>

					
						<div class="col-md-12 t" style="background:#ffef96;">
						<h3 style="margin-top:100px;TEXT-ALIGN:CENTER;font-weight:bold;font-size:2.5em;margin-bottom:50px;"><?php
					
						?></h3>
				<!----------------------------------------------------div body---------------------------------------------------->				
								<div class="row" style="margin-top:10px;">
								<?php
				
//////////////////////////////////////////////////////////////////////////////////update fund

							$query="SELECT username from registration where status2=5";
															$result1 = mysql_query ($query);
														$rec=mysql_fetch_array($result1);
														echo "<div class=\"col-md-7 col-md-offset-4 \">";
														echo "<p><b> Current username is {$rec['username']}</b></p>";
							echo "<form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"\" id=\"form1\">";
													echo "		  <div class=\"form-group\">";
													echo "			 <div class=\"col-md-5 input-group\">";
													echo "			 <span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-user\"></span>";
													echo "				</span>";
													echo "				<input type=\"text\" value=\"\" class=\"form-control\" name=\"balance\" placeholder=\"enter new username\" required/>";
													echo "			</div>";
													echo "		</div>";
													echo "		 <div class=\"form-group\">";
													echo "				<input type=\"submit\" name=\"submit4\" class=\" btn btn-default col-md-offset-1\"  value=\"Update\"/>";
													echo "		  </div>";
													echo "</form>";
								echo "		  </div>";
						
///////////////////////////////////////////////////////////////////////////////////suspend user

		
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