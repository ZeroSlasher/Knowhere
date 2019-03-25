<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Knowhere</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="    {{ asset('assets/fonts/line-icons.css')}}">

    <link rel="stylesheet" type="text/css" href="    {{ asset('assets/css/slicknav.css')}}">

    <link rel="stylesheet" type="text/css" href="    {{ asset('assets/css/color-switcher.css')}}">

    <link rel="stylesheet" type="text/css" href="    {{ asset('assets/css/nivo-lightbox.css')}}">

    <link rel="stylesheet" type="text/css" href="    {{ asset('assets/css/animate.css')}}">

    <link rel="stylesheet" type="text/css" href="    {{ asset('assets/css/owl.carousel.css')}}">

    <link rel="stylesheet" type="text/css" href="    {{ asset('assets/css/main.css')}}">

    <link rel="stylesheet" type="text/css" href="    {{ asset('assets/css/responsive.css')}}">
</head>

<body>

    <header id="header-wrap">

        @include('inc.outer.forgotpwd_head')

    </header>


    <div class="page-header" style="background: url({{ asset('assets/img/banner1.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Forgot Password</h2>
                        <ol class="breadcrumb">
                            <li><a href="/">Home /</a></li>
                            <li class="current">Forgot Password</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-12 col-xs-12">
                    <div class="forgot login-area">
                        <h3>
                            Reset Password
                        </h3>
                        <form role="form" method="POST" action="/password/reset" class="login-form">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            @if (count($errors) > 0)
                            <ul>
                                @foreach ($errors->all() as $error)
                                <div id="head" class="alert alert-danger">
                                    <strong>{{ $error }}</strong>
                                </div>
                                @endforeach
                            </ul>
                            @endif
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-envelope"></i>
                                    <input type="email" id="email" class="form-control" name="email"
                                        placeholder="Email">
                                </div>
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-lock"></i>
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-lock"></i>
                                    <input type="password" id="password_confirmation" class="form-control"
                                        name="password_confirmation" placeholder="Confirm Password">
                                </div>
                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-common log-btn">Reset Password</button>
                            </div>
                            <div class="form-group mt-4">
                                <ul class="form-links">

                                    <li class="float-left"><a href="/">Don't have an account?</a></li>
                                    <li class="float-right"><a href="/">Back to Login</a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


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