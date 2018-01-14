<?php
require_once("incl/cons.php");
	function checkUser($userData = array()){
		if(!empty($userData)){
				$provider=$userData['oauth_provider'];
				$ids=$userData['oauth_uid'];
			$prevQuery="select * from registration where oauth_provider ='$provider' AND oauth_uid = '$ids'";
			$prevResult = mysql_query($prevQuery);
			if(mysql_num_rows($prevResult)> 0){
				   $email=$userData['email'];
					$query = "UPDATE registration SET email = '$email'
						WHERE 
						oauth_provider ='$provider'
						AND oauth_uid = '$ids'";
			}
			else
			{
				$email=$userData['email'];
				$query = "INSERT INTO registration(oauth_provider,oauth_uid ,email)
				values('$provider','$ids','$email')";
			}
			$query = mysql_query($query);
			$prevResult = mysql_query($prevQuery);
			$userData=mysql_fetch_array($prevResult);
		
		}
		return $userData;
	}
	
?>