<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Kependudukan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form role="form" action="<?php echo base_url()."index.php/welcome/kopi" ?>" method="POST">
              <div class="box-body">
              <div class="col-md-6">
                <div class="form-group">
                  <?php 
                    $kecamatan = $this->Crud_padi->getKecamatan($_SESSION['id_pegawai']);
                  ?>
                  <label>Kecamatan</label>
                  <input type="text" class="form-control" name="kecamatan" placeholder="Nama kecamatan" value="<?php echo $kecamatan[0]['kecamatan'] ?>" required readonly="true">
                </div>
                  <div class="form-group">
                  <label>Luas Area/Ha</label>
                  <input type="number" class="form-control" name="luas_area1" placeholder="Luas Menanam" required>
                </div>
                <div class="form-group">
                  <label>Jumlah Produktifitas kopi Arabika</label>
                  <input type="number" id="jmlhib" class="form-control" name="kopi_arabika" placeholder="kopi_arabika" required>
                </div>
                 <div class="form-group">
                  <label>TR (Tanaman Rusak)</label>
                  <input type="number" class="form-control" name="tr1" placeholder="Tanaman Rusak" required>
                </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                  <label>Luas Area/Ha</label>
                  <input type="text" class="form-control" name="luas_area2" placeholder="Luas Menanam" required>
                </div>
                 <div class="form-group">
                  <label>Kopi Robusta</label>
                  <input type="number" id="jmlin" class="form-control" name="kopi_robusta" placeholder="Kopi Mantap" required>
                </div>
                 <div class="form-group">
                  <label>TR (Tanaman Rusak)</label>
                  <input type="number" class="form-control" name="tr2" placeholder="Tanaman Rusak" required>
                </div>
                <div class="form-group">
                  <label>Total Jumlah Produktifitas(Ton)</label>
                  <input type="number" id="ttl" class="form-control" name="total" placeholder="Total Keseluruhan" readonly="true" required>
              <!-- /.box-body -->
</div>
</div>
</div>
              <div class="box-footer">
                <input type="submit" class="btn btn-primary">
                <p><font color="red">Data yang terkirim tidak bisa di Edit kembali</p>
              </div>
            </form>
          </div>
          <!-- /.box -->
