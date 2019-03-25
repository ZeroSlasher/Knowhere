<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Owner's Dashboard</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">

    <link rel="stylesheet" type="text/css" href="assets/css/color-switcher.css">

    <link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css">

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
                        <h2 class="product-title">Dashbord</h2>
                        <ol class="breadcrumb">
                            <li><a href="/">Home /</a></li>
                            <li class="current">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach($post as $own)
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
                                    <h4>Owner of {{$own->outletname}}</h4>
                                </div>
                            </div>
                            <nav class="navdashboard">
                                <ul>
                                    <li>
                                        <a class="active" href="admindashboard">
                                            <i class="lni-dashboard"></i>
                                            <span>My Postings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="lni-cog"></i>
                                            <span>Edit profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="lni-layers"></i>
                                            <span>Option2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="lni-envelope"></i>
                                            <span>Option3</span>
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
                    <div class="page-content">
                        <div class="inner-box">
                            <div class="dashboard-box">
                                <h2 class="dashbord-title">Dashboard</h2>
                            </div>
                            <div class="dashboard-wrapper">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="featured-box">
                                            <figure>
                                                <div class="icon">
                                                    <i class="lni-heart"></i>
                                                </div>
                                                <a href="#"><img class="img-fluid" src="assets/img/featured/img1.jpg"
                                                        alt=""></a>
                                            </figure>
                                            <div class="feature-content">
                                                <div class="product">
                                                    <a href="#"><i class="lni-folder"></i>
                                                        {{$own->subcatagory}}</a>
                                                </div>
                                                <h4><a href="editpost/{{$own->outletid}}">{{$own->outletname}}</a></h4>

                                                <span>Last Updated: {{$own->updated_at}}</span>
                                                <ul class=" address">
                                                    <li>
                                                        <a href="#"><i class="lni-map-marker"></i>
                                                            {{$own->city}},{{$own->district}},{{$own->state}}</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="lni-alarm-clock"></i>
                                                            {{$own->created_at}}</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="lni-user"></i>
                                                            {{$own->ownername}}</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="lni-home"></i>
                                                            {{$own->address}}</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="lni-phone-handset"></i>
                                                            {{$own->phone1}}</a>
                                                    </li>
                                                </ul>
                                                <div class="listing-bottom">
                                                    <h3 class="price float-left">
                                                        </>
                                                    </h3>
                                                    <a href="account-myads.html" class="btn-verified float-right"><i
                                                            class="lni-check-box"></i>
                                                        Verified Ad</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <footer>

        <section class="footer-Content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                        <div class="widget">
                            <h3 class="footer-logo"><img src="assets/img/logo.png" alt=""></h3>
                            <div class="textwidget">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt
                                    est, et euismod purus suscipit quis. Etiam euismod ornare elementum. Sed ex est,
                                    consectetur eget facilisis sed, auctor ut purus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                        <div class="widget">
                            <h3 class="block-title">Latest Ads</h3>
                            <ul class="media-content-list">
                                <li>
                                    <div class="media-left">
                                        <img class="img-fluid" src="assets/img/art/img1.jpg" alt="">
                                        <div class="overlay">
                                            <span class="price">$ 79</span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a href="ads-details.html">Brand New Macbook Pro</a></h4>
                                        <span class="date">12 Jan 2018</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="media-left">
                                        <img class="img-fluid" src="assets/img/art/img2.jpg" alt="">
                                        <div class="overlay">
                                            <span class="price">$ 49</span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a href="ads-details.html">Canon Photography Camera</a>
                                        </h4>
                                        <span class="date">28 Mar 2018</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                        <div class="widget">
                            <h3 class="block-title">Help & Support</h3>
                            <ul class="menu">
                                <li><a href="#">Live Chat</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Purchase Protection</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                        <div class="widget">
                            <h3 class="block-title">Subscribe us</h3>
                            <p class="text-sub">We have over 5 years of experience Our suppoer avalable to help you 24
                                hours a day, seven days week</p>
                            <form method="post" id="subscribe-form" name="subscribe-form" class="validate">
                                <div class="form-group is-empty">
                                    <input type="email" value="" name="Email" class="form-control" id="EMAIL"
                                        placeholder="Email address" required="">
                                    <button type="submit" name="subscribe" id="subscribes"
                                        class="btn btn-common sub-btn"><i class="lni-check-box"></i></button>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                            <ul class="footer-social">
                                <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                                <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="site-info float-left">
                            <p>All copyrights reserved &copy; 2018 - Designed by <a href="https://uideck.com/"
                                    rel="nofollow">UIdeck</a></p>
                        </div>
                        <div class="float-right">
                            <ul class="bottom-card">
                                <li>
                                    <a href="#"><img src="assets/img/footer/card1.jpg" alt="card"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/img/footer/card2.jpg" alt="card"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/img/footer/card3.jpg" alt="card"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/img/footer/card4.jpg" alt="card"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>


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
</body>

<!-- Mirrored from preview.uideck.com/items/Knowhere-1.1/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Mar 2019 06:15:29 GMT -->

</html>