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
      <!--/ PORTFOLIO SECTION -->
      <section id="works" class="dark-wrapper">
        <div class="container">
          <div class="title text-center">
            <h2>Our Best Product</h2>
            <p>Bondowoso Coffee</p>
            <hr>
          </div><!-- end title -->

          <div class="text-center clearfix">
            <nav class="portfolio-filter">
              <ul>
                <li><a class="btn btn-primary" href="#" data-filter="*"><span></span>SIGNATURE NINE COFFEE</a></li>

              </ul>
            </nav>
          </div>




          <?php foreach ($produk as $pro) : ?>
            <div class="norow">
              <div class="masonry_wrapper" data-scroll-reveal="enter from the bottom after 0.5s">
                <div class="item entry item-h2 ">
                  <img src="<?php echo base_url('assets/images/') . $pro->foto; ?>" alt="" class="img-responsive">
                  <div class="hovereffect">
                    <a data-gal="prettyPhoto[product-gallery]" rel="bookmark" href="#"></i></span></a>
                    <div class="buttons">
                      <h5><?= $pro->nama_produk ?></h5>
                      <h4><?= $pro->deskripsi ?></h4>
                    </div><!-- end buttons -->
                  </div><!-- end hovereffect -->
                </div>
              <?php endforeach; ?>





      </section><!-- end work -->