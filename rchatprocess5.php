	
<?php
ob_start();
	require_once("incl/cons.php");
	cont();
	
	require_once("incl/function.php");
	session_start();
	//$chk=$_SESSION['username'];
	$like=test_input($_POST['send']);
	
		//header("location:index.php")
	date_default_timezone_set("Africa/Lagos");
				$tbl_name="online";
				$dat=date("y-m-d");
				$time=time();
				$time_check=$time-3;
						$sql="SELECT * FROM $tbl_name WHERE username='$like'";
						$result=mysql_query($sql);
						$count=mysql_num_rows($result);
						if($count=="0")
						{
							$sql1="INSERT INTO $tbl_name(username,date, time,state)VALUES('$like','$dat', '$time','online')";
							$result1=mysql_query($sql1);
						}
						else {
							$sql2="UPDATE $tbl_name SET time='$time',state='online' WHERE username = '$like'";
							$result2=mysql_query($sql2);
						}
						
						
						$sql4="update $tbl_name  set state='away' WHERE time<$time_check";
						$result4=mysql_query($sql4);
						
					//<?php
		  //if($r2["state"]=="away"){
			//	}
		$onli="select online.username,online.state,picture.img from online left join picture on picture.username=online.username where online.username in
		  (select friendusername as s from friendlist where myusername='$like' union select myusername from friendlist where friendusername='$like')and picture.profile='yes'" ;
		  $re=mysql_query($onli);
		  while($r2=mysql_fetch_array($re)){
				if($r2["state"]=="online"){
					$tag=$r2['username'];
					echo"<div id=\"user24\"><a data-tag=\"{$r2['username']}\" href=\"#\"  onclick=\"create2('$tag')\" ><img src=\"img/{$r2['img']}\"/>{$r2['username']}<span id=\"stl\"><img src=\"img/onl.png\"></span></a></div>";
				}
				if($r2["state"]=="away"){
					$tag=$r2['username'];
					echo"<div id=\"user24\"><a data-tag=\"{$r2['username']}\" href=\"#\" onclick=\"create2('$tag')\"><img src=\"img/{$r2['img']}\"/>{$r2['username']}<span id=\"stl\"><img src=\"img/away.png\"></span></a></div>";
				}
				if($r2["state"]=="offline"){
					echo"<div><a data-tag=\"{$r2['username']}\" href=\"#\" ><img src=\"img/{$r2['img']}\"/>{$r2['username']}<span id=\"stl\"><img src=\"img/off.png\"></span></a></div>";
				}
		  }
?>		  
						
	
	
	
	
	
	