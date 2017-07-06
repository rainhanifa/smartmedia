            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-folder-open-o"></i>Open Ticket</h1>
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
                        <li>
                            <a href="<?php echo base_url("support")?>">My Ticket</a>
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li>
                            <a href="<?php echo base_url("support/new_ticket")?>">New Ticket</a>
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="active">Open Ticket</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-map-marker"></i>
                                                </span>
                                                <select class="form-control" data-placeholder="Category" tabindex="1">
                                                    <option value="Technical Support">Technical Support</option>
                                                    <option value="Sales Department">Sales Department</option>
                                                    <option value="Billing Support">Billing Support</option>
                                                 </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-tag"></i>
                                                </span>
                                                <select class="form-control" tabindex="1">
                                                    <option value="High">High</option>
                                                    <option value="Medium">Medium</option>
                                                    <option value="Low">Low</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5>
                                            <span><strong>Subject</strong></span>
                                        </h5><br/>
                                        <div class="form-group">
                                            <input type="text" class="form-control">
                                       </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5>
                                            <span><strong>Sites</strong></span>
                                        </h5>
                                        <div class="form-group">
                                            <select class="form-control" tabindex="1">
                                                <option value="ursite">ursite.voucher.co.id</option>
                                                <option value="mysite">mysite.voucher.co.id</option>
                                                <option value="everysite">everysite.voucher.co.id</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5>
                                            <span><strong>Message</strong></span>
                                        </h5>
                                        <form action="#" class="form-horizontal">
                                            <div class="form-group">
                                                <div class="col-md-12 controls">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span>
                                                                <div class="btn-group">
                                                                    <a class="btn btn-default btn" data-wysihtml5-command="bold" title="Bold" tabindex="-1" href="javascript:;" unselectable="on">
                                                                        <i class="fa fa-bold"></i>
                                                                    </a>
                                                                    <a class="btn btn-default btn" data-wysihtml5-command="italic" title="Italic" tabindex="-1" href="javascript:;" unselectable="on">
                                                                        <i class="fa fa-italic"></i>
                                                                    </a>
                                                                    <a class="btn btn-default btn" data-wysihtml5-command="underline" title="Underline" tabindex="-1" href="javascript:;" unselectable="on">
                                                                        <i class="fa fa-underline"></i>
                                                                    </a>
                                                                </div>    
                                                            </span>
                                                            <span>
                                                                <a class="btn btn-default" data-wysihtml5-command="createLink" title="Insert link" tabindex="-1" href="javascript:;" unselectable="on">
                                                                    <i class="glyphicon glyphicon-link"></i>
                                                                </a>
                                                            </span>
                                                            <span>
                                                                <div class="btn-group">
                                                                    <a class="btn btn-default btn" data-wysihtml5-command="insertUnorderedList" title="Unordered list" tabindex="-1" href="javascript:;" unselectable="on">
                                                                        <i class="glyphicon glyphicon-list"></i>
                                                                    </a>
                                                                    <a class="btn btn-default btn" data-wysihtml5-command="insertOrderedList" title="Ordered list" tabindex="-1" href="javascript:;" unselectable="on">
                                                                        <i class="glyphicon glyphicon-th-list"></i>
                                                                    </a>
                                                                    <a class="btn btn-default btn" data-wysihtml5-command="Outdent" title="Outdent" tabindex="-1" href="javascript:;" unselectable="on">
                                                                        <i class="glyphicon glyphicon-indent-right"></i>
                                                                    </a>
                                                                    <a class="btn btn-default btn" data-wysihtml5-command="Indent" title="Indent" tabindex="-1" href="javascript:;" unselectable="on">
                                                                        <i class="glyphicon glyphicon-indent-left"></i>
                                                                    </a>
                                                                </div>    
                                                            </span>
                                                            <span>
                                                                <a class="btn btn-deafult btn" data-wysihtml5-command="insertImage" title="Insert image" tabindex="-1" href="javascript:;" unselectable="on">
                                                                    <i class="glyphicon glyphicon-search"></i>
                                                                </a>
                                                            </span>
                                                            <span>
                                                                <a class="btn btn-deafult btn" data-wysihtml5-command="insertImage" title="Insert image" tabindex="-1" href="javascript:;" unselectable="on">
                                                                    <i class="fa fa-question"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <textarea class="form-control col-md-12 wysihtml5" rows="6"></textarea>
                                                </div>
                                           </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5>
                                            <span><strong>Attachments</strong></span>
                                        </h5><br/>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-folder-open-o"></i>
                                            </span>
                                            <input class="form-control" type="text">
                                            <span class="input-group-btn">
                                                <button class="btn" type="button"><i class="fa fa-plus-circle"></i> Search!</button>
                                            </span>
                                        </div>
                                    </div>
                                </div> 
                                <br/>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                            <button class="btn-block btn btn-lg">SUBMIT</button>
                                        </div>
                                        <div class="col-md-4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- END Main Content -->