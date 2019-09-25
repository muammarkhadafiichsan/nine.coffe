<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>DESA 4.0</title>
  <link rel="shortcut icon" type="text/css" href="<?php echo base_url() . "assets/template/front/Serenity/assets/img/logo_bwi.png"; ?>" <link rel="shortcut icon" type="text/css" href="<?php echo base_url() . "favicon.ico"; ?>" <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/template/front/Serenity/assets/css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/template/front/Serenity/assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/template/front/Serenity/assets/css/docs.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/template/front/Serenity/assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/template/front/Serenity/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/template/front/Serenity/assets/css/flexslider.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/template/front/Serenity/assets/css/sequence.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/template/front/Serenity/assets/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/template/front/Serenity/assets/color/default.css" rel="stylesheet">
  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/template/front/Serenity/assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/template/front/Serenity/assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/template/front/Serenity/assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/template/front/Serenity/assets/ico/apple-touch-icon-57-precomposed.png">

  <!-- =======================================================
    Theme Name: Serenity
    Theme URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar">
  <header>
    <!-- Navbar
    ================================================== -->
    <header>
      <!-- Navbar
    ================================================== -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <!-- logo -->
            <a class="brand logo"><img src="<?php echo base_url() .  "assets/template/front/Serenity/assets/img/logo_bwi.png"; ?>"></a>
            <!-- end logo -->
            <!-- top menu -->
            <div class="navigation">
              <nav>
                <ul class="nav topnav">
                  <li>
                    <a href="<?php echo base_url() . "index.php/Welcome/index"; ?>">Beranda</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url() . "Welcome/halaman_program"; ?>">Kegiatan</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url() . "welcome/berita"; ?>">Berita</a>
                  </li>

                  <li>
                    <a href="<?php echo base_url() . "Welcome/tentang"; ?>"> Profil </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url() . "welcome/usaha_produk"; ?>"> Usaha dan Produk </a>
                  </li>
                  
                  <li>
                    <a href="<?php echo base_url() . "welcome/login"; ?>"> Masuk </a>

                  </li>
                </ul>
              </nav>
            </div>
            <!-- end menu -->
          </div>
        </div>
      </div>
    </header>
    <!-- Subhead
================================================== -->
    <section id="subintro">
      <div class="jumbotron subhead" id="overview">
        <div class="container">
          <div class="row">
            <div class="span12">
              <div class="centered">
                <h3> Kegiatan DESA 4.0 </h3>
                <p>
                  Kegiatan-kegiatan yang akan dilakukan oleh Desa 4.0 tahun 2019
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="breadcrumb">
      <div class="container">
        <div class="row">
          <div class="span12">
            <ul class="breadcrumb notop">
              <li><a href="<?php echo base_url() . "index.php/Welcome/beranda"; ?>">Home</a><span class="divider">/</span></li>
              <li class="active"> Kegiatan </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <ul class="portfolio-area da-thumbs"> <?php
                                                foreach ($data as $i) {

                                                  ?>
              <li class="portfolio-item2" data-id="id-0" data-type="php">
                <div class="span4">
                  <div class="thumbnail">
                    <div class="image-wrapp">
                      <img src="<?php echo base_url() . "assets/" . $i['foto']; ?>" alt="Portfolio name" title="" />
                      <article class="da-animate da-slideFromRight" style="display: block;">
                        <h4><?php echo $i['judul']; ?></h4>
                        </a></span>
                      </article>
                    </div>
                  </div>
                </div>
              </li>

            <?php } ?>

    </section>
    <!-- Footer
 ================================================== -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="widget">
              <h5>Halaman</h5>
              <ul class="regular">
                <li><a href="#"> Tentang DESA 4.0 </a></li>
                <li><a href="#"> Kegiatan </a></li>
                <li><a href="#"> Usaha dan Produk </a></li>
                <li><a href="#"> Informasi </a></li>
              </ul>
            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5>Jam buka</h5>
              <p>
                Senin 08.00–16.00 </br>
                Selasa 08.00–16.00 </br>
                Rabu 08.00–16.00 </br>
                Kamis 08.00–16.00 </br>
                Jumat 08.00–16.00 </br>
                Sabtu Tutup </br>
                Minggu Tutup </br>
              </p>
            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <address>
                <strong>Alamat</strong><br>
                Jalan Raya Srono - Pekulo Nomor 089 <br>
                Jawa Timur <br>
                <p title="Phone">TELP: 0333 - 3910227 </p>
              </address>
            </div>
          </div>
        </div>
      </div>
      <div class="verybottom">
        <div class="container">
          <div class="row">
            <div class="span6">
              <p>
                &copy; DESA 4.0 - All right reserved
              </p>
            </div>
            <div class="span6">
              <div class="credits">
                <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Serenity
              -->
                Designed by <a href="https://bootstrapmade.com/"> DAFATEAM </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- JavaScript Library Files -->
    <script src="<?php echo base_url(); ?>assets/template/front/Serenity/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/front/Serenity/assets/js/jquery.easing.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/front/Serenity/assets/js/google-code-prettify/prettify.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/front/Serenity/assets/js/modernizr.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/front/Serenity/assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/front/Serenity/assets/js/jquery.elastislide.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/front/Serenity/assets/js/sequence/sequence.jquery-min.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/front/Serenity/assets/js/sequence/setting.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/front/Serenity/assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/front/Serenity/assets/js/portfolio/jquery.quicksand.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/front/Serenity/assets/js/portfolio/setting.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/front/Serenity/assets/js/application.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/front/Serenity/assets/js/jquery.flexslider.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/front/Serenity/assets/js/hover/jquery-hover-effect.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/front/Serenity/assets/js/hover/setting.js"></script>

    <!-- Template Custom JavaScript File -->
    <script src="assets/js/custom.js"></script>


</body>

</html>