<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Knowhere</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">

    <link rel="stylesheet" type="text/css" href="assets/css/color-switcher.css">

    <link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css">

    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">

    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">

    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>

<body>

    <header id="header-wrap">

        @include('inc.outer.forgotpwd_head')

    </header>


    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Forgot Password</h2>
                        <ol class="breadcrumb">
                            <li><a href="/">Home /</a></li>
                            <li class="current">Forgot Password</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-12 col-xs-12">
                    <div class="forgot login-area">
                        <h3>
                            Forgot Password
                        </h3>
                        <form role="form" class="login-form">
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="icon lni-user"></i>
                                    <input type="text" id="sender-email" class="form-control" name="email"
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-common log-btn">Send me my Password</button>
                            </div>
                            <div class="form-group mt-4">
                                <ul class="form-links">

                                    <li class="float-left"><a href="/">Don't have an account?</a></li>
                                    <li class="float-right"><a href="/">Back to Login</a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer>

        <section class="footer-Content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                        <div class="widget">
                            <h3 class="footer-logo"><img src="assets/img/logo.png" alt=""></h3>
                            <div class="textwidget">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt
                                    est, et euismod purus suscipit quis. Etiam euismod ornare elementum. Sed ex est,
                                    consectetur eget facilisis sed, auctor ut purus.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                        <div class="widget">
                            <h3 class="block-title">Help & Support</h3>
                            <ul class="menu">
                                <li><a href="#">Live Chat</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Purchase Protection</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                        <div class="widget">
                            <h3 class="block-title">Subscribe us</h3>
                            <p class="text-sub">We have over 5 years of experience Our support avalable to help you 24
                                hours a day, seven days week</p>
                            <form method="post" id="subscribe-form" name="subscribe-form" class="validate">
                                <div class="form-group is-empty">
                                    <input type="email" value="" name="Email" class="form-control" id="EMAIL"
                                        placeholder="Email" required="">
                                    <button type="submit" disabled name="subscribe" id="subscribes"
                                        class="btn btn-common sub-btn"><i class="lni-check-box"></i></button>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                            <ul class="footer-social">
                                <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                                <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="site-info float-left">
                            <p>All copyrights reserved &copy; 2018 - Designed by <a href="https://uideck.com/"
                                    rel="nofollow">UIdeck</a></p>
                        </div>
                        <div class="float-right">
                            <ul class="bottom-card">
                                <li>
                                    <a href="#"><img src="assets/img/footer/card1.jpg" alt="card"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/img/footer/card2.jpg" alt="card"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/img/footer/card3.jpg" alt="card"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/img/footer/card4.jpg" alt="card"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>


    <a href="#" class="back-to-top">
        <i class="lni-chevron-up"></i>
    </a>

    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>


    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
     
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/nivo-lightbox.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.min.js"></script>
    <script src="assets/js/summernote.js"></script>
</body>

<!-- Mirrored from preview.uideck.com/items/Knowhere-1.1/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Mar 2019 06:15:25 GMT -->

</html>