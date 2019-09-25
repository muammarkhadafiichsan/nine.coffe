<div class="content-wrapper">

  <br> <!-- Content Header (Page header) -->
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
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Tambah Pegawai</h3>
          </div>

          <form role="form" action="<?php echo base_url() . "index.php/welcome/add_pegawai" ?>" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              <div class="col-md-6">
                <div class="form-group">
                  <label>ID Pegawai</label>
                  <input type="number" name="id_pegawai" class="form-control" placeholder="ID. . . ." required>
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control select2" required style="width: 100%;" name="jenis_kelamin">
                    <option value="Laki - Laki">Laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir</label>

                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" name="tanggal_lahir" class="form-control pull-right" id="datepicker" required>
                  </div>
                </div>
              </div>
              <div class="col-md-6">



                <div class="form-group">
                  <label>No Telepon</label>
                  <input type="number" name="telepon" class="form-control" placeholder="No Telepon" required>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" rows="5" placeholder="Alamat . . . . . . . . " required></textarea>
                </div>
                <div class="form-group">
                  <label>Nama Kecamatan</label>
                  <select name="kecamatan" class="form-control select2" style="width: 100%;">
                    <option selected="selected">kebaman</option>
                    <option value="kerajan">kerajan</option>
                    <option value="wagud">wagud</option>
                    <option value="jambean">jambean</option>
                    <option value="kopen">kopen</option>
                    <option value="klinitan">klinitan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Foto</label>
                  <input type="file" name="foto"></div>

                <br><br>
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