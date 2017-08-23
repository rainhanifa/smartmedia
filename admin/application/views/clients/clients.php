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
                                        <a href="<?php echo base_url("clients/profile/").$client['id_client'].'#invoice';?>" class="btn btn-info"><i class="fa fa-tasks"></i> Invoice</a>
                                        <a href="<?php echo base_url("clients/profile/").$client['id_client'].'#sites';?>" class="btn btn-gray"><i class="fa fa-desktop"></i> Sites</a></td>
                                </tr>
                                <?php $counter++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END Main Content -->