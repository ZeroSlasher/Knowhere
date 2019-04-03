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

    <link rel="stylesheet" type="text/css" href="assets/css/summernote.css">

    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">

    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">

    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>

<body>

    <header id="header-wrap">

        @include('inc.admin.admindash_head')

    </header>


    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Reset Password</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home /</a></li>
                            <li class="current">Reset Password</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="content" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">
                    <aside>
                        <div class="sidebar-box">
                            <div class="user">
                                <figure>
                                    <a href="#"><img src="assets/img/author/img1.jpg" alt=""></a>
                                </figure>
                                <div class="usercontent">
                                    <h3>{{Session::get('name')}}</h3>
                                    <h4></h4>
                                </div>
                            </div>
                            <nav class="navdashboard">
                                <ul>
                                    <li>
                                        <a href="ownerdashboard">
                                            <i class="lni-dashboard"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mypostings">
                                            <i class="lni-dashboard"></i>
                                            <span>My Postings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="editownerprofile">
                                            <i class="lni-cog"></i>
                                            <span>Profile Settings</span>
                                        </a>
                                    </li>
                                    </li>
                                    <li>
                                        <a class="active" href="#">
                                            <i class="lni-layers"></i>
                                            <span>Reset password</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="Addposting">
                                            <i class="lni-wallet"></i>
                                            <span>Add new posting</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="lni-heart"></i>
                                            <span>Option4</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="lni-star"></i>
                                            <span>Option5</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/logout">
                                            <i class="lni-enter"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="widget">
                            <h4 class="widget-title">Advertisement</h4>
                            <div class="add-box">
                                <img class="img-fluid" src="assets/img/img1.jpg" alt="">
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-9">
                    <div class="row page-content">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                            <div class="inner-box" style="width: 1000px;">
                                <div class="tg-contactdetail">
                                    <div class="dashboard-box">
                                        <h2 class="dashbord-title">Reset Password</h2>
                                    </div>
                                    @include('inc.message')

                                    <div class="dashboard-wrapper">
                                        <form method="POST" action="/changepassword" id="rqstform"
                                            onsubmit="return formValidation3()" enctype="multipart/form-data">
                                            @csrf
                                            @isset($log)
                                            @foreach($log as $l)
                                            <input type="text" name="id" value="{{$l->id}}">
                                            <div class="form-group mb-3">
                                                <label class="control-label">Email</label>
                                                <input class="form-control input-md" value="{{$l->email}}" name='email'
                                                    id='email' onblur="return emailDoesExist()"
                                                    placeholder=" Contact Email">
                                                <div id="p22" class="alert alert-danger"
                                                    style="align:center;display: none;">
                                                    <strong>Enter a valid email</strong>
                                                </div>
                                                <div id="p23" class="alert alert-danger"
                                                    style="align:center;display: none;">
                                                    <strong>Email already registered, Use a different one</strong>
                                                </div>
                                            </div>
                                            @endforeach
                                            @endisset
                                            <div class="form-group mb-3">
                                                <label class="control-label">Current password</label>
                                                <input class="form-control input-md" name="curpass" type="text">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label class="control-label">New password</label>
                                                <input class="form-control input-md" name="npass" type="text">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label class="control-label">Confirm password</label>
                                                <input class="form-control input-md" name="cpass" type="text">
                                            </div>
                                            <div id="p24" class="alert alert-danger"
                                                style="align:center;display: none;">
                                                <strong>check password</strong>
                                            </div>
                                            <div id="head" style="align:center;display: none;"
                                                class="alert alert-danger">
                                                <strong>Enter valid input</strong>
                                            </div>
                                            <div class="button-wrapper"><button type="submit" id="submit1"
                                                    name="submit1" class="btn btn-common">Reset Password</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('inc.outer.footer')


    <a href="#" class="back-to-top">
        <i class="lni-chevron-up"></i>
    </a>

    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>


    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/color-switcher.js"></script>
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
    <script src="{{ asset('js/myajax.js') }}"></script>
    <!-- formvalidate1.js -->
    <script src="js/formvalidate3.js"></script>

</body>

<!-- Mirrored from preview.uideck.com/items/Knowhere-1.1/account-profile-setting.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Mar 2019 06:15:22 GMT -->

</html>