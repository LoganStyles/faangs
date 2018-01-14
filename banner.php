<?php
require_once("incl/participant2.php");

?>
				<?PHP
					if(isset($_POST['submit']))
			/**
					{
						$name=test_input($_POST['name']);
												
						$start=test_input($_POST['start']);
						$end=test_input($_POST['end']);
						$query1="select * from contest where status='active'";
						$k1=mysql_query($query1);
						if(mysql_num_rows($k1)>0)
						{
							$nam="<H4>you can only have one active contest</H4>";
																										
																			
																					
																		echo "<div class=\"alert alert-danger\">";
																		echo "	<strong>";
																										
																		echo 	"{$nam}";
																		echo "	</strong>";
																		echo "</div>";
						}
						else
						{
							$query2=" INSERT into contest(contestname,startdate,enddate,status)values('$name','$start','$end','active')";
				
										$k=mysql_query($query2);
										
								if ($k)
								{
								}
						}
					
					}*/
				?>
						
						<div class="col-md-12 t">
						<h3 style="margin-top:100px;TEXT-ALIGN:CENTER;">UPLOAD BANNER</h3>
				<!----------------------------------------------------div body---------------------------------------------------->				
								<div class="row" style="margin-top:50px;">
					<div class="col-md-5 col-md-offset-4">
						   <form class="form-horizontal" role="form" method="post" action="bannerprocess.php" enctype="multipart/form-data"/>	
								<fieldset>
								 <div class="form-group">
								<div class="col-md-7">
									<input type="text" class="form-control" id="title"  name="bname" placeholder="Enter name of banner" required>
								</div>
								</div>
								  <div class="form-group">
							
									<div class="col-md-5 col-md">
										<input type="file" class="btn-file" id="file"  name="file" onchange="">
									</div>
									</div>
									
									<div class="form-group">
								<div class="col-md-7">
									<input type="text" class="form-control" id="title"  name="sdat" placeholder="start date y/m/d" required>
								</div>
								</div>
								<div class="form-group">
								<div class="col-md-7">
									<input type="text" class="form-control" id="title"  name="edat" placeholder="end date y/m/d" required>
								</div>
								</div>
									
									
									
									
									
									
									<div class="form-group">
										<div class="checkbox col-md-5 col-md-offset-2">
											  <label><input type="checkbox" value="TOP" name="top">TOP</label>
											</div>
											<div class="checkbox col-md-5 col-md-offset-2">
											  <label><input type="checkbox" value="RIGHT" name="right">RIGHT</label>
											</div>
											<div class="checkbox col-md-5 col-md-offset-2">
											  <label><input type="checkbox" value="LEFT" name="left">LEFT</label>
											</div>
											<div class="checkbox col-md-5 col-md-offset-2">
											  <label><input type="checkbox" value="BOTTOM" name="bottom">BOTTOM</label>
											</div>
									</div>
									 <div class="form-group">
									  <button type="submit" class="btn btn-default col-md-5 col-md-offset-2" name="submit">UPLOAD</button>
										
									</div>
								  
								</fieldset>
							</form>
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