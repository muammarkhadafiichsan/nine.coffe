<div class="content-wrapper">
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Update Data Padi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
<br>
            <form role="form" action="<?php echo base_url()."index.php/welcome/update_padi" ?>" method="POST">
              <div class="box-body">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="hidden" name="id_padi" value="<?php echo $data['id_padi']; ?>">
                  <label>Kecamatan</label>
                  <input type="text" class="form-control" name="kecamatan" placeholder="Nama Kecamatan" value="<?php echo $data['kecamatan']; ?>" required>
                </div>
                <div class="form-group">
                  <label>Jumlah Tanam/H</label>
                  <input type="text" class="form-control" name="jumlah_tanam1" placeholder="Nama Pengirim" value="<?php echo $data['jumlah_tanam1'] ?>"   required>
                </div>
                <div class="form-group">
                  <label> Padi Hibrida /ton</label>
                  <input type="number" class="form-control" name="padi_hibrida" placeholder="Padi Hibrida /ton" value="<?php echo $data['padi_hibrida'] ?>" required>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label>Jumlah Tanam/H</label>
                  <input type="text" class="form-control" name="jumlah_tanam2" placeholder="Jumlah Tanam/H" value="<?php echo $data['jumlah_tanam2'] ?>" required>
                </div>
                  <div class="form-group">
                  <label>   Padi Inbrida /ton</label>
                  <input type="number" class="form-control" name="padi_inbrida" placeholder="Padi Inbrida /ton" value="<?php echo $data['padi_inbrida'] ?>" required>
                </div>
                <div class="form-group">
                  <label>Total Keseluruhan Panen</label>
                  <input type="number" class="form-control" name="total" placeholder="Total Keseluruhan" value="<?php echo $data['total'] ?>" required>
              <!-- /.box-body -->
</div>
                  <div class="form-group">
                  <label>   Puso/Kerusakan /H</label>
                  <input type="number" class="form-control" name="kerusakan" placeholder="Jumlah Kerusakan/H" value="<?php echo $data['kerusakan'] ?>" required>
</div>
</div>
              <div class="box-footer">
                <input type="submit" class="btn btn-primary">
              </div><br>
             
            </form>
          
          <!-- /.box -->
