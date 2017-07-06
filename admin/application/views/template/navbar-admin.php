        <?php $active= $this->router->fetch_class(); ?>
        <!-- BEGIN Navbar -->
        <div id="navbar" class="navbar">
            <button type="button" class="navbar-toggle navbar-btn collapsed" data-toggle="collapse" data-target="#sidebar">
                <span class="fa fa-bars"></span>
            </button>
            <a class="navbar-brand" href="#">
                <small>
                    <i class="fa fa-html5"></i>
                    SMART MEDIA ADMIN
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
                        <img class="nav-user-photo" src="<?php echo base_url('assets')?>/img/demo/avatar/avatar5.jpg" alt="Administrator's Photo" />
                        <span class="hhh" id="user_info">
                            Administrator
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
                            <a href="#">
                                <i class="fa fa-cog"></i>
                                Account Settings
                            </a>
                        </li>

                        <li>
                            <a href="#">
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
        </div>
        <!-- END Navbar -->

        <!-- BEGIN Container -->
        <div class="container" id="main-container">
            <!-- BEGIN Sidebar -->
            <div id="sidebar" class="navbar-collapse collapse">
                <!-- BEGIN Navlist -->
                <ul class="nav nav-list">
                    <li <?php echo ($active =="dashboard")? "class='active'" : "" ?>>
                        <a href="<?php echo base_url("dashboard");?>">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li <?php echo ($active =="transaction")? "class='active'" : "" ?>>
                        <a class="dropdown-toggle">
                            <i class="fa fa-list-alt"></i>
                            <span>Transaction</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="<?php echo base_url("transaction");?>" >All Transaction</a></li>
                            <li><a href="<?php echo base_url("transaction/awaiting");?>">Awaiting Confirmation</a></li>
                            <li><a href="transaction-voucher.html">Voucher Activation</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>


                    <li <?php echo ($active =="clients")? "class='active'" : "" ?>>
                        <a href="<?php echo base_url("clients");?>">
                            <i class="fa fa-star"></i>
                            <span>Clients</span>
                        </a>

                    </li>

                    <li <?php echo ($active =="sites")? "class='active'" : "" ?>>
                        <a href="sites.html">
                            <i class="fa fa-desktop"></i>
                            <span>Sites</span>
                        </a>
                    </li>

                    <li <?php echo ($active =="store")? "class='active'" : "" ?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Store</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="packages.html">Packages</a></li>
                            <li><a href="vouchers.html">Vouchers</a></li>
                            <li><a href="theme.html">Theme</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>
                    
                    <li <?php echo ($active =="knowledgebase")? "class='active'" : "" ?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-lightbulb-o"></i>
                            <span>Knowledgebase</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="<?php echo base_url("knowledgebase");?>">Articles</a></li>
                            <li><a href="<?php echo base_url("knowledgebase/category");?>">Category</a></li>
                        </ul>
                        <!-- END Submenu -->

                    </li>

                    <li <?php echo ($active =="announcement")? "class='active'" : "" ?>>
                        <a href="<?php echo base_url("announcement");?>">
                            <i class="fa fa-bullhorn"></i>
                            <span>Announcement</span>
                        </a>

                    </li>

                    <li <?php echo ($active =="users")? "class='active'" : "" ?>>
                        <a href="<?php echo base_url("users");?>">
                            <i class="fa fa-users"></i>
                            <span>Users</span>
                        </a>
                    </li>
					
					<li <?php echo ($active =="support")? "class='active'" : "" ?>>
                        <a class="dropdown-toggle">
                            <i class="fa fa-globe"></i>
                            <span>Support</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <ul class="submenu">
                            <li><a href="tickets.html" >Tickets</a></li>
                            <li><a href="<?php echo base_url("support");?>">Departments</a></li>
                        </ul>
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