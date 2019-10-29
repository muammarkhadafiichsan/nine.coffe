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
                                <th>foto</th>
                                <th>tanggal</th>
                                <th>aksi</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($awards as $awd) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $awd->judul ?></td>
                                    <td><?php echo substr($awd->deskripsi, 0, 50) ?>...</td>
                                    <td> <img src="<?php echo base_url('assets/images/') . $awd->foto; ?>"></td>
                                    <td><?= $awd->tanggal ?></td>
                                    <td>
                                        <a href="<?= site_url('admin/awards/edit/' . $awd->Id) ?> "> <i class=""></i> Edit</a>
                                        <a href="<?= site_url('admin/awards/hapus/' . $awd->Id) ?>" class=""><i class=""></i> | Hapus</a>
                                    </td>
                                </tr>



                            <?php endforeach; ?>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>