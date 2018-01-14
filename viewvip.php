<?php
require_once("incl/participant2.php");?>


						<div class="col-md-12 t">
						<h3 style="margin-top:100px;TEXT-ALIGN:CENTER;">LIST OF VIP(s)</h3>
				<!----------------------------------------------------div body---------------------------------------------------->				
								<div class="row" style="margin-top:50px;">
					<div class="col-md-12">
					<?PHP
					
				$query1="select * from vip";
			
											$result1=mysql_query($query1);
											if(mysql_num_rows($result1)>0)
												{
														echo "<table class=\"table\">";
														echo "<thead>";
												
													
														echo "		<th >Image</th>";
														echo "		<th >Username</th>";
														echo "		<th >DELETE</th>";
														
														echo " </thead>";
												while($rec=mysql_fetch_array($result1))
														{
															echo " <tr>";
															if($rec['image']!=null){
														echo "		<td><img src=\"vip/{$rec['image']}\" width=\"150\" height=\"150\"/> </td>";
															}
														else{
														echo "		<td><img src=\"vip/female.jpg\" width=\"150\" height=\"150\"/> </td>";
														}
														echo "		<td>{$rec["username"]}</td>";
														
														echo "		<td><a href=\"delsubadmin.php?id24={$rec["username"]}&&id3=3\">Delete</td>";
														
													
														
													
														
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