<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php

include "admin/connection.php";
if(isset($_POST['submit']))
{
    
   
   $name=$_POST['name'];
   $email=$_POST['email'];
   $phone=$_POST['mob'];
   $message=$_POST['message'];
    


    $sql="insert into contact (name,email,phone,message)
    values('$name','$email','$phone','$message')";
    mysqli_query($con,$sql); 
} 
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DEBUGGERS</title>

    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;700;900&display=swap"
        rel="stylesheet">
    <!-- //google-fonts -->

    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-liberty.css">

</head>

<body>

<!-- top header -->
<section class="w3l-top-header">
    <div class="container">
        <div class="top-content-w3ls d-flex align-items-center justify-content-between">
            <div class="top-headers">
                <ul>
                    <li>
                        <i class="fa fa-map-marker-alt"></i><a href="#address">Thrissur
                            City in Kerala</a>
                    </li>
                    <li>
                        <i class="fa fa-phone"></i><a href="tel:+1(21) 234 4567">+91 7356198289</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i><a href="mailto:mail@example.com">thedebuggers000@gmail.com</a>
                    </li>
                </ul>
            </div>
            <div class="top-headers top-headers-2">
                <ul>
                    <li>
                        <a href="#facebook"><span class="fab fa-facebook-f"></span></a>
                    </li>
                    <li>
                        <a href="#twitter"><span class="fab fa-twitter"></span></a>
                    </li>
                    <li>
                        <a href="#instagram"><span class="fab fa-instagram"></span></a>
                </li>
                <li class=" mr-0">
                        <a href="#linkedin"><span class="fab fa-linkedin-in"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- //top header -->

<!--header-->
<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg stroke">
            <h1>
                <a class="navbar-brand" href="index.php">
                    <span class="fa fa-lightbulb"></span> DEBUGGERS
                </a>
            </h1>
            <!-- if logo is image enable this   
            <a class="navbar-brand" href="#index.php">
                <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
            </a> -->
            <button class="navbar-toggler collapsed bg-gradient" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-lg-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>

                    <!--/search-right-->
                    <ul class="header-search">
                        <li class="nav-item search-right">
                            <a href="#search" class="btn search-btn btn-light" title="search"><span class="fas fa-search" aria-hidden="true"></span></a>
                            <!-- search popup -->
                            <div id="search" class="pop-overlay">
                                <div class="popup">
                                    <h3 class="title-w3l two mb-4 text-left">Search Here</h3>
                                    <form action="#" method="GET" class="search-box d-sm-flex position-relative">
                                        <input type="search" placeholder="Enter Keyword here" name="search" required="required" autofocus="">
                                        <button type="submit" class="btn btn-style btn-primary"> Search</button>
                                    </form>
                                </div>
                                <a class="close" href="#close">×</a>
                            </div>
                            <!-- /search popup -->
                        </li>
                    </ul>
                    <!--//search-right-->
                </ul>
            </div>

            <!-- toggle switch for light and dark theme -->
            <div class="cont-ser-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
</header>
<!--//header-->


<!-- about banner -->
<section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-4">
            <div class="banner-info-grid px-md-5">
                <h2 class="w3l-title-breadcrumb mb-3">Contact Us</h2>
                <p class="inner-page-para px-lg-5">Feel free to learn more about our team and company on this page. We are always happy to help you!</p>
            </div>
        </div>
    </div>
</section>
<!-- //about banner -->



<!-- contact -->
<section class="w3l-contacts-12">
    <div class="contact-top pt-5">
        <div class="container py-lg-4">
            <div class="d-grid cont-main-top mt-lg-5 mt-4">
                <!-- contact form -->
                <div class="contacts12-main">

                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="main-input">
                        <div class="top-inputs d-grid">
                            <input type="text" placeholder="Name" name="name" id="w3lName" required="">
                            <input type="email" name="email" placeholder="Email" id="w3lSender" required="">
                        </div>
                        <input type="text" placeholder="Phone Number" name="mob" id="w3lName" required="">
                        <textarea placeholder="Message" name="message" id="w3lMessage" required=""></textarea>
                        <div class="text-end">
                            <button type="submit" name="submit" class="btn btn-primary btn-style">Submit Now</button>
                        </div>
                    </form>
                   

                </div>
                <!-- //contact form -->
                <!-- contact address -->
                <div class="contact">
                    <div class="cont-subs">
                        <div class="cont-add">
                            <h4>Company Location:</h4>
                            <p class="contact-text-sub">  debuggers north railway station chittoor convent junction  682027
                            </p></p>
                        </div>
                        <div class="cont-add">
                            <h4>Email Address:</h4>
                            <a href="mailto:info@example.com">
                                <p class="contact-text-sub">thedebuggers000@gmail.com</p>
                            </a>
                        </div>
                        <div class="cont-add">
                            <h4>Phone Number:</h4>
                            <a href="tel:91 7356198289"><p class="contact-text-sub">+91 7356198289</p>
                            </a>
                        </div>
                        <div class="social-icons-con">
                            <h4 class="mb-3">Connect with us:</h4>
                            <a href="https://www.facebook.com/profile.php?id=100085336890504&mibextid=LQQJ4d"><span class="fab fa-facebook-square" aria-hidden="true"></span></a>
                            <a href="#twitter"><span class="fab fa-twitter-square" aria-hidden="true"></span></a>
                            <a href="https://instagram.com/_debuggers_?igshid=YzcxN2Q2NzY0OA=="><span class="fab fa-instagram" aria-hidden="true"></span></a>
                            <a href="#linkedin"><span class="fab fa-linkedin-in" aria-hidden="true"></span></a>
                        </div>
                    </div>
                </div>
                <!-- //contact address -->
            </div>
        </div>
        <!-- map -->
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158857.7281066703!2d-0.24168144921176335!3d51.5287718408761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2sin!4v1569921526194!5m2!1sen!2sin"
                frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <!-- //map -->
    </div>
</section>
<!-- //contact -->


<!-- footer block -->
<footer class="w3l-footer-29-main">
    <div class="footer-29 pt-5 pb-4">
        <div class="container pt-md-4">
            <div class="row footer-top-29">
                <div class="col-lg-4 col-md-6 footer-list-29">
                    <h6 class="footer-title-29">Contact Info </h6>
                    <p class="mb-2 pe-xl-5">Address : debuggers north railway station chittoor convent junction  682027
                    </p>
                    <p class="mb-2">Phone Number : <a href="tel:+91 7356198289">+91 7356198289</a></p>
                    <p class="mb-2">Email : <a href="mailto:thedebuggers000@gmail.com">thedebuggers@gmail.com</a></p>
                    <p class="mb-2">Support : <a href="mrhaxhax018@gmail.com">mrhaxhax018@gmail.com</a></p>
                </div>
                <div class="col-lg-2 col-md-3 col-6 footer-list-29 mt-md-0 mt-4">
                    <ul>
                        <h6 class="footer-title-29">Quick Links</h6>
                        <li><a href="about.php">About Company</a></li>
                        <li><a href="#blog">Blog Posts</a></li>
                        <li><a href="services.php">Our Services</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="#shortcodes">Shortcodes</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 col-6 ps-lg-5 ps-lg-4 footer-list-29 mt-md-0 mt-4">
                    <ul>
                        <h6 class="footer-title-29">Explore</h6>
                        <li><a href="#blog">Blog Posts</a></li>
                        <li><a href="#privacy">Privacy policy</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="#license">License & uses</a></li>
                        <li><a href="#blog">View Articles</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-list-29 mt-lg-0 mt-4 ps-lg-5">
                    <h6 class="footer-title-29">Subscribe</h6>
                    <form action="#" class="subscribe d-flex" method="post">
                        <input type="email" name="email" placeholder="Email Address" required="">
                        <button class="button-style"><span class="fa fa-paper-plane"
                                aria-hidden="true"></span></button>
                    </form>
                    <p class="mt-4">Subscribe to our mailing list and get updates to your email inbox.</p>
                </div>
            </div>
            <!-- copyright -->
            <p class="copy-footer-29 text-center mt-5 pb-2">© 2023 debuggers. All rights reserved. Design
               
            <!-- //copyright -->
        </div>
    </div>
</footer>
<!-- //footer block -->




<!-- Js scripts -->
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fas fa-level-up-alt" aria-hidden="true"></span>
</button>
<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<!-- //move top -->

<!-- common jquery plugin -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- //common jquery plugin -->

<!-- theme switch js (light and dark)-->
<script src="assets/js/theme-change.js"></script>
<!-- //theme switch js (light and dark)-->

<!--/stats-number-counter-->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
    $('.counter').countUp();

</script>
<!--//stats-number-counter-->

<!--/owlcarousel-->
<script src="assets/js/owl.carousel.js"></script>
<!-- //tesimonials-->
<script>
    $(document).ready(function() {
        $("#owl-demo1").owlCarousel({
            loop: true,
            nav: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                736: {
                    items: 1,
                    nav: false
                }
            }
        })
    })

</script>
<!-- //tesimonials-->

<!-- MENU-JS -->
<script>
    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
</script>
<!-- //MENU-JS -->

<!-- disable body scroll which navbar is in active -->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- //disable body scroll which navbar is in active -->

<!--bootstrap-->
<script src="assets/js/bootstrap.min.js"></script>
<!-- //bootstrap-->
<!-- //Js scripts -->

</body>

</html>