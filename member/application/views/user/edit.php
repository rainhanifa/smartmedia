            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-user"></i> Profil Saya</h1>
                    </div>
                </div>
                <!-- END Page Title -->
				
				<!-- BEGIN Form -->
				<?php if($this->session->flashdata("message") != "") echo $this->session->flashdata("message");?>
				<?php foreach($profile as $profile){ ?>
				<div class="container">
					<div class="col sm-12">
					<form class="form-horizontal" action="<?php echo base_url("user/edit")?>" method="post">
							<div class="form-group">
								<label for="inputfirstname" class="col-sm-2 control-label">Nama Lengkap</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" placeholder="" name="first_name" value="<?php echo $profile['first_name']?>" autofocus>
									</div>
									<div class="col-sm-5">
										<input type="text" class="form-control" placeholder="" name="last_name" value="<?php echo $profile['last_name']?>">
									</div>
							</div>
							<div class="form-group">
								<label for="inputcompanyname" class="col-sm-2 control-label">Institusi</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" placeholder="" name="company_name" value="<?php echo $profile['company_name']?>">
									</div>
							</div>	
							<div class="form-group">		
								<label for="inputphonenumber" class="col-sm-2 control-label">No. Telp</label>
									<div class="col-sm-10">
										<input type="tel" class="form-control" placeholder="" name="phone" value="<?php echo $profile['phone_number']?>">
									</div>
							</div>		
							<div class="form-group">		
								<label for="inputaddress1" class="col-sm-2 control-label">Alamat 1</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" placeholder="" name="address_1" value="<?php echo $profile['address_1']?>">
									</div>
							</div>		
							<div class="form-group">		
								<label for="inputaddress2" class="col-sm-2 control-label">Alamat 2</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" placeholder="" name="address_2" value="<?php echo $profile['address_2']?>">
									</div>
							</div>		
							<div class="form-group">		
								<label for="city" class="col-sm-2 control-label">Kota/Propinsi</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" placeholder="Kota" name="city" value="<?php echo $profile['city']?>">
									</div>
									<div class="col-sm-5">
										<input type="text" class="form-control" placeholder="Propinsi" name="region" value="<?php echo $profile['region']?>">
									</div>
							</div>		
							<div class="form-group">		
								<label for="zip_code" class="col-sm-2 control-label">Kode Pos</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" placeholder="" name="zip_code" value="<?php echo $profile['zip_code']?>">
									</div>
							</div>		
							<div class="form-group">		
							<label for="country" class="col-sm-2 control-label">Negara</label>
								<div class="col-sm-5">
									<select class="form-control" name="country">
										<option value="Indonesia">Indonesia</option>
										<option value="Other">Other</option>
									</select>
								</div>
							</div>	
                            <div class="form-group">
								<label class="col-sm-3 col-lg-2 control-label">Foto Profil</label>
                                    <div class="col-sm-10">
                                    <i>Upload foto tidak tersedia</i>
                                    </div>
                            </div>		
							
							<input type="submit" class="btn btn-save" value="Simpan" name="submit">
					</form>
					</div>	
				</div>
				<?php }?>
				<!-- END Form -->

                    
                <!-- END Main Content -->