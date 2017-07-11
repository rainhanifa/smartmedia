            <!-- BEGIN Content --> 
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-lightbulb-o"></i> ANNOUNCEMENT</h1>
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
                        <li class="active">Announcement</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->

                <!-- BEGIN Main Content -->
               

               <div class="news-list single-announcements"> 
                <div class="box-content">
                <!-- BEGIN Tab Content -->
                <div class="tab-content">               
                    <div class="tab-pane active" id="search-simple">
                        <!-- BEGIN Simple Search Result -->
                                <div class="info">
                                    <?php 
                                        foreach($announcement as $list){
                                    ?>
                                    <h2><?php echo $list['title_announcement']?></h2>
                                    <div class="divider"></div>
                                            <p><?php echo $list['content_announcement']?></p>
                                           <!--  <p>
                                            Terima kasih atas kepercayaan anda akan layanan kami,
                                            Untuk semakin meningkatkan komunikasi yang berjalan pada member area, maka kami akan melakukan maintenance pada :  
                                            </p>
                                            <p>
                                            Hari / Tanggal : Sabtu, 6 Mei 2017 <br>
                                            Pukul : 22.00 - 06.00 WIB
                                            </p>
                                            <p>
                                            Selama proses maintenance, untuk akses ke member area tidak akan dapat dilakukan.
                                            Namun untuk jalur komunikasi chat dan telepon maupun email tetap dapat dilakukan.
                                            </p>
                                            <p>
                                            Demikian informasi maintenance kami.
                                            Atas perhatian dan kerjasamanya, kami ucapkan terima kasih.
                                            </p> -->
                                            <p>
                                            Regards,
                                            Jagoan Hosting Indonesia 
                                            </p>
                                            <br>
                                            <p>Regards <br> Smartmedia Indonesia</p>
                                    <p class="news-date"><?php echo date('l', strtotime($list['date_announcement']))?>, <?php echo $list['date_announcement']?></p>
                                    <?php  } ?>
                                </div>
                        <!-- END Simple Search Result -->
                    </div>
                    
                </div>
            <!-- END Tab Content -->
                    </div>
                </div>
                <!-- END Main Content -->