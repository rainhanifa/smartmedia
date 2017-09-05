
            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <?php    
                    foreach ($articles as $art):
                        updateTotalViews($art['id_articles']);
                ?> 
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-lightbulb-o"></i> <?php echo $art['title_articles']?></h1>
                    </div>
                </div>
                <!-- END Page Title -->

                <div class="tag-list">
                    <div class="col-md-4">
                        <i class="fa fa-clock-o"></i> Administrator pada <?php echo $art['date_articles']?>
                    </div>
                    <div class="col-md-4">
                        <i class="fa fa-tags"></i> <a href="<?php echo base_url('knowledgebase/') ?>">Knowledgebase</a>
                         / 
                        <a href="<?php echo base_url('knowledgebase/articles/').$art['name_category'] ?>"><?php echo $art['name_category']?></a>
                    </div>
                    <div class="col-md-4">
                        <i class="fa fa-eye"></i> <?php echo $art['views_articles']+1;?> kali dilihat
                    </div>
                         
                </div> 
                
               <div class="news-list single-announcement"> 
                <div class="box-content">
                <!-- BEGIN Tab Content -->
                <div class="tab-content">               
                    <div class="tab-pane active" id="search-simple">
                        <!-- BEGIN Simple Search Result -->
                                <div class="info">
                                     <div class="divider"></div>
                                            <p><?php echo $art['content_articles']?></p>
                                </div>
                        <!-- END Simple Search Result -->
                    </div>
                    
                </div> 
                <?php endforeach; ?>  
            <!-- END Tab Content -->
                    </div>
                </div>
                <!-- END Main Content -->