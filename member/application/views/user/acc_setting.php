            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-cog"></i> Pengaturan Akun</h1>
                    </div>
                </div>
                <!-- END Page Title -->
				
				<!-- BEGIN Form -->
				<div class="container">
				<?php if($this->session->flashdata("message") != "") echo $this->session->flashdata("message");?>
					<div class="col sm-9">
					<form class="form-horizontal" action="<?php echo base_url('user/acc_setting')?>" method="POST" id="form-acc-setting">
							<div class="form-group">
								<label for="old" class="col-sm-2 control-label">Password Lama</label>
									<div class="col-sm-7">
										<input type="password" name="old" class="form-control" id="old" autofocus >
									</div>
							</div>
							<div class="form-group">
								<label for="new" class="col-sm-2 control-label">Password Baru</label>
									<div class="col-sm-7">
										<!--<input type="text" class="form-control" placeholder>-->
										<input type="password" name="new" id="new" class="form-control" placeholder="Password baru">
									</div>
							</div>
							<div class="form-group">
								<label for="confirm" class="col-sm-2 control-label">Konfirmasi Password</label>
									<div class="col-sm-7">
										<input type="password" name="confirm" id="confirm" class="form-control" placeholder="Ketik ulang password baru">
									</div>
							</div>	
							<input type="submit" class="btn btn-save" value="Simpan" name="submit">
					</form>
					</div>	
				</div>


    

