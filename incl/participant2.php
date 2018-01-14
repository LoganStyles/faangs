<?php
require_once("incl/cons.php");
require_once("incl/ses2.php");
cont();
$admin = 'admin';
?>
<!DOCTYPE html>
<style>
    li #vip{
        display:none;
    }
    ul li:hover #vip{
        display:block;
        padding-left:2em;
    }
    li #madim{
        display:none;
    }
    ul li:hover #madim{
        display:block;
        padding-left:2em;

    }
</style>
<html lang="en">
    <?php
    require_once("incl/title.php");
    ?>
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/contest.css">
    <link rel="stylesheet" href="css/profile2.css">
    <body>
        <!--header line-->
        <!--header line-->
        <?php
        include("incl/adminheader.php");
        require_once("incl/function.php");
        ?>
        <div class="clearfix"> </div>
    </div>
    <!--------header2-->
    <div class="container-fluild">
        <div class="row" style="margin:0px;">
            <div class="col-md-12" style="background:#fec303;height:50px;">
                <?php echo "" ?>
            </div>
        </div>
        <!---side nav-->
        <div class="row" style="margin:0;">
            <div class="col-md-3" style="background:#fec303;margin-top:30px;">
                <div class="sidebar-nav">
                    <div class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse sidebar-navbar-collapse">
                            <ul class="nav navbar-nav" id="pro">
                                <?php //echo $_SESSION['admin'];?>
                                <?php
                                echo "<li><img src=\"images/female.jpg\" class=\"img-rounded\" width=\"250px\" height=\"200px\"/></li>";
                                if (isset($_SESSION['createcontest']) and ( $_SESSION['createcontest'] == 1) or $_SESSION['admin'] == "$admin") {
                                    echo "<li><a href=\"adminpage2.php\"><span class=\"glyphicon glyphicon-plus\"></span>Create Contest</a></li>";
                                }
                                if (isset($_SESSION['paymentrequest']) and ( $_SESSION['paymentrequest'] == 1) or $_SESSION['admin'] == "$admin") {
                                    echo "<li><a href=\"approve.php\"><span class=\"glyphicon glyphicon-usd\"></span>Payment request</a></li>";
                                }
                                if (isset($_SESSION['vcontestant']) and ( $_SESSION['vcontestant'] == 1) or $_SESSION['admin'] == "$admin") {
                                    echo "<li><a href=\"stats.php\"><span class=\"glyphicon glyphicon-stats\"></span>View Contestant</a></li>";
                                }
                                if (isset($_SESSION['uploadb']) and ( $_SESSION['uploadb'] == 1) or $_SESSION['admin'] == "$admin") {
                                    echo "<li><a href=\"banner.php\"><span class=\"glyphicon glyphicon-cloud-upload\"></span>Upload Banner</a></li>";
                                }
                                if (isset($_SESSION['deleteb']) and ( $_SESSION['deleteb'] == 1) or $_SESSION['admin'] == "$admin") {
                                    echo "<li><a href=\"del2.php\"><span class=\"glyphicon glyphicon-cloud-upload\"></span>Delete Banner</a></li>";
                                }
                                if (isset($_SESSION['xchange']) and ( $_SESSION['xchange'] == 1) or $_SESSION['admin'] == "$admin") {
                                    echo "<li><a href=\"rate.php\"><span class=\"glyphicon glyphicon-cloud-upload\"></span>Set Exchange Rate</a></li";
                                }
                                if ($_SESSION['admin'] == "$admin") {
                                    echo "<li><a href=\"chang.php\"><span class=\"glyphicon  glyphicon-lock\"></span>Change password</a></li>";
                                }
                                if ($_SESSION['admin'] == "$admin") {
                                    echo "<li><a href=\"mana2.php?id=timer&&act=51\"><span class=\"glyphicon  glyphicon-lock\"></span>Change Timer state</a></li>";
                                }
                                if ($_SESSION['admin'] == "$admin") {
                                    echo "<li><a href=\"adminchangeuser.php\"><span class=\"glyphicon  glyphicon-lock\"></span>Another username</a></li>";
                                }
                                if ($_SESSION['admin'] == "$admin") {
                                    echo "<li><a href=\"#\" id=\"admin\"><span class=\"glyphicon  glyphicon-user\"></span>Manage Admin</a>";
                                    echo "    <ul id=\"madim\">";
                                    echo "		<li><a href=\"manageadmin.php\">Create Admin</a></li>";
                                    echo "		<li><a href=\"viewadmin.php\">View Admin</a></li>";
                                    echo "	</ul>";
                                    echo "</li>";
                                }

                                echo "<li><a href=\"#\"><span class=\"glyphicon  glyphicon-user\"></span>Manage Vip</a>";
                                echo "		<ul id=\"vip\">";
                                if (isset($_SESSION['viewvip']) and ( $_SESSION['viewvip'] == 1) or $_SESSION['admin'] == "$admin") {
                                    echo "			<li><a href=\"viewvip.php\">View Vip</a></li>";
                                }
                                if (isset($_SESSION['addvip']) and ( $_SESSION['addvip'] == 1) or $_SESSION['admin'] == "$admin") {
                                    echo "			<li><a href=\"addvip.php\">Add Vip</a></li>";
                                }
                                if ($_SESSION['admin'] == "$admin") {
                                    echo "<li><a href=\"vipupload2.php\">Upload Vip Photo</a></li>";
                                }

                                echo "		</ul>";
                                echo "</li>";



                                /**
                                  echo"		<li class=\"dropdown\" id=\"\">";
                                  echo"			<a href=\"#\" class=\"dropbtn\" onmouseover=\"myFunction()\"><span class=\"glyphicon glyphicon-envelope\">Message</a>";
                                  echo"			 <ul class=\"dropdown-content\" id=\"myDropdown\">";
                                  if(isset($_SESSION['messagepart']) and ($_SESSION['messagepart']==1) or $_SESSION['admin']=="$admin"){
                                  echo"			<li><a href=\"admmsg.php\" >MESSAGE PARTICIPANT(s)</a></li>";
                                  }
                                  if(isset($_SESSION['messagenoti']) and ($_SESSION['messagenoti']==1) or $_SESSION['admin']=="$admin"){
                                  echo"				<li><a href=\"admnoti.php\" onmouseout=\"myFunction2()\">NOTIFICATION</a></li>";
                                  }
                                  echo" 		</ul>";
                                  echo"      </li>"; */
                                echo "</ul>
						</div>
					</div>
				</div>
				</div>";
                                ?>
                                <script>
                                    function myFunction() {
                                        var t = document.getElementById("myDropdown");
                                        t.style.display = "block";
                                    }
                                    function myFunction2() {
                                        var t = document.getElementById("myDropdown");
                                        t.style.display = "none";
                                    }
// Close the dropdown menu if the user clicks outside of it
                                </script>
                                <div class="col-md-8" style="background:#F5F5F5;">
                                    <div class="row" style="">