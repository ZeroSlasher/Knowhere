<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Knowhere</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/line-icons.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slicknav.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-switcher.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nivo-lightbox.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/summernote.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>

    <header id="header-wrap">
    @include('inc.admin.admindash_head')


    </header>


    <div class="page-header" style="background: url({{ asset('assets/img/banner1.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Delete Post</h2>
                        <ol class="breadcrumb">
                            <li><a href="/">Home /</a></li>
                            <li class="current">Delete Post</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-12 col-xs-12">
                    <div class="login-area">
                        <h3><i class="lni-close"></i> Delete your Post </h3>
                        <div class="close-account">
                            <p>You are sure you want to Delete your Post?</p>
                            @isset($del) @foreach($del as $d)
                            <p>Outlet name: {{$d->outletname}}</p>
                            <p>Added by: {{$d->name}}</p>
                            <p>Added on: {{$d->created_at}}</p>

                            <form action="/removepost" method="post" id="deletepost">
                                @csrf 
                                <input type="text" name="id" hidden value="{{$d->outletid}}">
                                <label class="radio-inline">
                                <input name="Radio" value="1" type="radio"> Yes</label>
                                <label class="radio-inline">
                                <input name="Radio" value="2" type="radio"> No</label>
                                <br><br>
                                <button type="submit" class="btn btn-danger">Delete Post</button>
                            </form>
                            @endforeach @endisset
                            <br>
                            <button style="margin-left: 5px;" class="btn btn-basic"><a href="javascript:history.back()" class="btn-basic"><i class="lni-thumbs-down"></i>
                                Cancel</a></button>
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