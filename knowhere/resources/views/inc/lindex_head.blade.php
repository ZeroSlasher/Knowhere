<header class="header fixed clearfix">
    <div class="left">
        <div class="logo"><a href="/"><img src="images/logo.png" alt="ExploreCity" class="img-responsive"></a></div>
        <!-- end .logo -->
        <form class="header-search">
            <input type="text" placeholder="I’m searching for ...">
            <button type="submit" disabled><i class="pe-7s-search"></i></button>
        </form>
    </div> <!-- end .left -->
    <div class="navigation clearfix">
        <nav class="main-nav">
            <ul class="list-unstyled">
                <!-- <li class="menu-item-has-children">
                    <a href="list.html">Explore</a>
                </li> -->
                <li class="menu-item-has-children">
                    <a href="#">About Us</a>
                    <ul>
                        <li><a href="about">About Us</a></li>
                        <li><a href="services">Services</a></li>
                        <li><a href="faq">FAQ</a></li>
                        <li><a href="howitworks">How it works</a></li>

                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="contact">Contact Us</a>
                </li>
            </ul>
        </nav> <!-- end .main-nav -->
        <a href="#" class="responsive-menu-open"><i class="fa fa-bars"></i></a>
    </div> <!-- end .navigation -->
    <div class="right">
        @if(Session::get('utype')=='1')
        <a href="/admindashboard" class="button">Dashboard</a>
        @elseif(Session::get('utype')=='2')
        <a href="/ownerdashboard" class="button">Dashboard</a>
        @elseif(Session::get('utype')=='3')
        <a href="/userdashboard" class="button">Dashboard</a>
        @endif
        <a href="/logout" class="button">Logout</a>
    </div> <!-- end .left -->
</header> <!-- end .header -->