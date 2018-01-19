<?php
ob_start();
require_once("incl/cons.php");
require_once("incl/function.php");
require_once("incl/ses.php");
cont();
?>
<!DOCTYPE html>
<html lang="en">
    <?php require_once("incl/forumheader_new.php"); 
    
        ///////////////////////////////////////////side navigation
        $contestant = $_SESSION['username'];
        $query21 = "SELECT * from picture where username='$contestant' and profile='YES' limit 1";
        $result21 = mysql_query($query21);
        $pic22 = 0;
        $gen = $_SESSION['sex'];
        if (mysql_num_rows($result21) > 0) {
            $pic22 = $pic22 + 1;
            $rec21 = mysql_fetch_array($result21);
            $pic = $rec21['img'];
            $pic = strtolower($pic);
        }else{
            if ($gen == 'FEMALE') {
               $pic22 = $pic22 + 2;
               $pic="female.jpg";
            }else{
                $pic22 = $pic22 + 3;
                $pic="male.png";
            }
        }
    ?>
    
    

    
    <div class="container-fluid" style="margin-top:7%;">

            <div class="row">
                <!--COL 1::CHANGING ADVERTS-->
                <div class="col-md-3">
                    <div class="card border-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-body text-secondary">
                            <?php echo "<img class=\"card-img-top\" src=\"images/$pic\">";?>
                        </div>
                    </div>
                    
                    <div class="list-group">
<!--                        <a href="#" class="list-group-item list-group-item-action active">
                          CATEGORY LISTING
                        </a>-->

                         <?php
                         $curr_url="http://localhost/faangs2/chat_new.php";
                         $curr_title="test title";
                         $content="";
                         $content.="<a href=\"chat2.php?user=$contestant\" class=\"list-group-item list-group-item-action\"><i class=\"fa fa-bars\" >&nbsp;&nbsp;Profile</i></a>";
                         $content.="<a href=\"uploadimage.php\" class=\"list-group-item list-group-item-action\"><i class=\"fa fa-briefcase\" >&nbsp;&nbsp;UPLOAD IMAGE</i></a>";
                          $vip1 = mysql_query($vip);
                          if (mysql_num_rows($vip1) > 0) {
                              $content.="<a href=\"vipupload.php\" class=\"list-group-item list-group-item-action\"><i class=\"fa fa-briefcase\" >&nbsp;&nbsp;VIP PHOTO</i></a>";
                          }else{
                              $content.="<a href=\"vipcredit.php\" class=\"list-group-item list-group-item-action\"><i class=\"fa fa-briefcase\" >&nbsp;&nbsp;VIP PHOTO</i></a>";
                          }
                          $content.="<a href=\"buycredit.php\" class=\"list-group-item list-group-item-action\"><i class=\"fa fa-briefcase\" >&nbsp;&nbsp;BUY CREDIT</i></a>";
                          $content.="<a href=\"request.php\" class=\"list-group-item list-group-item-action\"><i class=\"fa fa-briefcase\" >&nbsp;&nbsp;REQUEST PAYMENT</i></a>";
                          $content.="<a href=\"del.php\" class=\"list-group-item list-group-item-action\"><i class=\"fa fa-briefcase\" >&nbsp;&nbsp;PICTURE MANAGEMENT</i></a>";
                          $content.="<a href=\"edit.php\" class=\"list-group-item list-group-item-action\"><i class=\"fa fa-briefcase\" >&nbsp;&nbsp;EDIT PROFILE</i></a>";
                         echo $content;
                          $query1 = "select * from msg where rec='$contestant' and state=0 ";
                            $result1 = mysql_query($query1);
                            $aaa = mysql_num_rows($result1);
                         ?>
                        
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary">Message <?php echo $aaa;?></button>
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="msg.php">Support</a>
                              <a class="dropdown-item" href="noti.php" onmouseout="myFunction21();">Inbox</a>
                          </div>
                        
                    </div>
                </div>
                </div>
                <div class="col-md-5"><!--COL 2::post -->
                    <?php
                        $a = "fashion";
                        if (isset($_GET['category'])) {
                            $a = $_GET['category'];
                        }
                        ?>
                    
                    <div>
                       <form id="post_form" method="post" action="chatprocess.php?category=<?php echo "{$a}" ?>" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="post">Post Your Opinion</label>
                          <textarea class="form-control" id="post" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="test">Upload Photo</label>
                            <input type="file" class="form-control-file" id="test">
                          </div>
                        <button type="submit" class="btn btn-secondary pull-right" form="post_form" name="chat">Post</button>
                        <div class="clearfix"></div>
                        </form> 
                    </div>
                    
                    
<?php 

function reply($messid) {
    $na11 = $_SESSION['username'];
    $forum23 = "select * from forum_comment where parent_id like '$messid.%' order by parent_id asc";
    
    $com231 = mysql_query($forum23);
    while ($com23 = mysql_fetch_array($com231)) {
        $content="";
        $user23 = $com23['username'];
        $comment3 = $com23['comment'];
        $msg = $com23['parent_id'];
        $pid3 = $com23['id'];
        $level = $com23['level'];
        $level2 = $level + 1;
        $lev = $com23['level'];
        
        $pid3 = $msg . "/" . $pid3;
        
        if ($lev == 1) {               //echo "this is my $lev";
            $content.= "<DIV class=\"row  reply1\">";
        } else if ($lev == 2) {              //	echo "this is my $lev";
            $content.= "<DIV class=\"row  reply2\">";
        } else if ($lev == 3) {              //	echo "this is my $lev";
            $content.= "<DIV class=\"row  reply3\">";
        } else if ($lev == 4) {              //	echo "this is my $lev";
            $content.= "<DIV class=\"row  reply4\">";
        } else if ($lev == 5) {               //echo "this is my $lev";
            $content.= "<DIV class=\"row  reply5\">";
        }
        $content.= "<div class=\"col-md-2 repl\">";
        
        $qu12 = "select * from picture where username='$user23' and profile='yes'";
        $result102 = mysql_query($qu12);
        $row301 = mysql_fetch_array($result102);
        if (mysql_num_rows($result102) > 0) {
            $chat_img="img/".$row301['img'];
        }else{
            $query102 = "select * from registration where username='$user23'";
            $result1002 = mysql_query($query102);
            $row3001 = mysql_fetch_array($result1002);
            if ($row3001['gender'] == "MALE") {
                $chat_img="images/male.png";
            }else{
                $chat_img="images/female.jpg";
            }
        }
        $content.="<a href=\"chat2.php?user=$user23\"><img class=\"card-img-top\" src=\"$chat_img\"></a>";
        $content.= "</div>";
        ////////////////////////////////////////////////////////////////////////////////////////////////get the person comment													
        $content.= "<div class=\"col-md-8\" style=\"margin:0px;padding:0px;word-wrap: break-word;text-align:justify;text-transform:capitalize\">";
        
        $content.= "<h5 style=\"font-weight:bold;display:inline-block;font-size:1em;margin:0px;padding:0px;\">$user23</h5>							";
        $content.="$comment3";
        $content.="</div>";
        $content.="<div class=\"col-md-8 \" style=\"\">";
        
        $content.="<div class=\"col-md-8 \" style=\"\">";
        ///////////////////////////////////////////////////////////////////////////////////////////like process
        $ruser = $_SESSION["username"];
        if (isset($_SESSION["username"]) && ($ruser == $user23)) {
            $content.="<a  class=\"rep111\" href=\"#\">Liked</a>";
        }
        
        if (isset($_SESSION["username"]) && ($ruser != $user23)) {
            $que101 = "select * from liketracker where imagename='{$com23['id']}' and member='$ruser'";
            $resul101 = mysql_query($que101);
            if (mysql_num_rows($resul101) > 0) {
                $content.="<a  class=\"rep111\" href=\"#\">Liked</a>";
            } else {
                $content.="<a  class=\"rep111\" href=\"chatprocess.php?id2={$com23['id']}&&poster=$user23&&user=$ruser\">Like</a>";
            }
        }
        
        if ($lev == 1) {
            $content.="<a  class=\"rep1\" href=\"#\">Reply</a>";
        }
        if ($lev == 2) {
            $content.="<a  class=\"rep2\" href=\"#\">Reply</a>";
        }
        
        $dateValue = $com23['date'];
        $time = strtotime($dateValue);
        $month = date("M-j", $time);
        $content.="<h6 style=\"display:inline-block;\"><span class=\"glyphicon glyphicon-time\"> $month									";
        $content.= "at ";
        $s = $com23['time'];
        $times = strtotime($s);
        $tim = date('h:i A', $times);
        $content.="	$tim</h6>";
        
        if ($lev != 3) {
            if ($lev == 1) {
                $content.="<form class=\"navbar-form rep1\" role=\"search\" method=\"post\" action=\"chatprocess.php\">";
            }
            if ($lev == 2) {
                $content.="<form class=\"navbar-form rep2\" role=\"search\" method=\"post\" action=\"chatprocess.php\">";
            }
            $content.="<div class=\"input-group col-md-12\">
                <input type=\"hidden\" name=\"user\" value=\"$na11\"/>
                <input type=\"hidden\" name=\"com_id\" value=\"$pid3\"/>";
                $lev = $lev + 1;
                $content.="<input type=\"hidden\" name=\"level\" value=\"$lev \"/>
                                <input type=\"text\" name=\"comm\" class=\"form-control\" placeholder=\"reply comment\">
                                <div class=\"input-group-btn\">
                                        <button class=\"btn btn-default\" name=\"comment\" type=\"submit\"><i class=\"glyphicon glyphicon-exclamation-sign\"></i></button>
                                </div>
                        </div>
                </form>";
        }
        $content.="</div>";
        $content.="</div>";
        
        return $content;
	
    }
}

    $query1 = "select * from home order by id desc";
    $result1 = mysql_query($query1);
    $like="";
    
    /*generate content*/
    $content="";
    while ($row = mysql_fetch_array($result1)) {
        $user = $row['username'];
        $dateValue = $row['date'];
        $time = strtotime($dateValue);
         $cat = $row['category'];
        $messid = $row['id'];
        $like = $_SESSION['username'];
        $mes = $row['post_content'];
        $mess = strtolower($mes);
        $image=$row['image'];

       $month = date("M-j", $time);
        $s = $row['time'];
        $times = strtotime($s);
        $time_d= date('h:i A', $times);
        $display_time=$month.' at '.$time_d;

        $query12 = "select * from picture where username='$user' and profile='yes'";
        $result12 = mysql_query($query12);
        $row31 = mysql_fetch_array($result12);

        if (mysql_num_rows($result12) > 0) {
            $small_pic=$row31['img'];
        }else{
            $query12 = "select * from registration where username='$user'";
            $result12 = mysql_query($query12);
            $row31 = mysql_fetch_array($result12);

            if ($gen == 'MALE') {
                $small_pic="male.png";
            }else{
                $small_pic="female.jpg";
            }
        }
        
        $content.="<div style=\"background-color: #fff;\"><div style=\"margin-top: 2%; \">";
        $content.="<div class=\"\" style=\"\"><div class=\"card img_small_pic\" >";
        $content.="<div class=\" text-secondary\" style=\"padding: 5%;\">";
        $content.="<a href=\"chat2.php?user=$user\"><img class=\"card-img-top\" src=\"img/$small_pic\"></a>";
        $content.="</div></div></div>";
        $content.="<div class=\"col-sm-8\" ><div class=\"card\" style=\"border: 0px\"><div><p style=\"text-transform: capitalize;\">$user</p>";
        $content.="<p style=\"font-size: 0.8em;\">$display_time</p>";
        $content.="</div></div></div></div>";
        $content.="<div class=\"row\" style=\"margin-top: 1%;margin-left: 2%;margin-bottom: 2%;\">";
        $content.="<h5>$mess</h5><div style=\"border-top:3px;margin:3%;border-color:#000;\"></div><div class=\"card w-100\" style=\"margin-right: 4%;\">";
        $content.="<div class=\" text-secondary\">";
        if(!empty($image)){
            $content.="<img class=\"card-img-top\" src=\"forumimage/$image\">";
        }                            
        $content.="</div></div>";
        $content.="<div class=\"card w-100\" style=\"margin-top: 1%;margin-right: 2%;margin-bottom: 2%;\" >";

        if (isset($_SESSION["username"])) {
            $na1 = $_SESSION['username'];
            $na2 = $row['username'];
        }
        
        ///////////////////////////////////container for the whole reply////////////////////////////////////////////////				
         $content.="<div class=\"col-md-12 com\" style=\"border-style:;background-color:#b2b2b2;box-shadow: 5px 5px;\">";
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////reply
         $content.=reply($messid);
        //echo $messid;
         $content.="</div>";

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

        $content.="<form method=\"post\" action=\"chatprocess.php\">";
        $content.="<input type=\"hidden\" name=\"user\" value=\"$na1\"/>";
        $content.="<input type=\"hidden\" name=\"com_id\" value=\"$messid\"/>";
        $content.="<input type=\"hidden\" name=\"level\" value=\"1 \"/>";
        $content.="<div class=\"form-group\"><input type=\"text\"name=\"comm\" class=\"form-control\" placeholder=\"make your comment\">";
        $content.="</div><button type=\"submit\" class=\"btn btn-secondary pull-right\" name=\"comment\">Post</button>";
        $content.="<div class=\"clearfix\"></div></form> </div></div></div>";
        $content.= "<div class=\"col-md-12 com\">";
        $content.="<a href=\"http://www.facebook.com/sharer.php?u=".$curr_url."t=". $curr_title.">title=\"Facebook share button\" target=\"blank\">Share on Facebook</a>";
        if (isset($_SESSION["username"]) && ($na1 == $na2)) {
            $content.= "<h3 style=\"float:left\">Like</h3>";
        }
        
        if (isset($_SESSION["username"]) && ($na1 != $na2)) {
            $que = "select * from liketracker where imagename='{$row['id']}' and member='$na1'";
            $resul = mysql_query($que);
            if (mysql_num_rows($resul) > 0) {
                $content.= "<h3 style=\"float:left\">Liked</h3>";	
            } else {
                $content.= "<h3 style=\"float:left\"><a href=\"chatprocess.php?id2={$row['id']}&&poster=$na2&&user=$na1\">like</a></h3>";
            }
        }
        $content.="</div><div class=\"clearfix\"></div>";
        
    }
        
        $content.="<div class=\"col-md-4 profile_Info\"><!--COL 3::PROFILE INFO-->";
        $content.="<div class=\"card border-secondary mb-3\" style=\"max-width: 18rem;\">";
        $content.="<div class=\"card-body text-secondary\">";
        $content.="<img class=\"card-img-top\" src=\"images/logo.png\">";
        $content.="</div></div>";
        $content.="<div class=\"card border-secondary mb-3\" style=\"max-width: 18rem;\">";
        $content.="<div class=\"card-header\">Header</div>";
        $content.="<div class=\"card-body text-secondary\">";
        $content.="<h5 class=\"card-title\">Secondary card title</h5>";
        $content.="<p class=\"card-text\">Some quick example text to build on the card title and make up .</p>";
        $content.="</div></div>";
        $content.="</div></div><!-- /container -->";
        $content.="";
        $content.="";
        echo $content;

  ?>