BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-lightbulb-o"></i> KNOWLEDGEBASE</h1>
                    </div>
                </div>
                <!-- END Page Title -->

                  
                <div class="tag-list">
                    
                    <div class="box"><a href="<?php echo base_url('knowledgebase/articles') ?>" class="btn btn-gray">All Category</a>
                        <?php foreach ($categories as $category): ?> 
                        <a href="<?php echo base_url('knowledgebase/articles/').$category['name_category'] ?>" class="btn btn-gray"><?php echo $category['name_category']?></a>
                        <?php endforeach; ?>
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
                                                <p><?php echo substr(strip_tags($art['content_articles']), 0, 100)?> ...</p>
                                                <a href="<?php echo base_url("knowledgebase/detail/").$art['id_articles'];?>"  class="btn btn-readmore btn-xs">Read More</a>
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
                            <?php echo $this->pagination->create_links();?>
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