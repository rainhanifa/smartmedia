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
		                    <form action="<?php echo base_url('auth/voucher')?>" method="post">
		                <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

		                    	<div class="wizard-header text-center">
		                        	<h3 class="wizard-title">Registrasi</h3>
									<p class="category">Masukkan kode voucher yang Anda miliki</p>
		                    	</div>

								<div class="wizard-navigation">
									<div class="progress-with-circle">
									     <div class="progress-bar" role="progressbar" aria-valuenow="2" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
									</div>
									<ul>
			                            <li>
											<a href="#profile" data-toggle="tab">
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
											<a  data-toggle="tab">
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
														<div class="col-sm-8">
															<input name="voucher_code" id="voucher_code" type="text" class="form-control" placeholder="Contoh: SM126129977">
														</div>
															<div class="col-sm-4">
															<button name="voucher_check" id="voucher_check" class="form-control">Enter</button>
														</div>
													</div>
												</div>
											</div>
										</div>
		                                <div class="row" id="voucher_detail">
		                                	
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="setup">
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
	<script src="<?php echo base_url('assets/')?>js/paper-bootstrap-wizard.js" type="text/javascript"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="<?php echo base_url('assets/')?>js/jquery.validate.min.js" type="text/javascript"></script>

	<script>
		//$('#wizardProfile').bootstrapWizard('show', 2);
		$('#gotovoucher').click();
	</script>

	<script type="text/javascript">

		$('#voucher_check').click(function(e){
			e.preventDefault();
	        var code = $("#voucher_code").val();
	        $.ajax({
	            url: "<?php echo base_url('auth/get_voucher_by_code'); ?>",
	            data: "code=" + code,
	            success: function(html)
	            {
	                $("#voucher_detail").html(html);

	            }
	        });
	    });
	</script>
</html>
