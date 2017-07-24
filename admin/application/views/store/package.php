            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-lightbulb-o"></i>Packages</h1>
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
                        <li>
                            <a href="<?php echo base_url("store");?>">Store</a>
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="active">Packages</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->

                <!-- <div class="alert alert-info">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Latest Info! </strong> The page has been added.
                </div> -->
               
				
                <!-- BEGIN Main Content -->
               
                <?php if($this->session->flashdata("message") != ""){?>
                    <div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> 
                    <?php echo $this->session->flashdata("message"); ?>
                    </div>
                <?php } ?>    
       

                <div class="box">
                    <a class="btn btn-info" data-dismiss="modal" data-toggle="modal" data-target="#add">ADD NEW</a>
					<br/>
					<br/>
                        <table class="table table-advance" id="packages-table">
							<col style="width:auto">
							<col style="width:auto">
							<col style="width:10%">
							<col style="width:10%">
                            <thead class="table-flag-blue">
                                <tr>
                                    <th>#</th>
                                    <th>Package Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Active Periode</th>
                                    <th>Domain</th>
                                    <th>Email</th>
                                    <th>Bandwidth</th>
                                    <th>Storage</th>
                                    <th>Theme</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $counter = 0;
                                    foreach($packages as $package){
                                        $counter++;
                                       
                                ?>
                                <tr>                               
                                    <td><?php echo $counter;?></td>
									<td><?php echo $package['name_package']?></td>
                                    <td><?php switch($package['category_package']){
                                                case 0  :   echo "<span class='label label-success'>Quota</span>";
                                                            break;

                                                case 1  :   echo "<span class='label label-warning'>Extension</span>";
                                                            break;

                                                case 2  :   echo "<span class='label label-danger'>Full Package</span>";
                                                            break;

                                                default  :   echo "<span class='label label-success'>Quota</span>";
                                                            break;
                                        }?>
                                    </td>
                                    <td><?php echo $package['price_package']?></td>
                                    <td><?php echo $package['active_periode']?></td>
                                    <td><?php echo $package['domain']?></td>
                                    <td><?php echo $package['email']?></td>
                                    <td><?php echo $package['bandwidth']?></td>
                                    <td><?php echo $package['storage']?></td>
									<td><a id="link_update" data-href="<?php echo base_url("store/packages/update?id=").$package['id_package'];?>" data-id="<?php echo $package['id_package'];?>" data-toggle="modal" data-target="#edit" class="glyphicon glyphicon-pencil"></a> <a data-href="<?php echo base_url("store/packages/delete?id=").$package['id_package'];?>" data-toggle="modal" data-target="#delete" class="glyphicon glyphicon-trash"></a></td>
                                    
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                </div>
                <!-- END Main Content -->
               <!-- Modal -->
                <div class="modal fade modal-white" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <form action="<?php echo base_url("store/packages/update");?>" method="post">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content infotrophy-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Edit packages</h4>
                            </div>
                            <div class="modal-body">
                                <div id="container_update">
                                </div>                            
                                               
                            </div>
                          <!-- end modal-body -->
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal">CANCEL</button>
                                <input type="submit" class="btn btn-info " value="SUBMIT" name="OK" >
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
                                <h4 class="modal-title" id="myModalLabel">Delete this packages?</h4>
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
                <form action="<?php echo base_url("store/package_add");?>" method="post">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content infotrophy-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">New package</h4>
                            </div>
                            <div class="modal-body">                            
                                <div class="row">
                                    <div class="form-group">
                                        
                                        <div class="col-sm-12 col-lg-12 controls">
                                            <span class="m_25"><label>package Code</label></span>
                                            <input type="text" name="code" id="package_code" class="form-control" placeholder="">
                                        </div>

                                        <div class="col-sm-12 col-lg-12 controls">
                                            <span class="m_25"><label>package Name</label></span>
                                            <input type="text" name="name" id="package_name" class="form-control" placeholder="">
                                        </div>

                                        <div class="col-sm-12 col-lg-12 controls">
                                            <span class="m_25"><label>package Price</label></span>
                                                <div class="form-group">
                                                    <div class="input-group-addon"> Rp </div>
                                                    <input type="number" name="price" id="package_price" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-lg-12 controls">
                                            <span class="m_25"><label>Package</label></span>
                                            <select name="package" class="form-control">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>                 
                            </div>
                          <!-- end modal-body -->
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal">CANCEL</button>
                                <input type="submit" class="btn btn-info" value="SAVE" name="submit" >
                            </div>
                        </div>
                        <!-- end modal-content -->
                    </div>
                </form>
                </div>
                <!-- END Modal3-->


                <script type="text/javascript">
                    $('#delete').on('show.bs.modal', function(e) {
                        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                    });
                    $('#link_update').click(function(){
                        var id_packages = $(this).data('id');
                        $.get("<?php echo base_url('store/get_packages_by_id/')?>"+id_packages, function(html){
                            $('#container_update').html(html);
                        });
                    })

                </script>       