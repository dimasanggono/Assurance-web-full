<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Kendaraan</h3>
        </div>
        <div class="card-body">
            <?= form_open('User/Kendaran/UpdateData/' . $kendaraan['id_kendaran']) ?>
            <div class="mb-3">
                <label for="">Nomor Polisi</label>
                <input type="text" name="nopol" class="form-control" value="<?= $kendaraan['nopol'] ?>">
            </div>
            <div class="mb-3">
                <label for="">Nomor Kerangka Kendaran</label>
                <input type="text" name="norang" class="form-control" value="<?= $kendaraan['norang'] ?>">
            </div>
            <div class="mb-3">
                <label for="">Nomor Mesin</label>
                <input type="text" name="nosin" class="form-control" value="<?= $kendaraan['nosin'] ?>">
            </div>
            <div class="mb-3">
                <label for="">Merek</label>
                <input type="text" name="merk" class="form-control" value="<?= $kendaraan['merk'] ?>">
            </div>
            <div class="mb-3">
                <label for="">Tipe</label>
                <input type="text" name="tipe" class="form-control" value="<?= $kendaraan['tipe'] ?>">
            </div>
            <div class="mb-3">
                <label for="">Warna</label>
                <input type="text" name="warna" class="form-control" value="<?= $kendaraan['warna'] ?>">
            </div>
            <div class="mb-3">
                <label for="">Tahun</label>
                <input type="number" name="tahun" class="form-control" value="<?= $kendaraan['tahun'] ?>">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary form-control">Simpan</button></button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>