<!-- BEGIN Content -->
<div id="main-content">
    <!-- BEGIN Page Title -->
    <div class="page-title">
        <div>
            <h1><i class="fa fa-file-o"></i> Overview</h1>
        </div>
    </div>
    <!-- END Page Title -->

    <!-- Modal -->
    <div class="modal fade modal-white" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content infotrophy-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Details Site</h4>
                </div>
                <div class="modal-body">                            
                    <div class="row">
                        <div class="form-group">
                            <label for="sitedesc" class="col-sm-5 col-lg-4 control-label">Site Name</label>
                            <div class="col-sm-7 col-lg-6 controls">
                                <input type="text" name="sitename" id="sitename" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="form-group">
                            <label for="sitedesc" class="col-sm-5 col-lg-4 control-label">Site Description</label>
                            <div class="col-sm-7 col-lg-6 controls">
                                <input type="text" name="sitedesc" id="sitedesc" class="form-control">
                            </div>
                        </div>
                    </div>                 
                </div>
              <!-- end modal-body -->
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal">Save</button>
                </div>
            </div>
            <!-- end modal-content -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="col-md-8">
                        <h3>Action</h3>
                    </div>
                    <div class="col-md-4">
                        <div class="col-md-12">
                            <div class="col-md-3 col-md-offset-3">
                                <h3><span><a href="#" alt="View My Site"><i class="fa fa-desktop"></i></a></span></h3>
                            </div>
                            <div class="col-md-3">
                                <h3><span><a href="#"><i class="fa fa-edit"></i></a></span></h3>
                            </div>
                            <div class="col-md-3">
                                <h3><span><a href="#"><i class="fa fa-trash-o"></i></a></span></h3>
                            </div>      
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>

    <!-- BEGIN Main Content -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="col-md-12">
                        <h3>Basics</h3>
                        <table class="table">
                            <tbody>
                            <tr>
                                <td width="25%"><strong>Site Name</strong></td>
                                <td width="50%">Sub Domain</td>
                                <td width="25%"><a data-toggle="modal" data-target="#edit" class="btn btn-gray pull-right">Edit <i class="fa fa-chevron-right"></i></a></td>
                            </tr>
                            <tr>
                                <td><strong>Site Description</strong></td>
                                <td>Description about subdomain in subdomain.voucher.co.id. Lorem ipsum commodo quis dolor voluptate et in Excepteur. Lorem ipsum amet dolor qui cupidatat in anim reprehenderit quis id culpa consequat non culpa.</td>
                                <td><a data-toggle="modal" data-target="#edit" class="btn btn-gray pull-right">Edit <i class="fa fa-chevron-right"></i></a></td>
                            </tr>
                            <tr>
                                <td><strong>Site Address</strong></td>
                                <td><a href="#">http://subdomain.voucher.co.id</a></td>
                                <td><a href="manage/package.html" class="btn btn-gray pull-right">Upgrade <i class="fa fa-chevron-right"></i></a></td>
                            </tr>
                            <tr>
                                <td><strong>Mail Address</strong></td>
                                <td><a href="#">subdomain@voucher.co.id</a></td>
                                <td><a href="manage/package.html" class="btn btn-gray pull-right">Upgrade <i class="fa fa-chevron-right"></i></a></td>
                            </tr>
                            <tr>
                                <td><strong>Status</strong></td>
                                <td>Published</td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="col-md-12">
                    <h3> Package</h3>
                    
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <div class="tile-red big-tile">
                                    <div class="<?php echo base_url('assets')?>/img img-center">
                                        <img src="<?php echo base_url('assets')?>/img/demo/basic.png">
                                    </div>
                                    <div class="text-center"><h4>BASIC</h4><p>&nbsp;</p></div>
                                </div>
                                <a class="btn-block btn btn-lg" href="store.html">Upgrade</a>
                            </div>

                            <div class="col-md-3">
                                <div class=" tile-blue text-center big-tile">
                                    <div class="<?php echo base_url('assets')?>/img img-center">
                                        <img src="<?php echo base_url('assets')?>/img/demo/clock.png">
                                    </div>
                                    <div class="text-center"><h4>30 DAYS</h4><p>ACTIVE PERIODE</p></div>
                                </div>
                                <p>
                                    <a class="btn-block btn btn-lg" href="store.html">Extend</a>
                                </p>
                            </div>
                            <div class="col-md-3">
                                <div class="big-tile tile-green text-center ">
                                    <div id="graph_1" class="chart"></div>
                                    <div class="text-center"><h4>1800 MB</h4><p>AVAILABLE STORAGE</p></div>
                                </div>
                                <p>
                                    <a class="btn-block btn btn-lg" href="store.html">Upgrade</a>
                                </p>
                            </div>
                            <div class="col-md-3">
                                <div class="big-tile tile-yellow text-center ">
                                    <div id="graph_2" class="chart"></div>
                                    <div class="text-center"><h4>768 MB</h4><p>AVAILABLE BANDWIDTH</p></div>
                                </div>
                                <p>
                                    <a class="btn-block btn btn-lg" href="store.html">Upgrade</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--page specific plugin scripts-->
        <script src="<?php echo base_url('assets')?>/assets/flot/jquery.flot.js"></script>
        <script src="<?php echo base_url('assets')?>/assets/flot/jquery.flot.resize.js"></script>
        <script src="<?php echo base_url('assets')?>/assets/flot/jquery.flot.pie.js"></script>
        <script src="<?php echo base_url('assets')?>/assets/flot/jquery.flot.stack.js"></script>
        <script src="<?php echo base_url('assets')?>/assets/flot/jquery.flot.crosshair.js"></script>
        <script src="<?php echo base_url('assets')?>/assets/flot/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo base_url('assets')?>/assets/sparkline/jquery.sparkline.min.js"></script>