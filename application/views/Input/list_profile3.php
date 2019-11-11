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
                            foreach ($profile3 as $prf3) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $prf3->judul ?></td>
                                    <td><?php echo substr($prf3->deskripsi, 0, 50) ?>...</td>
                                    <td> <img src="<?php echo base_url('assets/upload/') . $prf3->foto; ?>"></td>

                                    <td>
                                        <a href="<?= site_url('admin/profile3/edit/' . $prf3->Id) ?> "> <i class=""></i> Edit</a>
                                        <a href="<?= site_url('admin/profile3/hapus/' . $prf3->Id) ?>" class=""><i class=""></i> | Hapus</a>
                                    </td>
                                </tr>



                            <?php endforeach; ?>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>