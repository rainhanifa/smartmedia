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
                                            <div class="box">
                                                <a class="btn btn-success btn-lg" href="#" data-toggle="modal" data-target="#create-site" ><i class="glyphicon glyphicon-plus"></i> Create Site</a>
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
                <!-- Modal3 -->
                <div class="modal fade modal-white" id="create-site" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <form action="<?php echo base_url("manage/createsite")?>" method="post">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content infotrophy-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Create New Site</h4>
                            </div>
                            <div class="modal-body">                            
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-12 col-lg-12 controls">
                                            <span class="m_25"><label>Nama Website</label></span> <input type="text" class="form-control" placeholder="" name="sitename">
                                        </div>
                                        <div class="col-sm-12 col-lg-12 controls">
                                            <span class="m_25"><label>Alamat Website</label></span>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" name="siteaddress"><div class="input-group-addon"> .voucher.co.id </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-12 controls">
                                            <span class="m_25"><label>E-mail Website</label></span> 
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" name="webmail">
                                                <div class="input-group-addon"> @voucher.co.id </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-12 controls">
                                            <span class="m_25"><label>Deskripsi</label></span>
                                            <textarea class="form-control" name="sitedesc"></textarea>
                                        </div>
                                    </div>
                                </div>                 
                            </div>
                          <!-- end modal-body -->
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal">CANCEL</button>
                                <input type="submit" class="btn btn-info" value="SUBMIT" name="submit" >
                            </div>
                        </div>
                        <!-- end modal-content -->
                    </div>
                </form>
                </div>
                <!-- END Modal3-->