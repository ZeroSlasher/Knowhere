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

    <link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css" />

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
    body {
        background: #f2f2f2;
        font-family: 'Josefin Sans', sans-serif;
    }

    h3 {
        font-family: 'Josefin Sans', sans-serif;
    }

    .box {
        padding: 60px 0px;
    }

    .box-part {
        background: #FFF;
        border-radius: 10px;
        padding: 60px 10px;
        margin: 30px 0px;
    }

    .box-part:hover {
        background: #f2f2f2;
    }

    .box-part:hover .fa,
    /* .box-part:hover .title, */
    .box-part:hover .text,
    .box-part:hover a {
        color: #FFF;
        -webkit-transition: all 1s ease-out;
        -moz-transition: all 1s ease-out;
        -o-transition: all 1s ease-out;
        transition: all 1s ease-out;
    }

    .text {
        margin: 20px 0px;
    }

    .fa {
        color: #4183D7;
    }

    /* Hiding the checkbox, but allowing it to be focused */
    .badgebox {
        opacity: 0;
    }

    .badgebox+.badge {
        /* Move the check mark away when unchecked */
        text-indent: -999999px;
        /* Makes the badge's width stay the same checked and unchecked */
        width: 27px;
    }

    .badgebox:focus+.badge {
        /* Set something to make the badge looks focused */
        /* This really depends on the application, in my case it was: */

        /* Adding a light border */
        box-shadow: inset 0px 0px 5px;
        /* Taking the difference out of the padding */
    }

    .badgebox:checked+.badge {
        /* Move the check mark back when checked */
        text-indent: 0;
    }
    </style>
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
                                        <a href="#" class="active">
                                            <i class="lni-heart"></i>
                                            <span>My Adverts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="addloc">
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
                                        <strong>Add an advertisement for your Establishment</strong>
                                    </div>
                                    <!-- <div class="alert alert-warning" style="align:center;">
<strong>If not found to be existing, Add the location..</strong>
</div> -->
                                    <div class="dashboard-wrapper">


                                        <div class="form-group mb-3 tg-inputwithicon">
                                            <label class="control-label">Shop for which the ad is posting for</label>
                                            <div class="tg-select form-control">
                                                <select name="outlet" id="outlet">
                                                    <option selected value="0"> -- select Outlet -- </option>
                                                    @isset($outlet)
                                                    @foreach($outlet as $o)
                                                    <option value="{{$o->outletid}}">{{$o->outletname}}
                                                    </option>
                                                    @endforeach
                                                    @endisset
                                                </select>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label class="control-label">Content of the advertisement</label>
                                                <input id="file" type="file" name="file" multiple class="file"
                                                    data-min-file-count="2">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label class="control-label">Description for the advertisement</label>
                                                <textarea class="form-control" id="Desc" name="Desc"></textarea> </div>

                                            <div class="form-group mb-3">
                                                <label class="control-label">Package for the advertisement</label>
                                                <div class="col-sm-12 col-md-8 col-lg-9">
                                                    <section id="pricing-table">
                                                        <div class="table" style="display:flex;">
                                                            <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">

                                                                <div class="box-part text-center">

                                                                    <div class="icon">
                                                                        <i class="lni-gift"></i>
                                                                    </div>
                                                                    <div class="title">
                                                                        <h3>SILVER</h3>
                                                                    </div>
                                                                    <div class="pricing-header">
                                                                        <p class="price-value">
                                                                            <sup>₹</sup>100<span></span>
                                                                        </p>
                                                                    </div>
                                                                    <ul class="description">
                                                                        <li><strong>Free</strong> ad posting</li>
                                                                        <li><strong>No</strong> Featured ads
                                                                            availability
                                                                        </li>
                                                                        <li><strong>For 10</strong> days</li>
                                                                        <li><strong>100%</strong> Secure!</li>
                                                                    </ul>
                                                                    <label for="info" class="btn btn-info">Select <input
                                                                            type="checkbox" id="info"
                                                                            class="badgebox"><span
                                                                            class="badge">&check;</span></label>

                                                                </div>
                                                            </div>
                                                            <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">

                                                                <div class="box-part text-center">

                                                                    <div class="icon">
                                                                        <i class="lni-leaf"></i>
                                                                    </div>
                                                                    <div class="title">
                                                                        <h3>STANDARD</h3>
                                                                    </div>
                                                                    <div class="pricing-header">
                                                                        <p class="price-value"><sup>₹</sup>200
                                                                        </p>
                                                                    </div>
                                                                    <ul class="description">
                                                                        <li><strong>Free</strong> ad posting</li>
                                                                        <li><strong>6</strong> Featured ads availability
                                                                        </li>
                                                                        <li><strong>For 20</strong> days</li>
                                                                        <li><strong>100%</strong> Secure!</li>
                                                                    </ul>
                                                                    <label for="warning" class="btn btn-warning">Select
                                                                        <input type="checkbox" id="warning"
                                                                            class="badgebox"><span
                                                                            class="badge">&check;</span></label>


                                                                </div>
                                                            </div>

                                                            <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">

                                                                <div class="box-part text-center">

                                                                    <div class="icon">
                                                                        <i class="lni-layers"></i>
                                                                    </div>
                                                                    <div class="title">
                                                                        <h3>PLANINIUM</h3>
                                                                    </div>
                                                                    <div class="pricing-header">
                                                                        <p class="price-value"><sup>₹</sup>300
                                                                        </p>
                                                                    </div>
                                                                    <ul class="description">
                                                                        <li><strong>Free</strong> ad posting</li>
                                                                        <li><strong></strong> Featured ads availability
                                                                        </li>
                                                                        <li><strong>For 30</strong> days</li>
                                                                        <li><strong>100%</strong> Secure!</li>
                                                                    </ul>
                                                                    <label for="primary" class="btn btn-primary">Select
                                                                        <input type="checkbox" id="primary"
                                                                            class="badgebox"><span
                                                                            class="badge">&check;</span></label>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
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
        </div>


        @include('inc.outer.footer')


        <a href="#" class="back-to-top">
            <i class="lni-chevron-up"></i>
        </a>

        <div id="preloader">
            <div class="loader" id="loader-1"></div>
        </div>

        <script src="{{ asset('assets/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
        <script>
        CKEDITOR.replace('Desc');
        </script>
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
        <script src="{{ asset('js/fileinput.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/theme.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/popper.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript">
        $("#file").fileinput({
            theme: 'fa',
            uploadIcon: '<i class="fa fa-cloud-upload" aria-hidden="true"></i>',
            removeIcon: '<i class="fa fa-trash" aria-hidden="true"></i>',
            'uploadAsync': false,

            uploadUrl: "/storeimg",
            uploadExtraData: function() {
                return {
                    _token: $("input[name='_token']").val(),
                };
            },
            allowedFileExtensions: ['jpg', 'png', 'gif'],
            overwriteInitial: false,
            maxFileSize: 10000,
            maxFilesNum: 8,
            slugCallback: function(filename) {
                return filename.replace('(', '_').replace(']', '_');
            }

        });
        </script>

</body>

</html>