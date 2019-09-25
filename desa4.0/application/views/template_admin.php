  <?php 
    

if(empty($_SESSION['level']))
{
  redirect("welcome/");
}
else{
  if($_SESSION['level']!="admin")
  {
    redirect("welcome/");
  }
  else{
  }
}

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> DESA 4.0 | Pusat Sistem Informasi Desa</title>
  <link rel="shortcut icon" type="text/css" href="<?php echo base_url() . "assets/template/front/Serenity/assets/img/logo_bwi.png"; ?>" <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/back/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/back/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/back/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/back/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/back/dist/css/skins/_all-skins.min.css">
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
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/back/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">*{font-family:century gothic</style>
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper"></div>

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
      
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
            <ul class="dropdown-menu">
              
                         <!-- end task item -->
                  <!-- end task item -->
                
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url();  ?>assets/admin.png" height="25" width="25" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['nama']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url();  ?>assets/admin.png" height="25" width="25" class="img-circle" alt="User Image">

                <p>
                  Selamat Datang Admin
                  <small>Desa 4.0 @2019</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-bod y">
                
                <!-- /.row -->
              </li>
              <!-- 
                Menu Footer-->
              
              <li class="user-footer">
                
                <div class="pull-right">
                  <a href="<?php echo base_url()."index.php" ?>" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="height: auto;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
      <!-- Sidebar user panel -->
      <br>
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();  ?>assets/admin.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div><br>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu Akun</li>
        <li class="active treeview"></li>
      </ul>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li>
          <a href="<?php echo base_url()."login/adminku"; ?>">
            <i class="fa fa-dashboard"></i>Dashboard
          </a>
          
        </li>
    <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Akun</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url()."welcome/form_add_login" ?>"><i class="fa fa-circle-o"></i>Tambah Akun</a></li>
            <li><a href="<?php echo base_url()."welcome/loginku" ?>"><i class="fa fa-circle-o"></i>List Akun</a></li>
          </ul>
         <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu Navigasi</li>
        <li class="active treeview"></li>
      </ul>
      <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Artikel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."welcome/form_artikel" ?>"><i class="fa fa-circle-o"></i>Tambah Artikel</a></li>
            <li><a href="<?php echo base_url()."welcome/artikelku" ?>"><i class="fa fa-circle-o"></i>List Artikel</a></li>
            </ul>

        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil"></i> <span>Kegiatan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."welcome/form_kegiatan" ?>"><i class="fa fa-circle-o"></i>Tambah Kegiatan</a></li>
            <li><a href="<?php echo base_url()."welcome/kegiatanku" ?>"><i class="fa fa-circle-o"></i>List Kegiatan</a></li>
            </ul>
            
       
         
        
       
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
