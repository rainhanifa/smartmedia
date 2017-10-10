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
                    <?php if($this->session->flashdata("message") != ""){
                        echo $this->session->flashdata("message");
                        }
                    ?>
                    <div class="table-responsive">
                        <table class="table table-advance" id="transaction-table">
                            <thead class="table-flag-blue">
                                <tr>
                                    <th>Transaction ID</th>
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
                                    <td><a href="<?php echo base_url('transaction/invoice/').$transaction['id_transaction']?>">#<?php echo $transaction['id_transaction']?></a></td>
                                    <td><?php echo $transaction['first_name']?></td>
                                    <td><?php echo $transaction['last_name']?></td>
                                    <td><?php echo date("d-m-Y", strtotime($transaction['date_transaction']))?></td>
                                    <td><?php echo date("d-m-Y", strtotime($transaction['due_date']))?></td>
                                    <td> Rp. <?php echo $transaction['total']?></td>
                                    <td><?php echo ($transaction['date_payment'] != NULL) ? date("d-m-Y", strtotime($transaction['date_payment'])) : '-' ?></td>
                                    <td><?php echo getPaymentStatusLabel($transaction['status_payment'])?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- END Main Content -->