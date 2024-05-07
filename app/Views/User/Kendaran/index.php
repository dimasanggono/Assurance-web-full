<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Kendaran</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Merk</th>
                            <th>Tipe</th>
                            <th>Warna</th>
                            <th>Tahun</th>
                            <th>Nomor Polisi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($kendaraan)) { ?>
                            <tr>
                                <td colspan="6" class="text-center">Anda belum memasukan data kendaraan</td>
                            </tr>
                            <?php } else {
                            $no = 1;
                            foreach ($kendaraan as $k) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $k['merk'] ?></td>
                                    <td><?= $k['tipe'] ?></td>
                                    <td><?= $k['warna'] ?></td>
                                    <td><?= $k['tahun'] ?></td>
                                    <td><?= $k['nopol'] ?></td>
                                    <td class="d-flex">
                                        <a href="<?= base_url('user/kendaran/edit/' . $k['id_kendaran']) ?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a>
                                        <?= form_open('user/kendaran/deleteData/' . $k['id_kendaran']) ?>
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        <?= form_close() ?>
                                    </td>
                                </tr>
                        <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>