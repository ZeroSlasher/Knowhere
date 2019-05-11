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

    <style>
    *:before,
    *:after {
        box-sizing: border-box;
    }




    .containers {
        margin: 4% auto;
        width: 210px;
        height: 140px;
        position: relative;
        perspective: 1000px;
    }

    #carousel {
        width: 100%;
        height: 100%;
        position: absolute;
        transform-style: preserve-3d;
        animation: rotation 20s infinite linear;
    }

    #carousel:hover {
        animation-play-state: paused;
    }

    #carousel figure {
        display: block;
        position: absolute;
        width: 186px;
        height: 116px;
        left: 10px;
        top: 10px;
        background: black;
        overflow: hidden;
        border: solid 5px black;
    }

    #carousel figure:nth-child(1) {
        transform: rotateY(0deg) translateZ(288px);
    }

    #carousel figure:nth-child(2) {
        transform: rotateY(40deg) translateZ(288px);
    }

    #carousel figure:nth-child(3) {
        transform: rotateY(80deg) translateZ(288px);
    }

    #carousel figure:nth-child(4) {
        transform: rotateY(120deg) translateZ(288px);
    }

    #carousel figure:nth-child(5) {
        transform: rotateY(160deg) translateZ(288px);
    }

    #carousel figure:nth-child(6) {
        transform: rotateY(200deg) translateZ(288px);
    }

    #carousel figure:nth-child(7) {
        transform: rotateY(240deg) translateZ(288px);
    }

    #carousel figure:nth-child(8) {
        transform: rotateY(280deg) translateZ(288px);
    }

    #carousel figure:nth-child(9) {
        transform: rotateY(320deg) translateZ(288px);
    }

    .imgs {
        width: inherit;
        height: -webkit-fill-available;
        transition: all .5s ease;
    }

    .imgs:hover {
        -webkit-filter: grayscale(0);
        transform: scale(1.2, 1.2);
    }

    @keyframes rotation {
        from {
            transform: rotateY(0deg);
        }

        to {
            transform: rotateY(360deg);
        }
    }
    </style>
    <style>
    /* Style the Image Used to Trigger the Modal */
    #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    #myImg:hover {
        opacity: 0.7;
    }

    /* The Modal (background) */
    .imgmdl {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
    }

    /* Modal Content (Image) */
    .contents {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }

    /* Caption of Modal Image (Image Text) - Same Width as the Image */
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }

    /* Add Animation - Zoom in the Modal */
    .contents,
    #caption {
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @keyframes zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    /* The Close Button */
    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px) {
        .contents {
            width: 100%;
        }
    }
    </style>
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


                        <ul class=" nav nav-tabs">
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
                    <div class="col-lg-9 col-md-12 col-xs-12">
                        <div class="containers">
                            <div id="carousel">
                                @isset($ads)
                                @foreach($ads as $ad)
                                <figure><img class="imgs" id="myImg" src="/uploads/ads/{{$ad->ad_content}}" alt="">
                                </figure>
                                @endforeach
                                @endisset
                            </div>
                        </div>
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
                                                <a href="#"><img class="img-fluid" src="{{asset('/uploads')}}/{{$ii}}"
                                                        alt=""></a>
                                                @endif
                                            </figure>
                                            <div class="feature-content">
                                                <div class="product">
                                                    <a href="#"><i class="lni-folder"></i>
                                                        {{$own->catagory}} -- {{$own->subcatagory}}</a>
                                                </div>
                                                <h4><a href="postdetails/{{$own->outletid}}">{{$own->outletname}}</a>
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

                                                <a href="#"><img class="img-fluid" src="{{asset('/uploads')}}/{{$ii}}"
                                                        style="width:100%" alt=""></a>
                                            </figure>
                                            <div class="feature-content">
                                                <div class="product">
                                                    <a href="#"><i class="lni-folder"></i>
                                                        {{$own->catagory}} -- {{$own->subcatagory}}</a>
                                                </div>
                                                <h4><a href="postdetails/{{$own->outletid}}">{{$own->outletname}}</a>
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
        <div id="myModal" class="imgmdl" style="display: none;">
            <img class="contents" id="img01">
            <button type="button" class="btn btn-danger" id="close" style="margin-inline-start: 55em;">x</button>

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

        <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('myImg');
        var modalImg = document.getElementById("img01");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = img.src;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementById("close");

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
        </script>

</body>


</html>
