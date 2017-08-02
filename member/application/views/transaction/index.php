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
                        <table class="table table-advance" id="transaction-table">
                            <thead class="table-flag-blue">
                                <tr>
                                    <th>Invoice #</th>
                                    <th>Invoice Date</th>
                                    <th>Subject</th>
                                    <th>Due Date</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($transactions as $transaction) { ?>
                                <tr>                               
                                    <td><a href="<?php echo base_url("transactions/invoice");?>"><?php echo $transaction['id_transaction']?></a></td>
                                    <td><?php echo date("d-m-Y", strtotime($transaction['date_transaction'])) ?></td>
                                    <td><a href="<?php echo base_url("transactions/invoice");?>"><?php echo $transaction['detail']?></a></td>
                                    <td><?php echo date("d-m-Y", strtotime($transaction['due_date']))?></td>
                                    <td> Rp. <?php echo $transaction['total']?></td>
                                    <td>
                                    <?php
                                        switch($transaction['status_payment']){
                                            case 0: echo '<span class="label label-large label-warning">Unpaid</span>';
                                                    break;
                                            case 1: echo '<span class="label label-large label-lime">Awaiting Confirmation</span>';
                                                    break;
                                            case 2: echo '<span class="label label-large label-lime">Paid</span>';
                                                    break;
                                            case 5: echo '<span class="label label-large label-gray">Canceled</span>';
                                                    break;
                                            default: echo '<span class="label label-large label-warning">Unpaid</span>';
                                                    break;
                                        }
                                    ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END Main Content -->

