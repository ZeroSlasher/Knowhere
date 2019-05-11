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
    .fake-input {
        position: relative;
    }

    .fake-input input {
        display: block;
        width: 100%;
        box-sizing: border-box
    }

    .fake-input img {
        position: absolute;
        top: 28px;
        right: 10px;
        width: 10%;
    }
    </style>
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
                        <h2 class="product-title">Payments</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home /</a></li>
                            <li><a href="/myads">My ads /</a></li>
                            <li class="current">Payments</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="content" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-1 page-sidebar">

                </div>
                <div class="col-sm-12 col-md-8 col-lg-9">
                    <div class="page-content">
                        <div class="inner-box">

                            <div class="dashboard-wrapper">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-sx-12">
                                        <div class="order-details">
                                            <div class="dashboardboxtitle">
                                                <h2>Your Order</h2>
                                            </div>
                                            <div class="order_review mb-3">
                                                <table class="table table-responsive dashboardtable table-review-order">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-name">Product</th>
                                                            <th class="product-total">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @isset($detail)
                                                        @foreach($detail as $d)
                                                        <tr>
                                                            <td>
                                                                <p>Posting Ad for {{$d->outletname}}</p>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>Payee {{$d->name}}</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>Package selected: {{$d->pkg_name}}</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>Package amount: ₹ {{$d->amount}}</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>

                                                        <tr>
                                                            <th>Total</th>
                                                            <td>
                                                                <p class="price">₹ {{$d->amount}}</p>
                                                            </td>
                                                            @endforeach
                                                            @endisset
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-sx-12">
                                        <div class="dashboardboxtitle">
                                            <h2>Payment Method</h2>
                                        </div>
                                        <form method="POST" action="/dopayment" id="dopay">
                                            @csrf
                                            @isset($detail)
                                            @foreach($detail as $d)
                                            <input type="hidden" name="id" value="{{$d->ad_id}}">
                                            <input type="hidden" name="amount" value="{{$d->amount}}">

                                            @endforeach
                                            @endisset
                                            <div class="form-group mb-3">
                                                <label>Name on Card <sup>*</sup></label>
                                                <input name="cname" autocomplete="off" id="cname" placeholder="John doe"
                                                    class="form-control" type="text">
                                                <div id="nameerr" class="alert alert-danger"
                                                    style="align:center;display: none;">
                                                    <strong>Enter a valid name!!</strong>
                                                </div>
                                            </div>

                                            <div class="form-group mb-3 fake-input">
                                                <label>Credit Card Number </label>
                                                <input name="cc_number" autocomplete="off"
                                                    placeholder="1234 5678 9012 3456" id="cc_number"
                                                    class="form-control" type="text">
                                                <img id="cimg" src="" />

                                                <div id="carderr" class="alert alert-danger"
                                                    style="align:center;display: none;">
                                                    <strong>Enter a valid card!!</strong>
                                                </div>
                                            </div>

                                            <div class="form-group mb-3 tg-inputwithicon ">
                                                <input name="ctype" id="ctype" value="not specified"
                                                    class="form-control" type="hidden">

                                            </div>
                                            <div class="row"
                                                style="    margin-left: auto; display: -webkit-inline-box;">
                                                <div class="form-group">
                                                    <label>CVV<sup>*</sup></label>
                                                    <input autocomplete="off" class="form-control" width="30%"
                                                        placeholder="123" id="cvv" name="cvv" type="text">
                                                    <div id="cvverr" class="alert alert-danger"
                                                        style="align:center;display: none;">
                                                        <strong>invalid CVV!!</strong>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Expiry month
                                                        <sup>*</sup></label>
                                                    <input class="form-control" width="30%" placeholder="MM"
                                                        maxlength="2" autocomplete="off" id="expiry_month" name="month"
                                                        type="text">
                                                    <div id="mntherr" class="alert alert-danger"
                                                        style="align:center;display: none;">
                                                        <strong>Enter a valid month!!</strong>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Expiry year
                                                        <sup>*</sup></label>
                                                    <input class="form-control" width="30%" placeholder="YY"
                                                        maxlength="2" autocomplete="off" id="expiry_year" name="year"
                                                        type="text">
                                                    <div id="yearerr" class="alert alert-danger"
                                                        style="align:center;display: none;">
                                                        <strong>Enter a valid year!!</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card card--padding fill-bg">
                                                <table class="table-total-checkout">
                                                    <tbody>
                                                        <tr>
                                                            @isset($detail)
                                                            @foreach($detail as $d)
                                                            <th>GRAND TOTAL:</th>
                                                            <td>₹{{$d->amount}}</td>
                                                            @endforeach
                                                            @endisset
                                                        </tr>
                                                    </tbody>
                                                    <div id="head" class="alert alert-danger"
                                                        style="align:center;display: none;">
                                                        <strong>Enter all fields to continue!!</strong>
                                                </table>
                                                <button type="submit" value="" class="btn btn-common btn-full">Complete
                                                    payment Now</button>
                                        </form>

                                    </div>
                                </div>
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


    <script src="{{ asset('assets/js/jquery-min.js') }}"></script>
    <script src="{{ asset('js/jquery.creditCardValidator.js') }}"></script>

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
    <script src="{{ asset('js/payval.js')}}"></script>

    <script>

    </script>


</body>


</html>