<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Terkirim</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                       <th>Kecamatan</th>
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
    
      
    </tr>
    <?php $no++; }?>
  </tbody>
               
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
   