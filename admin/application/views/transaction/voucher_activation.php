            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-file-o"></i> VOUCHER ACTIVATION</h1>
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
                        <li class="active">Voucher Activation</li>
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
                                    <th>Voucher Name</th>
                                    <th>Voucher Type</th>
                                    <th>Price</th>
                                    <th>Activation Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($transactions as $transaction){?>                      
                                <tr>         
                                    <td><a href="<?php echo base_url('transaction/invoice/').$transaction['id_transaction']?>">#<?php echo $transaction['id_transaction']?></a></td>
                                    <td><?php echo $transaction['first_name']?></td>
                                    <td><?php echo $transaction['last_name']?></td>
                                    <td><?php echo $transaction['name']?></td>
                                    <td><?php switch($transaction['id_package']){
                                                case 0  :   echo "<span class='label label-yellow'>Quota</span>";
                                                            break;

                                                case 1  :   echo "<span class='label label-pink'>Extension</span>";
                                                            break;

                                                case 2  :   echo "<span class='label label-info'>Starter</span>";
                                                            break;

                                                default  :   echo "<span class='label label-info'>Starter</span>";
                                                            break;
                                        }
                                        echo " ".$transaction['name']?></td>
                                    <td> Rp. <?php echo $transaction['total']?></td>
                                    <td><?php echo ($transaction['date_payment'] != NULL) ? date("d-m-Y", strtotime($transaction['date_payment'])) : '-' ?></td>
                                    
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