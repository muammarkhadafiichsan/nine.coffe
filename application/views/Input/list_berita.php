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
                            foreach ($berita as $brt) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $brt->judul ?></td>
                                    <td><?php echo substr($brt->deskripsi, 0, 50) ?>...</td>
                                    <td> <img src="<?php echo base_url('assets/images/') . $brt->foto; ?>"></td>
                                    <td><?= $brt->tanggal ?></td>
                                    <td>
                                        <a href="" class=""><i class=""></i> Edit</a>
                                        <a href="" class=""><i class=""></i> | Hapus</a>
                                    </td>
                                </tr>



                            <?php endforeach; ?>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>