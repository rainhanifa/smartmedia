            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-lightbulb-o"></i> CATEGORY</h1>
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
                        <li class="active">Category</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->

                <!-- <div class="alert alert-info">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Latest Info! </strong> The page has been added.
                </div> -->
               
				<!-- Modal -->
                <div class="modal fade modal-white" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content infotrophy-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
                            </div>
                            <div class="modal-body">                            
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-12 col-lg-12 controls">
                                            <input type="text" id="sitedesc" class="form-control" placeholder="Website" name="category_name">
                                        </div>
                                    </div>
                                </div>                 
                            </div>
                          <!-- end modal-body -->
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal">CANCEL</button>
								<a class="btn btn-info btn-ok" >OK</a>
                            </div>
                        </div>
                        <!-- end modal-content -->
                    </div>
                </div>
				<!-- END Modal-->
				
				<!-- Modal2 -->
                <div class="modal fade modal-white" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content infotrophy-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Delete this category?</h4>
                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal">CANCEL</button>
								<a class="btn btn-info btn-ok">DELETE</a>
                            </div>
                        </div>
                        <!-- end modal-content -->
                    </div>
                </div>
				<!-- END Modal2-->
				<!-- Modal3 -->
                <div class="modal fade modal-white" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <form action="<?php echo base_url("knowledgebase/category/add");?>" method="post">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content infotrophy-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Add New Category</h4>
                            </div>
                            <div class="modal-body">                            
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-12 col-lg-12 controls">
                                            <input type="text" name="category_name" id="category_name" class="form-control" placeholder="Category name">
                                        </div>
                                    </div>
                                </div>                 
                            </div>
                          <!-- end modal-body -->
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal">CANCEL</button>
								<input type="submit" class="btn" value="Submit" name="OK" >
                            </div>
                        </div>
                        <!-- end modal-content -->
                    </div>
                </form>
                </div>
                <!-- END Modal3-->
				
                <!-- BEGIN Main Content -->
               
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Available Credit Balance:  </strong> You have a credit balance of Rp. 667,00 and this will be automatically applied to any new invoices
                </div>     
                <?php echo $this->session->flashdata("warning")?>    
       

                <div class="box">
                    <a class="btn btn-info" data-dismiss="modal" data-toggle="modal" data-target="#add">ADD NEW</a>
					<br/>
					<br/>
                        <table class="table table-advance" id="category-table">
							<col style="width:auto">
							<col style="width:auto">
							<col style="width:10%">
							<col style="width:10%">
                            <thead class="table-flag-blue">
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $counter = 0;
                                    foreach($article_category as $list){
                                        $counter++;
                                       
                                ?>
                                <tr>                               
                                    <td><?php $counter;?></td>
									<td><?php echo $list['name_category']?></td>
									<td><a data-href="<?php echo base_url("knowledgebase/category/update?id=").$list['id_category'];?>" data-toggle="modal" data-target="#edit" class="glyphicon glyphicon-pencil"></a></td>
									<td><a data-href="<?php echo base_url("knowledgebase/category/delete?id=").$list['id_category'];?>" data-toggle="modal" data-target="#delete" class="glyphicon glyphicon-trash"></a></td>
                                    
                                </tr>
                                <?php }?>
                                <!-- <tr>   
									<td>2</td>
                                    <td>Web Builder</td>
									<td><a data-toggle="modal" data-target="#edit" class="glyphicon glyphicon-pencil"></a></td>
									<td><a data-toggle="modal" data-target="#delete" class="glyphicon glyphicon-trash"></a></td>
									
                                </tr>
								<tr>
									<td>3</td>
									<td>Hosting</td>
									<td><a data-toggle="modal" data-target="#edit" class="glyphicon glyphicon-pencil"></a></td>
									<td><a data-toggle="modal" data-target="#delete" class="glyphicon glyphicon-trash"></a></td>
								</tr>
                                <tr>   
									<td>4</td>
									<td>Voucher</td>
									<td><a data-toggle="modal" data-target="#edit" class="glyphicon glyphicon-pencil"></a></td>
									<td><a data-toggle="modal" data-target="#delete" class="glyphicon glyphicon-trash"></a></td>
                                    
                                </tr>
								<tr>
									<td>5</td>
									<td>Payment</td>
									<td><a data-toggle="modal" data-target="#edit" class="glyphicon glyphicon-pencil"></a></td>
									<td><a data-toggle="modal" data-target="#delete" class="glyphicon glyphicon-trash"></a></td>
                                </tr>                           -->                              
                            </tbody>
                        </table>
                </div>
                <!-- END Main Content -->
                <script type="text/javascript">
                    $('#edit').on('show.bs.modal', function(e) {
                        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                    });
                    $('#delete').on('show.bs.modal', function(e) {
                        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                    });

                </script>       