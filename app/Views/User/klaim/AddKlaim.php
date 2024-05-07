<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Pengajuan Klaim</h3>
        </div>
        <div class="card-body">
            <?php
            $errors = session()->getFlashdata('errors');
            if (!empty($errors)) { ?>
                <div class="alert alert-danger alert-dismissible">
                    <ul>
                        <?php foreach ($errors as $key => $value) { ?>
                            <li><?= esc($value) ?></li>
                        <?php } ?>
                    </ul>

                </div>
            <?php } ?>
            <?php
            if (session()->getFlashdata('errors')) {
                echo '<div class="alert alert-danger alert-dismissible">';
                echo session()->getFlashdata('errors');
                echo '</div>';
            } ?>
            <?= form_open_multipart('User/Klaim/insertData') ?>
            <div class="mb-3">
                <label for="">Foto KTP</label>
                <span class="text-danger">*</span>
                <input type="file" name="ktp" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Foto SIM</label>
                <span class="text-danger">*</span>
                <input type="file" name="sim" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Foto STNK</label>
                <span class="text-danger">*</span>
                <input type="file" name="stnk" class="form-control">
            </div>
            <div class="mb-3">
                <label for="f_kendaran">Foto Kendaraan</label>
                <input type="file" name="f_kendaraan" class="form-control">
            </div>
            <div class="mb-3">
                <label for="kendaran_depan">Foto Kendaraan Depan</label>
                <input type="file" name="kendaran_depan" class="form-control">
            </div>
            <div class="mb-3">
                <label for="kendaran_belakang">Foto Kendaran Belakang</label>
                <input type="file" name="kendaran_belakang" class="form-control">
            </div>
            <div class="mb-3">
                <label for="kendaran_samping">Foto Kendaraan Samping</label>
                <input type="file" name="kendaran_samping" class="form-control">
            </div>
            <div class="mb-3">
                <label for="nama_user">Nama</label>
                <input type="text" name="nama_user" value="<?= session()->get('nama_user') ?>" class="form-control" disabled>
            </div>
            <div class="mb-3">
                <label for="">Kendaraan</label>
                <select name="id_kendaran" class="form-control">
                    <option value="">-- Pilih --</option>
                    <?php foreach ($kendaran as $key => $value) : ?>
                        <option value="<?= $value['id_kendaran'] ?>"><?= $value['nopol'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary form-control">Simpan</button></button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>