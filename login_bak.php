<?php
require_once("incl/cons.php");
require_once("incl/function.php");
require_once 'face/fbConfig.php';
require_once 'face/User.php';
cont();
?>
<html lang="en">
    <?php
    require_once("incl/title.php");
    ?>
    <link rel="stylesheet" href="css/form.css">
    <body>
        <!--header line-->
        <?php
        include("incl/header.php");
        ?>
        <!--end of header line-->
        <!---content of your code-->
        <!--FORM BODY-->
        <div class="container">
            <?php
            if (isset($_POST["submit"])) {
                $username = test_input($_POST['username']);
                $username = strtolower($username);
                $password = test_input($_POST['password']);
                $password = md5($password);
                //echo $username;
                echo "<br>";
                //sta 2 fro complete,1 for social media, 10 for suspended,0 for unconfirm
                //$query1="select * from registration where username='james' and password='$password' and status=1 or status=2 limit 1";
                $query1 = "select * from registration where username='$username' and password='$password' and (status=1 or 2 or 0 or 10 or 5)";
                $result1 = mysql_query($query1);
                if (mysql_num_rows($result1) > 0) {
                    $rec = mysql_fetch_array($result1);
                    if ($rec['status'] == 2 and ! isset($_SESSION['dir'])) {
                        session_start();
                        $_SESSION['username'] = $rec['username'];
                        $_SESSION['status'] = $rec['status'];
                        $_SESSION['sex'] = $rec['gender'];
                        $_SESSION['email'] = $rec['email'];
                        //echo $_SESSION['username'];
                        echo "<br>";
                        //echo $_SESSION['status'];
                        header('location:chat.php');
                    }
                    if ($rec['status'] == 5 and ! isset($_SESSION['dir'])) {
                        session_start();
                        $_SESSION['username'] = $rec['username'];
                        $_SESSION['status'] = $rec['status'];
                        $_SESSION['sex'] = $rec['gender'];
                        $_SESSION['email'] = $rec['email'];
                        //echo $_SESSION['username'];
                        echo "<br>";
                        //echo $_SESSION['status'];
                        header('location:chat.php');
                    } else if ($rec['status'] == 2 and $_SESSION['dir'] == 2) {
                        session_start();
                        $_SESSION['username'] = $rec['username'];
                        $_SESSION['status'] = $rec['status'];
                        $_SESSION['sex'] = $rec['gender'];
                        $_SESSION['email'] = $rec['email'];
                        //echo $_SESSION['username'];
                        echo "<br>";
                        //echo $_SESSION['status'];
                        header('location:vipcredit.php');
                    } else if ($rec['status'] == 1 and ! isset($_SESSION['dir'])) {    //die();
                        session_start();
                        $_SESSION['username'] = $rec['username'];
                        $_SESSION['status'] = $rec['status'];
                        $_SESSION['sex'] = $rec['gender'];
                        $_SESSION['email'] = $rec['email'];
                        header('location:social.php');
                    } else if ($rec['status'] == 1 and $_SESSION['dir'] == 2) {    //die();
                        session_start();
                        $_SESSION['username'] = $rec['username'];
                        $_SESSION['status'] = $rec['status'];
                        $_SESSION['sex'] = $rec['gender'];
                        $_SESSION['email'] = $rec['email'];
                        header('location:social.php');
                    } else if ($rec['status'] == 10) {
                        session_start();
                        $_SESSION['username'] = $rec['username'];
                        $_SESSION['email'] = $rec['email'];
                        $_SESSION['status'] = 10;
                        header('location:suspend.php');
                    } else {
                        $nam = "your account is not activated";
                        echo "<div class=\"alert alert-danger\">";
                        echo "	<strong>";
                        echo "{$nam}";
                        echo "	</strong>";
                        echo "</div>";
                    }
                } else {
                    $nam = "incorrect login detail";
                    echo "<div class=\"alert alert-danger\">";
                    echo "	<strong>";
                    echo "{$nam}";
                    echo "	</strong>";
                    echo "</div>";
                    header('Refresh:3; url=login.php');
                }
            }
            if (isset($_GET["id"])) {
                $nam = "you must login in to start liking";
                echo "<div class=\"alert alert-danger\" style=\"text-align:center\";>";
                echo "	<strong>";
                echo "{$nam}";
                echo "	</strong>";
                echo "</div>";
                header('Refresh:3; url=login.php');
            }
            if (isset($_GET["id2"])) {
                $_SESSION['dir'] = 2;
            }
            ?>
            <!-- Begin page content -->
                    <div class="col-md-4 col-lg-4 col-sm-12" >
                        <?php
                        $loginURL = $helper->getLoginUrl($redirectURL, $fbPermissions);
                        // Render facebook login button
                        $output = '<a href="' . htmlspecialchars($loginURL) . '"><img class=\"img-responsive\" src="face/images/face2.png"></a>';
                        echo $output;
                        ?>
                        <div style="margin-bottom:5px">
                            <?php
                            require_once("g/lo.php");
                            ?>
                        </div>
                    
                        <form method ="post" action=" " class="form-horizontal" role="form">
                            <div class="form-row">
                              <div class="form-group col-md-6 col-lg-12">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Enter your username" required>
                              </div>
                            </div>
                            
                            <div class="form-row">
                              <div class="form-group col-md-6 col-lg-12">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                              </div>
                            </div>

                            <div class="form-row">
                              <div class="form-group col-md-6 col-lg-12">
                                <button type="submit" class="btn btn-default" name="submit">Submit</button>
                                <a href="forget.php" class="btn btn-default col-md-6 col-lg-6 col-sm-11">Forget password</a>
                              </div>
                            </div>
                            
                            <div class="form-row">
                              <div class="form-group col-md-6 col-lg-12">
                                <a href="registration.php" class="btn btn-default col-md-6  col-md-offset-1">Don't have an account?Register</a>
                              </div>
                            </div>
                          </form>
                    </div>
                        
                        
                        
<!--                        <form method ="post" action=" " class="form-horizontal" role="form">
                    <fieldset>
                        <div class="form-group">
                            <div class="col-md-7 col-lg-7 col-sm-11">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="text" class="form-control" name="username" placeholder="Enter your username" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-7 col-lg-7 col-sm-11 input-group al">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-lock"></span>
                                </span>
                                <input type="password" class="form-control "  name="password" placeholder="Enter password" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default col-md-6 col-lg-6 col-sm-11" name="submit">Submit</button>
                            <a href="forget.php" class="btn btn-default col-md-6 col-lg-6 col-sm-11">Forget password</a>
                        </div>
                        <div class="form-group">
                            <a href="registration.php" class="btn btn-default col-md-6  col-md-offset-1">Don't have an account?Register</a>
                        </div>
                    </fieldset>
                </form>-->
        <!--FOOTER-->
        <footer>
            <?php
            include("incl/footer.php");
            ?>
        </footer>
    </div>	
</body>
</html>