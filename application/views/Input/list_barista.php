<div class="main-panel">
    <div class="content-wrapper">
        <div class="row purchace-popup">
            <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary">
                    <div class="table-responsive">
                        <table class="table table-border">
                            <tr>
                                <th>no</th>
                                <th>nama barista</th>
                                <th>deskripsi</th>
                                <th>foto</th>
                                <th>aksi</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($barista as $brs) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $brs->nama_barista ?></td>
                                    <td><?php echo substr($brs->deskripsi, 0, 50) ?>...</td>
                                    <td> <img src="<?php echo base_url('assets/images/') . $brs->foto; ?>"></td>

                                    <td>
                                        <a href="<?= site_url('admin/barista/edit/' . $brs->Id) ?> "> <i class=""></i> Edit</a>
                                        <a href="<?= site_url('admin/barista/hapus/' . $brs->Id) ?>" class=""><i class=""></i> | Hapus</a>
                                    </td>
                                </tr>



                            <?php endforeach; ?>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>