<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>        
    <!-- META SECTION -->
    <title>Login SIPKIA</title>            
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->        
    <link rel="stylesheet" type="text/css" id="theme" href="<?php echo site_url("assets")."/";?>css/theme-default.css"/>
    <!-- EOF CSS INCLUDE -->                                    
</head>
<body>

    <div class="login-container">

        <div class="login-box animated fadeInDown">
            <div class="login-logo"></div>
            <div class="login-body">
                <div class="login-title"><strong>Selamat datang</strong>, Silahkan login</div>
                <form action="<?php echo base_url();?>C_Login/prosesLogin" class="form-horizontal" method="post">
                    <!-- pesan start -->
                    <div class="form-group">
                    <div class="col-md-12">
                    <?php if (! empty($pesan)) : ?>
                        <label>
                       <strong> <h4 style="color:white;">
                            <?php echo $pesan; ?>
                        </h4></strong></label>
                    <?php endif ?>
                    <!-- pesan end -->
                    </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="username"class="form-control" placeholder="Username"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" name="password"class="form-control" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block">Lupa password kamu?</a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block">Masuk</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="login-footer">
                <div class="pull-left">
                    &copy; 2014 SIPKIA
                </div>
            </div>
        </div>

    </div>

</body>
</html>






