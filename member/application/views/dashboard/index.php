<!-- BEGIN Content -->
<div id="main-content">
    <!-- BEGIN Page Title -->
    <div class="page-title">
        <div>
            <h1><i class="fa fa-file-o"></i> Dashboard</h1>
            <h4>Overview, stats, chat and more</h4>
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
                    <i class="fa fa-desktop"></i>
                </div>
                <div class="content">
                    <p class="big">3</p>
                    <p class="title">My Sites</p>
                </div>
            </div>
    	</div>
    	<div class="col-md-3">
    		<div class="tile tile-red">
                <div class="<?php echo base_url('assets')?>/img">
                    <i class="fa fa-files-o"></i>
                </div>
                <div class="content">
                    <p class="big">2</p>
                    <p class="title">Invoices Due</p>
                </div>
            </div>
    	</div>
    	<div class="col-md-3">
    		<div class="tile tile-orange">
                <div class="<?php echo base_url('assets')?>/img">
                    <i class="fa fa-ticket"></i>
                </div>
                <div class="content">
                    <p class="big">1</p>
                    <p class="title">Active Tickets</p>
                </div>
            </div>
    	</div>
    	<div class="col-md-3">
    		<div class="tile">
                <div class="<?php echo base_url('assets')?>/img">
                    <i class="fa fa-credit-card"></i>
                </div>
                <div class="content">
                    <p class="big">Rp 667</p>
                    <p class="title">Credit Balance</p>
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
                	<h3>Invoices Due <span class="badge badge-xxlarge badge-gray">2</span></h3>
            	</div>
        	</div>
    	</div>
    </div>

    <div class="box">
        <div class="table-responsive">
        	<table class="table table-advance" id="invoice-table">
                <thead class="panel-info">
                    <tr>
                        <th>Invoice #</th>
                        <th>Invoice Date</th>
                        <th>Due Date</th>
                        <th>Total</th>
                        <th>Balance</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-flag-blue">
                        
                        <td><a href="">94633</a></td>
                        <td>11/05/2017</td>
                        <td>17/05/2017</td>
                        <td>Rp. 160.000,00</td>
                        <td>Rp. 667,00</td>
                        <td>Waiting Confirmation</td>
                    </tr>

                    <tr class="table-flag-blue">
                        
                        <td><a href="">96633</a></td>
                        <td>11/05/2017</td>
                        <td>17/05/2017</td>
                        <td>Rp. 224.000,00</td>
                        <td>Rp. 667,00</td>
                        <td>Waiting Confirmation</td>
                    </tr>        
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
                <h3>Open Support Tickets <span class="badge badge-xxlarge badge-gray">3</span></h3>
                <div class="box-tool">
                    <a class="btn btn-warning btn-lg"><i class="fa fa-edit"></i> Open new tickets</a>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="box">                            
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
                    <tr class="table-flag-blue">                                    
                        <td>13/10/2017</td>
                        <td>Hosting</td>
                        <td>Kenapa CPanel saya tidak bisa dibuka ?</td>
                        <td><span class="label label-large label-info">Solved</span></td>
                        <td>21/10/2017</td>
                    </tr>
                    <tr class="table-flag-blue">                                    
                        <td>3/11/2017</td>
                        <td>Domain</td>
                        <td>Kenapa terjadi Internal Server error ?</td>
                        <td><span class="label label-large label-success">Active</span></td>
                        <td>16/11/2017</td>
                    </tr>
                    <tr class="table-flag-blue">                                    
                        <td>3/11/2017</td>
                        <td>Lain-Lain</td>
                        <td>Muncul Halaman Mercusuar</td>
                        <td><span class="label label-large label-success">Active</span></td>
                        <td>16/11/2017</td>
                    </tr>                              
                </tbody>
            </table>
        </div>
    </div>
    <!-- END SUPPORT TICKETS -->               
    <!-- END Main Content -->
    