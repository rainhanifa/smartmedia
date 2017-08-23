            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-check-square-o"></i> AWAITING CONFIRMATION</h1>
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
                        <li class="active">Awaiting Confirmation</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->

                <!-- Modal -->
                <div class="modal fade modal-white" id="konfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content infotrophy-content">
                            <div class="modal-header">
                                <div id="container_confirm">
                                </div>
                            </div>
                          <!-- end modal-body -->
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal">CANCEL</button>
                                <a class="btn btn-primary">CONFIRM</a>
                            </div>
                        </div>
                        <!-- end modal-content -->
                    </div>
                </div>

                <?php if($this->session->flashdata("message") != ""){
                    echo $this->session->flashdata("message");
                    }
                ?>
                <!-- BEGIN Main Content -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-content">
                                <div class="table-responsive">
                                    <table class="table table-advance" id="awaiting-transaction-table">
                                        <thead class="table-flag-blue">
                                            <tr>
                                                <th>Invoice #</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Invoice Date</th>
                                                <th>Payment Date</th>
                                                <th>Total</th>
                                                <th colspan="2">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($transactions as $transaction){?>                      
                                            <tr>         
                                                <td><a href="<?php echo base_url('transaction/invoice/').$transaction['id_transaction']?>">#<?php echo $transaction['id_transaction']?></a></td>
                                                <td><?php echo $transaction['first_name']?></td>
                                                <td><?php echo $transaction['last_name']?></td>
                                                <td><?php echo date("d-m-Y", strtotime($transaction['date_transaction']))?></td>
                                                <td><?php echo date("d-m-Y", strtotime($transaction['date_payment']))?></td>
                                                <td> Rp. <?php echo $transaction['total']?></td>
                                                <td><a data-id="<?php echo $transaction['id_transaction']?>" data-toggle="modal" data-target="#konfirm"
                                                        class="btn btn-lime link_confirm" >
                                                <i class="fa fa-check"></i> Payment Confirmation</a>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- END Main Content -->
                <script type="text/javascript">

                    $('.link_confirm').click(function(){
                        var id_transaction = $(this).data('id');
                        $.get("<?php echo base_url('transaction/get_transaction_by_id/')?>"+id_transaction, function(html){
                            $('#container_confirm').html(html);
                            $('#konfirm').find('.btn-primary').attr('href', '<?php echo base_url("transaction/confirm/").$transaction["id_transaction"]?>');
                        });
                    })


                </script>       