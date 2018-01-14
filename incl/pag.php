				
			<?php
			echo "<ul class=\"pagination\">";
			$range=8;
			if ($currentpage > 1) 
					{
						// $prevpage = $currentpage/$range;
					   echo " <li><a href=\"contest.php?currentpage=1\"><<</a></li> "; //last page
					
					   $prevpage = $currentpage - 1;
					   echo "<li> <a href=\"contest.php?currentpage=$prevpage\"> < </a></li> "; //one step back
					} 
			for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) 
			{
			   if (($x > 0) && ($x <= $totalpages)) 
			   {
				  if ($x == $currentpage) 
				  {
					echo "<li > <a href=\"#\" style=\"background:#fec303;\">[<b>$x</b>]</a></li>";
				  } 
				  else 
				  {
					 echo "<li> <a href=\"contest.php?currentpage=$x\">$x</a></li> ";
				  } 
			   } 
			} 
			if ($currentpage != $totalpages) 
				{
				   $nextpage = $currentpage + 1;
				   echo " <li><a href=\"contest.php?currentpage=$nextpage\">></a></li> "; //one step front
				    //$nextpage = $currentpage * 2;
					//$t=$nextpage
				   echo " <li><a href=\"contest.php?currentpage=$totalpages\">>></a></li> "; //final step
				}
																			
					echo "</ul>";?>