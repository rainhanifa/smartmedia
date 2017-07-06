            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-lightbulb-o"></i> ARTICLES</h1>
                    </div>
                </div>
                <!-- END Page Title -->

               <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="<?php echo base_url("dashboard");?>">Home</a>
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="active">Articles</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->
                <?php echo $this->session->flashdata("warning")?>    

               
                <?php foreach ($articles as $art): ?>

                <div class="box">
                    <div class="col sm-12">     
						<div class="mail-content-announcement">
							<form class="mail-compose form-horizontal" action="<?php echo base_url("knowledgebase/update/");?>"  method="post">
								<div class="form-group">
                                    <input type="hidden" name="id_articles" value="<?php echo $art->id_articles; ?>">
									<label for="inputlasttname" class="col-sm-1 control-label">Title</label>
										<div class="col-sm-11">
											<input type="text" class="form-control" name="title" value="<?php echo $art->title_articles; ?>">
										</div>		
								</div>
								<div class="form-group">		
									<label for="inputcountry" class="col-sm-1 control-label">Category</label>
									<div class="col-sm-11">
                                        <select class="form-control" name="category" value="<?php echo $art->category_articles; ?>">
                                            <?php foreach($category as $kategori){?>
                                            <option value="<?php echo $kategori['id_category']?>" <?=($kategori['id_category'] == $art->category_articles) ? 'selected' : '';?>><?php echo $kategori['name_category']; ?></option>
                                            <?php }?>
                                        </select>
                                    </div>
								</div>	
								
								<div class="col sm-10">		
									<p><textarea class="form-control wysihtml5" rows="6" name="content" ><?php echo $art->content_articles; ?></textarea></p>
								</div>	
								<p>
									<input type="submit" class="btn" value="Submit" name="submit">
								</p>
							</form>	
                <?php endforeach; ?>
						</div>								
					</div>		             
                </div>
                <!-- END Main Content -->