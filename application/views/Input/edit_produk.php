<!-- partial -->

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row purchace-popup">
            <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary">

                </div>
            </div>
        </div>

    </div>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <?php foreach ($event as $evn) : ?>
                    <form action="<?= base_url() . 'Admin/Produk/update' ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="Id" value="<?php echo $pro->Id ?>">
                        <h4 class="card-title">Inputkan Berita</h4>

                        <p class="card-description"></p>
                        <div class="form-group">
                            <label>Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" value="<?= $pro->nama_produk ?>">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" value="<?= $pro->deskripsi ?>">
                        </div>
                        <div class="form-group">
                            <label>Sejarah</label>
                            <input type="date" name="sejarah" class="form-control" value="<?= $pro->tanggal ?>">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>

                    </form>
                <?php endforeach; ?>

            </div>

        </div>
    </div>