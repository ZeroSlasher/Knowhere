<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Knowhere</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/line-icons.css') }}
">

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


            <div class="row page-content">

                <div class="inner-box">
                    <div class="dashboard-box">
                        <h2 class="dashbord-title">Edit posting</h2>
                    </div>
                    <div class="dashboard-wrapper">
                        @isset($post)
                        @foreach($post as $prof)
                        <div class="form-group mb-3">
                            <label class="control-label">Outlet name</label>
                            <input class="form-control input-md" value="{{$prof->outletname}}" name=" oname"
                                placeholder="Outlet name" type="text">
                        </div>
                        <div class="form-group mb-3">
                            <label class="control-label">Owner name</label>
                            <input class="form-control input-md" value="{{$prof->ownername}}" name="owname"
                                placeholder="Owner name" type="text">
                        </div>
                        <div class="form-group mb-3">
                            <label class="control-label">Address</label>
                            <input class="form-control input-md" value="{{$prof->address}}" name="Address"
                                placeholder="Address" type="text">
                        </div>
                        <div class="form-group mb-3">
                            <label class="control-label">Description</label>
                            <input class="form-control input-md" value="{{$prof->description}}" name="Description"
                                placeholder="Description" type="text">
                        </div>

                        <div class="form-group mb-3 tg-inputwithicon">
                            <label class="control-label">Category</label>
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
                                <label class="control-label">Sub category</label>
                                <div class="tg-select form-control">
                                    <select name="subcat" id="subcat">
                                        <option disabled selected value> -- select Sub-category -- </option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group mb-3 tg-inputwithicon">
                                <label class="control-label">Sub category</label>
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
                                <label class="control-label">Sub category</label>
                                <div class="tg-select form-control">
                                    <select name="district" id="district">
                                        <option disabled selected value> -- select district -- </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group mb-3 tg-inputwithicon">
                                <label class="control-label">Sub category</label>
                                <div class="tg-select form-control">
                                    <select name="city" id="city">
                                        <option disabled selected value> -- select city -- </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group mb-3 tg-inputwithicon">
                                <label class="control-label">Services</label>
                                <div class="tg-select form-control">
                                    <select id="service" name="service">
                                        <option disabled selected value> -- select services provided -- </option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label class="control-label">Contact number</label>
                                <input class="form-control input-md" value="{{$prof->phone1}}" name="Description"
                                    placeholder="Contact number" type="text">
                            </div>

                            <div class="form-group mb-3">
                                <label class="control-label">Alternate Contact number</label>
                                <input class="form-control input-md" value="{{$prof->phone2}}" name="Description"
                                    placeholder="Alternate Contact number" type="text">
                            </div>
                            <div class="form-group md-3">
                                <section id="editor">
                                    <div id="summernote">
                                    </div>
                                </section>
                            </div>
                            <label class="tg-fileuploadlabel" for="tg-photogallery">
                                <span>Drop files anywhere to upload</span>
                                <span>Or</span>
                                <span class="btn btn-common">Select Files</span>
                                <span>Maximum upload file size: 500 KB</span>
                                <input id="tg-photogallery" class="tg-fileinput" type="file" name="file">
                            </label>
                            @endforeach
                            @endisset
                        </div>
                    </div>
                </div>


            </div>
        </div>


        @include('inc.outer.footer')






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
</body>


</html>