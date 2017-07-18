            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-laptop"></i> MY SITE</h1>
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
                        <li class="active">My Site</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->

                <!-- BEGIN Main Content -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="current-balance">
                                    <div class="box">
                                        <div class="box-title no-bg">
                                            <div class="box"><a class="btn btn-success btn-lg" href="<?php echo base_url('./../web-builder');?>"><i class="glyphicon glyphicon-plus"></i> Create Site</a></div>
                                            <div class="box-tool">
                                                <div class="box">Credit Balance: <span> Rp. 667 </span> <a class="btn btn-warning btn-lg"><i class="glyphicon glyphicon-ok"></i> Add </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="box">
                                        <div class="row">
                                        <?php foreach($sites as $site){?>
                                            <div class="col-md-3">
                                                <img class="img-responsive img-thumbnail" src="<?php echo base_url("assets");?>/img/demo/profile-picture.jpg" alt="profile picture" />
                                            </div>
                                            <div class="col-md-9">
                                                <h3><strong><?php echo $site['name_site']?></strong></h3>
                                                <br/>
                                                <p><span>Address :</span> <?php echo $site['address_site']?></p>
                                                <p><span>Package :</span> Basic</p>
                                                <br/>
                                                <p><a class="btn" href="<?php echo base_url('./../manage');?>">Manage Site</a></p>
                                            </div>
                                        </div>
                                        <hr/>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Main Content -->
                