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
            @if(Session::get('uid'))
            @include('inc.admin.admindash_head')
            @else
            @include('inc.outer.header')
            @endif

        </header>


        <div class="page-header" style="background: url(assets/img/banner1.jpg);">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="search-bar">
                            <div class="search-inner">
                                <form class="search-form">
                                    <div class="form-group inputwithicon">
                                        <i class="lni-tag"></i>
                                        <input type="text" name="customword" class="form-control"
                                            placeholder="Enter Product Keyword">
                                    </div>
                                    <div class="form-group inputwithicon">
                                        <i class="lni-map-marker"></i>
                                        <div class="select">
                                            <select>
                                                <option value="none">All Locations</option>
                                                <option value="none">New York</option>
                                                <option value="none">California</option>
                                                <option value="none">Washington</option>
                                                <option value="none">Birmingham</option>
                                                <option value="none">Chicago</option>
                                                <option value="none">Phoenix</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group inputwithicon">
                                        <i class="lni-menu"></i>
                                        <div class="select">
                                            <select class="form-control" name="cat" data-live-search="true">
                                                <option value selected>All categories</option>
                                                @isset($data)
                                                @foreach($data as $category)
                                                <option value="{{$category->Cat_id}}">{{$category->catagory}}</option>
                                                @endforeach
                                                @endisset
                                            </select>
                                        </div>
                                    </div>
                                    <button class="btn btn-common" type="button"><i class="lni-search"></i> Search
                                        Now</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="main-container section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-xs-12 page-sidebar">
                        <aside>

                            <div class="widget_search">
                                <form role="search" id="search-form" method="POST" action="/searchaction">
                                    @csrf
                                    <input type="text" name="loc" id="loc" autocomplete="off" class="form-control"
                                        placeholder="Location"><i class="pe-7s-world"></i>
                                    <div style="position: absolute;margin-top: 10px;" id="List">
                                    </div>
                                    <div style="padding-top: 10px;    padding-bottom: 5px;">

                                        <select class="form-control" name="cat" data-live-search="true">
                                            <option value selected>All categories</option>
                                            @isset($data)
                                            @foreach($data as $category)
                                            <option value="{{$category->Cat_id}}">{{$category->catagory}}</option>
                                            @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                    <button type="submit" style="float: right;" class="btn btn-common"><i
                                            class="lni-search"></i></button>

                                </form>
                            </div>
                            <div class="widget categories">
                                <h4 class="widget-title">All Categories</h4>
                                <ul class="categories-list">
                                    <li>
                                        <a href="#">
                                            <i class="lni-dinner"></i>
                                            Hotel & Travels <span class="category-counter">(5)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="lni-control-panel"></i>
                                            Services <span class="category-counter">(8)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="lni-github"></i>
                                            Pets <span class="category-counter">(2)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="lni-coffee-cup"></i>
                                            Restaurants <span class="category-counter">(3)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="lni-home"></i>
                                            Real Estate <span class="category-counter">(4)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="lni-pencil"></i>
                                            Jobs <span class="category-counter">(5)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="lni-display"></i>
                                            Electronics <span class="category-counter">(9)</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Advertisement</h4>
                                <div class="add-box">
                                    <img class="img-fluid" src="assets/img/img1.jpg" alt="">
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-9 col-md-12 col-xs-12 page-content">

                        <div class="product-filter">

                            <div class="short-name">
                                <span>Showing (1 - 10 products of 7371 products)</span>
                            </div>
                            <div class="Show-item">
                                <span>Show Items</span>
                                <form class="woocommerce-ordering" method="post">
                                    <label>
                                        <select name="order" class="orderby">
                                            <option selected="selected" value="menu-order">
                                                49 items</option>
                                            <option value="popularity">popularity</option>
                                            <option value="popularity">Average ration
                                            </option>
                                            <option value="popularity">newness</option>
                                            <option value="popularity">price</option>
                                        </select>
                                    </label>
                                </form>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#grid-view"><i class="lni-grid"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#list-view"><i
                                            class="lni-list"></i></a>
                                </li>
                            </ul>
                        </div>


                        <div class="adds-wrapper">
                            <div class="tab-content">
                                <div id="grid-view" class="tab-pane fade">
                                    <div class="row">
                                        @if(isset($post)) @foreach($post as $own)
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="featured-box">
                                                <figure>
                                                    {{-- <div class="icon">
                                                        <i class="lni-heart"></i>
                                                    </div> --}}
                                                    @php

                                                    if (isset($own->outletid)) {
                                                    $images =
                                                    Illuminate\Support\Facades\DB::table('tbl_prof_images')->where('outletid',$own->outletid)->get();
                                                    foreach ($images as $i) {
                                                    $ii = $i->imgname;
                                                    }
                                                    }
                                                    @endphp
                                                    <a href="#"><img class="img-fluid"
                                                            src="{{asset('/uploads')}}/{{$ii}}" alt=""></a>
                                                </figure>
                                                <div class="feature-content">
                                                    <div class="product">
                                                        <a href="#"><i class="lni-folder"></i>
                                                            {{$own->catagory}} -- {{$own->subcatagory}}</a>
                                                    </div>
                                                    <h4><a href="ads-details.html">{{$own->outletname}}</a></h4>
                                                    <span>Last Updated: {{$own->updated_at}}</span>
                                                    <ul class="address">
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
                                                    <div class="listing-bottom">
                                                        @if($own->status == 'Validated')
                                                        <h3 class="btn-verified price float-left"><i
                                                                class="lni-pointer-right"></i>Verified</h3>
                                                        @else
                                                        <h3 class="btn-verified price float-left"><i
                                                                class="lni-pointer-right"></i>Referred</h3>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach @endif

                                    </div>
                                </div>
                                <div id="list-view" class="tab-pane fade active show">
                                    <div class="row">
                                        @if(isset($post)) @foreach($post as $own)
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="featured-box">
                                                <figure>
                                                    @php

                                                    if (isset($own->outletid)) {
                                                    $images =
                                                    Illuminate\Support\Facades\DB::table('tbl_prof_images')->where('outletid',$own->outletid)->get();
                                                    foreach ($images as $i) {
                                                    $ii = $i->imgname;
                                                    }
                                                    }
                                                    @endphp
                                                    {{-- <div class="icon">
                                                        <i class="lni-heart"></i>
                                                    </div> --}}

                                                    <a href="#"><img class="img-fluid"
                                                            src="{{asset('/uploads')}}/{{$ii}}" style="width:100%"
                                                            alt=""></a>
                                                </figure>
                                                <div class="feature-content">
                                                    <div class="product">
                                                        <a href="#"><i class="lni-folder"></i>
                                                            {{$own->catagory}} -- {{$own->subcatagory}}</a>
                                                    </div>
                                                    <h4><a
                                                            href="postdetails/{{$own->outletid}}">{{$own->outletname}}</a>
                                                    </h4>
                                                    <span>Last Updated: {{$own->updated_at}}</span>
                                                    <ul class="address">
                                                        <li>
                                                            <a href="#"><i
                                                                    class="lni-map-marker"></i>{{$own->city}},{{$own->district}},{{$own->state}}</a>
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
                                                    <div class="listing-bottom">
                                                        @if($own->status == 'Validated')
                                                        <h3 class="btn-verified price float-left"><i
                                                                class="lni-pointer-right"></i>Verified</h3>
                                                        @else
                                                        <h3 class="btn-verified price float-left"><i
                                                                class="lni-pointer-right"></i>Referred</h3>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach @endif
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="pagination-bar">

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
        <script src="js/myajax.js"></script>

    </body>

    <!-- Mirrored from preview.uideck.com/items/Knowhere-1.1/adlistinglist.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Mar 2019 06:13:50 GMT -->

    </html>