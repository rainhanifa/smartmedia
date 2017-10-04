<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Smart Media</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Media Web Builder" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url("assets");?>/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url("assets");?>/js/jquery-1.11.1.min.js"></script>


<!-- Custom Theme files -->
<link href="<?php echo base_url("assets");?>/css/font-awesome.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url("assets");?>/css/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url("assets");?>/css/ctm_style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url("assets");?>/css/custom.css" rel='stylesheet' type='text/css' />

<!-- Custom Theme files -->
<!-- webfonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!-- webfonts -->

<!-- Add fancyBox main JS and CSS files -->
<script src="<?php echo base_url("assets");?>/js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="<?php echo base_url("assets");?>/css/popup.css" rel="stylesheet" type="text/css">
<script>
    $(document).ready(function() {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });
    });
</script>
</head>
<body>
<?php 
    $active = $this->router->fetch_class();
?>
    <div class="header">
        <div class="">
            <div class="header_top">
                <div class="container">
                    <div class="logo">
                        <a href="<?php echo base_url("home")?>"><img src="<?php echo base_url("assets");?>/images/logo.png" alt=""/></a>
                    </div> 
                    <div class="cssmenu">
                            <ul>
                                <li><a href="mailto:info@mycompany.com">info(at)smartmedia.com</a></li> 
                                <?php if($this->session->userdata('is_logged_in')) { ?>
                                    <li><a href="<?php echo base_url("member/dashboard")?>"><?php echo $this->session->userdata('is_active_name')?></a></li> 
                                    <li><a href="<?php echo base_url("auth/logout")?>">Logout</a></li>
                                <?php } else { ?>
                                    <li><a href="<?php echo base_url("auth/login")?>">Login</a></li> 
                                    <li><a href="<?php echo base_url("auth/register")?>">Register</a></li>
                                <?php } ?>
                            </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="h_menu4"><!-- start h_menu4 -->
            <div class="container">
                <a class="toggleMenu" href="#">Menu</a>
                <ul class="nav">
                    <li <?php echo ($active =="home")? 'class = active':''?>><a href="<?php echo base_url("home")?>">Home</a></li>
                    <li <?php echo ($active =="about")? "class='active'" : "" ?>> <a href="<?php echo base_url("about");?>">About Us</a></li>
                    <li <?php echo ($active =="store")? "class='active'" : "" ?>> <a href="<?php echo base_url("store/theme");?>">Template</a></li>
                    <li <?php echo ($active =="knowledgebase")? "class='active'" : "" ?>> <a href="<?php echo base_url("knowledgebase");?>">Knowledgebase</a></li>
                    <!--li <?php echo ($active =="service")? "class='active'" : "" ?>> <a href="<?php echo base_url("service");?>">Service</a></li>
                    <!-- <li <php echo ($active =="store")? 'class = active':''?> class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Store<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a class="droplink" href="<php echo base_url("store/details")?>">Detail</a></li>
                        <li><a class="droplink" href="<php echo base_url("store/theme")?>">Theme</a></li>
                      </ul>
                    </li>
                    <li <php echo ($active =="promo")? "class='active'" : "" ?>> <a href="<?php echo base_url("promo");?>">Promo</a></li>
                    <li <php echo ($active =="reseller")? "class='active'" : "" ?>> <a href="<?php echo base_url("reseller");?>">Reseller</a></li> -->
                    <li <?php echo ($active =="contact")? 'class = active':''?>><a href="<?php echo base_url("contact")?>">Contact Us</a></li>
                 </ul>
                 <script type="text/javascript" src="<?php echo base_url("assets");?>/js/nav.js"></script>
            </div>

            </div><!-- end h_menu4 -->
         </div>
    </div>