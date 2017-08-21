            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-file-o"></i> TRANSACTION</h1>
                    </div>
                </div>
                <!-- END Page Title -->

                <!-- BEGIN Main Content -->
                
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
                                <tr <?php echo ($transaction['status_payment'] == 0) ? "class='table-flag-red'" : "" ?>>                               
                                    <td><a href="<?php echo base_url("transaction/invoice/").$transaction['id_transaction'];?>"><?php echo $transaction['id_transaction']?></a></td>
                                    <td><?php echo date("d-m-Y", strtotime($transaction['date_transaction'])) ?></td>
                                    <td><a href="<?php echo base_url("transaction/invoice/").$transaction['id_transaction'];?>"><?php echo $transaction['detail']?></a></td>
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

