	
<?php
ob_start();
	require_once("incl/cons.php");
	cont();
	
	require_once("incl/function.php");
	session_start();
	$chk=$_SESSION['username'];
	if(isset($_POST['rec'])){
		$rec2=test_input($_POST['rec']);
		$sender=test_input($_POST['send']);
	/**$coun="select mes, tim,send as send2 from chat where send='$sender' and rec='$rec2' 
	 UNION select mes,tim, send as send2 from chat where send='$rec2' and rec='$sender' order by tim asc";*/
	$coun="select chat.mes, chat.tim,chat.dat,chat.send as send2,picture.img from chat left join picture on picture.username=chat.send 
	 where send='$sender' and rec='$rec2' and picture.profile='yes' UNION all select chat.mes, chat.tim,chat.dat,chat.send as 
	 send2,picture.img from chat left join picture on picture.username=chat.send where send='$rec2' and rec='$sender' 
	 and picture.profile='yes'order by dat,tim  asc ";//limit 10";
										   $rcount2=mysql_query($coun);
										   if(!$rcount2){
												echo  $rec2;
												echo ",";
										   echo "second error". mysql_error();}
											else{
											echo $rec2;
												echo ",";
											
										 while($r2=mysql_fetch_array($rcount2)){
										 // echo"<div style=\"width:100%;border:1px solid red;height:auto;margin:2px;float:left;\">";
												if($chk==$r2['send2']){
														echo "<div  class=\"col-md-12\" style=\"margin:0px;padding:0px;word-wrap: break-word\">";
														echo"	<div style=\"float:right;width:86%;margin-top:1px;word-wrap: break-word;background:#deeaee;border-radius:3px;padding:5px;\"> {$r2['mes']}</div>";
														//echo "	<div style=\"width:35%;float:left;border:1px solid teal;margin-top:1px\">{$r2['send2']}</div>";
														echo "</div>";
										  
												}
											 else {
														echo "<div class=\"col-md-12\"  style=\"margin:0px;padding:0px;\">";
														echo 	"<div style=\"width:13%;float:left;margin-top:1px;word-wrap: break-word;\"><img src=\"img/{$r2['img']}\" width=\"30\" height=\"30\" /></div>";
													   echo"  	 <div style=\"float:left;width:86%;margin-top:1px;word-wrap: break-word;background:#f4e1d2;border-radius:3px;padding:5px;\"> {$r2['mes']}</div>";
													  echo "</div>";
													}
										  
										  //echo "</div>";
										  
										  }
											}	
	}
	?>