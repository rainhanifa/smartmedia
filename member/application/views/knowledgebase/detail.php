            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-lightbulb-o"></i> KNOWLEDGEBASE</h1>
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


                <div class="alert alert-info">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Latest Info! </strong> The page has been added.
                </div>
                <!-- BEGIN Main Content -->
               
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Available Credit Balance:  </strong> You have a credit balance of Rp. 667,00 and this will be automatically applied to any new invoices
                </div>

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
                
                <?php foreach ($articles as $art): ?> 
                <div class="tag-list">
                    <div class="box">
                        <a href="#" class="btn disabled btn-gray"><?php echo $art['name_category']?></a>
                        <!-- <a href="#" class="btn disabled btn-gray">Lorem ipsum dolor sit amet, consectetur adipisicing </a>
                        <a href="#" class="btn disabled btn-gray">Lorem ipsum dolor sit amet, consectetur adipisicing </a>
                        <a href="#" class="btn disabled btn-gray">Lorem ipsum dolor sit amet, consectetur adipisicing </a>
                        <a href="#" class="btn disabled btn-gray">Lorem ipsum dolor sit amet, consectetur adipisicing </a>
                        <a href="#" class="btn disabled btn-gray">Lorem ipsum dolor sit amet, consectetur adipisicing </a>
                        <a href="#" class="btn disabled btn-gray">Gray</a> -->
                    </div>
                </div>
                <?php endforeach; ?>  
                
                <?php foreach ($articles as $art): ?> 
               <div class="news-list single-announcement"> 
                <div class="box-content">
                <!-- BEGIN Tab Content -->
                <div class="tab-content">               
                    <div class="tab-pane active" id="search-simple">
                        <!-- BEGIN Simple Search Result -->
                                <div class="info">
                                     <h2><?php echo $art['title_articles']?></h2>
                                     <div class="divider"></div>
                                            <p><?php echo $art['content_articles']?></p>
                                    <p class="news-date"><?php echo $art['date_articles']?></p>
                                </div>
                        <!-- END Simple Search Result -->
                    </div>
                    
                </div> 
                <?php endforeach; ?>  
            <!-- END Tab Content -->
                    </div>
                </div>
                <!-- END Main Content -->