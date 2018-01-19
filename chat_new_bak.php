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
                        $query1 = "select * from home order by id desc";
                        $result1 = mysql_query($query1);
                        while ($row = mysql_fetch_array($result1)) {
                            
                        }
                        
                      ?>
                    
                    
                    <div style="margin-top: 2%;">
                        <div class="row">
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Special title treatment</h5>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Special title treatment</h5>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                </div>
                <div class="col-md-4"><!--COL 3::PROFILE INFO-->
                  <div class="card border-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-body text-secondary">
                            <img class="card-img-top" src="images/logo.png" alt="Card image cap">
                        </div>
                   </div>

                   <div class="card border-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body text-secondary">
                            <h5 class="card-title">Secondary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                </div>
                
            </div>
            
            
        </div> <!-- /container -->


