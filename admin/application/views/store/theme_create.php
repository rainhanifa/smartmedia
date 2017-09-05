            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-shopping-cart"></i> THEME</h1>
                    </div>
                </div>
                <!-- END Page Title -->

               <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="<?php echo base_url("dashboard");?>">Home</a>
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="active">Theme</li>
                    </ul>
                </div>
                 <?php echo $this->session->flashdata("message")?>                            

                <div class="box">
                    <div class="col sm-12">     
						<div class="mail-content-announcement">
							<form class="mail-compose form-horizontal" action="<?php echo base_url("store/theme_add");?>" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="inputlasttname" class="col-sm-1 control-label">Name Theme</label>
										<div class="col-sm-11">
											<input type="text" class="form-control" name="name">
										</div>		
								</div>
								<div class="form-group">
                                    <label for="inputlasttname" class="col-sm-1 control-label">Description Theme</label>
                                        <div class="col-sm-11">
                                            <p><textarea class="form-control wysihtml5" rows="6" name="description"></textarea></p>
                                        </div>      
                                </div>
				
                                <div class="form-group">
                                      <label class="col-sm-2 col-lg-1 control-label">Preview 1</label>
                                      <div class="col-sm-10 col-lg-11 controls">
                                         <input type="file" class="form-control" name="preview1"/>
                                      </div>
                                </div>  
                                <div class="form-group">
                                      <label class="col-sm-2 col-lg-1 control-label">Preview 2</label>
                                      <div class="col-sm-10 col-lg-11 controls">
                                         <input type="file" class="form-control" name="preview2"/>
                                      </div>
                                </div>  
                                <div class="form-group">
                                      <label class="col-sm-2 col-lg-1 control-label">Preview 3</label>
                                      <div class="col-sm-10 col-lg-11 controls">
                                         <input type="file" class="form-control" name="preview3"/>
                                      </div>
                                </div>  
                                
                                <!-- <div class="form-group">
                                <label class="col-sm-2 col-lg-1 control-label">File Theme</label>
                                    <div class="col-sm-10 col-lg-11 controls">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new img-thumbnail" style="width: 210px; height: 160px;">
                                               <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists img-thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-default btn-file"><span class="fileupload-new">Select image</span>
                                                <span class="fileupload-exists">Change</span>
                                                <input type="file" class="file-input" name="file"/></span>
                                                <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                            </div>
                                        </div>
                                         <span class="label label-important">NOTE!</span>
                                         <span>Attached image img-thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only</span>
                                    </div>
                                </div>       -->
                               
                                <div class="form-group">
                                      <label class="col-sm-2 col-lg-1 control-label">File Theme</label>
                                      <div class="col-sm-10 col-lg-11 controls">
                                         <input type="file" class="form-control" name="file" />
                                      </div>
                                </div>  
                                <div class="col-md-1"></div>
								<p>
									<input type="submit" class="btn" value="Submit" name="submit">
								</p>
							</form>	
						</div>								
					</div>		             
                </div>
                <!-- END Main Content -->

                