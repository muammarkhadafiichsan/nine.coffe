<div class="content-wrapper">
<br><section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pegawai Kecamatan</h3>
            </div>       
       <br>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>NIP</th>
                  <th>Nama</th>
                  
                  <th>kecamatan</th>
                  <th>edit</th>
                  <th>Hapus</th>
                </tr>
                </thead>
               
               <tbody>
    <tr>
      <?php
      $no = 1;
      foreach ($data as $i) {
        ?>
      
      <td><?php echo $no; ?></td>
      <td><?php echo $i['id_pegawai'];?></td>
      <td><?php echo $i['nama'] ;?></td>
     
      <td><?php echo $i['kecamatan'] ;?></td>
      <td><a href="<?php echo base_url()."index.php/welcome/edit_pegawai/".$i['id_pegawai']; ?>" class="btn btn-block btn-primary">Edit</a></td>
      <td><?php echo "<a href=".base_url()."index.php/welcome/hapus_pegawai/".$i['id_pegawai']." onclick='return confirm(\"Apakah anda yakin ingin menghapusnya ?\")'>"; ?><input type="submit" value="hapus" class="btn btn-block btn-danger"></a></td>
      
    </tr>
    <?php $no++; }?>
  </tbody>
               
              </table>
            </div></div></div></div>
   