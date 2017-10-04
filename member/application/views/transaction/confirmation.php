            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-copy"></i> Order Confirmation</h1>
                    </div>
                </div>
                <!-- END Page Title -->

                <!-- BEGIN Main Content -->
                <div class="row">
                    <div class="col-sm-12">
                        <form action="<?php echo base_url('transaction/finish')?>" method="post">
                        <div clas="row">
                            <div class="col-sm-8">
                                <h3>Billing Information</h3>    
                                <?php foreach($my_detail as $my_detail){ ?>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                           <input type="text" name="first_name" class="form-control" placeholder="Nama Depan" value="<?php echo ($my_detail['first_name']) ? $my_detail['first_name'] : '' ?>">
                                        </div>
                                        <div class="col-md-4">
                                           <input type="text" name="last_name" class="form-control" placeholder="Nama Belakang" value="<?php echo ($my_detail['last_name']) ? $my_detail['last_name'] : '' ?>">
                                        </div>
                                        <div class="col-md-4">
                                           <input type="text" name="company_name" class="form-control" placeholder="Institusi" value="<?php echo ($my_detail['company_name']) ? $my_detail['company_name'] : '' ?>">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-6">
                                           <input type="tel" name="phone_number" class="form-control" placeholder="No. Handphone" value="<?php echo ($my_detail['phone']) ? $my_detail['phone'] : '' ?>">
                                        </div>
                                        <div class="col-md-6">
                                           <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo ($my_detail['email']) ? $my_detail['email'] : '' ?>">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-6">
                                           <input type="text" name="address_1" class="form-control" placeholder="Alamat 1" value="<?php echo ($my_detail['address_1']) ? $my_detail['address_1'] : '' ?>">
                                        </div>
                                        <div class="col-md-6">
                                           <input type="text" name="address_2" class="form-control" placeholder="Alamat 2" value="<?php echo ($my_detail['address_2']) ? $my_detail['address_2'] : '' ?>">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                           <input type="text" name="city" class="form-control" placeholder="Kota" value="<?php echo ($my_detail['city']) ? $my_detail['city'] : '' ?>">
                                        </div>
                                        <div class="col-md-4">
                                           <input type="text" name="region" class="form-control" placeholder="Propinsi" value="<?php echo ($my_detail['region']) ? $my_detail['region'] : '' ?>">
                                        </div>
                                        <div class="col-md-4">
                                           <input type="text" name="zip_code" class="form-control" placeholder="Kode Pos" value="<?php echo ($my_detail['zip_code']) ? $my_detail['zip_code'] : '' ?>">
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <h3>Payment Method</h3>    
                                    <div class="row form-group">
                                       <div class="col-sm-12 controls">
                                        <select name="method" class="form-control">
                                            <option value="1">Transfer ke BCA</option>
                                            <option value="2">Veritrans</option>
                                            <option value="3">Paypal</option>
                                        </select>
                                       </div>
                                    </div>
                            </div>
                            <div class="col-sm-4" id="cart">
                                <h3>Product Detail</h3>    
                                <div class="row">
                                    <?php foreach($product as $product) {?>
                                    <div class="col-md-8">
                                        <span><?php echo $product['name_package'] ?></span>
                                    </div>
                                    <div class="col-md-4">Rp. <?php echo $product['price_package'] ?></div>
                                    <input type="hidden" name="product" value="<?php echo $product['id_package'] ?>">
                                    <input type="hidden" name="price" value="<?php echo $product['price_package'] ?>">
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="submit" class="btn btn-save btn-primary pull-right" value="LANJUTKAN PEMBELIAN" >
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

                <!-- END Main Content -->