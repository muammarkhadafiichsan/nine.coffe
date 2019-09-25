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
              <h3 class="widget-user-username">DESA 4.0</h3>
              <h4 class="widget-user-desc">Update Berita</h4>
            </div>
            
          </div>
          <!-- /.widget-user -->
        </div>
 <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Artikel</h3>
            </div>
      
<form role="form" action="<?php echo base_url()."welcome/add_artikel" ?>" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="col-md-6">
                <div class="form-group">
                  <label>Judul</label>
                  <input type="text" class="form-control" name="judul" placeholder="judul">
                </div>
                 <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea class="form-control" rows="12"  placeholder="Deskripsi . . . . . . . . " name="deskripsi"></textarea>
                </div>

                </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nama Pengirim</label>
                  <input type="text" class="form-control" placeholder="Nama Pengirim" name="nama_pengirim" >
                </div>
              
                <div class="form-group">
                  <label>Gambar</label>
                  <input type="file" name="foto"></div>
               <div class="form-group">
                

                <label>Tanggal</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" name="tanggal" class="form-control pull-right" id="datepicker">
                </div>
                <br><br><br><br>
                <!-- /.input group -->
              </div>
              <div class="box-footer">
              <div class="clear">
                <div class="pull-right">
              
                
                <input type="submit" value="Tambah" class="btn btn-primary">
                <input type="reset" value="Hapus" class="btn btn-primary">
              </div>
              </div>
                </div> 
                </div> 

                 
                </div>
               
              </div>