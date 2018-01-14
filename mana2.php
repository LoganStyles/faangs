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
if(isset($_POST['submit']))
			{
								$username=$_GET['user'];
								$email=test_input($_POST['email']);
										$email=strtolower($email);
								$query3="select * from registration where email='$email'";
											$result1=mysql_query($query3);
											$rec=mysql_fetch_array($result1);
												$email2=$rec['email'];
							if((mysql_num_rows($result1)>=0) and($email2!=$email))
							{
							$nam="<H4> {$email} email already exit</H4>";
											echo "<div class=\"alert alert-danger\">";
											echo "	<strong>";
											echo 	"{$nam}";
											echo "	</strong>";
											echo "</div>";
											header('Refresh:1; url=stats.php');
							}
				else
							{
								$fullname=test_input($_POST['fullname']);
										$fullname=strtoupper($fullname);
								//$username=test_input($_POST['username']);
										//$username=strtolower($username);
								$phonenumber=test_input($_POST['phonenumber']);
								$country=test_input($_POST['country']);
										$country=strtoupper($country);
								$state=test_input($_POST['state']);
										$state=strtoupper($state);
								$age=test_input($_POST['age']);
								//$gender=test_input($_POST['gender']);
									//	$gender=strtoupper($gender);
								$bio=test_input($_POST['bio']);
								$query1="update registration set fullname='$fullname',email='$email',phonenumber='$phonenumber',
								country='$country',state='$state',age='$age',bio='$bio'
								where username='$username'";
								$result=mysql_query($query1);
								if(mysql_affected_rows()>=1){
									$nam="<H4>{$username} personal data have been successfully updated</H4>";
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
<?php
if(isset($_POST['submit2']))
							{
								$username=$_GET['user'];
								$bank=test_input($_POST['bank']);
										$bank=strtoupper($bank);
										$accname=test_input($_POST['accname']);
										$accname=strtoupper($accname);
										$accnumber=test_input($_POST['accnumber']);
										$query1="update registration set bankname='$bank',accountname='$accname',accountnumber='$accnumber'
								where username='$username'";
								$result=mysql_query($query1);
								if(mysql_affected_rows()>=1){
									$nam="<H4>{$username} bank detail have been successfully updated</H4>";
											echo "<div class=\"alert alert-success\">";
											echo "	<strong>";
											echo 	"{$nam}";
											echo "	</strong>";
											echo "</div>";
											header('Refresh:1; url=stats.php');
									}
							}
?>
<?php
if(isset($_POST['submit3']))
							{
								$username=$_GET['user'];
										$height=test_input($_POST['height']);
										$waist=test_input($_POST['waist']);
										$shoe=test_input($_POST['shoe']);
										$hip=test_input($_POST['hip']);
										$chest=test_input($_POST['chest']);
										$shoulder=test_input($_POST['shoulder']);
										$query1="update registration set height='$height',waist='$waist',shoe='$shoe', hip='$hip',chest='$chest',shoulder='$shoulder'
								where username='$username'";
								$result=mysql_query($query1);
								if(mysql_affected_rows()>=1){
									$nam="<H4>{$username} model detail have been successfully updated</H4>";
											echo "<div class=\"alert alert-success\">";
											echo "	<strong>";
											echo 	"{$nam}";
											echo "	</strong>";
											echo "</div>";
											header('Refresh:1; url=stats.php');
									}
							}
?>
<?php
if(isset($_POST['submit32']))
							{
								$username=$_GET['user'];
								
										$like=test_input($_POST['like']);
										
										$sta=test_input($_POST['sta']);
										
									if($sta==1){
											$query1="update total set tos='$like'
									where username='$username'";
									$result=mysql_query($query1);
									if(mysql_affected_rows()>=1){
										$nam="<H4>{$username} likes  has been successfully updated</H4>";
												echo "<div class=\"alert alert-success\">";
												echo "	<strong>";
												echo 	"{$nam}";
												echo "	</strong>";
												echo "</div>";
												header('Refresh:1; url=stats.php');
											
										}
										else{
											$nam="<H4>you have error in your query/H4>";
												echo "<div class=\"alert alert-danger\">";
												echo "	<strong>";
												echo 	"{$nam}";
												echo "	</strong>";
												echo "</div>";
												header('Refresh:1; url=stats.php');
											
										}
										
									}
								else{
										$query21="insert into total(username,tos)values('$username','$like')";
										$res=mysql_query($query21);
										if($res){
											$nam="<H4>{$username} likes  has been successfully updated</H4>";
												echo "<div class=\"alert alert-success\">";
												echo "	<strong>";
												echo 	"{$nam}";
												echo "	</strong>";
												echo "</div>";
												header('Refresh:1; url=stats.php');
										}
										else{
											$nam="<H4>you have error in your query/H4>";
												echo "<div class=\"alert alert-danger\">";
												echo "	<strong>";
												echo 	"{$nam}";
												echo "	</strong>";
												echo "</div>";
												header('Refresh:1; url=stats.php');
											
										}
									
									}
							}
?>
<?php
if(isset($_POST['submit4']))
							{
								$username=$_GET['user'];
										$balance=test_input($_POST['balance']);
										$query1="update fund set balance='$balance'
								where username='$username'";
								$result=mysql_query($query1);
								if(mysql_affected_rows()>=1){
									$nam="<H4>{$username} fund detail have been successfully updated</H4>";
											echo "<div class=\"alert alert-success\">";
											echo "	<strong>";
											echo 	"{$nam}";
											echo "	</strong>";
											echo "</div>";
											header('Refresh:1; url=stats.php');
									}
								else{
									$query4="insert into fund(username,balance)values('$username','$balance')";
									if(mysql_query ($query4)){
										$nam="<H4>{$username} fund detail have been successfully updated</H4>";
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
<?php
if(isset($_POST['submit5']))
							{
								$username=$_GET['user'];
										$status=test_input($_POST['status']);
								if($status=='active'){		
												$query1="update registration set status='10'
										where username='$username'";
										$result=mysql_query($query1);
										if(mysql_affected_rows()>=1){
											$nam="<H4>{$username} account have been suspended</H4>";
													echo "<div class=\"alert alert-success\">";
													echo "	<strong>";
													echo 	"{$nam}";
													echo "	</strong>";
													echo "</div>";
													header('Refresh:1; url=stats.php');
											}
									}
									else{
									$query1="update registration set status='2'
										where username='$username'";
										$result=mysql_query($query1);
										if(mysql_affected_rows()>=1){
											$nam="<H4>{$username} account have been un-suspended</H4>";
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
<?php
if(isset($_POST['submit51']))
							{
								
										$status=test_input($_POST['status']);
								if($status=='timer is on'){		
												$query1="update contest set state='off'
										where status='active'";
										$result=mysql_query($query1);
										if(mysql_affected_rows()>=1){
											$nam="<H4>Contest timer has been off</H4>";
													echo "<div class=\"alert alert-success\">";
													echo "	<strong>";
													echo 	"{$nam}";
													echo "	</strong>";
													echo "</div>";
													header('Refresh:1; url=adminpage.php');
											}
									}
									else{
									$query1="update contest set state='on'
										where status='active'";
										$result=mysql_query($query1);
										if(mysql_affected_rows()>=1){
											$nam="<H4>Contest timer has been turned on</H4>";
													echo "<div class=\"alert alert-success\">";
													echo "	<strong>";
													echo 	"{$nam}";
													echo "	</strong>";
													echo "</div>";
													header('Refresh:1; url=adminpage.php');
											}
									}
							}
?>
<?php
if(isset($_POST['submit6']))
							{
								$username=$_GET['user'];
										//echo "$username";
										$missing = array();
								$table=array("picture","registration","fund","liketracker","total","msg");
								foreach($table as $ta){
										$query1="delete  from $ta where username='$username'";
										$result=mysql_query($query1);
										array_push($missing,1);
								}
								if (count($missing) > 0) {
									$nam="<H4>{$username} personal data have been successfully deleted</H4>";
											echo "<div class=\"alert alert-success\">";
											echo "	<strong>";
											echo 	"{$nam}";
											echo "	</strong>";
											echo "</div>";
											header('Refresh:1; url=stats.php');
									}
							}
?>
<?php
if(isset($_POST['submit7']))
							{
								$username=$_GET['user'];
										//echo "$username";
										$p1=test_input($_POST['p1']);
										$p2=test_input($_POST['p2']);
										if($p1==$p2){
											$p1=md5($p1);
											$query1="update registration set password='$p1'
										where username='$username'";
										$result=mysql_query($query1);
										if(mysql_affected_rows()>=1){
											$nam="<H4>{$username} password has been changed successfully</H4>";
													echo "<div class=\"alert alert-success\">";
													echo "	<strong>";
													echo 	"{$nam}";
													echo "	</strong>";
													echo "</div>";
													header('Refresh:1; url=stats.php');
											}
										}
										else{
										$nam="<H4>update fail</H4>";
													echo "<div class=\"alert alert-success\">";
													echo "	<strong>";
													echo 	"{$nam}";
													echo "	</strong>";
													echo "</div>";
													header('Refresh:1; url=stats.php');	
										}
							}
?>
						<?php
							if(isset($_GET['id']))
					{
						$username=test_input($_GET['id']);
					}
						?>
						<div class="col-md-12 t" style="background:#ffef96;">
						<h3 style="margin-top:100px;TEXT-ALIGN:CENTER;font-weight:bold;font-size:2.5em;margin-bottom:50px;"><?php
							if(isset($_GET['id']))
					{
						echo "Manage ".$username." Details";
					}
						?></h3>
				<!----------------------------------------------------div body---------------------------------------------------->				
								<div class="row" style="margin-top:10px;">
								<?php
					if(isset($_GET['act'])){
						$action=$_GET['act'];
						if($action==1){
										if(isset($_GET['id']))
									{			
													echo "<div class=\"col-md-7 col-md-offset-4 \">";
													$query="SELECT * from registration where username='$username'";
															$result1 = mysql_query ($query);
														$rec=mysql_fetch_array($result1);
									echo "<form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"mana2.php?user={$username}\" id=\"form1\">";
													echo "		  <div class=\"form-group\">";
													echo "			 <div class=\"col-md-5 input-group\">";
													echo "			 <span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-user\"></span>";
													echo "				</span>";
													echo "				<input type=\"text\" value=\"{$rec['fullname']}\" class=\"form-control\" name=\"fullname\" required/>";
													echo "			</div>";
													echo "		</div>";
													echo "		  <div class=\"form-group\">";
													echo "			<div class=\"col-md-5 input-group\">";
													echo "				<span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-phone\"></span>";
													echo "				</span>";
													echo "			  <input type=\"text\" class=\"form-control text_field\" id=\"pno\" name=\"phonenumber\" value=\"{$rec['phonenumber']}\" required/>";
													echo "			</div>";
													echo "		  </div>";
													echo "		  <div class=\"form-group\">";
													echo "			<div class=\"col-md-5 input-group\">";
													echo "			<span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-home\"></span>";
													echo "				</span>";
													echo "			  <input type=\"text\" class=\"form-control text_field\" id=\"country\" name=\"country\" value=\"{$rec['country']}\" required/>";
													echo "			</div>";
													echo "		  </div>";
													echo "		  <div class=\"form-group\">";
													echo "			<div class=\"col-md-5 input-group\">";
													echo "			<span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-road\"></span>";
													echo "				</span>";
													echo "			  <input type=\"text\" class=\"form-control text_field\" id=\"state\" name=\"state\" value=\"{$rec['state']}\" required/>";
													echo "			</div>";
													echo "		  </div>";
													echo "		   <div class=\"form-group\">";
													echo "				<div class=\"col-md-5 input-group\">";
													echo "				<span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-time\"></span>";
													echo "				</span>";
													echo "				  <input type=\"text\" class=\"form-control\" id=\"age\" name=\"age\" value=\"{$rec['age']}\" required/>";
													echo "				</div>";
													echo "			</div>";
													echo "		<div class=\"form-group\">";
													echo "			 <div class=\"col-md-5 input-group\">";
													echo "			 <span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-envelope\"></span>";
													echo "				</span>";
													echo "			<input type=\"email\" value=\"{$rec['email']}\" class=\"form-control\" name=\"email\" required/>";
													echo "			</div>";
													echo "		</div>";
													echo "		<div class=\"form-group\">";
													echo "			 <div class=\"col-md-5 input-group\">";
													echo "				<span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-pencil\"></span>";
													echo "				</span>";
													echo "				<textarea name=\"bio\"> {$rec["bio"]}</textarea>";
													echo "			</div>";
													echo "		</div>";
													echo "		 <div class=\"form-group\">";
													echo "				<input type=\"submit\" name=\"submit\" class=\" btn btn-default col-md-offset-3\"  value=\"Update\"/>";
													echo "		  </div>";
													echo "</form>";
											echo "</div>";
									}
						}
						/////////////////////////////////////////////bank detail
						if($action==2){
							$query="SELECT * from registration where username='$username'";
															$result1 = mysql_query ($query);
														$rec=mysql_fetch_array($result1);
														echo "<div class=\"col-md-7 col-md-offset-4 \">";
							echo "<form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"mana2.php?user={$username}\" id=\"form1\">";
													echo "		  <div class=\"form-group\">";
													echo "			 <div class=\"col-md-5 input-group\">";
													echo "			 <span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-user\"></span>";
													echo "				</span>";
													echo "				<input type=\"text\" value=\"{$rec['bankname']}\" class=\"form-control\" name=\"bank\" required/>";
													echo "			</div>";
													echo "		</div>";
													echo "		  <div class=\"form-group\">";
													echo "			<div class=\"col-md-5 input-group\">";
													echo "				<span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-phone\"></span>";
													echo "				</span>";
													echo "			  <input type=\"text\" class=\"form-control text_field\" id=\"pno\" name=\"accname\" value=\"{$rec['accountname']}\" required/>";
													echo "			</div>";
													echo "		  </div>";
													echo "		  <div class=\"form-group\">";
													echo "			<div class=\"col-md-5 input-group\">";
													echo "			<span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-home\"></span>";
													echo "				</span>";
													echo "			  <input type=\"text\" class=\"form-control text_field\" id=\"country\" name=\"accnumber\" value=\"{$rec['accountnumber']}\" required/>";
													echo "			</div>";
													echo "		  </div>";
													echo "		 <div class=\"form-group\">";
													echo "				<input type=\"submit\" name=\"submit2\" class=\" btn btn-default col-md-offset-3\"  value=\"Update\"/>";
													echo "		  </div>";
													echo "</form>";
								echo "		  </div>";
						}
						/////////////////////////////////////////////////////////////////MODEL INFORMATION
						if($action==3){
							$query="SELECT * from registration where username='$username'";
															$result1 = mysql_query ($query);
														$rec=mysql_fetch_array($result1);
														echo "<div class=\"col-md-7 col-md-offset-4 \">";
														echo "<form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"mana2.php?user={$username}\" id=\"form1\">";
														echo "		  <div class=\"form-group\">";
													echo "			 <div class=\"col-md-5 input-group\">";
													echo "			 <span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-user\">model status</span>";
													echo "				</span>";
													echo "				<input type=\"text\" value=\"{$rec['model']}\" class=\"form-control\" name=\"model\" required/>";
													echo "			</div>";
													echo "		</div>";
													echo "		  <div class=\"form-group\">";
													echo "			 <div class=\"col-md-5 input-group\">";
													echo "			 <span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-user\">height</span>";
													echo "				</span>";
													echo "				<input type=\"text\" value=\"{$rec['height']}\" class=\"form-control\" name=\"height\" required/>";
													echo "			</div>";
													echo "		</div>";
													echo "		  <div class=\"form-group\">";
													echo "			<div class=\"col-md-5 input-group\">";
													echo "				<span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-phone\">waist</span>";
													echo "				</span>";
													echo "			  <input type=\"text\" class=\"form-control text_field\" id=\"pno\" name=\"waist\" value=\"{$rec['waist']}\" required/>";
													echo "			</div>";
													echo "		  </div>";
													echo "		  <div class=\"form-group\">";
													echo "			<div class=\"col-md-5 input-group\">";
													echo "			<span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-home\">shoe</span>";
													echo "				</span>";
													echo "			  <input type=\"text\" class=\"form-control text_field\" id=\"country\" name=\"shoe\" value=\"{$rec['shoe']}\" required/>";
													echo "			</div>";
													echo "		  </div>";
													echo "<div class=\"form-group\">";
													echo "			 <div class=\"col-md-5 input-group\">";
													echo "			 <span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-user\">hip</span>";
													echo "				</span>";
													echo "				<input type=\"text\" value=\"{$rec['hip']}\" class=\"form-control\" name=\"hip\" required/>";
													echo "			</div>";
													echo "		</div>";
													echo "		  <div class=\"form-group\">";
													echo "			<div class=\"col-md-5 input-group\">";
													echo "				<span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-phone\">chest</span>";
													echo "				</span>";
													echo "			  <input type=\"text\" class=\"form-control text_field\" id=\"pno\" name=\"chest\" value=\"{$rec['chest']}\" required/>";
													echo "			</div>";
													echo "		  </div>";
													echo "		  <div class=\"form-group\">";
													echo "			<div class=\"col-md-5 input-group\">";
													echo "			<span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-home\">shoulder</span>";
													echo "				</span>";
													echo "			  <input type=\"text\" class=\"form-control text_field\" id=\"country\" name=\"shoulder\" value=\"{$rec['shoulder']}\" required/>";
													echo "			</div>";
													echo "		  </div>";
													echo "		 <div class=\"form-group\">";
													echo "				<input type=\"submit\" name=\"submit32\" class=\" btn btn-default col-md-offset-3\"  value=\"Update\"/>";
													echo "		  </div>";
													echo "</form>";
								echo "		  </div>";
						}
//////////////////////////////////////////////////////////////////////////////////update like
if($action==32){
							$query="SELECT * from total where username='$username'";
															$result1 = mysql_query ($query);
														$rec=mysql_fetch_array($result1);
														echo "<div class=\"col-md-7 col-md-offset-4 \">";
							echo "<form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"mana2.php?user={$username}\" id=\"form1\">";
													echo "		  <div class=\"form-group\">";
													echo "			 <div class=\"col-md-5 input-group\">";
													echo "			 <span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-user\"></span>";
													echo "				</span>";
													$li=$rec['tos'];
													if($li==null or $li<=0){
														$rec['tos']=0;
														$a=0;
															}
													else{
														$rec['tos']=$rec['tos'];
														$a=1;
													}
													echo "				<input type=\"text\" value=\"{$rec['tos']}\" class=\"form-control\" name=\"like\" required/>";
													echo "			</div>";
													echo "		</div>";
													echo "				<input type=\"hidden\" name=\"sta\" value=\"$a\"/>";
													echo "		 <div class=\"form-group\">";
													echo "				<input type=\"submit\" name=\"submit32\" class=\" btn btn-default col-md-offset-1\"  value=\"Update\"/>";
													echo "		  </div>";
													echo "</form>";
								echo "		  </div>";
						}
//////////////////////////////////////////////////////////////////////////////////update fund
if($action==4){
							$query="SELECT * from fund where username='$username'";
															$result1 = mysql_query ($query);
														$rec=mysql_fetch_array($result1);
														echo "<div class=\"col-md-7 col-md-offset-4 \">";
							echo "<form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"mana2.php?user={$username}\" id=\"form1\">";
													echo "		  <div class=\"form-group\">";
													echo "			 <div class=\"col-md-5 input-group\">";
													echo "			 <span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-user\"></span>";
													echo "				</span>";
													echo "				<input type=\"text\" value=\"{$rec['balance']}\" class=\"form-control\" name=\"balance\" required/>";
													echo "			</div>";
													echo "		</div>";
													echo "		 <div class=\"form-group\">";
													echo "				<input type=\"submit\" name=\"submit4\" class=\" btn btn-default col-md-offset-1\"  value=\"Update\"/>";
													echo "		  </div>";
													echo "</form>";
								echo "		  </div>";
						}
///////////////////////////////////////////////////////////////////////////////////suspend user
if($action==5){
							$query="SELECT * from registration where username='$username'";
															$result1 = mysql_query ($query);
														$rec=mysql_fetch_array($result1);
														$pe3=$rec['status'];
																		if($pe3==10){
																			$pe="suspended";
																		}
																		if($pe3==2){
																			$pe="active";
																		}
														echo "<div class=\"col-md-7 col-md-offset-4 \">";
							echo "<form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"mana2.php?user={$username}\" id=\"form1\">";
													echo "		  <div class=\"form-group\">";
													echo "			 <div class=\"col-md-5 input-group\">";
													echo "			 <span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-user\">status</span>";
													echo "				</span>";
													echo "				<input type=\"text\" value=\"{$pe}\" class=\"form-control\" name=\"status\" readonly/>";
													echo "			</div>";
													echo "		</div>";
													echo "		 <div class=\"form-group\">";
													echo "				<input type=\"submit\" name=\"submit5\" class=\" btn btn-default col-md-offset-1\"  value=\"Change State\"/>";
													echo "		  </div>";
													echo "</form>";
								echo "		  </div>";
						}
if($action==51){
							$query="SELECT * from contest";
															$result1 = mysql_query ($query);
														$rec=mysql_fetch_array($result1);
														$pe3=$rec['state'];
																		if($pe3=="off"){
																			$pe="timer is off";
																		}
																		if($pe3=="on"){
																			$pe="timer is on";
																		}
														echo "<div class=\"col-md-7 col-md-offset-4 \">";
							echo "<form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"\" id=\"form1\">";
													echo "		  <div class=\"form-group\">";
													echo "			 <div class=\"col-md-5 input-group\">";
													echo "			 <span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-user\">status</span>";
													echo "				</span>";
													echo "				<input type=\"text\" value=\"{$pe}\" class=\"form-control\" name=\"status\" readonly/>";
													echo "			</div>";
													echo "		</div>";
													echo "		 <div class=\"form-group\">";
													echo "				<input type=\"submit\" name=\"submit51\" class=\" btn btn-default col-md-offset-1\"  value=\"Change State\"/>";
													echo "		  </div>";
													echo "</form>";
								echo "		  </div>";
						}
if($action==6){
$query="SELECT * from registration where username='$username'";
															$result1 = mysql_query ($query);
														$rec=mysql_fetch_array($result1);
														echo "<div class=\"col-md-7 col-md-offset-4 \">";
							echo "<form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"mana2.php?user={$username}\" id=\"form1\">";
													echo "		  <div class=\"form-group\">";
													echo "			 <div class=\"col-md-5 input-group\">";
													echo "			 <span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-user\">status</span>";
													echo "				</span>";
													echo "				<input type=\"text\" value=\"{$rec['username']}\" class=\"form-control\" name=\"username\" readonly/>";
													echo "			</div>";
													echo "		</div>";
													echo "		 <div class=\"form-group\">";
													echo "				<input type=\"submit\" name=\"submit6\" class=\" btn btn-default col-md-offset-1\"  value=\"Delete this user\"/>";
													echo "		  </div>";
													echo "</form>";
								echo "		  </div>";
}
						///////////////////////////////////////////////////////////////////update password///////				
	if($action==7){
							$query="SELECT * from registration where username='$username'";
															$result1 = mysql_query ($query);
														$rec=mysql_fetch_array($result1);
														echo "<div class=\"col-md-7 col-md-offset-4 \">";
							echo "<form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"mana2.php?user={$username}\" id=\"form1\">";
													echo "		  <div class=\"form-group\">";
													echo "			 <div class=\"col-md-5 input-group\">";
													echo "			 <span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-user\"></span>";
													echo "				</span>";
													echo "				<input type=\"password\" value=\"\" class=\"form-control\" name=\"p1\" placeholder=\"Enter password\" required/>";
													echo "			</div>";
													echo "		</div>";
													echo "		  <div class=\"form-group\">";
													echo "			<div class=\"col-md-5 input-group\">";
													echo "				<span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-phone\"></span>";
													echo "				</span>";
													echo "			  <input type=\"password\" class=\"form-control text_field\" id=\"pno\" name=\"p2\" value=\"\" placeholder=\"confirm password\" required/>";
													echo "			</div>";
													echo "		  </div>";
													echo "		 <div class=\"form-group\">";
													echo "				<input type=\"submit\" name=\"submit7\" class=\" btn btn-default col-md-offset-3\"  value=\"Update\"/>";
													echo "		  </div>";
													echo "</form>";
								echo "		  </div>";
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