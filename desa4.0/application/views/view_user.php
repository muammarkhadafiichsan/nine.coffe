<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    
<section class="content">
<div class="row">
        <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-grey">
              <div class="widget-user-image">
                <img class="img-circle" src="<?php echo base_url().  "assets/template/front/Serenity/assets/img/desa.png" ; ?>"  height="100%" width="200px" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username"> DESA 4.0 </h3>
              <h4 class="widget-user-desc">Data Petugas</h4>
            </div>
            
          </div>
          <!-- /.widget-user -->
        </div>


<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
              <!-- USERS LIST -->
              <div class="box box-widget">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Petugas</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-success" >Member baru</span>
                    
                    
                </div>
                      <?php
      
      foreach ($data as $i) {
        ?>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                    <li>
                      <br>
                      <img src="<?php echo base_url()."assets/".$i['foto'] ;?>" height="125px" width="125px">
                      <a class="users-list-name" href="<?php echo base_url()."welcome/view_profil/".$i['id_pegawai'] ?>"><?php echo $i['nama'] ;?></a>
                      <span class="users-list-date"><?php echo $i['kecamatan'] ;?></span>
                      <a class="users-list-name" href="<?php echo base_url()."welcome/view_profil/".$i['id_pegawai'] ?>"><?php echo $i['id_pegawai'] ;?></a>
                    </li>
                    <?php  }?>
                  </ul>