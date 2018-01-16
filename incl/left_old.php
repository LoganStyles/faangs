<?php
$query1="select * from vip  order by rand()";
											$result1=mysql_query($query1);
												while($rec=mysql_fetch_array($result1)){
													echo "<div  class=\"lef\">";
						echo "<a href=\"chat2.php?user={$rec['username']}\"><img  class=\"img-responsive mySlides\" src=\"vip/{$rec['image']}\"/></a>";
								echo "</div>";				
												}
?>
<script>
	var col=0;
	showSli();
function showSli() {
  var i;
 /** var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) 
  {
      slides[i].style.display = "none";
  }*/
  var slides = $(".mySlides");
for(var i=0; i<slides.length; i++){
    var element = slides.eq(i);
    element.hide();
}
  
  
		//var slides = document.getElementsByClassName("mySlides");
		var slides = $(".mySlides");
		lent=slides.length;
		var total=Math.ceil(lent/3);  
		col++;
		if (col >total) {col = 1}
		var row;
		for(row=3*col-2; row<=3*col; row++)
		{
				 // slides[row-1].style.display = "block";
				var element2 = slides.eq(row-1);
				element2.fadeIn(3000);
		}
		setTimeout(showSli,5000);
	}
	
</script>