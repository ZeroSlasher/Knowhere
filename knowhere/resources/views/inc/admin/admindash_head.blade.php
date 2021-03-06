<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar"
                aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="lni-menu"></span>
                <span class="lni-menu"></span>
                <span class="lni-menu"></span>
            </button>
            <a href="/" class="navbar-brand"><img src="{{asset('images/logo.png')}}" alt="Knowhere"></a>
        </div>
        <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="/" aria-haspopup="true">Home</a>
                </li>
                @if(Session::get('utype')==1)

                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        About
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/about">About Us</a>
                        <a class="dropdown-item" href="/services">Services</a>
                        <a class="dropdown-item" href="/faq">FAQ</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/contact">
                        Contact
                    </a>
                </li>
                @endif
            </ul>
            <ul class="sign-in">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><i class="lni-user"></i> My Account</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/logout"><i class="lni-enter"></i> Logout</a>
                        @if(Session::get('utype')=='1')
                        <a class="dropdown-item" href="/admindashboard" class="button"><i
                                class="lni-home"></i>Dashboard</a>
                        @elseif(Session::get('utype')=='2')
                        <a class="dropdown-item" href="/ownerdashboard" class="button"><i
                                class="lni-home"></i>Dashboard</a>
                        @elseif(Session::get('utype')=='3')
                        <a class="dropdown-item" href="/userdashboard" class="button"><i
                                class="lni-home"></i>Dashboard</a>
                        @endif
                        <!-- <a class="dropdown-item" href="account-profile-setting.html"><i class="lni-home"></i> Account Home</a> -->

                    </div>
                </li>
            </ul>
            <!-- <a class="tg-btn" href="#">
                <i class="lni-pencil-alt"></i> Extras
            </a> -->
        </div>
    </div>

    <ul class="mobile-menu">
        <li>
            <a href="/">Home</a>
        </li>
        <li>
            <a href="/categories">Categories</a>
        </li>
        <li>
            <a href="/listing_list">Listings</a>
        </li>
        <li>
            <a href="#">Pages</a>
            <ul class="dropdown">
                <li><a href="/about">About Us</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="/faq">FAQ</a></li>
            </ul>
        </li>
        <li>
            <a href="/contact">Contact Us</a>
        </li>
        <li>
            <a>My Account</a>
            <ul class="dropdown">

                <li><a href="/logout"><i class="lni-home"></i>Logout</a></li>

                @if(Session::get('utype')=='1')
                <li><a href="/admindashboard"><i class="lni-enter"></i>Dashboard</a></li>
                @elseif(Session::get('utype')=='2')
                <li><a href="/ownerdashboard"><i class="lni-enter"></i>Dashboard</a></li>
                @elseif(Session::get('utype')=='3')
                <li><a href="/userdashboard"><i class="lni-enter"></i>Dashboard</a></li>
                @endif
                <!-- <li><a href="account-profile-setting.html"><i class="lni-home"></i> Account Home</a></li>-->

            </ul>
        </li>
    </ul>

</nav>