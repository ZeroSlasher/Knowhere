<!DOCTYPE html>
<html lang="en">

<head>


    <style>
    .h6,
    h6 {
        font-size: .75rem !important;
        font-weight: 500;
        font-family: Roboto, Helvetica, Arial, sans-serif;
        line-height: 1.5em;
        text-transform: uppercase;
    }

    .name h6 {
        margin-top: 10px;
        margin-bottom: 10px;
    }



    .fixed-top {
        position: fixed;
        z-index: 1030;
        left: 0;
        right: 0;
    }

    .profile-page .page-header1 {
        height: 380px;
        background-position: center;
    }

    .page-header1 {
        height: 100vh;
        background-size: cover;
        margin: 0;
        padding: 0;
        border: 0;
        display: flex;
        align-items: center;
    }

    .header-filter:after,
    .header-filter:before {
        position: absolute;
        z-index: 1;
        width: 100%;
        height: 100%;
        display: block;
        left: 0;
        top: 0;
        content: "";
    }



    .main-raised {
        margin: -60px 30px 0;
        border-radius: 6px;
        box-shadow: 0 16px 24px 2px rgba(0, 0, 0, .14), 0 6px 30px 5px rgba(0, 0, 0, .12), 0 8px 10px -5px rgba(0, 0, 0, .2);
    }

    .main {
        background: #FFF;
        position: relative;
        z-index: 3;
    }

    .profile-page .profile {
        text-align: center;
    }

    .profile-page .profile img {
        max-width: 50%;
        width: 100%;
        margin: 0 auto;
        -webkit-transform: translate3d(0, -50%, 0);
        -moz-transform: translate3d(0, -50%, 0);
        -o-transform: translate3d(0, -50%, 0);
        -ms-transform: translate3d(0, -50%, 0);
        transform: translate3d(0, -50%, 0);
    }

    .img-raised {
        box-shadow: 0 5px 15px -8px rgba(0, 0, 0, .24), 0 8px 10px -5px rgba(0, 0, 0, .2);
    }

    .rounded-circle {
        border-radius: 50% !important;
    }

    .img-fluid,
    .img-thumbnail {
        max-width: 100%;
        height: auto;
    }

    .title {
        margin-top: 30px;
        margin-bottom: 25px;
        min-height: 32px;
        color: #3C4858;
        font-weight: 700;
        font-family: "Roboto Slab", "Times New Roman", serif;
    }

    .profile-page .description {
        margin: 1.071rem auto 0;
        max-width: 600px;
        color: #999;
        font-weight: 300;
    }

    p {
        font-size: 14px;
        margin: 0 0 10px;
    }

    .profile-page .profile-tabs {
        margin-top: 4.284rem;
    }



    .tab-space {
        padding: 20px 0 50px;
    }

    .profile-page .gallery {
        margin-top: 3.213rem;
        padding-bottom: 50px;
    }

    .profile-page .gallery img {
        width: 100%;
        margin-bottom: 2.142rem;
    }

    .profile-page .profile .name {
        margin-top: -80px;
    }

    img.rounded {
        border-radius: 6px !important;
    }

    .tab-content>.active {
        display: block;
    }
    </style>
</head>

<body class="profile-page">

    <div class="page-header1" data-parallax="true" style="background-image:url('images/canvas.jpg');">
    </div>
    <div class="main main-raised">
        <div class="profile-content">
            <div class="container">
                <div class="row" style="margin-top: -250px;">
                    <div class="col-md-6 ml-auto mr-auto">
                        @isset($udata)
                        @foreach($udata as $u)
                        <div class="profile">
                            <div class="avatar">
                                @if($u->image != null)
                                <img src="/uploads/{{$u->image}}" alt="User Image"
                                    class="img-raised rounded-circle img-fluid">
                                @else
                                <img src="/images/user_1.jpg" alt="User Image"
                                    class="img-raised rounded-circle img-fluid">
                                @endif
                            </div>
                            <div class="name">
                                <h3 class="title">{{Session::get('name')}}</h3>
                                <span><a href="#">
                                        <h6>{{$u->title}}</h6>
                                    </a></span>

                            </div>
                        </div>
                    </div>
                </div>

                <div style="text-align: center;">
                    <span style="margin: 10px;"><i class="lni-user"></i>Name:
                        {{$u->name}}</span> &nbsp;

                    @if($u->city_id != null)
                    <span style="margin: 10px;"><i class="lni-map-marker"></i>City:
                        {{$u->city}}</span>&nbsp;
                    @endif
                    <span style="margin: 10px;"><i class="lni-phone-handset"></i>Phone:
                        {{$u->phone}}</span>&nbsp;
                    <span style="margin: 10px;"><i class="lni-home"></i>Address:
                        {{$u->oaddress}}</span>
                </div>



                @endforeach
                @endisset
                <div>

                    <br>

                    <div class="dashboard-sections" style="padding-left: 60px;">
                        <div class="row">
                            <!-- style="margin-left: 90px;" -->
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                <div class="dashboardbox">
                                    <div class="icon"><i class="lni-write"></i></div>
                                    <div class="contentbox">
                                        <h2><a href="#">Total Postings</a></h2>
                                        <h3>480 Posts</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                <div class="dashboardbox">
                                    <div class="icon"><i class="lni-add-files"></i></div>
                                    <div class="contentbox">
                                        <h2><a href="#">Featured Postings</a></h2>
                                        <h3>80 Postings</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                <div class="dashboardbox">
                                    <div class="icon"><i class="lni-support"></i></div>
                                    <div class="contentbox">
                                        <h2><a href="#">Messages</a></h2>
                                        <h3>2040 Messages</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <br>

                    <br>


                    <!-- body -->
                </div>


            </div>
        </div>
    </div>



</body>

</html>