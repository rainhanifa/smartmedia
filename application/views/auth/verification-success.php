<div class="account_grid">
	<div class="container">
		<div class="col-md-12 login-left">
			<h4 class="tz-title-5 tzcolor-blue">
                <p class="tzweight_Bold"><span class="m_20">Please Login to Continue</span></p>
            </h4>
			<!--p>Login untuk melanjutkan</p-->
		</div>
		<div class="col-md-4 login-right">
		<?php if($this->session->flashdata("message") != "") { ?>
				<div class="alert alert-danger">
                    <button class="close" data-dismiss="alert">&times;</button>
                    <?php echo $this->session->flashdata("message");?>
                </div>
		<?php		}		?>
      		<form action="<?php echo base_url('auth/voucher')?>" method="post">
	        	<div>
					<span class="m_25">Email Address<label>*</label></span>
					<input type="text" name="email"> 
				</div>
				<div>
					<span class="m_25">Password<label>*</label></span>
					<input type="password" name="password"> 
					<input type="hidden" name="redirect" value="auth/verificationsuccess">
				</div>
				<input type="submit" value="Login" name="sumit">
			</form>
		</div>	
		<div class="clearfix"> </div>
    </div>
</div>