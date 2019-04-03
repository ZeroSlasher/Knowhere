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

    <link rel="stylesheet" type="text/css" href="assets/css/summernote.css">

    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">

    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">

    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <link href="{{ asset('css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/font-awesome.min.css') }}" media="all" rel="stylesheet" type="text/css" />
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
                        <h2 class="product-title">Add new posting</h2>
                        <ol class="breadcrumb">
                            <li><a href="/">Home /</a></li>
                            <li class="current">Add new posting</li>
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
                                    <h4></h4>
                                </div>
                            </div>
                            <nav class="navdashboard">
                                <ul>
                                    <li>
                                        <a href="ownerdashboard">
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
                                        <a href="editownerprofile">
                                            <i class="lni-cog"></i>
                                            <span>Edit profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="resetopwd">
                                            <i class="lni-layers"></i>
                                            <span>Reset password</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="active" href="Addposting">
                                            <i class="lni-wallet"></i>
                                            <span>Add new posting</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="lni-wallet"></i>
                                            <span>Option3</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="lni-heart"></i>
                                            <span>Option4</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="lni-star"></i>
                                            <span>Option5</span>
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
                    <div class="row page-content">
                        <div class="inner-box" style="width:1000px;">
                            <div class="dashboard-box">
                                <h2 class="dashbord-title">Add a posting</h2>
                            </div>
    @include('inc.message')

                            <div class="dashboard-wrapper">

                                <form name="editpost" method="Post" action="/addpost" onsubmit="return" enctype="multipart/form-data">
                                    @csrf
                                    <input hidden type="text" name="outletid" value="">
                                    <div class="form-group mb-3">
                                        <label class="control-label">Name of outlet</label>
                                        <input class="form-control input-md" value="" id="oname" name=" oname" placeholder="Outlet's name" type="text">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="control-label">Owner name</label>
                                        <input class="form-control input-md" value="" name="owname" placeholder="Owner name" type="text">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="control-label">Address of the outlet</label>
                                        <textarea class="form-control input-md" id="Address" name="Address"></textarea>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="control-label">give a description about outlet</label>
                                        <textarea class="form-control" id="Description" name="Description"></textarea>
                                    </div>

                                    <div class="form-group mb-3 tg-inputwithicon">
                                        <label class="control-label">which category the outlet belongs to</label>
                                        <div class="tg-select form-control">
                                            <select id="catSelect" name="catSelect">
                                                <option disabled selected value> -- select Category -- </option>
                                                @isset($cat)
                                                @foreach($cat as $category)
                                                <option value="{{$category->Cat_id}}">{{$category->catagory}}</option>
                                                @endforeach
                                                @endisset
                                            </select>
                                        </div>

                                        <div class="form-group mb-3 tg-inputwithicon">
                                            <label class="control-label">select appropriate Sub category</label>
                                            <div class="tg-select form-control">
                                                <select name="subcat" id="subcat">
                                                    <option disabled selected value> -- select Sub-category -- </option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group mb-3 tg-inputwithicon">
                                            <label class="control-label">State</label>
                                            <div class="tg-select form-control">
                                                <select id="state" name="state">
                                                    <option disabled selected value> -- select state -- </option>
                                                    @isset($state)
                                                    @foreach($state as $states)
                                                    <option value="{{$states->state_id}}">{{$states->state}}</option>
                                                    @endforeach
                                                    @endisset
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group mb-3 tg-inputwithicon">
                                            <label class="control-label">district</label>
                                            <div class="tg-select form-control">
                                                <select name="district" id="district">
                                                    <option disabled selected value> -- select district -- </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group mb-3 tg-inputwithicon">
                                            <label class="control-label">city</label>
                                            <div class="tg-select form-control">
                                                <select name="city" id="city">
                                                    <option disabled selected value> -- select city -- </option>
                                                </select>
                                            </div>
                                        </div>

                                        <label class="control-label">Services</label>
                                        <div class="tg-checkbox form-control" name="tbox" id="tbox">
                                            <label class="control-label">Select services provided</label>

                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="control-label">Website</label>
                                        <input class="form-control input-md" value="" name="wsite" placeholder="wsite" type="text">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="control-label">Contact number</label>
                                        <input class="form-control input-md" value="" name="phone1" placeholder="Contact number" type="text">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="control-label">Alternate Contact number</label>
                                        <input class="form-control input-md" value="" name="phone2" placeholder="Alternate Contact number" type="text">
                                    </div>



                                    <input type="submit" class="btn btn-common sub-btn" name="upost" value="Add Posting">
                            </div>
                            </form>
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

    <script src="{{ asset('assets/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('Description');
    </script>
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
    <!-- ajax.js -->
    <script src="{{ asset('js/myajax.js') }}"></script>
    <script src="{{ asset('js/fileinput.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/theme.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/popper.min.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        $("#file").fileinput({
        theme: 'fa',
        uploadIcon: '<i class="fa fa-cloud-upload" aria-hidden="true"></i>',
        removeIcon: '<i class="fa fa-trash" aria-hidden="true"></i>',
        'uploadAsync': false,

        uploadUrl: "/storeimg",
        uploadExtraData: function() {
            return {
                _token: $("input[name='_token']").val(),
            };
        },
        allowedFileExtensions: ['jpg', 'png', 'gif'],
        overwriteInitial: false,
        maxFileSize: 10000,
        maxFilesNum: 8,
        slugCallback: function(filename) {
            return filename.replace('(', '_').replace(']', '_');
        }
        
    });
    </script>
</body>


</html>