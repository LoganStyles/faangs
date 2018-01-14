<?php
				require_once("incl/cons.php");
				session_start();
				require_once("incl/function.php");
				cont();
						?>
				<?php
							if(isset($_GET['id']))
								{
									$contestant=test_input($_GET['id']);
									$_SESSION['username']=$contestant;
									$p=$_SESSION['username'];
									$query1="select * from picture where username='$contestant'";
									$result1=mysql_query($query1);
								}
								else if(isset($_GET['id2']))
									{
										$imgname=$_GET['id2'];							
										$contestant=$_GET['id3'];
											$p=$_SESSION['username'];echo $contestant;
										$query=" INSERT into  liketracker(username,imagename,member,stast)values
										('$contestant','$imgname','$p',1)";
										$k=mysql_query($query);
										if ($k)
										{
											///////////FUND UPDATE
											$query2="update fund set balance=balance-2 where username='$contestant'";
											$result=mysql_query($query2);
											//////////COUNT LIKES
											$query3="select Sum(stast) from liketracker where username='$contestant'";
											$result3=mysql_query($query3);
											$rec3=mysql_fetch_array($result3);
											//echo "number of count is".$rec3[0];
											/////////////////TOTAL LIKES
											$query4="select * from total where username='$contestant'";
											$result4=mysql_query($query4);
												if(mysql_num_rows($result4)>0){
													$query2="update total set tos='$rec3[0]' where username='$contestant'";
													$result=mysql_query($query2);
												}
												else{
													$query5="INSERT into total (username,tos)values
													('$contestant','$rec3[0]')";
													$result5=mysql_query($query5);
													}
											//header("Refresh:6; url=contest2.php?id=$contestant");
											header("location:contest2.php?id=$contestant");		
										}
										else
										{
											$nam="please try again";
											echo "<div class=\"alert alert-danger\">";
											echo "	<strong>";
											echo 	"{$nam}";
											echo "	</strong>";
											echo "</div>";
											header('Refresh:6; url=contest.php');
										}
									}
									else{
									echo "<div class=\"alert alert-danger\">";
									echo "	<strong>";
									echo 	"please select a model";
									echo "	</strong>";
									header('Refresh:6; url=contest.php');
								}
				?>
<!DOCTYPE html>
<html lang="en">
	<?php
		require_once("incl/title.php");
	?>
	<link rel="stylesheet" href="css/form.css">
	<link rel="stylesheet" href="css/contest.css">
		<link rel="stylesheet" href="css/contest2.css">
<body>
	<div class="container-fluild">
		<!--header line-->
						<?php
						require_once("incl/header2.php");
						?>
			<div class="clearfix"> </div>
		</div>
		<!--end of header line-->
		<!---content of your code-->
				<!--FORM BODY-->
		<!--HEADER ADVERT-->
		<div class="row ">
				<div class="col-md-8">
					<ul class="menu1">
					<li><a href="#">General</a></li>
					<li><a href="#">Business</a></li>
					<li><a href="#">Dating</a></li>
					<li><a href="#">Social</a></li>
					<li><a href="#">Religious</a></li>
					<li><a href="#">Model</a></li>
					</ul>
				</div>	
				<div style="float:right;margin-right:7em;font-weight:bold;font-size:1.2em;">Contest ends in:
					<?php
						include("incl/timer.php");
						?>
				</div>
	</div>
		<div class="row ">
				<div class="col-md-8 col-md-offset-3" style="margin-top:2em;margin-bottom:2em;">
					<div style="max-height:90px; overflow:hidden;">
						<img  class="img-responsive" src="images/top.jpg"/>
					</div>
				</div>					
		</div>
		<div class="row ">
				<div class="col-md-12" style="width:85%;text-align:center;margin-top:0.3em;">
					<h2>Emma gallery</h2>
				</div>					
		</div>
		<!---content of your code-->
		<div class="row">
				<div class="col-md-7 col-md-offset-1">
					<!----------------------------------------------------------first row-->
						<div class="row  slid">
							<div class="col-md-12">
							<?php
						////////////////  // <!-- Modal Content                with next and previous button  -->
								if(isset($_GET['id']))
								{
											if(mysql_num_rows($result1)>0)
											{
													$rec1=mysql_fetch_array($result1);
															echo "<div class=\"slideshow-container\">";
															echo 	"<a href=\"#\" class=\"prev\" onclick=\"plusSlides(-1);\">&#10094;</a>";
															echo 	"<a href=\"#\" class=\"next\" onclick=\"plusSlides(1);\">&#10095;</a>";
															echo    	"<div id\"myModal1\" class=\"modal1\">";
																		// <!-- Modal img -->
															echo 			"  <img class=\"img-responsive\" id=\"img011\" src=\"img/{$rec1['img']}\">";
															echo 		"</div>";
															echo "</div>";
															 //  <!--end of modal -->
											}	
								}		
					 ?>
					 <?php
					 ///////////////////second modal///////////////////////////////////////////////////////
								echo "<div class=\"secondmodal\" id=\"secondmodal\">";
								       echo "<div style=\"margin-bottom:4px;height:60px;width:150px;float:right\">
												<span class=\"exist\" onclick=\"document.getElementById('secondmodal').style.display='none'\">close
											</div>";
															echo    	"<div id\"\" class=\"second-content\">";
															echo 			"  <img class=\"img-responsive\" id=\"img012\" src=\"img/{$rec1['img']}\">";
															echo 		"</div>";
													$query2="select * from liketracker where imagename='${rec1['img']}' && username='$p'";
																			$result2=mysql_query($query2);
																			/**if(mysql_num_rows($result2)>0)
																				{
																					$rec2=mysql_fetch_array($result2);
																					{
																						if($rec2['imagename']==$rec1['img'])
																						{
																							echo "<div style=\"width:600px;height:100px;position:relative;margin-top:10px;\">";
																										//echo"<div id=\"share\">SHARE</div>";
																							echo "</div>";
																							echo "</div>";
																													}
																						}
																				}*/
																				
																				//else{
																						echo "<div style=\"width:600px;height:100px;position:relative;margin-top:10px;\">";
																								echo"<div id=\"like\"><a href=\"contest31.php?id2={$rec1['img']}&&id3=$contestant\">LIKE</a></div>";
																								echo"<div id=\"share\">SHARE</div>";
																						echo "</div>";
																						echo "</div>";
																					//}	
					 ?>
							</div>
						<!----------------------------------------------------------second row-->
							<div class="col-md-12">
							<?php
						////////////////third slide to replace content of slide with next button
								if(isset($_GET['id']))
								{
											if(mysql_num_rows($result1)>0)
											{
													while($rec1=mysql_fetch_array($result1))
													{
														echo"	<div class=\"slideshow-container2\">";
														echo"  	<div class=\"modal21\">";
														echo "<img src=\"img/{$rec1['img']}\" id=\"{$rec1['title']}\" class=\"p3\"/>"; 
															echo    "</div>";
															echo "</div>";
													}
													echo "<div class=\"clearfix\"> </div>";	
											}	
								}		
					 ?>
							</div>
							<!----------------------------------------------------------third row-->
							<div class="col-md-12" style="margin-top:10em">
							<h3 STYLE="text-align:center;font-weight:bold;font-size:3em;">CONTESTANT BIO-DATA</H3>
							<?php
							$query1="select * from registration where username='$contestant'";
											$result1=mysql_query($query1);
												if($rec=mysql_fetch_array($result1))
														{
															echo "<table class=\"table\">";
															echo "<thead><th>Personal data<th></thead>";
															echo " <tr  class=\"success\">";
															echo "		<td >Full Name</td>";
															echo "		<td> {$rec['fullname']}</td>";
															echo " </tr>";
															echo " <tr class=\"info\">";
															echo "		<td >Email</td>";
															echo "		<td> {$rec['email']}</td>";
															echo " </tr>";
															echo " <tr  class=\"success\">";
															echo "		<td >Phone Number</td>";
															echo "		<td> {$rec['phonenumber']}</td>";
															echo " </tr>";
															echo " <tr class=\"info\">";
															echo "		<td >Country</td>";
															echo "		<td> {$rec['country']}</td>";
															echo " </tr>";
															echo " <tr  class=\"success\">";
															echo "		<td >State</td>";
															echo "		<td> {$rec['state']}</td>";
															echo " </tr>";
															echo " <tr  class=\"info\">";
															echo "		<td >Email</td>";
															echo "		<td> {$rec['email']}</td>";
															echo " </tr>";
															echo " </table>";
														}
									//////////////////for model
															if($rec['model']=="NO")
																{
																	echo "<table class=\"table\">";
																	echo "<thead><th>Model Information<th></thead>";
																	echo " <tr class=\"info\">";
																	echo "		<td >Age</td>";
																	echo "		<td> {$rec['age']}</td>";
																	echo " </tr>";
																	echo " <tr class=\"success\">";
																	echo "		<td >Height</td>";
																	echo "		<td> {$rec['height']}</td>";
																	echo " </tr>";
																	echo " <tr class=\"info\">";
																	echo "		<td >Waist</td>";
																	echo "		<td> {$rec['waist']}</td>";
																	echo " </tr>";
																	echo " <tr class=\"success\">";
																	echo "		<td >Shoe</td>";
																	echo "		<td> {$rec['shoe']}</td>";
																	echo " </tr>";
																	echo " <tr class=\"info\">";
																	echo "		<td >Hip</td>";
																	echo "		<td> {$rec['hip']}</td>";
																	echo " </tr>";
																	echo " <tr class=\"success\">";
																	echo "		<td >Chest</td>";
																	echo "		<td> {$rec['chest']}</td>";
																	echo " </tr>";
																	echo " <tr class=\"info\">";
																	echo "		<td >Shoulder</td>";
																	echo "		<td> {$rec['shoulder']}</td>";
																	echo " </tr>";
																	echo " </table>";
																}
															else{
																	echo "";
																}		
							?>
							</div>
								<h3 STYLE="text-align:center;font-weight:bold;font-size:3em;">SIMILAR CONTESTANT</H3>
							<!----------------------------------------------------------fourth row-->
							<div class="col-md-12" style="margin-top:3em">
							<?php
							  $query="SELECT  total.tos,picture.title,picture.img,picture.category,picture.username, registration.age,registration.country,
									  registration.state,registration.fullname,registration.bio FROM picture left JOIN registration ON picture.username=registration.username 
									  left join total on picture.username=total.username
									  where profile='' LIMIT 4";
									$result1 = mysql_query ($query);
									//$result1=shuffle($result1);
													while($rec=mysql_fetch_array($result1))
													{
															echo "<div class=\"abouts\">";		
																	echo "<div class=\"col-md-3\" id=\"pix\">";
																					$k=($rec['username']);
																	echo "			<a href=\"contest2.php?id=$k\"><img src=\"img/{$rec['img']}\"></a>";
																	echo "</div>";
																	echo "<div class=\"col-md-6\" id=\"\">";
																	echo 		"<div id=\"about-infos\">";
																	echo "			<a href=\"contest2.php?id=$k\">	<h4>{$rec['fullname']}</h4></a>";
																	echo "				<p>{$rec['bio']}</p>";
																	echo        "</div>";
																	echo        "<div id=\"about-list\">";
																	echo "					<ul class=\"menu1\">
																						<li>Country:{$rec['country']}</li>
																						<li>State:{$rec['state']}</li>
																						<li>Age:{$rec['age']}</li>
																						<li>Category:{$rec['category']}</li>
																						</ul>";	
																	echo        "</div>";					
																	echo "</div>";
																	echo "<div class=\"col-md-3\">";
																	echo 		"<div id=\"about-infos\">";
																	echo "			<a href=\"contest2.php?id=$k\">	<h4>Total Likes</h4></a>";
																	echo "				<p style=\"font-size:5em;\">{$rec['tos']}</p>";
																	echo        "</div>";
																	echo        "<div id=\"\">";
																	echo "	";				
																	echo        "</div>";					
																	echo "</div>";
																	echo "<div class=\"clearfix\"> </div>";
															echo "</div>";
													}
							?>
							<!----------------------------------------------------------fifth row-->
							<div class="col-md-12" style="margin-top:1em;">
							<a href="#" class="btn btn-default col-md-7  col-md-offset-3">LOAD MORE</a>
							</div>
							</div>
					</div>
				</div>
					<div class="col-md-3" style="background:white;margin-left:1em;">
						<div class="row">
						<!--first row------------------------------------------------------------------>
							<div class="col-md-12">
						<!---right  slide----------------------------------->
						<h3 STYLE="text-align:center;font-weight:bold;font-size:2em;">Other Contestant</H3>
							<?php
							$query4="SELECT  total.tos,picture.title,picture.img,picture.category,picture.username, registration.age,registration.country,
									  registration.state,registration.fullname,registration.bio FROM picture left JOIN registration ON picture.username=registration.username 
									  left join total on picture.username=total.username
									  where profile='' LIMIT 4";
									$result4 = mysql_query ($query4);
									//$result1=shuffle($result1);
													while($rec=mysql_fetch_array($result4))
							{
								
								echo "<div class=\"row abouts2c\">";
								
								echo "		<div class=\"col-md-4 col-md-offset-1 abouts2\">";
								
								echo "			<a href=\"contest2.php?id=$k\"><img src=\"img/{$rec['img']}\"></a>";
								
								echo "		</div>";
								echo "		<div class=\"col-md-4 col-md-offset-1\" id=\"pix2\">";
								
								echo "			<a href=\"contest2.php?id=$k\">view gallery</a>";
								
								echo "		</div>";
								
						
						
								
								echo "</div>";
							}
								?>
							</div>
						<!--second row------------------------------------------------------------------>
							<div class="col-md-12" style="height:300px;width:338px;background: #ffef96;margin:3px;">
							facebook banner
							</div>
													<!--third row------------------------------------------------------------------>
							<div class="col-md-12">
							<img src="images/let.png"/>
							</div>
						</div>
					</div>	
		</div>
		<div class="row ">
				<div class="col-md-8 col-md-offset-3" style="margin-top:2em;margin-bottom:2em;">
					<div style="max-height:90px; overflow:hidden;">
						<img  class="img-responsive" src="images/top.jpg"/>
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
	<script type="text/javascript">
				var bpoo = document.querySelectorAll('img.p3');
				for (var i = 0; i < bpoo.length; i++)
					{
					// click calls pooFunction
					bpoo[i].addEventListener("click", poo2, false);
					}
				function poo2()
				{
					var modalImg = document.getElementById("img011");
						modalImg.src = this.src;
				}
			//////////////////////////////////////////////////////////////slideshow
			/**
			var lis=document.getElementById("liss");
					liss.style.display="block";
					var modalImg = document.getElementById("img011");
						modalImg.src = this.src;
						var fullPath = document.getElementById("img011").src;
						var filename = fullPath.replace(/^.*[\\\/]/, '');
						document.getElementById("myAnchor").href = "contest2.php?id2="+ filename+"&&id3="+a;
			*/
			var slideIndex = 1;
			function plusSlides(n) {
  showSlides(slideIndex += n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("p3");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length} ;
			var slides = document.getElementsByClassName("p3");
			var modalImg = document.getElementById("img011");
			modalImg.src=slides[slideIndex-1].src;	
}	
/////////////////////////////////////////////////////////////second slideshow;
var modal = document.getElementById('secondmodal');
var img = document.getElementById('img011');
var modalImg = document.getElementById("img012");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
}
//////////////////////////////////////////////////////right slide-----------------------------------
</script> 
</body>
</html>