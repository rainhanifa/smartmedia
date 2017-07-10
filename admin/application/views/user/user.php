            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-star"></i> USERS</h1>
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
                        <li class="active">Users</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->

                <!-- BEGIN Main Content -->
               <?php echo $this->session->flashdata("message")?> 
                               

                <div class="box">
                            
                    <div>
                        <table class="table table-advance" id="users-table">
                            <thead class="table-flag-blue">
                                <tr>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Full Name</th>
                                    <th>User Type</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach($users as $user){
                            ?>
                                <tr>                               
                                    <td><a href="#"><?php echo $user['username']?></a></td>
                                    <td><?php echo $user['email']?></td>
                                    <td><?php echo $user['fullname']?></td>
                                    <td><?php echo ($user['username'] == "1") ? "Administrator" : (($user['username'] == "1") ? "Staff" : "Client"); ?></td>
                                    <td><a href="#" data-href="<?php echo base_url('users/reset_password/').$user['id_users']; ?>"  data-name="<?php echo $user['username']?>" data-toggle="modal" data-target="#reset" class="btn btn-lime"><i class="fa fa-user"></i> Reset Password</a>
                                        <a href="#" class="btn btn-info"><i class="fa fa-tasks"></i> Deactivate</a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END Main Content -->

                <div class="modal fade modal-white" id="reset" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content infotrophy-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myContainer"></h4>
                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal">CANCEL</button>
                                <a class="btn btn-info btn-ok">RESET</a>
                            </div>
                        </div>
                        <!-- end modal-content -->
                    </div>
                </div>
                
                <script type="text/javascript">
                    $('#reset').on('show.bs.modal', function(e) {
                        var username =  $(e.relatedTarget).data('name');
                        $('#myContainer').html("Reset Password for user '"+username+"'?");

                        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                    });
                </script>