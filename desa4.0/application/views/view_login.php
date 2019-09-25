<div class="content-wrapper">
<br>    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Akun
       
      </h1>
      <hr/>
       <ol class="breadcrumb">
        
        <a href="<?php echo base_url(). "index.php/welcome/form_add_login" ?>"><input type="submit" value="Tambah" class="btn btn-primary"></a>
      </ol>
      
    </section>  

<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Akun Kecamatan</h3>
              
            </div>  

       
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID pegawai</th>
                  <th>Nama Kecamatan</th>
                  <th>Username</th>
                  <th>level</th>
                   <th>Opsi</th>
                </tr>
                </thead>
               
               <tbody>
    <tr>
      <?php
      $no = 1;
      foreach ($data as $i) {
        ?>
      
      <td><?php echo $no; ?></td>
      <td><?php echo $i['id_pegawai']; ?>
      <td><?php echo $i['kecamatan'] ;?></td>
      <td><?php echo $i['username'] ;?></td>
      <td><?php echo $i['level'] ;?></td>
      
      <td><?php echo "<a href=".base_url()."index.php/welcome/hapus_login/".$i['id']." onclick='return confirm(\"Apakah anda yakin ingin menghapusnya ?\")'>"; ?><input type="submit" value="Hapus" class="btn btn-danger"></a></td>
      
    </tr>
    <?php $no++; }?>
  </tbody>
               
              </table>
            </div>
   