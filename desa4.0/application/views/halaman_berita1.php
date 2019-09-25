<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>DESA 4.0</title>
  <link rel="shortcut icon" type="text/css" href="<?php echo base_url(). "favicon.ico"; ?>"
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
  <link rel="shortcut icon" type="text/css" href="<?php echo base_url() . "assets/template/front/Serenity/assets/img/logo_bwi.png"; ?>" <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                  <a href="<?php echo base_url()."index.php/welcome/index"; ?>">Beranda</a>
                </li>
                <li>
                  <a href="<?php echo base_url()."Welcome/halaman_program"; ?>">Kegiatan</a>
                </li>
                <li>
                  <a href="<?php echo base_url()."Welcome/tentang"; ?>">Berita</a>
                </li>
                <li>
                  <a href="<?php echo base_url()."index.php/welcome/berita"; ?>">Profil</a>     
                </li>
                <li>
                  <a href="<?php echo base_url()."index.php/welcome/usaha_produk"; ?>">Usaha dan Produk</a>
                </li>
                
                <li>
                  <a href="<?php echo base_url()."index.php/welcome/login"; ?>">Masuk</a>
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
              <h3>Berita Ter-Update Tentang Desa 4.0</h3>
              <p>
                Informasi - Informasi Terbaru Seputar Desa 4.0
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
            <li><a href="<?php echo base_url()."index.php/Welcome/beranda"; ?>">Home</a><span class="divider">/</span></li>
            <li class="active">Berita</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span8">
          <!-- start article full post -->
          <article class="blog-post">
            <div class="post-heading">
              <h3><a href="#"><?php echo $data['judul']; ?></a></h3>
            </div>
            <div class="clearfix">
            </div>
            <img src="assets/img/dummies/blog1.jpg" alt="" />
            <ul class="post-meta">
              <li class="first"><i class="icon-calendar"></i><span><?php echo $data['tanggal']; ?></span></li>
              
              <li class="last"><i class="icon-tags"></i><span><a href="#"><?php echo $data['nama_pengirim']; ?></a></span><li> <a href="#">Berita</a></span></li>
            </ul>
            <div class="clearfix">
            </div>
            <p>
            </p>
            <blockquote>
              <p>
                <img src="<?php echo base_url()."assets/".$data['foto'] ;?>" height="750px" width="850px">
              </p>
            </blockquote>
            <p>
              <?php echo $data['deskripsi']; ?>
            </p>
          </article>
          <!-- end article full post -->
          <h4>Komentar</h4>
          <ul class="media-list">
            <li class="media">
              <a class="pull-left" href="#">
				<img class="media-object" src="assets/img/small-avatar.png" alt="" />
				</a>
              <div class="media-body">
                <h5 class="media-heading"><a href="#">Khadafi</a></h5>
                <span>3 September 2019</span>
                <p>
                  Sangat bagus beritanya dan sangat membantu untuk mengatahui proses pemilihan kepala desa
                </p>
                <a href="#">Balas</a>
          </ul>
          <div class="comment-post">
            <h4>Komentar</h4>
            <form action="#" method="post" class="comment-form" name="comment-form">
              <div class="row">
                <div class="span3">
                  <label>Name <span>*</span></label>
                  <input type="text" class="input-block-level" placeholder="Nama" />
                </div>
                <div class="span3">
                  <label>Email <span>*</span></label>
                  <input type="text" class="input-block-level" placeholder="Email" />
                </div>
                <div class="span6">
                  <label>URL</label>
                  <input type="text" class="input-block-level" placeholder="Url website" />
                </div>
                <div class="span8">
                  <label>Komentar<span>*</span></label>
                  <textarea rows="9" class="input-block-level" placeholder="Komentar"></textarea>
                  <button class="btn btn-small btn-success" type="submit">Kirim</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="span4">
          <aside>
            <div class="widget">
              <form class="form-search">
                <input placeholder="" type="text" class="input-medium search-query">
                <button type="submit" class="btn btn-flat btn-color">Cari</button>
              </form>
            </div>
            
            <div class="widget">
              <h4>Kiriman Terbaru</h4>
              <ul class="recent-posts">
                <li><a href="#"><?php echo $data['judul']; ?></a>
                  <div class="clear">
                  </div>
                  <span class="date"><i class="icon-calendar"></i> <?php echo $data['tanggal']; ?> </span>
                  <span class="comment"><i class="icon-comment"></i> 4 Komentar</span>
                </li>
                
              </ul>
            </div>
            <div class="widget">
              <h4>Tags</h4>
              <ul class="tags">
                <li><a href="#" class="btn"></a></li>
                <li><a href="#" class="btn"></a></li>
                <li><a href="#" class="btn"></a></li>
                <li><a href="#" class="btn"></a></li>
                <li><a href="#" class="btn"></a></li>
              </ul>
            </div>
          </aside>
        </div>
      </div>
    </div>
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
              <li><a href="#"> Tentang Desa 4.0 </a></li>
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
                Selasa  08.00–16.00 </br>
                Rabu  08.00–16.00 </br> 
                Kamis 08.00–16.00 </br> 
                Jumat 08.00–16.00 </br>
                Sabtu Tutup </br>
                Minggu  Tutup </br>
              </p>  
          </div>
        </div>
        <div class="span4">
          <div class="widget">
            <!-- logo -->
            <a class="brand logo" href="index.html">
              <img src="assets/img/logo-dark.png" alt="">
            </a>
            <!-- end logo -->
            <address>
              <strong>Alamat</strong><br>
               Jalan Raya Srono - Pekulo Nomor 089<br>
               Jawa Timur<br>
              <p title="Phone">TELP: 0333 - 3910227</p>
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
  <script src="<?php echo base_url(); ?>assets/template/front/assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/front/assets/js/jquery.easing.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/front/assets/js/google-code-prettify/prettify.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/front/assets/js/modernizr.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/front/assets/js/bootstrap.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/front/assets/js/jquery.elastislide.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/front/assets/js/sequence/sequence.jquery-min.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/front/assets/js/sequence/setting.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/front/assets/js/jquery.prettyPhoto.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/front/assets/js/application.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/front/assets/js/jquery.flexslider.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/front/assets/js/hover/jquery-hover-effect.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/front/assets/js/hover/setting.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="<?php echo base_url(); ?>assets/template/front/assets/js/custom.js"></script>


</body>

</html>
