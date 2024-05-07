<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Pegawai</h3>
            <div class="card-tools">
                <a href="<?= base_url('Admin/Pegawai/add') ?>" class="btn btn-sm btn-flat btn-primary rounded  px-3"><i class="fas fa-plus"> Tambah</i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example1" class="table table-striped">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($pegawai as $key => $value) { ?>
                            <tr class="text-center">
                                <td><?= $no++ ?></td>
                                <td><?= $value['nama_admin'] ?></td>
                                <td><?= $value['email'] ?></td>
                                <!-- <td><img src="<?= base_url('foto/' . $value['tand_tgn']) ?>" width="100"></td> -->
                                <td><?= $value['level'] ?></td>
                                <td>
                                    <?= form_open('Admin/Pegawai/deleteData/' . $value['id_admin']) ?>
                                    <button type="submit" class="btn btn-md btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    <?= form_close() ?>
                                </td>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>