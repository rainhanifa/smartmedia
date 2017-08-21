<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Login - Smartmedia Admin</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!--base css styles-->
        <link rel="stylesheet" href="<?php echo base_url('assets');?>/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url('assets');?>/assets/font-awesome/css/font-awesome.min.css">

        <!--page specific css styles-->

        <!--flaty css styles-->
        <link rel="stylesheet" href="<?php echo base_url('assets');?>/css/flaty.css">
        <link rel="stylesheet" href="<?php echo base_url('assets');?>/css/flaty-responsive.css">

        <link rel="shortcut icon" href="<?php echo base_url('assets');?>/img/favicon.png">
    </head>
    <body class="login-page">

        <!-- BEGIN Main Content -->
        <div class="login-wrapper">
            <!-- BEGIN Login Form -->
            <form id="form-login" action="<?php echo base_url("auth/login")?>" method="post">
                <h3>Login</h3>
                <hr/>
                <?php if($this->session->flashdata("message") != ""){ ?>
                        <div class="alert alert-danger">
                            <?php echo $this->session->flashdata("message");?>
                        </div>
                <?php }?>
                <div class="form-group">
                    <div class="controls">
                        <input type="text" placeholder="Email" class="form-control" name="username"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="controls">
                        <input type="password" placeholder="Password" class="form-control" name="password" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="controls">
                        <input type="submit" class="btn btn-primary form-control" name="submit" value="LOGIN">
                    </div>
                </div>
                <div>
                	<a href="http://localhost/smartmedia">Kembali</a>
                </div>
            </form>
            <!-- END Login Form -->
            	
        </div>
        <!-- END Main Content -->


        <!--basic scripts-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url('assets');?>/assets/jquery/jquery-2.1.4.min.js"><\/script>')</script>
        <script src="<?php echo base_url('assets');?>/assets/bootstrap/js/bootstrap.min.js"></script>

        <script type="text/javascript">
            function goToForm(form)
            {
                $('.login-wrapper > form:visible').fadeOut(500, function(){
                    $('#form-' + form).fadeIn(500);
                    //$('#form-' + form).css("display","block");
                });
            }
            $(function() {
                $('.goto-login').click(function(){
                    goToForm('login');
                });
                $('.goto-forgot').click(function(){
                    goToForm('forgot');
                });
                $('.goto-register').click(function(){
                    goToForm('register');
                });
            });
        </script>
    </body>
</html>
