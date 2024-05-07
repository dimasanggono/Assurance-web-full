<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Data User</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-sm btn-flat btn-primary rounded  px-3" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus"> Tambah</i>
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php

            if (session()->getFlashdata('success')) {
                echo '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> success!</h5>';
                echo session()->getFlashdata('success');
                echo '</div>';
            }
            if (session()->getFlashdata('update')) {
                echo '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> success!</h5>';
                echo session()->getFlashdata('success');
                echo '</div>';
            }
            if (session()->getFlashdata('delete')) {
                echo '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> success!</h5>';
                echo session()->getFlashdata('success');
                echo '</div>';
            }
            ?>
            <div class="table-responsive">
                <table class="table table-striped" id="example1">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Telphone</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($user as $key => $value) { ?>
                            <tr class="text-center">
                                <td><?= $no++ ?></td>
                                <td><?= $value['nama_user'] ?></td>
                                <td><?= substr($value['no_tlpn'], 0, 8) . "xxx" ?></td>
                                <td><?= $value['email'] ?></td>
                                <td>
                                    <a href="<?= base_url('admin/user/edit/' . $value['id_user']) ?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a>
                                    <a href="<?= base_url('admin/user/delete/' . $value['id_user']) ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        <?php   } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open('admin/user/insert') ?>
                <div class="mb-3">
                    <label for="">Nama User</label>
                    <input type="text" name="nama_user" class="form-control" placeholder="Masukkan Nama">
                </div>
                <div class="mb-3">
                    <label for="">No Telphone</label>
                    <input type="number" name="no_tlpn" class="form-control" placeholder="Masukkan No Telphone">
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Masukkan Email">
                </div>
                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <?= form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>