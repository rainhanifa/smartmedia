<!-- BEGIN Content -->
<div id="main-content">
    <!-- BEGIN Page Title -->
    <div class="page-title">
        <div>
            <h1><i class="fa fa-file-o"></i> Dashboard</h1>
            
        </div>
    </div>
    <!-- END Page Title -->


    <!-- BEGIN Tiles -->
    
    <div class="row">
    	<div class="col-md-3">
    		<div class="tile tile-mysites">
                <div class="<?php echo base_url('assets')?>/img">
                    <i class="fa fa-desktop"></i>
                </div>
                <div class="content">
                    <p class="big"><?php echo $my_site?></p>
                    <p class="title">My Sites</p>
                </div>
            </div>
    	</div>
    	<div class="col-md-3">
    		<div class="tile tile-red tile-due">
                <div class="<?php echo base_url('assets')?>/img">
                    <i class="fa fa-files-o"></i>
                </div>
                <div class="content">
                    <p class="big"><?php echo getTotalInvoiceDue($this->session->user_id) ?></p>
                    <p class="title">Invoices Due</p>
                </div>
            </div>
    	</div>
    	<div class="col-md-3">
    		<div class="tile tile-orange tile-tickets">
                <div class="<?php echo base_url('assets')?>/img">
                    <i class="fa fa-ticket"></i>
                </div>
                <div class="content">
                    <p class="big"><?php echo $my_tickets ?></p>
                    <p class="title">Active Tickets</p>
                </div>
            </div>
    	</div>
    	<div class="col-md-3">
    		<div class="tile tile-credits">
                <div class="<?php echo base_url('assets')?>/img">
                    <i class="fa fa-credit-card"></i>
                </div>
                <div class="content">
                    <p class="big">Rp 0</p>
                    <p class="title">Outstanding Balance</p>
                </div>
            </div>
    	</div>
    </div>

    <!-- END Tiles -->


    <!-- BEGIN Main Content -->

     <!-- INVOICES -->
    <div class="row">
    	<div class="open-ticket">
        	<div class="box">
            	<div class="box-title no-bg">
                	<h3>Invoices Due <span class="badge badge-xxlarge badge-gray"><?php echo $my_invoice?></span></h3>
            	</div>
        	</div>
    	</div>
    </div>

    <div class="box">
        <div class="table-responsive">
        	<table class="table table-advance" id="invoices-table">
                <thead class="panel-info">
                    <tr>
                        <th>Invoice #</th>
                        <th>Invoice Date</th>
                        <th>Due Date</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if($my_invoice > 0){
                        foreach($transactions as $transaction) { ?>
                    <tr <?php echo ($transaction['status_payment'] == 0) ? "class='table-flag-red'" : "" ?>>
                        <td><a href="<?php echo base_url('transaction/invoice/').$transaction['id_transaction']?>"><?php echo $transaction['id_transaction']?></a></td>
                        <td><?php echo date("d-m-Y", strtotime($transaction['date_transaction']))?></td>
                        <td><?php echo date("d-m-Y", strtotime($transaction['due_date']))?></td>
                        <td> Rp. <?php echo $transaction['total']?></td>
                        <td><?php echo getStatusPaymentLabel($transaction['status_payment'])?></td>
                    </tr>
                    <?php }
                        } else {
                    ?>
                        <tr><td colspan="5">No Invoice Due</td></tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END INVOICES -->

    <!-- SUPPORT TICKET -->
    <div class="row">
        <div class="open-ticket">
        <div class="box">
            <div class="box-title no-bg">
                <h3>My Tickets <span class="badge badge-xxlarge badge-gray"><?php echo $my_tickets?></span></h3>
                <div class="box-tool">
                    <a href="<?php echo base_url('support')?>" class="btn btn-save btn-lg"><i class="fa fa-edit"></i> Open new tickets</a>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="box">                            
        <div class="table-responsive">
            <table class="table table-advance" id="tickets-table">
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
                    if($my_tickets > 0){
                        $counter = 0;
                        foreach($tickets as $ticket){
                            $counter++;
                    ?>
                    <tr class="table-flag-blue">                                    
                        <td><?php echo $ticket['date_open_ticket']?></td>
                        <td><?php echo $ticket['name_department']?></td>
                        <td>
                            <a href="<?php echo base_url("support/detail/").$ticket['id_ticket']?>"><?php echo $ticket['subject_ticket']?></a>
                        </td>
                        <td><span class="label label-large label-info"><?php echo getStatusTiketName($ticket['status_ticket'])?></span></td>
                        <td><?php echo getLastUpdateTiket($ticket['id_ticket'])?></td>
                    </tr>
                    <?php  } 
                        }else {
                    ?>
                        <tr><td colspan="5">No Active Tickets</td></tr>
                    <?php
                        }
                    ?>                         
                </tbody>
            </table>
        </div>
    </div>
    <!-- END SUPPORT TICKETS -->               
    <!-- END Main Content -->
    