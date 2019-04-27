<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>knowhere</title>

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
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <style type="text/css">
    body {
        font-family: 'Varela Round', sans-serif;
    }

    .modal-confirm {
        color: #636363;
        /* width: 400px; */
    }

    .modal-confirm .modal-content {
        padding: 20px;
        border-radius: 5px;
        border: none;
        text-align: center;
        font-size: 14px;
    }

    .modal-confirm .modal-header {
        border-bottom: none;
        position: relative;
    }

    .modal-confirm h4 {
        text-align: center;
        font-size: 26px;
        margin: 30px 0 -10px;
    }

    .modal-confirm .close {
        /* color: #fff;
        border-radius: 4px;
        background: #ff0000;
        text-decoration: none; */
        transition: all 0.8s;
        line-height: normal;
        min-width: 100px;
        border: none;
        min-height: 40px;
        border-radius: 7px;
        margin: 0 5px;
        outline: none !important;
    }



    .modal-confirm .modal-footer {
        color: #999;
        border-radius: 5px;
        padding: 10px 15px 25px;
    }


    .modal-confirm .icon-box {
        width: 80px;
        height: 80px;
        margin: 0 auto;
        border-radius: 50%;
        z-index: 9;
        text-align: center;
        border: 3px solid #f15e5e;
    }

    .modal-confirm .icon-box i {
        color: #f15e5e;
        font-size: 46px;
        display: inline-block;
        margin-top: -34px;
        margin-inline-start: -32px;
    }

    .modal-confirm .btn-danger:hover,
    .modal-confirm .btn-danger:focus {
        background: #928c8c;
    }
    </style>
</head>

<body>

    <header class="header fixed clearfix">
        <div class="left">
            <div class="logo"><a href="/"><img src="images/logo.png" alt="ExploreCity" class="img-responsive"></a></div>
            <!-- end .logo -->
            <form class="header-search">
                <input type="text" placeholder="I’m searching for ...">
                <button type="submit" disabled><i class="pe-7s-search"></i></button>
            </form>
        </div>
        <!-- end .left -->
        <div class="navigation clearfix">
            @include('inc.index_head')
            <a href="#" class="responsive-menu-open"><i class="fa fa-bars"></i></a>
        </div>
        <!-- end .navigation -->
        <div class="right">
            <a href="#" class="button login-open">Log In</a>
        </div>
        <!-- end .left -->
    </header>
    <!-- end .header -->

    @if (Session::has('msg'))
    <div class="listing-wrapper1">
        <div class="listing1">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i><img src="images/warning.png" alt="Warning"></i> </div>
                    </div>
                    <div role="alert" class="text center modal-body alert alert-danger">
                        <strong>{{Session::get('msg')}}</strong>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger close">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif @if (session('status'))
    <div class="listing-wrapper1">
        <div class="listing1">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i><img src="images/warning.png" alt="Warning"></i> </div>
                    </div>
                    <div role="alert" class="text center modal-body alert alert-danger">
                        <strong>{{ session('status') }}</strong>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger close">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="responsive-menu">
        <a href="#" class="responsive-menu-close"><i class="fa fa-times"></i></a>
        <nav class="responsive-nav"></nav>
        <!-- end .responsive-nav -->
    </div>
    <!-- end .responsive-menu -->

    <div class="section large transparent dark text-center" style="background-image: url('images/background01.jpg');">
        <div class="inner">
            <div class="container">
                <h1>Discover The City Gems</h1>
                <p class="lead">Find great places to stay, eat, shop, or visit from local experts.</p>
                <form method="GET" action="/searchaction">
                    @csrf
                    <div class="row">

                        <!-- end .col-sm-4 -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="loc" id="loc" autocomplete="off" placeholder="Location">
                                <i class="pe-7s-world"></i>
                                <div style="position: absolute;margin-top: 10px;" id="List">
                                </div>
                            </div>
                            <!-- end .form-group -->
                        </div>
                        <!-- end .col-sm-4 -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select class="selectpicker" name="cat" data-live-search="true">
                                    <option value selected>All categories</option>
                                    @isset($data)
                                    @foreach($data as $category)
                                    <option value="{{$category->Cat_id}}">{{$category->catagory}}</option>
                                    @endforeach
                                    @endisset
                                </select>
                            </div>
                            <!-- end .form-group -->
                        </div>
                        <!-- end .col-sm-4 -->
                    </div>
                    <!-- end .row -->
                    <input type="submit" class="button" value="Search places ">
                </form>
                <div class="highlight-slider-wrapper">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <p class="lead">Or browse the highlights</p>
                            <div class="highlight-slider">
                                <div class="item">
                                    <a href="#" class="icon">
                                        <img src="images/highlight-food.png" alt="food">
                                        <div class="overlay">Food</div>
                                    </a>
                                    <!-- end .icon -->
                                </div>
                                <!-- end .item -->
                                <div class="item">
                                    <a href="#" class="icon">
                                        <img src="images/highlight-lodging.png" alt="lodging">
                                        <div class="overlay">Lodging</div>
                                    </a>
                                    <!-- end .icon -->
                                </div>
                                <!-- end .item -->
                                <div class="item">
                                    <a href="#" class="icon">
                                        <img src="images/highlight-culture.png" alt="culture">
                                        <div class="overlay">Culture</div>
                                    </a>
                                    <!-- end .icon -->
                                </div>
                                <!-- end .item -->
                                <div class="item">
                                    <a href="#" class="icon">
                                        <img src="images/highlight-shopping.png" alt="shopping">
                                        <div class="overlay">Shopping</div>
                                    </a>
                                    <!-- end .icon -->
                                </div>
                                <!-- end .item -->
                                <div class="item">
                                    <a href="#" class="icon">
                                        <img src="images/highlight-nightlife.png" alt="nightlife">
                                        <div class="overlay">Nightlife</div>
                                    </a>
                                    <!-- end .icon -->
                                </div>
                                <!-- end .item -->
                                <div class="item">
                                    <a href="#" class="icon">
                                        <img src="images/highlight-drink.png" alt="drink">
                                        <div class="overlay">Drink</div>
                                    </a>
                                    <!-- end .icon -->
                                </div>
                                <!-- end .item -->
                            </div>
                            <!-- end .highlight-slider -->
                        </div>
                        <!-- end .col-md-8 -->
                    </div>
                    <!-- end .row -->
                </div>
                <!-- end .highlight-slider-wrapper -->
            </div>
            <!-- end .container -->
        </div>
        <!-- end .inner -->
    </div>
    <!-- end .section -->

    <div class="section light">
        <div class="inner">
            <div class="container">
                <h2 class="text-center">What are you interested in?<small>Explore some of the best tips from
                        around the
                        city from our partners and friends.</small></h2>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <a href="#" class="category-box" style="background-image: url('images/category01.jpg');">
                            <div class="inner">
                                <img src="images/category-icon01.png" alt="icon">
                                <span class="number">8</span>
                                <span class="title">Cinema</span>
                            </div>
                            <!-- end .inner -->
                        </a>
                        <!-- end .category-box -->
                    </div>
                    <!-- end .col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <a href="#" class="category-box" style="background-image: url('images/category02.jpg');">
                            <div class="inner">
                                <img src="images/category-icon02.png" alt="icon">
                                <span class="number">36</span>
                                <span class="title">Food</span>
                            </div>
                            <!-- end .inner -->
                        </a>
                        <!-- end .category-box -->
                    </div>
                    <!-- end .col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <a href="#" class="category-box" style="background-image: url('images/category03.jpg');">
                            <div class="inner">
                                <img src="images/category-icon03.png" alt="icon">
                                <span class="number">26</span>
                                <span class="title">Drink</span>
                            </div>
                            <!-- end .inner -->
                        </a>
                        <!-- end .category-box -->
                    </div>
                    <!-- end .col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <a href="#" class="category-box" style="background-image: url('images/category04.jpg');">
                            <div class="inner">
                                <img src="images/category-icon04.png" alt="icon">
                                <span class="number">16</span>
                                <span class="title">Lodging</span>
                            </div>
                            <!-- end .inner -->
                        </a>
                        <!-- end .category-box -->
                    </div>
                    <!-- end .col-md-3 -->
                    <div class="col-sm-6">
                        <a href="#" class="category-box" style="background-image: url('images/category05.jpg');">
                            <div class="inner">
                                <img src="images/category-icon05.png" alt="icon">
                                <span class="number">12</span>
                                <span class="title">Nightlife</span>
                            </div>
                            <!-- end .inner -->
                        </a>
                        <!-- end .category-box -->
                    </div>
                    <!-- end .col-sm-6 -->
                    <div class="col-md-3 col-sm-6">
                        <a href="#" class="category-box" style="background-image: url('images/category06.jpg');">
                            <div class="inner">
                                <img src="images/category-icon06.png" alt="icon">
                                <span class="number">4</span>
                                <span class="title">Visit</span>
                            </div>
                            <!-- end .inner -->
                        </a>
                        <!-- end .category-box -->
                    </div>
                    <!-- end .col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <a href="#" class="category-box" style="background-image: url('images/category07.jpg');">
                            <div class="inner">
                                <img src="images/category-icon07.png" alt="icon">
                                <span class="number">39</span>
                                <span class="title">Shop</span>
                            </div>
                            <!-- end .inner -->
                        </a>
                        <!-- end .category-box -->
                    </div>
                    <!-- end .col-md-3 -->
                </div>
                <!-- end .row -->
                <div class="text-center">
                    <a href="/categories" disabled class="button">All Listings</a>
                </div>
                <!-- end .text-center -->
            </div>
            <!-- end .container -->
        </div>
        <!-- end .inner -->
    </div>
    <!-- end .section -->

    <div class="section light transparent" style="background-image: url('images/background02.jpg');">
        <div class="inner">
            <div class="container">
                <h2 class="text-center">How it Works<small>Discover how EXploreCity can you help you find
                        everything you
                        want.</small></h2>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="services">
                            <img src="images/services-icon01.png" alt="icon" class="img-responsive center-block">
                            <h3>Choose<br>What To Do</h3>
                            <p>Looking for a cozy hotel to stay, a restaurant to eat, a museum to visit or a mall to do
                                some
                                shopping?
                            </p>
                            <div class="process"><i class="pe-7s-angle-right-circle"></i></div>
                        </div>
                        <!-- end .services -->
                    </div>
                    <!-- end .col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="services">
                            <img src="images/services-icon02.png" alt="icon" class="img-responsive center-block">
                            <h3>Find<br>What You Want</h3>
                            <p>Search and filter hundreds of listings, read reviews, explore photos and find the perfect
                                spot.
                            </p>
                            <div class="process"><i class="pe-7s-angle-right-circle"></i></div>
                        </div>
                        <!-- end .services -->
                    </div>
                    <!-- end .col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="services">
                            <img src="images/services-icon03.png" alt="icon" class="img-responsive center-block">
                            <h3>Explore<br>Amazing Places</h3>
                            <p>Go and have a good time or even make a booking directly from the listing page. All of
                                those,
                                thanks to Knowhere!</p>
                        </div>
                        <!-- end .services -->
                    </div>
                    <!-- end .col-sm-4 -->
                </div>
                <!-- end .row -->
            </div>
            <!-- end .container -->
        </div>
        <!-- end .inner -->
    </div>
    <!-- end .section -->


    <div class="section light">
        <div class="inner">
            <div class="container">
                <h2 class="text-center">Our Newsletter<small>Get an extra 39% off for next your
                        holiday</small>
                </h2>
                <form action="" method="get" id="mc-embedded-subscribe-form" class="newsletter-form">
                    <input type="email" id="mce-EMAIL" name="EMAIL" placeholder="YourEmail@domain.com">
                    <button type="submit" id="mc-embedded-subscribe" name="subscribe" class="button"
                        disabled>Subscribe</button>
                </form>
            </div>
            <!-- end .container -->
        </div>
        <!-- end .inner -->
    </div>
    <!-- end .section -->

    <footer class="footer">
        <div class="top">
            <div class="left">
                <div class="logo"><a href="/"><img src="images/logo-dark.png" alt="Knowhere" class="img-responsive"></a>
                </div>
                <!-- end .logo -->
            </div>
            <!-- end .left -->
            <div class="social-icons">
                <a href=""><i class="pe-so-facebook"></i></a>
                <a href=""><i class="pe-so-twitter"></i></a>
                <a href=""><i class="pe-so-vimeo"></i></a>
                <a href=""><i class="pe-so-tripadvisor"></i></a>
                <a href=""><i class="pe-so-instagram"></i></a>
                <a href=""><i class="pe-so-google-plus"></i></a>
            </div>
            <div class="right"></div>
            <!-- end .left -->
        </div>
        <!-- end .top -->
        <div class="bottom">Copyright &copy; 2019. All Rights Reserved By ZeroSlasher</a>
        </div>
    </footer>
    <!-- end .footer -->

    <div class="login-wrapper">
        <div class="login">
            <form action="/login" method="post">
                @csrf
                <div class="form-group">
                    <input type="email" placeholder="Email Address" id="email" onmousedown="this.type='text'"
                        name="email" required>
                </div>
                <!-- end .form-group -->
                <div class="form-group">
                    <input type="password" required placeholder="Password" id="password" name="password"
                        onmouseover="this.type='text'" onmouseup="this.type='password'"
                        onmouseout="this.type='password'">
                </div>
                <!-- end .form-group -->

                <div class="clearfix">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div>

                    <a href="password/reset" class="lost-password">Lost your password ?</a>
                </div>
                <!-- end .clearfix -->
                <div class="button-wrapper"><button type="submit" class="button">Login</button></div>
                <div class="text-center">
                    <p>Don't have an account ? <a href="#" class="signup-open">Sign up</a></p>

                    <div class="social">
                        <p>Connect with Social Networks</p>
                        <a href="#"><img src="images/facebook.png" alt="facebook"></a>
                        <a href="#"><img src="images/twitter.png" alt="twitter"></a>
                        <a href="#"><img src="images/google-plus.png" alt="google plus"></a>
                    </div>
                    <!-- end .social -->
                    <button type="button" style="margin:20px;" class="btn btn-danger closed1">close</button>

                </div>
            </form>
        </div>
        <!-- end .login -->
    </div>
    <!-- end .login-wrapper -->

    <div class="signup-wrapper" id="signupwrapper">
        <div class="signup">
            <form method="post" action="/register" onsubmit="return formValidation()">
                @csrf

                <div id="head" style="align:center;display: none;" class="alert alert-danger">
                    <strong>All details are mandatory</strong>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Name" id="name" name="name">
                    <div id="p1" style="display: none;" class="alert alert-danger">
                        <strong>Enter a valid name</strong>
                    </div>
                </div>
                <!-- end .form-group -->
                <div class="form-group">
                    <input type="text" placeholder="Email Address" class="vcheck" id="mail" name="mail">
                    <div id="p24" class="alert alert-danger" style="display: none;">
                        <strong>Email already registered, Use a different one</strong>
                    </div>
                    <div id="p2" class="alert alert-danger" style="display: none;">
                        <strong>Enter a vaild email</strong>
                    </div>
                    <div id="p222" class="alert alert-success" style="display: none;">
                        <strong>Email verified successfully</strong>
                    </div>
                    <div id="p2222" class="alert alert-warning" style="display: none;">
                        <strong>Email verification failed</strong>
                    </div>
                </div>


                <!-- end .form-group -->
                <div class="form-group">
                    <input type="text" placeholder="Contact number" id="phone" name="phone">
                    <div id="p3" class="alert alert-danger" style="display: none;">
                        <strong>Enter a valid Phone number</strong>
                    </div>
                </div>

                <!-- end .form-group -->
                <div class="form-group">
                    <input type="password" placeholder="Password" id="pwd" name="pwd" onmouseover="this.type='text'"
                        onmouseup="this.type='password'" onmouseout="this.type='password'">
                    <div id="p4" class="alert alert-danger" style="display: none;">
                        <strong>Password must be between 8 and 15 characters long and include at least one
                            digit and uppercase letter </strong>
                    </div>
                </div>


                <!-- end .form-group -->
                <div class="button-wrapper"><input type="submit" class="button" value="Register" id="Register"
                        name="Register"></div>

                <div class="text-center">
                    <p>Already have an account? <a href="#" class="login-open">Log in</a></p>
                    <p>Have your own establishment?<br> List it on Knowhere <a href="/addlisting"
                            class="listing-open">here!!</a></p>

                    <div class="social">
                        <p>Connect with Social Networks</p>
                        <a href=""><img src="images/facebook.png" alt="facebook"></a>
                        <a href=""><img src="images/twitter.png" alt="twitter"></a>
                        <a href=""><img src="images/google-plus.png" alt="google plus"></a>
                    </div>
                    <!-- end .social -->
                    <button type="button" style="margin:15px;" class="btn btn-danger closed2">close</button>

                </div>
            </form>
        </div>
        <!-- end .signup -->
    </div>
    <!-- end .signup-wrapper -->

    <div class="listing-wrapper">
        <div class="listing">
            <form method="POST" action="/requestlisting" id="rqstform" onsubmit="return formValidation1()"
                enctype="multipart/form-data">
                @csrf

                <div class="form-group1">
                    <input type="text" name='own_name' id='own_name' placeholder="Owner's name">
                    <!-- <p id="p11"></p> -->
                    <div id="p11" class="alert alert-danger" style="align:center;display: none;">
                        <strong>Enter a valid name</strong>
                    </div>
                </div>
                <div class="form-group1">
                    <input type="text" name='est_name' id='est_name' placeholder="Establishment name">
                </div>

                <div class="form-group1">
                    <select id="catSelect" name="catSelect">
                        <option disabled selected value> -- select Category -- </option>
                        @isset($data)
                        @foreach($data as $category)
                        <option value="{{$category->Cat_id}}">{{$category->catagory}}</option>
                        @endforeach
                        @endisset
                    </select>
                </div>

                <div class="form-group1">
                    <select name="subcat" id="subcat">
                        <option disabled selected value> -- select Sub-category -- </option>
                    </select>
                </div>

                <div class="form-group1">
                    <select id="state" name="state">
                        <option disabled selected value> -- select state -- </option>
                        @isset($state)
                        @foreach($state as $states)
                        <option value="{{$states->state_id}}">{{$states->state}}</option>
                        @endforeach
                        @endisset
                    </select>
                </div>

                <div class="form-group1">
                    <select name="district" id="district">
                        <option disabled selected value> -- select district -- </option>
                    </select>
                </div>

                <div class="form-group1">
                    <select name="city" id="city">
                        <option disabled selected value> -- select city -- </option>

                    </select>
                </div>
                <div class="form-group1">
                    <input type="text" name='remail' class="vcheck" id='remail' placeholder=" Contact Email">
                    <!-- <p id="p22"></p> -->
                    <div id="p22" class="alert alert-danger" style="align:center;display: none;">
                        <strong>Enter a valid email</strong>
                    </div>
                    <div id="p23" class="alert alert-danger" style="align:center;display: none;">
                        <strong>Email already registered, Use a different one</strong>
                    </div>
                    <div id="p22222" class="alert alert-warning" style="display: none;">
                        <strong>Email verification failed</strong>
                    </div>
                </div>
                <div class="form-group1">
                    <input type="text" name='cphone' id='cphone' placeholder="Contact Number">
                    <!-- <p id="p33"></p> -->
                    <div id="p33" class="alert alert-danger" style="align:center;display: none;">
                        <strong>Enter a valid Phone number</strong>
                    </div>
                </div>
                <div class="form-group1">
                    <!-- <input type="text" placeholder="Proof of existance-documents upload field"> -->
                    <div class="text-center">
                        <label>Documents for Proof of existance</label>
                        <h6>Proof can be Copy of licences, Image of Establishment or any Valid and legal document
                        </h6>

                        <input class=" file" name="proof1" type="file" accept=".pdf,.doc,.png.,.jpg" id="proof1" />
                        <input class=" file" name="proof2" type="file" accept=".pdf,.doc,.png.,.jpg" id="proof2" />
                        <input class=" file" name="proof3" type="file" accept=".pdf,.doc,.png.,.jpg" id="proof3" />
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
                        <div id="head1" style="align:center;display: none;" class="alert alert-danger">
                            <strong>All details are mandatory</strong>
                        </div>
                        <div class="button-wrapper verify-open"><button type="submit" id="submit1" name="submit1"
                                class="button">Request verification</button></div>
                    </div>
                    <div class="text-center">
                        <p>Verification details will be sent via email</p>
                        <p>Already have an account? <a href="#" class="login-open">Log in</a></p>

                    </div>
                    <button type="button" class="btn btn-danger closed3">close</button>

                </div>

            </form>

        </div>
        <!-- end .signup -->
    </div>
    <!-- end .listing-wrapper -->

    <div class="verify-wrapper" id="verifywrapper">
        <div class="verify">
            <p>Check your email inbox for the verification mail.
                Do check your spam folder too!</p>

            <div class="form-group1">
                Email: <p id="vmail"></p>
                <input type="text" name='vcode' id='vcode' placeholder="Verification code">
                <!-- <p id="p11"></p> -->
                <div id="vwarn" class="alert alert-danger" style="align:center;display: none;">
                    <strong>Enter code to continue!!</strong>
                </div>
                <div id="vwarn1" class="alert alert-danger" style="align:center;display: none;">
                    <strong>Verification code is incorrect!!</strong>
                </div>

            </div>
            <div class="button-wrapper" style="margin-left: 140px;">
                <button type="button" id="vbutton" name="vbutton" style="padding: 10px 25px;
    border-radius: 50px;" class="btn btn-primary">Verify</button>
            </div>
            <button type="button" class="btn btn-danger closed">close</button>

        </div>
    </div>


    <div class="success-wrapper" id="successwrapper">
        <div class="success">
            <div class="alert alert-success">
                <strong>Verification successfull!!</strong>
            </div>
            <button type="button" class="btn btn-info closed4">continue</button>
        </div>
        <input type="hidden" id="s" value="0">

    </div>
    <!-- jQuery -->
    <script src="js/jquery-3.1.0.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- google maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAy-PboZ3O_A25CcJ9eoiSrKokTnWyAmt8">

    </script>
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
    <!-- ajax.js -->
    <script src="js/myajax.js"></script>
    <!-- formvalidate.js -->
    <script src="js/formvalidate.js"></script>
    <!-- formvalidate1.js -->
    <script src="js/formvalidate1.js"></script>

    <script>

    </script>

</body>

</html>