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

$query1 = "select * from picture where username='$sessionvariable'  and profile='YES'";
        $result1 = mysql_query($query1);
        $rec = mysql_fetch_array($result1);
        $pic="";
        if (mysql_num_rows($result1) > 0) {
            $pic = $rec['img'];
        }else{
            if($gen == 'FEMALE'){
                $pic = "female.jpg";
            }  else {
                $pic = "male.png";
            }
        }
?>

<!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <!-- Custom styles for this template -->
        <link href="css/sticky-footer-navbar.css" rel="stylesheet">
        <link href="css/chat_styles.css" rel="stylesheet">

    <body style="background-color: #f5f5f5;">

  <body>

    <header>
            <!-- Fixed navbar -->
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="index.php">
                    <img width="70%" class="img-responsive" src="images/logo.png">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <a class="navbar-brand" href="index.php">
                        <?php echo "<a href=\"chat2.php?user=$sessionvariable\"><img class=\"img-circle round_img \" width=\"40px\" height=\"40px\" src=\"images/$pic\"></a>";?>
                    </a>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="chat.php">chat page</a></li>
                        <li class="nav-item"><a class="nav-link" href="contest.php?category=general">contestant</a></li>
                        <li class="nav-item"><a class="nav-link" href="incl/outs.php">Sign Out</a></li>
                        <?php
                            $query51 = "SELECT friendlist.friendusername,friendlist.myusername,picture.img,picture.profile,registration.fullname,registration.username
                                from friendlist left join picture on friendlist.myusername=picture.username left join registration on friendlist.myusername=registration.username
				where friendlist.status=0 and friendlist.friendusername='$like' and picture.profile='yes'";

                        $result51 = mysql_query($query51);
                        if (mysql_num_rows($result51) > 0) {
                            $d = mysql_num_rows($result51);
                        }
                        ?>
                    </ul>
                    <form class="form-inline mt-2 mt-md-0">
                        <input name="fullname" placeholder="enter username of contestant" class="form-control mr-sm-2" type="text" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit1">Search</button>
                    </form>
                </div>
            </nav>
        </header>

