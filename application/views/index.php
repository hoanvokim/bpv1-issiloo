<?php
/**
 * Created by IntelliJ IDEA.
 * User: hvo
 * Date: 22.08.18
 * Time: 16:44
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,600,700">

    <!-- Title -->
    <title>ISSILOO | Homepage</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url(); ?>webresources/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="<?php echo base_url(); ?>webresources/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="<?php echo base_url(); ?>webresources/css/responsive.css" rel="stylesheet">

    <!-- Multi-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>webresources/plugin/multi-level-sidebar/demo/demo.css">

</head>

<body>
<!-- Preloader Start -->
<div id="preloader">
    <div class="colorlib-load"></div>
</div>

<!-- ***** Header Area Start ***** -->
<header class="header_area animated">
    <div class="container-fluid">
        <div class="row align-items-center">
            <!-- Menu Area Start -->
            <div class="col-12 col-lg-10">

                <div class="menu_area">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <!-- Logo -->
                        <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>webresources/img/core-img/logo-line-white.png" alt="" width="60%"></a>
                        <button class="navbar-toggler toggle" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Menu Area -->
                        <div class="collapse navbar-collapse" id="ca-navbar">
                            <ul class="navbar-nav ml-auto" id="nav">
                                <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                                <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                                <li class="nav-item"><a class="nav-link" href="#screenshot">Screenshot</a></li>
                                <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
                                <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                                <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>


                <div class="wrapper cf">

                    <nav id="main-nav">

                        <ul class="first-nav">
                            <li class="cryptocurrency">
                                <a href="https://www.google.com/search?q=Crypto" target="_blank">Cryptocurrency</a>
                                <ul>
                                    <li><a href="#">Bitcoin</a></li>
                                    <li><a href="#">Ethereum</a></li>
                                    <li><a href="#">NEO</a></li>
                                    <li><a href="#">ZCash</a></li>
                                    <li><a href="#">Dogecoin</a></li>
                                </ul>
                            </li>
                        </ul>


                    </nav>

                </div>

            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Wellcome Area Start ***** -->
<section class="wellcome_area clearfix" id="home">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md">
                <div class="wellcome-heading">
                    <h2>ISSILOO</h2>
                    <h3>ISSILOO</h3>
                    <p>Chắp cánh ước mơ Du Học.</p>
                </div>
                <div class="get-start-area">
                    <!-- Form Start -->
                    <form action="#" method="post" class="form-inline">
                        <input type="email" class="form-control email" placeholder="Email của bạn...">
                        <input type="submit" class="submit" value="Đăng ký ngay">
                    </form>
                    <!-- Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Welcome thumb -->
    <div class="welcome-thumb wow fadeInDown" data-wow-delay="0.5s">
        <img src="<?php echo base_url(); ?>webresources/img/bg-img/welcome-img.png" alt="">
    </div>
</section>
<!-- ***** Wellcome Area End ***** -->

<!-- ***** Our Team Area Start ***** -->
<section class="our-Team-area bg-white section_padding_100_50 clearfix mt-50" id="team">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                <div class="single-team-member">
                    <div class="member-image">
                        <img src="<?php echo base_url(); ?>webresources/img/core-img/DU-HOC-HAN-QUOC.jpg" alt="">
                        <div class="team-hover-effects">
                            <div class="team-social-icon">
                                <a href="#">Xem ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                <div class="single-team-member">
                    <div class="member-image">
                        <img src="<?php echo base_url(); ?>webresources/img/core-img/DAO-TAO-HAN-NGU.jpg" alt="">
                        <div class="team-hover-effects">
                            <div class="team-social-icon">
                                <a href="#">Xem ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Our Team Area End ***** -->

<!-- ***** Cool Facts Area Start ***** -->
<section class="cool_facts_area clearfix section_padding_100_50">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <!-- Heading Text  -->
                <div class="cool_facts_area-heading">
                    <h2>NHỮNG GIÁ TRỊ CHẤT LƯỢNG MÀ CHÚNG TÔI MANG LẠI</h2>
                    <div class="line-shape"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row cool_facts_area-content">
            <!-- Single Cool Fact-->
            <div class="col-12 col-md-3 col-lg-3">
                <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="counter-area">
                    </div>
                    <div class="cool-facts-content">
                        <i class="ion-arrow-down-a"></i>
                        <p>100% <br> Học viên đậu visa</p>
                    </div>
                </div>
            </div>
            <!-- Single Cool Fact-->
            <div class="col-12 col-md-3 col-lg-3">
                <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                    <div class="counter-area">
                    </div>
                    <div class="cool-facts-content">
                        <i class="ion-happy-outline"></i>
                        <p>TOP 10 <br> Trung tâm uy tín</p>
                    </div>
                </div>
            </div>
            <!-- Single Cool Fact-->
            <div class="col-12 col-md-3 col-lg-3">
                <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.6s">
                    <div class="counter-area">
                    </div>
                    <div class="cool-facts-content">
                        <i class="ion-person"></i>
                        <p>Chi phí <br>thấp nhất</p>
                    </div>
                </div>
            </div>
            <!-- Single Cool Fact-->
            <div class="col-12 col-md-3 col-lg-3">
                <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.8s">
                    <div class="counter-area">
                    </div>
                    <div class="cool-facts-content">
                        <i class="ion-ios-star-outline"></i>
                        <p>Hồ sơ <br>nhanh chóng</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Cool Facts Area End ***** -->

<!-- ***** News Area Start ***** -->
<section class="news_area clearfix section_padding_100_50">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <!-- Heading Text  -->
                <div class="news_area-heading">
                    <h2>Thông tin du học</h2>
                    <div class="line-shape"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row cool_facts_area-content mt-30">
            <!-- Single Cool Fact-->
            <div class="col-12 col-md-6 col-lg-6">
                <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="news-content">
                        <a href="http://localhost/bpv1-issiloo/news/ky-thi-topik-61"> <img src="http://localhost/bpv1-issiloo/assets/news/Hq3.png"></a>
                        <div class="text-des-container-news">
                            <h6>THÔNG BÁO VỀ KỲ THI TOPIK 61</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Cool Fact-->
            <div class="col-12 col-md-3 col-lg-3">
                <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                    <div class="news-content">
                        <a href="http://localhost/bpv1-issiloo/news/ky-thi-topik-61"> <img src="http://localhost/bpv1-issiloo/assets/news/Hq3.png"></a>
                        <div class="text-des-container-news">
                            <h6>THÔNG BÁO VỀ KỲ THI TOPIK 61</h6>
                        </div>
                    </div>
                    <div class="news-content">
                        <a href="http://localhost/bpv1-issiloo/news/ky-thi-topik-61"> <img src="http://localhost/bpv1-issiloo/assets/news/Hq3.png"></a>
                        <div class="text-des-container-news">
                            <h6>THÔNG BÁO VỀ KỲ THI TOPIK 61</h6>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Cool Fact-->
            <div class="col-12 col-md-3 col-lg-3">
                <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                    <div class="news-content">
                        <a href="http://localhost/bpv1-issiloo/news/ky-thi-topik-61"> <img src="http://localhost/bpv1-issiloo/assets/news/Hq3.png"></a>
                        <div class="text-des-container-news">
                            <h6>THÔNG BÁO VỀ KỲ THI TOPIK 61</h6>
                        </div>
                    </div>
                    <div class="news-content">
                        <a href="http://localhost/bpv1-issiloo/news/ky-thi-topik-61"> <img src="http://localhost/bpv1-issiloo/assets/news/Hq3.png"></a>
                        <div class="text-des-container-news">
                            <h6>THÔNG BÁO VỀ KỲ THI TOPIK 61</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ***** NEWS Area End ***** -->


<!-- ***** App Screenshots Area Start ***** -->
<section class="app-screenshots-area bg-white section_padding_0_100 clearfix" id="screenshot">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <!-- Heading Text  -->
                <div class="section-heading">
                    <h2>App Screenshots</h2>
                    <div class="line-shape"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- App Screenshots Slides  -->
                <div class="app_screenshots_slides owl-carousel">
                    <div class="single-shot">
                        <img src="<?php echo base_url(); ?>webresources/img/scr-img/app-1.jpg" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="<?php echo base_url(); ?>webresources/img/scr-img/app-2.jpg" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="<?php echo base_url(); ?>webresources/img/scr-img/app-3.jpg" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="<?php echo base_url(); ?>webresources/img/scr-img/app-4.jpg" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="<?php echo base_url(); ?>webresources/img/scr-img/app-5.jpg" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="<?php echo base_url(); ?>webresources/img/scr-img/app-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** App Screenshots Area End *****====== -->

<!-- ***** CTA Area Start ***** -->
<section class="our-monthly-membership section_padding_50 clearfix">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="membership-description">
                    <h2>Join our Monthly Membership</h2>
                    <p>Find the perfect plan for you — 100% satisfaction guaranteed.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="get-started-button wow bounceInDown" data-wow-delay="0.5s">
                    <a href="#">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** CTA Area End ***** -->

<!-- ***** Footer Area Start ***** -->
<footer class="footer-social-icon text-center section_padding_70 clearfix">
    <!-- footer logo -->
    <div class="footer-text">
        <h2>Ca.</h2>
    </div>
    <!-- social icon-->
    <div class="footer-social-icon">
        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#"><i class="active fa fa-twitter" aria-hidden="true"></i></a>
        <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
    </div>
    <div class="footer-menu">
        <nav>
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Terms &amp; Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>
    <!-- Foooter Text-->
    <div class="copyright-text">
        <p>Copyright ©2018 ISSILOO KOREAN CENTER Designed by <a href="https://colorlib.com" target="_blank">BEU Dev.</a></p>
    </div>
</footer>
<!-- ***** Footer Area Start ***** -->

<!-- Jquery-2.2.4 JS -->
<script src="<?php echo base_url(); ?>webresources/js/jquery-2.2.4.min.js"></script>

<!-- Popper js -->
<script src="<?php echo base_url(); ?>webresources/js/popper.min.js"></script>
<!-- Bootstrap-4 Beta JS -->
<script src="<?php echo base_url(); ?>webresources/plugin/bootstrap/js/bootstrap.js"></script>
<!-- Multilevel-Menu JS -->
<script src="<?php echo base_url(); ?>webresources/plugin/multi-level-sidebar/src/js/hc-offcanvas-nav.js"></script>
<!-- All Plugins JS -->
<script src="<?php echo base_url(); ?>webresources/js/plugins.js"></script>
<!-- Slick Slider Js-->
<script src="<?php echo base_url(); ?>webresources/js/slick.min.js"></script>
<!-- Footer Reveal JS -->
<script src="<?php echo base_url(); ?>webresources/js/footer-reveal.min.js"></script>
<!-- Active JS -->
<script src="<?php echo base_url(); ?>webresources/js/active.js"></script>
<!-- Custom JS -->
<script src="<?php echo base_url(); ?>webresources/js/custom.js"></script>
</body>

</html>

