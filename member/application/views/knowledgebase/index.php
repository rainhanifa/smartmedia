BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-lightbulb-o"></i> KNOWLEDGE BASE</h1>
                    </div>
                </div>
                <!-- END Page Title -->

                <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="index.html">Home</a>
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="active">Knowledgebase</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->


                <div class="current-balance">
                    <div class="box">
                        <div class="box-title no-bg">
                         <h2>Knowledgebase</h2>
                            <div class="box-tool">
                                <div class="box">Credit Balance: <span> Rp.667 </span> <a class="btn btn-warning btn-lg"><i class="glyphicon glyphicon-ok"></i> Add Deposit</a> </div>                                
                            </div>
                        </div>
                    </div>
                </div>
                
                  
                <div class="tag-list">
                    
                    <div class="box">
                        <?php foreach ($articles2 as $category): ?> 
                        <a href="#" class="btn disabled btn-gray"><?php echo $category['name_category']?></a>
                        <?php endforeach; ?>

                        <!-- <a href="#" class="btn disabled btn-gray">Lorem ipsum dolor sit amet, consectetur adipisicing </a>
                        <a href="#" class="btn disabled btn-gray">Lorem ipsum dolor sit amet, consectetur adipisicing </a>
                        <a href="#" class="btn disabled btn-gray">Lorem ipsum dolor sit amet, consectetur adipisicing </a>
                        <a href="#" class="btn disabled btn-gray">Lorem ipsum dolor sit amet, consectetur adipisicing </a>
                        <a href="#" class="btn disabled btn-gray">Lorem ipsum dolor sit amet, consectetur adipisicing </a>
                        <a href="#" class="btn disabled btn-gray">Gray</a> -->
                    </div>
                      
                </div>
                

               
                <div class="news-list"> 
                    <div class="box-content">
                        <!-- BEGIN Tab Content -->
                        <div class="tab-content">               
                            <div class="tab-pane active" id="search-simple">
                                <!-- BEGIN Simple Search Result -->
                   <?php 
                    $counter = 0;
                        foreach($articles as $art){
                    $counter++;
                ?>              
                                <div class="search-results search-results-simple">
                                    <ul class="clearfix">
                                        <li>
                                            <div class="info">
                                                <a href="single-knowledgebase.html" class="title"><?php echo $art['title_articles']?></a>
                                                <p class="news-date">Total Views: <?php echo $art['views_articles']?></p>
                                                <p><?php echo $string?>. . .</p>
                                                <a href="<?php echo base_url("knowledgebase/detail/").$art['id_articles'];?>"  class="btn btn-readmore btn-xs">Read More</a>
                                            </div>
                                        </li>
                   <?php  } ?>   
                                        <!-- <li>
                                            <div class="info">
                                                <a href="single-knowledgebase.html" class="title">Informasi Disable Fungsi PHP</a>
                                                <p class="news-date">Total Views: 9483</p>
                                                <p>Terima kasih atas kepercayaan anda akan layanan kami, Untuk semakin meningkatkan security pada layanan hosting anda, saat ini kami lakukan disable fungsi php berikut : eval ( dl Dimana fungsi php tersebut sering disalahgunakan oleh pihak yang tidak bertanggung jawab untuk melakukan aktivitas abuse. Upaya peningkatan security akan terus kami lakukan...</p>
                                                <a href="<?php echo base_url("knowledgebase/detail");?>" class="btn btn-readmore btn-xs">Read More</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                <a href="single-knowledgebase.html" class="title">Informasi Gangguan Network</a>
                                                <p class="news-date">Total Views: 12209</p>
                                                <p>Terima kasih atas kepercayaan anda akan layanan kami, Sebelumnya, Kami sampaikan permohonan maaf atas gangguan network pada  beberapa server kami, sehingga server tidak bisa melakukan koneksi ke luar datacenter. Saat ini proses perbaikan pada server tersebut masih berlangsung. Kami menyadari pentingnya akses ke website Anda dan berusaha untuk secepatnya menyelesaikan...</p>
                                                <a href="<?php echo base_url("knowledgebase/detail");?>" class="btn btn-readmore btn-xs">Read More</a>
                                            </div>
                                        </li> -->
                                    </ul>

                                </div>
                                <!-- END Simple Search Result -->
                            </div>

                            
                        </div>
                        <!-- END Tab Content -->
                        <div class="text-center">
                            <ul class="pagination">
                                <li class="disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- END Main Content-->