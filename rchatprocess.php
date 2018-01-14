<?php
ob_start();
	require_once("incl/cons.php");
	cont();
	require_once("incl/function.php");
	session_start();
	if(isset($_POST['rec'])&&isset($_POST['sender'])){
			date_default_timezone_set("Africa/Lagos");
		$rec=test_input($_POST['rec']);
		$send=test_input($_POST['sender']);
		//$cat=test_input($_GET['cat']);
		$mes=test_input($_POST['msg']);
		$dat=date("y-m-d");
		$tim= date("Y-m-d  H:i:s");
		$cd=strlen($mes);
		$cs=strlen($rec);
		//if(1==1){
		if($cd>0 and $cs>0){
		$query2="insert into chat(send,rec,mes,dat,tim)values('$send','$rec','$mes','$dat','$tim')";
		
		$k=mysql_query($query2);
		$last_id = mysql_insert_id();
			if ($k){
				
				echo $rec;
				echo ",";
				
				echo "$send";
				//echo ",";
				//echo "$last_id";
				
			}
		}
		else{
			
		}
	}
	
	?>