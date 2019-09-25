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
                  <th>kecamatan</th>
                  <th>Luas Area</th>
                  <th>Kopi Arabika</th>
                  <th>tr</th>
                  <th>luas area</th>
                  <th>kopi robusta</th>
                  <th>tr</th>
                  <th>Total Keseluruhan</th>
                
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
    
      
    </tr>
    <?php $no++; }?>
  </tbody>
               
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
   