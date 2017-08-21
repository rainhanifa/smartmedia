            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-paper-plane"></i> New Ticket</h1>
                    </div>
                </div>
                <!-- END Page Title -->

                <!-- SUPPORT TICKET -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-content">
                                <div class="row">
                                    <div class="col-md-12">
                                    <p>
                                    Temukan bantuan untuk masalah umum di halaman <a href="<?php echo base_url('Knowledgebase') ?>">Knowledgebase</a>. Jika Anda masih mengalami kesulitan, silakan hubungi departemen kami.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-content">
                                <div class="row">
                                    <br/>
                                    <ul>
                                        <?php 
                                            $counter = 0;
                                            foreach($department as $list){
                                                $counter++;
                                        ?>                                            
                                        <a class="col-md-6" href="<?php echo base_url("support/open_ticket/").$list['id_department']?>">
                                            <div class="well well-lg">
                                                <h2><span><?php echo $list['name_department']?></span></h2>
                                                <p><span><?php echo $list['description_department']?></span></p>
                                            </div>
                                        </a>
                                        <?php  } ?>
                                    </ul>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>