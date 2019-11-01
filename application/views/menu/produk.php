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




          <div class="norow">
            <?php foreach ($produk as $pro) : ?>
              <div class="masonry_wrapper" data-scroll-reveal="enter from the bottom after 0.5s">
                <div class="item entry item-h2 ">
                  <img src="<?php echo base_url('assets/images/') . $pro->foto; ?>" alt="" class="img-responsive">
                  <div class="hovereffect">
                    <a data-gal="prettyPhoto[product-gallery]" rel="bookmark" href="#"></i></span></a>
                    <div class="buttons">
                      <h5><?= $pro->nama_produk ?></h5>
                      <h4><?php echo substr($pro->deskripsi, 0, 50) ?>...</h4>
                    </div><!-- end buttons -->
                  </div><!-- end hovereffect -->
                </div>
              </div>
              <button type="button" class="btn btn-dark btn-lg" data-toggle="modal" data-target="#exampleModalLong">Buka Modal</button>
            <?php endforeach; ?>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">

                  </div>
                </div>
              </div>
            </div>





      </section><!-- end work -->