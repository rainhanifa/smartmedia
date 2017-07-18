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

                <div class="news-list"> 
                    <div class="box-content">
                        <!-- BEGIN Tab Content -->
                        <div class="tab-content">               
                            <div class="tab-pane active" id="search-simple">
                                <!-- BEGIN Simple Search Result -->
                                <div class="search-results search-results-simple">
                                    <ul class="clearfix">
                                        <?php 
                                            $counter = 0;
                                            foreach($announcement as $list){
                                                $counter++;
                                        ?>
                                        <li>
                                            <div class="info">
                                                <a href="single-announcement.html" class="title"><?php echo $list['title_announcement']?></a>
                                                <p class="news-date">Published on <?php echo $list['date_announcement']?></p>
                                                <p><?php echo $list['content_announcement']?></p>
                                                <a href="<?php echo base_url("announcement/detail/").$list['id_announcement']?>" class="btn btn-readmore btn-xs">Read More</a>
                                            </div>
                                        </li>
                                        <?php  } ?>
                                    </ul>
                                </div>
                                <!-- END Simple Search Result -->
                            </div>
                            
                        </div>
                        <!-- END Tab Content -->
                        <div class="text-center">
                            <ul class="pagination">
                                <li class="disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                <!-- Show pagination links -->
                                <?php if(is_array($links)){
                                    foreach ($links as $link) {
                                    echo "<li>". $link."</li>";
                                }} ?>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                <!-- END Main Content -->