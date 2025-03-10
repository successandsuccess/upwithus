<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content='pavilan'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Tag  -->
    <title>LGB BUG - Multipurpose IT & Digital Agency Team</title>

    <!-- Favicon -->
    <link rel="icon" type="image/favicon.png" href="{{ asset('assets/img/favicon.png') }}">

    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bizwheel Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}">

    <!-- Bizwheel Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    @yield('css')
</head>

<body id="bg">

    <!-- Boxed Layout -->
    <div id="page" class="site boxed-layout">

    <!-- Preloader -->
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>
    <!--/ End Preloader -->

    <!-- Header -->
    <header class="header">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <!-- Top Contact -->
                        <div class="top-contact">
                            <div class="single-contact"><i class="fa fa-phone"></i>Phone: +(600) 125-4985-214</div>
                            <div class="single-contact"><i class="fa fa-envelope-open"></i>Email: info@yoursite.com</div>
                            <div class="single-contact"><i class="fa fa-clock-o"></i>Opening: 08AM - 09PM</div>
                        </div>
                        <!-- End Top Contact -->
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="topbar-right">
                            <!-- Social Icons -->
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                            <div class="button">
                                <a href="contact.html" class="bizwheel-btn">Get a Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Topbar -->
        <!-- Middle Header -->
        <div class="middle-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="middle-inner">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-12">
                                    <!-- Logo -->
                                    <div class="logo">
                                        <!-- Image Logo -->
                                        <div class="img-logo">
                                            <a href="{{ route('pages.home') }}">
                                                <img src="{{ asset('assets/img/team_logo.jpg') }}" alt="#">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mobile-nav"></div>
                                </div>
                                <div class="col-lg-10 col-md-9 col-12">
                                    <div class="menu-area">
                                        <!-- Main Menu -->
                                        <nav class="navbar navbar-expand-lg">
                                            <div class="navbar-collapse">
                                                <div class="nav-inner">
                                                    <div class="menu-home-menu-container">
                                                        <!-- Naviagiton -->
                                                        <ul id="nav" class="nav main-menu menu navbar-nav">
                                                            <li class="icon-active"><a href="#">Home</a>
                                                                <ul class="sub-menu">
                                                                    <!-- <li><a href="index.html">Homepage V1</a></li>
                                                                    <li><a href="index2.html">Homepage V2</a></li> -->

                                                                    <li><a href="#">Homepage V1</a></li>
                                                                    <li><a href="#">Homepage V2</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="icon-active"><a href="#">Services</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="services.html">All services</a></li>
                                                                    <li><a href="service-business.html">Business Strategy</a></li>
                                                                    <li><a href="service-develop.html">Web Development</a></li>
                                                                    <li><a href="service-market.html">Market Research</a></li>
                                                                    <li><a href="service-advertise.html">Simply Adertisement</a></li>
                                                                    <li><a href="service-design.html">Trend Design</a></li>
                                                                    <li><a href="service-marketing.html">Digital Marketing</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="icon-active"><a href="#">Portfolio</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="portfolio.html">Portfolio</a></li>
                                                                    <li><a href="portfolio-single.html">Portfolio Single</a></li>
                                                                    <li><a href="portfolio-single-slider.html">Portfolio Single Slider</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="icon-active"><a href="#">Blog</a>
                                                                <ul class="sub-menu">
                                                                    <li class="icon-active"><a href="#">Blog Layout</a>
                                                                        <ul class="sub-menu">
                                                                            <li><a href="blog-standard.html">Blog Standard</a></li>
                                                                            <li><a href="blog-standard-sidebar.html">Blog Standard Sidebar</a></li>
                                                                            <li><a href="blog-grid.html">Blog Grid Layout</a></li>
                                                                            <li><a href="blog-grid-sidebar.html">Blog Grid Sidebar</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="icon-active"><a href="#">Blog Single	</a>
                                                                        <ul class="sub-menu">
                                                                            <li><a href="blog-single.html">Single Single</a></li>
                                                                            <li><a href="blog-single-left.html">Single Left Sidebar</a></li>
                                                                            <li><a href="blog-single-right.html">Single Right Sidebar</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="icon-active"><a href="#">Pages</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="about.html">About Us</a></li>
                                                                    <li><a href="team.html">Our Team</a></li>
                                                                    <li><a href="pricing.html">Pricing Plan</a></li>
                                                                    <li><a href="faqs.html">Faq’s</a></li>
                                                                    <li><a href="404.html">404</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="contact.html">Contact Us</a></li>
                                                        </ul>
                                                        <!--/ End Naviagiton -->
                                                    </div>
                                                </div>
                                            </div>
                                        </nav>
                                        <!--/ End Main Menu -->
                                        <!-- Right Bar -->
                                        <div class="right-bar">
                                            <!-- Search Bar -->
                                            <ul class="right-nav">
                                                <li class="top-search"><a href="#0"><i class="fa fa-search"></i></a></li>
                                                <li class="bar">
                                                    <a class="fa fa-bars"></a>
                                                </li>
                                            </ul>
                                            <!--/ End Search Bar -->
                                            <!-- Search Form -->
                                            <div class="search-top">
                                                <form action="#" class="search-form" method="get">
                                                    <input type="text" name="s" value="" placeholder="Search here" />
                                                    <button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
                                                </form>
                                            </div>
                                            <!--/ End Search Form -->
                                        </div>
                                        <!--/ End Right Bar -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Middle Header -->
        <!-- Sidebar Popup -->
        <div class="sidebar-popup">
            <div class="cross">
                <a class="btn"><i class="fa fa-close"></i></a>
            </div>
            <div class="single-content">
                <h4>About Bizwheel</h4>
                <p>The main component of a healthy environment for self esteem is that it needs be nurturing. It should provide unconditional warmth.</p>
                <!-- Social Icons -->
                <ul class="social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div>
            <div class="single-content">
                <h4>Important Links</h4>
                <ul class="links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Pricing Plan</a></li>
                    <li><a href="#">Blog & News</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </div>
        </div>
        <!--/ Sidebar Popup -->
    </header>
    <!--/ End Header -->

    @yield('content')



    <!-- Footer -->
    <footer class="footer" style="background-image:url('assets/img/map.png')">
            <!-- Footer Top -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Footer About -->
                            <div class="single-widget footer-about widget">
                                <div class="logo">
                                    <div class="img-logo">
                                        <a class="logo" href="{{ route('pages.home') }}">
                                            <img class="img-responsive" src="{{ asset('assets/img/team_logo.jpg') }}" alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="footer-widget-about-description">
                                    <p>Beatae vitae dicta su explicabo nemo enim ipsam voluptatem quia voluptas sitBeatae vitae sitBeatae vitae dicta suntania..</p>
                                </div>
                                <div class="social">
                                    <!-- Social Icons -->
                                    <ul class="social-icons">
                                        <li><a class="facebook" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="linkedin" href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a class="pinterest" href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                                        <li><a class="instagram" href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="button"><a href="#" class="bizwheel-btn">About Us</a></div>
                            </div>
                            <!--/ End Footer About -->
                        </div>
                        <div class="col-lg-2 col-md-6 col-12">
                            <!-- Footer Links -->
                            <div class="single-widget f-link widget">
                                <h3 class="widget-title">Company</h3>
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Pricing Plan</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                            </div>
                            <!--/ End Footer Links -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Footer News -->
                            <div class="single-widget footer-news widget">
                                <h3 class="widget-title">Blog Page</h3>
                                <!-- Single News -->
                                <div class="single-f-news">
                                    <div class="post-thumb">
                                        <a href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
                                    </div>
                                    <div class="content">
                                        <p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>April 15, 2020</time></p>
                                        <h4 class="title"><a href="blog-sngle.html">We Provide you Best &amp; Creative Consulting Service</a></h4>
                                    </div>
                                </div>
                                <!--/ End Single News -->
                                <!-- Single News -->
                                <div class="single-f-news">
                                    <div class="post-thumb">
                                        <a href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
                                    </div>
                                    <div class="content">
                                        <p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>April 10, 2020</time></p>
                                        <h4 class="title"><a href="blog-sngle.html">We Provide you Best &amp; Creative Consulting Service</a></h4>
                                    </div>
                                </div>
                                <!--/ End Single News -->
                            </div>
                            <!--/ End Footer News -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Footer Contact -->
                            <div class="single-widget footer_contact widget">
                                <h3 class="widget-title">Contact</h3>
                                <p>Beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem</p>
                                <ul class="address-widget-list">
                                    <li class="footer-mobile-number"><i class="fa fa-phone"></i>+(600) 125-4985-214</li>
                                    <li class="footer-mobile-number"><i class="fa fa-envelope"></i>info@yoursite.com</li>
                                    <li class="footer-mobile-number"><i class="fa fa-map-marker"></i>House Building Uttara</li>
                                </ul>
                            </div>
                            <!--/ End Footer Contact -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                            <!-- Footer Newsletter -->
                            <div class="footer-newsletter">
                                <form action="#" method="post" class="newsletter-area">
                                    <input type="email" placeholder="Your email address">
                                    <button type="submit">Sign Up</button>
                                </form>
                            </div>
                            <!--/ End Footer Newsletter -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Copyright -->
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright-content">
                                <!-- Copyright Text -->
                                <p>© Copyright <a href="#">Bizwheel</a>. Design &amp; Development By <a target="_blank" href="#">ThemeLamp</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Copyright -->
        </footer>

        <!-- Jquery JS -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-migrate-3.0.0.js') }}"></script>
        <!-- Popper JS -->
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <!-- Bootstrap JS -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <!-- Modernizr JS -->
        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
        <!-- ScrollUp JS -->
        <script src="{{ asset('assets/js/scrollup.js') }}"></script>
        <!-- FacnyBox JS -->
        <script src="{{ asset('assets/js/jquery-fancybox.min.js') }}"></script>
        <!-- Cube Portfolio JS -->
        <script src="{{ asset('assets/js/cubeportfolio.min.js') }}"></script>
        <!-- Slick Nav JS -->
        <script src="{{ asset('assets/js/slicknav.min.js') }}"></script>
        <!-- Way Points JS -->
        <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
        <!-- CounterUp JS -->
        <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
        <!-- Slick Nav JS -->
        <script src="{{ asset('assets/js/slicknav.min.js') }}"></script>
        <!-- Slick Slider JS -->
        <script src="{{ asset('assets/js/owl-carousel.min.js') }}"></script>
        <!-- Easing JS -->
        <script src="{{ asset('assets/js/easing.js') }}"></script>
        <!-- Magnipic Popup JS -->
        <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
        <!-- Active JS -->
        <script src="{{ asset('assets/js/active.js') }}"></script>

        @yield('javascript')
</body>

</html>