<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Owner's Dashboard</title>
    <link rel="stylesheet" href="css/w3.css">

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
                        <h2 class="product-title">My Postings</h2>
                        <ol class="breadcrumb">
                            <li><a href="/">Home /</a></li>
                            <li class="current">My Postings</li>
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
                                        <a class="active" href="mypostings">
                                            <i class="lni-dashboard"></i>
                                            <span>My Postings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="editownerprofile">
                                            <i class="lni-cog"></i>
                                            <span>Profile settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="resetopwd">
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
                    <div class="page-content">
                        <div class="inner-box">
                            <div class="dashboard-box">
                                <h2 class="dashbord-title">My Postings</h2>
                            </div>
                            @include('inc.message')
                            <div class="dashboard-wrapper">
                                <div class="row">
                                    @if(isset($post)) @foreach($post as $own)
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="featured-box">
                                            <figure>

                                                <div class="icon">
                                                    <a href="editpostimg/{{$own->outletid}}"><i
                                                            class="lni-upload"></i></a>
                                                </div>
                                                @php

                                                if (isset($own->outletid)) {
                                                $images =
                                                Illuminate\Support\Facades\DB::table('tbl_prof_images')->where('outletid',$own->outletid)->get();
                                                foreach ($images as $i) {
                                                $ii = $i->imgname;
                                                }
                                                }
                                                @endphp


                                                <div class="w3-content w3-display-container" style="max-width:800px">
                                                    <img class="" src="{{asset('/uploads')}}/{{$ii}}"
                                                        style="width:100%">
                                                </div>
                                                @php

                                                @endphp
                                            </figure>
                                            <div class="feature-content">
                                                <div class="product">
                                                    <a href="#"><i class="lni-folder"></i>
                                                        {{$own->catagory}} -- {{$own->subcatagory}}</a>
                                                </div>
                                                <h4><a href=" ">{{$own->outletname}} </a>
                                                </h4> <span>Last Updated: {{$own->updated_at}}</span>
                                                <ul class=" address">
                                                    <li>
                                                        <a href="#"><i class="lni-map-marker"></i>
                                                            {{$own->city}},{{$own->district}},{{$own->state}}</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="lni-alarm-clock"></i>
                                                            {{$own->created_at}}</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="lni-user"></i>
                                                            {{$own->ownername}}</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="lni-home"></i>
                                                            {{$own->address}}</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="lni-phone-handset"></i>
                                                            {{$own->phone1}}</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="lni-phone-handset"></i>
                                                            {{$own->phone2}}</a>
                                                    </li>
                                                </ul>
                                                <ul>
                                                    <li>
                                                        <i class="lni-notepad"></i> {!!$own->description!!}
                                                    </li>
                                                </ul>
                                                <div class="listing-bottom">
                                                    @if($own->status == 5)
                                                    <h3 class="btn-verified price float-left"><i
                                                            class="lni-pointer-right"></i>Verified</h3>
                                                    @else
                                                    <h3 class="btn-verified price float-left"><i
                                                            class="lni-pointer-right"></i>Referred</h3>
                                                    @endif
                                                    <a href="deletepost/{{$own->outletid}}"
                                                        class="btn-verified float-right"><i class="lni-trash"></i>
                                                        Delete posting</a> &nbsp;&nbsp; &nbsp;

                                                    <a href="editpost/{{$own->outletid}}"
                                                        class="btn-verified float-right"><i class="lni-pencil"></i>
                                                        Edit posting</a>&nbsp;&nbsp; &nbsp;

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach @endif
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

</body>


</html>
