<div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">

        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">

                <img src="<?= base_url('assets/images/logo_nine.png'); ?>" class="d-block w-100" alt="..." height="950" width="500">


                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>



            <!-- ================ news section start ================= -->
            <section class="section-margin">
                <div class="container">
                    <div class="row">
                        <?php foreach ($berita as $brt) : ?>
                            <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
                                <div class="card card-news">
                                    <div class="card-news__img">
                                        <img class="card-img" src="<?php echo base_url('assets/images/') . $brt->foto; ?>" alt="" width="450" height="350">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-news__title"><?= $brt->judul ?></a></h4>
                                        <ul class="card-news__info">
                                            <li><a href="#"><span class="news-icon"><i class="ti-notepad"></i></span> <?= $brt->tanggal ?></a></li>
                                            <li><a href="#"><span class="news-icon"><i class="ti-comment"></i></span> Penulis: Admin</a></li>
                                        </ul>
                                        <p><?php echo substr($brt->deskripsi, 0, 50) ?>...</p>
                                        <?php echo anchor('Body/berita/' . $brt->Id, '<div class="btn btn-sm btn-dark"> selengkapnya </div>') ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>



                    </div>
                </div>
            </section>
            <!-- ================ news section end ================= -->