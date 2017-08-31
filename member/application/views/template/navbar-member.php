<?php
    $active        = $this->router->fetch_class();
    $notif_invoice      = getTotalInvoiceDue();
    $notif_announcement = 0;
    $notif_expire       = getTotalActiveDue();
    $total_notif        = $notif_invoice + $notif_announcement + $notif_expire;


    $total_last_tickets      = getTotalTiketReplied();
    $last_tickets            = getLastTiketReplied();
?>
        <!-- BEGIN Navbar -->
        <div id="navbar" class="navbar">
            <button type="button" class="navbar-toggle navbar-btn collapsed" data-toggle="collapse" data-target="#sidebar">
                <span class="fa fa-bars"></span>
            </button>
            <a class="navbar-brand" href="#">
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
                        <span class="badge badge-important"><?php echo $total_notif ?></span>
                    </a>

                    <!-- BEGIN Notifications Dropdown -->
                    <ul class="dropdown-navbar dropdown-menu">
                        <li class="nav-header">
                            <i class="fa fa-warning"></i>
                            <?php echo $total_notif ?> Notifikasi
                        </li>

                        <li class="notify">
                            <a href="<?php echo base_url('announcement')?>">
                                <i class="fa fa-bullhorn orange"></i>
                                <p>Announcement</p>
                                <span class="badge badge-warning"><?php echo $notif_announcement ?></span>
                            </a>
                        </li>

                        <li class="notify">
                            <a href="<?php echo base_url('manage')?>">
                                <i class="fa fa-clock-o blue"></i>
                                <p>Masa Aktif</p>
                                <span class="badge badge-info"><?php echo $notif_expire ?></span>
                            </a>
                        </li>

                        <li class="notify">
                            <a href="<?php echo base_url('transaction')?>">
                                <i class="fa fa-shopping-cart green"></i>
                                <p>Pembayaran tertunda</p>
                                <span class="badge badge-success"><?php echo $notif_invoice ?></span>
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
                        <span class="badge badge-success"><?php echo $total_last_tickets?></span>
                    </a>

                    <!-- BEGIN Messages Dropdown -->
                    <ul class="dropdown-navbar dropdown-menu">
                        <li class="nav-header">
                            <i class="fa fa-comments"></i>
                            <?php echo $total_last_tickets?> Messages
                        </li>

                        <?php foreach($last_tickets as $ticket) { ?>
                        <li class="msg">
                            <a href="#">
                                <img src="<?php echo base_url('assets')?>/img/demo/avatar/avatar3.jpg" alt="Admin's Avatar" />
                                <div>
                                    <span class="msg-title"><?php echo $ticket['fullname'] ?></span>
                                    <span class="msg-time">
                                        <i class="fa fa-clock-o"></i>
                                        <span><?php echo $ticket['date_detail'] ?></span>
                                    </span>
                                </div>
                                <p><?php echo substr($ticket['message_detail'], 0, 100)."..."?></p>
                            </a>
                        </li>
                        <?php } ?>

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
                        <img class="nav-user-photo" src="<?php echo base_url('assets')?>/img/demo/avatar/avatar1.jpg" alt="Member's Photo" />
                        <span class="hhh" id="user_info">
                            <?php echo $this->session->userdata('is_active_name'); ?>
                        </span>
                        <i class="fa fa-caret-down"></i>
                    </a>

                    <!-- BEGIN User Dropdown -->
                    <ul class="dropdown-menu dropdown-navbar" id="user_menu">
                        <li class="nav-header">
                            <i class="fa fa-clock-o"></i>
                            Login From <?php echo $this->session->userdata['is_active_time']?>
                        </li>

                        <li>
                            <a href="<?php echo base_url("user/acc_setting");?>">
                                <i class="fa fa-cog"></i> Pengaturan Akun
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url("user/edit");?>">
                                <i class="fa fa-user"></i>
                                Profil Saya
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url("knowledgebase");?>">
                                <i class="fa fa-question"></i>
                                Bantuan
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

                    <li <?php echo ($active =="manage")? "class='active'" : "" ?>>
                        <a href="<?php echo base_url("manage");?>">
                            <i class="fa fa-desktop"></i>
                            <span>My Site</span>
                        </a>
                    </li>

                    <li <?php echo ($active =="transaction")? "class='active'" : "" ?>>
                        <a href="<?php echo base_url("transaction");?>">
                            <i class="fa fa-list-alt"></i>
                            <span>Transaction</span>
                        </a>
                    </li>


                    <li <?php echo ($active =="store")? "class='active'" : "" ?>>
                        <a href="<?php echo base_url("store");?>">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Store</span>
                        </a>
                    </li>

                    <li <?php echo ($active =="knowledgebase")? "class='active'" : "" ?>>
                        <a href="<?php echo base_url("knowledgebase");?>">
                            <i class="fa fa-lightbulb-o"></i>
                            <span>Knowledgebase</span>
                        </a>
                    </li>

                    <li <?php echo ($active =="announcement")? "class='active'" : "" ?>>
                        <a href="<?php echo base_url("announcement");?>">
                            <i class="fa fa-bullhorn"></i>
                            <span>Announcement</span>
                        </a>
                    </li>

                    <li <?php echo ($active =="support")? "class='active'" : "" ?>>
                        <a href="<?php echo base_url("support");?>">
                            <i class="fa fa-globe"></i>
                            <span>Support</span>
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


