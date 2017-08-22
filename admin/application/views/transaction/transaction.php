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
                <div class="box">
                            
                    <div class="table-responsive">
                        <table class="table table-advance" id="transaction-table">
                            <thead class="table-flag-blue">
                                <tr>
                                    <th>Transaction #</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Transaction Date</th>
                                    <th>Due Date</th>
                                    <th>Total</th>
                                    <th>Payment Date</th>
                                    <th>Status</th>
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
                                    <td><?php echo ($transaction['date_payment'] != NULL) ? date("d-m-Y", strtotime($transaction['date_payment'])) : '-' ?></td>
                                    <td>
                                        <?php switch($transaction['status_payment']){
                                            case 0  : echo '<span class="label label-large label-danger">Unpaid</span>';
                                                        break;
                                            case 1  : echo '
                                                        <a data-id="'.$transaction['id_transaction'].'" data-toggle="modal" data-target="#konfirm"
                                                        class="label label-large label-warning link_confirm" >
                                                        <i class="fa fa-check"></i> Payment Confirmation</a>';
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

                <!-- Modal -->
                <div class="modal fade modal-white in" id="konfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display:block">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content infotrophy-content">
                            <div class="modal-header">
                                
                                <h3 class="modal-title"><strong>Confirm Payment #1231231</strong></h3>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4>ORDER</h4>
                                            </div>
                                            <div class="panel-body">
                                                <table class="table table-stripped">
                                                    <thead>
                                                        <tr>
                                                            <th>Extend 30-days</th>
                                                            <th>..............</th>
                                                            <th class="text-right">Rp 70.000</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Credit Balance</th>
                                                            <th>..............</th>
                                                            <th class="text-right">-Rp 6.000</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <td class="text-right">TOTAL</td>
                                                            <td class="text-right">Rp 70.000</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4>PAYMENT DETAIL</h4>
                                            </div>
                                            <div class="panel-body">
                                                <table class="table table-stripped">
                                                    <thead>
                                                        <tr>
                                                            <th>Date of Payment</th>
                                                            <th>: 30-07-2017</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <h5>PAYMENT METHOD</h5> 
                                            </div>
                                            <div class="panel-body">
                                                <p>BCA 0115116032 - Imaniar Hanifa</p>
                                            </div>
                                        </div>
                                    </div>              
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
