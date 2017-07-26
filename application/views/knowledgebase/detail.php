<div class="about">
	 <div class="container">
		<h1>FAQ<span class="m_1"><br>Questions</span></h1>
	</div>
</div>
<div class="about_grid">
	<div class="container">
		<h4 class="tz-title-4 tzcolor-blue">
            <p class="tzweight_Bold"><span class="m_1">Question<br></span>FAQ'S</p>
        </h4>
        <div class="faq_top">
       
		<div class="plans_grid">
			<?php foreach ($articles as $art): ?> 
		    <div class="col-md-12">
				<ul class="project_box">
				  <li class="mini-post-meta2">Q</li>
				  <li class="desc"><h5><a href="#"><?php echo $art['title_articles']?></a></h5>
				  	 <p><?php echo $art['content_articles']?></p>
				  </li>	
				 <!--  <li><p class="news-date"><?php echo date('l', strtotime($art['date_articles']))?>,<?php echo $art['date_articles']?></p></li> -->
				  <div class="clearfix"> </div>
				</ul>
			</div>
			<?php endforeach; ?> 
			
			<div class="clearfix"> </div>
		</div>

		<div class="faq_but">
		  <a class="faq_but1" href="#">Ingin Mengajukan Pertanyaan?</a>
	    </div>
	  </div>
	  <div class="faq_bottom">
	  	   <h4 class="tz-title-4 tzcolor-blue">
            <p class="tzweight_Bold"><span class="m_1">Hubungi melalui<br></span>Email</p>
          </h4>
	  	   <form>
				<div class="form_list1">
		            <input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
					<input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="margin-left:2%">
				</div>
				<div class="form_list2">
					<input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
				</div>
				<div class="form_list3">
			        <textarea value="Ask your questions here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Ask your questions here</textarea>
			    </div>
			    <div class="form-submit">
					<input name="submit" type="submit" id="submit" value="Submit"><br>
				</div>
				<div class="clearfix"></div>
          </form>
	  </div>
    </div>
</div>