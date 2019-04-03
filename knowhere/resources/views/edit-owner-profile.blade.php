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
                        <h2 class="product-title">Profile Settings</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home /</a></li>
                            <li class="current">Profile Settings</li>
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
                                        <a class="active" href="#">
                                            <i class="lni-cog"></i>
                                            <span>Profile Settings</span>
                                        </a>
                                    </li>
                                    </li>
                                    <li>
                                        <a href="resetopwd">
                                            <i class="lni-layers"></i>
                                            <span>Reset password</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Addposting">
                                            <i class="lni-wallet"></i>
                                            <span>Add new posting</span>
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

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                            <div class="inner-box" style="width: 1000px;">
                                <div class="tg-contactdetail">
                                    <div class="dashboard-box">
                                        <h2 class="dashbord-title">Contact Detail</h2>
                                    </div>
    @include('inc.message')

                                    <div class="dashboard-wrapper">
                                        <form method="POST" action="/updateownerprofile" id="rqstform" onsubmit="return formValidation2()" enctype="multipart/form-data">
                                            @csrf @isset($prof) @foreach($prof as $p)
                                            <input name='id' id='id' type="text" hidden value="{{$p->id}}">
                                            <div class="form-group mb-3">
                                                <label class="control-label">Name</label>
                                                <input class="form-control input-md" placeholder="Name" name='own_name' id='own_name' type="text" value="{{$p->name}}">
                                                <div id="p11" class="alert alert-danger" style="align:center;display: none;">
                                                    <strong>Enter a valid name</strong>
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label class="control-label">Contact number</label>
                                                <input class="form-control input-md" value="{{$p->phone}}" name='cphone' id='cphone' placeholder="Contact Number" type="text">
                                                <div id="p33" class="alert alert-danger" style="align:center;display: none;">
                                                    <strong>Enter a valid Phone number</strong>
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label class="control-label">Address</label>
                                                <textarea class="form-control input-md" id="Address" name="Address">{{$p->oaddress}}</textarea>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label class="control-label">Add profile image</label>
                                                <input class="form-control input-md" id="prof" onchange="myFunction()" name="prof" type="file">
                                                <img class="img-thumbnail" src="/uploads/{{$p->image}}" alt="Profile image" width="200px">
                                                <img id="preview" src="#" style="display:none" alt="Uploaded image" width="200px" title="click to remove" />

                                            </div>
                                            @endforeach @endisset

                                            <div class="form-group mb-3 tg-inputwithicon">
                                                <label class="control-label">State</label>
                                                <div class="tg-select form-control">
                                                    <select id="state" name="state">
                                                    <option selected value="{{$p->state_id}}"> {{$p->state}}
                                                        </option>
                                                        @isset($state)
                                                        @foreach($state as $states)
                                                        <option value="{{$states->state_id}}">{{$states->state}}
                                                        </option>
                                                        @endforeach
                                                        @endisset
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group mb-3 tg-inputwithicon">
                                                <label class="control-label">district</label>
                                                <div class="tg-select form-control">
                                                    <select name="district" id="district">
                                                        <option selected value="{{$p->dist_id}}">{{$p->district}}
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group mb-3 tg-inputwithicon">
                                                <label class="control-label">city</label>
                                                <div class="tg-select form-control">
                                                    <select name="city" id="city">
                                                        <option selected value="{{$p->city_id}}">{{$p->city}}</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div id="head1" style="align:center;display: none;" class="alert alert-danger">
                                                <strong>All details are mandatory</strong>
                                            </div>

                                            <div class="button-wrapper"><button type="submit" id="submit1" name="submit1" class="btn btn-common">Update Profile</button></div>
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
    @include('inc.outer.footer')


    <a href="#" class="back-to-top">
        <i class="lni-chevron-up"></i>
    </a>

    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>


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
    <script src="{{ asset('js/myajax.js') }}"></script>
    <!-- formvalidate1.js -->
    <script src="js/formvalidate2.js"></script>
    <script>
        function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#prof").change(function() {
        readURL(this);
    });

    function myFunction() {
        var x = document.getElementById("preview");
        if (x.style.display === "none") {
            x.style.display = "block";
        }
    }

    $('#preview').on('click', function() {
        $('#prof').val("");
        $('#preview').hide();
    });
    </script>
</body>


</html>