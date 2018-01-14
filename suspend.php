<?php
require_once("incl/cons.php");
require_once("incl/function.php");
cont();
session_start();
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
        <div class="container-fluild">
<?php
if (isset($_POST["submit"])) {

    $title = test_input($_POST['title']);
    $title = strtoupper($title);
    $description = test_input($_POST['description']);
    $description = strtolower($description);
    $user = $_SESSION['username'];
    $email = $_SESSION['email'];
    $header = "From " . $email;
    $admin_email = 'support@faangs.com';
    $dat = date("Y/m/d");
    $query = " INSERT into  msg(sender,title,message,date,rec,state)values('$user','$title','$description','$dat','admin','0')";
    $k = mysql_query($query);
    if ($k) {
        mail($admin_email, $description, $title, $header);
        $nam = "your account will soon be unblocked";
        echo "<div class=\"alert alert-success\">";
        echo "	<strong>";
        echo "{$nam}";
        echo "	</strong>";
        echo "</div>";
        unset($_SESSION['username']);
        header('Refresh:3; url=index.php');
    } else {
        $nam = "review your information";
        echo "<div class=\"alert alert-danger\">";
        echo "	<strong>";
        echo "{$nam}";
        echo "	</strong>";
        echo "</div>";
        header('Refresh:3; url=index.php');
    }
}
?>

        </div>
        <div class="row">
            <div class="col-md-12" style="background:#f0efef;">
            <?php
            $nam = "you account have been suspended.contact support";
            echo "<div class=\"alert alert-danger\" style=\"text-align:center\";>";
            echo "	<strong>";
            echo "{$nam}";
            echo "	</strong>";
            echo "</div>";
            ?>
                <div class="col-md-5 col-md-offset-4" style="margin-top:20px;">
                    <form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data"/>				
                    <div class="form-group">
                        <!--<label class="control-label col-md-2" for="title">Title:</label>-->
                        <div class="col-md-5 col-md-offset-2">
                            <input type="text" class="form-control" id="title"  name="title" placeholder="message title" required>
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-md-5 col-md-offset-2">
                            <textarea class="form-control" id="description" name="description" placeholder="message content" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">






                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
<?php
echo" <button type=\"submit\" class=\"btn btn-default\" name=\"submit\">SEND</button>";
?>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div>
                <!--FOOTER-->
                <footer>
                                <?php
                                include("incl/footer.php");
                                ?>
                </footer>
            </div>	
    </body>
</html>