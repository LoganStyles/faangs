<?php
require_once("incl/cons.php");
require_once("incl/ses.php");
cont();
?>
<!DOCTYPE html>
<style>
    .men1 li {
        display: inline-block;
        color: #000;
        padding: 8px 0 8px 16px;
        text-decoration: none;
        font-size:2em;
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
        include("incl/header3.php");
        include("incl/function.php");
        ?>
        <div class="clearfix"> </div>
    </div>
    <!--------header2-->
    <div class="container-fluild">
        <div class="row" style="margin:0px;">
            <div class="col-md-12" style="background:#fec303;">
                <?php
                //ECHO $_SESSION['status'];
                $contestant = $_SESSION['username'];
                if (isset($_SESSION['username']) && ($_SESSION['status'] == 2)) {
                    $query = "SELECT * from total where username='$contestant' limit 1";
                    $result1 = mysql_query($query);
                    $rec = mysql_fetch_array($result1);
                    $query2 = "SELECT * from fund where username='$contestant' limit 1";
                    $result2 = mysql_query($query2);
                    $rec2 = mysql_fetch_array($result2);
                    echo "<div class=\"men1\">";
                    echo"<ul>";
                    echo "	<li>Total like:";
                    if ($rec['tos'] == null) {
                        echo "0";
                    } else {
                        echo "{$rec['tos']}";
                    }
                    echo"</li>";
                    echo "	<li id=\"fund\">Fund Balance:";
                    if ($rec2['balance'] == null || $rec2['balance'] <0) {
                        echo "0";
                    } else {
                        echo $rec2['balance'];
                    }
                    echo "<img src=\"images/money2.png\" class=\"img-rounded\" /></li>";
                    echo"</ul>";
                    echo "</div>";
                }
                $query21 = "SELECT * from picture where username='$contestant' and profile='YES' limit 1";
                $result21 = mysql_query($query21);
                ?>
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
<?php
if (isset($_SESSION['username']) && ($_SESSION['status'] == 1)) {
    echo" <ul class=\"nav navbar-nav\" id=\"pro\">";
    $gen = $_SESSION['sex'];
    if (mysql_num_rows($result21) > 0) {
        $rec21 = mysql_fetch_array($result21);
        $pic = $rec21['img'];
        //echo $pic;
        echo"		<li><img src=\"img/{$pic}\" class=\"img-rounded\" width=\"250px\" height=\"200px\"/></li>";
    } else {
        if ($gen == 'FEMALE') {
            echo"		<li><img src=\"images/female.jpg\" class=\"img-rounded\" width=\"250px\" height=\"200px\"/></li>";
        } else {
            echo"		<li><img src=\"images/male.png\" class=\"img-rounded\" width=\"250px\" height=\"200px\"/></li>";
        }
    }
    echo"		<li><a href=\"participate.php\"><span class=\"glyphicon glyphicon-user\"></span>PROFILE</a></li>";
    echo"		<li><a href=\"social.php\"><span class=\"glyphicon glyphicon-user\"></span>Complete Profile Registration</a></li>";
    // echo"		<li><a href=\"uploadimage.php\"><span class=\"glyphicon glyphicon-upload\"></span>UPLOAD IMAGE</a></li>";
    // echo"		<li><a href=\"buycredit.php\"><span class=\"glyphicon glyphicon-usd\"></span>BUY CREDIT</a></li>";
    // echo"		<li><a href=\"request.php\"><span class=\"glyphicon glyphicon-usd\"></span>REQUEST PAYMENT</a></li>";
    //echo"		<li><a href=\"mypage.php\"><span class=\"glyphicon glyphicon-home\"></span>MY PAGE</a></li>";
    echo" </ul>";
}
if (isset($_SESSION['username']) && ($_SESSION['status'] == 2)) {
    echo" <ul class=\"nav navbar-nav\" id=\"pro\">";
    $gen = $_SESSION['sex'];
    if (mysql_num_rows($result21) > 0) {
        $rec21 = mysql_fetch_array($result21);
        $pic = $rec21['img'];
        $pic = strtolower($pic);
        //$pic='1.jpg';
        //echo $pic;
        echo"		<li><img src=\"img/{$pic}\" class=\"img-rounded\" width=\"250px\" height=\"200px\"/></li>";
    } else {
        if ($gen == 'FEMALE') {
            echo"		<li><img src=\"images/female.jpg\" class=\"img-rounded\" width=\"250px\" height=\"200px\"/></li>";
        } else {
            echo"		<li><img src=\"images/male.png\" class=\"img-rounded\" width=\"250px\" height=\"200px\"/></li>";
        }
    }
    echo"		<li><a href=\"chat2.php?user=$contestant\"><span class=\"glyphicon glyphicon-user\"></span>PROFILE</a></li>";
    //echo"		<li class=\"dropdown\" id=\"\">";
    // echo"			<a href=\"#\" class=\"\" onmouseover=\"myFunction()\"><span class=\"glyphicon glyphicon-home\">My Page</a>";
    //  echo"			 <ul class=\"\" id=\"myDropdown\">";
    $query1113 = "select * from registration where username='$contestant'";
    $result131 = mysql_query($query1113);
    $rec131 = mysql_fetch_array($result131);
    $nu = $rec131['phs'];
    echo"		<li><a href=\"uploadimage.php\"><span class=\"glyphicon glyphicon-upload\"></span>UPLOAD IMAGE</a></li>";
    echo"		<li><a href=\"chat.php\"><span class=\"glyphicon glyphicon-share-alt\"></span>FORUM</a></li>";
    echo"		<li><a href=\"buycredit.php\"><span class=\"glyphicon glyphicon-usd\"></span>BUY CREDIT</a></li>";
    echo"		<li><a href=\"request.php\"><span class=\"glyphicon glyphicon-usd\"></span>REQUEST PAYMENT</a></li>";
    $vip = "select * from vip where username='$contestant'";
    $vip1 = mysql_query($vip);
    if (mysql_num_rows($vip1) > 0) {
        echo"		<li><a href=\"vipupload.php\"><span class=\"glyphicon glyphicon-home\"></span>VIP PHOTO</a></li>";
    } else {
        echo"		<li><a href=\"vipcredit.php\"><span class=\"glyphicon glyphicon-home\"></span>VIP PHOTO</a></li>";
    }
    echo"		<li><a href=\"del.php\" onmouseover=\"myFunction21()\"><span class=\"glyphicon glyphicon-plus\"></span>PICTURE MANAGEMENT</a></li>";
    echo"		<li><a href=\"edit.php\"><span class=\"glyphicon glyphicon-pencil\"></span>EDIT PROFILE</a></li>";

    echo" </ul>";
}
?>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
                <script>
                    function myFunction() {
                        var t = document.getElementById("myDropdown");
                        t.style.display = "block";
                    }
                    function myFunction2() {
                        var t = document.getElementById("myDropdown");
                        t.style.display = "none";
                    }
                    function myFunction1() {
                        var t = document.getElementById("myDropdown1");
                        t.style.display = "block";
                    }
                    function myFunction21() {
                        var t = document.getElementById("myDropdown1");
                        t.style.display = "none";
                    }
// Close the dropdown menu if the user clicks outside of it
                </script>
            </div>
            <div class="col-md-8" style="background:#F5F5F5;">
                <div class="row" style="">