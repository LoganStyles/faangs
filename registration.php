<?php
ob_start();
require_once("incl/cons.php");
require_once("incl/mail2.php");
require_once("incl/function.php");
require_once 'face/fbConfig.php';
require_once 'face/User.php';
/////////////////////////////////
require_once 'ins/instagram.class.php';
require_once'ins/instagram.config.php';
cont();
?>
<script type="text/javascript" src="js/cou.js"></script>
<style type="text/css">
    * {
        margin: 0px;
        padding: 0px;
    }
    a.button {
        background: url(ins/instagram-login-button.png) no-repeat transparent;
        cursor: pointer;
        display: block;
        height: 29px;
        overflow: hidden;
        text-indent: -9999px;
        width: 250px;
    }
    a.button:hover {
        background-position: 0 -29px;
    }
</style>
<html lang="en">
    <?php
    ///////////////////////////form.css
    require_once("incl/title.php");
    ?>
    <link rel="stylesheet" href="css/form.css">
    <body>
        <!--header line-->
        <?php
        require_once("incl/header.php");
        ?>
        <!--end of header line-->
        <!---content of your code-->
        <!--FORM BODY-->
        <div class="container-fluild">
            <div class="row">
                <div class="col-md-5 col-md-offset-4" style="margin-top:10px;">
                    <?php
                    $loginURL = $helper->getLoginUrl($redirectURL, $fbPermissions);
                    // Render facebook login button
                    $output = '<a href="' . htmlspecialchars($loginURL) . '"><img src="face/images/face2.png"></a>';
                    echo $output;
                    ?>
                    <?php
                    if (!empty($_SESSION['userdetails'])) {
                        header('Location: home.php');
                    }
                    $loginUrl = $instagram->getLoginUrl();
                    //echo "<a class=\"button\" href=\"$loginUrl\">Sign in with Instagram</a>";
                    ?>
                    <img src="images/reg.png" class="img-responsive goo"/>
                    <?php
                    require_once("g/lo.php");
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 col-md-offset-4">
                    <?php
                    if (isset($_POST['submit'])) {
                        $model = test_input($_POST['model']);
                        $_SESSION['model'] = $model;
                        if ($model == "NO") {
                            $_POST['height'] = "not a model";
                            $_POST['waist'] = "not a model";
                            $_POST['shoe'] = "not a model";
                            //$age="not a model";
                            $_POST['hip'] = "not a model";
                            $_POST['chest'] = "not a model";
                            $_POST['shoulder'] = "not a model";
                        }
                        $_SESSION['password'] = test_input($_POST['password']);
                        $_SESSION['fullname'] = test_input($_POST['fullname']);
                        $_SESSION['usname'] = test_input($_POST['username']);
                        $_SESSION['email'] = test_input($_POST['email']);
                        //$confirmpassword=test_input($_POST['confirmpassword']);
                        $_SESSION['phonenumber'] = test_input($_POST['phonenumber']);
                        $_SESSION['gender'] = test_input($_POST['gender']);
                        $_SESSION['height'] = test_input($_POST['height']);
                        $_SESSION['waist'] = test_input($_POST['waist']);
                        $_SESSION['shoe'] = test_input($_POST['shoe']);
                        $_SESSION['age'] = test_input($_POST['age']);
                        $_SESSION['bio'] = test_input($_POST['bio']);
                        $_SESSION['hip'] = test_input($_POST['hip']);
                        $_SESSION['chest'] = test_input($_POST['chest']);
                        $_SESSION['shoulder'] = test_input($_POST['shoulder']);
                        $_SESSION['bank'] = test_input($_POST['bank']);
                        $_SESSION['accname'] = test_input($_POST['accname']);
                        $_SESSION['accnumber'] = test_input($_POST['accnumber']);




                        $missing = array();
                        $username = test_input($_POST['username']);
                        $email = test_input($_POST['email']);
                        $phonenumber = test_input($_POST['phonenumber']);
                        $query1 = "select * from registration where username='$username'";
                        $result1 = mysql_query($query1);
                        if (mysql_num_rows($result1) > 0) {
                            array_push($missing, $username);
                        }
                        $query1 = "select * from registration where email='$email'";
                        $result1 = mysql_query($query1);
                        if (mysql_num_rows($result1) > 0) {
                            array_push($missing, $email);
                        }
                        $query1 = "select * from registration where phonenumber='$phonenumber'";
                        $result1 = mysql_query($query1);
                        if (mysql_num_rows($result1) > 0) {
                            array_push($missing, $phonenumber);
                        }
                        $country = test_input($_POST['country']);
                        if ($country == 'SELECT YOUR COUNTRY') {
                            array_push($missing, $country);
                        }
                        //////////////////////////////////////////////////////////////////////////////////
                        if (count($missing) > 0) {
                            $nam = "the following detail already exist<br>";
                            echo "<div class=\"alert alert-danger\">";
                            echo "	<strong>";
                            echo "{$nam}";
                            echo "	</strong>";
                            echo "</div>";
                            foreach ($missing as $k => $v) {
                                echo $v . "</br>";
                            }
                            header('Refresh:3; url=registration.php');
                        } else {
                            $model = test_input($_POST['model']);
                            if ($model == "NO") {
                                $_POST['height'] = "not a model";
                                $_POST['waist'] = "not a model";
                                $_POST['shoe'] = "not a model";
                                //$age="not a model";
                                $_POST['hip'] = "not a model";
                                $_POST['chest'] = "not a model";
                                $_POST['shoulder'] = "not a model";
                            }
                            $fullname = test_input($_POST['fullname']);
                            $fullname = strtoupper($fullname);
                            $username = test_input($_POST['username']);
                            $username = strtolower($username);
                            $email = test_input($_POST['email']);
                            $email = strtolower($email);
                            $password = test_input($_POST['password']);
                            $password = md5($password);
                            //$confirmpassword=test_input($_POST['confirmpassword']);
                            $phonenumber = test_input($_POST['phonenumber']);
                            $country = test_input($_POST['country']);
                            $country = strtoupper($country);
                            $state = test_input($_POST['state']);
                            $state = strtoupper($state);
                            $height = test_input($_POST['height']);
                            $waist = test_input($_POST['waist']);
                            $shoe = test_input($_POST['shoe']);
                            $age = test_input($_POST['age']);
                            $gender = test_input($_POST['gender']);
                            $gender = strtoupper($gender);
                            $bio = test_input($_POST['bio']);
                            $hip = test_input($_POST['hip']);
                            $chest = test_input($_POST['chest']);
                            $shoulder = test_input($_POST['shoulder']);
                            $bank = test_input($_POST['bank']);
                            $bank = strtoupper($bank);
                            $accname = test_input($_POST['accname']);
                            $accname = strtoupper($accname);
                            $accnumber = test_input($_POST['accnumber']);
                            //index();
                            $query = " INSERT into  registration(fullname,username,password,email,phonenumber,age,gender,bio,model,country,state,
                                    bankname,accountname,accountnumber,status,height,waist,shoe,hip,chest,shoulder,contestname)
                                    VALUES
                                    ('$fullname','$username','$password','$email','$phonenumber','$age','$gender','$bio','$model','$country','$state','$bank','$accname','$accnumber',
                                    'not confirm','$height','$waist','$shoe','$hip','$chest','$shoulder','no'
                                    )";
                            $k = mysql_query($query);
                            if ($k) {
                                //email activation
                                $headers = "From:okomemmanuel1@gmail.com" . "\r\n";
                                $subject = 'Signup | Verification';
                                $message = "
												<p>Thanks for signing up!
												Your account has been created, 
												</p>
												Please click this link to activate your account:http://faangs.com/verify.php?user=$username";
                                $mail->sendmail("$email", "$message", "$subject");
                                $nam = "<H4>AN ACTIVATION LINK HAS BEEN SENT TO YOUR EMAIL</H4>";
                                echo "<div class=\"alert alert-success\">";
                                echo "	<strong>";
                                echo "{$nam}";
                                echo "	</strong>";
                                echo "</div>";
                                unset($_SESSION['password']);
                                unset($_SESSION['fullname']);
                                unset($_SESSION['usname']);
                                unset($_SESSION['email']);
                                unset($_SESSION['phonenumber']);
                                unset($_SESSION['gender']);
                                unset($_SESSION['height']);
                                unset($_SESSION['waist']);
                                unset($_SESSION['shoe']);
                                unset($_SESSION['age']);
                                unset($_SESSION['bio']);
                                unset($_SESSION['hip']);
                                unset($_SESSION['chest']);
                                unset($_SESSION['shoulder']);
                                unset($_SESSION['bank']);
                                unset($_SESSION['accname']);
                                unset($_SESSION['accnumber']);

                                header('Refresh:3; url=login.php');
                            } else {
                                $nam = "your form submission was not successful.Try again";
                                echo "<div class=\"alert alert-danger\">";
                                echo "	<strong>";
                                echo "{$nam}";
                                echo "	</strong>";
                                echo "</div>";
                                header('Refresh:3; url=registration.php');
                            }
                        }
                    }
                    ?>					
                    <form class="form-horizontal" role="form" method="post" action="" id="form1">
                        <div style="background:white;margin-bottom:5px;">
                        </div>
                        <fieldset>
                            <legend>personal data</legend>
                            <div class="form-group">
                                <div class="col-md-5 input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-lock"></span>
                                    </span>
                                    <?php
                                    if (isset($_SESSION["password"])) {
                                        $password = $_SESSION["password"];
                                    } else {
                                        $password = "";
                                    }
                                    echo"<input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\" placeholder=\"enter password\"  value=\"$password\" required/>";
                                    ?>
                                    <span id="palert"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-5 input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user"></span>
                                    </span>
                                    <?php
                                    if (isset($_SESSION["fullname"])) {
                                        $nam = $_SESSION["fullname"];
                                    } else {
                                        $nam = "";
                                    }
                                    echo"	<input type=\"text\" placeholder=\"enter your fullname\" class=\"form-control\" name=\"fullname\" value=\"$nam\" required/>";
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-5 input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user"></span>
                                    </span>
                                    <?php
                                    if (isset($_SESSION["usname"])) {
                                        $usnam = $_SESSION["usname"];
                                    } else {
                                        $usnam = "";
                                    }
                                    echo"	<input type=\"text\" placeholder=\"enter your username\" class=\"form-control\" name=\"username\" value=\"$usnam\" required/>";
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-5 input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-phone"></span>
                                    </span>
                                    <?php
                                    if (isset($_SESSION["phonenumber"])) {
                                        $phoneno = $_SESSION["phonenumber"];
                                    } else {
                                        $phoneno = "";
                                    }
                                    echo" <input type=\"text\" class=\"form-control text_field\" id=\"pno\" name=\"phonenumber\" placeholder=\"Enter phone number\" value=\"$phoneno\" required/>";
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-5 input-group">
                                    <select class="form-control text_field" id="country" name="country" onchange="pop(this.value)">
                                        <OPTION>SELECT YOUR COUNTRY</OPTION>
                                        <?PHP
                                        $country = "select * from countries";
                                        $rcount = mysql_query($country);
                                        while ($r = mysql_fetch_array($rcount)) {
                                            echo "<option value=\"{$r['name']}\">{$r['name']}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-5 input-group">
                                    <select class="form-control text_field" id="state" name="state">
                                        <option>select your state</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-5 input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-time"></span>
                                    </span>
                                    <?php
                                    if (isset($_SESSION["age"])) {
                                        $age = $_SESSION["age"];
                                    } else {
                                        $age = "";
                                    }
                                    echo"  <input type=\"text\" class=\"form-control\" id=\"age\" name=\"age\" placeholder=\"Enter your age\" value=\"$age\" required/>";
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-5 input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-envelope"></span>
                                    </span>
                                    <?php
                                    if (isset($_SESSION["email"])) {
                                        $email = $_SESSION["email"];
                                    } else {
                                        $email = "";
                                    }echo"<input type=\"email\" placeholder=\"Enter email address\" class=\"form-control\" name=\"email\"  value=\"$email\" required/>";
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?php
                                if (isset($_SESSION["gender"]) and $_SESSION["gender"] == 'Male') {
                                    echo "<label class=\"radio-inline\">";
                                    echo " <input type=\"radio\" name=\"gender\" id=\"gender\" value=\"Male\" checked>Male</label>";
                                    echo "<label class=\"radio-inline\">";
                                    echo "<input type=\"radio\" name=\"gender\" id=\"gender2\" value=\"Female\">Female</label>";
                                } ELSE {
                                    echo "<label class=\"radio-inline\">";
                                    echo " <input type=\"radio\" name=\"gender\" id=\"gender\" value=\"Male\">Male</label>";
                                    echo "<label class=\"radio-inline\">";
                                    echo "<input type=\"radio\" name=\"gender\" id=\"gender2\" value=\"Female\" checked>Female</label>";
                                }
                                ?>
                            </div>
                            <div class="form-group">
                                <div class="col-md-5 input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </span>
                                    <?php
                                    if (isset($_SESSION["bio"])) {
                                        $bio = $_SESSION["bio"];
                                        echo "				<textarea name=\"bio\">$bio</textarea>";
                                    } else {
                                        $bio = "";
                                        echo"	<textarea placeholder=\"Enter brief description about yourself\" class=\"form-control\" name=\"bio\" value=\"\" required ></textarea>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </fieldset>	
                        <fieldset>
                            <legend>model info</legend>
                            <div class="form-group">
                                `	
                                <label class="radio-inline">
                                    <?php
                                    if (isset($_SESSION["model"]) and $_SESSION["model"] == 'YES') {
                                        echo "  <input type=\"radio\" name=\"model\" id=\"model\" value=\"YES\" onClick=\"chk()\" checked>Model</label>
										<label class=\"radio-inline\">";
                                        echo "<input type=\"radio\" name=\"model\" id=\"model2\" value=\"NO\" onClick=\"chk()\">Not Model</label>";
                                    } else {
                                        echo "  <input type=\"radio\" name=\"model\" id=\"model\" value=\"YES\" onClick=\"chk()\">Model</label>
										<label class=\"radio-inline\">";
                                        echo "<input type=\"radio\" name=\"model\" id=\"model2\" value=\"NO\" onClick=\"chk()\" checked>Not Model</label>";
                                    }
                                    ?>
                            </div>
                            <div id="tes">
                                <div class="form-group">
                                    <div class="col-md-5">
                                        <?php
                                        if (isset($_SESSION["height"])) {
                                            $height = $_SESSION["height"];
                                        } else {
                                            $height = "";
                                        }echo"  <input type=\"number\" class=\"form-control\" id=\"height\" name=\"height\" placeholder=\"Enter your height\" value=\"$height\">";
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-5">
                                        <?php
                                        if (isset($_SESSION["waist"])) {
                                            $waist = $_SESSION["waist"];
                                        } else {
                                            $waist = "";
                                        } echo"  <input type=\"number\" class=\"form-control\" id=\"waist\" name=\"waist\" placeholder=\"Enter your waist size\" value=\"$waist\">";
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-5">
                                        <?php
                                        if (isset($_SESSION["shoe"])) {
                                            $shoe = $_SESSION["shoe"];
                                        } else {
                                            $shoe = "";
                                        } echo"  <input type=\"number\" class=\"form-control\" id=\"shoe\" name=\"shoe\" placeholder=\"Enter your shoe size\" value=\"$shoe\">";
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-5">
                                        <?php
                                        if (isset($_SESSION["hip"])) {
                                            $hip = $_SESSION["hip"];
                                        } else {
                                            $hip = "";
                                        }echo"  <input type=\"number\" class=\"form-control\" id=\"hip\" name=\"hip\" placeholder=\"Enter your hip size\" value=\"$hip\">";
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-5">
                                        <?php
                                        if (isset($_SESSION["chest"])) {
                                            $chest = $_SESSION["chest"];
                                        } else {
                                            $chest = "";
                                        }echo"<input type=\"number\" class=\"form-control\" id=\"chest\" name=\"chest\" placeholder=\"Enter your  chest\" value=\"$chest\">";
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-5">
                                        <?php
                                        if (isset($_SESSION["shoulder"])) {
                                            $shoulder = $_SESSION["shoulder"];
                                        } else {
                                            $shoulder = "";
                                        }echo" <input type=\"number\" class=\"form-control\" id=\"shoulder\" name=\"shoulder\" placeholder=\"Enter your shoulder size\"value=\"$shoulder\" >";
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                            </div>
                        </fieldset>	
                        <fieldset id="third">
                            <legend>Account information</legend>
                            <div class="form-group">
                                <div class="col-md-5 input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user"></span>
                                    </span>
                                    <?php
                                    if (isset($_SESSION["bank"])) {
                                        $bank = $_SESSION["bank"];
                                    } else {
                                        $bank = "";
                                    }echo" <input type=\"text\" class=\"form-control\" id=\"bank\" name=\"bank\" placeholder=\"Enter your Bank name\" value=\"$bank\" required/>";
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-5 input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-inbox"></span>
                                    </span>
                                    <?php
                                    if (isset($_SESSION["accname"])) {
                                        $accname = $_SESSION["accname"];
                                    } else {
                                        $accname = "";
                                    }echo" <input type=\"text\" class=\"form-control\" id=\"accname\" name=\"accname\" placeholder=\"Enter your account name\"  value=\"$accname\" required/>";
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-5 input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-usd"></span>
                                    </span>
                                    <?php
                                    if (isset($_SESSION["accnumber"])) {
                                        $accnumber = $_SESSION["accnumber"];
                                    } else {
                                        $accnumber = "";
                                    }echo" <input type=\"text\" class=\"form-control\" id=\"accno\" name=\"accnumber\" placeholder=\"Enter your account number\"  value=\"$accnumber\" required/>";
                                    ?>
                                </div>
                            </div>


                        </fieldset>	
                        <div class="form-group">
                            <legend id="msg"></legend>
                            <?php echo"<input type=\"submit\" name=\"submit\" class=\" btn btn-default col-md-offset-2\"  value=\"Submit\" onClick=\"return valid();\"/>"; ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--FOOTER-->
        <footer>
            <?php
            include("incl/footer.php");
            ob_end_flush();
            ?>
        </footer>
        <script type ="text/javascript" src="css/form.js"></script>
    </body>
</html>