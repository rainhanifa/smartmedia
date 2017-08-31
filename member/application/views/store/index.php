            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-shopping-cart"></i> Store</h1>
                        <h4></h4>
                    </div>
                </div>
                <!-- END Page Title -->

                <!-- BEGIN Main Content -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box">
                            <div class="box-title">
                                <span><h3><strong>Voucher</strong></h3></span>
                            </div>
                            <div class="box-content">
                                <p>Sudah memiliki voucher? Anda bisa langsung mengaktifkan paket dengan voucher.</p>
                                <form class="form-inline" method="POST">
                                    <div class="form-group">
                                        <input type="text" name="voucher_code" placeholder="Masukkan kode voucher" class="form-control" id="voucher_code" required/>
                                    </div>
                                    <div class="form-group">
                                        <a name="check_voucher" class="btn btn-primary" id="check_voucher" data-toggle="modal" >Aktifkan</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="box">
                            <div class="box-title">
                                <span><h3><strong>Upgrade Package</strong></h3></span>
                            </div>
                            <div class="box-content">
                                <div class="row">
                                    <?php foreach($quota as $quota) {?>
                                    <div class="col-md-4">
                                        <div class="well well-lg">
                                            <div class="gambar">
                                                <img class="img-responsive img-thumbnail" src="<?php echo base_url('assets/img/')?>demo/basic.png" style="position:center;">
                                            </div>
                                            <h5 class="text-center"><strong><?php echo $quota['name_package']?></strong></h5><hr/>
                                            <?php if($quota['active_period'] > 0) { ?><p class="text-center">Masa Aktif <?php echo $quota['active_period']?> Hari</p><hr/> <?php } ?>
                                            <?php if($quota['domain'] > 0) { ?><p class="text-center"><?php echo $quota['domain']?> Subdomain</p><hr/> <?php } ?>
                                            <?php if($quota['email'] > 0) { ?><p class="text-center"><?php echo $quota['email']?> Email</p><hr/> <?php } ?>
                                            <?php if($quota['bandwidth'] > 0) { ?><p class="text-center"><?php echo $quota['bandwidth']?> MB Bandwith</p><hr/> <?php } ?>
                                            <?php if($quota['storage'] > 0) { ?><p class="text-center"><?php echo $quota['storage']?> MB Storage</p><hr/> <?php } ?>        
                                            <a href="<?php echo base_url('transaction/confirmation/').$quota['id_package']?>" class="btn-block btn btn-primary btn-lg text-center" >BELI</a>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-title">
                                <h3>Extension</h3>
                            </div>
                            <div class="box-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php foreach($extensions as $extension){ ?>
                                        <div class="col-md-3">
                                            <div class="well well-lg">
                                                <div class="gambar">
                                                    <img class="img-responsive img-thumbnail" src="<?php echo base_url('assets/img/')?>demo/days.png" style="position:center;">
                                                </div>
                                                <hr/><h5 class="text-center"><?php echo $extension['name_package']?></h5><hr/>
                                                
                                                <p>
                                                    <a class="btn-block btn btn-primary btn-lg" href="<?php echo base_url('transaction/confirmation/').$extension['id_package']?>">BELI</a>
                                                </p>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Main Content -->

                <!-- Modal Voucher -->
                <div class="modal fade modal-white" id="buy_voucher" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <form action="<?php echo base_url("transaction/activate_voucher");?>" method="post">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content infotrophy-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Aktivasi Voucher</h4>
                            </div>

                            <div id="voucher_detail">
                                <div class="modal-body">
                                    <img src="<?php echo base_url('assets/img/loader.gif')?>"/>
                                    
                                </div>         
                            </div>
                          <!-- end modal-body -->
                        </div>
                        <!-- end modal-content -->
                    </div>
                </form>    
                </div>
                <!-- end modal voucher -->


    <!--     <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url('assets')?>/assets/jquery/jquery-2.1.4.min.js"><\/script>')</script>
        <script src="<?php echo base_url('assets')?>/assets/bootstrap/js/bootstrap.min.js"></script>
 -->
            
            <script type="text/javascript">
                $('#check_voucher').click(function(e){
                    e.preventDefault();
                    var code = $("#voucher_code").val();
                        $.ajax({
                            url: "<?php echo base_url('store/get_voucher_by_code'); ?>",
                            data: "code=" + code,
                            success: function(html)
                            {
                                $("#voucher_detail").html(html);

                            }
                        });  
                    
                });

                $('#voucher_code').blur(function() {
                   if($('#voucher_code').val() !== "") {
                       $('#check_voucher').attr('data-target','#buy_voucher');
                   } else {
                      $('#check_voucher').removeAttr('data-target');
                      alert("Masukkan kode voucher terlebih dahulu");
                   }
                });
            </script>       