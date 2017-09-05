<!DOCTYPE html>
<html>
    <head>
        <!-- /.website title -->
        <title>Smart Media | Knowledgebase</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!-- CSS Files -->
        <link href="<?php echo base_url('assets/')?>css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url('assets/')?>css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url('assets/')?>pe-icon-7-stroke/css/pe-icon-7-stroke.css">
        <link href="<?php echo base_url('assets/')?>css/animate.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url('assets/')?>css/css-index.css" rel="stylesheet" media="screen">


        <!-- Custom -->
        <link href="<?php echo base_url('assets/')?>css/custom.css" rel="stylesheet" media="stylesheet">

        <!-- Google Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />
    </head>

    <body>
    <!-- NAVIGATION -->
        <div id="menu">
            <nav class="navbar-wrapper navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-backyard">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand site-name" href="<?php echo base_url()?>"><img src="<?php echo base_url('assets/')?>images/logo.png" alt="logo"></a>
                    </div>

                    <div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url('#about')?>">Tentang</a></li>
                            <li><a href="<?php echo base_url('#feature-2')?>">Fitur</a></li>
                            <li><a href="<?php echo base_url('#package')?>">Paket</a></li>
                            <li class="active"><a href="<?php echo base_url('knowledgebase')?>">Knowledgebase</a></li>
                            <li><a href="<?php echo base_url('#testi')?>">Testimonial</a></li>
                            <li><a href="<?php echo base_url('#contact')?>">Kontak</a></li>
                            <li><a href="<?php echo base_url('member/auth/login')?>">Login</a></li>
                            <li><a href="<?php echo base_url('auth/register')?>">Register</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        
        <!-- /.parallax full screen background image -->
        <div class="fullscreen landing parallax" style="background-image:url('<?php echo base_url('assets/')?>images/banner.jpg');" data-img-width="2000" data-img-height="1325" data-diff="100">

            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">

                            <!-- /.logo -->
                            <div class="logo wow fadeInDown"> &nbsp;</div>
                            <!-- /.main title -->
                            <h2 class="wow fadeInLeft">
                                Knowledgebase
                            </h2>

                            <!-- /.header paragraph -->
                            <div class="landing-text wow fadeInLeft">
                                <p>Pusat Informasi</p>
                            </div>				  
                        </div> 
                    </div>
                </div> 
            </div> 
        </div>

        <!-- /.feature section -->
        <div id="policy">
            <div class="container">
                <div class="row">
                    <!-- /.apple devices image -->
                    <div class="col-md-10 col-md-offset-1 know-content">
                        <?php 
                            $counter = 0;
                                foreach($articles as $art){
                                    $counter++;
                        ?>    
                                    <div class="col-md-6">
                                        <ul class="project_box faq-list">
                                            <li class="desc"><h5><a href="<?php echo base_url("knowledgebase/detail/").$art['id_articles'];?>"><?php echo $art['title_articles']?></a></h5>
                                                <p></p>
                                            </li>
                                          <div class="clearfix"> </div>
                                        </ul>
                                    </div>
                        <?php  } ?>
                    </div>	

                    <?php echo $paging;?>

                </div>			  
            </div>
        </div>


        <!-- /.footer -->
        <footer id="footer">
            <div class="container">
                <div class="col-sm-4 col-sm-offset-4">
                    <!-- /.social links -->
                    <div class="social text-center">
                        <ul>
                            <li><a class="wow fadeInUp" href="http://twitter.com/illiyinstudio"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="wow fadeInUp" href="http://www.facebook.com/illiyinstudio" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="wow fadeInUp" href="http://plus.google.com/" data-wow-delay="0.4s"><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="wow fadeInUp" href="http://instagram.com/illiyinstudio" data-wow-delay="0.6s"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>  
                    <div class="text-center wow fadeInUp" style="font-size: 14px;">Copyright Smart Media 2017</div>
                    <a href="#" class="scrollToTop"><i class="pe-7s-up-arrow pe-va"></i></a>
                </div>  
            </div>  
        </footer>

        <!-- /.javascript files -->
        <script src="<?php echo base_url('assets/')?>js/jquery.js"></script>
        <script src="<?php echo base_url('assets/')?>js/bootstrap.min.js"></script>
        <script src="<?php echo base_url('assets/')?>js/custom.js"></script>
    </body>
</html>