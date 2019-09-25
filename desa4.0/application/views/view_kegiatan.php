<div class="content-wrapper">
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Kegiatan DESA 4.0</h3>
              <hr/>
       <ol class="breadcrumb">
        
        <a class="btn btn-primary" href="<?php echo base_url(). "index.php/welcome/form_Kegiatan" ?>">Tambah <i class="fa fa-plus-circle"></i></button></a></a>
      </ol>
            </div>       
       
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Gambar</th>
                  <th>Tanggal</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Edit</th>
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
      <td><img src="<?php echo base_url()."assets/".$i['foto'] ;?>" height="75px" width="150px"></td> 
      <td><?php echo $i['tanggal'] ;?></td>
      <td><?php echo $i['judul'];?></td>
      
      
      <td><?php echo $i['deskripsi'] ;?></td>
      <td><a href="<?php echo base_url()."index.php/welcome/edit_artikel/".$i['id']; ?>" class="btn btn-block btn-primary">Edit</a></td>
      <td><?php echo "<a href=".base_url()."welcome/hapus_kegiatan/".$i['id']." onclick='return confirm(\"Apakah anda yakin ingin menghapusnya ?\")'>"; ?><input type="submit" value="Hapus" class="btn btn-danger"></a></td>
      
    </tr>
    <?php $no++; }?>
  </tbody>
               
              </table>
            </div>
   