
<div id="main-content">
    <!-- BEGIN Page Title -->
    <div class="page-title text-center">
            <h3><i class="fa fa-file-o"></i> INVOICE DETAIL</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php foreach($transactions as $transaction){ ?>
            <div class="box">
                <div class="box-content">
                    <form action="<?php echo base_url('transaction/confirm_payment')?>" method="post">
                    <div class="invoice">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?php echo base_url('../assets/')?>images/logo.png" />
                            </div>
                            <div class="col-md-6 invoice-info">
                                <p class="font-size-17"><strong>Invoice #<?php echo $transaction['id_transaction']?></strong></p>
                                <p class="font-size-15"><?php echo date("d F Y", strtotime($transaction['date_transaction'])) ?></p>
                            </div>
                        </div>

                        <hr class="margin-0" />
                        <div class="row">
                            <div class="col-md-4 company-info">
                                <p><b>Invoice From:</b></p>
                                <h4>Smart Media</h4>
                                <p>Perum Nirwana Keben Kav. 7, Sukun<br/>Kota Malang, 65122</p>
                                <p><i class="fa fa-phone"></i> +62 81 333 66 2055</p>
                                <p><i class="fa fa-globe"></i> www.smartmedia.com</p>
                                <p><i class="fa fa-envelope"></i> info@smartmedia.com</p>
                            </div>
                            <div class="col-md-4 company-info">
                                <p><b>Invoiced To:</b></p>
                                <h4><?php echo $transaction['first_name']." ".$transaction['last_name'] ?></h4>
                                <p><?php echo $transaction['address_1'] ?><br/><?php echo $transaction['city']?>, <?php echo $transaction['region']?></p>
                                <p><?php echo $transaction['zip_code'] ?></p>
                                <p><i class="fa fa-phone"></i> <?php echo $transaction['phone'] ?></p>
                                <p><i class="fa fa-envelope"></i> <?php echo $transaction['email'] ?></p>
                            </div>
                            <div class="col-md-4 company-info">
                                <p><b>Status Payment</b></p>
                                <?php 
                                        switch($transaction['status_payment']){
                                            case '1'   : echo "<p><b>Paid via Bank Transfer on ".date("l, d-m-Y", strtotime($transaction['date_payment']))."</b></p><a href='".base_url("transaction/confirm/").$transaction["id_transaction"]."'class='btn btn-warning '>Confirm Payment Now</a>";
                                                         break;
                                            case '2'   : 
                                                            switch($transaction['method']){
                                                                case '1' : echo "<span class='btn btn-success'><i class='fa fa-check'></i> Voucher Activated</span>";
                                                                            break;
                                                                case '2' : echo "<span class='btn btn-success'><i class='fa fa-check'></i> Paid via Bank Transfer</span>";
                                                                            break;

                                                                default  : echo "<span class='btn btn-success'><i class='fa fa-check'></i> Paid via Veritrans</span>";
                                                                            break;
                                                            }
                                                            
                                                         break;
                                            default   : echo "<span class='btn btn-success'><i class='fa fa-check'></i> Paid</span>";
                                                         break;
                                        }
                                     ?>
                            </div>
                        </div>

                        <br/><br/>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="center">#</th>
                                        <th class="hidden-sm">Deskripsi</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="center">1</td>
                                        <td class="hidden-sm"><?php echo $transaction['detail']?></td>
                                        <td>Rp <?php echo $transaction['total']?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <?php } ?>

                    <div class="row text-center">
                    <a href="<?php echo base_url('transaction')?>" class="btn btn-info">Back</a>
                    </div>
        </div>

    </div>
</div>

<!-- END Main Content -->