<div class="col-md-12">
    <div class="card">
        <h1 class="text-center">Data Riwayat Klaim</h1>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nomor Polisi</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($klaim)) { ?>
                            <tr>
                                <td colspan="6" class="text-center">Anda belum memiliki data klaim</td>
                            </tr>
                        <?php } else { ?>
                            <?php $no = 1;
                            foreach ($klaim as $key => $value) : ?>
                                <tr class="text-center">
                                    <td><?= $no++ ?></td>
                                    <td><?= $value['nopol'] ?></td>
                                    <td><?= $value['tgl_upload'] ?></td>
                                    <td>
                                        <?php if ($value['status'] == 'Pending') { ?>
                                            <h5><span class="badge btn-warning rounded-pill shadow"><?= $value['status'] ?></span></h5>
                                        <?php } elseif ($value['status'] == 'Terima') { ?>
                                            <h5><span class="badge btn-success rounded-pill shadow"><?= $value['status'] ?></span></h5>
                                        <?php } elseif ($value['status'] == 'Tolak') { ?>
                                            <h5><span class="badge btn btn-danger rounded-pill shadow"><?= $value['status'] ?></span></h5>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('User/Klaim/DetailData/' . $value['id_klaim']) ?>" class="btn btn-md btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <?php if ($value['status'] == 'Terima') { ?>
                                            <a href="<?= base_url('User/PrintData/PrintData/' . $value['id_klaim']) ?>" class="btn btn-md btn-success"><i class="fa fa-download" aria-hidden="true"></i></a>
                                        <?php } else { ?>
                                            <a href="<?= base_url('User/PrintData/') ?>" class="btn-md btn-success" hidden><i class="fa fa-download" aria-hidden="true"></i></a>
                                        <?php } ?>
                                        <a href="<?= base_url('User/Klaim/Delete/' . $value['id_klaim']) ?>" class="btn btn-md btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>