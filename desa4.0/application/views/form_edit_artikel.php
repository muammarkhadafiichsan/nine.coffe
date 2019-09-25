<div class="content-wrapper">

   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
       
      </h1>
      
    </section>  

 <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Artikel</h3>
            </div>
      
<form role="form" action="<?php echo base_url()."index.php/welcome/update_artikel" ?>" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="col-md-6">
                <div class="form-group">
                  <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                  <label>Judul</label>
                  <input type="text" class="form-control" name="judul" value="<?php echo $data['judul']; ?>">
                </div>
                 <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea class="form-control" rows="12" name="deskripsi" placeholder="Deskripsi . . . . . ."><?php echo $data['deskripsi']; ?></textarea>
                </div>

                </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nama Pengirim</label>
                  <input type="text" class="form-control" placeholder="Nama Pengirim" name="nama_pengirim" value="<?php echo $data['nama_pengirim'] ?>">
                </div>
              
                <div class="form-group">
                  <label>Gambar</label>
                  <img src="<?php echo base_url()."assets/".$data['foto']; ?>" height="200px" width="450px">
                  <input type="file" name="foto"></div>
               <div class="form-group">
              

                <label>Tanggal</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" name="tanggal" class="form-control pull-right"  value="<?php echo $data['tanggal']; ?>">
                </div>
                <br><br><br><br>
                <!-- /.input group -->
              </div>
              <div class="box-footer">
              <div class="clear">
                <div class="pull-right">
              
                
                <input type="submit" value="Add" class="btn btn-primary">
                <a class="btn btn-primary" href="<?php echo base_url()."index.php/welcome/artikelku"; ?>">Batal</a>
              </div>
              </div>
                </div> 
                </div> 

                 
                </div>
               
              </div>