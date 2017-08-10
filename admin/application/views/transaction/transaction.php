            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-file-o"></i> TRANSACTION</h1>
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
                        <li class="active">Transaction</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->
                <div class="alert alert-info">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Latest Info! </strong> The page has been added.
                </div>
                <!-- BEGIN Main Content -->
               
                

                <div class="box">
                            
                    <div class="table-responsive">
                        <table class="table table-advance" id="transaction-table">
                            <thead class="table-flag-blue">
                                <tr>
                                    <th>Invoice #</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Invoice Date</th>
                                    <th>Due Date</th>
                                    <th>Total</th>
                                    <th>Payment Date</th>
                                    <th colspan="2">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($transactions as $transaction){?>                      
                                <tr>         
                                    <td><a href="<?php echo base_url('transaction/invoice/').$transaction['id_transaction']?>"><?php echo $transaction['id_transaction']?></a></td>
                                    <td><?php echo $transaction['first_name']?></td>
                                    <td><?php echo $transaction['last_name']?></td>
                                    <td><?php echo date("d-m-Y", strtotime($transaction['date_transaction']))?></td>
                                    <td><?php echo date("d-m-Y", strtotime($transaction['due_date']))?></td>
                                    <td> Rp. <?php echo $transaction['total']?></td>
                                    <td><?php echo date("d-m-Y", strtotime($transaction['date_payment']))?></td>
                                    <td>
                                        <?php switch($transaction['status_payment']){
                                            case 0  : echo '<span class="label label-large label-danger">Unpaid</span></span>';
                                                        break;
                                            case 1  : echo '<span class="label label-large label-warning">Awaiting Confirmation</span></span>';
                                                        break;
                                            case 2  : echo '<span class="label label-large label-lime">Paid</span>';
                                                          break;
                                            default  : echo '<span class="label label-large label-gray">Canceled</span>';
                                                        break;
                                        }

                                        ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <p class="text-right">
                        1-12 of 46
                        <a class="btn btn-circle disabled" href="#"><i class="fa fa-angle-left"></i></a>
                        <a class="btn btn-circle" href="#"><i class="fa fa-angle-right"></i></a>
                    </p>
                </div>
                <!-- END Main Content -->