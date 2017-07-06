
<!-- BEGIN Navbar -->
<div id="navbar" class="navbar">
    <button type="button" class="navbar-toggle navbar-btn collapsed" data-toggle="collapse" data-target="#sidebar">
        <span class="fa fa-bars"></span>
    </button>
    <a class="navbar-brand" href="<?php echo base_url();?>">
        <small>
            <i class="fa fa-html5"></i>
            SMART MEDIA
        </small>
    </a>

    <!-- BEGIN Navbar Buttons -->
    <ul class="nav flaty-nav pull-right">
        <!-- BEGIN Button Notifications -->
        <li class="hidden-xs">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-bell"></i>
                <span class="badge badge-important">5</span>
            </a>

            <!-- BEGIN Notifications Dropdown -->
            <ul class="dropdown-navbar dropdown-menu">
                <li class="nav-header">
                    <i class="fa fa-warning"></i>
                    5 Notifications
                </li>

                <li class="notify">
                    <a href="#">
                        <i class="fa fa-bullhorn orange"></i>
                        <p>Maintenance Announcement</p>
                        <span class="badge badge-warning">1</span>
                    </a>
                </li>

                <li class="notify">
                    <a href="#">
                        <i class="fa fa-clock-o blue"></i>
                        <p>Site Expire Notice</p>
                        <span class="badge badge-info">1</span>
                    </a>
                </li>

                <li class="notify">
                    <a href="#">
                        <i class="fa fa-shopping-cart green"></i>
                        <p>You have pending payment</p>
                        <span class="badge badge-success">1</span>
                    </a>
                </li>
            </ul>
            <!-- END Notifications Dropdown -->
        </li>
        <!-- END Button Notifications -->

        <!-- BEGIN Button Messages -->
        <li class="hidden-xs">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope"></i>
                <span class="badge badge-success">3</span>
            </a>

            <!-- BEGIN Messages Dropdown -->
            <ul class="dropdown-navbar dropdown-menu">
                <li class="nav-header">
                    <i class="fa fa-comments"></i>
                    3 Messages
                </li>

                <li class="msg">
                    <a href="#">
                        <img src="<?php echo base_url('assets')?>/img/demo/avatar/avatar3.jpg" alt="Sarah's Avatar" />
                        <div>
                            <span class="msg-title">Sarah</span>
                            <span class="msg-time">
                                <i class="fa fa-clock-o"></i>
                                <span>a moment ago</span>
                            </span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </a>
                </li>

                <li class="msg">
                    <a href="#">
                        <img src="<?php echo base_url('assets')?>/img/demo/avatar/avatar4.jpg" alt="Emma's Avatar" />
                        <div>
                            <span class="msg-title">Emma</span>
                            <span class="msg-time">
                                <i class="fa fa-clock-o"></i>
                                <span>2 Days ago</span>
                            </span>
                        </div>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ...</p>
                    </a>
                </li>

                <li class="msg">
                    <a href="#">
                        <img src="<?php echo base_url('assets')?>/img/demo/avatar/avatar5.jpg" alt="John's Avatar" />
                        <div>
                            <span class="msg-title">John</span>
                            <span class="msg-time">
                                <i class="fa fa-clock-o"></i>
                                <span>8:24 PM</span>
                            </span>
                        </div>
                        <p>Duis aute irure dolor in reprehenderit in ...</p>
                    </a>
                </li>

                <li class="more">
                    <a href="#">See all messages</a>
                </li>
            </ul>
            <!-- END Notifications Dropdown -->
        </li>
        <!-- END Button Messages -->

        <!-- BEGIN Button User -->
        <li class="user-profile">
            <a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
                <img class="nav-user-photo" src="<?php echo base_url('assets')?>/img/demo/avatar/avatar1.jpg" alt="Penny's Photo" />
                <span class="hhh" id="user_info">
                    Penny
                </span>
                <i class="fa fa-caret-down"></i>
            </a>

            <!-- BEGIN User Dropdown -->
            <ul class="dropdown-menu dropdown-navbar" id="user_menu">
                <li class="nav-header">
                    <i class="fa fa-clock-o"></i>
                    Logined From 20:45
                </li>

                <li>
                    <a href="../view/account-setting.html">
                        <i class="fa fa-cog"></i>
                        Account Settings
                    </a>
                </li>

                <li>
                    <a href="../view/edit-profile.html">
                        <i class="fa fa-user"></i>
                        Edit Profile
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-question"></i>
                        Help
                    </a>
                </li>

                <li class="divider visible-xs"></li>

                <li class="visible-xs">
                    <a href="#">
                        <i class="fa fa-tasks"></i>
                        Tasks
                        <span class="badge badge-warning">4</span>
                    </a>
                </li>
                <li class="visible-xs">
                    <a href="#">
                        <i class="fa fa-bell"></i>
                        Notifications
                        <span class="badge badge-important">8</span>
                    </a>
                </li>
                <li class="visible-xs">
                    <a href="#">
                        <i class="fa fa-envelope"></i>
                        Messages
                        <span class="badge badge-success">5</span>
                    </a>
                </li>

                <li class="divider"></li>

                <li>
                    <a href="#">
                        <i class="fa fa-off"></i>
                        Logout
                    </a>
                </li>
            </ul>
            <!-- BEGIN User Dropdown -->
        </li>
        <!-- END Button User -->
    </ul>
    <!-- END Navbar Buttons -->
    <!-- BEGIN Horizontal Menu -->
    <ul class="nav flaty-nav navbar-collapse collapse" id="nav-horizontal">
        <li>
            <a href="#">
                <i class="fa fa-list-alt"></i>
                <span>Sub Domain</span>
            </a>
        </li>
    </ul>
    <!-- END Horizontal Menu -->
</div>
<!-- END Navbar -->

<!-- BEGIN Container -->
<div class="container" id="main-container">
    <!-- BEGIN Sidebar -->
    <div id="sidebar" class="navbar-collapse collapse">
        <!-- BEGIN Navlist -->
        <ul class="nav nav-list">
            <li class="active">
                <a href="index.html">
                    <i class="fa fa-th-large"></i>
                    <span>Overview</span>
                </a>
            </li>

            <li>
                <a href="mail_list.html">
                    <i class="fa fa-envelope-o"></i>
                    <span>Web Mail</span>
                </a>
            </li>

            <li>
                <a href="package.html">
                    <i class="fa fa-inbox"></i>
                    <span>Package</span>
                </a>
            </li>


            <li>
                <a href="store.html">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Store</span>
                </a>

            </li>
        </ul>
        <!-- END Navlist -->

        <!-- BEGIN Sidebar Collapse Button -->
        <div id="sidebar-collapse" class="visible-lg">
            <i class="fa fa-angle-double-left"></i>
        </div>
        <!-- END Sidebar Collapse Button -->
    </div>
    <!-- END Sidebar -->

