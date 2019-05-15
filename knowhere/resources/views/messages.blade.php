<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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

        @include('inc.admin.admindash_head')


    </header>


    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Messages</h2>
                        <ol class="breadcrumb">
                            <li><a href="/">Home /</a></li>
                            <li class="current">Messages</li>
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
                                    <a href="#"><img src="assets\img\author\img1.jpg" alt="" width=80% height="80%"></a>
                                </figure>
                                <div class="usercontent">
                                    <h3>{{Session::get('name')}}</h3>
                                    <h4>Outlet owner</h4>
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
                                        <a href="editprofile">
                                            <i class="lni-cog"></i>
                                            <span>Profile settings</span>
                                        </a>
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
                                    <li>
                                        <a href="addloc">
                                            <i class="lni-wallet"></i>
                                            <span>Add nearby locations</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="myads">
                                            <i class="lni-heart"></i>
                                            <span>My Adverts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="active" href="messages">
                                            <i class="lni-star"></i>
                                            <span>Messages/Suggetions</span>
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
                    <div class="page-content">
                        <div class="inner-box">
                            <div class="dashboard-box">
                                <h2 class="dashbord-title"></h2>
                            </div>
                            <div class="dashboard-wrapper">

                                <div class="dashboard-wrapper">
                                    <form class="row offers-messages">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5"
                                            style="border-right: 1px solid #ddd;">
                                            <div class="offers-box">

                                                <ul class="offers-user-online">
                                                    @isset($msg)
                                                    @foreach($msg as $m)
                                                    <li class="offerer">
                                                        <figure>
                                                            <img src="assets/img/author/img1.jpg" alt="">
                                                        </figure>
                                                        <span class="bolticon"></span>
                                                        <div class="user-name">
                                                            <h3 class="msgview" data-id="{{$m->sid}}">{{$m->email}}</h3>
                                                            <h5 style="font-size: 13px;">Subject: {{$m->subject}}
                                                            </h5>
                                                            @if($m->rstatus == 13)
                                                            <h4><a class="text-danger">unread</a></h4>
                                                            @elseif($m->rstatus == 12)
                                                            <h4><a>read</a></h4>
                                                            @endif
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                    @endisset
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                                            <div class="chat-message-box" style="width: inherit;">
                                                <div class="dashboardboxtitle">
                                                    <h2>Chat Messages</h2>
                                                </div>
                                                <div id="msg">

                                                </div>

                                            </div>

                                        </div>
                                    </form>
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

    <script>
    $('.msgview').on('click', function() {

        var id = $(this).data('id');
        if (id) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/fetchmsg',
                type: "POST",
                data: {
                    id: id
                },
                success: function(data) {
                    console.log(data);
                    $('#msg').html(data);
                }
            });
        }
    });
    </script>
    <script>
    $(document).ready(function() {
        $('#replays').click(function() {
            alert();
            $replay = $('#replaytxt').text();
            alert($replay);
        });
    });
    </script>
</body>


</html>