<!--BEGIN Content -->
<div id="main-content">
<!-- BEGIN Page Title -->
<div class="page-title">
    <div>
        <h1><i class="fa fa-globe"></i> My Ticket</h1>
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
        <li class="active"> My Ticket </li>
    </ul>
</div>
<!-- END Breadcrumb -->

<!-- SUPPORT TICKET -->
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-body">
                <div class="open-ticket">
                    <div class="box">
                        <div class="box-title no-bg">
                            <h3>Open Support Tickets <span class="badge badge-xxlarge badge-gray">3</span></h3>
                            <div class="box-tool">
                                <a href="<?php echo base_url("support/new_ticket")?>" class="btn btn-warning btn-lg"><i class="fa fa-edit"></i> Open new tickets</a>
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
                            <?php 
                                $counter = 0;
                                foreach($ticket as $list){
                                    $counter++;
                            ?>
                                <tr class="table-flag-blue">                                    
                                    <td><?php echo $list['date_ticket']?></td>
                                    <td><?php echo $list['name_department']?></td>
                                    <td>
                                        <a href="<?php echo base_url("support/detail/").$list['id']?>"><?php echo $list['subject_ticket']?></a>
                                    </td>
                                    <td><span class="label label-large label-info"><?php echo $list['status_ticket']?></span></td>
                                    <td>21/10/2017</td>
                                </tr>
                            <?php  } ?>
                                <!-- <tr class="table-flag-blue">                                    
                                    <td>3/11/2017</td>
                                    <td>Domain</td>
                                    <td>
                                        <a href="<?php echo base_url("support/detail")?>">Invoice 17371</a>
                                    </td>
                                    <td><span class="label label-large label-success">Active</span></td>
                                    <td>16/11/2017</td>
                                </tr>
                                <tr class="table-flag-blue">                                    
                                    <td>3/11/2017</td>
                                    <td>Another Subject</td>
                                    <td>
                                        <a href="<?php echo base_url("support/detail")?>">Invoice 98278</a>
                                    </td>
                                    <td><span class="label label-large label-success">Active</span></td>
                                    <td>16/11/2017</td>
                                </tr>
                                <tr class="table-flag-blue">                                    
                                    <td>13/10/2017</td>
                                    <td>Hosting</td>
                                    <td>
                                        <a href="<?php echo base_url("support/detail")?>">Invoice 73149</a>
                                    </td>
                                    <td><span class="label label-large label-info">Solved</span></td>
                                    <td>21/10/2017</td>
                                </tr>
                                <tr class="table-flag-blue">                                    
                                    <td>3/11/2017</td>
                                    <td>Domain</td>
                                    <td>
                                        <a href="<?php echo base_url("support/detail")?>">Invoice 17371</a>
                                    </td>
                                    <td><span class="label label-large label-success">Active</span></td>
                                    <td>16/11/2017</td>
                                </tr>
                                <tr class="table-flag-blue">                                    
                                    <td>3/11/2017</td>
                                    <td>Another Subject</td>
                                    <td>
                                        <a href="<?php echo base_url("support/detail")?>">Invoice 98278</a>
                                    </td>
                                    <td><span class="label label-large label-success">Active</span></td>
                                    <td>16/11/2017</td>
                                </tr>
                                <tr class="table-flag-blue">                                    
                                    <td>13/10/2017</td>
                                    <td>Hosting</td>
                                    <td>
                                        <a href="<?php echo base_url("support/detail")?>">Invoice 73149</a>
                                    </td>
                                    <td><span class="label label-large label-info">Solved</span></td>
                                    <td>21/10/2017</td>
                                </tr>
                                <tr class="table-flag-blue">                                    
                                    <td>3/11/2017</td>
                                    <td>Domain</td>
                                    <td>
                                        <a href="<?php echo base_url("support/detail")?>">Invoice 17371</a>
                                    </td>
                                    <td><span class="label label-large label-success">Active</span></td>
                                    <td>16/11/2017</td>
                                </tr>
                                <tr class="table-flag-blue">                                    
                                    <td>3/11/2017</td>
                                    <td>Another Subject</td>
                                    <td>
                                        <a href="<?php echo base_url("support/detail")?>">Invoice 98278</a>
                                    </td>
                                    <td><span class="label label-large label-success">Active</span></td>
                                    <td>16/11/2017</td>
                                </tr> -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SUPPORT TICKETS -->               
<!-- END Main Content