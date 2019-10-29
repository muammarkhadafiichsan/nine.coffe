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
        <img src="<?= base_url('assets/images/arabica_1.jpg'); ?>" class="d-block w-100" alt="...">
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

<br>

<div class="row justify-content-center">
  <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
    <h2>Tentang Nine Coffee</h2>
    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
  </div>
</div>
<br>

<div id="colorlib-intro">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 tabulation animate-box">
        <ul class="nav nav-tabs justify-content-center">
          <li class="active"><a data-toggle="tab" href="#plan"><i class=""></i> Planning &amp; Design</a></li>
          <li><a data-toggle="tab" href="#general"><i class=""></i> General Constructing</a></li>
          <li><a data-toggle="tab" href="#manage"><i class=""></i> Construction Management</a></li>
        </ul>
        <div class="tab-content">
          <div id="plan" class="tab-pane fade in active">
            <div class="row">
              <div class="col-md-6">
                <div class="services-img" style="background-image: url(assets6/images/logo_bundar.png);"></div>
              </div>
              <div class="col-md-6">
                <div class="services-desc">
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <ul>
                    <li>It is a paradisematic country in which</li>
                    <li>Even the all-powerful Pointing has no control</li>
                    <li>When she reached the first hills of the Italic Mountains</li>
                    <li>Alphabet Village and the subline of her own road</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div id="general" class="tab-pane fade">
            <div class="row">
              <div class="col-md-6">
                <div class="services-img" style="background-image: url(assets6/images/nine.jpg);"></div>
              </div>
              <div class="col-md-6">
                <div class="services-desc">
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <ul>
                    <li>It is a paradisematic country in which</li>
                    <li>Even the all-powerful Pointing has no control</li>
                    <li>When she reached the first hills of the Italic Mountains</li>
                    <li>Alphabet Village and the subline of her own road</li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
          <div id="manage" class="tab-pane fade">
            <div class="row">
              <div class="col-md-6">
                <div class="services-img" style="background-image: url(assets6/images/building-3.jpg);"></div>
              </div>
              <div class="col-md-6">
                <div class="services-desc">
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <ul>
                    <li>It is a paradisematic country in which</li>
                    <li>Even the all-powerful Pointing has no control</li>
                    <li>When she reached the first hills of the Italic Mountains</li>
                    <li>Alphabet Village and the subline of her own road</li>
                  </ul>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<br>
<div class="row justify-content-center">
  <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
    <h2>Our Awards</h2>
    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
  </div>
</div>
<div class="row ml-2">
  <?php foreach ($awards as $awd) : ?>
    <div class="col-md-3 animate-box">
      <img src="<?php echo base_url('assets/images/') . $awd->foto; ?>" class="staff-img staff-img2">

      <div class="desc-staff ">
        <div><?= $awd->tanggal ?> <a> Penulis: Admin </a></div>

        <h3 class="text-center"><?= $awd->judul ?></h3>
        <span>
          <h5 class="text-center"> <?= $awd->deskripsi ?> </h5>
        </span>
      </div>
      </a>
    </div>
  <?php endforeach; ?>

</div>
</div>
</div>
</body>

<hr>