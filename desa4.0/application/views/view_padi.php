<div class="content-wrapper">
<br><section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Data Padi Terkirim</h3>

        <a href="<?php echo base_url(). "index.php/welcome/export_padi" ?>"><button type="button" class="pull-right btn btn-success">Export
                <i class="fa fa-file-excel-o"></i></button></a>
           
            </div>       
         
      
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>kecamatan</th>
                  
                  <th>Jumlah Tanam/H</th>
                  <th>Padi Hibrida/Ton</th>
                  <th>Jumlah Tanam/H</th>
                  <th>Padi Inbrida</th>
                  <th>Total Panen Keseluruhan</th>
                  <th>Jumlah Kerusakan/H</th>
                  
                </tr>
                </thead>
               
               <tbody>
    <tr>
      <?php
      $no = 1;
      foreach ($data as $i) {
        ?>
      
      <td><?php echo $no; ?></td>
      <td><?php echo $i['kecamatan'];?></td>
      <td><?php echo $i['jumlah_tanam1'];?></td>
      <td><?php echo $i['padi_hibrida'] ;?></td>
      <td><?php echo $i['jumlah_tanam2'];?></td>
      <td><?php echo $i['padi_inbrida'] ;?></td>
      <td><?php echo $i['total'] ;?></td>
      <td><?php echo $i['kerusakan'];?></td>
    <!-- <td><a href="<?php echo base_url()."index.php/welcome/edit_padi/".$i['id_padi']; ?>" class="btn btn-block btn-primary">Edit</a></td>
      <td><?php echo "<a href=".base_url()."index.php/welcome/hapusId/".$i['id_padi']." onclick='return confirm(\"Apakah anda yakin ingin menghapusnya ?\")'>"; ?><input type="submit" value="Hapus" class="btn btn-danger"></a></td>
      -->
    </tr>
    <?php $no++; }?>
  </tbody>
               
              </table>
            </div>
          </div>
        </div>
      </div></section></div>
    </section>
   