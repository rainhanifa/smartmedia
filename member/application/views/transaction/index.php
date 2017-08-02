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
                <!-- BEGIN Main Content -->
               
                <!-- 
                <div class="outstanding-balance ">
                    <div class="box">
                        <div class="box-title no-bg ">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Outstanding Balance: <span>Rp 0,00</span></h4>
                                </div>

                                </div>
                            <div class="box-tool">
                                <div class="box">Credit Balance: <span> Rp.667 </span> <a class="btn btn-warning btn-lg"><i class="glyphicon glyphicon-ok"></i> Add Deposit</a> </div>                                
                            </div>
                        </div>
                    </div>
                </div>
                -->
                
                <div class="box">
                    <div>
                        <table class="table table-advance" id="invoice-table">
                            <thead class="table-flag-blue">
                                <tr>
                                    <th>Invoice #</th>
                                    <th>Invoice Date</th>
                                    <th>Due Date</th>
                                    <th>Total</th>
                                    <th colspan="2">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($transactions as $transaction) { ?>
                                <tr>                               
                                    <td><a href="<?php echo base_url("transactions/invoice");?>"><?php echo $transaction['id_transaction']?></a></td>
                                    <td><?php echo $transaction['date_transaction']?></td>
                                    <td><?php echo $transaction['due_date']?></td>
                                    <td> Rp. <?php echo $transaction['total']?></td>
                                    <td>
                                    <?php
                                        switch($transaction['date_transaction']){
                                            case 0: echo '<span class="label label-large label-warning">Unpaid</span>';
                                                    break;
                                            case 1: echo '<span class="label label-large label-lime">Awaiting Confirmation</span>';
                                                    break;
                                            case 2: echo '<span class="label label-large label-lime">Paid</span>';
                                                    break;
                                            case 5: echo '<span class="label label-large label-gray">Canceled</span>';
                                                    break;
                                            default:echo '<span class="label label-large label-warning">Unpaid</span>';
                                                    break;
                                        }
                                    ?>
                                    </td>
                                    <td><a href="<?php echo base_url('transactions/invoice/').$transaction['id_transaction'];?>" class="btn btn-info"><i class="fa fa-tasks"></i> View Invoice</a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END Main Content -->


                 <!-- Modal -->
        <div class="modal fade modal-white" id="confirm" tabindex="-1" role="dialog" aria-labelledby="modal-confirm-payment">
            <div class="modal-dialog" role="document">
                <div class="modal-content infotrophy-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal-confirm-payment">Confirm Payment #503565</h4>
                    </div>
                    <div class="modal-body"> 
                    <form class="form-horizontal">
                            <div class="form-group">
                                <label for="sitedesc" class="col-sm-5 col-lg-4 control-label">Date of Payment</label>
                                <div class="col-sm-7 col-lg-6 controls">
                                    <div class="input-group date date-picker" data-date="12-0-2017" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input class="form-control date-picker" size="16" type="text" value="12-05-2017" name="date" id="date-payment">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sitedesc" class="col-sm-5 col-lg-4 control-label">Account Name</label>
                                <div class="col-sm-7 col-lg-6 controls">
                                    <input type="text" name="name" id="name-payment" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sitedesc" class="col-sm-5 col-lg-4 control-label">Account Number</label>
                                <div class="col-sm-7 col-lg-6 controls">
                                    <input type="tel" name="number" id="number-payment" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sitedesc" class="col-sm-5 col-lg-4 control-label">Bank Name</label>
                                <div class="col-sm-7 col-lg-6 controls">
                                    <input type="text" name="bank" id="bank-payment" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sitedesc" class="col-sm-5 col-lg-4 control-label">Additional Information</label>
                                <div class="col-sm-7 col-lg-6 controls">
                                    <textarea class="form-control" name="info" id="info-payment"></textarea>
                                </div>
                            </div>             
                    </form>
                    </div>
                  <!-- end modal-body -->
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal">Confirm</button>
                    </div>
                </div>
                <!-- end modal-content -->
            </div>
                </div>