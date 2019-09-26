<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <img class="image" border="0" src="<?php echo base_url() .  "assets/images/logo_navbar.png"; ?>" width="225px" style=": 1px;padding: 0px color:white;"> </li>

        <a class="navbar-brand" href="index.html"><small></small></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item "><a href="<?= base_url('Auth'); ?>" class="nav-link">BERANDA</a></li>
                <li class="nav-item "><a href="<?= base_url('Menu_produk');
                                                '/index' ?>" class="nav-link">PRODUK</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TOKO</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item " href="<?= base_url('Menu_retail');
                                                        '/index' ?>">RETAIL</a>
                        <a class="dropdown-item " href="<?= base_url('Menu_kafe');
                                                        '/index' ?>">KAFE</a>
                    </div>
                </li>
                <li class="nav-item "><a href="<?= base_url('Menu_berita');
                                                '/index' ?>" class="nav-link">BERITA</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">PATNER</a></li>

            </ul>
        </div>
    </div>
    </div>

</nav>