
<br/>
	<div class="account_grid-dua">
	<div class="container">
		<div class="col-md-4 login-left">
				<img src="<?php echo base_url("assets")?>/images/freestock/people1.jpg" class="img-responsive gambar" alt="" width="150px">
				<h4 class="tz-title-7 tzcolor-blue">
					<p class="tzweight_Bold tulisan"><span class="m_21">Paket Starter aktif!</span></p>
				</h4>
        <div class="col-md-3">
        </div>
        <div class="col-md-6 col-offset-3">
              <p>Anda mendapatkan:</p>
  				    <p><i class="fa fa-desktop"></i> 1 Website</p>
              <p><i class="fa fa-envelope"></i> 1 Email</p>
  				    <p><i class="fa fa-clock-o"></i> 30 hari masa aktif</p>
              <p><i class="fa fa-bar-chart-o"></i> 200 MB bandwidth</p>
              <p><i class="fa fa-cloud"></i> 200 MB storage</p>
        </div>
			</div>
		 <div class="col-md-8 login-right">
        <p> Satu langkah lagi untuk membuat website anda!</p>
        <?php if($this->session->flashdata("message") != "") { ?>
            <div class="alert alert-danger">
                        <button class="close" data-dismiss="alert">&times;</button>
                        <?php echo $this->session->flashdata("message");?>
                    </div>
        <?php   }   ?>
        <div class="col-md-12">
				<form class="form-horizontal" action="<?php echo base_url("auth/createsite")?>" method="post">
						<span class="m_25"><label>Nama Website</label></span>
								<div>
									<input type="text" class="form-control" placeholder="" name="sitename">
								</div>
						<span class="m_25"><label>Alamat Website</label></span>
								<div class="input-group">
									<input type="text" class="form-control" placeholder="" name="siteaddress">
									<div class="input-group-addon"> .voucher.co.id </div>
								</div>
						<span class="m_25"><label>E-mail Website</label></span>
								<div class="input-group">
									<input type="text" class="form-control" placeholder="" name="webmail">
									<div class="input-group-addon"> @voucher.co.id </div>
								</div>
						<span class="m_25"><label>Deskripsi</label></span>
							<textarea class="form-control" name="sitedesc"></textarea>
						<br/>	
						<input type="submit" value="Lanjutkan!" name="submit">
			     </form>
        </div>
				</div>
			</div>
			<br/>	
			<br/>	
