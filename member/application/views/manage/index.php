            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-laptop"></i> MY SITE</h1>
                    </div>
                </div>
                <!-- END Page Title -->

                <!-- BEGIN Main Content -->

                <?php
                    if($is_exist_account > 0){
                        foreach($user_account as $detail){
                            $available_domain   = $detail['domain'] - $total_sites;
                            $available_email    = $detail['email'];
                            $available_storage  = $detail['storage'];

                            //date format
                            date_default_timezone_set('UTC');
                            $end_date           = DateTime::createFromFormat('Y-m-d', $detail['end_date']);

                            $remaining_days = getRemainingActivePackage($detail['end_date']);
                            

                        }

                        if(!getStatusPackage()){
                                if($remaining_days == "Expired"){
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Masa Aktif Anda telah habis!</strong> 
                                    Aktifkan dengan voucher perpanjangan atau beli paketnya di <a href="<?php echo base_url('store')?>">Store</a>
                                </div>
                            <?php } else { ?>
                                <div class="alert alert-warning">
                                    <strong>Masa Aktif Anda akan habis!</strong> 
                                    Aktifkan dengan voucher perpanjangan atau beli paketnya di <a href="<?php echo base_url('store')?>">Store</a>
                                </div>
                            <?php }?>
                <?php   } ?>
                <!-- BEGIN Tiles --> 
                    <div class="row">
                        <div class="col-md-3">
                            <div class="tile tile-mysites">
                                <div class="<?php echo base_url('assets')?>/img">
                                    <i class="fa fa-desktop"></i>
                                </div>
                                <div class="content">
                                    <p class="big"><?php echo $available_domain ?></p>
                                    <p class="title">Slot Website Tersedia</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="tile tile-due">
                                <div class="<?php echo base_url('assets')?>/img">
                                    <i class="fa fa-files-o"></i>
                                </div>
                                <div class="content">
                                    <p class="big"><?php echo $available_storage ?> MB</p> 
                                    <p class="title">Penyimpanan Tersedia</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="tile tile-tickets">
                                <div class="<?php echo base_url('assets')?>/img">
                                    <i class="fa fa-ticket"></i>
                                </div>
                                <div class="content">
                                    <p class="big"><?php echo $available_email ?></p>
                                    <p class="title">Slot Akun Email Tersedia</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="tile tile-credits">
                                <div class="<?php echo base_url('assets')?>/img">
                                    <i class="fa fa-credit-card"></i>
                                </div>
                                <div class="content">
                                    <p class="big"><?php echo $remaining_days ?></p>
                                    <p class="title">Masa Aktif hingga <?php echo $end_date->format("d-m-Y") ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Tiles -->

                <?php } else { ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning">
                                <button class="close" data-dismiss="alert">&times;</button>
                                <strong>Anda belum memiliki paket aktif</strong> <a href="<?php echo base_url('store')?>">Aktifkan sekarang</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-body">
                                <?php if(getStatusPackage()) {
                                        if(isset($available_domain)){ 
                                            if($available_domain > 0){ ?>
                                            <div class="box">
                                                <div class="row">
                                                    <a class="btn btn-success btn-lg" href="#" data-toggle="modal" data-target="#create-site" ><i class="glyphicon glyphicon-plus"></i> Create Site</a>
                                                </div>
                                            </div>
                                <?php } } }?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                    <?php foreach($sites as $site){?>
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong><?php echo $site['name_site']?></strong></h4>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-3">
                                    <div class="preview-template">
                                        <div class="preview-hover"></div>
                                        <img class="img-responsive" src="<?php echo base_url("assets");?>/img/demo/template-picture.jpg" alt="profile picture" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <table class="table table-striped table-manage">
                                        <tbody>
                                            <tr>
                                                <td width="10%">URL</td>
                                                <td width="10%" align="center">:</td>
                                                <td><a href="http://<?php echo $site['address_site']?>.smartmedia.com"><?php echo $site['address_site']?>.smartmedia.com</a></td>
                                            </tr>
                                            <tr>
                                                <td width="10%">Deskripsi</td>
                                                <td width="10%" align="center">:</td>
                                                <td><?php echo $site['description_site']?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-3">
                                    <p><a class="btn btn-action btn-edit <?php echo (!getStatusPackage()) ? 'disabled' : ''; ?>" href="<?php echo base_url('./../web-builder');?>"><i class="fa fa-edit"></i> Edit Site</a></p>

                                    <p><a class="btn btn-action btn-view <?php echo (!getStatusPackage()) ? 'disabled' : ''; ?>" href="<?php echo base_url('./../manage');?>"><i class="fa fa-desktop"></i> View Site</a></p>

                                    <p><a class="btn btn-action btn-delete <?php echo (!getStatusPackage()) ? 'disabled' : ''; ?>" href="<?php echo base_url('./../manage');?>"><i class="fa fa-trash-o"></i> Delete Site</a></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
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