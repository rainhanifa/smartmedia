<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/')?>img/apple-icon.png" />
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/')?>img/favicon.png" />
	<title>Smart Media | Create Account</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- CSS Files -->
    <link href="<?php echo base_url('assets/')?>css/bootstrap.css" rel="stylesheet" />
	<link href="<?php echo base_url('assets/')?>css/paper-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="<?php echo base_url('assets/')?>css/demo.css" rel="stylesheet" />

	<!-- Fonts and Icons -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="<?php echo base_url('assets/')?>css/themify-icons.css" rel="stylesheet">
</head>

<body>
	
	<div class="image-container set-full-height" style="background-image: url('<?php echo base_url('assets/')?>images/paper-1.jpeg')">
	    <a href="http://illiyin.lam2x.com">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="<?php echo base_url('assets/images/')?>logo-square.png">
	            </div>
	            <div class="brand">
	                Smart Media
	            </div>
	        </div>
	    </a>
	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">

		            <!--      Wizard container        -->
		            <div class="wizard-container">

		                <div class="card wizard-card" data-color="blue" id="wizardProfile">
							<form action="<?php echo base_url("auth/register");?>" method="post">
		                    	<div class="wizard-header text-center">
		                        	<h3 class="wizard-title">Registrasi</h3>
									<p class="category">Lengkapi informasi berikut ini.</p>
		                    	</div>

								<div class="wizard-navigation">
									<div class="progress-with-circle">
									     <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
									</div>
									<ul>
			                            <li>
											<a href="#profile" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
												Akun
											</a>
										</li>
			                            <li>
											<a data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-receipt"></i>
												</div>
												Voucher
											</a>
										</li>
			                            <li>
											<a data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-settings"></i>
												</div>
												Pengaturan
											</a>
										</li>
			                        </ul>
								</div>
		                        <div class="tab-content">
		                            <div class="tab-pane" id="profile">
		                            	<div class="row">
											<h5 class="info-text"> Data Akun</h5>
											<div class="col-sm-10 col-sm-offset-1">
													<div class="form-group">
														<label>Nama Depan</label>
														<input name="firstname" type="text" class="form-control" placeholder="Andrew..." value="<?php echo $nama;?>">
													</div>
													<div class="form-group">
														<label>Nama Belakang</label>
														<input name="lastname" type="text" class="form-control" placeholder="Smith..." id="lastname">
													</div>
											</div>
											<div class="col-sm-10 col-sm-offset-1">
													<div class="form-group">
													<label>Email<small></small></label>
													<input name="email" type="email" class="form-control" placeholder="andrew@mail.com" value="<?php echo $email;?>">
												</div>
											</div>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>Password</label>
													<input name="password" type="password" class="form-control" placeholder="" id="password">
												</div>
											</div>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>Confirm Password</label>
													<input name="confirm_password" type="password" class="form-control" placeholder="">
												</div>
											</div>
										</div>
		                            </div>
		                            <div class="tab-pane" id="voucher">
		                                
		                            </div>
		                            <div class="tab-pane" id="address">
		                                
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='submit' class='btn btn-next btn-fill btn-warning btn-wd' name='submit' value='Lanjut' />
		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div><!-- end row -->
		</div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	            <span class="fa fa-copyright"></span> 2017 - <a href="http://illiyin.lam2x.com">Smart Media</a>
	        </div>
	    </div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="<?php echo base_url('assets/')?>js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/')?>js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/')?>js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="<?php echo base_url('assets/')?>js/form-validator/register-profil.js" type="text/javascript"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="<?php echo base_url('assets/')?>js/jquery.validate.min.js" type="text/javascript"></script>


</html>
