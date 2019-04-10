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
                            <div class="row">
                                <div class="form-control" style="width: fit-content;height: fit-content;"> Total Rating: <label
                                        class="text-info">{{$fin_rating}}<label><i
                                                class="lni-star-filled text-warning"></i>
                                </div>
                                @if($own->status == 'validated')
                                <h5 class="btn-info price"><i class="lni-pointer-right"></i>Verified
                                </h5>
                                @else
                                <h5 class="btn-info price"><i class="lni-pointer-right"></i>Reffered
                                </h5>
                                @endif
                            </div>
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
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="short-info">
                            <h4>Short Info</h4>
                            <ul>
                                <li><i class="lni-users"></i> More postings by <span><a>{{$own->name}}</a></span></li>
                                <li><i class="lni-reply"></i> Send to a friend</li>
                                <li><i class="lni-warning"></i> Report this ad</li>
                            </ul>
                        </div>
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
                                        <form method="post" action="/addreview">
                                            @csrf
                                            <div class="row" style="display: -webkit-box;">
                                                <div class="form-control" style="width: max-content;height: 50px;">
                                                    <fieldset id='star_rating' class="rating">
                                                        <input class="stars" type="radio" id="star5" name="rating"
                                                            value="5" />
                                                        <label class="full" for="star5"
                                                            title="Awesome - 5 stars"></label>
                                                        <input class="stars" type="radio" id="star4half" name="rating"
                                                            value="4.5" />
                                                        <label class="half" for="star4half"
                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input class="stars" type="radio" id="star4" name="rating"
                                                            value="4" />
                                                        <label class="full" for="star4"
                                                            title="Pretty good - 4 stars"></label>
                                                        <input class="stars" type="radio" id="star3half" name="rating"
                                                            value="3.5" />
                                                        <label class="half" for="star3half"
                                                            title="Meh - 3.5 stars"></label>
                                                        <input class="stars" type="radio" id="star3" name="rating"
                                                            value="3" />
                                                        <label class="full" for="star3" title="Meh - 3 stars"></label>
                                                        <input class="stars" type="radio" id="star2half" name="rating"
                                                            value="2.5" />
                                                        <label class="half" for="star2half"
                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input class="stars" type="radio" id="star2" name="rating"
                                                            value="2" />
                                                        <label class="full" for="star2"
                                                            title="Kinda bad - 2 stars"></label>
                                                        <input class="stars" type="radio" id="star1half" name="rating"
                                                            value="1.5" />
                                                        <label class="half" for="star1half"
                                                            title="Meh - 1.5 stars"></label>
                                                        <input class="stars" type="radio" id="star1" name="rating"
                                                            value="1" />
                                                        <label class="full" for="star1"
                                                            title="Sucks big time - 1 star"></label>
                                                        <input class="stars" type="radio" id="starhalf" name="rating"
                                                            value="0.5" />
                                                        <label class="half" for="starhalf"
                                                            title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="form-control" style="    width: fit-content;">
                                                    Total rating:<label class="text-info"> {{$fin_rating}}<label><i
                                                                class="lni-star-filled text-warning"></i>

                                                </div>
                                            </div>
                                            @isset($post) @foreach($post as $own)
                                            <input type="text" hidden value="{{$own->outletid}}" name="id">
                                            @endforeach @endisset
                                            <input type="text" class="form-control" placeholder="Title" id="title"
                                                name="title" style="margin:5px">
                                            <textarea class="form-control" name="review"
                                                placeholder="write a comment..."></textarea>
                                            @if(!Session::get('id'))
                                            <input type="email" class="form-control" placeholder="email" name="email"
                                                style="margin:5px">
                                            <input type="text" class="form-control" placeholder="name" name="name">
                                            @endif
                                            <button type="submit" class="btn btn-info pull-right"
                                                style="margin:5px">Post</button>
                                        </form>
                                        <!-- close if -->

                                        <ul class="media-list" style="margin-top: 55px;">
                                            @isset($review)
                                            @foreach($review as $r)
                                            <li class="media">

                                                <a href="#" class="pull-left">
                                                    <img src="{{asset('images/user_1.jpg')}}" alt="" class="img-circle">
                                                </a>
                                                <div class="media-body" style="    margin-left: 20px;">
                                                    <span class="text-muted pull-right">
                                                        <small class="text-muted">Posted on: {{$r->updated_at}}</small>
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
                    <div class="col-lg-4 col-md-6 col-xs-12">

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