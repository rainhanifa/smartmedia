            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-globe"></i> DEPARTMENTS</h1>
                    </div>
                </div>
                <!-- END Page Title -->

               <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="index.html">Home</a>
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="active">Departments</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->
                
                <!-- Modal -->
                <div class="modal fade modal-white" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <form action="<?php echo base_url("support/update");?>" method="post">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content infotrophy-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Edit Department</h4>
                                </div>
                                <div class="modal-body">
                                    <div id="container_update">
                                    </div>                             
                                                     
                                </div>
                                <!-- end modal-body -->
                                <div class="modal-footer">
                                    <button class="btn" data-dismiss="modal">CANCEL</button>
                                    <input type="submit" class="btn btn-info" value="Submit" name="submit">
                                </div>
                            </div>
                            <!-- end modal-content -->
                        </div>
                    </form>
                </div>
                <!-- END Modal-->
				<!-- Modal2 -->
                <div class="modal fade modal-white" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content infotrophy-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Delete this department?</h4>
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
                    <form action="<?php echo base_url("support/add");?>" method="post">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content infotrophy-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Add New Department</h4>
                                </div>
                                <div class="modal-body">                            
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-12 col-lg-12 controls distance">
                                                <input type="text" class="form-control" placeholder="Department name" name="name" value="">
                                            </div>
                                            <div class="col-sm-12 col-lg-12 controls distance">
                                                <textarea class="form-control" placeholder="Description" name="desc"></textarea>
    											<p></p>
    										</div>
                                        </div>
                                    </div>                 
                                </div>
                                <!-- end modal-body -->
                                <div class="modal-footer">
                                    <button class="btn" data-dismiss="modal">CANCEL</button>
    								<input type="submit" class="btn btn-info" value="Submit" name="submit">
                                </div>
                            </div>
                            <!-- end modal-content -->
                        </div>
                    </form>
                </div>
				<!-- END Modal3-->
				
                <!-- BEGIN Main Content -->           

                <?php echo $this->session->flashdata("warning")?>

                <div class="box">
                    <a class="btn btn-info" data-dismiss="modal" data-toggle="modal" data-target="#add">ADD NEW</a>
					<br/>
					<br/>
                    
                        <table class="table table-advance" id="support-table">
                            <thead class="table-flag-blue">
                                <tr>
                                    <th>#</th>
                                    <th>Department Name</th>
									<th>Department Description</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $counter = 0;
                                foreach($departments as $list){
                                    $counter++;
                            ?>
                                <tr>                               
                                    <td><?php echo $counter;?></td>
									<td><?php echo $list['name_department']?></td>
									<td><?php echo $list['description_department']?></td>
									<td><a id="update" data-href="<?php echo base_url("support/update?id=").$list['id_department'];?>" data-id="<?php echo $list['id_department'];?>" data-toggle="modal" data-target="#edit" class="glyphicon glyphicon-pencil"></a></td>
									<td><a data-href="<?php echo base_url("support/delete?id=").$list['id_department']?>"data-toggle="modal" data-target="#delete" class="glyphicon glyphicon-trash"></a></td>
                                    
                                </tr>
                            <?php  } ?>
                                                                                    
                            </tbody>
                        </table>
                    
                </div>
                <!-- END Main Content -->
                 
                <script type="text/javascript">
                    $('#delete').on('show.bs.modal', function(e){
                        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                    });/*
                    $('#edit').on('show.bs.modal', function(e){
                        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                    });*/
                    $('#update').click(function(){
                        var id_department = $(this).data('id');
                        $.get("<?php echo base_url('Support/get_category_by_id/')?>"+id_department, function(html){
                            $('#container_update').html(html);
                        });
                    })
                </script>
