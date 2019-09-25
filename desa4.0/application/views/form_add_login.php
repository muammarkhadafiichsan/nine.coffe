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
            <h3 class="box-title">Tambah Akun</h3>
          </div>

          <form role="form" action="<?php echo base_url() . "index.php/welcome/add_login" ?>" method="POST">
            <div class="box-body">

              <div class="form-group">
                <label>Nama Pegawai</label>
                <select class="form-control" name="id_pegawai" id="id_pegawai">
                  <option value="">- - -Select- - -</option>
                  <?php
                  foreach ($pegawai as $p) {
                    $sel = "";
                    if (isset($_GET['id_pegawai'])) {
                      $sel = ($_GET['id_pegawai'] == $p['id_pegawai']) ? "selected" : "";
                    }
                    echo "<option value='" . $p['id_pegawai'] . "' $sel>$p[nama]</option>";
                  }
                  ?>
                </select>
              </div>

              <div class="form-group">
                <label>Nama Kecamatan</label>
                <select name="kecamatan" class="form-control select2" style="width: 100%;" readonly>
                  <?php
                  $kebaman = "";
                  $kerajan = "";
                  $wagud = "";
                  $jambean = "";
                  $kopen = "";
                  $klinitan = "";
                  if (isset($_GET['id_pegawai'])) {
                    $get = $this->Crud_padi->pegawaiku('*', '', "WHERE id_pegawai='$_GET[id_pegawai]'")[0];
                    $kebaman = ($get['kecamatan'] == "kebaman") ? "selected" : "";
                    $kerajan = ($get['kecamatan'] == "kerajan") ? "selected" : "";
                    $wagud = ($get['kecamatan'] == "wagud") ? "selected" : "";
                    $jambean = ($get['kecamatan'] == "jambean") ? "selected" : "";
                    $kopen = ($get['kecamatan'] == "kopen") ? "selected" : "";
                    $klinitan = ($get['kecamatan'] == "klinitan") ? "selected" : "";
                  }
                  ?>
                  <option value="kebaman" <?php echo $kebaman ?>>kebaman</option>
                  <option value="kerajan" <?php echo $kerajan ?>>kerajan</option>
                  <option value="wagud" <?php echo $wagud ?>>wagud</option>
                  <option value="jambean" <?php echo $jambean ?>>jambean</option>
                  <option value="kopen" <?php echo $kopen ?>>kopen</option>
                  <option value="klinitan" <?php echo $klinitan ?>>klinitan</option>
                </select>
              </div>
              <div class="form-group">
                <label>Username</label>
                <input type="email" class="form-control" name="username" placeholder="Username">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="Password" class="form-control" name="password" placeholder="Password">
              </div>

              <div class="form-group">
                <label>Level</label>
                <select name="level" class="form-control select2" readonly style="width: 100%;">
                  <option value="user">user</option>
              </div>
              </select>

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



        <input type="submit" value="Add" class="btn btn-primary">
        <input type="reset" value="Clear" class="btn btn-primary">
      </div>
    </div>
</div>
</div>


</div>

</div>