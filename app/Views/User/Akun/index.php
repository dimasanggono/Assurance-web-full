<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Akun</h3>
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
                    <label for="nama_user" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama_user" id="nama_user" value="<?= $user['nama_user'] ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="no_tlpn" class="form-label">No Telphone</label>
                    <input type="number" class="form-control" name="no_tlpn" id="no_tlpn" value="<?= $user['no_tlpn'] ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="email" value="<?= $user['email'] ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">password</label>
                    <input type="text" class="form-control" name="password" id="password" value="<?= $user['password'] ?>" readonly>
                </div>
                <div class="d-flex">
                    <a href="<?= base_url('User/Akun/edit') ?>" class="btn btn-primary">Ubah</a>
                </div>
            </form>
        </div>
    </div>
</div>