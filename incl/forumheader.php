<?php
ob_start();
require_once("incl/forumtitle.php");
require_once("incl/cons.php");
require_once("incl/function.php");
//require_once("incl/mail2.php");
require_once("incl/ses.php");
cont();
//echo $_SESSION['username'];
$sessionvariable = $_SESSION['username'];
$like = $_SESSION['username'];
$gen = $_SESSION['sex'];
?>
<style>
    .repl{
        //border-style:solid;
        display:inline-block;
        float:left;
    }
    .repl img{
        height:50px;
        width:50px;
    }
    .head21{
        display:none;
        width:0%;
    }
    body{

        margin:0px;
        padding:0px;
    }
    .h{
        background:black;
        margin:0px;
        padding:0px;
        position:fixed;
        z-index:100;
        width:100%;
        max-width:1400px;
        margin-bottom:12em;
        /*margin-top:0px;*/
    }
    #nam{
        font-weight:bold;
        font-weight:14px;
        display:none;
    }
    .h2{
        margin:0;
        padding:0;
        width:55%;
        float:left;
        /*border-style:solid;
        //border-color:green;*/
    }
    .h3{
        margin:0;
        padding:0;
        width:45%;
        float:left;
        /*border-style:solid;
        border-color:green;*/
    }
    .head2{
        width:100px;
        height:50px;
        width:15%;
        float:left;
    }
    #logo{
        float:left;
    }
    #logosearch{
        float:left;
        margin-top:0.6em;
        margin-left:0;
        width:65%;

    }
    @media only screen and (max-width:1302px) {
        .h{
            /*background:teal;*/
            margin:0px;
            padding:0px;
            position:fixed;
            z-index:1;
            width:100%;
            max-width:1302px;
            margin-bottom:12em;
            /*margin-top:0px;*/
        }
        .chlist{
            width:20%;

        }
        .chlist img{
            height:100px;
            width:150px;
            align:center;
        }
        #logosearch{
            float:left;
            margin-top:0.6em;
            margin-left:0;
            width:55%;

        }
        #post_c{
            position:relative !important;;
            margin-top:1em !important;;
            margin-left:21% !important;
            /*width:50% !important;*/
        }
        #adv{

            margin-top:1em !important;

            position:fixed !important;
            margin-left:56% !important;
            width:25% !important
        }
        #carea{
            margin-top:1em !important;

            position:fixed !important;
            margin-left:80% !important;
            width:15% !important
        }
    }




    @media only screen and (max-width:990px) {
        .head21{

            display:block;
            float:right;
            margin-right:12% !important;
            /*border-style:solid;*/
        }
        .head21 img{
            width:80px;
            height:75px;
        }
        .head2{
            display:none;
        }
        #logo img{
            height:100px;
            width:150px;
            float:left;
            margin:0px;
        }
        #logosearch{
            margin:0px;
            width:50%;
            float:left;
        }
        .h{
            background:black;
            margin:0px;
            padding:0px;
            position:fixed;
            z-index:100;
            width:100%;
            max-width:990px;
            margin-bottom:12em;
            /*margin-top:0px;*/
        }
        .h2{
            margin:0;
            padding:0;
            width:100%;
            /*float:left;
            border-style:solid;
            border-color:green;*/
        }

        .h3{
            margin:0;
            padding:0;
            width:45%;
            float:left;
            /*border-style:solid;
            border-color:green;*/
        }



        .chlist{

            position:relative;
            margin:0px;
            display:none;
        }
        .chlist img{
            display:none;
            /*position:relative;*/
        }
        #fullwrapper{
            margin-left:0px;
            margin-right:10px;
            padding-left:0px;
            padding-top:5em;
            position:relative;
        }

        .menu li{
            margin:5px;
            margin-top:2px;
            margin-left:10px;
            height:20px;
        }
        .menu2{
            display:block;
            margin-top:0.1em;
        }
        .menu ul li:first-child {
            //margin-left:20%;
        }
        .menu2 ul li:first-child {
            // margin-left:20%;
        }
        .menu2 li{
            ////background:orange;
            //font-weight:bold;
            margin:5px;
            margin-left:20px;
            margin-top:2px;
            height:20px;
            text-transform: lowercase;

        }
        #post_c{
            position:relative !important;;
            margin-top:7em !important;;
            margin-left:0 !important;
            width:50% !important;


        }
        #adv{

            margin-top:7em !important;

            position:fixed !important;
            margin-left:52% !important;
            width:25% !important
        }
        #carea{
            margin-top:7em !important;

            position:fixed !important;
            margin-left:74% !important;
            width:15% !important
        }
        .repl img{
            height:30px !important;
            width:30px !important;
            //border-style:solid !important;
        }
    }





    @media only screen and (max-width:750px) {
        .head21{

            display:block;
            float:right;
            margin-right:12% !important;
            //border-style:solid;
        }
        .head21 img{
            width:80px;
            height:75px;
        }
        .head2{
            display:none;
        }
        #logo img{
            height:100px;
            width:150px;
            float:left;
            margin:0px;
        }
        #logosearch{
            margin:0px;
            width:50%;
            float:left;


        }
        .h{
            background:black;
            margin:0px;
            padding:0px;
            position:fixed;
            z-index:100;
            width:100%;
            max-width:990px;
            margin-bottom:12em;
            //margin-top:0px;
        }
        .h2{
            margin:0;
            padding:0;
            width:100%;
            //float:left;
            //border-style:solid;
            //border-color:green;
        }

        .h3{
            margin:0;
            padding:0;
            width:45%;
            float:left;
            //border-style:solid;
            //border-color:green;
        }



        .chlist{

            position:relative;
            margin:0px;
            display:none;
        }
        .chlist img{
            display:none;
            //position:relative;
        }
        #fullwrapper{
            margin-left:0px;
            margin-right:10px;
            padding-left:0px;
            padding-top:5em;
            position:relative;
        }

        .menu li{
            margin:5px;
            margin-top:2px;
            margin-left:10px;
            height:20px;
        }
        .menu2{
            display:block;
            margin-top:0.1em;
        }
        .menu ul li:first-child {
            //margin-left:20%;
        }
        .menu2 ul li:first-child {
            // margin-left:20%;
        }
        .menu2 li{
            ////background:orange;
            //font-weight:bold;
            margin:5px;
            margin-left:20px;
            margin-top:2px;
            height:20px;
            text-transform: lowercase;

        }
        #post_c{
            position:relative !important;;
            margin-top:7em !important;;
            margin-left:0 !important;
            width:46% !important;


        }
        #adv{

            margin-top:7em !important;

            position:fixed !important;
            margin-left:48% !important;
            width:25% !important
        }
        #carea{
            margin-top:7em !important;

            position:fixed !important;
            margin-left:69% !important;
            width:15% !important
        }
        .repl img{
            height:30px !important;
            width:30px !important;
            //border-style:solid !important;
        }
    }







    @media only screen and (max-width:560px) {
        .head21{

            display:block;
            float:right;
            margin-right:12% !important;
            //border-style:solid;
        }
        .head21 img{
            width:80px;
            height:75px;
        }
        .head2{
            display:none;
        }
        .head2 img{
            display:none;
        }
        #logo img{
            height:100px;
            width:150px;
            float:left;
            margin:0px;
        }
        #logosearch{
            margin:0px;
            width:50%;
            float:left;


        }
        .h{
            background:black;
            margin:0px;
            padding:0px;
            position:fixed;
            z-index:100;
            width:100%;
            max-width:990px;
            margin-bottom:12em;
            //margin-top:0px;
        }
        .h2{
            margin:0;
            padding:0;
            width:100%;
            //float:left;
            //border-style:solid;
            //border-color:green;
        }

        .h3{
            margin:0;
            padding:0;
            width:100%;
            //float:left;
            //border-style:solid;
            //border-color:green;
        }



        .chlist{

            position:relative;
            margin:0px;
            display:none;
        }
        .chlist img{
            display:none;
            //position:relative;
        }
        #fullwrapper{
            margin-left:0px;
            margin-right:10px;
            padding-left:0px;
            padding-top:5em;
            position:relative;
        }

        .menu li{
            margin:5px;
            margin-top:2px;
            margin-left:10px;
            height:20px;
        }
        .menu2{
            display:block;
            margin-top:0.1em;
        }
        .menu ul li:first-child {
            //margin-left:20%;
        }
        .menu2 ul li:first-child {
            // margin-left:20%;
        }
        .menu2 li{
            //background:orange;
            //font-weight:bold;
            margin:5px;
            margin-left:20px;
            margin-top:2px;
            height:20px;
            text-transform: lowercase;

        }
        #post_c{
            position:relative !important;;
            margin-top:8em !important;;
            margin-left:0 !important;
            width:59% !important;


        }
        #adv{
            display:none;
            margin-top:10em !important;

            position:fixed !important;
            margin-left:54% !important;
            width:25% !important
        }
        #carea{
            margin-top:8em !important;

            position:fixed !important;
            margin-left:62% !important;
            width:38% !important
        }

        #nam{
            display:none;
        }



    }

    @media only screen and (max-width:418px) {
        .head21{

            display:none;
            float:right;
            margin-right:12% !important;
            //border-style:solid;
        }
        .head21 img{
            display:none;
            width:80px;
            height:75px;
        }
        .head2{
            display:block;
        }
        .head2 img{
            display:block;
        }
        #logo img{
            height:100px;
            width:150px;
            float:left;
            margin:0px;
        }
        #logosearch{
            margin:0px;
            width:50%;
            float:left;


        }
        .h{
            background:black;
            margin:0px;
            padding:0px;
            position:fixed;
            z-index:100;
            width:100%;
            max-width:990px;
            margin-bottom:12em;
            //margin-top:0px;
        }
        .h2{
            margin:0;
            padding:0;
            width:100%;
            //float:left;
            //border-style:solid;
            //border-color:green;
        }

        .h3{
            margin:0;
            padding:0;
            width:100%;
            //float:left;
            //border-style:solid;
            //border-color:green;
        }



        .chlist{

            position:relative;
            margin:0px;
            display:none;
        }
        .chlist img{
            display:none;
            //position:relative;
        }
        #fullwrapper{
            margin-left:0px;
            margin-right:10px;
            padding-left:0px;
            padding-top:5em;
            position:relative;
        }

        .menu li{
            margin:5px;
            margin-top:2px;
            margin-left:10px;
            height:20px;
        }
        .menu2{
            display:block;
            margin-top:0.1em;
        }
        .menu ul li:first-child {
            //margin-left:20%;
        }
        .menu2 ul li:first-child {
            // margin-left:20%;
        }
        .menu2 li{
            //background:orange;
            //font-weight:bold;
            margin:5px;
            margin-left:20px;
            margin-top:2px;
            height:20px;
            text-transform: lowercase;

        }
        #post_c{
            position:relative !important;;
            margin-top:12em !important;;
            margin-left:0 !important;
            width:100% !important;


        }
        #adv{
            display:none;
            margin-top:10em !important;

            position:fixed !important;
            margin-left:54% !important;
            width:25% !important
        }
        #carea{
            display:none;
            margin-top:8em !important;

            position:fixed !important;
            margin-left:62% !important;
            width:38% !important
        }

        #nam{
            display:none;
        }


        @media only screen and (max-width:308px) {
            .head21{

                display:none;
                float:right;
                margin-right:12% !important;
                //border-style:solid;
            }
            .head21 img{
                display:none;
                width:80px;
                height:75px;
            }
            .head2{
                display:block;
            }
            .head2 img{
                display:block;
            }
            #logo img{
                height:60px;
                width:80px;
                float:left;
                margin:0px;
            }
            #logosearch{
                margin:0px;
                width:50%;
                float:left;


            }
            .h{
                background:black;
                margin:0px;
                padding:0px;
                position:fixed;
                z-index:100;
                width:100%;
                max-width:990px;
                margin-bottom:12em;
                //margin-top:0px;
            }
            .h2{
                margin:0;
                padding:0;
                width:100%;
                //float:left;
                //border-style:solid;
                //border-color:green;
            }

            .h3{
                margin:0;
                padding:0;
                width:100%;
                //float:left;
                //border-style:solid;
                //border-color:green;
            }



            .chlist{

                position:relative;
                margin:0px;
                display:none;
            }
            .chlist img{
                display:none;
                //position:relative;
            }
            #fullwrapper{
                margin-left:0px;
                margin-right:10px;
                padding-left:0px;
                padding-top:7em;
                position:relative;
            }

            .menu li{
                margin:5px;
                margin-top:2px;
                margin-left:10px;
                height:20px;
            }
            .menu2{
                display:block;
                margin-top:0.1em;
            }
            .menu ul li:first-child {
                //margin-left:20%;
            }
            .menu2 ul li:first-child {
                // margin-left:20%;
            }
            .menu2 li{
                ////background:orange;
                //font-weight:bold;
                margin:5px;
                margin-left:20px;
                margin-top:2px;
                height:20px;
                text-transform: lowercase;

            }
            #post_c{
                position:relative !important;;
                margin-top:8em !important;;
                margin-left:0 !important;
                width:100% !important;


            }
            #adv{
                display:none;
                margin-top:10em !important;

                position:fixed !important;
                margin-left:54% !important;
                width:25% !important
            }
            #carea{
                display:none;
                margin-top:8em !important;

                position:fixed !important;
                margin-left:62% !important;
                width:38% !important
            }

            #nam{
                display:none;
            }



        }

    </style>

    <div class="h">
        <?php
        $query1 = "select * from picture where username='$sessionvariable'  and profile='YES'";
        $result1 = mysql_query($query1);
        $rec = mysql_fetch_array($result1);
        ?>
        <div class="h2" style="">
            <div class="" id="logo">
                <a href="index.php"><img src="images/logo.png" class="img-responsive"></a>
            </div>
            <div class="" id="logosearch">
                <form class="navbar-form" role="search" method="post" action="">
                    <div class="input-group col-md-12 col-xs-12">
                        <input type="text" class="form-control" placeholder="Search" name="post">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit" name="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class=" head21">
                <?php
                if (mysql_num_rows($result1) > 0) {
                    $pic = $rec['img'];
                    echo"<a href=\"chat2.php?user=$sessionvariable\"><img src=\"img/$pic\" class=\"img-circle img-responsive\"></a>";
                } else {
                    if ($gen == 'FEMALE') {
                        echo"	<a href=\"chat2.php?user=$sessionvariable\"><img src=\"images/female.jpg\" class=\"img-rounded\" width=\"250px\" height=\"200px\"/></a>";
                    } else {
                        echo"<a href=\"chat2.php?user=$sessionvariable\"><img src=\"images/male.png\" class=\"img-rounded\" width=\"250px\" height=\"200px\"/></a>";
                    }
                }
                ?>
            </div>
        </div>
        <div class=" h3" style="">

            <div  class="menu">

                <div class=" head2">
                    <?php
                    if (mysql_num_rows($result1) > 0) {
                        $pic = $rec['img'];
                        echo"<a href=\"chat2.php?user=$sessionvariable\"><img src=\"img/$pic\" class=\"img-circle img-responsive\"></a>";
                    } else {
                        if ($gen == 'FEMALE') {
                            echo"<a href=\"chat2.php?user=$sessionvariable\">	<img src=\"images/female.jpg\" class=\"img-rounded\" width=\"250px\" height=\"200px\"/></a>";
                        } else {
                            echo"<a href=\"chat2.php?user=$sessionvariable\"><img src=\"images/male.png\" class=\"img-rounded\" width=\"250px\" height=\"200px\"/></a>";
                        }
                    }
                    ?>
                </div>
                <div class="">
                    <ul>
                        <?php //echo "<li id=\"nam\"><a href=\"chat2.php?user=$sessionvariable\">$sessionvariable</a></li>";?>
                        <li><a href="chat.php">chat page</a></li>
                        <?php
                        /** friend request */
                        $query51 = "SELECT friendlist.friendusername,friendlist.myusername,picture.img,picture.profile,registration.fullname,registration.username
                                from friendlist left join picture on friendlist.myusername=picture.username left join registration on friendlist.myusername=registration.username
				where friendlist.status=0 and friendlist.friendusername='$like' and picture.profile='yes'";

                        $result51 = mysql_query($query51);
                        if (mysql_num_rows($result51) > 0) {
                            $d = mysql_num_rows($result51);
                            //echo "this'is' secon".$co;
                            $cat = 'fashion';
                            echo "<li><a href=\"#\">$d friend request </a>";
                            echo "<div class=\"row friendl submenu\" id=\"fir\">";
                            echo"<div class=\"col-md-12\" style=\"margin:0;padding:0;text-align:center;font-weight:bold;\">friend request</div>";
                            while ($row51 = mysql_fetch_array($result51)) {
                                echo"<div class=\"col-md-12 wrap\" style=\"margin:0;padding:0;\">
				<a href=\"#\">&#967;</a><div class=\"col-md-6 pix2\" style=\"margin:0;padding:0\"><img src=\"img/{$row51['img']}\"/></div>
                                        <div  class=\"col-md-6 \"style=\"width:12em;\">
                                                {$row51['fullname']}</br>
                                                <a href=\"chatprocess.php?friendusername2={$row51['myusername']}&&myusername2=$like&&cat=$cat&&sta=1\" style=\"background:green;color:black;font-weight:bold;margin-bottom:10px\">accept</a>
                                                <a href=\"chatprocess.php?friendusername2={$row51['myusername']}&&myusername2=$like&&cat=$cat&&sta=2\" style=\"background:red;color:black;font-weight:bold;margin-bottom:10px\">reject</a>
                                </div>
                                </div>";
                            }
                            echo "</div>";
                            echo"</li>";
                        } else {
                            echo "<li>friend request</li>";
                        }
                        ?>
                        <!--	<li>message
                                        <div class="submenu">
                                                        <ul>
                                                           <li>mess1</li>
                                                                <li>mess2</li>
                                                                <li>profile4</li>
                                                                <li>profile4</li>
                                                        </ul>
                                                </div>
                                </li>-->
                        <li><a href="contest.php?category=general">contestant</a></li>
                        <li><a href="incl/outs.php">Sign Out</a></li>
                        <li>menu</li>

                    </ul>
                </div>
                <!--<p><span class="glyphicon glyphicon-th"></span></p>-->
            </div>

        </div>
        <div class="col-md-12 menu2">
            <?php
            echo "<ul>";
            echo"<li><a href=\"uploadimage.php\">UPLOAD IMAGE</a></li>";
            echo"<li><a href=\"buycredit.php\">BUY CREDIT</a></li>";
            $vip = "select * from vip where username='$sessionvariable'";
            $vip1 = mysql_query($vip);
            if (mysql_num_rows($vip1) > 0) {
                echo"<li><a href=\"vipupload.php\">VIP PHOTO</a></li>";
            } else {
                echo"		<li><a href=\"vipcredit.php\">VIP PHOTO</a></li>";
            }
            echo"		<li><a href=\"request.php\">REQUEST PAYMENT</a></li>";
//echo"		<li><a href=\"edit.php\">EDIT PROFILE</a></li>";
// echo"		<li><a href=\"#\"><span class=\"glyphicon glyphicon-home\"></span>MY PAGE</a></li>";
            echo"		<li><a href=\"del.php\">PICTURE MANAGEMENT</a></li>";

            echo"			<li><a href=\"msg.php\" >Support</a></li>";

            $query1 = "select * from msg where rec='$like' and state=0 ";
            $result1 = mysql_query($query1);

            $a = mysql_num_rows($result1);
            echo"<li><a href=\"noti.php\">{$a}Inbox</a></li>";

            echo"      </li>";

            echo" </ul>";
            ?>
        </div>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $post = test_input($_POST['post']);
        $query1 = "select * from registration where username='$post'";
        $result1 = mysql_query($query1);
        if (mysql_num_rows($result1) > 0) {
            $rec = mysql_fetch_array($result1);
            $user = $rec['username'];
            header("location:chat2.php?user=$user");
        } else {
            $nam = "user not found";
            echo "<div class=\"alert alert-danger\">";
            echo "	<strong>";
            echo "{$nam}";
            echo "	</strong>";
            echo "</div>";
            header('Refresh:2; url=chat.php');
        }
    }
    ob_end_flush();
    ?>