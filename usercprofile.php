 <?php ob_start();?>
<?php
require_once("incl/participant2.php");

?>
<?php
if(isset($_GET['id']))
							{
							$pe=test_input($_GET['id'])	;
							}
else{
	header('location:index.php');
}
?>

						<div class="col-md-12 t">
						
				<!-----------------------------------------------------------------form body------------------------------------>
				<div class="row">
					<div class="col-md-12">
				<?php
				$query="SELECT * from registration where username='$pe' limit 1";
															 
															$result1 = mysql_query ($query);
														$rec=mysql_fetch_array($result1);
														
															echo "<div class=\"col-md-7 col-md-offset-4 \">";
															echo "<h5 style=\"font-weight:bold;font-size:1em;\">$pe Registration detail</h5>";
				echo "<form class=\"form-horizontal\" role=\"form\" method=\"\" action=\"\" id=\"\">";
													echo "		  <div class=\"form-group\">";
													echo "			 <div class=\"col-md-5 input-group\">";
													echo "			 <span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-user\"></span>";
													echo "				</span>";
													echo "				<input type=\"text\" value=\"{$rec['fullname']}\" class=\"form-control\" name=\"fullname\" readonly/>";
													echo "			</div>";
													echo "		</div>";
													
													echo "		  <div class=\"form-group\">";
													echo "			<div class=\"col-md-5 input-group\">";
													echo "				<span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-phone\"></span>";
													echo "				</span>";
													echo "			  <input type=\"text\" class=\"form-control text_field\" id=\"pno\" name=\"phonenumber\" value=\"{$rec['phonenumber']}\" readonly/>";
													echo "			</div>";
													echo "		  </div>";
													echo "		  <div class=\"form-group\">";
													echo "			<div class=\"col-md-5 input-group\">";
													echo "			<span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-home\"></span>";
													echo "				</span>";
													echo "			  <input type=\"text\" class=\"form-control text_field\" id=\"country\" name=\"country\" value=\"{$rec['country']}\" readonly/>";
													echo "			</div>";
													echo "		  </div>";
													echo "		  <div class=\"form-group\">";
													echo "			<div class=\"col-md-5 input-group\">";
													echo "			<span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-road\"></span>";
													echo "				</span>";
													echo "			  <input type=\"text\" class=\"form-control text_field\" id=\"state\" name=\"state\" value=\"{$rec['state']}\" readonly/>";
													echo "			</div>";
													echo "		  </div>";
													echo "		   <div class=\"form-group\">";
													echo "				<div class=\"col-md-5 input-group\">";
													echo "				<span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-time\"></span>";
													echo "				</span>";
													echo "				  <input type=\"text\" class=\"form-control\" id=\"age\" name=\"age\" value=\"{$rec['age']}\" readonly/>";
													echo "				</div>";
													echo "			</div>";
													echo "		<div class=\"form-group\">";
													echo "			 <div class=\"col-md-5 input-group\">";
													echo "			 <span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-envelope\"></span>";
													echo "				</span>";
													$_SESSION['existingemail']=$rec['email'];
													
													echo "			<input type=\"email\" value=\"{$rec['email']}\" class=\"form-control\" name=\"email\" readonly/>";
													echo "			</div>";
													echo "		</div>";
													
													echo "		<div class=\"form-group\">";
													echo "			 <div class=\"col-md-5 input-group\">";
													echo "				<span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-pencil\"></span>";
													echo "				</span>";
													echo "				<textarea name=\"bio\" READONLy> {$rec["bio"]}</textarea>";
													echo "			</div>";
													echo "		</div>";
													
												//////////////////////////////////////
												if($rec['model']=='YES')
												{
														echo "		  <div class=\"form-group\">";
													echo "			 <div class=\"col-md-5 input-group\">";
													echo "			 <span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-user\">model status</span>";
													echo "				</span>";
													echo "				<input type=\"text\" value=\"{$rec['model']}\" class=\"form-control\" name=\"model\" readonly/>";
													echo "			</div>";
													echo "		</div>";
													echo "		  <div class=\"form-group\">";
													echo "			 <div class=\"col-md-5 input-group\">";
													echo "			 <span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-user\">height</span>";
													echo "				</span>";
													echo "				<input type=\"text\" value=\"{$rec['height']}\" class=\"form-control\" name=\"height\" readonly/>";
													echo "			</div>";
													echo "		</div>";
													
													echo "		  <div class=\"form-group\">";
													echo "			<div class=\"col-md-5 input-group\">";
													echo "				<span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-phone\">waist</span>";
													echo "				</span>";
													echo "			  <input type=\"text\" class=\"form-control text_field\" id=\"pno\" name=\"waist\" value=\"{$rec['waist']}\" readonly/>";
													echo "			</div>";
													echo "		  </div>";
													echo "		  <div class=\"form-group\">";
													echo "			<div class=\"col-md-5 input-group\">";
													echo "			<span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-home\">shoe</span>";
													echo "				</span>";
													echo "			  <input type=\"text\" class=\"form-control text_field\" id=\"country\" name=\"shoe\" value=\"{$rec['shoe']}\" readonly/>";
													echo "			</div>";
													echo "		  </div>";
													echo "<div class=\"form-group\">";
													echo "			 <div class=\"col-md-5 input-group\">";
													echo "			 <span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-user\">hip</span>";
													echo "				</span>";
													echo "				<input type=\"text\" value=\"{$rec['hip']}\" class=\"form-control\" name=\"hip\" readonly/>";
													echo "			</div>";
													echo "		</div>";
													
													echo "		  <div class=\"form-group\">";
													echo "			<div class=\"col-md-5 input-group\">";
													echo "				<span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-phone\">chest</span>";
													echo "				</span>";
													echo "			  <input type=\"text\" class=\"form-control text_field\" id=\"pno\" name=\"chest\" value=\"{$rec['chest']}\" readonly/>";
													echo "			</div>";
													echo "		  </div>";
													echo "		  <div class=\"form-group\">";
													echo "			<div class=\"col-md-5 input-group\">";
													echo "			<span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-home\">shoulder</span>";
													echo "				</span>";
													echo "			  <input type=\"text\" class=\"form-control text_field\" id=\"country\" name=\"shoulder\" value=\"{$rec['shoulder']}\" readonly/>";
													echo "			</div>";
													echo "		  </div>";
													echo"			<input type=\"hidden\" name=\"status\" value=\"1\"/>";
												}
												else{
													echo"			<input type=\"hidden\" name=\"status\" value=\"2\"/>";
												}
													
													echo "</form>";
													echo "		  </div>";
												?>
						</div>
						<div class="col-md-12">
										<?php 
							
							
														$pe3=$rec['phs'];
																		
																		if($pe3==0){
																			$pe="on";
																		}
																		if($pe3==2){
																			$pe="off";
																		}
							/**echo "<p style=\"text-align:center;font-weight:bold;\">Turn on/off phone number on your gallery</p>";
												echo "<div class=\"col-md-7 col-md-offset-4 \">";
							echo "<form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"edit.php?user={$contestant}\" id=\"form1\">";
													echo "		  <div class=\"form-group\">";
													echo "			 <div class=\"col-md-5 input-group\">";
													echo "			 <span class=\"input-group-addon\">";
													echo "							<span class=\"glyphicon glyphicon-phone\">status</span>";
													echo "				</span>";
																		
																			
													echo "				<input type=\"text\" value=\"{$pe}\" class=\"form-control\" name=\"status\" readonly/>";
													echo "			</div>";
													echo "		</div>";
													
													
													echo "		 <div class=\"form-group\">";
													echo "				<input type=\"submit\" name=\"edit\" class=\" btn btn-default col-md-offset-1\"  value=\"Change State\"/>";
													echo "		  </div>";
													echo "</form>";*/
								echo "		  </div>";
							
							
							
							
							?>
						
						</div>
			<!---------------------------------------------------------------body ends here!---------------------------------------->
			
			
							</div>
							</div>
						</div>
					</div>
				</div>
		</div>
			<!--FOOTER-->
		<footer>
			<?php 
			ob_end_flush();
			?>
		</footer>
	</div>
</body>

</html>