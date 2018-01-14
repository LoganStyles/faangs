<?php
ob_start();
require_once("incl/cons.php");
require_once("incl/function.php");
require_once("incl/ses.php");
cont();
?>
<!DOCTYPE html>
<html lang="en">
    <?php
    require_once("incl/forumtitle.php");
    ?>
    <?php
    require_once("incl/forumheader.php");
//require_once("incl/chat.css");
//require_once("incl/chat.js");
    ?>
    <body>
        <style>
            #mydropdown1{
                display:none;
            }
            li:hover>#mydropdown1{
                display:block;
                position:absolute;
                bottom:-200px;
                left:4.7em;
            }
            a.rep1 ~ .rep1{
                display:none;
            }
            .rep1,.rep2,.rep3,.rep4{
                display:none;
            }
            a.rep1,a.rep2,a.rep3{
                display:inline-block;
            }
            a.rep1:hover + .rep1{
                /*display:block;*/
            }
            .clear{
                clear:both;
            }
            .ch{
                width:700px;
                border-style:solid;
                bottom:5000px;
                z-index:2;
                margin-left:20px;
                margin-top:150px;
                display:none;
            }
            .chat{
                margin:0px;
                padding:0px;
                width:50px;
                height:50px;
            }
            .chat img{
                height:100%;
                width:100%;
            }
            ul{
                list-style-type:none;
            }
            /**li{
                    height:50px;
                    font-weight:bold;
                    font-size:1em;
                    text-transform:uppercase;
                    //box-shadow: 2px 2px 2px grey;
                    border-radius:2px;
                    text-shadow: 0 1px teal, 0 2px black;
            }
            li a span{
            padding:2px;
            }*/
            a{
                text-decoration:none;
            }
            body{
                background:#f0f0f0;
            }
            #fullwrapper{
                margin-left:0;
                margin-right:0;
                padding-left:0;
                padding-right:0;
                padding-top:5em;
            }
            #fullwrapper2{
                margin-left:0;
                margin-right:0;
                padding-left:0;
                padding-right:0;
                padding-top:5em;
            }
            #post{
                margin:0;
                padding:0;
                background:white;
                max-height:300px;
                /*width:620px;*/
                box-shadow: 2px 2px 2px grey;
                border-radius:2px;
            }
            .pix{
                max-width:580px;
                /*max-height:500px;*/
            }
            .pix img{
                height:100%;
                width:100%;
            }
            .pix2{
                max-width:90px;
                float:left;
                /*max-height:500px;*/
            }
            .pix2 img{
                height:100%;
                width:100%;
            }
            .head{
                margin-top:10px;
                height:60px;
                width:160px;
                /*border-style:solid;*/
            }
            .head img{
                width:100%;
                height:100%;
            }
            .postimg{
                margin-top:0.6em;
                /*width:580px;*/
                background:white;
                /*height:660px;*/
                /*max-height:650px;*/
                box-shadow: 2px 2px 2px grey;
                border-radius:2px;
            }
            .reset{
                margin-left:10px;
                margin-right:10px;
                padding-left:0;
                padding-right:0;
            }
            .com{
                margin-top:10px;
            }
            input[type="file"] {
                position:absolute;
                display:none;
            }
            #testfile {
                height: 26px;
                text-decoration: none;
                background-color: #eee;
                border:1px solid #ccc;
                border-radius:3px;
                float:left;
                margin-right:5px;
                overflow:hidden;
                text-overflow:ellipsis;
                color:#aaa;
                text-indent:5px;
            }
            #actionbtnBrowse, #actionbtnSave {
                margin:0 !important;
                width:60px;
            }
            .friendl{
                margin:3px;
                padding:0;
                background:white;
                box-shadow: 2px 2px 2px grey;
                border-radius:2px;
            }
            .clo{
                margin-right:0;
                float:right;
                margin-top:5px;
                font-weight:bold;
                display:block;
            }
            .wrap{
                /*display:none;*/
            }
            .chlist{
                margin-left:0;
                padding-left:0;
                /*margin-right:3px;*/
                margin-top:1em;
                box-shadow: 2px 2px 2px grey;
                border-radius:2px;
                background:white;
                height:700px;
                /*width:400px;*/
                position:fixed;
            }
            .chlist a{
                text-decoration:none;
            }
            .chlist ul li{
                display:block;
                margin-top:15px;
            }
            .chlist ul li ul{
                display:none;
                /*margin-top:15px;*/
            }
            .chlist ul li a:hover{
                color:#fec303;
                font-weight:bold;
                font-size:16px;
            }
            .chlist ul li:hover>ul{
                display:block;
                margin-top:-20px;
                top:-20px;
            }
            #post_c{
                margin-top:1em;
                margin-left:26%;
            }
            #adv{
                margin-top:1em;
                margin-left:10px;
                position:fixed;
                margin-left:61%;
            }
            #carea{
                margin-top:1em;
                position:fixed;
                margin-left:84%;
            }
            .commt{
                border-style:solid;
                margin:10px;
                background:red;
            }
            .reply1{
                margin-left:10px;
                /*border-style:solid;*/
            }
            .reply2{
                margin-left:35px;
                /*border-style: solid;*/
                /* border-color: red;*/
            }
            .reply3{
                margin-left:55px;
                /*border-style: solid;
                border-color:green;*/
            }
            .reply4{
                margin-left:75px;
                display:none;
            }
            .reply5{
                margin-left:95px;
            }
            .mainwrapper {
                /*height:300px;
                //width:900px;
                // border-style:solid;*/
                z-index:10;
                position:fixed;
                bottom:0em;
                right:10em;
                /* background:gray;*/
            }
            .clear {
                clear: both;
            }
            .wra {
                box-shadow: 3px 3px grey;
                border-style: ridge;
                /* border: 1px solid green;*/
                float: left;
                margin:2px;
                height:290px;
                /*width:250px;*/
                color:gray;
                background:#b1cbbb;
            }
            .wrapp12 {
                height: 30px;
                width: 290px;
                background:#eaece5;
                border-radius:5px;
            }
            .subh{
                height:30px;
                width:144px;
                /*border-style:solid;*/
                float:left;
            }
            .subh2{
                height:25px;
                width:69px;
                /*border-style:solid;*/
                float:left;
                text-align:center;
                cursor: pointer;
            }
            .wrapper2 {
                height: 150px;
                width: 280px;
                /* border: 1px solid red;*/
                margin: 5px;
                overflow-y:scroll;
                /* float: left;*/
            }
            .wrapper3 {
                height: 50px;
                width: 280px;
                /* border:1px solid green;*/
                margin: 5px;
                /* float: left;*/
            }
            .user{
            }
            .user img{
                height:50px;
                width:60px;
                padding:5px;
            }
            #stl{
                margin-left:12px;
                /*border-radius:90px;
                //background:green;*/
            }
            #stl img{
                width:15px;
                height:20px;
            }
            input[type=button] {
                background-color:#eaece5;
                border: none;
                color: white;
                /* padding: 10px 15px;*/
                text-decoration: none;
                margin: 4px 2px;
                cursor: pointer;
                font-weight:bold;
                height:30px;
                text-align:center;
            </style>
            <?php

//echo $_SESSION['username'];
            function reply($messid) {
//echo "this is $level";
                $na11 = $_SESSION['username'];
                $forum23 = "select * from forum_comment where parent_id like '$messid.%' order by parent_id asc";
//echo "$messid";
                $com231 = mysql_query($forum23);
                while ($com23 = mysql_fetch_array($com231)) {
                    $user23 = $com23['username'];
                    $comment3 = $com23['comment'];
                    $msg = $com23['parent_id'];
                    $pid3 = $com23['id'];
                    $level = $com23['level'];
                    $level2 = $level + 1;
                    $lev = $com23['level'];
                    ////////////////////////////////////////////
                    /** 	$for21="select * from forum_comment where level=$level2";
                      $zo=mysql_query($for21);
                      if(mysql_num_rows($zo)>0){
                      while($zo1=mysql_fetch_array($zo)){
                      $arr[]=$zo1['parent_id'];
                      }
                      //$messid=bio
                      $las=end($arr);
                      $l=$level2/100;
                      //$msg=$las+$l;
                      $pid3=$msg."/".$pid3;
                      }
                      //$set2="insert into forum_comment(level,parent_id)values()";
                      //mysql_query($set2)
                      $l=$level/100; */
                    $pid3 = $msg . "/" . $pid3;
                    if ($lev == 1) {               //echo "this is my $lev";
                        ECHO "<DIV class=\"row  reply1\">";
                    } else if ($lev == 2) {              //	echo "this is my $lev";
                        ECHO "<DIV class=\"row  reply2\">";
                    } else if ($lev == 3) {              //	echo "this is my $lev";
                        ECHO "<DIV class=\"row  reply3\">";
                    } else if ($lev == 4) {              //	echo "this is my $lev";
                        ECHO "<DIV class=\"row  reply4\">";
                    } else if ($lev == 5) {               //echo "this is my $lev";
                        ECHO "<DIV class=\"row  reply5\">";
                    }
                    echo "<div class=\"col-md-2 repl\">";
                    //echo $user23;
                    $qu12 = "select * from picture where username='$user23' and profile='yes'";
                    $result102 = mysql_query($qu12);
                    $row301 = mysql_fetch_array($result102);
                    if (mysql_num_rows($result102) > 0) {
                        echo "<a href=\"chat2.php?user=$user23\"><img src=\"img/{$row301['img']}\" class=\"img-square img-responsive rmsg\"></a>";
                    } else {
                        $query102 = "select * from registration where username='$user23'";
                        $result1002 = mysql_query($query102);
                        $row3001 = mysql_fetch_array($result1002);
                        if ($row3001['gender'] == "MALE") {
                            echo "<a href=\"chat2.php?user=$user23\"<img src=\"images/male.png\" class=\"img-circle img-responsive rmsg\"></a>";
                        } else {
                            echo "<a href=\"chat2.php?user=$user23\"<img src=\"images/female.jpg\" class=\"img-circle img-responsive rmsg\"></a>";
                        }
                    }
                    ECHO "</div>";
                    ////////////////////////////////////////////////////////////////////////////////////////////////get the person comment													
                    echo "<div class=\"col-md-8\" style=\"margin:0px;padding:0px;word-wrap: break-word;text-align:justify;text-transform:capitalize\">";
                    ?>					
                    <?php
                    echo "								<h5 style=\"font-weight:bold;display:inline-block;font-size:1em;margin:0px;padding:0px;\">$user23</h5>							";
                    echo"			                       $comment3";
                    echo"							</div>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////set form to reply the comment							
                    echo"							<div class=\"col-md-8 \" style=\"\">";
                    ///////////////////////////////////////////////////////////////////////////////////////////like process
                    $ruser = $_SESSION["username"];
                    if (isset($_SESSION["username"]) && ($ruser == $user23)) {
                        echo"									<a  class=\"rep111\" href=\"#\">Liked</a>";
                    }
                    if (isset($_SESSION["username"]) && ($ruser != $user23)) {
                        $que101 = "select * from liketracker where imagename='{$com23['id']}' and member='$ruser'";
                        $resul101 = mysql_query($que101);
                        if (mysql_num_rows($resul101) > 0) {
                            echo"<a  class=\"rep111\" href=\"#\">Liked</a>";
                        } else {
                            echo"<a  class=\"rep111\" href=\"chatprocess.php?id2={$com23['id']}&&poster=$user23&&user=$ruser\">Like</a>";
                        }
                    }
                    if ($lev == 1) {
                        echo"									<a  class=\"rep1\" href=\"#\">Reply</a>";
                    }
                    if ($lev == 2) {
                        echo"									<a  class=\"rep2\" href=\"#\">Reply</a>";
                    }
                    $dateValue = $com23['date'];
                    $time = strtotime($dateValue);
                    $month = date("M-j", $time);
                    echo"				<h6 style=\"display:inline-block;\"><span class=\"glyphicon glyphicon-time\"> $month									";
                    echo "			at ";
                    $s = $com23['time'];
                    $times = strtotime($s);
                    $tim = date('h:i A', $times);
                    echo"			$tim</h6>					";
                    if ($lev != 3) {
                        if ($lev == 1) {
                            echo"										<form class=\"navbar-form rep1\" role=\"search\" method=\"post\" action=\"chatprocess.php\">";
                        }
                        if ($lev == 2) {
                            echo"										<form class=\"navbar-form rep2\" role=\"search\" method=\"post\" action=\"chatprocess.php\">";
                        }
                        echo"										<div class=\"input-group col-md-12\">
																				<input type=\"hidden\" name=\"user\" value=\"$na11\"/>
																				<input type=\"hidden\" name=\"com_id\" value=\"$pid3\"/>";
                        $lev = $lev + 1;
                        echo"												<input type=\"hidden\" name=\"level\" value=\"$lev \"/>
																				<input type=\"text\" name=\"comm\" class=\"form-control\" placeholder=\"reply comment\">
																				<div class=\"input-group-btn\">
																					<button class=\"btn btn-default\" name=\"comment\" type=\"submit\"><i class=\"glyphicon glyphicon-exclamation-sign\"></i></button>
																				</div>
																			</div>
								</form>";
                    }
                    echo"								</div>";
                    echo"			
												</div>";
                }
            }

//echo $larry[0][1];////////////////////////////////////////                                         full wrapper
            ?>
            <div class="row" id="fullwrapper">
                <!---->
                <div class="col-md-3 col-sm-12 col-xs-12 chlist">
                    <?php
                    ///////////////////////////////////////////side navigation
                    $contestant = $_SESSION['username'];
                    $query21 = "SELECT * from picture where username='$contestant' and profile='YES' limit 1";
                    $result21 = mysql_query($query21);
                    $pic22 = 0;
                    echo" <ul>";
                    $gen = $_SESSION['sex'];
                    if (mysql_num_rows($result21) > 0) {
                        $pic22 = $pic22 + 1;
                        $rec21 = mysql_fetch_array($result21);
                        $pic = $rec21['img'];
                        $pic = strtolower($pic);
                        //$pic='1.jpg';
                        //echo $pic;
                        echo"		<li><img src=\"img/{$pic}\" class=\"img-square\" width=\"250px\" height=\"200px\"/></li>";
                    } else {
                        if ($gen == 'FEMALE') {
                            $pic22 = $pic22 + 2;
                            echo"		<li><img src=\"images/female.jpg\" class=\"img-rounded\" width=\"250px\" height=\"200px\"/></li>";
                        } else {
                            $pic22 = $pic22 + 3;
                            echo"		<li><img src=\"images/male.png\" class=\"img-rounded\" width=\"250px\" height=\"200px\"/></li>";
                        }
                    }
                    echo"		<li><a href=\"chat2.php?user=$contestant\"><span class=\"glyphicon glyphicon-user\"></span>PROFILE</a></li>";
                    echo"		<li><a href=\"uploadimage.php\"><span class=\"glyphicon glyphicon-upload\"></span>UPLOAD IMAGE</a></li>";
                    $vip1 = mysql_query($vip);
                    if (mysql_num_rows($vip1) > 0) {
                        echo"		<li><a href=\"vipupload.php\"><span class=\"glyphicon glyphicon-home\"></span>VIP PHOTO</a></li>";
                    } else {
                        echo"		<li><a href=\"vipcredit.php\"><span class=\"glyphicon glyphicon-usd\"></span>VIP PHOTO</a></li>";
                    }
                    echo"		<li><a href=\"buycredit.php\"><span class=\"glyphicon glyphicon-usd\"></span>BUY CREDIT</a></li>";
                    echo"		<li><a href=\"request.php\"><span class=\"glyphicon glyphicon-usd\"></span>REQUEST PAYMENT</a></li>";
                    // echo"		<li><a href=\"#\"><span class=\"glyphicon glyphicon-home\"></span>MY PAGE</a></li>";
                    echo"		<li><a href=\"del.php\"><span class=\"glyphicon glyphicon-plus\"></span>PICTURE MANAGEMENT</a></li>";
                    echo"		<li><a href=\"edit.php\"><span class=\"glyphicon glyphicon-pencil\"></span>EDIT PROFILE</a></li>";
                    $user = $_SESSION['username'];
                    $query1 = "select * from msg where rec='$user' and state=0 ";
                    $result1 = mysql_query($query1);
                    $aaa = mysql_num_rows($result1);
                    echo"		<li class=\"dropdown\" id=\"\">";
                    echo"			<a href=\"#\" class=\"\"><span class=\"glyphicon glyphicon-envelope\">MESSAGE {$aaa}</a>";
                    echo"			 <ul class=\"\" id=\"mydropdown1\">";
                    echo"			<li><a href=\"msg.php\" >Support</a></li>";
                    echo"				<li><a href=\"noti.php\" onmouseout=\"myFunction21()\">Inbox</a></li>";
                    echo" 		</ul>";
                    echo"      </li>";
                    echo" </ul>";
                    ?>
                </div>
                <!--main area--                                                   post and comment area---->
                <div class="col-md-4  col-sm-12 col-xs-12 reset" id="post_c">
                    <!-----first row-------->
                    <div class="col-md-12 col-sm-12 col-xs-12" id="post">
                        <?php
                        $a = "fashion";
                        if (isset($_GET['category'])) {
                            $a = $_GET['category'];
                        }
                        ?>
                        <form class="navbar-form" role="search" method="post" action="chatprocess.php?category=<?php echo "{$a}" ?>" enctype="multipart/form-data">
                            <div class="col-md-8 input-group" style="float:left;">
                                   <!--<span class="input-group-addon">
                                                           <span class="glyphicon glyphicon-tag"></span>
                                   </span>-->
                                <textarea placeholder="your opinion really matter say it " class="form-control"
                                          name="post" cols="60" rows="4" required ></textarea>
                            </div>
                            <input type="file" id="test" name="file">
                            <div class="button-group"> 
                                <a href="#" id="browse" class="button primary">Photo</a>
                                <a href="#" id="clear" class="button danger">Clear</a>
                            </div>
                            <input type="text" id="testfile"></input>
                            <div class="col-md-3" style="float:left;">
                                <input type="submit" value="post" class="form-control" name="chat"/>
                            </div>
                        </form>
                    </div>
                    <!-----2nd row-------->
                    <div class="col-md-12  col-sm-12 col-xs-12 reset" style="">
                        <?php
                        $query1 = "select * from home order by id desc";
                        $result1 = mysql_query($query1);
                        while ($row = mysql_fetch_array($result1)) {
                            echo"<div class=\" row postimg\">
								<div class=\"col-md-12\" style=\"margin:0px;padding:0px;\">
										<div class=\"col-md-2 head\">";
                            $user = $row['username'];
                            $query12 = "select * from picture where username='$user' and profile='yes'";
                            $result12 = mysql_query($query12);
                            $row31 = mysql_fetch_array($result12);
                            if (mysql_num_rows($result12) > 0) {
                                echo "<a href=\"chat2.php?user=$user\"><img src=\"img/{$row31['img']}\" class=\"img-square img-responsive\"></a>";
                            } else {
                                $query12 = "select * from registration where username='$user'";
                                $result12 = mysql_query($query12);
                                $row31 = mysql_fetch_array($result12);
                                if ($gen == 'MALE') {
                                    echo "<a href=\"chat2.php?user=$user\"><img src=\"images/male.png\" class=\"img-circle img-responsive\"></a>";
                                } else {
                                    echo "<a href=\"chat2.php?user=$user\"><img src=\"images/female.jpg\" class=\"img-circle img-responsive\"></a>";
                                }
                            }
                            echo"		</div>";
                            //////////////////////////////////////////////user and time
                            echo"		<div class=\"col-md-7\" style=\"font-weight:bold;\">";
                            echo"				{$row['username']}";
                            echo"			</div>";
                            echo"			<div class=\"col-md-7\" style=\"font-size:12px;font-weight:bold;\">";
                            $dateValue = $row['date'];
                            $time = strtotime($dateValue);
                            echo $month = date("M-j", $time);
                            echo "			at ";
                            $s = $row['time'];
                            $times = strtotime($s);
                            echo date('h:i A', $times);
                            echo"			</div>";
                            echo"		</div>";
                            //echo"end of head div";
                            $cat = $row['category'];
                            $messid = $row['id'];
                            $like = $_SESSION['username'];
                            $mes = $row['post_content'];
                            $mess = strtolower($mes);
                            //echo message div
                            echo"	<div class=\"col-md-12\" style=\" word-wrap: break-word;text-align:justify;text-transform:capitalize\">{$mess}</div>";
                            //echo //end message div
                            if ($row['image'] != "") {
                                //echo image  div
                                echo "<div class=\"col-md-12 pix\"><img src=\"forumimage/{$row['image']}\"/></div>";
                            } else {
                                echo"";
                            }
                            if (isset($_SESSION["username"])) {
                                $na1 = $_SESSION['username'];
                                $na2 = $row['username'];
                            }
                            //end image div
                            ?>
                            <?php
                            ///////////////////////////////////container for the whole reply////////////////////////////////////////////////				
                            echo"		<div class=\"col-md-12 com\" style=\"border-style:;background-color:#b2b2b2;box-shadow: 5px 5px;\">";
                            ////////////////////////////////////////////////////////////////////////////////////////////////////////////reply
                            reply($messid);
                            //echo $messid;
                            echo"			</div>";
                            //echo"comment div";
                            echo"		<div class=\"col-md-12 com\">
											<form class=\"navbar-form\" role=\"search\" method=\"post\" action=\"chatprocess.php\">
												<div class=\"input-group col-md-12\">";
                            $for2 = "select * from forum_comment where level=1 and parent_id like '$messid.%'";
                            $co231 = mysql_query($for2);
                            if (mysql_num_rows($co231) > 0) {
                                while ($co23 = mysql_fetch_array($co231)) {
                                    $arr[] = $co23['parent_id'];
                                }
                                $las = end($arr);
                                $messid = $las + 0.2;
                            } {
                                $messid = $messid . ".1";
                            }
                            echo "<input type=\"hidden\" name=\"user\" value=\"$na1\"/>
													<input type=\"hidden\" name=\"com_id\" value=\"$messid\"/>
													<input type=\"hidden\" name=\"level\" value=\"1 \"/>
													<input type=\"text\"name=\"comm\" class=\"form-control\" placeholder=\"make your comment\">
													<div class=\"input-group-btn\">
														<button class=\"btn btn-default\" name=\"comment\" type=\"submit\"><i class=\"glyphicon glyphicon-exclamation-sign\"></i></button>
													</div>
												</div>
											</form>
										</div>";
                            //echo"end comment div";
                            //echo "like div";
                            echo "		<div class=\"col-md-12 com\"><h3 style=\"float:left\">";
                            if (isset($_SESSION["username"]) && ($na1 == $na2)) {
                                echo "<h3 style=\"float:left\">Like</h3>";
                                //echo"<h3 style=\"float:right\"><a href=\"#\">share</a></h3><br>";
                                //echo "<h3 style=\"margin-left:0px;float:left;font-size:12px\">$like others and you Like</h3>";
                            }
                            if (isset($_SESSION["username"]) && ($na1 != $na2)) {
                                $que = "select * from liketracker where imagename='{$row['id']}' and member='$na1'";
                                $resul = mysql_query($que);
                                if (mysql_num_rows($resul) > 0) {
                                    echo "<h3 style=\"float:left\">Liked</h3>";
                                    //echo"<h3 style=\"float:right\"><a href=\"#\">share</a></h3><br>";
                                    //echo "<h3 style=\"margin-left:0px;float:left;font-size:12px\">$like others and you Like</h3>";	
                                } else {
                                    echo "<h3 style=\"float:left\"><a href=\"chatprocess.php?id2={$row['id']}&&poster=$na2&&user=$na1\">like</a></h3>";
                                    //<h3 style=\"float:right\"><a href=\"#\">share</a></h3>
                                }
                            }
                            //$query4="select * from forum_like where likes='$like' and username='$user' and category='$cat'";
                            //$k4=mysql_query($query4);
                            //if(mysql_num_rows($k4)>0)
                            //
										//echo "<h3 style=\"float:left\">LiKe</h3><h3 style=\"float:right\"><a href=\"#\">share</a></h3><br>
                            //<h3 style=\"margin-left:0px;float:left;font-size:12px\">$like others and you Like</h3>
                            echo"			</div>";
                            /*                             * }	
                              else{
                              echo "<h3 style=\"float:left\">$like<a href=\"chatprocess.php?id=1&&username=$user&&liker=$like&&messid=$messid&&cat=$cat\">Like</a></h3>
                              <h3 style=\"float:right\"><a href=\"#\">share</a></h3></div>";
                              } */
                            echo"</div>";
                            //echo			endlike div
                        }
                        ?>
                    </div><!--end of post div-->
                </div><!--end of p div-->
                <!---->
                <div class="col-md-3  col-sm-12 col-xs-12" id="adv">
                    <?php
                    /**                                                                                   friend request
                      $query51="SELECT friendlist.friendusername,friendlist.myusername,picture.img,picture.profile,registration.fullname,registration.username
                      from friendlist
                      left join picture on friendlist.myusername=picture.username
                      left join registration on friendlist.myusername=registration.username
                      where friendlist.status=0 and friendlist.friendusername='$like'
                      and picture.profile='yes'";
                      $result51=mysql_query($query51);
                      if($d=mysql_num_rows($result51)>0){
                      echo "<div class=\"row friendl\">";
                      echo"<div class=\"col-md-12\" style=\"margin:0;padding:0;text-align:center;font-weight:bold;\">friend request</div>";
                      while($row51=mysql_fetch_array($result51)){
                      echo"<div class=\"col-md-12 wrap\" style=\"margin:0;padding:0;\">
                      <a href=\"#\">&#967;</a>
                      <div class=\"col-md-6 pix2\" style=\"margin:0;padding:0\"><img src=\"img/{$row51['img']}\"/></div>
                      <div  class=\"col-md-6 \"style=\"width:12em;\">
                      {$row51['fullname']}</br>
                      <a href=\"chatprocess.php?friendusername2={$row51['myusername']}&&myusername2=$like&&cat=$cat&&sta=1\" style=\"background:green;color:black;font-weight:bold;margin-bottom:10px\">accept</a>
                      <a href=\"chatprocess.php?friendusername2={$row51['myusername']}&&myusername2=$like&&cat=$cat&&sta=2\" style=\"background:red;color:black;font-weight:bold;margin-bottom:10px\">reject</a>
                      </div>
                      </div>";
                      }
                      echo "</div>";
                      }
                      else{
                      echo "";
                      } */
                    ?>
                    <?php
                    $query5 = "SELECT  picture.img,picture.category,picture.username, registration.fullname,registration.model
									  FROM picture 
										left JOIN registration ON picture.username=registration.username 
										where picture.profile='yes' and picture.username<>'$like'
										AND
								picture.username NOT IN( SELECT myusername from friendlist WHERE myusername='$like' or friendusername='$like')
										AND
								picture.username NOT IN( SELECT friendusername from friendlist WHERE myusername='$like' or friendusername='$like') limit 2";
                    //$query="select * from friendlist where myusername<>''or friendusername<>";
                    $result5 = mysql_query($query5);
                    if (mysql_num_rows($result5) > 0) {
                        echo "<div class=\"row friendl\">";
                        echo"<div class=\"col-md-12\" style=\"margin:0;padding:0;text-align:center;font-weight:bold;\">Add like minded people</div>";
                        while ($row5 = mysql_fetch_array($result5)) {
                            echo"<div class=\"col-md-12 wrap\" style=\"margin:0;padding:0;\">
													<a href=\"#\">&#967;</a>
												<div class=\"col-md-6 col-xs-12 col-sm-12 pix2\" style=\"margin:0;padding:0\"><img src=\"img/{$row5['img']}\"/></div>
												<div  class=\"col-md-6 col-xs-12 col-sm-12\"style=\"width:12em;\">
													{$row5['fullname']}</br>
													<a href=\"chatprocess.php?friendusername={$row5['username']}&&myusername=$like&&cat=$cat\" style=\"background:teal;color:black;font-weight:bold;margin-bottom:10px\">add friend</a>
												</div>
											</div>";
                        }
                        echo "</div>";
                    }
                    ?>
                    <?php
                    echo "<div class=\"row friendl\">";
                    //$query8="SELECT * from advert";
                    //$result8=mysql_query($query8);
                    echo"<div class=\"col-md-12\" style=\"margin:0;padding:0;text-align:center;font-weight:bold;overflow-y:hidden\">Top models</div>";
                    require_once("incl/leftchat.php");
                    echo "</div>";
                    ?>
                    <?php
                    echo "<div class=\"row friendl\">";
                    $result7 = mysql_query($query5);
                    while ($row7 = mysql_fetch_array($result7)) {
                        echo"<div class=\"col-md-12\">";
                        //people{$row7['username']}
                        echo "</div>";
                    }
                    echo "</div>";
                    ?>
                </div>
                <!---------------------------------------------------------------------------------------------------------------------------------->
                <div class="col-md-1  col-sm-12 col-xs-12" id="carea">
                    <div class="row carea2" style="bottom:0px;right:0px;width:190px;">
                        <div class="col-md-12">
                            <div class="user" style="float:left" id="updatediv">
                                <?php
                                //if($r2["state"]=="away"){
                                //	}
                                /*                                 * $onli="select online.username,online.state,picture.img from online left join picture on picture.username=online.username where online.username in
                                  (select friendusername as s from friendlist where myusername='$like' union select myusername from friendlist where friendusername='$like')and picture.profile='yes'" ;
                                  $re=mysql_query($onli);
                                  while($r2=mysql_fetch_array($re)){
                                  if($r2["state"]=="online"){
                                  echo"<div><a data-tag=\"{$r2['username']}\" href=\"#\"><img src=\"img/{$r2['img']}\"/>{$r2['username']}<span id=\"stl\"><img src=\"img/onl.png\"></span></a></div>";
                                  }
                                  if($r2["state"]=="away"){
                                  echo"<div><a data-tag=\"{$r2['username']}\" href=\"#\"><img src=\"img/{$r2['img']}\"/>{$r2['username']}<span id=\"stl\"><img src=\"img/away.png\"></span></a></div>";
                                  }
                                  if($r2["state"]=="offline"){
                                  echo"<div><a data-tag=\"{$r2['username']}\" href=\"#\"><img src=\"img/{$r2['img']}\"/>{$r2['username']}<span id=\"stl\"><img src=\"img/off.png\"></span></a></div>";
                                  }
                                  } */
                                ?>
                                </div>
                                <?php
                                $sender = $like;
                                date_default_timezone_set("Africa/Lagos");
                                $tbl_name = "online";
                                $dat = date("y-m-d");
                                $time = time();
                                $time_check = $time - 3;
                                $sql = "SELECT * FROM $tbl_name WHERE username='$like'";
                                $result = mysql_query($sql);
                                $count = mysql_num_rows($result);
                                if ($count == "0") {
                                    $sql1 = "INSERT INTO $tbl_name(username,date, time,state)VALUES('$like','$dat', '$time','online')";
                                    $result1 = mysql_query($sql1);
                                } else {
                                    $sql2 = "UPDATE $tbl_name SET time='$time', state='online' WHERE username = '$like'";
                                    $result2 = mysql_query($sql2);
                                }
//$sql3="SELECT * FROM $tbl_name";
//$result3=mysql_query($sql3);
//$count_user_online=mysql_num_rows($result3);
//echo "User online : $count_user_online ";
//if over 10 minute, delete username
                                $sql4 = "update $tbl_name  set state='away' WHERE time<$time_check";
                                $result4 = mysql_query($sql4);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mainwrapper"></div>
            </body>
            <script>
                $("#browse").click(function () {
                    $("#test").click();
                })
                $("#save").click(function () {
                    alert('Run a save function');
                })
                $("#clear").click(function () {
                    $('#testfile').val('');
                })
                $('#test').change(function () {
                    $('#testfile').val($(this).val());
                })
                $(".wrap").click(function () {
                    $(this).hide();
                })
                $(".rep1").click(function () {
                    $("a.rep1 ~ .rep1").css({"display": "block"});
                    $(".rep2").hide();
                    $("a.rep2").show();
                })
                $(".rep2").click(function () {
                    $("a.rep2 ~ .rep2").css({"display": "block"});
                    $(".rep1").hide();
                    $("a.rep1").show();
                })
                ////////////////////////////////////////////////////////////////////
                var i, userss = [];
                var sta = 1;
                $(".user a").click(function () {
                    var tag = $(this).attr('data-tag');

                    if (userss.length <= 0) {
                        //create tag:creates all div and form
                        //count div:add div to cookie
                        //pop(tag);does fetch;
                        create(tag);
                        countdiv(tag);
                        load_pop(tag);
                        //alert(tag);
                    } else
                    {
                        //alert(userss.length);
                        for (i = 0; i < userss.length; i++)
                        {
                            if (tag === userss[i])
                            {
                                sta = sta + 1;
                            }
                        }
                        if (sta == 1)
                        {
                            create(tag);
                            countdiv(tag);
                            pop(tag);
                        }
                    }
                });
                function create(tag) {
                    var newClass = 'wrapper' + tag;
                    var sender = '<?php echo $sender; ?>';
                    $('<div/>', {
                        class: newClass
                    }).appendTo(".mainwrapper");
                    $("." + newClass).addClass("wra");
                    //////////////////////////////////////////this is header section
                    var heads = 'wrapps2_' + tag;
                    $('<div/>', {
                        class: heads
                    }).appendTo("." + newClass);
                    $("." + heads).addClass("wrapp12");
                    //////////////////////////////////////////this is subhead1
                    var subh = 'subh_' + tag;
                    $('<div/>', {
                        class: subh
                    }).appendTo("." + heads);
                    $("." + subh).addClass("subh");
                    var us = "<b>" + tag + "</b>";
                    $("." + subh).prepend(us);
                    //////////////////////////////////////////this is subhead2 
                    var subh2 = 'subh2_' + tag;
                    $('<div/>', {
                        class: subh2
                    }).appendTo("." + heads);
                    $("." + subh2).addClass("subh");
                    ////////////////////////////////////////subhead2 first part
                    var subh21 = 'subh21_' + tag;
                    $('<div/>', {
                        class: subh21
                    }).appendTo("." + subh2);
                    $("." + subh21).addClass("subh2");
                    var tx = "<b>+</b>";
                    $("." + subh21).prepend(tx);
                    ////////////////////////////////////////subhead2 second part
                    var subh22 = 'subh22_' + tag;
                    $('<div/>', {
                        class: subh22
                    }).appendTo("." + subh2);
                    $("." + subh22).addClass("subh2");
                    var tx2 = '<b onClick=po(\'' + tag + '\')>&times;</b>';
                    $("." + subh22).append(tx2);
                    /////////////////////////////////////////this body session
                    $('<div/>', {
                        class: 'wrapper2 wrapper2_' + tag
                    }).appendTo("." + newClass);
                    //alert("height = " + $(".wrapper2_" + tag).css("height"));
                    ////////////////////////////////////////////////this is form session
                    $('<div/>', {
                        class: 'wrapper3 wrapper3_' + tag
                    }).appendTo("." + newClass);
                    $(".wrapper3_" + tag).append('<form action="rchatprocess.php" method="POST">');
                    $(".wrapper3_" + tag + " form").append('<textarea rows="1" cols="30" placeholder=""  name="msg" id="comment' + tag + '"/></textarea>');
                    $(".wrapper3_" + tag + " form").append('<br><input type="button" id="submit"  value="Send" onClick="pop(\'' + tag + '\')"/>');
                    $(".wrapper3_" + tag + " form").attr('action', 'rchatprocess.php');
                }
                function pop(a) {
                    var rec = a;
                    var comment = $("#comment" + a).val();
                    var sender = '<?php echo $sender ?>';
                    $.ajax({
                        type: "POST",
                        url: "rchatprocess.php",
                        data: {
                            msg: comment,
                            sender: sender,
                            rec: rec
                        },
                        success: function (data) {
                            complete(data);
                        },
                    });
                    $("#comment" + a).val("");
                }
                function complete(users) {
                    var vals = users.split(',');
                    var rec = vals[0];
                    var sender = vals[1];
                    $.ajax({
                        type: "POST",
                        url: "rchatprocess3.php",
                        data: {
                            send: sender,
                            rec: rec
                        },
                        success: function (data) {
                            var val = data.split(',');
                            var userid = val[0];
                            var msg = val[1];
                            te = (userid.trim());
                            $(".wrapper2_" + te).html(msg);
                        },
                    });
                }
                function countdiv(names) {
                    var out = "";
                    var names = names;
                    userss.push(names);
                    var lent = userss.length;
                    if (lent > 3) {
                        out = userss[0];
                        userss.shift();
                        lent = userss.length;
                        var newClass = 'wrapper' + out;
                        $("." + newClass).remove();
                    }
                    document.cookie = "userss=" + userss;
                }
                ///////////////////////////////////////////function cookie reload
                var l, k, pe = "";
                var ca = document.cookie.split(';');
                $(document).ready(function () {
                    onli();


                    if (ca.length > 0)
                    {
                        for (l = 0; l < ca.length; l++)
                        {
                            pe = ca[l].split("=");
                            if (pe[0] == 'userss')
                            {
                                k = pe[1];
                                break;
                            }
                        }
                        var ca2 = k.split(',');
                        for (var io = 0; io < ca2.length; io++)
                        {
                            if (ca2[io] != "") {
                                create(ca2[io]);
                                countdiv(ca2[io]);
                                load_pop(ca2[io]);
                            }
                        }
                    } else {
                        //document.cookie = 'userss' + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
                    }
                });
                //////////////////////////////////////////////////close div
                function po(ef) {
                    var newClass2 = 'wrapper' + ef;
                    $("." + newClass2).remove();
                    for (i = 0; i < userss.length; i++)
                    {
                        if (ef === userss[i])
                        {
                            userss.splice(i, 1);
                            document.cookie = "userss=" + userss;
                            break;
                        }
                    }
                    if (userss.length == 0) {
                        //document.cookie = 'userss' + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
                    }
                }
                /////////////////////////////function load
                function load_pop(a) {
                    var rec = a;
                    var sender = '<?php echo $sender ?>';
                    $.ajax({
                        type: "POST",
                        url: "rchatprocess3.php",
                        data: {
                            send: sender,
                            rec: rec
                        },
                        success: function (data) {
                            var val = data.split(',');
                            var userid = val[0];
                            var msg = val[1];
                            te = (userid.trim());
                            $(".wrapper2_" + te).html(msg);
                        },
                    });
                    setTimeout(
                            function () {
                                load_pop(a);
                            },
                            1000);
                }
                function onli() {
                    //
                    var sender = '<?php echo $sender ?>';
                    $.ajax({
                        type: "POST",
                        url: "rchatprocess5.php",
                        data: {
                            send: sender
                        },
                        success: function (data) {
                            $("#updatediv").html(data);


                        },
                    });
                    setTimeout(
                            function () {
                                onli();
                            }, 3000);
                }
                function create2(tag) {

                    //var sta=1;
                    if (userss.length <= 0) {
                        //create tag:creates all div and form
                        //count div:add div to cookie
                        //pop(tag);does fetch;
                        create(tag);
                        countdiv(tag);
                        load_pop(tag);
                        //alert(tag);
                    } else
                    {
                        //alert(userss.length);
                        for (i = 0; i < userss.length; i++)
                        {
                            if (tag === userss[i])
                            {
                                sta = sta + 1;
                            }
                        }
                        if (sta == 1)
                        {
                            create(tag);
                            countdiv(tag);
                            pop(tag);
                        }
                    }
                }

            </script>
        </html>