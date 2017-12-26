<?php
$host = "127.0.0.1";
$Username = "root";
$Password = "PASSWORD";
$db="testdb";

// Create connection
mysql_connect($host, $Username, $Password);
mysql_select_db($db);

if(isset($_POST['Username'])){
$uname=$_POST['Username'];
$password=$_POST['password'];

$sql="select * from login where UserName ='".$uname."'AND Password='".$password."' limit 1";

$result=mysql_query($sql);

if(mysql_num_rows($result)==1){
    header("Location: ../index.php"); 
    $msg='You have successfully logged in';
    exit();
}
else{
    $msg='You have not successfully logged in';
    echo"You have entered incorrect username or password";
    exit();
}

}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Artsman-Luxury Resort</title>
    <link href="css/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/waypoints.css">
<script src="js/jquery.waypoints.min.js"type="text/javascript"></script>
<script src="js/waypoints.js"type="text/javascript"></script>

</head>

<body>
    <header>
        <div id="header-inner">
            <a href="index.php" id="logo"></a>
            <nav>
                <a href="#" id="menu-icon"></a>
                <ul>
                <li>
                <a href="../index.php" class="current">HOME</a>
            </li>
            <li>
                <a href="About.php">ABOUT</a>
            </li>
            <li>
                <a href="Facilities.php">FACILITIES</a>
            </li>
            <li>
                <a href="Pricing.php">PRICING</a>
            </li>
       <!--    <li>../views/
                <a href="#">CONTACT</a>
            </li>-->
            <li>
                <a href="SignIn.php">SIGN IN</a>
            </li>
                </ul>

            </nav>

        </div>

    </header>
    <div class="clearfix"></div><br><br>
    <h5 id="header5">Already a member? Sign In to avail your rewards!</h5>
    <form  action="#" method="post">
     <div  id ="formcss">
    

    
     
<label class="ff2">Username</label> <input type="text" name="Username" value="Ramya" class="ff1"><br>
<label class="ff2">Password</label> <input type="password" name="password" value="passit"class="ff1"><br>
<input type="Submit" value="Sign In"class="sub">
</div>
</form>
<!--<footer>
        <div id="footer-inner">
            <section class="one-third" id="footer-third">
                <h3>CONTACT</h3>
                <p class="footercontact">The Artsman-Luxury Resort
                    <br>
                    <b class="phone">555-525-5005</b>
                    <br>
                    <br> 500 Washington Road    
                    <br> Seattle, WA 98101
                    <br>
                </p>
            </section>
            <section class="one-third" id="footer-third">
                <h3>Social</h3>
                <br>
                <ul class="social">
                    <li>
                        <a href="https://www.facebook.com/w3newbie" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+DrewRyan_w3/posts" target="_blank">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com/DrewOnCue" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/user/drewoncue" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </section>
            <section class="one-third" id="footer-third-last">
                <h3>Pages</h3>
                <br>
                <h5>
                <a href="../index.php">Home</a> -
                <a href="About.php">About</a> -
                <a href="Facilities.php">Facilities</a> -
                <a href="Pricing.php">Pricing</a>
                </h5>
            </section>
        </div>

    </footer>-->

    <footer class="second" id="newer">
        <p>&copy; The Artsman-Luxury Resort, 2017.</p>
    </footer>
</body>