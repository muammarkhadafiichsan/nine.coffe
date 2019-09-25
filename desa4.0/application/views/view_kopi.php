<div class="content-wrapper"> 
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Data Kopi Terkirim</h3>
<hr/>
       <ol class="breadcrumb">
        <a class="btn btn-primary" href="<?php echo base_url(). "index.php/welcome/export_kopi" ?>">Export <i class="fa fa-file-excel-o"></i></button></a></a>
            </div>       
       </ol>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
              <tr>
                  <th>No</th>
                  <th>kecamatan</th>
                  <th>Luas Area</th>
                  <th>Kopi Arabika</th>
                  <th>tr</th>
                  <th>luas area</th>
                  <th>kopi robusta</th>
                  <th>tr</th>
                  <th>Total Keseluruhan</th>
                  <!--<th>edit</th>
                  <th>hapus</th>-->
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
      <td><?php echo $i['luas_area1'];?></td>
      <td><?php echo $i['kopi_arabika'];?></td>
      <td><?php echo $i['tr1'];?></td>
      <td><?php echo $i['luas_area2'] ;?></td>
      <td><?php echo $i['kopi_robusta'] ;?></td>
      <td><?php echo $i['tr2'];?></td>
      <td><?php echo $i['total'] ;?></td>
      <!--<td><input type="submit" value="Edit" class="btn btn-block btn-primary"></td>
      <td><?php echo "<a href=".base_url()."index.php/welcome/hapusId_kopi/".$i['id_kopi']." onclick='return confirm(\"Apakah anda yakin ingin menghapusnya ?\")'>"; ?><input type="submit" value="hapus" class="btn btn-block btn-danger"></a></td>
      -->
    </tr>
    <?php $no++; }?>
  </tbody>
               
              </table>
            </div></div></div></div>
   