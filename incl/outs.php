<?php

ob_start();
require_once("cons.php");
require_once("function.php");
require_once("ses.php");
cont();
date_default_timezone_set('Africa/Lagos');
?>
<?php

$user = $_SESSION['username'];
//chk if subadmin
if(isset($_SESSION['admin_type']) &&($_SESSION['admin_type']=="sub") ){
    $now=date('Y-m-d H:i:s');
    $usr=$_SESSION['admin'];
    $query_logout = " INSERT into admin_logs(username,action,date_created)values('$usr','logout','$now')";
    $k = mysql_query($query_logout);
    if ($k) { }
}
//$sql="delete from online where username='$user'";
mysql_query($sql);
$_SESSION = array();


if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 42000, '/');
}


session_destroy();
header('location:../index.php');
?>
		
