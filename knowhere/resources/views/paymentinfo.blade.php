<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
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

    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <style type="text/css">
    body {
        font-family: 'Varela Round', sans-serif;
    }

    .modal-confirm {
        color: #636363;
        width: 400px;
    }

    .modal-confirm .modal-content {
        padding: 20px;
        border-radius: 5px;
        border: none;
        text-align: center;
        font-size: 14px;
    }

    .modal-confirm .modal-header {
        border-bottom: none;
        position: relative;
    }

    .modal-confirm h4 {
        text-align: center;
        font-size: 26px;
        margin: 30px 0 -10px;
    }

    .modal-confirm .close {
        position: absolute;
        top: -5px;
        right: -2px;
    }

    .modal-confirm .modal-body {
        color: #999;
    }

    .modal-confirm .modal-footer {
        border: none;
        text-align: center;
        border-radius: 5px;
        font-size: 13px;
        padding: 10px 15px 25px;
    }

    .modal-confirm .modal-footer a {
        color: #999;
    }

    .modal-confirm .icon-box {
        width: 80px;
        height: 80px;
        margin: 0 auto;
        border-radius: 50%;
        z-index: 9;
        text-align: center;
        border: 3px solid #f15e5e;
    }

    .modal-confirm .icon-box i {
        color: #f15e5e;
        font-size: 46px;
        display: inline-block;
        margin-top: 13px;
    }

    .modal-confirm .btn {
        color: #fff;
        border-radius: 4px;
        background: #60c7c1;
        text-decoration: none;
        transition: all 0.4s;
        line-height: normal;
        min-width: 120px;
        border: none;
        min-height: 40px;
        border-radius: 3px;
        margin: 0 5px;
        outline: none !important;
    }

    .modal-confirm .btn-info {
        background: #c1c1c1;
    }

    .modal-confirm .btn-info:hover,
    .modal-confirm .btn-info:focus {
        background: #a8a8a8;
    }

    .modal-confirm .btn-danger {
        background: #f15e5e;
    }

    .modal-confirm .btn-danger:hover,
    .modal-confirm .btn-danger:focus {
        background: #ee3535;
    }

    .trigger-btn {
        display: inline-block;
        margin: 100px auto;
    }
    </style>
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
                        <h2 class="product-title">Payment info</h2>
                        <ol class="breadcrumb">
                            <li><a href="/">Home /</a></li>
                            <li class="current">My Ads</li>
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
                                    @if(Session::get('utype')==2)
                                    <h4>Outlet owner</h4>
                                    @else
                                    <h4></h4>
                                    @endif
                                </div>
                            </div>
                            <nav class="navdashboard">
                                <ul>
                                    <li>
                                        <a href="admindashboard">
                                            <i class="lni-dashboard"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="approveoutlet">
                                            <i class="lni-cog"></i>
                                            <span>Approve Outlets</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="usermanagement">
                                            <i class="lni-layers"></i>
                                            <span>User Management</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="outletmanagement">
                                            <i class="lni-envelope"></i>
                                            <span>Outlet Management</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="undermaintainence">
                                            <i class="lni-wallet"></i>
                                            <span>Post Reportings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="active" href="#">
                                            <i class="lni-envelope"></i>
                                            <span>Payment informations</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="undermaintainence">
                                            <i class="lni-star"></i>
                                            <span>Messages/Enquiries</span>
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
                                <h2 class="dashbord-title">Payment info</h2>
                            </div>
                            <div class="dashboard-wrapper">
                                <nav class="nav-table">
                                    <ul>
                                        @isset($total)
                                        @if($total > 0)
                                        <li class="bg-primary" style="border-radius: 15px;"><a>Total payments
                                                {{$total}}</a></li>
                                        @elseif($total == 0)
                                        <div class="alert alert-danger">No payments found!!</div>
                                        @endif
                                        @endisset

                                        @isset($c_comp)
                                        <li class="bg-info" style="border-radius: 15px;"><a>Completed payments
                                                {{$c_comp}}</a></li>
                                        @endisset

                                    </ul>
                                </nav>
                                @include('inc.message')

                                <table class="table table-responsive dashboardtable tablemyads">
                                    <thead>
                                        <tr>
                                            <th>Payment id</th>
                                            <th>Payer's name</th>
                                            <th>Outlet name</th>
                                            <th>card number</th>
                                            <th>Amount</th>
                                            <th>Payment Status</th>
                                        </tr>
                                    </thead>
                                    @if(!empty($successMsg))
                                    <div class="alert alert-danger"> {{ $successMsg }}</div>
                                    @endif
                                    <tbody>
                                        @isset($payment)
                                        @foreach($payment as $d)
                                        <tr data-category="active">

                                            <td data-title="Title">
                                                <h3>{{$d->pay_id}}</h3>
                                            </td>
                                            <td data-title="Title">
                                                <h3>{{$d->name}}</h3>
                                            </td>
                                            <td data-title="Category"><span
                                                    class="adcategories">{{$d->outletname}}</span>
                                            </td>
                                            <td data-title="Category"><span class="adcategories">{{$d->cc_number}}
                                                </span>
                                            </td>
                                            <td data-title="Category"><span class="adcategories">{{$d->amount}}
                                                </span>
                                            </td>
                                            <td data-title="Price">
                                                @if($d->status_id == '10')
                                                <span class="adstatus adstatussold bg-success">complete</span>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endisset
                                    </tbody>
                                </table>
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

    <!-- Modal HTML -->
    <div id="deletemdl" class="modal fade" style="    padding-top: 200px;">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box">
                        <i class="material-icons">&#xE5CD;</i>
                    </div>
                    <h4 class="modal-title">Are you sure?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Do you really want to delete these records? This process cannot be undone.</p>
                </div>
                <div class="modal-footer">
                    <form id="userForm" action="" method="post">
                        @csrf
                        <input type="hidden" name="id">

                        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

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

<script>
$('#deletemdl').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget);
    var id = button.data('id');

    $('#userForm').attr("action", "{{ url('/deletead') }}" + "/" + id);
});
</script>
</body>


</html>