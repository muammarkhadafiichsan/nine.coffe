<div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">

        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">

                <img src="<?= base_url('assets/images/logo_nine.png'); ?>" class="d-block w-100" alt="...">

                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>

            <section class="ftco-section">

                <div class="container">

                    <div class="row d-flex">
                        <?php foreach ($berita as $brt) : ?>

                            <div class="col-md-4 d-flex ftco-animate">
                                <div class="blog-entry align-self-stretch">

                                    <img src="<?php echo base_url('assets/images/') . $brt->foto; ?>" class="block-20">
                                    </a>
                                    <div class="text py-4 d-block">
                                        <div class="meta">
                                            <div><a href="#"> <?= $brt->tanggal ?></a></div>
                                            <div><a href=""></a></div>
                                        </div>
                                        <h3 class="heading mt-2"><a href="#"><?= $brt->judul ?></a></h3>
                                        <p> <?= $brt->deskripsi ?></p>
                                        <p><a href="" class="btn btn-primary btn-outline-primary px-4 py-3">Baca Selengkapnya</a></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

            </section>

            <div class="row mt-5 col text-center">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>