<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Desa 4.0 | Buat Akun </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="shortcut icon" type="text/css" href="<?php echo base_url() . "assets/template/front/Serenity/assets/img/logo_bwi.png"; ?>" <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/back/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/back/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/back/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/back/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/back/plugins/iCheck/square/blue.css">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>


<body class="hold-transition login-page">

    <div class="login-box">
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Buat akun untuk melanjutkan</p>
            <div class="box box-success">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src=<?php echo base_url();  ?>assets/admin.png alt="User profile picture">
                    <h3 class="profile-username text-center">Buat Akun</h3>
                </div>

                <form action="<?php echo base_url() . "Login/Kirim"; ?>" method="POST">
                    <div class="form-group has-feedback">

                        <input type="text" name="username" class="form-control" placeholder="Email" style="height: 30px;">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" name="NIK" class="form-control" placeholder="NIK" style="height: 30px;">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" placeholder="Password" style="height: 30px;">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">

                            </div>

                        </div>

                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-success btn-block btn-flat">Masuk</button>
                        </div>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Lupa Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('welcome/login'); ?>"> Masuk </a>
                        </div>



                </form>


                <script src="<?php echo base_url(); ?>assets/template/back/bower_components/jquery/dist/jquery.min.js"></script>
                <!-- Bootstrap 3.3.7 -->
                <script src="<?php echo base_url(); ?>assets/template/back/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
                <!-- iCheck -->
                <script src="<?php echo base_url(); ?>plugins/iCheck/icheck.min.js"></script>
                <script>
                    $(function() {
                        $('input').iCheck({
                            checkboxClass: 'icheckbox_square-blue',
                            radioClass: 'iradio_square-blue',
                            increaseArea: '20%' /* optional */
                        });
                    });
                </script>



</body>

</html>