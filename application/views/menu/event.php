            <div class="main-content">

                <!--  begin portfolio section  -->
                <section class="bg-light-gray">
                    <div class="container">

                        <div class="headline text-center">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">

                                    <h3 class="section-sub-title">
                                        Event - event Nine Coffee
                                    </h3> <!-- /.section-sub-title -->
                                </div>
                            </div>
                        </div> <!-- /.headline -->

                        <?php foreach ($event as $evn) : ?>
                            <div class="portfolio-item-list">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="portfolio-item">
                                            <div class="item-image">
                                                <a href="#">
                                                    <img src="<?php echo base_url('assets/images/') . $evn->foto; ?>" class="img-responsive center-block" alt="">
                                                    <div><span><i class=""></i></span></div>
                                                </a>
                                            </div>

                                            <div class="item-description">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <span class="item-name">
                                                            <?= $evn->tanggal ?>
                                                        </span>
                                                        <span>
                                                            <?= $evn->nama_event ?>
                                                        </span>
                                                        <p><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Baca Selengkapnya</a></p>
                                                    </div>

                                                </div>
                                            </div> <!-- end of /.item-description -->
                                        </div> <!-- end of /.portfolio-item -->
                                    </div>
                                <?php endforeach; ?>




                                </div>
                            </div>

                    </div>

                </section>
                <!--   end of portfolio section  -->

                1
                <!-- end of /.main-content -->