<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Welcome to Ojfalana | impacts | initiatives </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="icon" href="../../OJ.svg" type="image/x-icon">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400&family=Smooch+Sans:wght@100;500;600;700&display=swap');
    </style>
    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/first-style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/second-style.css')}}">


    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">


    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/third-style.css')}}">

{{--    <link href="css/bootstrap.css" rel="stylesheet">--}}
    <link href="{{asset('css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('css/portfolio.css')}}" rel="stylesheet">
</head>
<body>
<!-- ? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/img/logo/loader-logo.svg" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top d-none d-lg-block">
                <div class="container-fluid">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left d-flex">
                                <ul>
                                    <li>Phone: +2347010609060</li>
                                    <li>Email: info@ojfalana.com</li>
                                </ul>
                                <div class="header-social">
                                    <ul>
                                        <li><a href="https://twitter.com/Ojfalana/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a  href="https://web.facebook.com/owolabi.falana" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.linkedin.com/in/owolabi-falana-mniia-18724147/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-1 col-lg-2 col-1">
                            <div class="logo">
                                <a href="/"><img src="{{asset('assets/img/logo/OJ Falana.svg')}}" width="" alt="" class="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="/">Profile</a></li>
{{--                                         3   <li><a href="/about">Profile</a></li>--}}
                                            <li><a href="/impacts">impacts</a></li>
                                            <li><a href="/initiatives">OJ Falana Initiatives </a></li>
                                            <li><a href="/press-releases">Press Releases</a></li>
                                            <li><a href="/contact">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<!-- header end -->
@yield('content')
<footer>
    <div class="footer-wrapper section-bg2" data-background="{{asset('assets/img/gallery/footer_bg.png')}}">
        <!-- Footer Top-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <div class="footer-tittle">
                                    <div class="footer-logo mb-20">
                                        <a href="/"><img src="{{asset('assets/img/logo/OJ Falana.svg')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li>
                                        <p>Address : 5, Folawewo street, off Allen Avenue, Ikeja, Lagos.</p>
                                    </li>
                                    <li>Phone: +2347010609060</li>
                                    <li>Email: info@ojfalana.com</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Important Link</h4>
                                <ul>
                                    <li><a href="/impacts">Impacts</a></li>
                                    <li><a href="/initiatives">OJ Falana Initiatives</a></li>
                                    <li><a href="/press-releases">Press Releases</a></li>
                                    <li><a href="/contact">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Social media</h4>
                                <!-- Form -->
                                <div class="footer-form mt-0" >
                                        <div class="d-flex">
                                            <div class="mx-10 mr-20"><a href="https://twitter.com/Ojfalana/" target="_blank"><i class="fab fa-twitter"></i></a></div>
                                            <div class="mx-10 mr-20"><a  href="https://web.facebook.com/owolabi.falana" target="_blank"><i class="fab fa-facebook-f"></i></a></div>
                                            <div><a href="https://www.linkedin.com/in/owolabi-falana-mniia-18724147/" target="_blank"><i class="fab fa-linkedin-in"></i></a></div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-10 col-lg-9 ">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | ojfalana
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>
{{--<script src="./assets/js/aos.js"></script>--}}
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('js/jquery.timepicker.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('js/google-map.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<!-- JS here -->
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/main-2.js')}}"></script>

<script src="{{asset('./assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('./assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('./assets/js/popper.min.js')}}"></script>
<script src="{{asset('./assets/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset('./assets/js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{asset('./assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('./assets/js/slick.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{asset('./assets/js/wow.min.js')}}"></script>
<script src="{{asset('./assets/js/animated.headline.js')}}"></script>
<script src="{{asset('./assets/js/jquery.magnific-popup.js')}}"></script>

<!-- Date Picker -->
<script src="{{asset('./assets/js/gijgo.min.js')}}"></script>
<!-- Nice-select, sticky -->
<script src="{{asset('./assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('./assets/js/jquery.sticky.js')}}"></script>
<!-- Progress -->
<script src="{{asset('./assets/js/jquery.barfiller.js')}}"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{asset('./assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('./assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('./assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('./assets/js/hover-direction-snake.min.js')}}"></script>

<!-- contact js -->
<script src="{{asset('./assets/js/contact.js')}}"></script>
<script src="{{asset('./assets/js/jquery.form.js')}}"></script>
<script src="{{asset('./assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('./assets/js/mail-script.js')}}"></script>
<script src="{{asset('./assets/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{asset('./assets/js/plugins.js')}}"></script>
<script src="{{asset('./assets/js/main.js')}}"></script>

<script src="{{asset('js/jquery.min.js')}}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
<script src="{{asset('js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="vendors-2/@popperjs/popper.min.js"></script>
<script src="vendors-2/bootstrap/bootstrap.min.js"></script>
<script src="vendors-2/is/is.min.js"></script>
<script src="vendors-2/swiper/swiper-bundle.min.js"> </script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="vendors-2/fontawesome/all.min.js"></script>
<script src="assets-2/js/theme.js"></script>

</body>
</html>
