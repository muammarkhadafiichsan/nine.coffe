<!--================Blog Area =================-->
<section class="blog_area single-post-area py-80px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">
                    <?php foreach ($tips_trik as $tt) : ?>
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid " src="<?php echo base_url('assets/images/') . $tt->foto; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">

                                </div>
                                <ul class="blog_meta list">

                                    <li>
                                        <a href="#"> <?= $tt->tanggal ?>
                                            <i class="lnr lnr-calendar-full"></i>
                                        </a>
                                    </li>


                                </ul>
                                <ul class="social-links">
                                    <li>
                                        <a href="#"><?= $tt->sumber ?>
                                            <i class="fa fa-source"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-github"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-behance"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2> <?= $tt->judul ?></h2>
                            <p class="excert">
                                <?= $tt->deskripsi ?>
                            </p>

                        </div>
                    <?php endforeach; ?>



                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->