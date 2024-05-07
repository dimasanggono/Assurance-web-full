<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Pegawai</h3>
            <div class="card-tools">
                <a href="<?= base_url('Admin/Pegawai/index  ') ?>" class="btn btn-sm btn-flat btn-primary rounded  px-3"><i class="fas fa-arrow-left"> Kembali</i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <?php
            if (session()->getFlashdata('errors')) {
                echo '<div class="alert alert-danger alert-dismissible">';
                echo session()->getFlashdata('errors');
                echo '</div>';
            } ?>

            <?php
            if (session()->getFlashdata('success')) {
                echo '<div class="alert alert-success alert-dismissible">';
                echo session()->getFlashdata('success');
                echo '</div>';
            } ?>

            <?= form_open_multipart('Admin/Pegawai/update') ?>
            <div class="mb-3">
                <label for="nama_admin" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama_admin" id="nama_admin" value="<?= $admin['nama_admin'] ?>" placeholder="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email" value="<?= $admin['email'] ?>" placeholder="email">
            </div>
            <div class="mb-3">
                <label for="level" class="form-label">Level</label>
                <select name="level" id="level" class="form-control">
                    <option value="<?= $admin['level'] ?>"><?= $admin['level'] ?></option>
                    <option value="1">Admin</option>
                    <option value="2">Pegawai</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input type="password" class="form-control" name="password" id="password" value="<?= $admin['password'] ?>" placeholder="email">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-md btn-primary form-control">Simpan</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>