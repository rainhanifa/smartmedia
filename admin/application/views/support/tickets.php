<!--BEGIN Content -->
<div id="main-content">
<!-- BEGIN Page Title -->
<div class="page-title">
    <div>
        <h1><i class="fa fa-globe"></i> Tickets</h1>
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
        <li class="active"> Tickets </li>
    </ul>
</div>
<!-- END Breadcrumb -->

<?php echo $this->session->flashdata("message")?>

<!-- SUPPORT TICKET -->
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-body">
                <div class="open-ticket">
                    <div class="box">
                        <div class="box-title no-bg">
                            <h3>Support Tickets <span class="badge badge-xxlarge badge-gray"><?php echo getTotalTiketAktif()?></span></h3>
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
                                foreach($tickets as $list){
                                    $counter++;
                            ?>
                                <tr class="table-flag-blue">                                    
                                    <td><?php echo $list['date_open_ticket']?></td>
                                    <td><?php echo $list['name_department']?></td>
                                    <td>
                                        <a href="<?php echo base_url("support/ticket_detail/").$list['id_ticket']?>"><?php echo $list['subject_ticket']?></a>
                                    </td>
                                    <td><?php echo getStatusTiketLabel($list['status_ticket'])?></td>
                                    <td><?php echo getLastUpdateTiket($list['id_ticket'])?></td>
                                </tr>
                            <?php  } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SUPPORT TICKETS -->               
<!-- END Main Content