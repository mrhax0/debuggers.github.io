<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->

<?php 
include "admin/connection.php";
$sql="select * from team";
$exe= mysqli_query($con,$sql);

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
                            City in Kerala1</a>
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
                        <a href="https://instagram.com/_debuggers_?igshid=YzcxN2Q2NzY0OA=="><span class="fab fa-instagram"></span></a>
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
                    <span class="fa fa-lightbulb"></span>DEBUGGERS
                </a>
            </h1>
            <!-- if logo is image enable this   
            <a class="navbar-brand" href="#index.php">
                <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
            </a> -->
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
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
            <!-- search button -->

            <!-- //search button -->

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
                <h2 class="w3l-title-breadcrumb mb-3">About Us</h2>
                <p class="inner-page-para px-lg-5"> WE are  DEBUGGERS’’We've created a cyberspace in social media. cyber security awareness and precautions and good friendship. its our new startup.(Debuggers)</div>
        </div>
    </div>
</section>
<!-- //about banner -->




<!-- About Section -->
<section class="w3l-content-6" id="skills">
    <div class="content-6-mian py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="content-info-in row">
                <div class="content-gd col-lg-6 pe-lg-5">
                    <img src="cdc48071-8c7d-4497-815f-fecbd6028948.jpg" alt="" class="img-fluid" />
                </div>
                <div class="content-gd col-lg-6 mt-lg-0 mt-5 align-self ps-lg-5">
                    <h6 class="w3l-title-small mb-1">About Us</h6>
                    <h3 class="w3l-title-main mb-lg-4 mb-3">A Few words about us</h3>
                    <p class="my-4 pe-lg-5">My name is Arshid and I am Founder of “The Debuggers’’We've created a cyberspace in social media. cyber security awareness and precautions and good friendship. its our new startup.(The Debuggers).</p>
                    <h5 class="w3l-subtitle mb-md-5 mb-4">. We provide the best services for your
                        growing company</h5>
                    <div class="progress-info info1">
                        <h6 class="progress-tittle">Marketing <span class="">80%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%"
                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info3">
                        <h6 class="progress-tittle">awarness <span class="">100%</span>
                        </h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info4 mb-0">
                        <h6 class="progress-tittle">bug hunting <span class="">85%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 85%"
                                aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section -->


<section class="w3l-cwp py-5">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row cwp23-content align-items-center">

            <div class="col-lg-6">
                <h5 class="w3l-title-small mb-3"> Web design and digital marketing </h5>
                <h3 class="w3l-title-main"> IT Solution Strategy Development for you </h3>

                <div class="cwp23-text-cols mt-lg-5 mt-4">

                    <div class="column">
                        <span><span class="counter mb-0">1200</span>+</span>
                        <h4>Web Development</h4>
                        <p>We help our clients increase profits by increasing their visibility online.</p>
                    </div>

                    <div class="column">
                        <span><span class="counter mb-0">13</span>k+</span>
                        <h4>Web marketing </h4>
                        <p>We help our clients increase profits by increasing their visibility online. </p>
                    </div>

                </div>
            </div>

            <div class="col-lg-6 cwp23-text align-self mt-lg-0 mt-md-5 mt-4 pr-md-3 pr-2">
                <img src="assets/images/about3.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>


<!-- Team Section -->
<div class="team-area py-5" id="people">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="text-center">
            <h6 class="w3l-title-small"> Our People</h6>
            <h3 class="w3l-title-main"> Meet Our Team</h3>
        </div>

        <div class="row mt-lg-5 mt-4">

            <!-- <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="single-team">
                    <div class="img-area">
                        <img src="arshii.jpg" class="img-fluid" alt="">
                        <div class="social">
                            <ul class="list-inline">fab fa-instagram
                                <li><a href="https://instagram.com/arshhiyy?igshid=NTc4MTIwNjQ2YQ=="><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#url"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#url"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="img-text">
                        <h4>Arshid hax</h4>
                        <p>Founder and CEO</p>
                    </div>
                </div>
            </div> -->

            <?php 
            while($fetch=mysqli_fetch_assoc($exe)){
            ?>
            <div class="col-lg-3 col-sm-6 col-xs-12 mt-sm-0 mt-5">
                <div class="single-team">
                    <div class="img-area">
                        <img src="admin/images/<?php echo $fetch['photo']; ?>" class="img-fluid" alt="">
                        <div class="social">
                            <ul class="list-inline">
                                <li><a href="<?php echo $fetch['instagram']; ?>"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="<?php echo $fetch['linkedin']; ?>"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="<?php echo $fetch['twitter']; ?>"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="img-text">
                        <h4><?php echo $fetch['name']; ?></h4>
                        <p><?php echo $fetch['post']; ?></p>
                    </div>
                </div>
            </div>  <?php } ?>

            <!-- <div class="col-lg-3 col-sm-6 col-xs-12 mt-lg-0 mt-5">
                <div class="single-team">
                    <div class="img-area">
                        <img src="mrhero.jpg" class="img-fluid" alt="">
                        <div class="social">
                            <ul class="list-inline">
                                <li><a href="https://instagram.com/birla_.101?igshid=MmIzYWVlNDQ5Yg=="><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#url"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#url"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="img-text">
                        <h4>Mr Hero</h4>
                        <p></p>
                    </div>
                </div>
            </div> -->

            <!-- <div class="col-lg-3 col-sm-6 col-xs-12 mt-lg-0 mt-5">
                <div class="single-team">
                    <div class="img-area">
                        <img src="assets/images/team4.jpg" class="img-fluid" alt="">
                        <div class="social">
                            <ul class="list-inline">
                                <li><a href="#url"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#url"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#url"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="img-text">
                        <h4>Akhil</h4>
                        <p></p>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</div>
<!-- //Team Section -->


<section class="w3l-covers-14 py-5">
    <div class="container py-md-5 py-4">
        <div class="banner-play-w3 covers14-text text-center mx-auto" style="max-width:780px">
            <h3 class="w3l-title-main text-white">We Are Here To Manage
                your Quality IT-Consulting Services</h3>
            <div class="video-section mt-5 pt-lg-4">
                <!--//video-->
                <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center pl-3">
                    <span class="video-play-icon">
                        <span class="fa fa-play"></span>
                    </span>
                </a>
                <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                    <iframe src="https://player.vimeo.com/video/236931378" frameborder="0"
                        allow="autoplay; fullscreen" allowfullscreen></iframe>
                </div>
                <!--//video-->
            </div>
        </div>
    </div>
</section>


<!-- Company logos -->
<section class="company-logos ">
    <div class="container py-md-4">
        <div class="row py-5 justify-content-center">
            <div class="col-lg-2 col-md-3 col-4">
                <a href="#url">
                    <img src="assets/images/brand1.png" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-4">
                <a href="#url">
                    <img src="assets/images/brand2.png" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-4">
                <a href="#url">
                    <img src="assets/images/brand6.png" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-4 mt-md-0 mt-4">
                <a href="#url">
                    <img src="assets/images/brand3.png" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-4 mt-lg-0 mt-4">
                <a href="#url">
                    <img src="assets/images/brand4.png" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-4 mt-lg-0 mt-4">
                <a href="#url">
                    <img src="assets/images/brand5.png" alt="" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
</section>
<!-- //Company logos -->


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

<!-- magnific popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

        $('.popup-with-move-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-slide-bottom'
        });
    });
</script>
<!-- //magnific popup -->

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