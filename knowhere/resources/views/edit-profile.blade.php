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
                        <h2 class="product-title">Profile Settings</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home /</a></li>
                            <li class="current">Profile Settings</li>
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
                                        <a class="active" href="#">
                                            <i class="lni-cog"></i>
                                            <span>Profile Settings</span>
                                        </a>
                                    </li>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="lni-layers"></i>
                                            <span>Option2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="lni-envelope"></i>
                                            <span>Option3</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="lni-wallet"></i>
                                            <span>Option3</span>
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
                                        <h2 class="dashbord-title">Contact Detail</h2>
                                    </div>
                                    <div class="dashboard-wrapper">

                                        <div class="form-group mb-3">
                                            <label class="control-label">Name</label>
                                            <input class="form-control input-md" name="name" type="text">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="control-label">Contact number</label>
                                            <input class="form-control input-md" value="" name="phone1"
                                                placeholder="Contact number" type="text">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="control-label">Address</label>
                                            <textarea class="form-control input-md" id="Address"
                                                name="Address"></textarea>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="control-label">Add profile image</label>
                                            <input class="form-control input-md" name="address" type="file">
                                        </div>

                                        <div class="form-group mb-3 tg-inputwithicon">
                                            <label class="control-label">State</label>
                                            <div class="tg-select form-control">
                                                <select id="state" name="state">
                                                    <option disabled selected value> -- select state -- </option>
                                                    @isset($state)
                                                    @foreach($state as $states)
                                                    <option value="{{$states->state_id}}">{{$states->state}}</option>
                                                    @endforeach
                                                    @endisset
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group mb-3 tg-inputwithicon">
                                            <label class="control-label">district</label>
                                            <div class="tg-select form-control">
                                                <select name="district" id="district">
                                                    <option disabled selected value> -- select district -- </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group mb-3 tg-inputwithicon">
                                            <label class="control-label">city</label>
                                            <div class="tg-select form-control">
                                                <select name="city" id="city">
                                                    <option disabled selected value> -- select city -- </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group mb-3 tg-inputwithicon">
                                            <label class="control-label">District</label>
                                            <div class="tg-select form-control">
                                                <select>
                                                    <option disabled selected>Select District</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 tg-inputwithicon">
                                            <label class="control-label">City</label>
                                            <div class="tg-select form-control">
                                                <select>
                                                    <option disabled selected>Select City</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="control-label">Email</label>
                                            <input class="form-control input-md" name="email" type="email">
                                        </div>

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

                                        <button class="btn btn-common" type="button">Update Profile</button>
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

</body>

<!-- Mirrored from preview.uideck.com/items/Knowhere-1.1/account-profile-setting.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Mar 2019 06:15:22 GMT -->

</html>