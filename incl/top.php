
<?php


$query1="select * from advert where tops='1'";
											$result1=mysql_query($query1);
												while($rec=mysql_fetch_array($result1)){
									echo "<div  class=\"tops\">";				
						echo "<img   height=\"\" width=\"\" class=\"img-responsive\" src=\"banner/{$rec['imgname']}\"/>";
											echo "</div>";	
												}
												
					

?>