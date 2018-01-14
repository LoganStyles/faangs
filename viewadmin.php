<?php
require_once("incl/participant2.php");?>


						<div class="col-md-12 t">
						<h3 style="margin-top:100px;TEXT-ALIGN:CENTER;">LIST OF SUB ADMINs</h3>
				<!----------------------------------------------------div body---------------------------------------------------->				
								<div class="row" style="margin-top:50px;">
					<div class="col-md-12">
					<?PHP
					
				$query1="select * from subadmin";
			
											$result1=mysql_query($query1);
											if(mysql_num_rows($result1)>0)
												{
														echo "<table class=\"table\">";
														echo "<thead>";
												
													
														echo "		<th >Username Name</th>";
														echo "		<th >MORE</th>";
														echo "		<th >DELETE</th>";
														
														echo " </thead>";
												while($rec=mysql_fetch_array($result1))
														{
															echo " <tr>";
														
														echo "		<td>{$rec["username"]}</td>";
														echo "		<td><a href=\"subadminprofile.php?id={$rec["username"]}&&id2=\">More Info</td>";
														
														echo "		<td><a href=\"delsubadmin.php?id={$rec["username"]}&&id2=1\">Delete</td>";
														
													
														
													
														
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