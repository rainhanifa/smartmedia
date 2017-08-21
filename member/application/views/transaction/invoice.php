
<div id="main-content">
    <!-- BEGIN Page Title -->
    <div class="page-title text-center">
            <h3><i class="fa fa-file-o"></i> INVOICE DETAIL</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php foreach($invoices as $invoice){ ?>
            <div class="box">
                <div class="box-content">
                    <form action="<?php echo base_url('transaction/confirm_payment')?>" method="post">
                    <div class="invoice">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?php echo base_url('assets/')?>img/logo.png" />
                            </div>
                            <div class="col-md-6 invoice-info">
                                <p class="font-size-17"><strong>Invoice #<?php echo $invoice['id_transaction']?></strong></p>
                                <p class="font-size-15"><?php echo date("d F Y", strtotime($invoice['date_transaction'])) ?></p>
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
                                <?php foreach($my_detail as $my_detail) { ?>
                                <p><b>Invoiced To:</b></p>
                                <h4><?php echo $my_detail['first_name']." ".$my_detail['last_name'] ?></h4>
                                <p><?php echo $my_detail['address_1'] ?><br/><?php echo $my_detail['city']?>, <?php echo $my_detail['region']?></p>
                                <p><?php echo $my_detail['zip_code'] ?></p>
                                <p><i class="fa fa-phone"></i> <?php echo $my_detail['phone'] ?></p>
                                <p><i class="fa fa-envelope"></i> <?php echo $my_detail['email'] ?></p>
                                <?php } ?>
                            </div>
                            <div class="col-md-4 company-info">
                                <p><b>Payment</b></p>
                                <?php if($invoice['status_payment'] != 0){ 
                                        switch($invoice['status_payment']){
                                            case '1'   : echo "<span class='btn btn-warning btn-lg'>Awaiting Confirmation</span>";
                                                         break;
                                            case '2'   : echo "<span class='btn btn-success btn-lg'><i class='fa fa-check'></i> Paid</span>";
                                                         break;
                                            default   : echo "<span class='btn btn-success btn-lg'><i class='fa fa-check'></i> Paid</span>";
                                                         break;
                                        }
                                    } else {?>
                                <p>
                                    <select name="method" class="form-control">
                                        <!--option value="1">Voucher</option-->
                                        <option value="2">Transfer Bank</option>
                                        <option value="3">Veritrans</option>
                                    </select>
                                </p>
                                    <?php } ?>
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
                                        <td class="hidden-sm"><?php echo $invoice['detail']?></td>
                                        <td>Rp <?php echo $invoice['total']?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <?php if($invoice['status_payment'] == 0){ ?>
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Anda dapat melakukan pembayaran dengan salah satu metode berikut ini:</h4>
                                <ul>
                                    <li>Transfer ke Bank:<br/>BCA KCU MALANG Basuki Rahmat<br/>a.n Imaniar Hanifa<br/>
                                    No. Rekening 0115116032</li>
                                    <li><a href="#">Bayar online melalui Veritrans</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 invoice-amount">
                                <p><span class="green font-size-17"><strong>Rp <?php echo $invoice['total']?></strong></span></p>

                                <input type="hidden" name="invoice_id" value="<?php echo $invoice['id_transaction']?>">

                                <p><br/><input type="submit" class="btn btn-success btn-large" value="Konfirmasi Pembayaran" name="submit"></p>
                            </div>
                        </div>
                        <?php }
                            else{ ?>

                            <div class="col-md-12 invoice-amount pull-right">
                                <p><span class="green font-size-17"><strong>Rp <?php echo $invoice['total']?></strong></span></p>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
            </form>
            <?php } ?>

                    <div class="row text-center">
                    <a href="<?php echo base_url('transaction')?>" class="btn btn-info">Kembali ke Transaksi</a>
                    </div>
        </div>

    </div>
</div>