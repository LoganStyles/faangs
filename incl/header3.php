<style>
    li .mydropdown1{
        display:none;
    }
    li:hover ul{
        position:absolute;
        display:block;
        float:none;
        left:-2px;
        height:300em;
    }
</style>

<div class="w3-header-bottom">
    <div class="w3layouts-logo">
        <h1>
            <a href="index.php"><img class="img-responsive" src="images/logo.png"></a>
        </h1>
    </div>
    <div class="tops-nav">
        <!------------------------HEADER  IS FOR PARTICIPANT--------------->
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if (isset($_SESSION['username']) && ($_SESSION['status'] == 2)) {
                        $user = $_SESSION['username'];
                        $query1 = "select * from msg where rec='$user' and state=0 ";
                        $result1 = mysql_query($query1);

                        $a = mysql_num_rows($result1);

                        echo"		<li id=\"dropdown\">";
                        echo"			<a href=\"#\" class=\"\" onmouseover=\"myFunction1()\"><span class=\"glyphicon glyphicon-envelope\">$a</a>";
                        echo"			 <ul class=\"mydropdown1\">";
                        echo"			<li><a href=\"msg.php\" >Support</a></li>";
                        echo"				<li><a href=\"noti.php\" onmouseout=\"myFunction21()\">Inbox</a></li>";
                        echo" 		</ul>";
                        echo"      </li>";

                        echo "	<li><a href=\"contest.php?category=general\">Contestant</a></li>";

                        echo "	<li><a href=\"incl/outs.php\">Sign-Out</a></li>";
                    }
                    if (isset($_SESSION['username']) && ($_SESSION['status'] == 1)) {
                        //echo "	<li><a href=\"joincontest.php\">Join-Contest</a></li>";
                        echo "	<li><a href=\"contest.php?category=general\">Contestant</a></li>";
                        echo "	<li><a href=\"incl/outs.php\">Sign-Out</a></li>";
                    }
                    ?>	
                </ul>	
                <div class="clearfix"> </div>
            </div>	
        </nav>		
    </div>