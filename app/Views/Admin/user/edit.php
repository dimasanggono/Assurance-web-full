<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Data User</h3>
            <div class="card-tools">
                <a href="<?= base_url('admin/user') ?>" class="btn btn-sm btn-flat btn-primary rounded  px-3"><i class="fas fa-arrow-left"> Back</i>
                </a>
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
            ?>
            <div class="table-responsive">
                <?= form_open_multipart('admin/user/update/' . $user['id_user']) ?>
                <div class="mb-3">
                    <label for="">Nama User</label>
                    <input type="text" name="nama_user" class="form-control" value="<?= $user['nama_user'] ?>" placeholder="Masukkan Nama">
                </div>
                <div class="mb-3">
                    <label for="">No Telphone</label>
                    <input type="number" name="no_tlpn" class="form-control" value="<?= $user['no_tlpn'] ?>" placeholder="Masukkan No Telphone">
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" value="<?= $user['email'] ?>" placeholder="Masukkan Email">
                </div>
                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password" readonly value="<?= $user['password'] ?>">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary btn-block">Simpan</button></button>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>