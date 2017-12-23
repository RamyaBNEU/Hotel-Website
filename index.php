<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Artsman-Luxury Resort</title>
    <link href="css/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
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
                        <a href="index.php" class="current">HOME</a>
                    </li>
                    <li>
                        <a href="./views/About.php">ABOUT</a>
                    </li>
                    <li>
                        <a href="./views/Facilities.php">FACILITIES</a>
                    </li>
                    <li>
                        <a href="./views/Pricing.php">PRICING</a>
                    </li>
               <!--    <li>
                        <a href="#">CONTACT</a>
                    </li>-->
                    <li>
                        <a href="./views/SignIn.php">SIGN IN</a>
                    </li>
                </ul>

            </nav>

        </div>

    </header>
    <script src="js/jquery.bxslider.min.js"></script>
    <div class="slide-wrap">
        <section class="slider">
            <ul class="slider1">
            <li>
                    <img src="http://dreamatico.com/data_images/hotels/hotels-7.jpg">
                    <!--<img src="http://images.all-free-download.com/images/graphicthumb/gorgeous_hotel_room_picture_167661.jpg">-->
                </li>
            <li>
                    <img src="https://phgcdn.com/images/uploads/LADTC/corporatemasthead/talatona-convention-hotels.jpg">
                    <!--    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-Wh9rTK-W5CGJnOLd-jsurEEaqVDKTDTkigmCjAJFOtT-wp2c">-->
                        
                </li>
            
                <li>
                    <!--<img src="https://www.safarihotelsnamibia.com/wp-content/uploads/2014/11/Safari-Court-Hotel-Pool.jpg">-->
                    <img src="http://top10hotelbookingsites.webs.com/besthotelsites-1.jpg">
                  <!--  <img src="http://images.all-free-download.com/images/graphicthumb/ornate_hotel_lobby_picture_1_167663.jpg">-->
                </li>
                
                
               

            </ul>

        </section>

    </div>
    <script type="text/javascript">
        $('.slider1').bxSlider({
            mode: 'fade',
            captions: false,
            auto: true,
            pager: false,

        });
        $('.slider2').bxSlider({
            pager: false,
            captions: true,
            maxSlides: 3,
            minSlides: 1,
            slideWidth: 230,
            slideMargin: 10
        });
        $('.slider3').bxSlider({
            mode: 'fade',
            captions: false,
            auto: true,
            pager: false,
            controls: false,
        });
    </script>
    <div class="clearfix"></div>
    <div id="inner-wrapper">
        <!--Waypoints-->
       <section class="staggered-animation-container">
        <section class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay=".3s">
        
            <section class="one-third">
            <div class="circle">
                <td>
                    <i class="fa fa-users"></i>
                </td>

            </div>

            <h3>Grade A Staff</h3>
            <p>
                Please grade staff. Our staff try to provide best services and try that our guests have a pleasant stay.
            </p>

        </section>
    </section>
    <section class="os-animation" data-os-animation="fadeInDownBig" data-os-animation-delay=".3s">
    
        <section class="one-third">
            <div class="circle">
                <td>
                    <i class="fa fa-map-marker"></i>
                </td>

            </div>

            <h3>A Convenient Location</h3>
            <p>
                This hotel is located at a very convenient location within 10 minutes of the airport.
            </p>

        </section>
    </section>
        <section class="os-animation" data-os-animation="fadeInRightBig" data-os-animation-delay=".3s">
        
        <section class="one-third">
            <div class="circle">
                <td>
                    <i class="fa fa-check-square-o"></i>
                </td>

            </div>

            <h3>State of Art Facilities</h3>
            <p>
                Our hotel provides state of the art facilities with a swimming pool,gym,sauna and other facilities.
            </p>

        </section>
    </section>
        <div class="clearfix"></div>
        <section class="os-animation" data-os-animation="fadeInLeftBig" data-os-animation-delay=".3s">
        
        <article>
            <img src="https://ae01.alicdn.com/kf/HTB16EOvJFXXXXX6XVXXq6xXFXXXM/Vinilo-3x5ft-nueva-foto-del-estudio-tel-n-de-fondo-piscina-sala-de-descanso-caliente-venta.jpg" class="circle-image">

        </article>
    </section>
        <section class="os-animation" data-os-animation="fadeInRightBig" data-os-animation-delay=".3s">
        
        <aside>
            <h3>Our Facility</h3>
            <br>
            <ul class="gym">
                <li>
                    <h4>Unlimited wifi connection</h4>
                </li>
                <li>
                    <h4>Member music requests &amp; voting</h4>
                </li>
                <li>
                    <h4>Open 24 hours/7 days a week</h4>
                </li>
                <li>
                    <h4>cardio machine </h4>
                </li>

            </ul>

        </aside>
    </section>
        <div class="clearfix"></div>
        <section class="os-animation" data-os-animation="bounceInLeft" data-os-animation-delay=".3s">
        
        <section class="one-third">
            <h3>Swimming pool</h3>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9NtW62o5gDXcd6UdOermdQAMv-wAxpLVY8Y55ElyMB2oHTwhM">
            <p>A lovely pool located in a quiet and private location and available to guests from May to October and with a wide solarium with lounge chairs.</p>

        </section>
    </section>
        <section class="os-animation" data-os-animation="bounceInDown" data-os-animation-delay=".3s">
        
        <section class="one-third">
            <h3>Gym</h3>
            <img src="https://www.w3newbie.com/wp-content/uploads/gym-floor.jpg">
            <p>GYM - machines for cardio workout, Fitness Classes and excellent 24/7 facilities </p>

        </section>
    </section>
        <section class="os-animation" data-os-animation="bounceInRight" data-os-animation-delay=".3s">
        
        <section class="one-third">
            <h3>SPA</h3>
            <img src="http://images.all-free-download.com/images/graphicthumb/zen_spa_sauna_513682.jpg">
            <p>SPA with sauna, bio sauna, Turkish bath, jetski, Whirlpool Jacuzzi, showers and tropical jet, steam</p>

        </section>
    </section>
    </div>
    <!----inner wrapper-->

    <div class="clearfix"></div>
    <section class="os-animation" data-os-animation="zoomInDown" data-os-animation-delay=".3s">
    
    <footer>
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
                    <a href="index.php">Home</a> -
                    <a href="./views/About.php">About</a> -
                    <a href="./views/Facilities.php">Facilities</a> -
                    <a href="./views/Pricing.php">Pricing</a> 
                    
                </h5>
            </section>
        </div>

    </footer>

    <footer class="second">
        <p>&copy; The Artsman-Luxury Resort, 2017.</p>
    </footer>
</section>
</section>
</body>

</html>