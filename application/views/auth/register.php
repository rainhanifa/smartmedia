<div class="about">
	<div class="container">
		<h1>Register<span class="m_1"><br>Center</span></h1>
	</div>
</div>
<div class="account_grid">
	<div class="container">
		<div class="register">
		<form action="<?php echo base_url("auth/registersuccess");?>"> 
			<div class="register-top-grid">
				<h4 class="tz-title-5 tzcolor-blue">
                	<p class="tzweight_Bold"><span class="m_20">Personal Information</span></p>
                </h4>
				<div>
					<span class="m_25">First Name<label>*</label></span>
					<input type="text"> 
				</div>
				<div>
					<span class="m_25">Last Name<label>*</label></span>
					<input type="text"> 
				</div>
				<div>
					<span class="m_25">Email Address<label>*</label></span>
					<input type="text"> 
				</div>
				<div class="clearfix"> </div>
					<a class="news-letter" href="#">
					<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
				</a>
				</div>

				<div class="register-bottom-grid">
					<h4 class="tz-title-5 tzcolor-blue">
                        <p class="tzweight_Bold"><span class="m_20">Login Information</span></p>
                    </h4>
					<div>
						<span class="m_25">Password<label>*</label></span>
						<input type="text">
					</div>
					<div>
						<span class="m_25">Confirm Password<label>*</label></span>
						<input type="text">
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="one-fifth">
					<div class="clearfix"> </div>
					<input type="submit" value="submit">
					<div class="clearfix"> </div>
				</div>
			</div>
		</form>
		</div>
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