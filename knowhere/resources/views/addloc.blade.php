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
                        <h2 class="product-title">Add locations</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home /</a></li>
                            <li class="current">Add locations</li>
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
                                        @if(Session::get('utype')==2)
                                        <a href="ownerdashboard">
                                            @elseif(Session::get('utype')==3)
                                            <a href="userdashboard">
                                                @endif
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
                                        <a href="editprofile">
                                            <i class="lni-cog"></i>
                                            <span>Profile Settings</span>
                                        </a>
                                    </li>
                                    </li>
                                    <li>
                                        <a href="resetpwd">
                                            <i class="lni-layers"></i>
                                            <span>Reset password</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="postingcheck">
                                            <i class="lni-wallet"></i>
                                            <span>Add new posting</span>
                                        </a>
                                    </li>
                                    @if(Session::get('utype')==2)
                                    <li>
                                        <a href="add_ad">
                                            <i class="lni-heart"></i>
                                            <span>My Adverts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="active" href="#">
                                            <i class="lni-wallet"></i>
                                            <span>Add nearby locations</span>
                                        </a>
                                    </li>
                                    @endif
                                    <li>
                                        <a href="undermaintainence">
                                            <i class="lni-heart"></i>
                                            <span>Option4</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="undermaintainence">
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
                                        <h2 class="dashbord-title">Add locations</h2>
                                    </div>
                                    @include('inc.message')
                                    <div class="alert alert-info" style="align:center;">
                                        <strong>Please do a search before adding inorder to
                                            verify
                                            whether the locality has already been added!!</strong>
                                    </div>
                                    <div class="alert alert-warning" style="align:center;">
                                        <strong>If not found to be existing, Add the location..</strong>
                                    </div>
                                    <div class="dashboard-wrapper">

                                        <div class="form-group mb-3">
                                            <label class="control-label">locality to be added</label>
                                            <input class="form-control input-md" name="local" type="text">
                                        </div>
                                        <div class="col-sm-12 col-md-8 col-lg-9">

                                            <div id="List">
                                                <br>
                                            </div>
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
        <script>
        $(document).ready(function() {
            $('#disablebtn').click(function() {
                if ($('#email').prop('disabled')) {
                    $('#email').prop('disabled', false)
                } else {
                    $('#email').prop('disabled', true)
                }
            });
        })
        </script>
        <script>
        function emailDoesExist() {
            $('#submit1').addClass('disabled');
            var email = document.getElementById('email').value;
            if (email) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '/mailcheck/' + email,
                    type: "GET",
                    dataType: "json",
                    // data: {
                    //     'email': remail
                    // },
                    success: function(data) {
                        if (data == 1) {
                            $("#p23").fadeIn().delay('1000').fadeOut();
                        } else {
                            $('#submit1').removeClass('disabled');

                        }

                    }
                });
            }
        }
        </script>
</body>

</html>
