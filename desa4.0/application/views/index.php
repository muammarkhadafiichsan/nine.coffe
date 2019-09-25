<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Usaha dan Produk</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form role="form" action="<?php echo base_url()."index.php/welcome/padi" ?>" method="POST">
              <div class="box-body">
              <div class="col-md-6">
               
                <div class="form-group">
                  <label></label>
                   <?php 
                    $kecamatan = $this->Crud_padi->getKecamatan($_SESSION['id_pegawai']);
                  ?>
                  <label>Kecamatan</label>
                  <input type="text" class="form-control" name="kecamatan" placeholder="Nama kecamatan" value="<?php echo $kecamatan[0]['kecamatan'] ?>" required readonly="true">
                </div>
                <div class="form-group">
                  <label>Jumlah Tanam/H</label>
                  <input type="text" class="form-control" name="jumlah_tanam1" placeholder="Jumlah Menanam Padi Hibrida" required>
                </div>
                <div class="form-group">
                  <label>Jumlah Padi Hibrida /ton</label>
                  <input type="number" class="form-control" id="jmlhib" name="padi_hibrida" placeholder="Padi Hibrida /ton" required>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label>Jumlah Tanam/H</label>
                  <input type="text" class="form-control" name="jumlah_tanam2" placeholder="Jumlah Tanam/H" required>
                </div>
                  <div class="form-group">
                  <label>Jumlah Padi Inbrida /ton</label>
                  <input type="number" class="form-control" id="jmlin" name="padi_inbrida" placeholder="Padi Inbrida /ton" required>
                </div>
                <div class="form-group">
                  <label>Total Keseluruhan Panen</label>
                  <input type="number" class="form-control" id="ttl" name="total" placeholder="Total Keseluruhan" readonly="true" required>
              <!-- /.box-body -->
</div>
                  <div class="form-group">
                  <label>   Puso/Kerusakan /H</label>
                  <input type="number" class="form-control" name="kerusakan" placeholder="Jumlah Kerusakan/H" required>
</div>
</div>
              
                <input type="submit" class="btn btn-primary">
              </div><br>
              <div class="callout callout-danger">
          <h4>Perhatian!</h4>

          <p>Jika Data terkirim maka tidak dapat dirubah kembali, harap cek kembali data tersebut!</p>
            </form>
          </div>
          <!-- /.box -->
