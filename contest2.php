<?php require_once("incl/mail2.php"); ?>
<link rel="stylesheet" href="css/button.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/countdown.css" type="text/css" media="all" />
<?php
require_once("incl/cons.php");

session_start();
require_once("incl/function.php");

cont();
if (isset($_SESSION["username"])) {
    $liker = $_SESSION["username"];
}
?>
<?php
if (isset($_GET['id'])) {
    $contestant = test_input($_GET['id']);
    $_SESSION['user'] = $contestant;
    $p = $_SESSION['user'];
    $query1 = "select * from picture where username='$contestant'";
    $result1 = mysql_query($query1);
    if (mysql_num_rows($result1) > 0) {
        
    } else {
        header('location:contest.php?category=general.php');
    }
} else if (isset($_GET['id2'])) {
    $imgname = $_GET['id2'];
    $contestant = $_GET['id3'];
    $pe = $_SESSION['username'];
    $query = " INSERT into  liketracker(username,imagename,member,stast)values
										('$contestant','$imgname','$pe',1)";
    $k = mysql_query($query);
    if ($k) {


        ////////////select email
        $emailss = "select * from registration where username='$contestant'";
        $emai = mysql_query($emailss);
        $remail = mysql_fetch_array($emai);
        echo $remail['email'];
        $email2 = $remail['email'];
        echo "<br>{$pe}";


        $headers = "From:okomemmanuel1@gmail.com" . "\r\n";
        $subject = 'Faangs Notification';
        $message = "
												<p>{$pe} Liked your Picture 
												</p>
												";
        $mail->sendmail("$email2", "$message", "$subject");


        ////////////////////////////////////////////////////////////////////////////									
        //if(mysql_num_rows($emai)>0)
        //	header("location:index.php");
        ///////////FUND UPDATE


        $query2 = "update fund set balance=balance-2 where username='$contestant'";
        $result = mysql_query($query2);
        //////////COUNT LIKES
        /*         * $query3="select Sum(stast) from liketracker where username='$contestant'";
          $result3=mysql_query($query3);
          $rec3=mysql_fetch_array($result3); */
        //echo "number of count is".$rec3[0];
        /////////////////TOTAL LIKES
        $query4 = "select * from total where username='$contestant'";
        $result4 = mysql_query($query4);
        if (mysql_num_rows($result4) > 0) {
            $result200 = mysql_fetch_array($result4);
            echo "initial " . $result200['tos'];
            $t = $result200['tos'] + 1;

            //echo "finaal".$t;
            $query2 = "update total set tos='$t' where username='$contestant'";
            $result = mysql_query($query2);
        } else {
            $query5 = "INSERT into total (username,tos)values
													('$contestant','1')";
            $result5 = mysql_query($query5);
        }
        //header("Refresh:6; url=contest2.php?id=$contestant");
        header("location:contest2.php?id=$contestant");
    } else {
        $nam = "please try again";
        echo "<div class=\"alert alert-danger\">";
        echo "	<strong>";
        echo "{$nam}";
        echo "	</strong>";
        echo "</div>";
        header('Refresh:6; url=contest.php');
    }
} else {
    header('location:contest.php?category=general.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
require_once("incl/title.php");
?>
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/contest.css">
    <link rel="stylesheet" href="css/contest2.css">
    <style>
        #h{
            width:100%;
            position:fixed;
            z-index:1;
        }
    </style>
    <body>
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <div class="container-fluild">
            <!--header line-->
<?php
//require_once("incl/header2.php");
?>

            <div class="w3-header-bottom" id="h">
                <div class="w3layouts-logo">
                    <h1>
                        <a href="index.php"><img src="images/logo.png"></a>
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




















            <div class="clearfix"> </div>
        </div>
        <!--end of header line-->
        <!---content of your code-->
        <!--FORM BODY-->
        <!--HEADER ADVERT-->
        <div class="row " style="padding-top:10em;">
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
require_once("incl/timer.php");
?>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-8 col-md-offset-3 tops" style="margin-bottom:10px;">
<?php require_once("incl/top.php"); ?>
            </div>					
        </div>
        <div class="row ">
            <div class="col-md-7 col-md-offset-1" style="width:58%;text-align:center;margin-top:0.3em;background:#414143;margin-bottom:0.4em;">
                <h2 class="btn2" style=" color:#FFC20F;">
<?php
if (isset($_GET['id'])) {
    $contestant = strtoupper($contestant);
    echo "{$contestant}'S GALLERY";
}
?>
                </h2>
            </div>	
            <DIV CLASS="col-md-3" STYLE="TEXT-ALIGN:CENTER;FONT-SIZE:1.3EM;margin-left:1em;background:#FFC20F;FONT-WEIGHT:BOLD;">
                TOTAL LIKES<?php
if (isset($_GET['id'])) {
    $us = $_GET['id'];
    $query11 = "select * from total where username='$us'";
    $result11 = mysql_query($query11);
    if (mysql_num_rows($result11) > 0) {
        $rec12 = mysql_fetch_array($result11);
        echo "<P STYLE=\"TEXT-ALIGN:CENTER;FONT-SIZE:2EM;margin-left:1em;background:#FFC20F;\">{$rec12["tos"]}</P>";
    } else {
        echo "<P STYLE=\"TEXT-ALIGN:CENTER;FONT-SIZE:2EM;margin-left:1em;background:#FFC20F;\">0</P>";
    }
}
?>
            </DIV>
        </div>
        <!---content of your code-->
        <div class="row">
            <div class="col-md-7 col-md-offset-1" style="background:white;">
                <!--this shows front page picture-->
                <div class="col-md-12">
                <?php
                ////////////////  // <!-- Modal Content                with next and previous button  -->
                if (isset($_GET['id'])) {
                    $query11 = "select * from picture where username='$contestant' && profile='YES'";
                    $result11 = mysql_query($query11);
                    if (mysql_num_rows($result11) > 0) {
                        $rec11 = mysql_fetch_array($result11);
                        echo "<div class=\"slideshow-container\">";
                        echo "<a href=\"#\" class=\"prev\" onclick=\"plusSlides(-1);\">&#10094;</a>";
                        echo "<a href=\"#\" class=\"next\" onclick=\"plusSlides(1);\">&#10095;</a>";
                        echo "<div id\"myModal1\" class=\"modal1\">";
                        // <!-- Modal img -->
                        echo "  <img class=\"img-responsive\" id=\"img011\" src=\"img/{$rec11['img']}\" id3=\"{$rec11['img']}\">";
                        echo "</div>";
                        echo "</div>";
                        //  <!--end of modal -->
                    }
                }
                ?>
                </div>
                <div class="col-md-12" id="wrap">
<?php
/////////pop up modal///////////////////////////////////////////////////////
echo "<div class=\"row secondmodal\" id=\"secondmodal\">";
echo "<div class=\"row\">";
echo "<div class=\"col-xs-12\" style=\"border-style:;text-align:right;font-size:3em;\">";
echo "<p class=\"exist\" onclick=\"exist()\">&times;</p>";
echo "</div>";
echo "<div class=\"col-xs-12\" style=\"border-style:;\">";
echo "  <img class=\"img-responsive\" id=\"img012\" src=\"img/{$rec11['img']}\">";
echo "</div>";
echo "<div class=\"col-xs-12\" style=\"border-style:; text-align:center;\">";
echo "  <div class=\"fb-share-button\" data-layout=\"button\" data-size=\"small\" data-mobile-iframe=\"true\">";
echo"  <a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u&amp;src=sdkpreparse\">Share</a></div>";
echo "</div>";
echo "</div>";
?>
                </div>
            </div>
            <!--this column holds the actual database pictures-->
            <div class="col-md-12">
                    <?php
                    if (isset($_GET['id'])) {
                        $query12 = "select * from picture where username='$contestant'";
                        $result12 = mysql_query($query12);
                        if (mysql_num_rows($result12) > 0) {
                            echo"	<div class=\"slideshow-container2\" style=\"\">";
                            while ($rec1 = mysql_fetch_array($result12)) {//////////////////////////container for both like,share and image
                                echo "<div class=\"contai\" >";
                                /////////////////////////////container for  image
                                echo"  			<div class=\"modal21\" id=\"modal21\" style=\"margin-top:4px;\" >";
                                echo "				<img src=\"img/{$rec1['img']}\" id=\"{$rec1['title']}\" class=\"p3\"/>";
                                echo "</div>";
                                /////////////////////////////////////////////////////////////////LIKE AND SHARE BUTTON
                                ///////////////////////////////////////////////////login
                                if (isset($_SESSION["username"])) {
                                    $na1 = $_SESSION['username'] . "</br>";
                                    $na2 = $_SESSION['user'] . "</br>";
                                }
                                if (isset($_SESSION["username"]) && ($na1 != $na2)) {
                                    $que = "select * from liketracker where imagename='{$rec1['img']}' and member='$liker'";
                                    $resul = mysql_query($que);
                                    if (mysql_num_rows($resul) > 0) {
                                        echo "<div class=\"li\">";
                                        echo "<a href=\"#\" style=\"text-decoration:none\">liked</a>";
                                        echo "</div>";
                                    } else {
                                        echo "<div class=\"li\">";
                                        echo "<a href=\"contest2.php?id2={$rec1['img']}&&id3={$p}\">like</a>";
                                        echo "</div>";
                                    }
                                    echo "<div class=\"li2\">";
                                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    //	echo "<div class=\"fb-share-button\" data-href=\"https://developers.facebook.com/docs/plugins/faangslike\" data-layout=\"button\" data-size=\"small\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2Ffaangslike&amp;src=sdkpreparse\">Share</a></div>";
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    echo "</div>";
                                }
                                if (isset($_SESSION["username"]) && ($na1 == $na2)) {

                                    echo "<div class=\"li\">";
                                    echo "<a href=\"#\" style=\"text-decoration:none\">liked</a>";
                                    echo "</div>";

                                    echo "<div class=\"li2\">";
                                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    //	echo "<div class=\"fb-share-button\" data-href=\"https://developers.facebook.com/docs/plugins/faangslike\" data-layout=\"button\" data-size=\"small\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2Ffaangslike&amp;src=sdkpreparse\">Share</a></div>";
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    echo "</div>";
                                }
                                if (!isset($_SESSION["username"])) {
                                    echo "<div class=\"li\">";
                                    echo "<a href=\"login.php?id=mess\">like</a>";
                                    echo "</div>";
                                    echo "<div class=\"li2\">";
                                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    echo "</div>";
                                }
                                echo "</div>";
                            }
                            echo "</div>";
                            echo "<div class=\"clearfix\"> </div>";
                        }
                    }
                    //contain like and share";
                    /** 	echo"	<div class=\"col-md-12\" id=\"liss\"\">";
                      echo 		"<div >";
                      echo    "<ul id=\"shar\">";
                      echo "<li><a href=\"#\" style=\"font-size:9px;width:50px;\"  onclick=\"f();\">full screen</a></li>";
                      if(isset($_SESSION['username'])){
                      echo 				"<li><a id=\"myAnchor\" href=\"contest2.php?id2={$rec1['img']}&&id3={$p}\">LIKE</a></li>";
                      }
                      else{
                      echo "<li style=\"font-size:0.5em;font-weight:bold;\"><a href=\"login.php\">Like</a></li>";
                      }
                      echo       		 "</ul>";
                      ///////////////////////////////////////share
                      echo "<div class=\"fb-share-button\" data-href=\"https://facebook.com/faangslike/docs/plugins/\" ";
                      echo "data-layout=\"button_count\" data-size=\"small\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" ";
                      echo "href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffacebook.com%2Ffaangslike%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\">Share</a></div>";
                      echo 		"</div>";
                      echo 		"</div>"; */
                    //contain only share
                    ///////////////////////////////////////////////////////////////////
                    ?>
            </div>
            <div class="col-md-12" style="margin-top:0.3em">
                <h3 STYLE="text-align:center;font-weight:bold;font-size:3em; background:#414143; color:#FFC20F;">CONTESTANT BIO-DATA</H3>
                <?php
                $query1 = "select * from registration where username='$contestant'";
                $result1 = mysql_query($query1);
                if ($rec = mysql_fetch_array($result1)) {
                    $nu = $rec['phs'];
                    echo "<table class=\"table\">";
                    echo "<thead><th>Personal data<th></thead>";
                    echo " <tr  class=\"success\">";
                    echo "		<td >Full Name</td>";
                    echo "		<td> {$rec['fullname']}</td>";
                    echo " </tr>";
                    /*                     * echo " <tr class=\"info\">";
                      echo "		<td >Email</td>";
                      echo "		<td> {$rec['email']}</td>";
                      echo " </tr>";
                      if($nu=='0'){
                      echo " <tr  class=\"success\">";

                      echo "		<td >Phone Number</td>";
                      echo "		<td> {$rec['phonenumber']}</td>";
                      echo " </tr>";
                      }
                      else{
                      echo "";
                      } */
                    echo " <tr class=\"info\">";
                    echo "		<td >Country</td>";
                    echo "		<td> {$rec['country']}</td>";
                    echo " </tr>";
                    echo " <tr  class=\"success\">";
                    echo "		<td >State</td>";
                    echo "		<td> {$rec['state']}</td>";
                    echo " </tr>";
                    echo " <tr  class=\"info\">";
                    //echo "		<td >Email</td>";
                    //echo "		<td> {$rec['email']}</td>";
                    echo " </tr>";
                    echo " </table>";
                }
                //////////////////for model
                if ($rec['model'] == "YES") {
                    echo "<table class=\"table\">";
                    echo "<thead><th>Model Information<th></thead>";
                    echo " <tr class=\"info\">";
                    echo "		<td >Age</td>";
                    echo "		<td> {$rec['age']}</td>";
                    echo " </tr>";
                    echo " <tr class=\"success\">";
                    echo "		<td >Height</td>";
                    echo "		<td> {$rec['height']}</td>";
                    echo " </tr>";
                    echo " <tr class=\"info\">";
                    echo "		<td >Waist</td>";
                    echo "		<td> {$rec['waist']}</td>";
                    echo " </tr>";
                    echo " <tr class=\"success\">";
                    echo "		<td >Shoe</td>";
                    echo "		<td> {$rec['shoe']}</td>";
                    echo " </tr>";
                    echo " <tr class=\"info\">";
                    echo "		<td >Hip</td>";
                    echo "		<td> {$rec['hip']}</td>";
                    echo " </tr>";
                    echo " <tr class=\"success\">";
                    echo "		<td >Chest</td>";
                    echo "		<td> {$rec['chest']}</td>";
                    echo " </tr>";
                    echo " <tr class=\"info\">";
                    echo "		<td >Shoulder</td>";
                    echo "		<td> {$rec['shoulder']}</td>";
                    echo " </tr>";
                    echo " </table>";
                } else {
                    echo "";
                }
                ?>
            </div>
            <div class="col-md-12" style="margin-left:1em;">
                <h3 STYLE="text-align:center;font-weight:bold;font-size:3em; background:#414143; color:#FFC20F;" onmouseover="big()">SIMILAR CONTESTANT</H3>
                <?php
                $rowsperpage = 3;
                $query = "SELECT  total.tos,picture.title,picture.img,picture.category,picture.username, registration.age,registration.country,
										  registration.state,registration.fullname,registration.bio FROM picture left JOIN registration ON picture.username=registration.username 
										  left join total on picture.username=total.username
										  where picture.profile='YES' order by picture.date";
                $result1 = mysql_query($query);
                $total_records = mysql_num_rows($result1);
                $totalpages = ceil($total_records / $rowsperpage);
                if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
                    $currentpage = (int) $_GET['currentpage'];
                } else {
                    $currentpage = 1;
                }
                if ($currentpage > $totalpages) {
                    $currentpage = 1;
                }
                if ($currentpage < 1) {
                    $currentpage = 1;
                }
                $offset = ($currentpage - 1) * $rowsperpage;
                ///////////////////////////////////
                $query = "SELECT  total.tos,picture.title,picture.img,picture.category,picture.username, registration.age,registration.country,
										  registration.state,registration.fullname,registration.bio FROM picture left JOIN registration ON picture.username=registration.username 
										  left join total on picture.username=total.username
										  where picture.profile='YES' order by picture.date asc LIMIT $offset, $rowsperpage ";
                $result1 = mysql_query($query);
                if (mysql_num_rows($result1) > 0) {
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
                        echo "			<a href=\"contest2.php?id=$k\">	<h4>Total Likes</h4></a>";
                        echo "				<p style=\"font-size:5em;\">{$rec['tos']}</p>";
                        echo "</div>";
                        echo "<div id=\"\">";
                        echo "	";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class=\"clearfix\"> </div>";
                        echo "</div>";
                    }
                }
                ?>
            </div>
            <div class="col-md-12" style="margin-top:1em;">
                <?php
                $nex = $currentpage + 1;
                echo "<a href=\"contest2.php?id=$p&&currentpage=$nex\" class=\"btn btn-default col-md-7  col-md-offset-3\" style=\"margin-top:1em; background:#414143; color:#FFC20F;\">LOAD MORE</a>";
                ?>
            </div>
        </div>
        <!-------------------------------3rd----------------------------------------------------------------------------- stuff--------------------->
        <div class="col-md-3" style="height:900px;background:white;margin-left:1em;"  onmouseover="big()">
            <div class="row">
                <!--first row------------------------------------------------------------------>
                <div class="col-md-12">
                    <!---right  slide----------------------------------->
                    <h3 STYLE="text-align:center;font-weight:bold;font-size:2.5em;    background:#414143; color:#FFC20F; ">Other Contestant</H3>
                <?php
                $query4 = "SELECT  total.tos,picture.title,picture.img,picture.category,picture.username, registration.age,registration.country,
									  registration.state,registration.fullname,registration.bio FROM picture left JOIN registration ON picture.username=registration.username 
									  left join total on picture.username=total.username
									  where profile='YES' LIMIT 4";
                $result4 = mysql_query($query4);
                //$result1=shuffle($result1);
                while ($rec = mysql_fetch_array($result4)) {
                    echo "<div class=\"row abouts2c\">";
                    echo "		<div class=\"col-md-4 col-md-offset-1 abouts2\">";
                    echo "			<a href=\"contest2.php?id=$k\"><img src=\"img/{$rec['img']}\"></a>";
                    echo "		</div>";
                    echo "		<div class=\"col-md-12 btn3 btn3-default id=\"pix2\">";
                    if (isset($_SESSION['username'])) {
                        echo "			<a href=\"contest2.php?id=$k\" >LIKE</a>";
                    } else {
                        echo "			<a href=\"login.php?id=mess\" >Like</a>";
                    }
                    echo "		</div>";
                    echo "</div>";
                }
                ?>
                </div>
                <!--second row------------------------------------------------------------------>
                <div class="col-md-12">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Ffaangslike%3F_rdc%3D1%26_rdr&tabs=Fanngs&width=298&height=399&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1684783225110687"
                            width="298" height="399" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true">
                    </iframe>
                </div>
                <!--third row------------------------------------------------------------------>
                <div class="col-md-12">
                <?php require_once("incl/leftchat.php"); ?>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-8 col-md-offset-1 tops" style="margin-top:10px;">
                <?php require_once("incl/bottom.php"); ?>
            </div>					
        </div>
        <!--FOOTER-->
        <footer>
<?php
include("incl/footer.php");
?>
        </footer>	
    </div>
</body>		
<script type="text/javascript">
    var a = "<?php echo "$p"; ?>";
    var bpoo = document.querySelectorAll('img.p3');
    for (var i = 0; i < bpoo.length; i++)
    {
        // click calls pooFunction
        bpoo[i].addEventListener("mouseover", poo2, false);
    }
    function poo2()
    {
        //var lis=document.getElementById("liss");
        //lis.style.display="block";
        //var lis2=document.getElementById("li2");
        //lis2.style.display="block";
        //var lis22=document.getElementsByClassName("li22");
        //lis22.style.display="block";
        var modalImg = document.getElementById("img011");
        modalImg.src = this.src;
        var fullPath = document.getElementById("img011").src;
        var filename = fullPath.replace(/^.*[\\\/]/, '');
        document.getElementById("myAnchor").href = "contest2.php?id2=" + filename + "&&id3=" + a;
    }
    //////////////////////////////////////////////////////////////slideshow
    var slideIndex = 1;
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }
    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("p3");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        ;
        var slides = document.getElementsByClassName("p3");
        var modalImg = document.getElementById("img011");
        modalImg.src = slides[slideIndex - 1].src;
    }
/////////////////////////////////////////////////////////////second slideshow;
    var modal = document.getElementById('secondmodal');
    var modal2 = document.getElementById('wrap');
    var img = document.getElementById('img011');
    var modalImg = document.getElementById("img012");
    img.onclick = function () {
        modal.style.display = "block";
        modal2.style.display = "block";
        modalImg.src = this.src;
    }
    function f() {
        var modal = document.getElementById('secondmodal');
        var modal2 = document.getElementById('wrap');
        var img = document.getElementById('img011');
        var modalImg = document.getElementById("img012");
        modal.style.display = "block";
        modal2.style.display = "block";
        modalImg.src = img.src;
    }
//////////////////////////////////////////////////////right slide-----------------------------------
    function exist() {
        document.getElementById('secondmodal').style.display = 'none';
        document.getElementById('wrap').style.display = 'none';
    }
    function big() {
        var lis = document.getElementById("liss");
        if (liss.style.display = "block") {
            liss.style.display = "none";
        }
    }
    function big2() {
        var lis2 = document.getElementById("liss2");
        if (liss2.style.display = "block") {
            liss2.style.display = "none";
        }
    }
</script> 
</html>