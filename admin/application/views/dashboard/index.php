<!-- BEGIN Content -->
<div id="main-content">
    <!-- BEGIN Page Title -->
    <div class="page-title">
        <div>
            <h1><i class="fa fa-file-o"></i> Dashboard</h1>
        </div>
    </div>
    <!-- END Page Title -->

    <!-- BEGIN Breadcrumb -->
    <div id="breadcrumbs">
        <ul class="breadcrumb">
            <li class="active"><i class="fa fa-home"></i> Home</li>
        </ul>
    </div>
    <!-- END Breadcrumb -->


    <!-- BEGIN Tiles -->
    <div class="row">
    	<div class="col-md-3">
    		<div class="tile tile-green">
                <div class="<?php echo base_url('assets')?>/img">
                    <i class="fa fa-user"></i>
                </div>
                <div class="content">
                    <p class="big"><?php echo $total_user?></p>
                    <p class="title">Total User</p>
                </div>
            </div>
    	</div>
    	<div class="col-md-3">
    		<div class="tile tile-red">
                <div class="<?php echo base_url('assets')?>/img">
                    <i class="fa fa-desktop"></i>
                </div>
                <div class="content">
                    <p class="big"><?php echo $total_sites?></p>
                    <p class="title">Total Sites</p>
                </div>
            </div>
    	</div>
    	<div class="col-md-3">
    		<div class="tile tile-orange">
                <div class="<?php echo base_url('assets')?>/img">
                    <i class="fa fa-credit-card"></i>
                </div>
                <div class="content">
                    <p class="big"><?php echo $total_activation?></p>
                    <p class="title">Total Voucher Activated</p>
                </div>
            </div>
    	</div>
    	<div class="col-md-3">
    		<div class="tile">
                <div class="<?php echo base_url('assets')?>/img">
                    <i class="fa fa-file-o"></i>
                </div>
                <div class="content">
                    <p class="big"><?php echo $total_articles?></p>
                    <p class="title">Total Article</p>
                </div>
            </div>
    	</div>
    </div>

    <!-- END Tiles -->


    <!-- BEGIN Main Content -->

    
    <div class="row">
         <!-- INVOICES -->
        <div class="col-md-7">
            <div class="box box-black">
                <div class="box-title">
                    <h3><i class="fa fa-check-square-o"></i> Awaiting Confirmation <span class="badge badge-large badge-gray"><?php echo $awaitings?></span></h3>
                </div>
                <div class="box-content">
                    <div class="table-responsive">
                    	<table class="table ">
                            <?php foreach($invoices as $invoice){ ?>
                            <tr>
                                
                                <td><a href="<?php echo base_url('transaction/invoice/').$invoice['id_transaction'] ?>"><?php echo "#".$invoice['id_transaction']." - ".$invoice['detail']?></a></td>
                                <td><?php echo date("d-m-Y", strtotime($invoice['date_payment']))?></td>
                                <td class="text-right">Rp <?php echo $invoice['total']?></td>
                                <td><?php echo getPaymentLabel($invoice['method'])?></td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="box box-orange">
                <div class="box-title"><h3><i class="fa fa-bar-chart-o"></i> Weekly Updates</h3></div>
                <div class="box-content">
                    <ul class="weekly-changes">
                        <li>
                            <p><i class="fa fa-user light-green"></i><span class="light-green"><?php echo $weekly_user?></span> New Users</p>
                        </li>
                        <li>
                            <p><i class="fa fa-desktop light-red"></i><span class="light-red"><?php echo $weekly_site?></span> New Sites</p>
                        </li>
                        <li>
                            <p><i class="fa fa-credit-card light-blue"></i><span class="light-blue"><?php echo $weekly_activation?></span> Voucher Activated</p>
                        </li>
                        <li>
                            <p><i class="fa fa-shopping-cart light-green"></i><span class="light-green"><?php echo $weekly_paid?></span> Invoices Paid</p>
                        </li>
                        <li>
                            <p><i class="fa fa-ticket light-red"></i><span class="light-red"><?php echo $weekly_ticket?></span> New Tickets </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <!-- END INVOICES -->
    </div>
    
    <div class="row">
        <div class="col-md-12">
        <!-- SUPPORT TICKET -->
            <div class="box box-blue">    
                <div class="box-title">
                    <h3><i class="fa fa-comment"></i> Support Tickets <span class="badge badge-large badge-info"><?php echo $active_tickets?></span></h3>
                </div>                        
                <div class="table-responsive">
                    <table class="table table-advance" id="ticket-table">
                        <thead class="panel-info">
                            <tr>
                                <th>Date</th>
                                <th>Department</th>
                                <th>Subject</th>
                                <th>Status</th>
                                <th>Last Update</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $counter = 0;
                                foreach($tickets as $ticket){
                                    $counter++;
                            ?>
                            <tr class="table-flag-blue">                                    
                                <td><?php echo $ticket['date_open_ticket']?></td>
                                <td><?php echo $ticket['name_department']?></td>
                                <td>
                                    <a href="<?php echo base_url("support/detail_ticket/").$ticket['id_ticket']?>"><?php echo $ticket['subject_ticket']?></a>
                                </td>
                                <td><span class="label label-large label-info"><?php echo getStatusTiketName($ticket['status_ticket'])?></span></td>
                                <td><?php echo getLastUpdateTiket($ticket['id_ticket'])?></td>
                            </tr>
                            <?php  } ?>                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END SUPPORT TICKETS -->               
    <!-- END Main Content -->
    