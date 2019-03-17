<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from explorecity.icookcode.net/demo/maintenance.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Mar 2019 04:46:03 GMT -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Knowhere</title>

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


</head>

<body>

    <header class="header fixed clearfix">
        <div class="left">
            <div class="logo"><a href="/"><img src="images/logo.png" alt="ExploreCity" class="img-responsive"></a></div>
            <!-- end .logo -->
            <form class="header-search">
                <input type="text" placeholder="I’m searching for ...">
                <button type="submit"><i class="pe-7s-search"></i></button>
            </form>
        </div> <!-- end .left -->
        <div class="navigation clearfix">

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

    <div class="section large transparent text-center" style="background-image: url('images/background11.jpg');">
        <div class="inner">
            <div class="container">
                <div class="coming-soon">
                    <h1>SITE UNDER<br>MAINTENANCE</h1>
                    <p class="lead">WE'LL BE BACK SHORTLY</p>
                    <form id="mc-embedded-subscribe-form" class="newsletter-form block">
                        <input type="email" id="mce-EMAIL" name="EMAIL" disabled>
                        <button type="submit" id="mc-embedded-subscribe" disabled name="subscribe" class="button">NOTFIY
                            ME</button>
                    </form>
                </div> <!-- end .coming-soon -->
            </div> <!-- end .container -->
        </div> <!-- end .inner -->
    </div> <!-- end .section -->

    <footer class="footer">
        <div class="top">
            <div class="left">
                <div class="logo"><a href="/"><img src="images/logo-dark.png" alt="ExploreCity"
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
            <div class="right">ZeroSlasher</a></div> <!-- end .left -->
        </div> <!-- end .top -->
        <div class="bottom">Copyright &copy; 2018. All Rights Reserved </div>
    </footer> <!-- end .footer -->

    <div class="login-wrapper">
        <div class="login">
            <form action="/login" method="post">
                @csrf
                <div class="form-group">
                    <input type="email" placeholder="Email Address" id="email" onmousedown="this.type='text'"
                        name="email" required>
                </div> <!-- end .form-group -->
                <div class="form-group">
                    <input type="password" required placeholder="Password" id="password" name="password"
                        onmouseover="this.type='text'" onmouseup="this.type='password'"
                        onmouseout="this.type='password'">
                </div> <!-- end .form-group -->

                <div class="clearfix">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div>

                    <a href="/forgotpwd" class="lost-password">Lost your password ?</a>
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
            <form method="post" action="/register" onsubmit="return formValidation()">
                @csrf
                <center>
                    <p id="head" style="display: none;">All details are mandatory</p>
                </center>
                <div class="form-group">
                    <input type="text" placeholder="Name" id="name" name="name">
                </div>
                <p id="p1"></p> <!-- end .form-group -->
                <div class="form-group">
                    <input type="text" placeholder="Email Address" id="mail" name="mail">
                </div>
                <p id="p2"></p><!-- end .form-group -->
                <div class="form-group">
                    <input type="text" placeholder="Contact number" id="phone" name="phone">
                </div>
                <p id="p3"></p><!-- end .form-group -->
                <div class="form-group">
                    <input type="password" placeholder="Password" id="pwd" name="pwd" onmouseover="this.type='text'"
                        onmouseup="this.type='password'" onmouseout="this.type='password'">
                </div>
                <p id="p4"></p><!-- end .form-group -->
                <div class="button-wrapper"><input type="submit" class="button" value="Register"></div>
                <div class="text-center">
                    <p>Already have an account? <a href="#" class="login-open">Log in</a></p>
                    <div class="social">
                        <p>Connect with Social Networks</p>
                        <a href=""><img src="images/facebook.png" alt="facebook"></a>
                        <a href=""><img src="images/twitter.png" alt="twitter"></a>
                        <a href=""><img src="images/google-plus.png" alt="google plus"></a>
                    </div> <!-- end .social -->
                </div>
            </form>
        </div> <!-- end .signup -->
    </div> <!-- end .signup-wrapper -->

    <div class="listing-wrapper">
        <div class="listing">
            <form method="POST" action="/requestlisting" id="rqstform" enctype="multipart/form-data">
                @csrf
                <div class="form-group1">
                    <input type="text" name='own_name' placeholder="Owner's name">
                </div>
                <div class="form-group1">
                    <input type="text" name='est_name' placeholder="Establishment name">
                </div>

                <div class="form-group1">
                    <select id="catSelect" name="catSelect" required>
                        <option disabled selected value> -- select Category -- </option>
                        @isset($data)
                        @foreach($data as $category)
                        <option value="{{$category->Cat_id}}">{{$category->catagory}}</option>
                        @endforeach
                        @endisset
                    </select>
                </div>

                <div class="form-group1">
                    <select name="subcat">
                        <option disabled selected value> -- select Sub-category -- </option>
                    </select>
                </div>

                <div class="form-group1">
                    <select id="state" name="state" required>
                        <option disabled selected value> -- select state -- </option>
                        @isset($state)
                        @foreach($state as $states)
                        <option value="{{$states->state_id}}">{{$states->state}}</option>
                        @endforeach
                        @endisset
                    </select>
                </div>

                <div class="form-group1">
                    <select name="district">
                    </select>
                </div>

                <div class="form-group1">
                    <select name="city">
                    </select>
                </div>
                <div class="form-group1">
                    <input type="text" name='mail' placeholder=" ContactEmail">
                </div>
                <div class="form-group1">
                    <input type="text" name='phone' placeholder="Contact Number">
                </div>
                <div class="form-group1">
                    <!-- <input type="text" placeholder="Proof of existance-documents upload field"> -->
                    <div class="text-center">
                        <label>Documents for Proof of existance</label>
                        <h6>Proof can be Copy of licences, Image of Establishment or any Valid and legal
                            document</h6>

                        <input class=" file" name="proof1" type="file" accept=".pdf,.doc,.png.,.jpg" name="proof1" />
                        <input class=" file" name="proof2" type="file" accept=".pdf,.doc,.png.,.jpg" name="proof2" />
                        <input class=" file" name="proof3" type="file" accept=".pdf,.doc,.png.,.jpg" name="proof3" />
                    </div>
                </div>

                <div class="text-center">
                    <div class="gap">

                        <!-- <div class="verify-wrapper" hidden>
						<div class="verify">
						<div class="form-group">
						<div class="text-center">
						<p>enter Verification code sent to your email</p></div>
						<input type="text" placeholder="Verification code">
						</div>
						<div class="button-wrapper "><button type="submit" class="button">Verify</button></div>
						</div>
						</div> -->

                        <div class="button-wrapper verify-open"><button type="submit" name="submit"
                                class="button">Request verification</button></div>
                    </div>
                    <div class="text-center">
                        <p>Verification details will be sent via email</p>
                        <p>Already have an account? <a href="#" class="login-open">Log in</a></p>
                    </div>
                </div>
            </form>
        </div> <!-- end .signup -->
    </div> <!-- end .listing-wrapper -->

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

<!-- Mirrored from explorecity.icookcode.net/demo/maintenance.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Mar 2019 04:46:12 GMT -->

</html>