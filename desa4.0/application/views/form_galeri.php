<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    
<section class="content">
<div class="row">
        <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-grey">
              <div class="widget-user-image">
                <img class="img-circle" src="<?php echo base_url().  "assets/bondowoso.png" ; ?>"  height="100%" width="200px" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Dinas Pertanian Bondowoso</h3>
              <h4 class="widget-user-desc">Update Berita</h4>
            </div>
            
          </div>
          <!-- /.widget-user -->
        </div>
 <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Add Artikel</h3>
            </div><br>
      
<form role="form" action="<?php echo base_url()."index.php/welcome/add_galeri" ?>" method="POST" enctype="multipart/form-data">
 <div class="box-body">
                <div class="col-md-6">
  <div class="form-group">
                  <label>Photos 1</label>
                  <input type="file" name="foto1" class="form-control"></div>
                <div class="form-group"><label>Photos 2</label>
                  <input type="file" name="foto2" class="form-control"></div></div>
               <div class="col-md-6"><div class="form-group">
                <label>Photos 3</label>
                  <input type="file" name="foto3" class="form-control"></div>
                  <div class="form-group">
                <label>Photos 4</label>
                  <input type="file" name="foto4" class="form-control"></div></div>
<div class="box-footer">
              <div class="clear">
                <div class="pull-right"><br/>
<input type="submit" value="Upload" class="btn btn-primary">
                <input type="reset" value="Batal" class="btn btn-primary">


