<!doctype html>
<html  lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>24News - News Agency Bootstrap & Html5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="icon" href="/assets/images/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">

    <!-- Animate Css -->
    <link rel="stylesheet" href="/assets/css/animate.css">

    <!-- Owl Slider -->
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">

    <!-- Magnific PopUp -->
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">

    <!-- Custom Style -->
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">

</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div id="spinner"></div>
    </div>
    <!-- End Preloader -->

    <!-- Logo Area -->
    <section class="logo-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo">
                        <a href="/"><img src="/assets/images/logo.png" alt="" class="img-fluid"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Logo Area -->

    <!-- Menu Area -->
    <section class="menu-area sticky-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="main-menu">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href="/">Home</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="clock text-right">
                        <span id="dg-clock" class="shadow-lg"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Menu Area -->

    <!-- Mobile Menu -->
    <section class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <a href="/"><img src="/assets/images/f-logo.png" alt=""></a>
                            <ul class="list-unstyled">
                                <li><a href="/">Home</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Mobile Menu -->

    <!-- International & Lifestyle -->
    <?php 
        require_once ('resources/views/mainpage.php')
    ?>
    <!-- End International & Lifestyle -->

    <!-- Footer Area -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="f-about">
                        <img src="/assets/images/f-logo.png" alt="">
                        <p>We are a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <ul class="list-unstyled f-contact">
                            <li><i class="fa fa-map-marker"></i>197  Maple Court, Missouri, NY, USA</li>
                            <li><i class="fa fa-envelope"></i>example@domain.com</li>
                            <li><i class="fa fa-phone"></i>+1 123 654 9874</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="f-service">
                        <div class="sec-title">
                            <h5>Quick Link</h5>
                        </div>
                        <ul class="list-unstyled service-list">
                            <li><a href="#"><i class="fa fa-angle-right"></i>About Us</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Contact Us</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Write Us</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Advertisement</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Faq</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Terms & Conditions</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="f-post">
                        <div class="sec-title">
                            <h5>Latest Post</h5>
                        </div>
                        <div class="post-box d-flex">
                            <div class="post-img">
                                <a href="#"><img src="/assets/images/post1.jpg" alt=""></a>
                            </div>
                            <div class="post-con">
                                <p><a href="#">There are many variations available</a></p>
                                <span>March 21,2021</span>
                            </div>
                        </div>
                        <div class="post-box d-flex">
                            <div class="post-img">
                                <a href="#"><img src="/assets/images/post2.jpg" alt=""></a>
                            </div>
                            <div class="post-con">
                                <p><a href="#">There are many variations available</a></p>
                                <span>March 21,2021</span>
                            </div>
                        </div>
                        <div class="post-box d-flex">
                            <div class="post-img">
                                <a href="#"><img src="/assets/images/post3.jpg" alt=""></a>
                            </div>
                            <div class="post-con">
                                <p><a href="#">There are many variations available</a></p>
                                <span>March 21,2021</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="f-newsltr">
                        <div class="sec-title">
                            <h5>Newsletter</h5>
                        </div>
                        <form class="news-letter" action="#">
                            <input type="text" name="name" value="" placeholder="Your name">
                            <input type="text" name="email" value="" placeholder="Your email address">
                            <button type="button" name="button">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="f-menu d-flex justify-content-between">
                        <a href="#">Apps</a>
                        <a href="#">About Us</a>
                        <a href="#">Contact</a>
                        <a href="#">Archives</a>
                        <a href="#">Terms & Condition</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Advertisement</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <section class="footer-btm">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2021 24News All Rights Reserved.<i class="fa fa-heart"></i> With <a href="#" >24News</a>.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ftb-menu text-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href="#">Technology</a></li>
                            <li class="list-inline-item"><a href="#">Business</a></li>
                            <li class="list-inline-item"><a href="#">Food</a></li>
                            <li class="list-inline-item"><a href="#">Health</a></li>
                            <li class="list-inline-item"><a href="#">Lifestyle</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="back-to-top text-center">
            <a data-scroll href="#top"><i class="fa fa-long-arrow-up"></i></a>
        </div>
    </section>
    <!-- End Footer Area -->




    <!-- =========================================
        JavaScript Files
        ========================================== -->

    <!-- jQuery JS -->
    <script src="/assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

    <!-- Owl Slider -->
    <script src="/assets/js/owl.carousel.min.js"></script>

    <!-- News Ticker -->
    <script src="/assets/js/jquery.newsticker.min.js"></script>

    <!-- Magnific PopUp -->
    <script src="/assets/js/magnific-popup.min.js"></script>

    <!-- Smooth Scroll -->
    <script src="/assets/js/smooth-scroll.js"></script>

    <!-- Mean Menu -->
    <script src="/assets/js/jquery.meanmenu.min.js"></script>

    <!-- Wow Animation -->
    <script src="/assets/js/wow.min.js"></script>

    <!-- Custom JS -->
    <script src="/assets/js/plugins.js"></script>
    <script src="/assets/js/custom.js"></script>
    <script src="/resources/js/app.js"></script>

</body>

</html>