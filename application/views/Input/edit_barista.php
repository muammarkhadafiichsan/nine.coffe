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
                <?php foreach ($barista as $brs) : ?>
                    <form action="<?= base_url() . 'Admin/Barista/update' ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="Id" value="<?php echo $brs->Id ?>">
                        <h4 class="card-title">Inputkan Berita</h4>

                        <p class="card-description"></p>
                        <div class="form-group">
                            <label>Nama Barista</label>
                            <input type="text" name="nama_barista" class="form-control" value="<?= $brs->nama_barista ?>">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea type="text" name="deskripsi" class="form-control" value="<?= $brs->deskripsi ?>"></textarea>
                        </div>


                        <button type="submit" class="btn btn-primary">Simpan</button>

                    </form>
                <?php endforeach; ?>

            </div>

        </div>
    </div>