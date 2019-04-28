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

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/summernote.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

    <link href="{{ asset('css/font-awesome.min.css') }}" media="all" rel="stylesheet" type="text/css" />

    <link href="{{ asset('css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css" />

    <style type="text/css">
    .main-section {
        margin: 0 auto;
        padding: 20px;
        margin-top: 100px;
        background-color: #fff;
        box-shadow: 0px 0px 20px #c1c1c1;
    }

    .fileinput-remove,
    .fileinput-upload {
        display: none;
    }
    </style>
</head>

<body onLoad="initialize()">

    <header id="header-wrap">
        @include('inc.admin.admindash_head')


    </header>


    <div class="page-header" style="background: url({{ asset('assets/img/banner1.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Edit posting</h2>
                        <ol class="breadcrumb">
                            <li><a href="/ownerdashboard">Home /</a></li>
                            <li class="current">Edit posting</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="content" class="section-padding">
        <div class="container">


            <div class="row page-content">

                <div class="inner-box" style="width:1000px;">
                    <div class="dashboard-box">
                        <h2 class="dashbord-title">Edit posting</h2>
                    </div>
                    <div class="dashboard-wrapper">
                        @isset($post) @foreach($post as $prof)
                        <form name="editpost" method="Post" action="/updatepost" onsubmit="return"
                            enctype="multipart/form-data">
                            @csrf
                            <input hidden type="text" name="outletid" value="{{$prof->outletid}}">
                            <div class="form-group mb-3">
                                <label class="control-label">Outlet name</label>
                                <input class="form-control input-md" value="{{$prof->outletname}}" id="oname"
                                    name=" oname" placeholder="Outlet name" type="text">
                            </div>

                            <div class="form-group mb-3">
                                <label class="control-label">Owner name</label>
                                <input class="form-control input-md" value="{{$prof->ownername}}" name="owname"
                                    placeholder="Owner name" type="text">
                            </div>

                            <div class="form-group mb-3">
                                <label class="control-label">Location</label>
                                <div id="map_canvas" style="height:400px;width:auto;"></div>
                                <div id="latlong">
                                    <input hidden type="text" value="{{$prof->latitude}}" id="lat" name="lat">
                                    <input hidden type="text" value="{{$prof->longitude}}" id="lng" name="lng">

                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label">Address</label>
                                    <textarea class="form-control input-md" id="Address" name="Address"
                                        rows="5">{{$prof->address}}</textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label">Title</label>
                                    <textarea class="form-control input-md" id="Title"
                                        name="Title">{{$prof->otitle}}</textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label">Description</label>
                                    <textarea class="form-control" id="Description"
                                        name="Description">{{$prof->description}}</textarea>
                                </div>

                                <div class="form-group mb-3 tg-inputwithicon">
                                    <label class="control-label">Category</label>
                                    <div class="tg-select form-control">
                                        <select id="catSelect" name="catSelect">
                                            <option selected value="{{$prof->cat_id}}">{{$prof->catagory}}</option>
                                            @isset($cat)
                                            @foreach($cat as $category)
                                            <option value="{{$category->Cat_id}}">{{$category->catagory}}</option>
                                            @endforeach
                                            @endisset
                                        </select>
                                    </div>

                                    <div class="form-group mb-3 tg-inputwithicon">
                                        <label class="control-label">Sub category</label>
                                        <div class="tg-select form-control">
                                            <select name="subcat" id="subcat">
                                                <option selected disabled value="{{$prof->subcat_id}}">
                                                    {{$prof->subcatagory}}</option>
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
                                                <option selected value="{{$prof->state_id}}">{{$prof->state}}</option>
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
                                                <option selected value="{{$prof->dist_id}}">{{$prof->district}}</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3 tg-inputwithicon">
                                        <label class="control-label">city</label>
                                        <div class="tg-select form-control">
                                            <select name="city" id="city">
                                                <option selected value="{{$prof->city_id}}">{{$prof->city}}</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="control-label">Website</label>
                                        <input class="form-control input-md" value="{{$prof->website}}" name="wsite"
                                            placeholder="wsite" type="text">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="control-label">Email</label>
                                        <input class="form-control input-md" value="{{$prof->oemail}}" id="oemail"
                                            name="oemail" placeholder="Contact email" type="text">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="control-label">Contact number</label>
                                        <input class="form-control input-md" value="{{$prof->phone1}}" name="phone1"
                                            placeholder="Contact number" type="text">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="control-label">Alternate Contact number</label>
                                        <input class="form-control input-md" value="{{$prof->phone2}}" name="phone2"
                                            placeholder="Alternate Contact number" type="text">
                                    </div>

                                    <!-- <div class="form-group mb-3">
                                <label class="control-label">Images</label>
                                <input id="file" type="file" name="file" multiple class="file" data-max-file-count="4"
                                    data-min-file-count="2">

                            </div> -->

                                    @endforeach @endisset
                                    <input type="submit" class="btn btn-common sub-btn" name="upost"
                                        value="Update Posting">
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('inc.outer.footer')

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
            uploadUrl: "/storeimg",
            uploadExtraData: function() {
                return {
                    _token: $("input[name='_token']").val(),
                };
            },
            allowedFileExtensions: ['jpg', 'png', 'gif'],
            overwriteInitial: false,
            maxFileSize: 3000,
            maxFilesNum: 4,
            slugCallback: function(filename) {
                return filename.replace('(', '_').replace(']', '_');
            }
        });
        </script>

        <cfoutput>
            <script type="text/javascript"
                src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCVtoU6ioC5PVtX8DeQD7ZWpy8AJvvmO9E">
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