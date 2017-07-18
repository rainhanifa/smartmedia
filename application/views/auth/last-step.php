
<br/>
	<div class="account_grid-dua">
	<div class="container">
		<div class="col-sm-3 col-md-3 col-lg-2 login-left create-site">
            <img src="<?php echo base_url()?>/member/assets/img/demo/starter.png" class="img-responsive gambar" alt="" width="150px">
            <p class="tzweight_Bold">
                <span class="m_21">Paket Starter aktif!</span>
            </p>
            <div class="feature">
                <p>Anda mendapatkan:</p>
                <p><i class="fa fa-desktop"></i> 1 Website</p>
                <p><i class="fa fa-envelope"></i> 1 Email</p>
                <p><i class="fa fa-clock-o"></i> 30 hari masa aktif</p>
                <p><i class="fa fa-bar-chart-o"></i> 200 MB bandwidth</p>
                <p><i class="fa fa-cloud"></i> 200 MB storage</p>
            </div>
        </div>
		 <div class="col-sm-9 col-md-9 col-lg-10 login-right">
            <p> Satu langkah lagi untuk membuat website anda!</p>
            <?php if($this->session->flashdata("message") != "") { ?>
            <div class="alert alert-danger">
                <button class="close" data-dismiss="alert">&times;</button>
                <?php echo $this->session->flashdata("message");?>
            </div>
        <?php   }   ?>
                <div class="register register-site">
                    <form action="<?php echo base_url("auth/createsite")?>" method="post">
                        <div class="register-top-grid">
                            <div>
                                <span class="m_25"><label>Nama Website</label></span>
                                <input type="text" placeholder="" name="sitename">
                            </div>
                            <div>
                                <span class="m_25"><label>Alamat Website</label></span>
                                <div class="input-group">
                                    <input type="text" placeholder="" name="siteaddress">
                                    <div class="input-group-addon"> .voucher.co.id </div>
                                </div>
                            </div>
                            <div>
                                <span class="m_25"><label>E-mail Website</label></span>
                                <div class="input-group">
                                    <input type="text" placeholder="" name="webmail">
                                    <div class="input-group-addon"> @voucher.co.id </div>
                                </div>
                            </div>
                            <div>
                                <span class="m_25"><label>Deskripsi</label></span>
                                <textarea name="sitedesc"></textarea>
                            </div>
                            <div class="one-fifth">
                                <div class="clearfix"></div>
                                <input type="submit" value="Lanjutkan!" name="submit">
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                     </form>
                </div>
        </div>
    </div>
