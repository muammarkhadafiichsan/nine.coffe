<div class="main-panel">
    <div class="content-wrapper">
        <div class="row purchace-popup">
            <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary">
                    <div class="table-responsive">
                        <table class="table table-border">
                            <tr>
                                <th>no</th>
                                <th>judul event</th>
                                <th>deskripsi</th>
                                <th>foto</th>
                                <th>tanggal</th>
                                <th>aksi</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($event as $evn) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $evn->nama_event ?></td>
                                    <td><?php echo substr($evn->deskripsi, 0, 50) ?>...</td>
                                    <td> <img src="<?php echo base_url('assets/images/') . $evn->foto; ?>"></td>
                                    <td><?= $evn->tanggal ?></td>

                                    <td>
                                        <a href="<?= site_url('admin/event/edit/' . $evn->Id) ?> "> <i class=""></i> Edit</a>
                                        <a href="<?= site_url('admin/event/hapus/' . $evn->Id) ?>" class=""><i class=""></i> | Hapus</a>
                                    </td>
                                </tr>



                            <?php endforeach; ?>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>