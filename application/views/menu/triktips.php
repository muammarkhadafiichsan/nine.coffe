            <div class="main-content">

                <!--  begin portfolio section  -->
                <section class="bg-light-gray">
                    <div class="container">

                        <div class="headline text-center">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <h2 class="section-title"> Tips & Trik dari Nine Coffee</h2>
                                    <p class="section-sub-title">
                                        tips & trik seputar kopi persembahan dari nine coffee
                                    </p> <!-- /.section-sub-title -->
                                </div>
                            </div>
                        </div> <!-- /.headline -->

                        <div class="portfolio-item-list">
                            <div class="row">
                                <?php foreach ($tips_trik as $tt) : ?>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="portfolio-item">
                                            <div class="item-image">
                                                <a href="#">
                                                    <img src="<?php echo base_url('assets/images/') . $tt->foto; ?>" class="img-responsive center-block" alt="portfolio1">
                                                    <div><span><i class=""></i></span></div>
                                                </a>
                                            </div>

                                            <div class="item-description">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <span class="item-name">
                                                            <?php echo substr($tt->judul, 0, 35) ?>....
                                                        </span>
                                                        <ul class="card-news__info">
                                                            <li><a href="#"><span class="news-icon"><i class="ti-notepad"></i></span> <?= $tt->tanggal ?></a></li>
                                                            <li><a href="#"><span class="news-icon"><i class="ti-comment"></i></span> <?= $tt->sumber ?></a></li>
                                                        </ul>
                                                        <span>
                                                            <?php echo substr($tt->deskripsi, 0, 25) ?>...
                                                        </span>

                                                        <?php echo anchor('Menu_triktips/tips_trik/' . $tt->Id, '<div class="btn btn-sm btn-gold"> selengkapnya </div>') ?>
                                                    </div>

                                                </div>
                                            </div> <!-- end of /.item-description -->
                                        </div> <!-- end of /.portfolio-item -->
                                    </div>
                                <?php endforeach; ?>




                            </div> <!-- end of /.item-description -->
                        </div> <!-- end of /.portfolio-item -->
                    </div>

            </div>
            </div> <!-- end of portfolio-item-list -->

            </div>
            </section>
            <!--   end of portfolio section  -->

            </div> <!-- end of /.main-content -->