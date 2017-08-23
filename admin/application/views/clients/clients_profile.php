            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-user"></i>Client's Detail</h1>
                    </div>
                </div>
                <!-- END Page Title -->

               <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="<?php echo base_url()?>">Home</a>
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li>
                            <a href="<?php echo base_url('clients')?>">Client</a>
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="active">Client Profile</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->

                <!-- BEGIN Main Content -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-content">
                                <div class="tabbable">
                                    <ul id="myTab1" class="nav nav-tabs">
                                        <li class="active"><a href="#profile" data-toggle="tab"> Profile</a></li>
                                        <li><a href="#invoice" data-toggle="tab">Invoice</a></li>
                                        <li><a href="#sites" data-toggle="tab">Sites</a></li>
                                    </ul>
                                    <div id="myTabContent1" class="tab-content">
                                        <div class="tab-pane fade in active" id="profile">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <h3><strong>Profile</strong></h3>

                                                    <?php foreach($profile as $profile){?>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <p><b>Name</b></p>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <p><?php echo $profile['first_name']." ".$profile['last_name']?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <p><b>Company Name</b></p>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <p><?php echo $profile['company_name']; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <p><b>Phone No.</b></p>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <p><?php echo $profile['phone']; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <p><b>Address</b></p>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <p><?php echo $profile['address_1']; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <p><b>City</b></p>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <p><?php echo $profile['city']; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <p><b>Region</b></p>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <p><?php echo $profile['region'].", ".$profile['country']; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <p><b>ZIP Code</b></p>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <p><?php echo $profile['zip_code']; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <img class="img-responsive img-thumbnail" src="<?php echo base_url("assets");?>/../img/demo/profile-picture.jpg" alt="profile picture" width="200px" height="200px" style="float:right;">
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h3><strong>Account Information</strong></h3>
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <p><b>Email</b></p>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <p><?php echo $profile['email']?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <p><b>Registered Since</b></p>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <p><?php echo date("l, d-m-Y", strtotime($profile['date_registered'])); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                                    <?php } ?>
                                        </div>
                                        <div class="tab-pane fade" id="invoice">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="tile tile-red">
                                                        <div class="img">
                                                            <i class="fa fa-tasks"></i>
                                                        </div>
                                                        <div class="content">
                                                            <p class="big"><?php echo $total_invoice ?></p>
                                                            <p class="title">INVOICES</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="tile tile-yellow">
                                                        <div class="img">
                                                            <i class="fa fa-clock-o"></i>
                                                        </div>
                                                        <div class="content">
                                                            <p class="big"><?php echo $invoice_due ?></p>
                                                            <p class="title">INVOICE DUE</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="tile tile-green">
                                                        <div class="img">
                                                            <i class="fa fa-money"></i>
                                                        </div>
                                                        <div class="content">
                                                            <p class="big">Rp <?php echo $outstanding[0]['outstanding']?></p>
                                                            <p class="title">OUTSTANDING BALANCE</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div>
                                                        <table class="table table-advance" id="invoice-table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Invoice #</th>
                                                                    <th>Invoice Date</th>
                                                                    <th>Due Date</th>
                                                                    <th>Total</th>
                                                                    <th>Date of Payment</th>
                                                                    <th>Status</th>
                                                                    <th>Detail</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php foreach($invoice as $invoice){ ?>
                                                                <tr class="table-flag-blue">
                                                                    <td><?php echo $invoice['id_transaction']?></td>
                                                                    <td><?php echo date("d-m-Y", strtotime($invoice['date_transaction']))?></td>
                                                                    <td><?php echo date("d-m-Y", strtotime($invoice['due_date']))?></td>
                                                                    <td>Rp <?php echo $invoice['total']?></td>
                                                                    <td><?php echo ($invoice['date_payment'] != NULL) ? date("d-m-Y", strtotime($invoice['date_payment'])) : '' ?></td>
                                                                    <td>
                                                                        <?php switch($invoice['status_payment']){
                                                                            case 0  : echo '<span class="label label-danger">Unpaid</span></span>';
                                                                                        break;
                                                                            case 1  : echo '<span class="label label-warning">Awaiting Confirmation</span></span>';
                                                                                        break;
                                                                            case 2  : echo '<span class="label label-success">Paid</span>';
                                                                                          break;
                                                                            default  : echo '<span class="label label-gray">Canceled</span>';
                                                                                        break;
                                                                        }

                                                                        ?>
                                                                    </td>
                                                                    <td><a href="<?php echo base_url("clients/detail");?>">Detail</a></td>
                                                                </tr>
                                                            <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="sites">
                                        <?php foreach ($packages as $package){?>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="tile tile-light-blue">
                                                        <div class="img">
                                                            <i class="fa fa-desktop"></i>
                                                        </div>
                                                        <div class="content">
                                                            <p class="big"><?php echo $total_site;?></p>
                                                            <p class="title">ACTIVE SITE</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="tile tile-blue">
                                                        <div class="img">
                                                            <i class="fa fa-desktop"></i>
                                                        </div>
                                                        <div class="content">
                                                            <p class="big"><?php echo $package['domain'];?></p>
                                                            <p class="title">TOTAL SITE</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="tile tile-magenta">
                                                        <div class="img">
                                                            <i class="fa fa-cloud"></i>
                                                        </div>
                                                        <div class="content">
                                                            <p class="big"><?php echo $package['storage']?>MB</p>
                                                            <p class="title">TOTAL STORAGE</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="tile tile-pink">
                                                        <div class="img">
                                                            <i class="fa fa-envelope"></i>
                                                        </div>
                                                        <div class="content">
                                                            <p class="big"><?php echo $package['email']?></p>
                                                            <p class="title">MAIL ACCOUNT</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h3><strong>Client's Site</strong></h3>
                                                    <div class="row">
                                                        <?php foreach($sites as $site){ ?>
                                                        <div class="col-md-3">
                                                            <img class="img-responsive img-thumbnail" src="<?php echo base_url("../member/assets");?>/../img/demo/profile-picture.jpg" alt="profile picture">
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <p><strong>Site Name</strong></p>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <p><?php echo $site['name_site'] ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <p><strong>Site Address</strong></p>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <a href="//<?php echo $site['name_site']?>"><?php echo $site['address_site']?></a>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <p><strong>Web Mail</strong></p>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <a href="mailto:">email@voucher.co.id</a>
                                                                </div>
                                                            </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <hr/>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Main Content -->

                <script type="text/javascript">
                    $(document).ready(function () {
                        var link = window.location.href.split("#");

                        $('.nav-tabs a[href="#' + link[1] + '"]').tab('show');
                    });
                </script>