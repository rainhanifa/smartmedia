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
	    <!--   Creative Tim Branding   -->
	    <a href="http://illiyin.lam2x.com">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="<?php echo base_url('assets/')?>img/new_logo.png">
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
		                    <form action="" method="">
		                <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

		                    	<div class="wizard-header text-center">
		                        	<h3 class="wizard-title">A little more step</h3>
									<p class="category">and you'll have your own website!</p>
		                    	</div>

								<div class="wizard-navigation">
									<div class="progress-with-circle">
									     <div class="progress-bar" role="progressbar" aria-valuenow="2" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
									</div>
									<ul>
			                            <li>
											<a data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
												Profile
											</a>
										</li>
			                            <li>
											<a href="#voucher" data-toggle="tab" id="gotovoucher">
												<div class="icon-circle">
													<i class="ti-receipt"></i>
												</div>
												Voucher
											</a>
										</li>
			                            <li>
											<a>
												<div class="icon-circle">
													<i class="ti-settings"></i>
												</div>
												Setup
											</a>
										</li>
			                        </ul>
								</div>
		                        <div class="tab-content">
		                            <div class="tab-pane" id="profile">
		                            </div>
		                            <div class="tab-pane" id="voucher">
		                                <h5 class="info-text"> Enter your voucher code </h5>
		                                <div class="row">
		                                    <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="col-sm-12">
													<div class="form-group">
														<input name="voucher_code" type="text" class="form-control" placeholder="SMARTxxxxx">
													</div>
												</div>
											</div>
										</div>

		                                <div class="row">
		                                	<h5 class="info-text">You have activated <strong>Basic Packages</strong>!</h5>
		                                    <div class="col-sm-10 col-sm-offset-1">
			                                        <div class="col-sm-3">
														<div class="choice" data-toggle="wizard-checkbox">
			                                                <input type="checkbox" name="jobb" value="Design">
			                                                <div class="card card-checkboxes card-hover-effect">
			                                                    <i class="ti-desktop"></i>
																<p>1<br/>Website</p>
			                                                </div>
			                                            </div>
			                                        </div>
			                                        <div class="col-sm-3">
														<div class="choice" data-toggle="wizard-checkbox">
			                                                <input type="checkbox" name="jobb" value="Design">
			                                                <div class="card card-checkboxes card-hover-effect">
			                                                    <i class="ti-envelope"></i>
																<p>1<br/>Email</p>
			                                                </div>
			                                            </div>
			                                        </div>
			                                        <div class="col-sm-3">
														<div class="choice" data-toggle="wizard-checkbox">
			                                                <input type="checkbox" name="jobb" value="Design">
			                                                <div class="card card-checkboxes card-hover-effect">
			                                                    <i class="ti-package"></i>
																<p>200 MB<br/>Storage</p>
			                                                </div>
			                                            </div>
			                                        </div>
			                                        <div class="col-sm-3">
														<div class="choice" data-toggle="wizard-checkbox">
			                                                <input type="checkbox" name="jobb" value="Design">
			                                                <div class="card card-checkboxes card-hover-effect">
			                                                    <i class="ti-stats-up"></i>
																<p>200 MB<br/>Bandwidth</p>
			                                                </div>
			                                            </div>
			                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="address">
		                                <div class="row">
		                                    <div class="col-sm-12">
		                                        <h5 class="info-text"> Give information about your website </h5>
		                                    </div>
		                                    <div class="col-sm-12">
		                                    	<div class="form-group">
		                                            <label>Website Name</label>
		                                            <input name="sitename" type="text" class="form-control" placeholder="My Blog">
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-12">
		                                        <div class="form-group">
		                                            <label>Website Address</label>
		                                            <div class="input-group">
					                                    <input type="text" placeholder="" name="siteaddress">
					                                    <div class="input-group-addon"> .voucher.co.id </div>
					                                </div>
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-12">
		                                    	<div class="form-group">
		                                            <label>Email Address</label>
		                                            <div class="input-group">
					                                    <input type="text" placeholder="" name="webmail">
					                                    <div class="input-group-addon"> @voucher.co.id </div>
					                                </div>
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-12">
		                                        <div class="form-group">
		                                            <label>Website Description</label>
		                                            <textarea name="sitedesc" class="form-control"></textarea>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' />
		                                <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='Finish' />
		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
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
	<script src="<?php echo base_url('assets/')?>js/paper-bootstrap-wizard.js" type="text/javascript"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="<?php echo base_url('assets/')?>js/jquery.validate.min.js" type="text/javascript"></script>

	<script>
		$("#gotovoucher").get(0).click();
	</script>
</html>
