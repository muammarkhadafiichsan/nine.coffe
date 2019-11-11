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
                                <th>aksi</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($profile2 as $prf2) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $prf2->judul ?></td>
                                    <td><?php echo substr($prf2->deskripsi, 0, 50) ?>...</td>
                                    <td> <img src="<?php echo base_url('assets/upload/') . $prf2->foto; ?>"></td>

                                    <td>
                                        <a href="<?= site_url('admin/profile2/edit/' . $prf2->Id) ?> "> <i class=""></i> Edit</a>
                                        <a href="<?= site_url('admin/profile2/hapus/' . $prf2->Id) ?>" class=""><i class=""></i> | Hapus</a>
                                    </td>
                                </tr>



                            <?php endforeach; ?>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>