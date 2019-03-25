<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from explorecity.icookcode.net/demo/coming-soon.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Mar 2019 16:11:09 GMT -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Explore City - Directory Listing HTML Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- PE Icon 7 Stoke -->
    <link href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="fonts/pe-icon-7-stroke/css/helper.css" rel="stylesheet">
    <!-- PE Icon Social -->
    <link href="fonts/pe-icon-social/css/pe-icon-social.css" rel="stylesheet">
    <link href="fonts/pe-icon-social/css/helper.css" rel="stylesheet">
    <!-- Quicksand Dash -->
    <link href="fonts/quicksand-dash/stylesheet.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.default.css" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="css/sweetalert.css" rel="stylesheet">
    <!-- Animate -->
    <link href="css/animate.min.css" rel="stylesheet">
    <!-- Nivo Lightbox -->
    <link href="scripts/Nivo-Lightbox/nivo-lightbox.css" rel="stylesheet">
    <link href="scripts/Nivo-Lightbox/themes/default/default.css" rel="stylesheet">
    <!-- NoUISlider -->
    <link href="css/jquery.nouislider.min.css" rel="stylesheet">
    <!-- Bootstrap Select -->
    <link href="css/bootstrap-select.min.css" rel="stylesheet">
    <!-- Style.css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

    <header class="header fixed clearfix">
        <div class="left">
            <div class="logo"><a href="index-2.html"><img src="images/logo.png" alt="ExploreCity"
                        class="img-responsive"></a></div> <!-- end .logo -->
            <form class="header-search">
                <input type="text" placeholder="I’m searching for ...">
                <button type="submit"><i class="pe-7s-search"></i></button>
            </form>
        </div> <!-- end .left -->
        <div class="navigation clearfix">
            <nav class="main-nav">
                <ul class="list-unstyled">
                    <li class="menu-item-has-children">
                        <a href="list.html">Explore</a>
                        <ul>
                            <li><a href="list.html">All Listings</a></li>
                            <li class="menu-item-has-children">
                                <a href="list.html">Food & Drink<i class="pe-7s-right-arrow"></i></a>
                                <ul>
                                    <li><a href="list.html">Cafe’</a></li>
                                    <li><a href="list.html">Restaurant</a></li>
                                    <li><a href="list.html">Pizza Place</a></li>
                                </ul>
                            </li>
                            <li><a href="list.html">Entertainment</a></li>
                            <li><a href="list.html">Nightlife</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="index-2.html">Pages</a>
                        <ul>
                            <li><a href="how-it-works.html">How It Works</a></li>
                            <li><a href="add-listing.html">Add Listing</a></li>
                            <li><a href="add-your-listing.html">Add Your Listing</a></li>
                            <li><a href="list.html">List</a></li>
                            <li><a href="list-detail.html">List Detail</a></li>
                            <li class="menu-item-has-children">
                                <a href="dashboard.html">Dashboard<i class="pe-7s-right-arrow"></i></a>
                                <ul>
                                    <li><a href="dashboard.html">Dashboard</a></li>
                                    <li><a href="my-listings.html">My Listings</a></li>
                                    <li><a href="my-wishlist.html">My Wishlist</a></li>
                                    <li><a href="edit-profile.html">Edit Profile</a></li>
                                </ul>
                            </li>
                            <li><a href="maintenance.html">Maintenance</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                            <li><a href="404.html">404</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="blog.html">Blog</a>
                        <ul>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-post.html">Blog Post</a></li>
                            <li><a href="blog-post-video.html">Blog Post Video</a></li>
                            <li><a href="blog-post-gallery.html">Blog Post Gallery</a></li>
                            <li><a href="blog-post-quote.html">Blog Post Quote</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="shop.html">Shop</a>
                        <ul>
                            <li><a href="shop.html">Shop</a></li>
                            <li><a href="shop-details.html">Shop Details</a></li>
                            <li><a href="shop-cart.html">Shop Cart</a></li>
                        </ul>
                    </li>
                </ul>
            </nav> <!-- end .main-nav -->
            <a href="#" class="responsive-menu-open"><i class="fa fa-bars"></i></a>
            <a href="#" class="cart-button">
                <i class="icon-shopping-basket"></i>
                <span>0</span>
            </a>
        </div> <!-- end .navigation -->
        <div class="right">
            <a href="#" class="button border">Add Listing</a>
            <a href="#" class="button login-open">Log In</a>
        </div> <!-- end .left -->
    </header> <!-- end .header -->
    <div class="responsive-menu">
        <a href="#" class="responsive-menu-close"><i class="fa fa-times"></i></a>
        <nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
    </div> <!-- end .responsive-menu -->

    <div class="section large transparent text-center" style="background-image: url('images/background10.jpg');">
        <div class="inner">
            <div class="container">
                <div class="coming-soon">
                    <div id="countdown" class="countdown">
                        <div class="time">
                            <span class="days">00</span>
                            <span class="timeRefDays">D</span>
                        </div> <!-- end time -->
                        <div class="time">
                            <span class="hours">00</span>
                            <span class="timeRefHours">H</span>
                        </div> <!-- end time -->
                        <div class="time">
                            <span class="minutes">00</span>
                            <span class="timeRefMinutes">M</span>
                        </div> <!-- end time -->
                        <div class="time">
                            <span class="seconds">00</span>
                            <span class="timeRefSeconds">S</span>
                        </div> <!-- end time -->
                    </div> <!-- end .countdown -->
                    <p class="lead">WEBSITE COMING SOON</p>
                    <form
                        action="https://johneyboy.us7.list-manage.com/subscribe/post-json?u=3210d74dbf054134a29daf97c&amp;id=50ad235761&amp;c=?"
                        method="get" id="mc-embedded-subscribe-form" class="newsletter-form block">
                        <input type="email" id="mce-EMAIL" name="EMAIL" placeholder="Your email here ...">
                        <button type="submit" id="mc-embedded-subscribe" name="subscribe"
                            class="button">Subscribe</button>
                    </form>
                </div> <!-- end .coming-soon -->
            </div> <!-- end .container -->
        </div> <!-- end .inner -->
    </div> <!-- end .section -->

    <footer class="footer">
        <div class="top">
            <div class="left">
                <div class="logo"><a href="index-2.html"><img src="images/logo-dark.png" alt="ExploreCity"
                            class="img-responsive"></a></div> <!-- end .logo -->
            </div> <!-- end .left -->
            <div class="social-icons">
                <a href="#"><i class="pe-so-facebook"></i></a>
                <a href="#"><i class="pe-so-twitter"></i></a>
                <a href="#"><i class="pe-so-vimeo"></i></a>
                <a href="#"><i class="pe-so-tripadvisor"></i></a>
                <a href="#"><i class="pe-so-instagram"></i></a>
                <a href="#"><i class="pe-so-google-plus"></i></a>
            </div>
            <div class="right">Proudly Made in Viet Nam<a href="#">+84 968796789</a></div> <!-- end .left -->
        </div> <!-- end .top -->
        <div class="bottom">Copyright &copy; 2016. All Rights Reserved By <a href="#">Wecookcode</a></div>
    </footer> <!-- end .footer -->

    <div class="login-wrapper">
        <div class="login">
            <form>
                <div class="form-group">
                    <input type="text" placeholder="Username or Email Address *">
                </div> <!-- end .form-group -->
                <div class="form-group">
                    <input type="text" placeholder="Password *">
                </div> <!-- end .form-group -->
                <div class="clearfix">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div>
                    <a href="#" class="lost-password">Lost your password ?</a>
                </div> <!-- end .clearfix -->
                <div class="button-wrapper"><button type="submit" class="button">Login</button></div>
                <div class="text-center">
                    <p>Don't have an account ? <a href="#" class="signup-open">Sign up</a></p>
                    <div class="social">
                        <p>Connect with Social Networks</p>
                        <a href="#"><img src="images/facebook.png" alt="facebook"></a>
                        <a href="#"><img src="images/twitter.png" alt="twitter"></a>
                        <a href="#"><img src="images/google-plus.png" alt="google plus"></a>
                    </div> <!-- end .social -->
                </div>
            </form>
        </div> <!-- end .login -->
    </div> <!-- end .login-wrapper -->

    <div class="signup-wrapper">
        <div class="signup">
            <form>
                <div class="form-group">
                    <input type="text" placeholder="Username">
                </div> <!-- end .form-group -->
                <div class="form-group">
                    <input type="email" placeholder="Email Address">
                </div> <!-- end .form-group -->
                <div class="text-center">
                    <p>A password will be e-mailed to you.</p>
                </div> <!-- end .text-center -->
                <div class="button-wrapper"><button type="submit" class="button">Register</button></div>
                <div class="text-center">
                    <p>Already have an account? <a href="#" class="login-open">Log in</a></p>
                    <div class="social">
                        <p>Connect with Social Networks</p>
                        <a href="#"><img src="images/facebook.png" alt="facebook"></a>
                        <a href="#"><img src="images/twitter.png" alt="twitter"></a>
                        <a href="#"><img src="images/google-plus.png" alt="google plus"></a>
                    </div> <!-- end .social -->
                </div>
            </form>
        </div> <!-- end .signup -->
    </div> <!-- end .signup-wrapper -->

    <!-- jQuery -->
    <script src="js/jquery-3.1.0.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- google maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAy-PboZ3O_A25CcJ9eoiSrKokTnWyAmt8"></script>
    <!-- rich marker -->
    <script src="js/richmarker.js"></script>
    <!-- Owl Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Countdown -->
    <script src="js/countdown.js"></script>
    <!-- Sweet Alert -->
    <script src="js/sweetalert.min.js"></script>
    <!-- Nivo Lightbox -->
    <script src="scripts/Nivo-Lightbox/nivo-lightbox.min.js"></script>
    <!-- NoUISlider -->
    <script src="js/jquery.nouislider.all.min.js"></script>
    <!-- Bootstrap Select -->
    <script src="js/bootstrap-select.min.js"></script>
    <!-- Nice Scroll -->
    <script src="js/jquery.nicescroll.min.js"></script>
    <!-- Scripts.js -->
    <script src="js/scripts.js"></script>

</body>

<!-- Mirrored from explorecity.icookcode.net/demo/coming-soon.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Mar 2019 16:11:24 GMT -->

</html>