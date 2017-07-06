            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-file-text-o"></i>New Ticket</h1>
                    </div>
                </div>
                <!-- END Page Title -->

                <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                       <li>
                            <i class="fa fa-home"></i>
                            <a href="<?php echo base_url("dashboard")?>">Home</a>
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li>
                            <a href="<?php echo base_url("support")?>">My Ticket</a>
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="active"> New Ticket </li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->

                <!-- SUPPORT TICKET -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-content">
                                <div class="row">
                                    <br/>
                                    <a class="col-md-6" href="<?php echo base_url("support/open_ticket")?>">
                                        <div class="well well-lg">
                                            <h2><span>Technical Support</span></h2>
                                            <p><span>Questions about technical problem on Smart Media services</span></p>
                                        </div>
                                    </a>
                                    <a class="col-md-6" href="<?php echo base_url("support/open_ticket")?>">
                                        <div class="well well-lg">
                                            <h2><span>Sales Department</span></h2>
                                            <p><span>You can ask about Smart Media product here</span></p>
                                        </div>
                                    </a>
                                </div> 
                                <div class="row">
                                    <a class="col-md-6" href="<?php echo base_url("support/open_ticket")?>">
                                        <div class="well well-lg">
                                            <h2><span>Billing Support</span></h2>
                                            <p><span>Questions about billing, package upgrade, payment confirmation, dan cost services on Smart Media</span></p>
                                        </div>
                                    </a>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>

                <!-- END SUPPORT TICKETS -->               
                <!-- END Main Content -->