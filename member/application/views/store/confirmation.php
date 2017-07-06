            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-copy"></i> Order Confirmation</h1>
                    </div>
                </div>
                <!-- END Page Title -->

                <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="<?php echo base_url("dashboard")?>">Home</a>
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li>
                            <a href="package.html">Package</a>
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="active"> Payment Confirmation</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->

                
                <!-- BEGIN Main Content -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box">
                            <div class="box-content">
                                <br/>
                                <span>
                                    <div class="col-md-offset-1">
                                        <h3>You are going to buy :</h3>    
                                    </div>
                                </span>
                                <br/>
                                <br/>
                                <div class="row">
                                    <div class="col-md-4 col-md-offset-1">
                                        <span>BASIC PACKAGE</span>
                                    </div>
                                    <div class="col-md-6">Rp. 75.000</div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <span>Payment Method :</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                       <div class="col-sm-9 col-md-offset-1 controls">
                                          <label class="radio">
                                              <input type="radio" name="optionsRadios1" value="option1"> PayPal
                                          </label>
                                          <label class="radio">
                                              <input type="radio" name="optionsRadios1" value="option2" checked=""> BCA
                                          </label>
                                       </div>
                                    </div>
                                </div>
                                <br/>
                                <br/>
                                <div class="row">
                                    <div class="col-md-4 col-md-offset-8">
                                        <a href="<?php echo base_url('transactions/invoice')?>"><button class="btn btn-primary">ORDER</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- END Main Content -->