  <section class="bg-light-gray">
      <div class="container">

          <div class="headline text-center">
              <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                      <h2 class="section-title">event - event yang diikuti Nine Coffee</h2>
                      <p class="section-sub-title">
                          info - info event terbaru dan yang sudah diikuti nine - coffee
                      </p> <!-- /.section-sub-title -->
                  </div>
              </div>
          </div> <!-- /.headline -->

          <div class="portfolio-item-list">
              <div class="row">
                  <?php foreach ($event as $evn) : ?>
                      <div class="col-md-4 col-sm-6">
                          <div class="portfolio-item">
                              <div class="item-image">
                                  <a href="#">
                                      <img src="<?php echo base_url('assets/images/') . $evn->foto; ?>" class="img-responsive center-block" alt="portfolio1" width="750" height="700">
                                      <div><span><i class="fa fa-plus"></i></span></div>
                                  </a>
                              </div>

                              <div class="item-description">
                                  <div class="row">
                                      <div class="col-xs-6">
                                          <span class="item-name">
                                              <?php echo substr($evn->nama_event, 0, 35) ?>....
                                          </span>
                                          <span>
                                              <?php echo substr($evn->deskripsi, 0, 50) ?>...
                                          </span>
                                          <?php echo anchor('Menu_event/event/' . $evn->Id, '<div class="btn btn-sm btn-gold"> selengkapnya </div>') ?>
                                      </div>

                                  </div>
                              </div> <!-- end of /.item-description -->
                          </div> <!-- end of /.portfolio-item -->
                      </div>
                  <?php endforeach; ?>






              </div>
  </section>
  <!--   end of portfolio section  -->