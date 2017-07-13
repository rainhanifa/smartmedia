<div class="about">
	<div class="container">
		<h1>Login<span class="m_1"><br>Center</span></h1>
	</div>
</div>
<div class="account_grid">
	<div class="container">
		<div class="col-md-6 login-left">
			<h4 class="tz-title-5 tzcolor-blue">
                <p class="tzweight_Bold"><span class="m_20">New Customers</span></p>
            </h4>
			<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
			<a class="acount-btn" href="<?php echo base_url('auth/register')?>">Create an Account</a>
		</div>
		<div class="col-md-6 login-right">
		   	<h4 class="tz-title-5 tzcolor-blue">
                <p class="tzweight_Bold"><span class="m_20">Registered Customers</span></p>
            </h4>
            <?php if($this->session->flashdata("message") != ""){ ?>
                    <div class="alert alert-danger">
                        <button class="close" data-dismiss="alert">&times;</button>
                        <?php echo $this->session->flashdata("message");?>
                    </div>
            <?php } else { ?>
            		<p>If you have an account with us, please log in.</p>
            <?php } ?>
			<form action="<?php echo base_url('Auth/doLogin')?>" method="post">
			    <div>
					<span class="m_25">Email Address<label>*</label></span>
					<input type="text" name="email"> 
				</div>
				<div>
					<span class="m_25">Password<label>*</label></span>
					<input type="password" name="password"> 
					<input type="hidden" name="redirect" value="<?php echo $this->session->flashdata('redirect')?>">
				</div>
				<a class="forgot" href="<?php echo base_url("member/auth/login")?>">Forgot Your Password?</a>
				<input type="submit" value="Login" name="submit">
			</form>
		</div>	
		<div class="clearfix"> </div>
    </div>
</div>
<div class="domain">
	<div class="container">
		<form class="search-form domain-search">
			<div class="two-fifth signup column first">
			    <img src="<?php echo base_url("assets");?>/images/msg.png" alt="">
			    <h2><span class="m_1">Sign Up Your</span><br>Newsletter</h2>
			</div>
            <div class="three-fifth searchbar column first">
                <input type="text" class="text" value="Enter your domain name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your domain name';}">               
            </div>
            <div class="one-fifth col_2 ">
            	<input type="submit" value="Sign Up Now">
            </div>
            <div class="clearfix"> </div>
        </form>
    </div>
</div>