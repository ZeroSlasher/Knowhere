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

    .modal-header-success {
        color: #fff;
        padding: 9px 15px;
        border-bottom: 1px solid #eee;
        background-color: #5cb85c;
        -webkit-border-top-left-radius: 5px;
        -webkit-border-top-right-radius: 5px;
        -moz-border-radius-topleft: 5px;
        -moz-border-radius-topright: 5px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
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

        @include('inc.admin.admindash_head')


    </header>


    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">My Ads</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home /</a></li>
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
                                        @if(Session::get('utype')==2)
                                        <a href="ownerdashboard">
                                            @elseif(Session::get('utype')==3)
                                            <a href="userdashboard">
                                                @endif
                                                <i class="lni-dashboard"></i>
                                                <span>Dashboard</span>
                                            </a>
                                    </li>
                                    <li>
                                        <a href="mypostings">
                                            <i class="lni-dashboard"></i>
                                            <span>My Postings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="editprofile">
                                            <i class="lni-cog"></i>
                                            <span>Profile Settings</span>
                                        </a>
                                    </li>
                                    </li>
                                    <li>
                                        <a href="resetpwd">
                                            <i class="lni-layers"></i>
                                            <span>Reset password</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="postingcheck">
                                            <i class="lni-wallet"></i>
                                            <span>Add new posting</span>
                                        </a>
                                    </li>
                                    @if(Session::get('utype')==2)
                                    <li>
                                        <a href="#" class="active">
                                            <i class="lni-heart"></i>
                                            <span>My Adverts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="addloc">
                                            <i class="lni-wallet"></i>
                                            <span>Add nearby locations</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="messages">
                                            <i class="lni-star"></i>
                                            <span>Messages/Suggetions</span>
                                        </a>
                                    </li>
                                    @endif
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
                                <h2 class="dashbord-title">My Advertisements</h2>
                            </div>
                            <div class="dashboard-wrapper">
                                <nav class="nav-table">
                                    <ul>
                                        @isset($total)
                                        @if($total > 0)
                                        <li class=""><a>Total ads {{$total}}</a></li>
                                        @elseif($total == 0)
                                        <div class="alert alert-danger">No ads found!!</div>
                                        @endif
                                        @endisset
                                        <li><a style="float:right;    margin-left: 900px;"
                                                class="active btn btn-success" href="add_ad">Add new
                                                Advertisement</a>
                                        </li>
                                    </ul>
                                </nav>
                                @include('inc.message')

                                <table class="table table-responsive dashboardtable tablemyads">
                                    <thead>
                                        <tr>
                                            <th>Ad content</th>
                                            <th>outlet name</th>
                                            <th>Package</th>
                                            <th>validity</th>
                                            <th>expiring in</th>
                                            <th>Status</th>
                                            <th>Payment Status</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    @if(!empty($successMsg))
                                    <div class="alert alert-danger"> {{ $successMsg }}</div>
                                    @endif
                                    <tbody>
                                        @isset($outlet)
                                        @foreach($outlet as $d)

                                        <tr data-category="active">
                                            @if($d->ad_content == "")
                                            <td class="photo"><img class="img-fluid" src="/uploads/ads/placeholder.png"
                                                    alt="img">
                                            </td>
                                            @else
                                            <td class="photo"><img class="img-fluid" id="myImg"
                                                    src="/uploads/ads/{{$d->ad_content}}"" alt=" ad_content">
                                            </td>
                                            @endif
                                            <td data-title="Title">
                                                <h3>{{$d->outletname}}</h3>
                                            </td>
                                            <td data-title="Category"><span class="adcategories">{{$d->pkg_name}}</span>
                                            </td>
                                            <td data-title="Category"><span class="adcategories">{{$d->validity}}
                                                    days</span>
                                            </td>
                                            <td data-title="Category"><span class="adcategories">{{$d->expiring_in}}
                                                    days</span>
                                            </td>
                                            <td data-title="Ad Status">
                                                @if($d->status_id== '1')
                                                <a href="/edit_s_ad/{{$d->ad_id}}"><span
                                                        class="adstatus adstatusactive">Active</span></a>
                                                @elseif($d->status_id == '7')
                                                <a href="/edit_s_ad/{{$d->ad_id}}"><span
                                                        class="adstatus adstatusinactive">Hidden</span></a>
                                                @endif
                                            </td>
                                            <td data-title="Price">
                                                @if($d->p_status== '11')
                                                <a href="/payment/{{$d->ad_id}}"><span
                                                        class="adstatus adstatusexpired">incomplete</span></a>
                                                @elseif($d->p_status == '10')
                                                <span class="adstatus adstatussold">complete</span>
                                                @endif
                                            </td>
                                            <td data-title="Action">
                                                <div class="btns-actions">
                                                    @if($d->p_status== '11')
                                                    <h6 title="complete payment to enable actions">Actions unavilable
                                                    </h6>
                                                    @else

                                                    <a class="btn-action btn-edit" href="#editad"
                                                        data-id="{{$d->ad_id}}" data-toggle="modal"><i
                                                            class="lni-pencil"></i></a>

                                                    <a class="btn-action btn-delete" href="#deletemdl"
                                                        class="trigger-btn" data-id="{{$d->ad_id}}"
                                                        data-toggle="modal"><i class="lni-trash"></i></a>
                                                    @endif
                                                </div>

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

                        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width: fit-content;">
                <div class="modal-header modal-header-success">
                    <h5>Edit content of the ad here!!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding: 10px;">
                            <form id="editadform" method="post" action="" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group mb-3">
                                    <label class="control-label">Content of the advertisement</label>
                                    <input type="file" name="file" id="imgInp">
                                </div>

                                <div class="form-group mb-3">
                                    <img id="blah" src="#" style="width: 100%;height: auto;display:none;" />
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-danger">Submit</button>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>


    <div id="myModal" class="imgmdl" style="display: none;">
        <img class="contents" id="img01">
        <button type="button" class="btn btn-danger" id="close" style="margin-inline-start: 55em;">x</button>

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

<script>
$('#editad').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget);
    var id = button.data('id');

    $('#editadform').attr("action", "{{ url('/editad') }}" + "/" + id);
});
</script>

<script>
function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInp").change(function() {
    $('#blah').show();
    readURL(this);
});
</script>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
img.onclick = function() {
    modal.style.display = "block";
    modalImg.src = this.src;
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