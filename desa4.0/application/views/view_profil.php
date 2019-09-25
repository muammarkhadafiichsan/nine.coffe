<div class="content-wrapper">
<br>    <!-- Content Header (Page header) -->
    <section class="content">
<div class="box-footer">
              <div class="clear">
     <center> <h2>DATA PETUGAS</h2> </center>
<br>
      <div class="row">
        <div class="col-md-5">
          <!-- Widget: user widget style 1 -->
          
        <!-- /.col -->
        
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-green-active">
             
             
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="<?php echo base_url()."assets/".$data['foto']; ?>" height="200px" width="50px" alt="User Avatar">
            </div><Center>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-12 border-right">
                   <h2><?php echo $data ['nama'] ?></h2>
           <h3 class="widget-user-username"><input  style="text-align: center" type="text" disabled name="id_pegawai" value="<?php echo $data['id_pegawai']; ?>"></h3>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
    </center>
        <!-- /.col -->
     
      <!-- /.row -->

      
        <div class="col-md-7">
          <!-- Box Comment -->
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Data Petugas</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                
                <tr>
                  
                  <th>NAMA LENGKAP</th>
                  <th>TELEPON</th>
                </tr>
                <tr>
                  <td><?php echo $data ['nama'] ?></td>
                  <td><?php echo $data ['telepon'] ?></td>
               </tr>
         <tr>
                  
                  <th>NIP/NIK</th>
          <th>ALAMAT</th>
               </tr> 
        <tr>
                  <td><?php echo $data['id_pegawai']; ?></td>
                  <td><?php echo $data['alamat'];?></td>
               </tr>
         <tr>
                  
                  <th>JENIS KELAMIN</th>
          <th>KECAMATAN</th>
               </tr> 
        <tr>
                  <td><?php echo $data['jenis_kelamin'];?></td>
                  <td><?php echo $data['kecamatan'];?></td>
               </tr>
         <tr>
                  
                  <th>TANGGAL LAHIR</th>
               </tr> 
        <tr>
                  
                  <td><?php echo $data['tanggal_lahir'];?></td>
               </tr>
                <tr>

                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <div class="box-footer">
              <div class="clear">
<a style="float: right;" class="btn btn-success" href="<?php echo base_url(). "welcome/pegawaiku" ?>">BACK <i class="fa fa-arrow-right"></i></button></a></a>
</div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>