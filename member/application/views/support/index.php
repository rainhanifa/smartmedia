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

<?php echo $this->session->flashdata("warning")?>

<!-- SUPPORT TICKET -->
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-body">
                <div class="open-ticket">
                    <div class="box">
                        <div class="box-title no-bg">
                            <h3>Tiket Saya <span class="badge badge-xxlarge badge-gray"><?php echo getTotalTiketAktif()?></span></h3>
                            <div class="box-tool">
                                <a href="<?php echo base_url("support/new_ticket")?>" class="btn btn-save btn-lg"><i class="fa fa-edit"></i> Tiket Baru</a>
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
                                foreach($tickets as $ticket){
                                    $counter++;
                            ?>
                                <tr <?php echo ($ticket['status_ticket'] == 1) ? 'class="table-flag-blue"' : '' ?>>                                    
                                    <td><?php echo $ticket['date_open_ticket']?></td>
                                    <td><?php echo $ticket['name_department']?></td>
                                    <td>
                                        <a href="<?php echo base_url("support/detail/").$ticket['id_ticket']?>"><?php echo $ticket['subject_ticket']?></a>
                                    </td>
                                    <td><span class="label label-large label-info"><?php echo getStatusTiketName($ticket['status_ticket'])?></span></td>
                                    <td><?php echo getLastUpdateTiket($ticket['id_ticket'])?></td>
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