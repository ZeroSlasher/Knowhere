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

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nivo-lightbox.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

    <style>
    .comment-wrapper .panel-body {
        max-height: inherit;
        max-width: inherit;
        flex-grow: inherit;
        overflow: inherit;
    }

    .comment-wrapper .media-list .media img {
        width: 64px;
        height: 64px;
        border: 2px solid #e5e7e8;
    }

    .comment-wrapper .media-list .media {
        border-bottom: 1px dashed #efefef;
        margin-bottom: 25px;
    }

    .modal-body:not(.two-col) {
        padding: 0px
    }

    .glyphicon {
        margin-right: 5px;
    }

    .glyphicon-new-window {
        margin-left: 5px;
    }

    .modal-body .radio,
    .modal-body .checkbox {
        margin-top: 0px;
        margin-bottom: 0px;
    }

    .modal-body .list-group {
        margin-bottom: 0;
    }

    .margin-bottom-none {
        margin-bottom: 0;
    }

    .modal-body .radio label,
    .modal-body .checkbox label {
        display: block;
    }

    .modal-footer {
        margin-top: 0px;
    }

    @media screen and (max-width: 325px) {
        .btn-close {
            margin-top: 5px;
            width: 100%;
        }

        .btn-results {
            margin-top: 5px;
            width: 100%;
        }

        .btn-vote {
            margin-top: 5px;
            width: 100%;
        }

    }

    .modal-footer .btn+.btn {
        margin-left: 0px;
    }

    .progress {
        margin-right: 10px;
    }
    </style>
    <style>
    /****** Rating Starts *****/
    @import "{{ asset('fonts/font-awesome/css/font-awesome.min.css')}}";

    fieldset,
    label {
        margin: 0;
        padding: 0;
    }


    .rating {
        border: none;
        float: left;
    }

    .rating>input {
        display: none;
    }

    .rating>label:before {
        margin: 5px;
        font-size: 1.25em;
        font-family: FontAwesome;
        display: inline-block;
        content: "\f005";
    }

    .rating>.half:before {
        content: "\f089";
        position: absolute;
    }

    .rating>label {
        color: #ddd;
        float: right;
    }

    .rating>input:checked~label,
    .rating:not(:checked)>label:hover,
    .rating:not(:checked)>label:hover~label {
        color: #FFD700;
    }

    .rating>input:checked+label:hover,
    .rating>input:checked~label:hover,
    .rating>label:hover~input:checked~label,
    .rating>input:checked~label:hover~label {
        color: #FFED85;
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


    <div class="page-header" style="background: url({{ asset('assets/img/banner1.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Post Details</h2>
                        <ol class="breadcrumb">
                            <li><a href="/">Home /</a></li>
                            <li><a href=" javascript:history.go(-1)">Search /</a></li>
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




                                    <img src="/uploads/{{$ii}}" style="height: ">





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
                            <div class="row">
                                <div class="form-control" style="width: fit-content;height: fit-content;"> Total Rating:
                                    <label class="text-info">{{$fin_rating}}<label><i
                                                class="lni-star-filled text-warning"></i>
                                </div>
                                @if($own->status == 'Validated')
                                <h5 class="btn-info price"><i class="lni-pointer-right"></i>Verified
                                </h5>
                                @elseif($own->status == 'invalidated')
                                <h5 class="btn-info price"><i class="lni-pointer-right"></i>Reffered
                                </h5>
                                @endif
                            </div>
                            <p class="mb-2">{{$own->otitle}}</p>
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
                                @foreach($service as $s)
                                <li><i class="lni-check-mark-circle"></i>{{$s->service}}</li>
                                @endforeach
                            </ul>
                        </div>
                        <ul class="advertisement mb-4">
                            <li>
                                <p><strong><i class="lni-folder"></i> Category:</strong> <a href="#">{{$own->catagory}}
                                        -- {{$own->subcatagory}}</a>
                                </p>
                            </li>

                        </ul>
                        <div class="ads-btn mb-4">
                            <a href="#" class="btn btn-common btn-reply"><i class="lni-envelope"></i>
                                {{$own->oemail}}</a>
                            <a href="#" class="btn btn-common"><i class="lni-phone-handset"></i> {{$own->phone1}}</a>
                        </div>
                        <div class="share">
                            <span>Share: </span>
                            <div class="social-link">
                                <a class="facebook" href=""><i class="lni-facebook-filled"></i></a>
                                <a class="twitter" href=""><i class="lni-twitter-filled"></i></a>
                                <a class="linkedin" href=""><i class="lni-linkedin-fill"></i></a>
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
                    <div class="col-lg-4 col-md-6 col-xs-12" style="    height: 350px;">

                        <div id="map" style="height: 100%;"></div>
                        <script>
                        function initMap() {
                            var myLatLng = {
                                lat: @php
                                if (isset($lat)) {
                                    echo json_encode($lat);
                                }
                                @endphp,
                                lng: @php
                                if (isset($lng)) {
                                    echo json_encode($lng);
                                }
                                @endphp,
                            };

                            var map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 18,
                                center: myLatLng,
                            });

                            var marker = new google.maps.Marker({
                                position: myLatLng,
                                map: map,
                                title: @php
                                if (isset($adr)) {
                                    echo json_encode($adr);
                                }
                                @endphp
                            });
                            google.maps.event.addListener(marker, 'click', (function() {
                                // window.location.href = "http://maps.google.com";
                                var s1 = "https://www.google.com/maps/search/?api=1&query=";
                                s1 += @php
                                if (isset($adr)) {
                                    echo json_encode($adr);
                                }
                                @endphp

                                window.open(s1);


                            }));
                        }
                        </script>
                        <script async defer
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVtoU6ioC5PVtX8DeQD7ZWpy8AJvvmO9E&callback=initMap">
                        </script>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-8 col-md-6 col-xs-12">
                        <div class="comment-wrapper description">
                            <div class="panel panel-info">
                                @include('inc.message')

                                <div class="short-info">
                                    @foreach($post as $p)
                                    <h4>Rate and review {{$p->outletname}}</h4>
                                    @endforeach
                                    <!-- if session is there -->
                                    <div class="panel-body">
                                        @if(!Session::get('id'))
                                        <form method="post" action="/addreview" id="freview">
                                            @else
                                            <form method="post" action="/addreview" id="freviews">
                                                @endif
                                                @csrf
                                                <div class="row">
                                                    <div class="form-control" style="width: max-content;height: 50px;">
                                                        <fieldset id='star_rating' class="rating">
                                                            <input class="stars" type="radio" id="star5" name="rating"
                                                                value="5" />
                                                            <label class="full" for="star5"
                                                                title="Awesome - 5 stars"></label>
                                                            <input class="stars" type="radio" id="star4half"
                                                                name="rating" value="4.5" />
                                                            <label class="half" for="star4half"
                                                                title="Pretty good - 4.5 stars"></label>
                                                            <input class="stars" type="radio" id="star4" name="rating"
                                                                value="4" />
                                                            <label class="full" for="star4"
                                                                title="Pretty good - 4 stars"></label>
                                                            <input class="stars" type="radio" id="star3half"
                                                                name="rating" value="3.5" />
                                                            <label class="half" for="star3half"
                                                                title="Meh - 3.5 stars"></label>
                                                            <input class="stars" type="radio" id="star3" name="rating"
                                                                value="3" />
                                                            <label class="full" for="star3"
                                                                title="Meh - 3 stars"></label>
                                                            <input class="stars" type="radio" id="star2half"
                                                                name="rating" value="2.5" />
                                                            <label class="half" for="star2half"
                                                                title="Kinda bad - 2.5 stars"></label>
                                                            <input class="stars" type="radio" id="star2" name="rating"
                                                                value="2" />
                                                            <label class="full" for="star2"
                                                                title="Kinda bad - 2 stars"></label>
                                                            <input class="stars" type="radio" id="star1half"
                                                                name="rating" value="1.5" />
                                                            <label class="half" for="star1half"
                                                                title="Meh - 1.5 stars"></label>
                                                            <input class="stars" type="radio" id="star1" name="rating"
                                                                value="1" />
                                                            <label class="full" for="star1"
                                                                title="Sucks big time - 1 star"></label>
                                                            <input class="stars" type="radio" id="starhalf"
                                                                name="rating" value="0.5" />
                                                            <label class="half" for="starhalf"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                        </fieldset>
                                                    </div>
                                                    <div class="form-control" style="    width: fit-content;">
                                                        Total rating:<label class="text-info"> {{$fin_rating}}</label><i
                                                            class="lni-star-filled text-warning"></i>

                                                    </div>
                                                </div>
                                                @isset($post) @foreach($post as $own)
                                                <input type="text" hidden value="{{$own->outletid}}" name="id" id="id">
                                                @endforeach @endisset
                                                <input type="text" class="form-control" autocomplete="off"
                                                    placeholder="Title" id="title" name="title" style="margin:5px">
                                                <textarea class="form-control" id="review" autocomplete="off"
                                                    name="review" placeholder="write a comment..."></textarea>
                                                @if(!Session::get('id'))
                                                <div class="">
                                                    <input type="email" class="form-control" autocomplete="off"
                                                        placeholder="email" name="email" id="email" style="margin:5px;">




                                                    <div id="p22" class="alert alert-danger"
                                                        style="align:center;display: none;">
                                                        <strong>Enter a valid email</strong>
                                                    </div>
                                                    <div id="p222" class="alert alert-warning" style="display: none;">
                                                        <strong>Email verification failed</strong>
                                                    </div>
                                                    <div id="vwarn1" class="alert alert-danger"
                                                        style="align:center;display: none;">
                                                        <strong>Verification code is incorrect!!</strong>
                                                    </div>
                                                    <div id="vs" class="alert alert-danger"
                                                        style="align:center;display: none;">
                                                        <strong>Verification successfull!!</strong>
                                                    </div>
                                                    <div id="vwarn" class="alert alert-danger"
                                                        style="align:center;display: none;">
                                                        <strong>Enter code to continue!!</strong>
                                                    </div>
                                                    <div id="ack" class="alert alert-info"
                                                        style="align:center;display: none;">
                                                        <strong>A verification code has been sent to your email, enter
                                                            it here to continuoue!!</strong>
                                                    </div>
                                                    <input type="text" class="form-control" autocomplete="off"
                                                        placeholder="name" id="name" name="name">
                                                    @endif

                                                    <!-- <div class="captcha">
                                                    <span>{!!captcha_img()!!}</span>
                                                    <button type="button" class="btn btn-success"><i
                                                            class="fa fa-refresh" id="refresh"></i></button>
                                                </div>
                                                <input id="captcha" type="text" class="form-control"
                                                    placeholder="Enter Captcha" name="captcha"> -->
                                                </div>
                                                <div id="head" class="alert alert-danger"
                                                    style="align:center;display: none;">
                                                    <strong>Enter all fields to post review!!</strong>
                                                </div>
                                                <div id="namer" class="alert alert-danger"
                                                    style="align:center;display: none;">
                                                    <strong>Enter a valid name!!</strong>
                                                </div>
                                                <input type="text" autocomplete="off" placeholder="Verification code"
                                                    id="vcodebox" class="form-control"
                                                    style="margin:5px;width:50%;display: none;">


                                                <button id="vbutton" class="btn btn-warning"
                                                    style="margin:5px;display: none;" type="button">verify</button>
                                                <input type="hidden" id="s" value="0">
                                                <button type="submit" class="btn btn-info pull-right" style="margin:5px"
                                                    id="postr">Post</button>

                                            </form>
                                            <!-- close if -->

                                            <ul class="media-list" style="margin-top: 55px;">
                                                @isset($review)
                                                @foreach($review as $r)
                                                <li class="media">

                                                    <a href="#" class="pull-left">
                                                        <img src="{{asset('images/user_1.jpg')}}" alt=""
                                                            class="img-circle">
                                                    </a>
                                                    <div class="media-body" style="    margin-left: 20px;">
                                                        <span class="text-muted pull-right">
                                                            <small class="text-muted">Posted on:
                                                                {{$r->updated_at}}</small>
                                                        </span>
                                                        <label>Reviewed by: </label><strong class="text-success">
                                                            {{$r->name}}</strong>
                                                        &nbsp;&nbsp;
                                                        <label>Rated: </label><strong class="text-info">
                                                            {{$r->rating}}</strong><i
                                                            class="lni-star-filled text-warning"></i>

                                                        <p class="text-info">{{$r->title}}</p>
                                                        <h6>
                                                            {{$r->review}}
                                                        </h6>
                                                    </div>
                                                </li>
                                                @endforeach
                                                @endisset
                                                {{$review->links()}}
                                            </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12" style="margin-top:5%;">
                        <div class="short-info">
                            <h4>Short info</h4>
                            <ul>
                                <li><i class="lni-users"></i><a>Posted by <span>{{$own->name}}</a></span>
                                </li>

                                <li><i class="lni-reply"></i><a href="https://www.addtoany.com/share"></i>Send
                                        to a friend</a></li>

                                <li><i class="lni-warning"></i><a data-toggle="modal" data-target="#report"
                                        data-id="{{$own->outletid}}">Report this ad</a></li>

                                <li><i class="lni-warning"></i><a data-toggle="modal" data-oid="{{$own->outletid}}"
                                        data-uid="{{$own->id}}" data-target="#contact">Suggest an
                                        edit</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="report" tabindex="-1" data-backdrop="true" role="dialog" aria-labelledby="voteLabel"
        aria-hidden="true" style="padding-top: 200px;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="panel panel-primary" style="border-radius: 15px">
                    <div class="panel-heading bg-primary modal-header text-center">
                        <h5 id="contactLabel" style="color:white;"></span>Report this post.</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <form method="POST" action="" id="reportform">
                        @csrf
                        <div class="modal-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="reason"
                                                value="Uncivil, unneighborly or offensive">
                                            Uncivil, unneighborly or offensive
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="reason" value="Not relevant or annoying">
                                            Not relevant or annoying
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="reason" value="Safety issue or illegal">
                                            Safety issue or illegal
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="reason" value="Posted in error">
                                            Posted in error
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="reason" value="other">
                                            Other reasons
                                        </label>
                                    </div>
                                </li>
                                @if(!Session::get('id'))
                                <ul class="list-group">
                                    <li>
                                        <div class="bg-info"
                                            style="margin-left: 20px;margin: 10px;background-color:dodgerblue;">
                                            <h6 class="panel-title" id="contactLabel"
                                                style="color:white;margin-left:10px">Your details.
                                            </h6>
                                        </div>
                                    </li>
                                    <li style="padding: .75rem 1.25rem;margin-bottom: -1px;background-color: #fff;">
                                        <div style="    margin-right: 10px;">
                                            <input class="form-control" id="rpmail" name="rpmail" placeholder="Email"
                                                type="email" required>
                                            <input type="hidden" id="s1" value="0">
                                        </div>
                                    </li>
                                    <li style="background-color: #fff; padding: .75rem 1.25rem;margin-bottom: -1px;">
                                        <div style="    margin-right: 10px;">
                                            <input class="form-control" name="Name" placeholder="Name" type="text"
                                                required>
                                        </div>
                                    </li>

                                    <li style="padding: .75rem 1.25rem;margin-bottom: -1px;background-color: #fff;">
                                        <div id="ackr" class="alert alert-info" style="align:center;display: none;">
                                            <strong>A verification code has been sent to your email, enter
                                                it here to continuoue!!</strong>
                                        </div>
                                        <input type="text" autocomplete="off" placeholder="Verification code"
                                            id="vcodeboxr" class="form-control"
                                            style="margin:5px;width:50%;display: none;">
                                        <button id="vbuttonr" class="btn btn-warning" style="margin:5px;display: none;"
                                            type="button">verify</button>
                                        <div id="p222r" class="alert alert-warning" style="display: none;">
                                            <strong>Email verification failed</strong>
                                        </div>
                                        <div id="vwarnr" class="alert alert-danger" style="align:center;display: none;">
                                            <strong>Enter code to continue!!</strong>
                                        </div>
                                        <div id="p22r" class="alert alert-danger" style="align:center;display: none;">
                                            <strong>Enter a valid email</strong>
                                        </div>
                                        <div id="vwarn1r" class="alert alert-danger"
                                            style="align:center;display: none;">
                                            <strong>Verification code is incorrect!!</strong>
                                        </div>
                                        <div id="vsr" class="alert alert-danger" style="align:center;display: none;">
                                            <strong>Verification successfull!!</strong>
                                        </div>
                                    </li>
                                    @endif
                                    <li style="background-color: #fff;padding: .75rem 1.25rem;margin-bottom: -1px;">
                                        <div class="modal-footer">
                                            <button type="submit" id="reportsub" class="btn btn-primary btn-results"
                                                id="drop">Report</button>
                                            <button type="button" class="btn btn-default btn-close"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </li>
                                </ul>

                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="contact" tabindex="-1" data-backdrop="true" role="dialog" aria-labelledby="contactLabel"
        aria-hidden="true" style="padding-top: 200px;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="panel panel-primary" style="    background-color: white;padding: 30px;border-radius: 5px;">
                    <div class="panel-heading bg-primary modal-header text-center">
                        <h5 class="panel-title" id="contactLabel" style="color:white;"><span
                                class="glyphicon glyphicon-info-sign"></span>Suggest
                            an edit for this post.</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <form action="" method="post" id="sugform">
                        @csrf
                        <div class="modal-body" style="padding: 5px;">
                            <input type="hidden" name="uid" id="uid" value="">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                    <input class="form-control" name="name" placeholder="Name" type="text" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                    <input class="form-control" name="smail" id="smail" placeholder="E-mail" type="text"
                                        required>
                                    <input type="hidden" id="s2" value="0">

                                    <div id="acks" class="alert alert-info" style="align:center;display: none;">
                                        <strong>A verification code has been sent to your email, enter
                                            it here to continuoue!!</strong>
                                    </div>
                                    <input type="text" autocomplete="off" placeholder="Verification code" id="vcodeboxs"
                                        class="form-control" style="margin:5px;width:50%;display: none;">
                                    <button id="vbuttons" class="btn btn-warning" style="margin:5px;display: none;"
                                        type="button">verify</button>
                                    <div id="p222s" class="alert alert-warning" style="display: none;">
                                        <strong>Email verification failed</strong>
                                    </div>
                                    <div id="vwarns" class="alert alert-danger" style="align:center;display: none;">
                                        <strong>Enter code to continue!!</strong>
                                    </div>
                                    <div id="p22s" class="alert alert-danger" style="align:center;display: none;">
                                        <strong>Enter a valid email</strong>
                                    </div>
                                    <div id="vwarn1s" class="alert alert-danger" style="align:center;display: none;">
                                        <strong>Verification code is incorrect!!</strong>
                                    </div>
                                    <div id="vss" class="alert alert-danger" style="align:center;display: none;">
                                        <strong>Verification successfull!!</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                    <input class="form-control" name="subject" placeholder="Subject" type="text"
                                        required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <textarea style="resize:vertical;" class="form-control" placeholder="Message..."
                                        rows="6" name="comment" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer" style="margin-bottom:-14px;">
                            <input type="submit" id="suggestbtn" class="btn btn-success" value="Send" />
                            <button type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</button>
                        </div>
                    </form>
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
    <script src="{{ asset('js/formvalidate3.js')}}"></script>

    <script>
    $('#report').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');

        $('#reportform').attr("action", "{{ url('/report') }}" + "/" + id);
    });
    </script>

    <script>
    $('#contact').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var id = button.data('oid');
        var uid = button.data('uid');

        $('#sugform').attr("action", "{{ url('/suggest') }}" + "/" + id);
        $('#uid').val(uid);
    });
    </script>

    <script>
    $(document).ready(function() {
        $("#star_rating .stars").click(function() {
            $(this).attr("checked");
        });
    });

    $('.stars').change(function(e) {

        var label = $("label[for='" + $(this).attr('id') + "']")[0].title;
        $('#title').val(label);
    });
    </script>

</body>

</html>
