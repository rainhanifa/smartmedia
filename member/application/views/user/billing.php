            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-user"></i> Billing Information</h1>
                    </div>
                </div>
                <!-- END Page Title -->
				
				<!-- BEGIN Form -->
				<?php if($this->session->flashdata("message") != "") echo $this->session->flashdata("message");?>
				<?php foreach($detail as $detail){ ?>
				<div class="container">
					<div class="col sm-12">
					<form class="form-horizontal" action="<?php echo base_url("user/edit")?>" method="post">
							<div class="form-group">
								<label for="inputfirstname" class="col-sm-2 control-label">First Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" placeholder="" name="first_name" value="<?php echo $profile['first_name']?>">
									</div>
									<div class="col-sm-2"></div>
							</div>
							<div class="form-group">
								<label for="inputlasttname" class="col-sm-2 control-label">Last Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" placeholder="" name="last_name" value="<?php echo $profile['last_name']?>">
									</div>
									<div class="col-sm-2"></div>
							</div>
							<div class="form-group">
								<label for="inputcompanyname" class="col-sm-2 control-label">Company Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" placeholder="" name="company_name" value="<?php echo $profile['company_name']?>">
									</div>
									<div class="col-sm-2"></div>
							</div>	
							<div class="form-group">		
								<label for="inputphonenumber" class="col-sm-2 control-label">Phone Number</label>
									<div class="col-sm-8">
										<input type="tel" class="form-control" placeholder="" name="phone" value="<?php echo $profile['phone_number']?>">
									</div>
									<div class="col-sm-2"></div>
							</div>		
							<div class="form-group">		
								<label for="inputaddress1" class="col-sm-2 control-label">Address 1</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" placeholder="" name="address_1" value="<?php echo $profile['address_1']?>">
									</div>
									<div class="col-sm-2"></div>
							</div>		
							<div class="form-group">		
								<label for="inputaddress2" class="col-sm-2 control-label">Address 2</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" placeholder="" name="address_2" value="<?php echo $profile['address_2']?>">
									</div>
									<div class="col-sm-2"></div>
							</div>		
							<div class="form-group">		
								<label for="inputcity" class="col-sm-2 control-label">City</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" placeholder="" name="city" value="<?php echo $profile['city']?>">
									</div>
									<div class="col-sm-2"></div>
							</div>		
							<div class="form-group">
								<label for="inputstate" class="col-sm-2 control-label">State/Region</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" placeholder="" name="region" value="<?php echo $profile['region']?>">
									</div>
									<div class="col-sm-2"></div>
							</div>		
							<div class="form-group">		
								<label for="inputzipcode" class="col-sm-2 control-label">ZIP Code</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" placeholder="" name="zip_code" value="<?php echo $profile['zip_code']?>">
									</div>
									<div class="col-sm-2"></div>
							</div>		
							<div class="form-group">		
							<label for="inputcountry" class="col-sm-2 control-label">Country</label>
								<div class="col-sm-8">
									<select class="form-control" name="country">
										<option value="Indonesia">Indonesia</option>
										<option value="United States">United States</option>
										<option value="Singapore">Singapore</option>
										<option value="Japan">Japan</option>
										<option value="Phillipine">Phillipine</option>
										<option value="Other">Other</option>
									</select>
								</div>
								<div class="col-sm-2"></div>
							</div>	
                            <div class="form-group">
								<label class="col-sm-3 col-lg-2 control-label">Image Upload</label>
                                    <div class="col-sm-9 col-lg-10 controls">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
											<div class="fileupload-new img-thumbnail" style="width: 210px; height: 160px;">
                                               <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists img-thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
											<div>
												<span class="btn btn-default btn-file"><span class="fileupload-new">Select image</span>
												<span class="fileupload-exists">Change</span>
												<input type="file" class="file-input" /></span>
												<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
											</div>
										</div>
                                         <span class="label label-important">NOTE!</span>
                                         <span>Attached image img-thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only</span>
                                    </div>
                            </div>		
							
							<input type="submit" class="btn btn-success btn-save btn-lg " value="Save Changes" name="submit">
					</form>
					</div>	
				</div>
				<?php }?>
				<!-- END Form -->

                    
                <!-- END Main Content -->