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
			  	
			<p>If you have an account with us, please log in.</p>
			<form action="<?php echo base_url('Auth/doLogin')?>">
			    <div>
					<span class="m_25">Email Address<label>*</label></span>
					<input type="text"> 
				</div>
				<div>
					<span class="m_25">Password<label>*</label></span>
					<input type="text"> 
				</div>
				<a class="forgot" href="#">Forgot Your Password?</a>
				<input type="submit" value="Login">
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