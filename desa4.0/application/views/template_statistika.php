  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

<section class="content">
<div class="row">
        <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-white">
              <div class="widget-user-image">
                <img class="img-circle" src="<?php echo base_url().  "assets/template/front/Serenity/assets/img/desa.png"; ?>"  alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username"> DESA 4.0 </h3>
              <h5 class="widget-user-desc">Selamat Datang Admin</h5>
            </div>
            
          </div>
          <!-- /.widget-user -->
        </div>
    <!-- Main content -->
<section class="content"> 
     <!-- Small boxes (Stat box) -->
       <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="<?php echo base_url()."index.php/welcome/padiku" ?>"><div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-file-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Data</span>
              
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
         <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="<?php echo base_url()."index.php/welcome/kopiku" ?>"><div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-folder"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Data 2</span>
              
            </div>
            <!-- /.info-box-content -->
          </div></div> </a>
        <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>


            <div class="info-box-content">

              <span class="info-box-text">Total Users</span><br>
              <span class="info-box-number"><?php echo count($hitung); ?></span>
                          
            </div>
            
            </div>
          </div>  <!-- /.info-box -->
        </div>

        <!-- /.col -->
</div>  </div>

        <!-- fix for small devices only -->
        
     <!-- /.row -->
      <!-- Main row -->
 <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Statistik Data pertahun</h3>

              <div class="box-tools pull-right">
                
                <div class="btn-group">
                  
                  
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <strong>Tahun: 7 Juli, 2018 - 8 Agustus, 2019</strong>
                  </p>

                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="salesChart" style="height: 180px;"></canvas>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <p class="text-center">
                    <strong>Data Masuk</strong>
                  </p>

                  <div class="progress-group">
                    <span class="progress-text">Data 1</span>
                    <span class="progress-number"><b>0</b>/100%</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-aqua" style="width: 5%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Data 2</span>
                    <span class="progress-number"><b>0</b>/100%</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-aqua" style="width: 5%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                 

                   
                  <!-- /.progress-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
                    <!-- /.box (chat box) -->

           <div class="box-footer">
              <div class="row">
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    
                    <h5 class="description-header"><?php echo $kopi[0]['total_kopi']; ?></h5>
                    <span class="description-text">Total Keseluruhan Data 1</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    
                    <h5 class="description-header"><?php echo $hasil[0]['total']; ?></h5>
                    <span class="description-text">Total Keseluruhan Data 2</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                    <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <!-- right col -->
      
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
