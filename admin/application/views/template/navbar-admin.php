<?php
    $active= $this->router->fetch_class(); 
    
    $notif_invoice      = getTotalAwaiting();
    $notif_tiket        = getTotalTiketAktif();
    $total_notif        = $notif_invoice + $notif_tiket;

    $total_last_tickets      = getTotalTiketReplied();
    $last_tickets            = getLastTiketReplied();
?>
        <!-- BEGIN Navbar -->
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
                        <span class="badge badge-important"><?php echo $total_notif?></span>
                    </a>

                    <!-- BEGIN Notifications Dropdown -->
                    <ul class="dropdown-navbar dropdown-menu">
                        <li class="nav-header">
                            <i class="fa fa-warning"></i>
                            <?php echo $total_notif?> Notifications
                        </li>

                        <li class="notify">
                            <a href="<?php echo base_url('transaction/awaiting')?>">
                                <i class="fa fa-bullhorn orange"></i>
                                <p>Waiting Confirmation</p>
                                <span class="badge badge-warning"><?php echo $notif_invoice?></span>
                            </a>
                        </li>

                        <li class="notify">
                            <a href="<?php echo base_url('support/ticket')?>">
                                <i class="fa fa-ticket blue"></i>
                                <p>Open Ticket</p>
                                <span class="badge badge-info"><?php echo $notif_tiket ?></span>
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
                        <span class="badge badge-success"><?php echo $total_last_tickets ?></span>
                    </a>

                    <!-- BEGIN Messages Dropdown -->
                    <ul class="dropdown-navbar dropdown-menu">
                        <li class="nav-header">
                            <i class="fa fa-comments"></i>
                            <?php echo $total_last_tickets ?> New Responses 
                        </li>
                        <?php foreach($last_tickets as $ticket) { ?>
                        <li class="msg">
                            <a href="#">
                                <img src="<?php echo base_url('assets')?>/img/demo/avatar/avatar3.jpg" alt="Sarah's Avatar" />
                                <div>
                                    <span class="msg-title"><?php echo $ticket['first_name'] ?></span>
                                    <span class="msg-time">
                                        <i class="fa fa-clock-o"></i>
                                        <span><?php echo $ticket['date_detail'] ?></span>
                                    </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </a>
                        </li>
                        <?php } ?>
                        <li class="more">
                            <a href="<?php echo base_url('support/ticket')?>">See all tickets</a>
                        </li>
                    </ul>
                    <!-- END Notifications Dropdown -->
                </li>
                <!-- END Button Messages -->

                <!-- BEGIN Button User -->
                <li class="user-profile dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">
                        <img class="nav-user-photo" src="<?php echo base_url('assets')?>/img/demo/avatar/avatar5.jpg" alt="User's Photo" />
                        <span class="hhh" id="user_info">
                            <?php echo $this->session->userdata('admin_active_name'); ?>
                        </span>
                        <i class="fa fa-caret-down"></i>
                    </a>

                    <!-- BEGIN User Dropdown -->
                    <ul class="dropdown-menu drop-right dropdown-navbar">
                        <li class="nav-header">
                            <i class="fa fa-clock-o"></i>
                            Login From <?php echo $this->session->userdata['admin_active_time']?>
                        </li>
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

                        <li>
                            <a href="<?php echo base_url('auth/logout')?>">
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
                            <li><a href="<?php echo base_url("transaction/vouchers");?>">Voucher Activation</a></li>
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
                        <a href="<?php echo base_url("sites");?>">
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
                            <li><a href="<?php echo base_url("store/packages");?>">Packages</a></li>
                            <li><a href="<?php echo base_url("store/vouchers");?>">Vouchers</a></li>
                            <li><a href="<?php echo base_url("store/themes");?>">Theme</a></li>
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
                            <li><a href="<?php echo base_url("support/ticket");?>" >Tickets</a></li>
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