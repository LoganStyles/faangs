<?php
ob_start();
require_once("incl/cons.php");
require_once("incl/function.php");

session_start();
cont();
?>
<!DOCTYPE html>

<html lang="en">
    <?php
    require_once("incl/title.php");
    ?>
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/contest.css">
    <link rel="stylesheet" href="css/countdown.css" type="text/css" media="all" />
    <style>
        #h{
            width:100%;
            position:fixed;
            z-index:1;
        }
    </style>
    <body>
        <!--header line-->
        <!--header line-->
        <?php
        //	include("incl/header2.php");
        ?>
        <!--------header2-->


        <div class="w3-header-bottom" id="h">
            <div class="w3layouts-logo">
                <h1>
                    <a href="index.php"><img class="img-responsive" src="images/logo.png"></a>
                </h1>
            </div>
            <div class="tops-nav">
                <!------------------------HEADER 2 IS FOR CONTEST/CONTEST2.PHP--------------->
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <?php
                            if (isset($_SESSION['username']) && ($_SESSION['status'] == 1)) {
                                //echo "	<li><a href=\"joincontest.php\">Join-Contest</a></li>";
                                echo "	<li><a href=\"participate.php\">Profile</a></li>";
                                echo "	<li><a href=\"incl/outs.php\">Sign-Out</a></li>";
                            } else if (isset($_SESSION['username']) && ($_SESSION['status'] == 2)) {
                                echo "	<li><a href=\"chat.php\">Forum</a></li>";
                                echo "	<li><a href=\"chat2.php?user={$_SESSION['username']}\">Profile</a></li>";
                                echo "	<li><a href=\"incl/outs.php\">Sign-Out</a></li>";
                            } else if (isset($_SESSION['admin'])) {
                                echo "	<li><a href=\"adminpage.php\">Dashboard</a></li>";
                                echo "	<li><a href=\"incl/outs.php\">Sign-Out</a></li>";
                            } else if (!isset($_SESSION['username'])) {
                                //echo "	<li><a href=\"joincontest.php\">Join-Contest</a></li>";
                                echo "	<li><a href=\"login.php\">Sign-In</a></li>";
                                echo "	<li><a href=\"registration.php\">Sign-Up</a></li>";
                            }
                            ?>
                        </ul>	
                        <div class="clearfix"> </div>
                    </div>	
                </nav>		
            </div>	
            <div class="row ">
                <div class="col-md-12">
                    <form method="post" action=""/>
                    <div class="col-md-8 input-group" style="float:left;">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-user">
                            </span>
                        </span>
                        <input type="text" placeholder="enter username of contestant" class="form-control" name="fullname"/>
                    </div>	
                    <div class="col-md-2" style="float:left;">
                        <input type="submit" class="form-control" name="submit1" value="search"/>
                    </div>	
                    </form>
                </div>	
            </div>		
            <div class="clearfix"> </div>
        </div>
        <!--------------------------------------------end of head---------------->
<?php
if (isset($_POST["submit1"])) {
    $contestant = test_input($_POST["fullname"]);

    $query4 = "select * from picture where username='$contestant'";
    $result4 = mysql_query($query4);
    if (mysql_num_rows($result4) > 0) {
        header("location:contest2.php?id=$contestant");
    } {
        $nam = "no record found";
        echo "<div class=\"alert alert-danger\">";
        echo "	<strong>";
        echo "{$nam}";
        echo "	</strong>";
        echo "</div>";
        header('Refresh:2; url=contest.php?category=general');
    }
}
?>

        <div class="container-fluild" style="padding-top:10em;">
            <div class="row " style="">
                <div class="col-md-8">
                    <ul class="menu1">
                        <li><span class="glyphicon glyphicon-th-list"></span><a href="contest.php?category=general">General</a></li>
                        <li><span class="glyphicon glyphicon-shopping-cart"></span><a href="contest.php?category=business">Business</a></li>
                        <li><span class="glyphicon glyphicon-heart-empty"></span><a href="contest.php?category=dating">Dating</a></li>
                        <li><span class="glyphicon glyphicon-tree-deciduous"></span><a href="contest.php?category=social">Social</a></li>
                        <li><span class="glyphicon glyphicon-home"></span><a href="contest.php?category=religious">Religious</a></li>
                        <li><span class="glyphicon glyphicon-sunglasses"></span><a href="contest.php?category=model">Model</a></li>
                    </ul>
                </div>	
                <div style="float:right;margin-right:7em;font-weight:bold;font-size:1.2em;">
<?php
include("incl/timer.php");
?>
                </div>
            </div>
            <!------------------------------------------------------h------------------>
            <div class="row " style="">
                <div class="col-md-8 col-md-offset-3 tops" style="">
<?php require_once("incl/top.php"); ?>

                </div>					
            </div>
            <!------------------------------------------------------h------------------>
            <div class="row" style="margin-top:1em;">
                <div class="col-md-2" style="">

<?php require_once("incl/left.php"); ?>

                </div>
                <!------------------------------------------------------h------------------>
                <div class="col-md-2" style="">
                    <div class="row left">
                        <div class="col-md-12" style="">
                            <h4 style="font-weight:bold;font-size:1.2em;">CATEGORY LISTING</H4>
                            <ul id="menu2">
                                <li><span class="glyphicon glyphicon-th-list"></span><a href="contest.php?category=general" class="active">General</a></li>
                                <li><span class="glyphicon glyphicon-shopping-cart"></span><a href="contest.php?category=business">Business</a></li>
                                <li><span class="glyphicon glyphicon-heart-empty"></span><a href="contest.php?category=dating">Dating</a></li>
                                <li><span class="glyphicon glyphicon-tree-deciduous"></span><a href="contest.php?category=social">Social</a></li>
                                <li><span class="glyphicon glyphicon-home"></span><a href="contest.php?category=religious">Religious</a></li>
                                <li><span class="glyphicon glyphicon-sunglasses"></span><a href="contest.php?category=model">Model</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row left" style="margin-top:3px;">
                        <div class="col-md-12">
                            <form class="form-horizontal" role="form" method="post" action="filter.php"/>
                            <h5>age</h5>
                            <div class="form-group">
                                <div class="cl col-md-3"style="" ><input type="text" class="form-control"  name="agemin" placeholder="min"/></div>
                                <div class="das" style="">--</div>
                                <div class="cl col-md-3" style=""><input type="text" class="form-control" name="agemax"  placeholder="max"/></div>
                            </div>
                            <h5>Number of like</h5>
                            <div class="form-group">
                                <div class="cl col-md-3"style="" ><input type="text" class="form-control" name="likemin" placeholder="min"/></div>
                                <div class="das" style="">--</div>
                                <div class="cl col-md-3" style=""><input type="text" class="form-control" name="likemax" placeholder="max"/></div>
                            </div>
                            <h5>gender</h5>
                            <div class="form-group" style="margin-left:3px;">
                                <div class="radio-inline"><input type="radio" class="" name="gender" value="male"/>Male</div>
                                <div class="radio-inline"><input type="radio" class="" name="gender" value="female" checked/>Female</div>
                            </div>
                            <h5>location</h5>
                            <div class="form-group">
                                <div class="col-md-8"style="" ><input type="text" class="form-control" name="location" placeholder="search location"/></div>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class=" btn btn-default col-md-offset-3"  value="Submit"/>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="">
                    <!--main body-->
<?php
/////////////////////////////////////pagination begin/////////////////////////////////////////////////////////////
if (isset($_GET["category"])) {

    $cat = $_GET["category"];
    $rowsperpage = 5;
    if ($cat == "general") {
        $query = "select * from picture where profile='YES'";
        $result = mysql_query($query);
        $total_records = mysql_num_rows($result);
    } else {
        $query = "select * from picture where profile='YES' and category='$cat'";
        $result = mysql_query($query);
        if (mysql_num_rows($result) > 0) {
            $total_records = mysql_num_rows($result);
        } else {
            $total_records = 0;
            $nam = "no record found under this category.see others below";
            echo "<div class=\"alert alert-danger\">";
            echo "	<strong>";
            echo "{$nam}";
            echo "	</strong>";
            echo "</div>";
            header('Refresh:3; url=contest.php?category=general');
        }
    }
    $totalpages = ceil($total_records / $rowsperpage);
    if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
        $currentpage = (int) $_GET['currentpage'];
    } else {
        $currentpage = 1;
    }
    if ($currentpage > $totalpages) {
        $currentpage = $totalpages;
    }
    if ($currentpage < 1) {
        $currentpage = 1;
    }
    $offset = ($currentpage - 1) * $rowsperpage;


    ////////////////////////////////////////pagination variable ends

    $query = "SELECT  total.tos,picture.title,picture.img,picture.category,picture.username, registration.age,registration.country,
									  registration.state,registration.fullname,registration.bio FROM picture left JOIN registration ON picture.username=registration.username 
									  left join total on picture.username=total.username
									  where picture.profile='YES'&& picture.category='$cat' order by picture.date asc LIMIT $offset, $rowsperpage ";
    $result1 = mysql_query($query);

    if (mysql_num_rows($result1) <= 0) {

        $query = "SELECT  total.tos,picture.title,picture.img,picture.category,picture.username, registration.age,registration.country,
									  registration.state,registration.fullname,registration.bio FROM picture left JOIN registration ON picture.username=registration.username 
									  left join total on picture.username=total.username
									  where picture.profile='YES' order by picture.date asc LIMIT $offset, $rowsperpage ";
        $result1 = mysql_query($query);
    }

    //Selecting the data from table but with limit
    //$result1=shuffle($result1);
    while ($rec = mysql_fetch_array($result1)) {
        echo "<div class=\"col-md-12 abouts\">";
        echo "<div class=\"col-md-3\" id=\"pix\">";
        $k = ($rec['username']);
        echo "			<a href=\"contest2.php?id=$k\"><img src=\"img/{$rec['img']}\"></a>";
        echo "</div>";
        echo "<div class=\"col-md-6\" id=\"\">";
        echo "<div id=\"about-infos\">";
        echo "			<a href=\"contest2.php?id=$k\">	<h4>{$rec['fullname']}</h4></a>";
        echo "				<p>{$rec['bio']}</p>";
        echo "</div>";
        echo "<div id=\"about-list\">";
        echo "					<ul class=\"menu1\">
																						<li>Country:{$rec['country']}</li>
																						<li>State:{$rec['state']}</li>
																						<li>Age:{$rec['age']}</li>
																						<li>Category:{$rec['category']}</li>
																						</ul>";
        echo "</div>";
        echo "</div>";
        echo "<div class=\"col-md-3\">";
        echo "<div id=\"about-infos\">";
        echo "			<a href=\"contest2.php?id=$k\"><h5 style=\"font-weight:bold;font-size:1.1em;\">Total Likes</h4></a>";
        if (($rec['tos'] == null)or $rec['tos'] <= 0) {
            $po = 0;
        } else {
            $po = $rec['tos'];
        }
        echo "				<p style=\"font-size:3em;\">{$po}</p>";
        echo "</div>";
        echo "<div id=\"\">";
        echo "	";
        echo "</div>";
        echo "</div>";
        echo "<div class=\"clearfix\"> </div>";
        echo "</div>";
    }
    ?>

                        <?php
                        echo "<ul class=\"pagination\">";
                        $range = 2;
                        if ($currentpage > 1) {
                            // $prevpage = $currentpage/$range;
                            echo " <li><a href=\"contest.php?currentpage=1&&category=$cat\"><<</a></li> "; //last page

                            $prevpage = $currentpage - 1;
                            echo "<li> <a href=\"contest.php?currentpage=$prevpage&&category=$cat\"> < </a></li> "; //one step back
                        }
                        for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
                            if (($x > 0) && ($x <= $totalpages)) {
                                if ($x == $currentpage) {
                                    echo "<li > <a href=\"#\" style=\"background:#fec303;\">[<b>$x</b>]</a></li>";
                                } else {
                                    echo "<li> <a href=\"contest.php?currentpage=$x&&category=$cat\">$x</a></li> ";
                                }
                            }
                        }
                        if ($currentpage != $totalpages) {
                            $nextpage = $currentpage + 1;
                            echo " <li><a href=\"contest.php?currentpage=$nextpage&&category=$cat\">></a></li> "; //one step front
                            //$nextpage = $currentpage * 2;
                            //$t=$nextpage

                            echo " <li><a href=\"contest.php?currentpage=$totalpages&&category=$cat\">>></a></li> "; //final step
                        }

                        echo "</ul>";
                    }
                    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////form filter
                    /////////////////////////////////////////////////////
                    else {

                        echo "<script>";
                        echo " window.location.href=\"index.php\"";
                        echo "</script>";
                    }
                    ?>
                </div>
                <!------------------------------------------------right advert--------------------------->
                <div class="col-md-1" style="width:200px;">
                    <?php require_once("incl/right.php"); ?>
                </div>
            </div>
        </div>
        <!---FOOTER ADVERT-->
        <div class="row ">
            <div class="col-md-8 col-md-offset-3 tops" style="margin-bottom:10px;margin-top:20px;">
                    <?php require_once("incl/bottom.php"); ?>
            </div>							
        </div>
        <!--FOOTER-->
        <footer>
                    <?php
                    include("incl/footer.php");
                    ob_end_flush();
                    ?>
        </footer>
    </div>	
</body>
<script type="text/javascript">
    function chk() {
        if (document.getElementById('model').checked)
        {
            document.getElementById('tes').style.display = 'block';
        } else
        {
            document.getElementById('tes').style.display = 'none';
        }
    }
    function chk2() {
        if (document.getElementById('model2').checked)
        {
            document.getElementById('tes2').style.display = 'block';
        } else
        {
            document.getElementById('tes2').style.display = 'none';
        }
    }
    function chk3() {
        if (document.getElementById('model3').checked)
        {
            document.getElementById('tes3').style.display = 'block';
        } else
        {
            document.getElementById('tes3').style.display = 'none';
        }
    }
    function chk4() {
        if (document.getElementById('model4').checked)
        {
            document.getElementById('tes4').style.display = 'block';
        } else
        {
            document.getElementById('tes4').style.display = 'none';
        }
    }
</script> 
</html>