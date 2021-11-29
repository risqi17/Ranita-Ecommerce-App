<header class="app-header navbar">
    <div class="hamburger hamburger--arrowalt-r navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto">
        <div class="hamburger-box">
            <div class="hamburger-inner"></div>
        </div>
    </div>
    <!-- end hamburger -->
    <a class="navbar-brand" href="../../contents/dashboards/dashboard-sales.html">
        <strong>LVMCH</strong>
    </a>

    <div class="hamburger hamburger--arrowalt-r navbar-toggler sidebar-toggler d-md-down-none mr-auto">
        <div class="hamburger-box">
            <div class="hamburger-inner"></div>
        </div>
    </div>
    <!-- end hamburger -->

    <!-- end navbar-search -->

    <ul class="nav navbar-nav ">
        <li class="nav-item dropdown">
            <a class="nav-link " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="mdi mdi-bell-ring"></i>
                <span class="notification hertbit"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right notification-list animated flipInY nicescroll-box">

                <div class="dropdown-header">
                    <strong>Notification</strong>
                    <span class="badge badge-pill badge-theme pull-right"> new 5</span>
                </div>
                <!--end dropdown-header -->

                <div class="wrap">

                    <a href="#" class="dropdown-item">
                        <div class="message-box">
                            <div class="u-img">
                                <img src="http://via.placeholder.com/100x100" alt="user" />
                            </div>
                            <!-- end u-img -->
                            <div class="u-text">
                                <div class="u-name">
                                    <strong>A New Order has Been Placed </strong>
                                </div>
                                <small>2 minuts ago</small>
                            </div>
                            <!-- end u-text -->
                        </div>
                        <!-- end message-box -->
                    </a>
                    <!-- end dropdown-item -->

                    <a href="#" class="dropdown-item">
                        <div class="message-box">
                            <div class="u-img">
                                <img src="http://via.placeholder.com/100x100" alt="user" />
                            </div>
                            <div class="u-text">
                                <div class="u-name">
                                    <strong>Order Updated</strong>
                                </div>
                                <small>10 minuts ago</small>
                            </div>
                            <!-- end u-text -->
                        </div>
                        <!-- end message-box -->
                    </a>
                    <!-- end dropdown-item -->

                    <a href="#" class="dropdown-item">
                        <div class="message-box">
                            <div class="u-img">
                                <img src="http://via.placeholder.com/100x100" alt="user" />
                            </div>
                            <!-- end u-img -->
                            <div class="u-text">
                                <div class="u-name">
                                    <strong>A New Order has Been Placed </strong>
                                </div>
                                <small>30 minuts ago</small>
                            </div>
                            <!-- end u-text -->
                        </div>
                        <!-- end message-box -->
                    </a>
                    <!-- end dropdown -->

                    <a href="#" class="dropdown-item">
                        <div class="message-box">
                            <div class="u-img">
                                <img src="http://via.placeholder.com/100x100" alt="user" />
                            </div>
                            <!-- end u-img -->
                            <div class="u-text">
                                <div class="u-name">
                                    <strong> Order has Been Rated </strong>
                                </div>
                                <small>32 minuts ago</small>
                            </div>
                            <!-- end u-text -->
                        </div>
                        <!-- end message-box -->
                    </a>
                    <!-- end dropdown -->
                </div>
                <!-- end wrap -->

                <div class="dropdown-footer ">
                    <a href="">
                        <strong>See all messages (150) </strong>
                    </a>
                </div>
                <!-- end dropdown-footer -->
            </div>
            <!-- end notification-list -->

        </li>
        <!-- end nav-item -->

        <li class="nav-item dropdown">
            <a class="btn btn-round btn-theme btn-sm" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">

                <span class="">admin
                    <i class="fa fa-arrow-down"></i>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right user-menu animated flipInY ">
                <div class="wrap">
                    <div class="dw-user-box">
                        <div class="u-img">
                            <img src="http://via.placeholder.com/100x100" alt="user" />
                        </div>
                        <div class="u-text">
                        <h5>
                            @php
                                echo session()->get('user.username');
                            @endphp

                        </h5>
                            <p class="text-muted">
                                @php
                                    echo session()->get('user.email');
                                @endphp
                            </p>
                            <a href="#" class="btn btn-round btn-theme btn-sm">View Profile</a>
                        </div>
                    </div>
                    <!-- end dw-user-box -->

                    <a class="dropdown-item" href="#">
                        <i class="fa fa-user"></i> Profile</a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-wrench"></i> Settings</a>

                    <div class="divider"></div>

                    <a class="dropdown-item" href="{{ url('auth/logout') }}">
                        <i class="fa fa-lock"></i> Logout</a>
                </div>
                <!-- end wrap -->
            </div>
            <!-- end dropdown-menu -->
        </li>
        <!-- end nav-item -->


    </ul>

    <div class="hamburger hamburger--arrowalt-r navbar-toggler aside-menu-toggler ">
        <div class="hamburger-box">
            <div class="hamburger-inner"></div>
        </div>
    </div>
</header>
<!-- end header -->
