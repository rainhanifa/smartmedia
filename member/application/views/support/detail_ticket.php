            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-paper-plane"></i> Detail Ticket</h1>
                    </div>
                </div>
                <!-- END Page Title -->

                <?php 
                    foreach($tickets as $ticket){
                ?> 

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-body">   
                                <h3>
                                    <span><?php echo $ticket['subject_ticket']?></span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="col-md-3">
                                <p>
                                    <span><i class="fa fa-calendar-o"></i></span> <?php echo date('l', strtotime($ticket['date_open_ticket']))?>, <?php echo $ticket['date_open_ticket']?></span>
                                </p>
                            </div>
                            <div class="col-md-3">
                                <p>
                                    <span><i class="fa fa-users"></i></span> <?php echo $ticket['name_department']?></span>
                                </p>
                            </div>
                            <div class="col-md-3">
                                <p>
                                    <span><i class="fa fa-exclamation-circle"></i></span> <?php echo getPriorityName($ticket['priority_ticket'])?> Priority</span>
                                </p>
                            </div>
                            <div class="col-md-3">
                                <p>
                                    <span><i class="fa fa-tag"></i></span> <?php echo getStatusTiketName($ticket['status_ticket'])?></span>
                                </p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php  } ?>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="msg-reply">
                                        <form class="horizontal-form" action="<?php echo base_url("support/reply_ticket")?>" method="post">
                                            <p class="controls">
                                                <textarea class="form-control wysihtml5" name="message" placeholder="Reply" rows="5" id="reply"></textarea>
                                            </p>
                                            <p>
                                                <input type="hidden" value="<?php echo $ticket['id_ticket']?>" name="id_ticket">
                                                <input type="submit" class="btn btn-primary" value="Balas" name="submit">
                                            </p>
                                        </form>
                                    </div>
                                    </div>    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                    <?php
                                        foreach ($messages as $message) {
                                    ?>                                    
                                    <div class="box">
                                        <div class="box-title">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-8"> 
                                                    <h4><i class="fa fa-user"></i> <?php echo $message['fullname']." ".getPriviligeName($message['type'])?></h4>
                                                </div>
                                                <div class="col-md-6 col-lg-4" style="text-align:right;">
                                                   <p><i class="fa fa-clock-o"></i> <?php echo date('l, d-M-Y', strtotime($message['date_detail']))?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-content">
                                            <p><?php echo $message['message_detail']?></p>
                                           
                                        </div>
                                    </div>
                                    <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Main Content -->