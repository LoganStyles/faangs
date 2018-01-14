 <?php ob_start();?>
<?php
require_once("incl/participant2.php");

?>
<?PHP
if(isset($_GET['id']))
								{
									
							$val=test_input($_GET['id']);
									if($val==1){
										$val2=test_input($_GET['id2']);
										$query1="delete  from advert where id='$val2'";
										$result=mysql_query($query1);
										if(mysql_affected_rows()>0){
											$nam="<H4> the banner have been successfully deleted</H4>";
											echo "<div class=\"alert alert-success\">";
											echo "	<strong>";
											echo 	"{$nam}";
											echo "	</strong>";
											echo "</div>";
											header('Refresh:1; url=del2.php');
										}
									}
									else{
										
											$nam="<H4>try again</H4>";
													echo "<div class=\"alert alert-danger\">";
													echo "	<strong>";
													echo 	"{$nam}";
													echo "	</strong>";
													echo "</div>";

													header('Refresh:1; url=del2.php');
											}
									
								}
?>
						<div class="col-md-12 t" style="overflow:scroll;">
				<!-----------------------------------------------------------------form body------------------------------------>
				<?php
				$query4="select * from advert";
											$result4=mysql_query($query4);
												if(mysql_num_rows($result4)>0){
													while($rec=mysql_fetch_array($result4))
													{
															echo "<div class=\"col-md-12 abouts\">";		
																	echo "<div class=\"col-md-3\" id=\"pix\">";
																			
																	echo "			<a href=\"del2.php?\"><img src=\"banner/{$rec['imgname']}\"></a>";
																	echo "</div>";
																	echo "<div class=\"col-md-3\" id=\"\">";
																	echo 		"<div id=\"about-infos\">";
																	//echo "			//<a href=\"contest2.php?id=$k\">	<h4>{$rec['fullname']}</h4></a>";
																	//echo "				<p>{$rec['bio']}</p>";
																	echo        "</div>";
																	echo "</div>";
																	echo "<div class=\"col-md-5\">";
																	echo 		"<div id=\"about-infos\">";
																	echo "				<a href=\"#\"><p style=\"background:; color:#414143;font-size:1em;font-weight:bold;margin-top:2em;\"<span class=\"glyphicon glyphicon-home\"
																	></SPAN>{$rec['bannername']}</p></a></br>";
																	//echo "			<a href=\"contest2.php?id=$k\">	<h4>Total Likes</h4></a>";
																	echo "				<a href=\"del2.php?id=1&&id2={$rec['id']}\"><p style=\"background:; color:#414143;font-size:1em;font-weight:bold;margin-top:2em;\"<span class=\"glyphicon glyphicon-trash\"
																	></SPAN>DELETE </p></a>";
																	//id3={$rec['img']
																	
																	echo        "</div>";
																	echo        "<div id=\"\">";
																	echo "	";				
																	echo        "</div>";					
																	echo "</div>";
																	echo "<div class=\"clearfix\"> </div>";
															echo "</div>";
													}
												}
												else{
													$nam="no advert left";
												echo "<div class=\"alert alert-danger\">";
												echo "	<strong>";
												echo 	"{$nam}";
												echo "	</strong>";
												echo "</div>";
												//header('Refresh:3; url=participate.php');
													}
					?>
			<!---------------------------------------------------------------body ends here!---------------------------------------->
							</div>
						</div>
					</div>
				</div>
		</div>
			<!--FOOTER-->
		<footer>
			<?php 
			//////////////////////////////////////random string generator
			
				include("incl/footer.php");
				ob_end_flush();
				//live:
			?>
		</footer>
	</div>
</body>

</html>