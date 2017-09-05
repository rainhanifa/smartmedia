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
                <!-- END Breadcrumb -->
               <!--  <div class="alert alert-info">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Latest Info! </strong> The page has been added.
                </div> -->
                
				
				<!-- Modal2 -->
                <div class="modal fade modal-white" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content infotrophy-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Add New Category</h4>
                            </div>
                            <div class="modal-body">                            
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-12 col-lg-12 controls">
                                            <input type="text" name="sitedesc" id="sitedesc" class="form-control" placeholder="Category name">
                                        </div>
                                    </div>
                                </div>                 
                            </div>
                          <!-- end modal-body -->
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal">CANCEL</button>
								<button class="btn btn-info" data-dismiss="modal">OK</button>
                            </div>
                        </div>
                        <!-- end modal-content -->
                    </div>
                </div>
				<!-- END Modal2-->
                <!-- BEGIN Main Content -->
            
                <?php echo $this->session->flashdata("warning")?>         

                <div class="box">
                    <a href="<?php echo base_url("store/theme_add");?>" class="btn btn-info">ADD NEW</a>
					<br/>
					<br/>        
                        <table class="table table-advance" id="transaction-table">
                            <thead class="table-flag-blue">
                                <tr>
                                    <th>#</th>
                                    <th>Name Theme</th>
									<th>Description Theme</th>
									<th>Preview 1</th>
                                    <th>Preview 2</th>
                                    <th>Preview 3</th>
									<th>File Theme</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                  <?php 
                                    $counter = 0;
                                    foreach($theme as $them){
                                        $counter++;
                                       
                                ?>

                                
                                <!-- Modal -->
                                <div class="modal fade modal-white" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content infotrophy-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Delete this theme?</h4>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal">CANCEL</button>
                                                <a class="btn btn-info btn-ok">DELETE</a>
                                            </div>
                                        </div>
                                        <!-- end modal-content -->
                                    </div>
                                </div>
                                <!-- END Modal-->
                                <tr>                               
                                    <td><?php echo $counter;?></td>
                                    <td><?php echo $them['name_theme']?></td>
                                    <td><?php echo $them['description_theme']?></td>
                                    <td><a href="<?php echo base_url('../assets/theme/').$them['name_theme'].$them["preview_1"]?>"> Preview</a></td>
                                    <td><a href="../../<?php echo $them["preview_2"]?>"> Preview</a></td>
                                    <td><a href="../../<?php echo $them["preview_3"]?>"> Preview</a></td>
                                    <td><a href="../../<?php echo $them['file_theme']?>">Download</a></td>
                                    <td><a  href="<?php echo base_url("store/theme_update/").$them['id_theme'];?>" class="glyphicon glyphicon-pencil"></a></td>
                                    <td><a  data-href="<?php echo base_url("store/theme_delete/").$them['id_theme'];?>" data-toggle="modal" data-target="#delete" class="glyphicon glyphicon-trash"></a></td>
                                </tr>
                                <?php }?>
                                
                            </tbody>
                        </table>
                </div>
                <!-- END Main Content -->
                <script type="text/javascript">
                    $('#delete').on('show.bs.modal', function(e) {
                        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                    });
                </script>       