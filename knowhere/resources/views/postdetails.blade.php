@php
Session::put('idu','aa');
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Knowhere</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/line-icons.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slicknav.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-switcher.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nivo-lightbox.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">


</head>

<body>

    <header id="header-wrap">

        @if(Session::get('uid'))
        @include('inc.admin.admindash_head')
        @else
        @include('inc.outer.header')
        @endif

    </header>


    <div class="page-header" style="background: url({{ asset('assets/img/banner1.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Details</h2>
                        <ol class="breadcrumb">
                            <li><a href="/">Home /</a></li>
                            <li><a href=" javascript:history.go(-1)">Listings /</a></li>
                            <li class="current">Details </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section-padding">
        <div class="container">
            @isset($post) @foreach($post as $own)
            <div class="product-info row">
                <div class="col-lg-7 col-md-12 col-xs-12">
                    <div class="details-box ads-details-wrapper">
                        <div id="owl-demo" class="owl-carousel owl-theme">
                            @php

                            if (isset($own->outletid)) {
                            $images =
                            Illuminate\Support\Facades\DB::table('tbl_prof_images')->where('outletid',$own->outletid)->get();
                            foreach ($images as $i) {
                            $ii = $i->imgname;
                            @endphp
                            <div class="item">

                                <div class="product-img">




                                    <img src="/uploads/{{$ii}}">





                                </div>

                            </div>
                            @php
                            }
                            }
                            @endphp
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-xs-12">
                    <div class="details-box">
                        <div class="ads-details-info">
                            <h2>{{$own->outletname}}</h2>
                            <p class="mb-2">Give an appropriate intro. This field is not yet given in table.</p>
                            <div class="details-meta">
                                <span><a href="#"><i class="lni-alarm-clock"></i>Last Updated:
                                        {{$own->updated_at}}</a></span>
                                <span><a href="#"><i
                                            class="lni-map-marker"></i>{{$own->city}},{{$own->district}},{{$own->state}}</a></span>
                                <br>
                                <span><a href="#"><i class="lni-user"></i>
                                        {{$own->ownername}}</a></span>
                                <span><a href="#"><i class="lni-home"></i>
                                        {{$own->address}}</a></span>
                                <br>
                                <span> <a href="#"><i class="lni-phone-handset"></i>
                                        {{$own->phone1}}</a></span>

                                <span><a href="#"><i class="lni-phone-handset"></i>
                                        {{$own->phone2}}</a></span>

                            </div>
                            <h4 class="title-small mb-3">Services Provided:</h4>
                            <ul class="list-specification">

                                <li><i class="lni-check-mark-circle"></i>{{$own->Service_id}}</li>

                            </ul>
                        </div>
                        <ul class="advertisement mb-4">
                            <li>
                                <p><strong><i class="lni-folder"></i> Category:</strong> <a href="#">{{$own->catagory}}
                                        -- {{$own->subcatagory}}</a>
                                </p>
                            </li>
                            <li>
                                <h3 class="btn-verified price"><i class="lni-pointer-right"></i>Verified</h3>
                            </li>
                        </ul>
                        <div class="ads-btn mb-4">
                            <a href="#" class="btn btn-common btn-reply"><i class="lni-envelope"></i> Email</a>
                            <a href="#" class="btn btn-common"><i class="lni-phone-handset"></i> 01154256643</a>
                        </div>
                        <div class="share">
                            <span>Share: </span>
                            <div class="social-link">
                                <a class="facebook" href=""><i class="lni-facebook-filled"></i></a>
                                <a class="twitter" href=""><i class="lni-twitter-filled"></i></a>
                                <a class="linkedin" href=""><i class="lni-linkedin-fill"></i></a>
                                <a class="google" href=""><i class="lni-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="description-info">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-xs-12">
                        <div class="description">
                            <h4>Description</h4>
                            <p>{!!$own->description!!}</p>
                        </div>
                    </div>
                    @endforeach @endisset
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="short-info">
                            <h4>Short Info</h4>
                            <ul>
                                <li><i class="lni-users"></i> More postings by <span><a>{{$own->name}}</a></span></li>
                                <li><i class="lni-printer"></i> Print this ad</li>
                                <li><i class="lni-reply"></i> Send to a friend</li>
                                <li><i class="lni-warning"></i> Report this ad</li>
                            </ul>
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


    <script src="{{ asset('assets/js/jquery-min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/color-switcher.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/nivo-lightbox.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('assets/js/contact-form-script.min.js') }}"></script>
    <script src="{{ asset('assets/js/summernote.js') }}"></script>
</body>

</html>