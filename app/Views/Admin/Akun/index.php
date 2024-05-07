<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Akun</h3>
        </div>
        <div class="card-body">
            <?php
            if (session()->getFlashdata('success')) {
                echo '<div class="alert alert-success alert-dismissible">';
                echo session()->getFlashdata('success');
                echo '</div>';
            } ?>
            <form>
                <div class="mb-3">
                    <label for="nama_admin" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama_admin" id="nama_admin" value="<?= $admin['nama_admin'] ?>" placeholder="name" readonly>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="email" value="<?= $admin['email'] ?>" placeholder="email" readonly>
                </div>
                <div class="mb-3">
                    <label for="tand_tgn" class="form-label">Tanda Tangan</label>
                    <input type="text" class="form-control" name="tand_tgn" value="<?= $admin['tand_tgn'] ?>" id="tand_tgn" readonly>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">password</label>
                    <input type="text" class="form-control" id="password" name="password" value="<?= $admin['password'] ?>" placeholder="password" readonly>
                </div>
                <div class="mb-3">
                    <a href="<?= base_url('Admin/Akun/editData') ?>" class="btn btn-md btn-primary">Ubah</a>
                </div>
            </form>

        </div>
    </div>
</div>