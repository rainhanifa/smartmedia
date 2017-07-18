            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-star"></i> SITES</h1>
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
                        <li class="active">sites</li>
                    </ul>
                </div>

                <!-- END Breadcrumb -->
                <div class="alert alert-info">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Latest Info! </strong> The page has been added.
                </div>
                <!-- BEGIN Main Content -->
                <div class="box">
                            
                    <div class="">
                        <table class="table table-advance" id="sites-table">
                            <thead class="table-flag-blue">
                                <tr>
                                    <th>#</th>
                                    <th>Sites Name</th>
                                    <th>Sites Address</th>
                                    <th>Owner</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $counter    = 1;
                                    foreach($sites as $site){
                                ?>
                                <tr>                               
                                    <td><a href=""><?php echo $counter;?></a></td>
                                    <td><?php echo $site['name_site']; ?></td>
                                    <td><a href="<?php echo $site['address_site']; ?>"><?php echo $site['address_site']; ?></a></td>
                                    <td><a href="<?php echo base_url("clients/profile/").$site['id_client'];?>"> <?php echo $site['first_name']." ".$site["last_name"] ; ?></a></td>
                                    <td><a href="<?php echo base_url("sites/detail/").$site['id_site'];?>" class="btn btn-gray"><i class="fa fa-desktop"></i> Sites</a></td>
                                </tr>
                                <?php $counter++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END Main Content -->