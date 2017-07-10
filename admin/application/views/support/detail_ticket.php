            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-list-ul"></i>Detail Ticket</h1>
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
                            <a href="<?php echo base_url("support/ticket")?>">Tickets</a>
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="active">Detail Ticket</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->
                <?php 
                    foreach($ticket as $list){
                ?> 

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-body">   
                                <h3>
                                    <span>VIEW <?php echo $list['subject_ticket']?></span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>
                                    <span><?php echo $list['status_ticket']?></span>
                                </h4>                           
                            </div>
                            <div class="col-md-3">
                                <p>
                                    <span><i class="fa fa-calendar-o"></i></span> <?php echo date('l', strtotime($list['date_ticket']))?>, <?php echo $list['date_ticket']?></span>
                                </p>
                            </div>
                            <div class="col-md-3">
                                <p>
                                    <span><i class="fa fa-users"></i></span> Billing Support</span>
                                </p>
                            </div>
                            <div class="col-md-3">
                                <p>
                                    <span><i class="fa fa-exclamation-circle"></i></span> <?php echo $list['priority']?> Priority</span>
                                </p>
                            </div>
                            <div class="col-md-3">
                                <p>
                                    <span><i class="fa fa-tag"></i></span> <?php echo $list['status_ticket']?></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <a class="btn btn-primary" href="#reply">Reply</a>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="box">
                                        <div class="box">
                                            <div class="box-title">
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-8">                                                
                                                        <h4><i class="fa fa-user"></i> <?php echo $list['client_id']?></h4>
                                                    </div>
                                                    <div class="col-md-6 col-lg-4" style="text-align:right;">
                                                       <p><i class="fa fa-clock-o"></i> <?php echo date('l', strtotime($list['date_ticket']))?>, <?php echo $list['date_ticket']?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-content">
                                                <p><?php echo $list['description']?></p>
                                                <p>Regards<br/><?php echo $list['client_id']?><br/>SmartMedia</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="msg-reply">
                                        <form class="horizontal-form" action="#">
                                            <p class="controls">
                                                <textarea class="form-control wysihtml5" name="msg-body" placeholder="Replay to this mail" rows="5" id="reply"></textarea>
                                            </p>
                                            <p>
                                                <button class="btn btn-primary"><i class="fa fa-reply"></i> Reply</button>
                                            </p>
                                        </form>
                                    </div>
                                    </div>    
                                </div>
                                <div style="float:right;">
                                    <p>Rate this Reply : <i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php  } ?>
                <!-- END Main Content -->