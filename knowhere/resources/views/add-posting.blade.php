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

<body onLoad="initialize()">

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
                                            <span>Edit profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="resetpwd">
                                            <i class="lni-layers"></i>
                                            <span>Reset password</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="active" href="#">
                                            <i class="lni-wallet"></i>
                                            <span>Add new posting</span>
                                        </a>
                                    </li>
                                    @if(Session::get('utype')==2)
                                    <li>
                                        <a href="/addloc">
                                            <i class="lni-wallet"></i>
                                            <span>Add nearby locations</span>
                                        </a>
                                    </li>
                                    @endif
                                    <li>
                                        <a href="undermaintainence">
                                            <i class="lni-wallet"></i>
                                            <span>Option3</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="undermaintainence">
                                            <i class="lni-heart"></i>
                                            <span>Option4</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="undermaintainence">
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

                                <form name="editpost" method="Post" action="/addpost"
                                    onsubmit="return formValidation4()" enctype="multipart/form-data">
                                    @csrf
                                    <div id="head" style="align:center;display: none;" class="alert alert-danger">
                                        <strong>All details are mandatory</strong>
                                    </div>
                                    <input hidden type="text" name="outletid" value="">
                                    <div class="form-group mb-3">
                                        <label class="control-label">Name of outlet</label>
                                        <input class="form-control input-md" value="" id="oname" name=" oname"
                                            placeholder="Outlet's name" type="text">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="control-label">Owner name</label>
                                        <input class="form-control input-md" id="owname" name="owname"
                                            placeholder="Owner name" type="text">
                                        <div id="p11" class="alert alert-danger" style="align:center;display: none;">
                                            <strong>Enter a valid name</strong>
                                        </div>
                                    </div>


                                    <div class="form-group mb-3">
                                        <label class="control-label">Mark your location</label>
                                        <div id="map_canvas" style="height:400px;width:auto;"></div>
                                        <div id="latlong">
                                            <input hidden type="text" id="lat" name="lat">
                                            <input hidden type="text" id="lng" name="lng">

                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="control-label">Address of the outlet</label>
                                            <textarea class="form-control input-md" id="Address" name="Address"
                                                rows="5"></textarea>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="control-label">Give an intro about the est.</label>
                                            <textarea class="form-control input-md" id="title" name="title"></textarea>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="control-label">give a description about outlet</label>
                                            <textarea class="form-control" id="Description"
                                                name="Description"></textarea>
                                        </div>

                                        <div class="form-group mb-3 tg-inputwithicon">
                                            <label class="control-label">which category the outlet belongs to</label>
                                            <div class="tg-select form-control">
                                                <select id="catSelect" name="catSelect">
                                                    <option disabled selected value> -- select Category -- </option>
                                                    @isset($cat)
                                                    @foreach($cat as $category)
                                                    <option value="{{$category->Cat_id}}">{{$category->catagory}}
                                                    </option>
                                                    @endforeach
                                                    @endisset
                                                </select>
                                            </div>

                                            <div class="form-group mb-3 tg-inputwithicon">
                                                <label class="control-label">select appropriate Sub category</label>
                                                <div class="tg-select form-control">
                                                    <select name="subcat" id="subcat">
                                                        <option disabled selected value> -- select Sub-category --
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="form-group mb-3">
                                                <label class="control-label">Services</label>
                                                <div class="tg-checkbox form-control" name="tbox" id="tbox">
                                                    <label class="control-label">Select services provided</label>
                                                </div>
                                            </div>


                                            <div class="form-group mb-3 tg-inputwithicon">
                                                <label class="control-label">State</label>
                                                <div class="tg-select form-control">
                                                    <select id="state" name="state">
                                                        <option disabled selected value> -- select state -- </option>
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

                                            <div class="form-group mb-3">
                                                <label class="control-label">Website</label>
                                                <input class="form-control input-md" id="wsite" name="wsite"
                                                    placeholder="Website address" type="text">
                                                <div id="p44" class="alert alert-danger"
                                                    style="align:center;display: none;">
                                                    <strong>Enter a valid URL</strong>
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label class="control-label">Email</label>
                                                <input class="form-control input-md" id="oemail" name="oemail"
                                                    placeholder="Contact emai" type="text">
                                                <div id="p55" class="alert alert-danger"
                                                    style="align:center;display: none;">
                                                    <strong>Enter a Email</strong>
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label class="control-label">Contact number</label>
                                                <input class="form-control input-md" id="phone1" name="phone1"
                                                    placeholder="Contact number" type="text">
                                                <div id="p33" class="alert alert-danger"
                                                    style="align:center;display: none;">
                                                    <strong>Enter a valid Contact number</strong>
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label class="control-label">Alternate Contact number</label>
                                                <input class="form-control input-md" id="phone2" name="phone2"
                                                    placeholder="Alternate Contact number" type="text">
                                                <div id="p33" class="alert alert-danger"
                                                    style="align:center;display: none;">
                                                    <strong>Enter a valid Contact number</strong>
                                                </div>
                                            </div>

                                            <input type="submit" class="btn btn-common sub-btn" name="upost"
                                                value="Add Posting">
                                        </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-9">


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
    <!-- formvalidate4.js -->
    <script src="js/formvalidate4.js"></script>
    <!-- ajax.js -->
    <script src="{{ asset('js/myajax.js') }}"></script>
    <script src="{{ asset('js/fileinput.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/theme.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/popper.min.js') }}" type="text/javascript"></script>



    <cfoutput>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAy-PboZ3O_A25CcJ9eoiSrKokTnWyAmt8">

        </script>
    </cfoutput>

    <script type="text/javascript">
    var map = null;
    var marker = null;

    var infowindow = new google.maps.InfoWindow({
        size: new google.maps.Size(150, 50)
    });

    function createMarker(latlng, name, html) {

        var contentString = html;

        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            zIndex: Math.round(latlng.lat() * -100000) << 5
        });

        google.maps.event.addListener(marker, 'click', function() {
            infowindow.setContent(contentString);

            infowindow.open(map, marker);


        });

        google.maps.event.trigger(marker, 'click');

        return marker;

    }

    function initialize() {

        var myLatlng = new google.maps.LatLng(10.00, 76.25);

        var myOptions = {
            zoom: 8,
            center: myLatlng,
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
            },
            navigationControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }

        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

        var image = '/images/pin2.png';
        marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            icon: image,
            title: "Property Location"
        });


        google.maps.event.addListener(map, 'click', function() {
            infowindow.close();
        });

        google.maps.event.addListener(map, 'click', function(event) {
            if (marker) {
                marker.setMap(null);
                marker = null;
            }

            var image = '/images/pin2.png';
            var myLatLng = event.latLng;

            marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                icon: image,
                title: "Property Location"
            });

            // populate the form fields with lat & lng
            formlat = document.getElementById("lat").value = event.latLng.lat();
            formlng = document.getElementById("lng").value = event.latLng.lng();

            ReverseGeocodingData(formlat, formlng);
        });

    }
    </script>


    <script>
    function ReverseGeocodingData(lat, lng) {
        var url = "https://us1.locationiq.com/v1/reverse.php?key=4641d6045d6876&lat=" + lat + "&lon=" + lng +
            "&format=json";
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": url,
            "method": "GET"
        }

        $.ajax(settings).done(function(response) {

            if ($("#Address").val()) {} else {
                $("#Address").val(response.display_name);
            }
        });
    }

    $("body").on("click", "#map_canvas", function() {

        $("#Address").val("");

    });


    $("body").on("DOMSubtreeModified", ".address", function() {

        $html = "";

        var children = $(".address").children();
        $html += $(".address").siblings()[0].outerText + "\n";
        $html += children[0].innerText + "\n";
        $html += children[1].innerText + "\n";
        $html += children[2].innerText + "\n";
        $html += children[3].innerText + "\n";

        $("#Address").val($html);

    });
    </script>

</body>


</html>