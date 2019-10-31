<div class="main-panel">
    <div class="content-wrapper">
        <div class="row purchace-popup">
            <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary">
                    <div class="table-responsive">
                        <table class="table table-border">
                            <tr>
                                <th>no</th>
                                <th>judul</th>
                                <th>deskripsi</th>
                                <th>tanggal</th>
                                <th>sumber</th>
                                <th>foto</th>
                                <th>aksi</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($tips_trik as $tt) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $tt->judul ?></td>
                                    <td><?php echo substr($tt->deskripsi, 0, 50) ?>...</td>
                                    <td><?= $tt->tanggal ?></td>
                                    <td><?= $tt->sumber ?></td>
                                    <td> <img src="<?php echo base_url('assets/images/') . $tt->foto; ?>"></td>

                                    <td>
                                        <a href="<?= site_url('admin/tips_trik/edit/' . $tt->Id) ?> "> <i class=""></i> Edit</a>
                                        <a href="<?= site_url('admin/tips_trik/hapus/' . $tt->Id) ?>" class=""><i class=""></i> | Hapus</a>
                                    </td>
                                </tr>



                            <?php endforeach; ?>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>