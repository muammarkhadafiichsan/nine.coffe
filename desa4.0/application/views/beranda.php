<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">

  <title> Pusat Sistem Informasi Desa 4.0 </title>
  <link rel="shortcut icon" type="text/css" href="<?php echo base_url() . "assets/template/front/Serenity/assets/img/logo_bwi.png"; ?>" <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> DESA 4.0 </title>
  <link rel="shortcut icon" type="text/css" href="<?php echo base_url() . "assets/template/front/Serenity/assets/img/logo_bwi.png"; ?>" <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

<body>
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
  <section id="intro">
    <div class="jumbotron masthead">
      <div class="container">
        <!-- slider navigation -->
        <div class="sequence-nav">
          <div class="prev">
            <span></span>
          </div>
          <div class="next">
            <span></span>
          </div>
        </div>
        <!-- end slider navigation -->
        <div class="row">
          <div class="span12">
            <div id="slider_holder">
              <div id="sequence">
                <ul>
                  <!-- Layer 1 -->
                  <li>
                    <div class="info animate-in">
                      <h2>PARIWISATA</h2>
                      <br>
                      <h3>IJEN BLUE-FIRE</h3>
                      <p>
                        Terletak diantara KAB.BANYUWANGI dan KAB.BONDOWOSO
                      </p>


                    </div>
                    <img class="slider_img animate-in" src=" <?php echo base_url() . "assets/template/front/Serenity/assets/img/slides/sequence/ijen.png"; ?>" alt="">
                  </li>
                  <!-- Layer 2 -->
                  <li>
                    <div class="info">
                      <h2>PARIWISATA</h2>
                      <br>
                      <h3>Pantai BOOM</h3>
                      <p>
                        Terletak di jantung kota Banyuwangi
                      </p>

                    </div>
                    <img class="slider_img" src="<?php echo base_url() . "assets/template/front/Serenity/assets/img/slides/sequence/boom1.jpg"; ?>" alt="">
                  </li>
                  <!-- Layer 3 -->
                  <li>
                    <div class="info">
                      <h2>PARIWISATA</h2>
                      <br>
                      <h3>ALAS-PURWO NATIONAL PARK</h3>
                      <p>
                        Terletak Di KEC.TEGALDLIMO
                      </p>

                    </div>
                    <img class="slider_img" src="<?php echo base_url() . "assets/template/front/Serenity/assets/img/slides/sequence/alas-purwo.jpg"; ?>" alt="">
                  </li>
                </ul>
              </div>
            </div>
            <!-- Sequence Slider::END-->
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span3 features">
          <i class="icon-circled icon-32 icon-suitcase left active"></i>
          <h4>Tentang DESA 4.0</h4>
          <div class="dotted_line">
          </div>
          <p class="left">
            Menurut cerita dari seorang warga yang bernama Mbah Marsijan yang umurnya ± 100 Tahun, penduduk Desa Kebaman Kecamatan Srono. Desa Kebaman dulunya bersasal dari tanah babatan dari beberapa orang yang bernama : 1. Mas Shaleh, 2. Mas Blengur, 3. Mas Baji, 4. Mas Khahar, 5. Mas Katab, asal dari orang buangan ( selongan / daerah Banten ( Jawa Barat ).

            <a href="<?php echo base_url() . "Welcome/tentang"; ?>"> Baca Selengkapnya</a></p>
        </div>
        <div class="span3 features">
          <i class="icon-circled icon-32 icon-plane left"></i>
          <h4>Visi dan Misi</h4>
          <div class="dotted_line">
          </div>
          <p class="left">
            Sebagaimana dimaklumi bahwa “visi” merupakan gambaran masa depan yang dipilih dan hendak diwujudkan pada kurun waktu tertentu.
            <a href="<?php echo base_url() . "Welcome/profil"; ?>">Baca Selengkapnya</a> </p>
        </div>
        <div class="span3 features">
          <i class="icon-circled icon-32 icon-leaf left"></i>
          <h4>Tutorial and Tips</h4>
          <div class="dotted_line">
          </div>
          <p class="left">
            Benih bermutu merupakan salah satu komponen teknologi yang penting untuk meningkatkan produksi dan pendapatan usahatani padi.
            <a href="<?php echo base_url() . "Welcome/tips"; ?>">Baca Selengkapnya</a>
        </div>
        <div class="span3 features">
          <i class="icon-circled icon-32 icon-wrench left"></i>
          <h4>Masuk</h4>
          <div class="dotted_line">
          </div>
          <p class="left">
            Pastikan Username dan password sesuai dengan data terkini yang ada pada web Dinas Pertanian Bondowoso. Isi form dengan data yang benar.
            <a href="<?php echo base_url() . "index.php/welcome/login"; ?>">Baca Selengkapnya</a> </p>
        </div>
      </div>
      <div class="row">
        <div class="span12">
          <div class="tagline centered">
            <div class="row">
              <div class="span12">
                <div class="tagline_text">
                  <h2>PUSAT SISTEM INFORMASI DESA, MARI MEMBANGUN DESA UNTUK KEMAJUAN BERSAMA</h2>
                </div>
              </div>
            </div>
          </div>
  </section>
  <!-- end tagline -->
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
              <p>Telp: 0333 - 3910227 </p>
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
              Designed by <a href="https://bootstrapmade.com/">DAFATEAM</a>
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
  <script src="<?php echo base_url(); ?>assets/template/front/Serenity/assets/js/application.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/front/Serenity/assets/js/jquery.flexslider.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/front/Serenity/assets/js/hover/jquery-hover-effect.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/front/Serenity/assets/js/hover/setting.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="assets/js/custom.js"></script>

</body>

</html>