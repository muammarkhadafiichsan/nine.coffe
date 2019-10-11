<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">

        <img src="<?= base_url('assets/images/logo_nine.png'); ?>" class="d-block w-100" alt="...">

        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= base_url('assets/images/arabica1.jpg'); ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= base_url('assets/images/proses2.jpg'); ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



<section class="ftco-about d-md-flex" style="background-image: url(assets/images/bg_4.jpg);">
  <div class="one-half img "> <img widht="400" height="325" src="<?= base_url('assets/images/logo_nav.png');  ?>"></div>
  <div class="one-half ftco-animate">
    <div class="overlap ">
      <div class="heading-section ftco-animate ">
        <div class="heading-section ftco-animate ">
          <h2 class="mb-4 " href=" <?= base_url('tampilan');
                                    '/profil' ?>">Nine Coffee</h2>
        </div>
        <div>
          <h6> Nine Coffee merupakan perusahaan swasta yang berada di Kabupaten Bondowoso yang bergerak dalam bidang pertanian serta pengolahan tanaman kopi khususnya yang berada di Kabupaten Bondowoso. Selain bekerjasama dengan beberapa pengurus kopi rakyat, Nine Coffee juga memiliki lahan seluas 6 hektar yang berada di kawasan gunung Ijen. Beberapa Produk unggulan Nine Coffe Roastery tidak hanya arabika, namun kopi robusta dan luwak juga tidak kalah pamor.</h5>
            <p><a href="<?= base_url('profil');
                        '/index' ?>" class="btn btn-white btn-outline-white p-2 px-xl-2 py-xl-2 ">Baca Selengkapnya</a></p>
        </div>

      </div>
    </div>
</section>

<hr>

<section class="ftco-section img" id="ftco-testimony" style="background-image: url(assets/images/bg_1.jpg);" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 heading-section text-center ftco-animate">

        <h2 class="mb-4">JAMBI INTERNATIONAL COFFE DAY</h2>
        <video width="450px" height="250px" controls>
          <source src="assets/video/jambi.mp4" type="video/mp4">

        </video>

      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 pr-md-5">
        <div class="heading-section text-md-right ftco-animate">

          <h2 class="mb-4 icon-award">AWARDS</h2>
          <p class="mb-4">Prestasi Nine-Coffe dari berbagai lomba atau festival dalam bidang kopi di Kabupaten Bondowoso yang menjadikan Nine-Coffe sebagai salah satu perusahaan kopi terbaik di Kabupaten Bondowoso. </p>
          <p><a href="<?= base_url('View_achievement');
                      '/index' ?>" class="btn btn-primary btn-outline-primary px-4 py-3">Lihat Selengkapnya</a></p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-6">
            <div class="menu-entry">
              <a href="#" class="img" style="background-image: url(assets/images/juara_satu.jpg);"></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="menu-entry mt-lg-4">
              <a href="#" class="img" style="background-image: url(assets/images/juara_tiga.jpg);"></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="menu-entry">
              <a href="#" class="img" style="background-image: url(assets/images/juara_satu.jpg);"></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="menu-entry mt-lg-4">
              <a href="#" class="img" style="background-image: url(assets/images/juara_tiga.jpg);"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>