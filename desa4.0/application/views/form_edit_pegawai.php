<div class="content-wrapper">

<br>    <!-- Content Header (Page header) -->
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
              <h3 class="box-title">Tambah Pegawai</h3>
            </div>
      
<form role="form" action="<?php echo base_url()."index.php/welcome/update_pegawai" ?>" method="POST">
              <div class="box-body">
                <div class="col-md-6">
                <div class="form-group">
                  <input type="hidden" name="id_pegawai" value="<?php echo $data['id_pegawai']; ?>">
                
                </div>
                 <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $data ['nama'] ?>" required>
                </div>
                 

                <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control select2" required style="width: 100%;" name="jenis_kelamin">
                  <option value="Laki - Laki" <?php echo ($data['jenis_kelamin'] == "Laki - Laki") ? 'selected' : ''; ?>>Laki - Laki</option>
                  <option value="Perempuan" <?php echo ($data['jenis_kelamin'] == "Perempuan") ? 'selected' : ''; ?>>Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                 

                <div class="form-group">
                <label>Tanggal Lahir</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" name="tanggal_lahir" class="form-control pull-right" id="datepicker" value="<?php echo $data['tanggal_lahir'] ?>" required>
                </div>
              </div>
                <div class="form-group">
                  <label>No Telepon</label>
                  <input type="number" name="telepon" class="form-control" value="<?php echo $data ['telepon'] ?>" placeholder="No Telepon" required>
                </div>
                 <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" rows="5">
                    <?php echo $data['alamat']; ?>
                  </textarea>
                </div>
              
                <br><br>
                <!-- /.input group -->
              </div>
              <div class="box-footer">
              <div class="clear">
                <div class="pull-right">
              
                
                <input type="submit" value="Edit" class="btn btn-primary">
                <a class="btn btn-primary" href="<?php echo base_url()."index.php/welcome/pegawaiku"; ?>">Batal</a>
              </div>
              </div>
                </div> 
                </div> 

                 
                </div>
               
              </div>