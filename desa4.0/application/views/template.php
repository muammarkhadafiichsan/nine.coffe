<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User | Dashboard</title>
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
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/back/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/back/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/back/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/back/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/back/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
    * {
      font-family: century gothic
  </style>
</head>

<body class="hold-transition skin-blue sidebar-mini fixed">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>DESA</b>4.0</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle Navigasi</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->

            <!-- User Account: style can be found in dropdown.less -->

            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Selamat Datang Admin
                  <small>Member since Sept. 2019</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">

                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">

                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat"> Keluar </a>
                </div>
              </li>
            </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="<?php echo base_url() . "index.php" ?>"> Keluar </i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">

          <center><img height="100px" width="100px" src="<?php echo base_url();  ?>assets/admin.png">
          </center>

        </div>
        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <CENTER>
            <li class="header">Hello <?php echo $_SESSION['nama']; ?></li>
          </center>
          <br><br>
          <li>
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>

            </a>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-bars"></i> <span>Usaha dan Produk</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="<?php echo base_url() . "index.php/welcome/index_1" ?>"><i class="fa fa-circle-o"></i> Input Data </a></li>
              <li><a href="<?php echo base_url() . "index.php/welcome/padi_admin" ?>"><i class="fa fa-circle-o"></i> Data Terkirim</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-bars"></i> <span>Kependudukan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="<?php echo base_url() . "index.php/welcome/form_kopi" ?>"><i class="fa fa-circle-o"></i> Input Data </a></li>
              <li><a href="<?php echo base_url() . "welcome/kopi_user" ?>"><i class="fa fa-circle-o"></i> Data Terkirim</a></li>
            </ul>
          </li>

        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <section class="content-header">
        <h1>

          <small> Selamat Datang Admin </small>
        </h1>

      </section>