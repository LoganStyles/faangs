<?php
ob_start();
require_once("incl/cons.php");
require_once("incl/function.php");

session_start();
cont();
?>

<!doctype html>
<html lang="en">
    <?php
    require_once("incl/title.php");
    ?>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <link rel="stylesheet" href="css/form.css">
        <link rel="stylesheet" href="css/contest.css">
        <link rel="stylesheet" href="css/countdown.css" type="text/css" media="all" />

        <!-- Custom styles for this template -->
        <link href="css/sticky-footer-navbar.css" rel="stylesheet">

    <body style="background-color: #f5f5f5;">

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
                    <ul class="navbar-nav mr-auto">
                        <!--            <li class="nav-item active">
                                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                    </li>-->
                        <?php
                        if (isset($_SESSION['username']) && ($_SESSION['status'] == 1)) {
                            echo '<li class=\"nav-item\"><a class=\"nav-link\" href=\"participate.php\">Profile</a></li>';
                            echo '<li class=\"nav-item\"><a class=\"nav-link\" href=\"incl/outs.php\">Sign-Out</a></li>';
                        } else if (isset($_SESSION['username']) && ($_SESSION['status'] == 2)) {
                            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"chat.php\">Forum</a></li>";
                            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"chat2.php?user={$_SESSION['username']}\">Profile</a></li>";
                            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"incl/outs.php\">Sign-Out</a></li>";
                        } else if (isset($_SESSION['admin'])) {
                            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"adminpage.php\">Dashboard</a></li>";
                            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"incl/outs.php\">Sign-Out</a></li>";
                        } else if (!isset($_SESSION['username'])) {
                            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"login.php\">Sign-In</a></li>";
                            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"registration.php\">Sign-Up</a></li>";
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

        <div class="container-fluid">

            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: 7%;">
                <!--<a class="navbar-brand" href="#">Navbar</a>-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contest.php?category=general"><i class="fa fa-bars" >&nbsp;&nbsp;General</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contest.php?category=business"><i class="fa fa-briefcase" >&nbsp;&nbsp;Business</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contest.php?category=dating"><i class="fa fa-heart-o" >&nbsp;&nbsp;Dating</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contest.php?category=social"><i class="fa fa-camera" >&nbsp;&nbsp;Social</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contest.php?category=religious"><i class="fa fa-building" >&nbsp;&nbsp;Religious</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contest.php?category=model"><i class="fa fa-diamond" >&nbsp;&nbsp;Model</i></a>
                        </li>
                        <!--                <li class="nav-item dropdown">
                                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Dropdown link
                                          </a>
                                          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                          </div>
                                        </li>-->
                    </ul>
                </div>
            </nav>

            <div class="row">
                <!--COL 1::CHANGING ADVERTS-->
                <div class="col-md-2">
                    
                     <!------------------------------------------------------h------------------>
            <?php require_once("incl/left.php"); ?>

<!--                    <div class="card border-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-body text-secondary">
                            <img class="card-img-top" src="images/logo.png" alt="Card image cap">
                        </div>
                    </div>-->

                    <!--<div class="card border-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body text-secondary">
                            <h5 class="card-title">Secondary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>-->



                </div>
                <div class="col-md-2"><!--COL 2::CATEGORIES-->
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active">
                          CATEGORY LISTING
                        </a>
                        <a href="contest.php?category=general" class="list-group-item list-group-item-action"><i class="fa fa-bars" >&nbsp;&nbsp;General</i></a>
                        <a href="contest.php?category=business" class="list-group-item list-group-item-action"><i class="fa fa-briefcase" >&nbsp;&nbsp;Business</i></a>
                        <a href="contest.php?category=dating" class="list-group-item list-group-item-action"><i class="fa fa-heart-o" >&nbsp;&nbsp;Dating</i></a>
                        <a href="contest.php?category=social" class="list-group-item list-group-item-action"><i class="fa fa-camera" >&nbsp;&nbsp;Social</i></a>
                        <a href="contest.php?category=religious" class="list-group-item list-group-item-action"><i class="fa fa-building" >&nbsp;&nbsp;Religious</i></a>
                        <a href="contest.php?category=model" class="list-group-item list-group-item-action"><i class="fa fa-diamond" >&nbsp;&nbsp;Model</i></a>
                    </div>
                    
                    <div class="card border-secondary mb-3" style="margin-top: 1%;">
                         <form method="post" action="filter.php">
                            <div class="form-row">
                              <div class="form-group col-md-5">
                                <label for="agemin">Age</label>
                                <input type="number" class="form-control" id="agemin" name="agemin" placeholder="min">
                              </div>
                              <div class="form-group col-md-5">
                                <label for="agemax"></label>
                                <input type="text" class="form-control" id="agemax" name="agemax" placeholder="max">
                              </div>
                            </div>
                                <div class="form-group">
                                  <label for="likemin">Number of likes</label>
                                  <input type="text" class="form-control" id="likemin" name="likemin" placeholder="min">
                                </div>
                                <div class="form-group">                              
                                  <input type="text" class="form-control" id="likemax" name="likemax" placeholder="max">
                                </div>
                            <div class="form-row">
                              <p>gender</p>
                                <div class="form-group" style="margin-left:3px;">
                                    <div class="radio-inline"><input type="radio" class="" name="gender" value="male"/>Male</div>
                                    <div class="radio-inline"><input type="radio" class="" name="gender" value="female" checked/>Female</div>
                                </div>
                            </div>
                            
                            <input type="submit" name="submit" class=" btn btn-default col-md-offset-3"  value="Submit"/>
                          </form>
                    </div>
                    
                       
                </div>
                <div class="col-md-6"><!--COL 3::PROFILE INFO-->
                                        <!--main body-->
                    <?php
//                    echo 'in here';exit;
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
                        $content="";
                        while ($rec = mysql_fetch_array($result1)) {
                            $k = ($rec['username']);
                            if (($rec['tos'] == null)or $rec['tos'] <= 0) {
                                $po = 0;
                            } else {
                                $po = $rec['tos'];
                            }

                            $content.="<div class=\"card border-secondary mb-3\">";
                            $content.="<div>";
                            $content.="<div class=\"col-sm-4\">";
                            $content.="<div class=\"card border-secondary mb-3\">";
                            $content.="<div class=\" text-secondary\">";
                            $content.= "<a href=\"contest2.php?id=$k\"><img class=\"card-img-top\" src=\"img/{$rec['img']}\"></a>";
                            $content.="</div></div></div>";

                            $content.="<div class=\"col-sm-8\">";
                            $content.="<div class=\"card mb-3\" style=\"border: 0px;\">";
                            $content.="<div class=\"card-body\">";
                            $content.= "<a href=\"contest2.php?id=$k\"><h5 class=\"card-title\" style=\"text-transform: uppercase\">{$rec['fullname']}</h5></a>";
                            $content.="<p class=\"card-text\">{$rec['bio']}</p>";
                            $content.="<p><span>COUNTRY:</span><strong><span style=\"padding: 0 1%;\">{$rec['country']}</span></strong></p>";

                            $content.="<p><span>STATE:</span><strong><span style=\"padding: 0 1%;\">{$rec['state']}</span></strong></p>";
                            $content.="<p><span>AGE:</span><strong><span style=\"padding: 0 1%;\">{$rec['age']}</span></strong></p>";

                            $content.="<p><span>CATEGORY:</span><strong><span style=\"padding: 0 1%;\">{$rec['category']}</span></strong></p>";
                            $content.= "<p><a href=\"contest2.php?id=$k\"><span>LIKES:</span><strong><span style=\"padding: 0 1%;\">{$po}</span></strong></p>";
                            $content.="</div></div></div></div></div>";
                            
                        }
                        echo $content;                  
                    
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
                <div class="col-md-2"><!--COL 4::CHANGING ADVERTS-->
                    <?php require_once("incl/right.php"); ?>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12"><!--COL 4::CHANGING ADVERTS-->
                    <?php require_once("incl/bottom.php"); ?>
                </div>
            </div>


        </div> <!-- /container -->

        <footer class="footer">
            <div class="container">
                <span class="text-muted">&copy <?php echo date("Y") . " "; ?>faangs.All rights Reserved</span>
        <a href="https://seal.beyondsecurity.com/vulnerability-scanner-verification/faangs.com"><img src="https://seal.beyondsecurity.com/verification-images/faangs.com/vulnerability-scanner-2.gif" alt="Website Security Test" border="0" /></a>
            </div>
        </footer>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')</script>
        <!--<script src="js/vendor/popper.min.js"></script>-->
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/countDown.js"></script>
    </body>
</html>
