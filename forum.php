<?php
ob_start();
	require_once("incl/cons.php");
	require_once("incl/function.php");
	//require_once("incl/mail2.php");
	//session_start();
	cont();
?>

<!DOCTYPE html>
<html lang="en">
<?php
require_once("incl/forumtitle.php");
?>
<body>
<style>

body{
	min-height: 100%;
}
body{
	background-image: radial-gradient(mintcream 0%, #F8EB23 100%);
}
h1{
	display: table;
	margin: 5% auto 0;
	text-transform: uppercase;
	font-family: 'Anaheim', sans-serif;
	font-size: 2em;
	font-weight: 400;
	text-shadow: 0 1px white, 0 2px black;
}
.container{
	margin: 4% auto;
	width: 210px;
	height: 140px;
	position: relative;
	perspective: 1000px;
}
#carousel{
	width: 100%;
	height: 100%;
	position: absolute;
	transform-style: preserve-3d;
	animation: rotation 20s infinite linear;
}
#carousel:hover{
	animation-play-state: paused;
}
#carousel figure{
	display: block;
	position: absolute;
	width: 90%;
	height: 78%;
	left: 10px;
	top: 10px;
	background: black;
	overflow: hidden;
	border: solid 5px black;
}
#carousel figure:nth-child(1){transform: rotateY(0deg) translateZ(288px);}
#carousel figure:nth-child(2) { transform: rotateY(40deg) translateZ(288px);}
#carousel figure:nth-child(3) { transform: rotateY(80deg) translateZ(288px);}
#carousel figure:nth-child(4) { transform: rotateY(120deg) translateZ(288px);}
#carousel figure:nth-child(5) { transform: rotateY(160deg) translateZ(288px);}
#carousel figure:nth-child(6) { transform: rotateY(200deg) translateZ(288px);}
#carousel figure:nth-child(7) { transform: rotateY(240deg) translateZ(288px);}
#carousel figure:nth-child(8) { transform: rotateY(280deg) translateZ(288px);}
#carousel figure:nth-child(9) { transform: rotateY(320deg) translateZ(288px);}
#carousel figure:nth-child(10) { transform: rotateY(360deg) translateZ(288px);}

#carousel img{
	-webkit-filter: grayscale(1);
	cursor: pointer;
	transition: all .5s ease;
	width:100%;
}
#carousel img:hover{
	-webkit-filter: grayscale(0);
  	transform: scale(1.2,1.2);
}

@keyframes rotation{
	from{
		transform: rotateY(0deg);
	}
	to{
		transform: rotateY(360deg);
	}
}




///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

</style>
<?php
require_once("incl/forumheader.php");
?>
<h1>CLICK TO CHAT  WITH FELLOW CONTESTANT IN ANY CATEGORY</h1>
<div class="container">
    <div id="carousel">
        <figure><a href="chat.php?category=fashion"><img src="images/1.jpg" alt=""></a></figure>
        <figure><a href="chat.php?category=fashion"><img src="images/2.jpg" alt=""></a></figure>
        <figure><a href="chat.php?category=fashion"><img src="images/3.jpg" alt=""></a></figure>
        <figure><a href="chat.php?category=fashion"><img src="images/4.jpg" alt=""></a></figure>
        <figure><a href="chat.php?category=fashion"><img src="images/5.jpg" alt=""></a></figure>
        <figure><a href="chat.php?category=fashion"><img src="images/6.jpg" alt=""></a></figure>
        <figure><a href="chat.php?category=fashion"><img src="images/7.jpg" alt=""></a></figure>
        <figure><a href="chat.php?category=fashion"><img src="images/1.jpg" alt=""></a></figure>
        <figure><a href="chat.php?category=fashion"><img src="images/2.jpg" alt=""></a></figure>
        <figure><a href="chat.php?category=fashion"><img src="images/3.jpg" alt=""></a></figure>
    </div>
</div>

<div>
<?php 
				
				
			?>
</div>

</body>

</html>