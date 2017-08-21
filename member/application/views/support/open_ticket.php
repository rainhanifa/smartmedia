            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-paper-plane"></i> New Ticket</h1>
                    </div>
                </div>
                <!-- END Page Title -->

                <?php echo $this->session->flashdata("warning")?>

                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-content">
                                <form action="<?php echo base_url("support/submit_ticket");?>" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-map-marker"></i>
                                                    </span>
                                                    <select class="form-control" data-placeholder="Category" tabindex="1" name="department_id">
                                                        <?php foreach($department as $list){ ?>
                                                        <option value="<?php echo $list['id_department']?>"<?=($list['id_department'] == $department_id) ? 'selected' : '';?>><?php echo $list['name_department']?></option>
                                                        <?php } ?>
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
                                                    <select class="form-control" tabindex="1" name="priority" value="">
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
                                                <input type="text" class="form-control" name="subject">
                                           </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5>
                                                <span><strong>Sites</strong></span>
                                            </h5>
                                            <div class="form-group">
                                                <select class="form-control" tabindex="1" name="sites">
                                                    <?php foreach($my_site as $mysite) { ?>
                                                  <option value="<?php echo $mysite['id_site'] ?>"><?php echo $mysite['name_site']." (http://".$mysite['address_site'].".smartmedia.com)" ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5>
                                                <span><strong>Message</strong></span>
                                            </h5>
                                                <div class="form-group">
                                                    <div class="col-md-12 controls">
                                                        <div class="row">
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
                                                        <textarea class="form-control col-md-12 wysihtml5" rows="6" name="content"></textarea>
                                                    </div>
                                        </div>
                                    </div>
                                    <!--div class="row">
                                        <div class="col-md-12">
                                            <h5>
                                                <span><strong>Attachments</strong></span>
                                            </h5><br/>
                                            <div class="input-group">
                                                <!-- <span class="input-group-addon">
                                                    <i class="fa fa-folder-open-o"></i>
                                                </span>
                                                <input class="form-control" type="file" name="up_photo">
                                                <!-- <span class="input-group-btn">
                                                    <button class="btn" type="button"><i class="fa fa-plus-circle"></i> Search!</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div--> 
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-12">
                                                <input type="submit" class="btn btn-default" value="Kirim Tiket" name="submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- END Main Content -->