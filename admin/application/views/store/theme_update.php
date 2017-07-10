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
                 <?php echo $this->session->flashdata("warning")?>      

                    <?php foreach ($theme as $them): ?>                      

                <div class="box">
                    <div class="col sm-12">     
                        <div class="mail-content-announcement">
                            <form class="mail-compose form-horizontal" action="<?php echo base_url("store/theme_update");?>" method="post">
                                <div class="form-group">
                                    <input type="hidden" name="id_theme" value="<?php echo $them->id_theme; ?>">
                                    <label for="inputlasttname" class="col-sm-1 control-label">Name Theme</label>
                                        <div class="col-sm-11">
                                            <input type="text" class="form-control" name="name" value="<?php echo $them->name_theme; ?>">
                                        </div>      
                                </div>
                                <!-- <div class="form-group">       
                                    <label for="inputcountry" class="col-sm-1 control-label">Category</label>
                                    <div class="col-sm-11">
                                        <select class="form-control" name="category">
                                          
                                            <option value=""></option>
                                            
                                        </select>
                                    </div>
                                </div>   -->
                                <div class="form-group">
                                    <label for="inputlasttname" class="col-sm-1 control-label">Description Theme</label>
                                        <div class="col-sm-11">
                                            <p><textarea class="form-control wysihtml5" rows="6" name="description"><?php echo $them->description_theme; ?></textarea></p>
                                        </div>      
                                </div>
                                <div class="form-group">
                                      <label class="col-sm-2 col-lg-1 control-label">Preview 1</label>
                                      <div class="col-sm-10 col-lg-11 controls">
                                         <input type="file" class="form-control" name="preview1" value="<?php echo $them->preview_1; ?>"/>
                                      </div>
                                </div>  
                                <div class="form-group">
                                      <label class="col-sm-2 col-lg-1 control-label">Preview 2</label>
                                      <div class="col-sm-10 col-lg-11 controls">
                                         <input type="file" class="form-control" name="preview2" value="<?php echo $them->preview_2; ?>"/>
                                      </div>
                                </div>  
                                <div class="form-group">
                                      <label class="col-sm-2 col-lg-1 control-label">Preview 3</label>
                                      <div class="col-sm-10 col-lg-11 controls">
                                         <input type="file" class="form-control" name="preview3" value="<?php echo $them->preview_3; ?>"/>
                                      </div>
                                </div>  
                                
                               <div class="form-group">
                                      <label class="col-sm-2 col-lg-1 control-label">File Theme</label>
                                      <div class="col-sm-10 col-lg-11 controls">
                                         <input type="file" class="form-control" name="file" value="<?php echo $them->file_theme; ?>"/>
                                      </div>
                                </div>  

                                <div class="col-md-1"></div>
                                <p>
                                    <input type="submit" class="btn" value="Submit" name="submit">
                                </p>
                            </form> 
                <?php endforeach; ?>    
                        </div>                              
                    </div>                   
                </div>
                <!-- END Main Content -->

                