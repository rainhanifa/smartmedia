            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-star"></i> CLIENTS</h1>
                    </div>
                </div>
                <!-- END Page Title -->

               <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="index.html">Home</a>
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="active">Clients</li>
                    </ul>
                </div>

                <!-- END Breadcrumb -->
                <div class="alert alert-info">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Latest Info! </strong> The page has been added.
                </div>
                <!-- BEGIN Main Content -->
               
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Available Credit Balance:  </strong> You have a credit balance of Rp. 667,00 and this will be automatically applied to any new invoices
                </div>                

                <div class="box">
                            
                    <div class="">
                        <table class="table table-advance" id="clients-table">
                            <thead class="table-flag-blue">
                                <tr>
                                    <th># Client</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Client Email</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $counter    = 1;
                                    foreach($clients as $client){
                                ?>
                                <tr>                               
                                    <td><a href=""><?php echo $counter;?></a></td>
                                    <td><?php echo $client['first_name']; ?></td>
                                    <td><?php echo $client['last_name']; ?></td>
                                    <td><?php echo $client['email']; ?></td>
                                    <td><a href="<?php echo base_url("clients/profile/").$client['id_client'];?>" class="btn btn-lime"><i class="fa fa-user"></i> Profile</a>
                                        <a href="<?php echo base_url("clients/profile/").$client['id_client'];?>" class="btn btn-info"><i class="fa fa-tasks"></i> Invoice</a>
                                        <a href="clients_profile.html#sites" class="btn btn-gray"><i class="fa fa-desktop"></i> Sites</a></td>
                                </tr>
                                <?php $counter++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END Main Content -->