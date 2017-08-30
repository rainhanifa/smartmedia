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
                <!-- BEGIN Main Content -->
               
                <?php if($this->session->flashdata("message") != ""){?>
                    <div class='alert alert-success alert-dismissible' role='alert'>
                    <?php echo $this->session->flashdata("message"); ?>
                    </div>
                <?php } ?>    
       

                <div class="box">
                    <a class="btn btn-info" data-dismiss="modal" data-toggle="modal" data-target="#add">ADD NEW</a>
					<br/>
					<br/>
                        <table class="table table-advance" id="vouchers-table">
                            <thead class="table-flag-blue">
                                <tr>
                                    <th>#</th>
                                    <th>Voucher Code</th>
                                    <th>Package</th>
                                    <th>Voucher Price</th>
                                    <th>Voucher Status</th>
                                    <th>Expired At</th>
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
                                    <td><?php switch($voucher['category_package']){
                                                case 0  :   echo "<span class='label label-yellow'>Quota</span>";
                                                            break;

                                                case 1  :   echo "<span class='label label-pink'>Extension</span>";
                                                            break;

                                                case 2  :   echo "<span class='label label-info'>Starter</span>";
                                                            break;

                                                default  :   echo "<span class='label label-info'>Starter</span>";
                                                            break;
                                        }
                                        echo " ".$voucher['name_package']?></td>
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
                                    <td><?php echo $voucher['expired_date']?></td>
                                    <td><?php echo $voucher['used_at']?></td>
									<td>

                                    <a data-href="<?php echo base_url("store/voucher_update/").$voucher['id_voucher'];?>" data-uid="<?php echo $voucher['id_voucher'];?>" data-toggle="modal" data-target="#edit" class="glyphicon glyphicon-pencil link_update"></a> 

                                    <a data-href="<?php echo base_url("store/voucher_delete/").$voucher['id_voucher'];?>" data-toggle="modal" data-target="#delete" class="glyphicon glyphicon-trash"></a></td>
                                    
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                </div>
                <!-- END Main Content -->
               <!-- Modal -->
                <div class="modal fade modal-white" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <form action="<?php echo base_url("store/voucher_update");?>" method="post">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content infotrophy-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Edit Vouchers</h4>
                            </div>
                            <div class="modal-body">
                                <div id="container_update">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-12 col-lg-12 controls">
                                                <span class="m_25"><label>Voucher Code</label></span>
                                                <input type="hidden" name="id" value="" id="voucher_id">
                                                <input type="text" name="code" id="voucher_code" class="form-control" value="">
                                            </div>

                                            <div class="col-sm-12 col-lg-12 controls">
                                                <span class="m_25"><label>Voucher Name</label></span>
                                                <input type="text" name="v_name" id="voucher_name" class="form-control" value="">
                                            </div>

                                            <div class="col-sm-12 col-lg-12 controls">
                                                <span class="m_25"><label>Voucher Price</label></span>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"> Rp </div>
                                                        <input type="number" name="price" id="voucher_price" class="form-control" value="">
                                                    </div>
                                            </div>

                                            <div class="col-sm-12 col-lg-12 controls">
                                                <span class="m_25"><label>Package</label></span>
                                                <select name="package" class="form-control" id="voucher_package">

                                        <?php foreach($packages as $p){ ?>
                                                    <option value="<?php echo $p['id_package']?>"> <?php echo $p['name_package']?></option>
                                        <?php } ?>
                                                </select>
                                            </div>

                                            <div class="col-sm-12 col-lg-12 controls">
                                                <span class="m_25"><label>Expiry Date</label></span>
                                                <div class="input-group date date-picker" data-date="102/2017" data-date-format="dd-mm-yyyy" data-date-viewmode="years" data-date-minviewmode="months">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                    <input class="form-control date-picker" size="16" type="text" value="" name="expiry_date" id="voucher_expire">
                                                </div>
                                            </div>
                                            <input type="text" id="voucher_expiry" class="form-control" >
                                        </div>
                                        </div>
                                </div>                            
                                               
                            </div>
                          <!-- end modal-body -->
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal">CANCEL</button>
                                <input type="submit" class="btn btn-info " value="SUBMIT" name="submit" >
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
                                <h4 class="modal-title" id="myModalLabel1">New Voucher</h4>
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
                                            <input type="text" name="voucher_name" id="voucher_name" class="form-control" placeholder="">
                                        </div>

                                        <div class="col-sm-12 col-lg-12 controls">
                                            <span class="m_25"><label>Voucher Price</label></span>
                                                <div class="input-group">
                                                    <div class="input-group-addon"> Rp </div>
                                                    <input type="number" name="price" id="voucher_price" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-lg-12 controls">
                                            <span class="m_25"><label>Package</label></span>
                                            <select name="package" class="form-control">
                                            <?php foreach($packages as $package){ ?>
                                                <option value="<?php echo $package['id_package']?>"><?php echo $package['name_package']?></option>
                                            <?php } ?>
                                            </select>
                                        </div>

                                        <div class="col-sm-12 col-lg-12 controls">
                                            <span class="m_25"><label>Expiry Date</label></span>
                                            <div class="input-group date date-picker" data-date="102/2017" data-date-format="dd-mm-yyyy" data-date-viewmode="years" data-date-minviewmode="months">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                <input class="form-control date-picker" size="16" type="text" value="" name="expiry_date" >
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
                    $('.link_update').click(function(){
                        var id_vouchers = $(this).data('uid');

                        $.getJSON("<?php echo base_url('store/json_voucher_detail/')?>"+id_vouchers, function(data){
                                document.getElementById("voucher_id").value = data.id;
                                document.getElementById("voucher_code").value = data.code;
                                document.getElementById("voucher_name").value = data.name;
                                document.getElementById("voucher_price").value = data.price;
                                document.getElementById("voucher_package").value = data.package;
                                document.getElementById("voucher_expire").value = data.expired_date;
                                // selected
                        });
                    })

                </script>       


                <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets')?>/assets/bootstrap-datepicker/css/datepicker.css" />

                
                <script type="text/javascript" src="<?php echo base_url('assets')?>/assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
                <script type="text/javascript" src="<?php echo base_url('assets')?>/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>