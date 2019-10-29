<div class="main-panel">
    <div class="content-wrapper">
        <div class="row purchace-popup">
            <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary">
                    <div class="table-responsive">
                        <table class="table table-border">
                            <tr>
                                <th>no</th>
                                <th>nama produk</th>
                                <th>deskripsi</th>
                                <th>foto</th>
                                <th>sejarah</th>
                                <th>aksi</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($produk as $pro) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $pro->nama_produk ?></td>
                                    <td><?php echo substr($pro->deskripsi, 0, 50) ?>...</td>
                                    <td> <img src="<?php echo base_url('assets/images/') . $pro->foto; ?>"></td>
                                    <td><?php echo substr($pro->sejarah, 0, 50) ?>...</td>

                                    <td>
                                        <a href="<?= site_url('admin/produk/edit/' . $pro->Id) ?> "> <i class=""></i> Edit</a>
                                        <a href="<?= site_url('admin/produk/hapus/' . $pro->Id) ?>" class=""><i class=""></i> | Hapus</a>
                                    </td>
                                </tr>



                            <?php endforeach; ?>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>