<?php
ob_start();
require_once("incl/cons.php");
require_once("incl/function.php");
require_once("incl/ses.php");
cont();
?>
<!DOCTYPE html>
<style>
    .repl{
        /*border-style:solid;*/
        display:inline-block;
        float:left;
    }
    .repl img{
        height:50px;
        width:50px;
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
        //display:block;
    }
    .clear{
        clear:both:
    }
    .wrapper{
        height:300px;
        width:300px;
        border-style:solid;
        float:left;
    }
    .wrapper1{
        height:90px;
        width:280px;
        border-style:solid;
        margin:5px;
    }
    .wrapper11{
        height:50px;
        width:80px;
        border-style:solid;
        float:left;
    }
    .wrapper12{
        height:50px;
        width:190px;
        border-style:solid;
    }
    .wrapper2{
        height:90px;
        width:280px;
        border-style:solid;
        margin:5px;
    }
    .wrapper21{
        height:50px;
        width:80px;
        border-style:solid;
        float:left;
    }
    .wrapper22{
        height:50px;
        width:190px;
        border-style:solid;
    }
    .wrapper3{
        height:90px;
        width:280px;
        border-style:solid;
        margin:5px;
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
        background:#f0f0f0 !important;
    }
    #post{
        margin:0;
        padding:0;
        background:white;
        max-height:300px;
        /width:620px;
        box-shadow: 2px 2px 2px grey;
        border-radius:2px;
    }
    .pix{
        max-width:580px;
        //max-height:500px;
    }
    .pix img{
        height:100%;
        width:100%;
    }
    .pix2{
        max-width:90px;
        float:left;
        //max-height:500px;
    }
    .pix2 img{
        height:100%;
        width:100%;
    }
    .head{
        margin-top:10px;
        height:60px;
        width:160px;
        //border-style:solid;
    }
    .head img{
        width:100%;
        height:100%;
    }
    .postimg{
        margin-top:0.6em;
        //width:580px;
        background:white;
        //height:660px;
        //max-height:650px;
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
        //display:none;
    }
    .chlist{
        margin-left:0;
        padding-left:0;
        //margin-right:3px;
        margin-top:1em;
        box-shadow: 2px 2px 2px grey;
        border-radius:2px;
        background:white;
        height:700px;
        //width:400px;
        position:fixed;
    }
    .chlist a{
        text-decoration:none;
    }
    .chlist ul li{
        display:block;
        margin-top:30px;
    }
    .chlist ul li a:hover{
        color:#fec303;
        font-weight:bold;
        font-size:16px;
    }
    .commt{
        border-style:solid;
        margin:10px;
        background:red;
    }
    .reply1{
        margin-left:10px;
        //border-style:solid;
        padding-left:10px;
    }
    .reply2{
        margin-left:35px;
        padding-left:35px;
        //border-style: solid;
        // border-color: red;
    }
    .reply3{
        margin-left:55px;
        padding-left:55px;
        //border-style: solid;
        //border-color:green;
    }
    .reply4{
        //margin-left:75px;
        display:none;
    }
    .reply5{
        margin-left:95px;
        //border-style: solid;
        //border-color:blue;
    }
    .chat_css{
        margin-top:1em;
        position:fixed;
        margin-left:1150px;
    }
    .fri_css{
        margin-top:1em;
        margin-left:10px;
        position:fixed;
        margin-left:830px;


    }
    #bio_con{

        margin-top:5em;
    }
    #chat_adv{
        margin-top:5em;
        position:fixed;
        margin-left:66%;
        /*border-style:solid;*/
    }
    #chat_post{
        margin-top:1em;
        margin-right:0px;
        padding-right:0px;
        margin-left:1em;

    }
    #rchat{
        position:absolute;
        margin-top:1em;
        margin-left:53%;
    }
    #radv{
        margin-top:1em;
        //margin-left:10px
    }
    .repl img{
        height:50px;
        width:50px;
    }

    @media only screen and (max-width:1302px) {
        #chathead{
            width:40%;
            float:left:
        }
        #chat_body{
            width:60%;
            float:left;
        }

    }
    @media only screen and (max-width:990px) {
        #chathead{
            width:40%;
            float:left:
        }
        #chat_body{
            width:60%;
            float:left;
        }
        #bio_con{

            margin-top:10em;
            width:50%;
            float:left;
        }
        #chat_adv{
            margin-top:10em;
            width:49%;
            margin-left:50%;
            //border-style:solid;
            //margin:0;
            //padding:0;
        }
        #radv{

            display:block;
            position;absolute;
            width:56%;
            margin-left:0.1em;
        }
        #rchat{
            width:40%;
        }
        #chat_post{
            margin-top:1em;
            margin-right:0px;
            padding-right:0px;
            margin-left:0;

        }
    }
    @media only screen and (max-width:620px) {
        #chathead{
            width:40%;
            float:left:
        }
        #chat_body{
            width:60%;
            float:left;
        }
        #bio_con{

            margin-top:11em;
            width:60%;
            float:left;
        }
        #chat_adv{
            display:block;
            margin-top:12em;
            width:38%;
            margin-left:62%;
            //border-style:solid;

        }
        #radv{

            display:none;
            width:0%;
        }
        #rchat{
            position:absolute;
            width:100%;
            margin:0;
        }
    }

    @media only screen and (max-width:518px) {
        #chathead{
            width:100%;
            float:left:
                text-align:center;
        }
        #chat_body{
            width:100%;
            float:left;
        }
        #bio_con{

            margin-top:13em;
            width:100%;
            float:left;
        }
        #chat_adv{
            display:none;
            margin-top:12em;
            width:40%;
            margin-left:55%;
        }
        #radv{

            display:none;
            width:50%;
        }
        #rchat{
            display:none;
            width:40%;
        }
    }
</style>
<html lang="en">
    <?php
    require_once("incl/forumtitle.php");
    ?>
    <?php
    require_once("incl/forumheader.php");
    ?>
    <body>
        <link rel="stylesheet" href="css/chat2.css" type="text/css"/>
        <?php
//$iuser=$_SESSION['username'];
        if (isset($_GET['user'])) {
            $user = test_input($_GET['user']);
            $search_result = $user;
        }
        $gen = $_SESSION['sex'];
        ?>

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
                  //$messid=
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
                        echo"<a  class=\"rep111\" href=\"chatprocess.php?id22={$com23['id']}&&poster2=$user23&&user=$ruser\">Like</a>";
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
																					<button class=\"btn btn-default\" name=\"comment2\" type=\"submit\"><i class=\"glyphicon glyphicon-exclamation-sign\"></i></button>
																				</div>
																			</div>
								</form>";
                }
                echo"								</div>";
                echo"			
												</div>";
            }
        }

//echo $larry[0][1];	
        ?>
        <div class="row" style="margin-left:0;margin-right:0;padding-left:0;padding-right:0">

            <div class="col-md-8 " id="bio_con">
                <div class="row bio" style="border-style:solid">
                    <div class="col-md-4 col-sm-12 col-xs-12" id="chathead" style="">
        <?php
        $contestant = $_SESSION['username'];
        $pic33 = 0;
        $query21 = "SELECT * from picture where username='$search_result' and profile='YES' limit 1";
        $result21 = mysql_query($query21);
        if (mysql_num_rows($result21) > 0) {
            $pic33 = $pic33 + 1;
            $rec21 = mysql_fetch_array($result21);
            $pic = $rec21['img'];
            $pic = strtolower($pic);
            //$pic='1.jpg';
            //echo $pic;
            echo"		<img src=\"img/{$pic}\" class=\"img-responsive\"/>";
        } else {
            if ($gen == 'FEMALE') {
                $pic33 = $pic33 + 2;
                echo"		<img src=\"images/female.jpg\" class=\"img-rounded\" width=\"250px\" height=\"200px\"/>";
            } else {
                $pic33 = $pic33 + 3;
                echo"		<img src=\"images/male.png\" class=\"img-rounded\" width=\"250px\" height=\"200px\"/>";
            }
        }
        ?>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12" id="chat_body">
                        <?php
                        $query1 = "select * from registration where username='$search_result'";
                        $result1 = mysql_query($query1);
                        if ($rec = mysql_fetch_array($result1)) {
                            $nu = $rec['phs'];
                            echo "<table class=\"table\">";
                            echo "<thead><th>Basic information<th></thead>";
                            echo " <tr>";
                            echo "		<td >Full Name</td>";
                            echo "		<td> {$rec['fullname']}</td>";
                            echo " </tr>";
                            echo " <tr>";
                            echo "		<td >Email</td>";
                            echo "		<td> {$rec['email']}</td>";
                            echo " </tr>";
                            if ($nu == '0') {
                                echo " <tr  >";
                                echo "		<td >Phone Number</td>";
                                echo "		<td> {$rec['phonenumber']}</td>";
                                echo " </tr>";
                            } else {
                                echo "";
                            }
                            echo " <tr >";
                            echo "		<td >Country</td>";
                            echo "		<td> {$rec['country']}</td>";
                            echo " </tr>";
                            echo " <tr  >";
                            echo "		<td >State</td>";
                            echo "		<td> {$rec['state']}</td>";
                            echo " </tr>";
                            if ($contestant == $rec['username']) {
                                echo " <tr  >";
                                echo "		<td ></td>";
                                echo "		<td><a href=\"edit.php\">Edit Profile</a></td>";
                                echo " </tr>";
                            }
                            echo " </table>";
                        }
                        ?>
                    </div>



                </div>
                <div class="row">
                    <div class="col-md-4  col-sm-12 col-xs-12" id="descrip" >
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:1.6em;background:white;margin-left:0px;margin-right:0px;padding:0px;">	
                                <p style="font-weight:bold;text-align:center;">Description</p>
<?php
echo "		 {$rec['bio']}";
?>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12" style="background:white">
                                <ul style="">
<?php
if ($contestant == $search_result) {
    
} ELSE {
    $query51 = "SELECT *
									  from friendlist where myusername='{$search_result}'
									  and friendusername='$contestant' and status=2  or
													 myusername='$contestant' and friendusername='{$search_result}' and status=2 
										";
    //$arr21=array();
    $result51 = mysql_query($query51);
    if (mysql_num_rows($result51) > 0) {
        //echo"<li style=\"display:inline-block;margin:5px;font-weight:bold;font-size:1.2em;\"><a href=\"#\">Message</a> </li>";
        echo"<li style=\"display:inline-block;margin:5px;font-weight:bold;font-size:1.2em;\">
								<a href=\"chatprocess.php?myusername2=$contestant&&friendusername2=$search_result&&sta=2\">Unfriend</a></li>";
    } else {
        $query51 = "SELECT *
									  from friendlist where myusername='{$search_result}'
									  and friendusername='$contestant' and status=1 or status=0 or
													 myusername='$contestant' and friendusername='{$search_result}' and status=1 or status=0
										";
        //$arr21=array();
        $result51 = mysql_query($query51);
        if (mysql_num_rows($result51) <= 0) {
            //echo"<li style=\"display:inline-block;margin:5px;font-weight:bold;font-size:1.2em;\"><a href=\"#\">Message</a> </li>";
            echo"<li style=\"display:inline-block;margin:5px;font-weight:bold;font-size:1.2em;\">
								<a href=\"chatprocess.php?myusername=$contestant&&friendusername=$search_result&&sta=0\">Add friend</a></li>";
        }
    }
}
?>
                                </ul>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:0.4em;background:white">	
                                <p style="font-weight:bold;text-align:center;">Photos</p>
                                <div class="row">
                                    <?php
                                    $myphoto = "select * from home where username='$search_result' and sta=1";
                                    $myphoto2 = mysql_query($myphoto);
                                    if (mysql_num_rows($myphoto2) > 0) {
                                        while ($rmyphoto = mysql_fetch_array($myphoto2)) {
                                            echo "<div class=\"col-md-6 myphoto\" style=\"\">";
                                            $pic2 = $rmyphoto['image'];
                                            echo"	<img src=\"forumimage/{$pic2}\" class=\"img-responsive\"/>";
                                            echo"</div>";
                                        }
                                    } else {
                                        if ($gen == "MALE")
                                            echo "{$search_result} is yet to upload his photo";
                                        ELSE {
                                            echo "{$search_result} is yet to upload her photo";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:0.4em;background:white">	
                                <p style="font-weight:bold;text-align:center;">Friends Photos</p>
                                <div class="row">
                                    <?php
                                    $friend = array();
                                    $myfriend = "SELECT friendlist.friendusername,friendlist.myusername
									  from friendlist where friendusername='$search_result' and status=2 or myusername='$search_result' and status=2";
                                    $res3 = mysql_query($myfriend);
                                    IF (MYSQL_NUM_ROWS($res3) > 0) {
                                        while ($res4 = mysql_fetch_array($res3)) {
                                            if ($res4['myusername'] != "$search_result") {
                                                array_push($friend, $res4['myusername']);
                                            }
                                            if ($res4['friendusername'] != "$search_result") {
                                                array_push($friend, $res4['friendusername']);
                                            }
                                        }
                                    } ELSE {
                                        echo "no friend has been added";
                                    }
                                    //////////////////////////////////////////////////////////////////////
                                    $nos = count($friend);
                                    for ($i = 0; $i < $nos; $i++) {
                                        $friphoto = "select * from picture where username='{$friend[$i]}' and profile='YES'";
                                        $friphoto2 = mysql_query($friphoto);
                                        if (mysql_num_rows($friphoto2) > 0) {
                                            $r2myphoto = mysql_fetch_array($friphoto2);
                                            echo "<div class=\"col-md-6 myphoto\" style=\"\">";
                                            $pic22 = $r2myphoto['img'];
                                            echo"	<a href=\"chat2.php?user={$friend[$i]}\"><img src=\"img/{$pic22}\" class=\"img-responsive\"/></a>";
                                            echo"</div>";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="col-md-7  col-sm-12 col-xs-12" id="chat_post">


                                    <?php
                                    $query1 = "select * from home  where username='$search_result'order by id desc";
                                    $result1 = mysql_query($query1);

                                    if (mysql_num_rows($result1) <= 0) {
                                        $query1 = "select * from home order by id desc";
                                        $result1 = mysql_query($query1);
                                    }


                                    while ($row = mysql_fetch_array($result1)) {
                                        echo"	<div class=\" row postimg\">
									<div class=\"col-md-12\">
											<div class=\"col-md-3 head\">";
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

                                            if ($row31['gender'] == "MALE") {
                                                echo "<a href=\"chat2.php?user=$user\"><img src=\"images/male.png\" class=\"img-circle img-responsive\"></a>";
                                            } else {
                                                echo "<a href=\"chat2.php?user=$user\"><img src=\"images/female.jpg\" class=\"img-circle img-responsive\"></a>";
                                            }
                                        }
                                        echo"			</div>";
                                        echo"	<div class=\"col-md-7\" style=\"border-style:\">";
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
                                        echo"	</div>";









                                        //echo"end of head div";
                                        $cat = $row['category'];
                                        $messid = $row['id'];
                                        $like = $_SESSION['username'];
                                        $mes = $row['post_content'];
                                        $mess = strtolower($mes);
                                        if (isset($_SESSION["username"])) {
                                            $na1 = $_SESSION['username'];
                                            $na2 = $row['username'];
                                        }
                                        //echo message div
                                        echo"<div class=\"col-md-12\" style=\" word-wrap: break-word;\">{$mess}</div>";
                                        //echo //end message div
                                        if ($row['image'] != "") {
                                            //echo image  div
                                            echo "<div class=\"col-md-12 pix\"><img src=\"forumimage/{$row['image']}\"/></div>";
                                        } else {
                                            echo"";
                                        }
                                        //end image div
                                        echo"		<div class=\"col-md-12 com\" style=\"border-style:;background-color:#b2b2b2;box-shadow: 5px 5px;\">";

                                        reply($messid);
                                        echo"			
									</div>";
                                        //echo"comment div";
                                        echo"	<div class=\"col-md-12 com\">";
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


                                        echo"	<form class=\"navbar-form\" role=\"search\" method=\"post\" action=\"chatprocess.php\">
												<div class=\"input-group col-md-12\">
													<input type=\"hidden\" name=\"user\" value=\"$na1\"/>
													<input type=\"hidden\" name=\"com_id\" value=\"$messid\"/>
													<input type=\"hidden\" name=\"level\" value=\"1 \"/>
													<input type=\"text\"name=\"comm\" class=\"form-control\" placeholder=\"make your comment\">
													<div class=\"input-group-btn\">
														<button class=\"btn btn-default\" name=\"comment2\" type=\"submit\"><i class=\"glyphicon glyphicon-exclamation-sign\"></i></button>
													</div>
												</div>
											</form>
								</div>";
                                        //echo"end comment div";
                                        $query3 = "select count(type) from forum_like where message_id='$messid' and username='$user' and category='$cat'";
                                        $k3 = mysql_query($query3);
                                        if (!$k3) {
                                            echo mysql_error();
                                        } else {
                                            $k4 = mysql_fetch_array($k3);
                                            $lik = $k4[0];
                                        }
                                        //echo "like div";
                                        echo "	<div class=\"col-md-12 com\"><h3 style=\"float:left\">";




                                        if (isset($_SESSION["username"])) {
                                            $na1 = $_SESSION['username'];
                                            $na2 = $row['username'];
                                        }


                                        if (isset($_SESSION["username"]) && ($na1 == $na2)) {
                                            echo "<h3 style=\"float:left\">Like</h3>";
                                            //echo "<h3 style=\"float:right\"><a href=\"#\">share</a></h3><br>";
                                            echo "<h3 style=\"margin-left:0px;float:left;font-size:12px\">$like others and you Like</h3>";
                                        }
                                        if (isset($_SESSION["username"]) && ($na1 != $na2)) {
                                            $que = "select * from liketracker where imagename='{$row['id']}' and member='$na1'";
                                            $resul = mysql_query($que);
                                            if (mysql_num_rows($resul) > 0) {

                                                echo "<h3 style=\"float:left\">Liked</h3><h3 style=\"float:right\">";
                                                //echo"<a href=\"#\">share</a></h3><br>";
                                                //echo"	<h3 style=\"margin-left:0px;float:left;font-size:12px\">$like others and you Like</h3>";	
                                            } else {

                                                echo "<h3 style=\"float:left\"><a href=\"chatprocess.php?id22={$row['id']}&&poster2=$na2&&user=$na1\">like</a></h3>";
                                                //<h3 style=\"float:right\"><a href=\"#\">share</a></h3>
                                            }
                                        }


































                                        echo"				</div>";





















                                        echo"		</div>";
                                        //echo			endlike div
                                    }
                                    ?>



                    </div>



                </div>
            </div>




            <!-----------------------------------------------------------------second part of the column-------------------->
            <div class="col-md-4" id="chat_adv">
                <div class="row">
                    <div class="col-md-7  col-sm-12 col-xs-12" id="radv">
<?php
/* * friend request
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
												<div  class=\"col-md-6 col-xs-12 col-sm-12 \"style=\"width:12em;\">
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
                        echo"<div class=\"col-md-12\" style=\"margin:0;padding:0;text-align:center;font-weight:bold;\">Top models</div>";
                        /*                         * while($row8=mysql_fetch_array($result8)){
                          echo"<div class=\"col-md-12 wrap\" style=\"margin:0;padding:0;\">
                          <a href=\"#\">&#967;</a>
                          <div class=\"col-md-6 pix2\" style=\"margin:0;padding:0\"><img src=\"banner/{$row8['imgname']}\"/></div>
                          <div  class=\"col-md-6 \"style=\"width:12em;\">
                          {$row8['bannername']}</br>
                          </div>
                          </div>";
                          } */
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
                    <!---->
                    <div class="col-md-3  col-sm-12 col-xs-12" id="rchat">
                        <div class="row" style="bottom:0px;right:0px;width:190px;">
                            <div class="col-md-12">
                        <?php require_once("incl/right.php"); ?>
                        <?php
                        //echo "<img src=\"banner/11111.jpg\" width=\"180\"/>";
                        //	echo "<img src=\"banner/left.png\" width=\"180\"/>";
                        //		echo "<img src=\"banner/left2.png\" width=\"180\"/>";
                        /*                         * $tbl_name="online";
                          $time=time();
                          $time_check=$time-600;
                          $sql="SELECT * FROM $tbl_name WHERE username='$like'";
                          $result=mysql_query($sql);
                          $count=mysql_num_rows($result);
                          if($count=="0")
                          {
                          $sql1="INSERT INTO $tbl_name(username, time)VALUES('$like', '$time')";
                          $result1=mysql_query($sql1);
                          }
                          else {
                          $sql2="UPDATE $tbl_name SET time='$time' WHERE username = '$like'";
                          $result2=mysql_query($sql2);
                          }
                          $sql3="SELECT * FROM $tbl_name";
                          $result3=mysql_query($sql3);
                          $count_user_online=mysql_num_rows($result3);
                          echo "User online : $count_user_online ";
                          /**if over 10 minute, delete username
                          $sql4="DELETE FROM $tbl_name WHERE time<$time_check";
                          $result4=mysql_query($sql4); */
                        /*                         * sql to select friend online
                          $friend=array();
                          $myfriend="SELECT friendlist.friendusername,friendlist.myusername
                          from friendlist where friendusername='$like' and status=2 or myusername='$like' and status=2";
                          $res3=mysql_query($myfriend);
                          $queryfriend="";
                          while($res4=mysql_fetch_array($res3)){
                          if($res4['myusername']!="$like"){
                          $queryfriend.="select * from online where username='{$res4['myusername']}'";
                          array_push($friend,$res4['myusername']);
                          }
                          if($res4['friendusername']!="$like"){
                          $queryfriend.="select * from online where username='{$res4['friendusername']}'";
                          array_push($friend,$res4['friendusername']);
                          }
                          }
                          $queryf=mysql_query($queryfriend);
                          echo "this". mysql_num_rows($queryf);
                          echo "final result</br>";
                          foreach($friend as $key=>$value){
                          //echo $value."</br>";
                          $online="SELECT * from online where username='$value'";
                          $res31=mysql_query($online);
                          while( $res41=mysql_fetch_array($res31)){
                          echo $res41['username']."</br>";
                          }
                          } */
                        /**
                          $query61="SELECT  picture.img,picture.category,picture.username, registration.fullname,registration.model
                          FROM picture
                          left JOIN registration ON picture.username=registration.username
                          where picture.profile='yes' and picture.username='test5'";
                          $result61=mysql_query($query61);
                          while($row61=mysql_fetch_array($result61)){
                          echo "<a class=\"o\" href=\"#?id={$row61['username']}\"><div class=\"row\">
                          <div class=\"col-md-4 chat\" style=\"\"><img src=\"images/{$row61['img']}\"/></div>
                          <div class=\"col-md-8\" style=\"margin:0px auto;\">{$row61['fullname']}</div>
                          </div></a>";
                          }
                          echo "<a class=\"o\" href=\"#?id=2\"><div class=\"row\">
                          <div class=\"col-md-4 chat\" style=\"\"><img src=\"images/{$row8['imgname']}\"/></div>
                          <div class=\"col-md-8\" style=\"margin:0px auto;\">emma</div>
                          </div></a>"; */
                        ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    $(".o").click(function () {
        var amount = $(this).attr('href');
        var vals = amount.split('=');
        create(vals[1]);
        //chat(vals[1]);
    })
    function create(user) {
        var send = '<?php echo $like ?>'
        var cat = '<?php echo $cat ?>'
        $('<div/>', {class: 'wrapper'}).appendTo(".ch");
        $('<div/>', {class: 'wrapper1'}).appendTo(".wrapper");
        //	$('<div/>',{ class : 'wrapper11'}).appendTo(".wrapper1");
        //	$('<div/>',{ class : 'wrapper12'}).appendTo(".wrapper1");
        $('<div/>', {class: 'clear'}).appendTo(".wrapper1");
        $('<div/>', {class: 'wrapper2'}).appendTo(".wrapper");
        //$('<div/>',{ class : 'wrapper21'}).appendTo(".wrapper2");
        //$('<div/>',{ class : 'wrapper22'}).appendTo(".wrapper2");
        $('<div/>', {class: 'clear'}).appendTo(".wrapper2");
        $('<div/>', {class: 'wrapper3'}).appendTo(".wrapper");
        $(".wrapper3").append('<form action="chatprocess.php?id="+"e"+" method="POST">');
        $(".wrapper3 form").append('<input type="text" placeholder="Name" name="a" id="rname"/>');
        $(".wrapper3 form").append('<br><input type="submit" name="submit" value="Send" />');
        $(".wrapper3 form").attr('action', 'chatprocess.php?send=' + send + '&&rec=' + user + '&&cat=' + cat);
        return user
    }
    /*
     function chat(str) {
     var xhttp;
     if (window.XMLHttpRequest)
     {
     xhttp = new XMLHttpRequest();
     } 
     else
     {
     xhttp = new ActiveXObject("Microsoft.XMLHTTP");
     }
     alert(xhttp);
     }*/


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


</script>
</html>