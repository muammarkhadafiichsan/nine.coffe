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
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form action="<?= base_url() . 'admin/produk/tambah_produk' ?>" method="post" enctype="multipart/form-data">
                    <h4 class="card-title">Inputkan Produk Nine</h4>
                    <p class="card-description"></p>
                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" name="nama_produk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea type="text" name="deskripsi" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Sejarah</label>
                        <input type="text" name="sejarah" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>

                </form>

            </div>

        </div>
    </div>