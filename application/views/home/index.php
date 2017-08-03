<!DOCTYPE html>
<html>
    <head>

        <!-- /.website title -->
        <title>Smart Media</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <!-- CSS Files -->
        <link href="<?php echo base_url('assets/')?>css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url('assets/')?>css/font-awesome.css" rel="stylesheet">
        <link href="<?php echo base_url('assets/')?>fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="<?php echo base_url('assets/')?>css/animate.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url('assets/')?>css/owl.theme.css" rel="stylesheet">
        <link href="<?php echo base_url('assets/')?>css/owl.carousel.css" rel="stylesheet">

        <!-- Colors --> 
        <link href="<?php echo base_url('assets/')?>css/css-index.css" rel="stylesheet" media="screen">
        <!-- Custom -->
        <link href="<?php echo base_url('assets/')?>css/custom.css" rel="stylesheet" media="stylesheet">

        <!-- Google Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />

    </head>

    <body data-spy="scroll" data-target="#navbar-scroll">

        <!-- /.preloader -->
        <div id="preloader"></div>
        <div id="top"></div>

        <!-- /.parallax full screen background image -->
        <div class="fullscreen landing parallax" style="background-image:url('<?php echo base_url('assets/')?>images/sample-image-banner-1.jpg');" data-img-width="2000" data-img-height="1333" data-diff="100">

            <div class="overlay" id="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">

                            <!-- /.logo -->
                            <div class="logo wow fadeInDown"> <a href=""><img src="<?php echo base_url('assets/')?>images/logo.png" alt="logo"></a></div>

                            <!-- /.main title -->
                            <h1 class="wow fadeInLeft">
                                Buat Website Sendiri<br/>Tanpa Ribet
                            </h1>

                            <!-- /.header paragraph -->
                            <div class="landing-text wow fadeInUp">
                                <p>Smart Media adalah platform yang memudahkan Anda untuk membuat website sendiri tanpa coding, tanpa memikirkan pengaturan domain dan hosting.</p>
                                <p>Pilih sendiri templatenya dan website Anda langsung launching!</p>
                            </div>				  

                            <!-- /.header button -->
                            <div class="head-btn wow fadeInLeft">
                                <a href="#about" class="btn-primary"><i class="pe-7s-play pe-5x pe-va"></i> Lihat Video</a>
                                <a href="#download" class="btn-default">Coba Sekarang</a>
                            </div>



                        </div> 

                        <!-- /.signup form -->
                        <div class="col-md-5">

                            <div class="signup-header wow fadeInUp">
                                <h3 class="form-title text-center">REGISTRASI</h3>
                                <form class="form-header" action="<?php echo base_url('auth/register')?>" role="form" method="GET" id="#register">
                                    <div class="form-group">
                                        <input class="form-control input-lg" name="first_name" id="first_name" type="text" placeholder="Nama" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control input-lg" name="email" id="email" type="email" placeholder="Alamat Email" required>
                                    </div>
                                    <div class="form-group last">
                                        <input type="submit" class="btn btn-warning btn-block btn-lg" value="DAFTAR">
                                    </div>
                                    <p>&nbsp;</p>
                                </form>
                            </div>				
                        </div>
                    </div>
                </div> 
            </div> 
        </div>

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
                        <a class="navbar-brand site-name" href="#top"><img src="<?php echo base_url('assets/')?>images/logo.png" alt="logo"></a>
                    </div>

                    <div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#about">Tentang</a></li>
                            <li><a href="#fitur">Fitur</a></li>
                            <li><a href="#package">Paket</a></li>
                            <li><a href="knowledgebase">Knowledgebase</a></li>
                            <li><a href="#testi">Testimonial</a></li>
                            <li><a href="#contact">Kontak</a></li>
                            <li><a href="<?php echo base_url('member/auth/login')?>">Login</a></li>
                            <li><a href="<?php echo base_url('auth/register')?>">Register</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!-- /.feature section -->
        <div id="feature-2">
            <div id="fitur" class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center feature-title">

                        <!-- /.feature title -->
                        <h2>Semua Kemudahan dalam Membuat Website</h2>
                        <p>Smart Media memiliki fitur-fitur yang Anda butuhkan untuk membuat website secara mudah dan cepat.<br/>Inilah platform web-builder terbaik di Indonesia.</p>
                    </div>
                </div>
                <div class="row row-feat">
                    <div class="col-md-4 text-center">

                        <!-- /.feature image -->
                        <div class="feature-img">
                            <img src="<?php echo base_url('assets/')?>images/sample-image-banner-2.jpg" alt="image" class="img-responsive wow fadeInLeft">
                        </div>
                    </div>

                    <div class="col-md-8">

                        <!-- /.feature 1 -->
                        <div class="col-sm-6 feat-list">
                            <i class="pe-7s-browser pe-5x pe-va wow fadeInUp"></i>
                            <div class="inner">
                                <h4>Drag-and-Drop Web Builder</h4>
                                <p>Engine web builder kami memiliki berbagai variasi komponen website yang mudah digunakan.
                                </p>
                            </div>
                        </div>

                        <!-- /.feature 2 -->
                        <div class="col-sm-6 feat-list">
                            <i class="pe-7s-cash pe-5x pe-va wow fadeInUp" data-wow-delay="0.2s"></i>
                            <div class="inner">
                                <h4>Voucher-based</h4>
                                <p>Paket layanan Smart Media dapat diaktifkan dengan voucher yang tersedia di toko terdekat.</p>
                            </div>
                        </div>

                        <!-- /.feature 3 -->
                        <div class="col-sm-6 feat-list">
                            <i class="pe-7s-server pe-5x pe-va wow fadeInUp" data-wow-delay="0.4s"></i>
                            <div class="inner">
                                <h4>Domain dan Hosting Gratis</h4>
                                <p>Tidak perlu pusing mengatur domain dan hosting, website Anda bisa langsung launching</p>
                            </div>
                        </div>

                        <!-- /.feature 4 -->
                        <div class="col-sm-6 feat-list">
                            <i class="pe-7s-users pe-5x pe-va wow fadeInUp" data-wow-delay="0.6s"></i>
                            <div class="inner">
                                <h4>Dukungan 24/7</h4>
                                <p>Pertanyaan seputar produk dan layanan? Customer Support kami siap membantu Anda.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.template section -->
        <div id="feature">
            <div class="container">
                <div class="row">
                    <!-- /.template content -->
                    <div class="col-md-6 wow fadeInLeft">
                        <h2>150+ Template Website Responsif</h2>
                        <p>Smart Media Web Builder menyediakan berbagai variasi template yang sesuai dengan tema website Anda, personal, edukasi, restoran, portfolio, kesehatan, berita, hingga bisnis. Semua template kami bersifat responsif, sehingga dapat tampil dengan baik di berbagai perangkat seperti desktop, tablet, maupun mobile.
                        </p>

                        <div class="btn-section"><a href="#download" class="btn-default">Lihat Template</a></div>

                    </div>

                    <!-- /.feature image -->
                    <div class="col-md-6 feature-2-pic wow fadeInRight">
                        <img src="<?php echo base_url('assets/')?>images/pic2.jpg" alt="image" class="img-responsive">
                    </div>                
                </div>            
            </div>
        </div>

        <!-- /.video section -->
        <div id="feature-2">
            <div class="container">
                <div class="row">=
                    <!-- /.feature image -->
                    <div class="col-md-6 feature-2-pic wow fadeInLeft">
                        <div class="video-embed wow fadeIn" data-wow-duration="1s">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/z41Uy3Tg-yI" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>  

                    <!-- /.template content -->
                    <div class="col-md-6 wow fadeInLeft">
                        <h2>Cara Kerja Smart Media</h2>
                        <p>Smart Media Web Builder menyediakan berbagai variasi template yang sesuai dengan tema website Anda, personal, edukasi, restoran, portfolio, kesehatan, berita, hingga bisnis. Semua template kami bersifat responsif, sehingga dapat tampil dengan baik di berbagai perangkat seperti desktop, tablet, maupun mobile.
                        </p>

                        <div class="btn-section"><a href="#download" class="btn-default">Lihat Template</a></div>

                    </div>              
                </div>            
            </div>
        </div>

        <!-- /.pricing section -->
        <div id="package">
            <div class="container">
                <div class="text-center">

                    <!-- /.pricing title -->
                    <h2 class="wow fadeInLeft">PAKET</h2>
                    <div class="title-line wow fadeInRight"></div>
                </div>
                <div class="row package-option">

                    <!-- /.package 1 -->
                    <div class="col-sm-3">
                        <div class="price-box wow fadeInUp">
                            <div class="price-heading text-center">

                                <!-- /.package icon -->
                                <i class="pe-7s-like2 pe-5x"></i>

                                <!-- /.package name -->
                                <h3>Hore</h3>
                            </div>

                            <!-- /.price -->
                            <div class="price-group text-center">
                                <span class="dollar">Rp</span>
                                <span class="price">0</span>
                                <span class="time">,-</span>
                            </div>

                            <!-- /.package features -->
                            <ul class="price-feature text-center">
                                <li><strong>100MB</strong> Disk Space</li>
                                <li><strong>200MB</strong> Bandwidth</li>
                                <li><strong>1</strong> Subdomains</li>
                                <li><strong>1</strong> Email Accounts</li>             
                            </ul>

                            <!-- /.package button -->
                            <div class="price-footer text-center">
                                <a class="btn btn-price" href="<?php echo base_url('auth/register')?>">COBA SEKARANG</a>
                            </div>  
                        </div>
                    </div>

                    <!-- /.package 2 -->
                    <div class="col-sm-3">
                        <div class="price-box wow fadeInUp" data-wow-delay="0.2s">
                            <div class="price-heading text-center">

                                <!-- /.package icon -->
                                <i class="pe-7s-like pe-5x"></i>

                                <!-- /.package name -->
                                <h3>Standar</h3>
                            </div>

                            <!-- /.price -->
                            <div class="price-group text-center">
                                <span class="dollar">Rp</span>
                                <span class="price">49</span>
                                <span class="time">ribu</span>
                            </div>

                            <!-- /.package features -->
                            <ul class="price-feature text-center">
                                <li><strong>200MB</strong> Disk Space</li>
                                <li><strong>400MB</strong> Bandwidth</li>
                                <li><strong>3</strong> Subdomains</li>
                                <li><strong>5</strong> Email Accounts</li>       
                            </ul>

                            <!-- /.package button -->
                            <div class="price-footer text-center">
                                <a class="btn btn-price" href="#">BELI</a>
                            </div>
                        </div>
                    </div>  

                    <!-- /.package 3 -->
                    <div class="col-sm-3">
                        <div class="price-box wow fadeInUp" data-wow-delay="0.4s">
                            <div class="price-heading text-center">

                                <!-- /.package icon -->
                                <i class="pe-7s-star pe-5x"></i>

                                <!-- /.package name -->
                                <h3>Komplit</h3>
                            </div>

                            <!-- /.price -->
                            <div class="price-group text-center">
                                <span class="dollar">Rp</span>
                                <span class="price">99</span>
                                <span class="time">ribu</span>
                            </div>

                            <!-- /.package features -->
                            <ul class="price-feature text-center">
                                <li><strong>1GB</strong> Disk Space</li>
                                <li><strong>1GB</strong> Bandwidth</li>
                                <li><strong>5</strong> Subdomains</li>
                                <li><strong>20</strong> Email Accounts</li>
                            </ul>

                            <!-- /.package button -->
                            <div class="price-footer text-center">
                                <a class="btn btn-price" href="#">BELI</a>
                            </div>  
                        </div>
                    </div>

                    <!-- /.package 4 -->
                    <div class="col-sm-3">
                        <div class="price-box wow fadeInUp" data-wow-delay="0.6s">
                            <div class="price-heading text-center">

                                <!-- /.package icon -->
                                <i class="pe-7s-science pe-5x"></i>

                                <!-- /.package name -->
                                <h3>Mantap</h3>
                            </div>

                            <!-- /.price -->
                            <div class="price-group text-center">
                                <span class="dollar">Rp</span>
                                <span class="price">199</span>
                                <span class="time">ribu</span>
                            </div>

                            <!-- /.package features -->
                            <ul class="price-feature text-center">
                                <li><strong>5GB</strong> Disk Space</li>
                                <li><strong>5GB</strong> Bandwidth</li>
                                <li><strong>15</strong> Subdomains</li>
                                <li><strong>50</strong> Email Accounts</li>
                            </ul>

                            <!-- /.package button -->
                            <div class="price-footer text-center">
                                <a class="btn btn-price" href="#">BELI</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        
        <!-- /.action section -->
        <div id="action">
            <div class="action fullscreen parallax" style="background-image:url('<?php echo base_url('assets/')?>images/banner.jpg');" data-img-width="2000" data-img-height="1333" data-diff="100">
                <div class="overlay">
                    <div class="container">
                        <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">

                            <!-- /.download title -->
                            <h2 class="wow fadeInRight">Apa lagi yang Anda tunggu?</h2>
                            <!-- 
                            <p class="download-text wow fadeInLeft">Buat website Anda sekarang juga</p>

                            <!-- /.download button -->
                            <div class="download-cta wow fadeInLeft">
                                <a href="<?php echo base_url('auth/register')?>" class="btn-secondary">Buat Website Sekarang!</a>
                            </div>
                        </div>	
                    </div>	
                </div>
            </div>
        </div>

        <!-- /.testimonial section -->
        <div id="testi">
            <div class="container">
                <div class="text-center">
                    <h2 class="wow fadeInLeft">TESTIMONIAL</h2>
                    <div class="title-line wow fadeInRight"></div>
                </div>
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">	
                        <div id="owl-testi" class="owl-carousel owl-theme wow fadeInUp">

                            <!-- /.testimonial 1 -->
                            <div class="testi-item">
                                <div class="client-pic text-center">

                                    <!-- /.client photo -->
                                    <img src="<?php echo base_url('assets/')?>images/t6.jpg" alt="client">
                                </div>
                                <div class="box">

                                    <!-- /.testimonial content -->
                                    <p class="message text-center">"Menggunakannya sangat mudah. Cuma lima menit saya sudah bisa punya website sendiri untuk usaha saya. Good job, Smart Media!"</p>
                                </div>
                                <div class="client-info text-center">

                                    <!-- /.client name -->
                                    Luqman Hakim <span class="company">Bakso Mercon Cakmen</span>	
                                </div>
                            </div>		

                            <!-- /.testimonial 2 -->
                            <div class="testi-item">
                                <div class="client-pic text-center">

                                    <!-- /.client photo -->
                                    <img src="<?php echo base_url('assets/')?>images/t2.jpg" alt="client">
                                </div>
                                <div class="box">

                                    <!-- /.testimonial content -->
                                    <p class="message text-center">"Templatenya bagus-bagus, cocok buat distro dan online shop saya. Saya pakai paket Standar sudah bisa punya dua website."</p>
                                </div>
                                <div class="client-info text-center">

                                    <!-- /.client name -->
                                    M. Handharbeni <span class="company">Pengusaha Distro</span>	
                                </div>
                            </div>				

                            <!-- /.testimonial 3 -->
                            <div class="testi-item">
                                <div class="client-pic text-center">

                                    <!-- /.client photo -->
                                    <img src="<?php echo base_url('assets/')?>images/t8.jpg" alt="client">
                                </div>
                                <div class="box">

                                    <!-- /.testimonial content -->
                                    <p class="message text-center">"Komunitas Gundam kami kini memiliki website sendiri, sehingga bisa menyajikan informasi seputar gundam. Smart Media benar-benar mudah dan bermanfaat."</p>
                                </div>
                                <div class="client-info text-center">

                                    <!-- /.client name -->
                                    Dimas Virdana <span class="company">Penggiat Komunitas Gundam</span>	
                                </div>
                            </div>			

                        </div>
                    </div>	
                </div>	
            </div>
        </div>

        <!-- /.contact section -->
        <div id="contact">
            <div class="contact fullscreen parallax" style="background-image:url('<?php echo base_url('assets/')?>images/sample-image-banner-1.jpg');" data-img-width="2000" data-img-height="1334" data-diff="100">
                <div class="overlay">
                    <div class="container">
                        <div class="row contact-row">

                            <!-- /.address and contact -->
                            <div class="col-sm-5 contact-left wow fadeInUp">
                                <h2><span class="highlight">Kontak</span> kami</h2>
                                <ul class="ul-address">
                                    <li><i class="pe-7s-map-marker"></i>Perum Nirwana Keben Kav. 7, Sukun</br>
                                        Kota Malang 65135
                                    </li>
                                    <li><i class="pe-7s-phone"></i>+62 81 333 66 2055</br>
                                        +62 341 709090
                                    </li>
                                    <li><i class="pe-7s-mail"></i><a href="mailto:info@smartmedia.com">info@smartmedia.com</a></li>
                                    <li><i class="pe-7s-look"></i><a href="#">www.smartmedia.com</a></li>
                                </ul>	

                            </div>

                            <!-- /.contact form -->
                            <div class="col-sm-7 contact-right">
                                <form method="POST" id="contact-form" class="form-horizontal" action="contactengine.php" onSubmit="alert( 'Thank you for your feedback!' );">
                                    <div class="form-group">
                                        <input type="text" name="Name" id="Name" class="form-control wow fadeInUp" placeholder="Nama" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="Email" id="Email" class="form-control wow fadeInUp" placeholder="Email" required/>
                                    </div>					
                                    <div class="form-group">
                                        <textarea name="Message" rows="20" cols="20" id="Message" class="form-control input-message wow fadeInUp"  placeholder="Pesan" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit" value="Kirim" class="btn btn-success wow fadeInUp" />
                                    </div>
                                </form>		
                            </div>
                        </div>
                    </div>
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
        <script src="<?php echo base_url('assets/')?>js/jquery.sticky.js"></script>
        <script src="<?php echo base_url('assets/')?>js/wow.min.js"></script>
        <script src="<?php echo base_url('assets/')?>js/owl.carousel.min.js"></script>
        <script>
            new WOW().init();
        </script>
    </body>
</html>