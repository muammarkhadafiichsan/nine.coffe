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
                <?php foreach ($profile3 as $prf3) : ?>
                    <form action="<?= base_url() . 'Admin/Profile3/update' ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="Id" value="<?php echo $prf3->Id ?>">
                        <h4 class="card-title">Inputkan Berita</h4>

                        <p class="card-description"></p>
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" name="judul" class="form-control" value="<?= $prf3->judul ?>">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea type="text" name="deskripsi" class="form-control" value="<?= $prf3->deskripsi ?>"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>

                    </form>
                <?php endforeach; ?>

            </div>

        </div>
    </div>