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
            <!-- <div class="container">

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
            </div> -->
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
                                    @isset($data)
                                    @foreach($data as $category)
                                    <li>
                                        <a
                                            href="/searchaction?_token={{csrf_token()}}&loc={{$loc}}&cat={{$category->Cat_id}}">
                                            <i class="lni-chevron-right-circle"></i> {{$category->catagory}} <span
                                                class="category-counter"></span>
                                        </a>
                                    </li>
                                    @endforeach
                                    @endisset
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
                                @isset($tpost)
                                <span>Showing (1 - 10 of {{$tpost}} results)</span>
                                @endisset
                            </div>

                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#grid-view"><i class="lni-grid"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#list-view"><i
                                            class="lni-list"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#map-view"><i class="lni-map"></i></a>
                                </li>
                                <li>
                                </li>
                            </ul>


                        </div>


                        <div class="adds-wrapper">

                            <div class="tab-content">
                                @if(!empty($successMsg))
                                <div class="alert alert-danger"> {{ $successMsg }}</div>
                                <div class="alert alert-success"><a href="{{$query}}" target="_blank"><strong>Click here
                                            to get more
                                            results</strong></a>
                                </div>
                                @endif
                                <div id="grid-view" class="tab-pane fade">
                                    <div class="row">
                                        @if(isset($post)) @foreach($post as $own)
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="featured-box">
                                                <figure>
                                                    <!-- {{-- <div class="icon">
                                                        <i class="lni-heart"></i>
                                                    </div> --}} -->
                                                    @php
                                                    $ii=0;
                                                    if (isset($own->outletid)) {
                                                    $images =
                                                    Illuminate\Support\Facades\DB::table('tbl_prof_images')->where('outletid',$own->outletid)->get();
                                                    foreach ($images as $i) {
                                                    $ii = $i->imgname;
                                                    }
                                                    }
                                                    @endphp
                                                    @if(!$ii==0)
                                                    <a href="#"><img class="img-fluid"
                                                            src="{{asset('/uploads')}}/{{$ii}}" alt=""></a>
                                                    @endif
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

                                <div id="map-view" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-12">

                                            <div id="map" style="/* display: flex; */width: 100%;height: 900px;">
                                            </div>
                                            <script
                                                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVtoU6ioC5PVtX8DeQD7ZWpy8AJvvmO9E"
                                                async defer>
                                            </script>


                                            <script type="text/javascript">
                                            var locations = @php
                                            if (isset($new)) {
                                                echo json_encode($new);
                                            }
                                            @endphp



                                            var map = new google.maps.Map(document.getElementById('map'), {
                                                zoom: 10,
                                                center: new google.maps.LatLng(9.591652242993,
                                                    76.531287431717),
                                                mapTypeId: google.maps.MapTypeId.ROADMAP
                                            });

                                            var infowindow = new google.maps.InfoWindow();

                                            var marker, i;

                                            for (i = 0; i < locations.length; i++) {
                                                marker = new google.maps.Marker({
                                                    position: new google.maps.LatLng(locations[i][1],
                                                        locations[
                                                            i][2]),
                                                    map: map
                                                });

                                                google.maps.event.addListener(marker, 'click', (function(marker,
                                                    i) {
                                                    return function() {
                                                        infowindow.setContent(locations[i][0]);
                                                        infowindow.open(map, marker);
                                                    }
                                                })(marker, i));
                                            }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="pagination-bar">
                                @isset($post)
                                {{ $post->appends($_GET)->links() }}
                                @endisset
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
            <script src="js/myajax.js"></script>



    </body>


    </html>