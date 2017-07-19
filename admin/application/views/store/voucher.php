            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-lightbulb-o"></i> Vouchers</h1>
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
                        <li class="active">Vouchers</li>
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
                        <table class="table table-advance" id="vouchers-table">
							<col style="width:auto">
							<col style="width:auto">
							<col style="width:10%">
							<col style="width:10%">
                            <thead class="table-flag-blue">
                                <tr>
                                    <th>#</th>
                                    <th>Voucher Code</th>
                                    <th>Voucher Type</th>
                                    <th>Voucher Price</th>
                                    <th>Voucher Status</th>
                                    <th>Used At</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $counter = 0;
                                    foreach($vouchers as $voucher){
                                        $counter++;
                                       
                                ?>
                                <tr>                               
                                    <td><?php echo $counter;?></td>
									<td><?php echo $voucher['code']?></td>
                                    <td><?php echo $voucher['id_package']?></td>
                                    <td>Rp <?php echo $voucher['price']?></td>
                                    <td><?php switch($voucher['status']){
                                                case 0  :   echo "<span class='label label-success'>Available</span>";
                                                            break;

                                                case 1  :   echo "<span class='label label-danger'>Used</span>";
                                                            break;

                                                case 2  :   echo "<span class='label label-danger'>Expired</span>";
                                                            break;

                                                default  :   echo "<span class='label label-success'>Available</span>";
                                                            break;
                                        }?>
                                    </td>
                                    <td><?php echo $voucher['used_at']?></td>
									<td><a id="link_update" data-href="<?php echo base_url("store/vouchers/update?id=").$voucher['id_voucher'];?>" data-id="<?php echo $voucher['id_voucher'];?>" data-toggle="modal" data-target="#edit" class="glyphicon glyphicon-pencil"></a> <a data-href="<?php echo base_url("store/vouchers/delete?id=").$voucher['id_voucher'];?>" data-toggle="modal" data-target="#delete" class="glyphicon glyphicon-trash"></a></td>
                                    
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                </div>
                <!-- END Main Content -->
               <!-- Modal -->
                <div class="modal fade modal-white" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <form action="<?php echo base_url("store/vouchers/update");?>" method="post">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content infotrophy-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Edit Vouchers</h4>
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
                                <h4 class="modal-title" id="myModalLabel">Delete this vouchers?</h4>
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
                <form action="<?php echo base_url("store/voucher_add");?>" method="post">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content infotrophy-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">New Voucher</h4>
                            </div>
                            <div class="modal-body">                            
                                <div class="row">
                                    <div class="form-group">
                                        
                                        <div class="col-sm-12 col-lg-12 controls">
                                            <span class="m_25"><label>Voucher Code</label></span>
                                            <input type="text" name="code" id="voucher_code" class="form-control" placeholder="">
                                        </div>

                                        <div class="col-sm-12 col-lg-12 controls">
                                            <span class="m_25"><label>Voucher Name</label></span>
                                            <input type="text" name="name" id="voucher_name" class="form-control" placeholder="">
                                        </div>

                                        <div class="col-sm-12 col-lg-12 controls">
                                            <span class="m_25"><label>Voucher Price</label></span>
                                                <div class="form-group">
                                                    <div class="input-group-addon"> Rp </div>
                                                    <input type="number" name="price" id="voucher_price" class="form-control">
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
                        var id_vouchers = $(this).data('id');
                        $.get("<?php echo base_url('store/get_vouchers_by_id/')?>"+id_vouchers, function(html){
                            $('#container_update').html(html);
                        });
                    })

                </script>       