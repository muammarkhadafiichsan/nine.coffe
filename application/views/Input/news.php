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
                <form action="<?= base_url() . 'Admin/News/tambah_berita' ?>" method="post" enctype="multipart/form-data">
                    <h4 class="card-title">Inputkan Berita</h4>

                    <p class="card-description"></p>
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>foto</label>
                        <input type="file" name="foto" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" name="tanggal" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>

                </form>

            </div>

        </div>
    </div>