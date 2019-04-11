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
                        <h2 class="product-title">My Postings</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home /</a></li>
                            <li class="current">My Postings</li>
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
                                        <a class="active" href="#">
                                            <i class="lni-dashboard"></i>
                                            <span>My Postings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="editprofile">
                                            <i class="lni-cog"></i>
                                            <span>Profile settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="resetpwd">
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
                                    @if(Session::get('utype')==2)
                                    <li>
                                        <a href="/addloc">
                                            <i class="lni-wallet"></i>
                                            <span>Add nearby locations</span>
                                        </a>
                                    </li>
                                    @endif
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
                                <h2 class="dashbord-title">My Ads</h2>
                            </div>
                            <div class="dashboard-wrapper">
                                <nav class="nav-table">
                                    <ul>
                                        <li class="active"><a href="#">All Ads (42)</a></li>
                                        <li><a href="#">Published (88)</a></li>
                                        <li><a href="#">Featured (12)</a></li>
                                        <li><a href="#">Sold (02)</a></li>
                                        <li><a href="#">Active (42)</a></li>
                                        <li><a href="#">Expired (01)</a></li>
                                    </ul>
                                </nav>
                                <table class="table table-responsive dashboardtable tablemyads">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkedall">
                                                    <label class="custom-control-label" for="checkedall"></label>
                                                </div>
                                            </th>
                                            <th>Photo</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Ad Status</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr data-category="active">
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="adone">
                                                    <label class="custom-control-label" for="adone"></label>
                                                </div>
                                            </td>
                                            <td class="photo"><img class="img-fluid" src="assets/img/product/img1.jpg"
                                                    alt=""></td>
                                            <td data-title="Title">
                                                <h3>HP Laptop 6560b core i3 3nd generation</h3>
                                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                                            </td>
                                            <td data-title="Category"><span class="adcategories">Laptops & PCs</span>
                                            </td>
                                            <td data-title="Ad Status"><span
                                                    class="adstatus adstatusactive">active</span>
                                            </td>
                                            <td data-title="Price">
                                                <h3>139$</h3>
                                            </td>
                                            <td data-title="Action">
                                                <div class="btns-actions">
                                                    <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                                                    <a class="btn-action btn-edit" href="#"><i
                                                            class="lni-pencil"></i></a>
                                                    <a class="btn-action btn-delete" href="#"><i
                                                            class="lni-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-category="active">
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="adtwo">
                                                    <label class="custom-control-label" for="adtwo"></label>
                                                </div>
                                            </td>
                                            <td class="photo"><img class="img-fluid" src="assets/img/product/img2.jpg"
                                                    alt=""></td>
                                            <td data-title="Title">
                                                <h3>Jvc Haebr80b In-ear Sports Headphones</h3>
                                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                                            </td>
                                            <td data-title="Category">Electronics</td>
                                            <td data-title="Ad Status"><span
                                                    class="adstatus adstatusactive">Active</span>
                                            </td>
                                            <td data-title="Price">
                                                <h3>$189</h3>
                                            </td>
                                            <td data-title="Action">
                                                <div class="btns-actions">
                                                    <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                                                    <a class="btn-action btn-edit" href="#"><i
                                                            class="lni-pencil"></i></a>
                                                    <a class="btn-action btn-delete" href="#"><i
                                                            class="lni-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-category="inactive">
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="adthree">
                                                    <label class="custom-control-label" for="adthree"></label>
                                                </div>
                                            </td>
                                            <td class="photo"><img class="img-fluid" src="assets/img/product/img3.jpg"
                                                    alt=""></td>
                                            <td data-title="Title">
                                                <h3>Furniture Straps 4-Pack, TV Anti-Tip Metal Wall </h3>
                                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                                            </td>
                                            <td data-title="Category">Real Estate</td>
                                            <td>
                                                <span class="adstatus adstatusinactive">Inactive</span>
                                            </td>
                                            <td data-title="Price">
                                                <h3>$69</h3>
                                            </td>
                                            <td data-title="Action">
                                                <div class="btns-actions">
                                                    <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                                                    <a class="btn-action btn-edit" href="#"><i
                                                            class="lni-pencil"></i></a>
                                                    <a class="btn-action btn-delete" href="#"><i
                                                            class="lni-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-category="sold">
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="adfour">
                                                    <label class="custom-control-label" for="adfour"></label>
                                                </div>
                                            </td>
                                            <td class="photo"><img class="img-fluid" src="assets/img/product/img4.jpg"
                                                    alt=""></td>
                                            <td data-title="Title">
                                                <h3>Apple iPhone X, Fully Unlocked 5.8", 64 GB - Black</h3>
                                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                                            </td>
                                            <td data-title="Category">Mobile</td>
                                            <td data-title="Ad Status"><span class="adstatus adstatussold">Sold</span>
                                            </td>
                                            <td data-title="Price">
                                                <h3>$89</h3>
                                            </td>
                                            <td data-title="Action">
                                                <div class="btns-actions">
                                                    <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                                                    <a class="btn-action btn-delete" href="#"><i
                                                            class="lni-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-category="active">
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="adfive">
                                                    <label class="custom-control-label" for="adfive"></label>
                                                </div>
                                            </td>
                                            <td class="photo"><img class="img-fluid" src="assets/img/product/img5.jpg"
                                                    alt=""></td>
                                            <td data-title="Title">
                                                <h3>Apple Macbook Pro 13 Inch with/without Touch Bar</h3>
                                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                                            </td>
                                            <td data-title="Category">Apple</td>
                                            <td data-title="Ad Status"><span
                                                    class="adstatus adstatusactive">Active</span>
                                            </td>
                                            <td data-title="Price">
                                                <h3>$289</h3>
                                            </td>
                                            <td data-title="Action">
                                                <div class="btns-actions">
                                                    <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                                                    <a class="btn-action btn-edit" href="#"><i
                                                            class="lni-pencil"></i></a>
                                                    <a class="btn-action btn-delete" href="#"><i
                                                            class="lni-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-category="sold">
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="adsix">
                                                    <label class="custom-control-label" for="adsix"></label>
                                                </div>
                                            </td>
                                            <td class="photo"><img class="img-fluid" src="assets/img/product/img6.jpg"
                                                    alt=""></td>
                                            <td data-title="Title">
                                                <h3>Apple MQDT2CL/A 10.5-Inch 64GB Wi-Fi iPad Pro</h3>
                                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                                            </td>
                                            <td data-title="Category">Apple iPad</td>
                                            <td data-title="Ad Status"><span class="adstatus adstatussold">Sold</span>
                                            </td>
                                            <td data-title="Price">
                                                <h3>$159</h3>
                                            </td>
                                            <td data-title="Action">
                                                <div class="btns-actions">
                                                    <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                                                    <a class="btn-action btn-delete" href="#"><i
                                                            class="lni-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-category="expired">
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="adseven">
                                                    <label class="custom-control-label" for="adseven"></label>
                                                </div>
                                            </td>
                                            <td class="photo"><img class="img-fluid" src="assets/img/product/img7.jpg"
                                                    alt=""></td>
                                            <td data-title="Title">
                                                <h3>Essential Phone 8GB Unlocked with Dual Camera</h3>
                                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                                            </td>
                                            <td data-title="Category">Mobile</td>
                                            <td data-title="Ad Status"><span
                                                    class="adstatus adstatusexpired">Expired</span>
                                            </td>
                                            <td data-title="Price">
                                                <h3>$89</h3>
                                            </td>
                                            <td data-title="Action">
                                                <div class="btns-actions">
                                                    <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                                                    <a class="btn-action btn-edit" href="#"><i
                                                            class="lni-pencil"></i></a>
                                                    <a class="btn-action btn-delete" href="#"><i
                                                            class="lni-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-category="inactive">
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="adeight">
                                                    <label class="custom-control-label" for="adeight"></label>
                                                </div>
                                            </td>
                                            <td class="photo"><img class="img-fluid" src="assets/img/product/img8.jpg"
                                                    alt=""></td>
                                            <td data-title="Title">
                                                <h3>LG Nexus 5x LG-H791 32GB GSM Smartphone</h3>
                                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                                            </td>
                                            <td data-title="Category">Mobile</td>
                                            <td>
                                                <span class="adstatus adstatusinactive">Inactive</span>
                                            </td>
                                            <td data-title="Price">
                                                <h3>$59</h3>
                                            </td>
                                            <td data-title="Action">
                                                <div class="btns-actions">
                                                    <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                                                    <a class="btn-action btn-edit" href="#"><i
                                                            class="lni-pencil"></i></a>
                                                    <a class="btn-action btn-delete" href="#"><i
                                                            class="lni-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-category="expired">
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="adnine">
                                                    <label class="custom-control-label" for="adnine"></label>
                                                </div>
                                            </td>
                                            <td class="photo"><img class="img-fluid" src="assets/img/product/img9.jpg"
                                                    alt=""></td>
                                            <td data-title="Title">
                                                <h3>Samsung Galaxy G550T On5 GSM Unlocked Smartphone</h3>
                                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                                            </td>
                                            <td data-title="Category">Mobile</td>
                                            <td data-title="Ad Status"><span
                                                    class="adstatus adstatusexpired">Expired</span>
                                            </td>
                                            <td data-title="Price">
                                                <h3>$129</h3>
                                            </td>
                                            <td data-title="Action">
                                                <div class="btns-actions">
                                                    <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                                                    <a class="btn-action btn-edit" href="#"><i
                                                            class="lni-pencil"></i></a>
                                                    <a class="btn-action btn-delete" href="#"><i
                                                            class="lni-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-category="deleted">
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="adten">
                                                    <label class="custom-control-label" for="adten"></label>
                                                </div>
                                            </td>
                                            <td class="photo"><img class="img-fluid" src="assets/img/product/img10.jpg"
                                                    alt=""></td>
                                            <td data-title="Title">
                                                <h3>Apple iMac Pro 27" All-in-One Desktop, Space Gray</h3>
                                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                                            </td>
                                            <td data-title="Category">Apple iMac</td>
                                            <td data-title="Ad Status"><span
                                                    class="adstatus adstatusdeleted">Deleted</span>
                                            </td>
                                            <td data-title="Price">
                                                <h3>$389</h3>
                                            </td>
                                            <td data-title="Action">
                                                <div class="btns-actions">
                                                    <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                                                    <a class="btn-action btn-edit" href="#"><i
                                                            class="lni-pencil"></i></a>
                                                    <a class="btn-action btn-delete" href="#"><i
                                                            class="lni-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
                                    est,
                                    et euismod purus suscipit quis. Etiam euismod ornare elementum. Sed ex est,
                                    consectetur
                                    eget facilisis sed, auctor ut purus.</p>
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
                                hours a day, seven days
                                week
                            </p>
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

<!-- Mirrored from preview.uideck.com/items/Knowhere-1.1/account-myads.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Mar 2019 06:15:25 GMT -->

</html>