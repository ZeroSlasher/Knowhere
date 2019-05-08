<div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">
    <aside>
        <div class="sidebar-box">
            <div class="user">
                <figure>
                    <a href="#"><img src="assets/img/author/img1.jpg" alt=""></a>
                </figure>
                <div class="usercontent">
                    <h3>{{Session::get('name')}}</h3>
                    <h4>Administrator</h4>
                </div>
            </div>
            <nav class="navdashboard">
                <ul>
                    <li>
                        <a class="active" href="admindashboard">
                            <i class="lni-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="approveoutlet">
                            <i class="lni-cog"></i>
                            <span>Approve Outlets</span>
                        </a>
                    </li>
                    <li>
                        <a href="usermanagement">
                            <i class="lni-layers"></i>
                            <span>User Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="outletmanagement">
                            <i class="lni-envelope"></i>
                            <span>Outlet Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="paymentinfo">
                            <i class="lni-envelope"></i>
                            <span>Payment informations</span>
                        </a>
                    </li>
                    <li>
                        <a href="undermaintainence">
                            <i class="lni-wallet"></i>
                            <span>Post Reportings</span>
                        </a>
                    </li>
                    <li>
                        <a href="undermaintainence">
                            <i class="lni-star"></i>
                            <span>Messages/Enquiries</span>
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