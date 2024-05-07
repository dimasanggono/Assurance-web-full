<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Kendaraan</h3>
        </div>
        <div class="card-body">
            <?= form_open('User/Kendaran/insert') ?>
            <div class="mb-3">
                <label for="">Nomor Polisi</label>
                <input type="text" name="nopol" class="form-control" placeholder="Contoh: B 67x7 xxx">
            </div>
            <div class="mb-3">
                <label for="">Nomor Kerangka Kendaran</label>
                <input type="text" name="norang" class="form-control" placeholder="Masukkan Nomor Kerangka Kendaran...">
            </div>
            <div class="mb-3">
                <label for="">Nomor Mesin</label>
                <input type="text" name="nosin" class="form-control" placeholder="Masukkan Nomor Mesin..">
            </div>
            <div class="mb-3">
                <label for="">Merek</label>
                <input type="text" name="merk" class="form-control" placeholder="Merek Kendaran..">
            </div>
            <div class="mb-3">
                <label for="">Tipe</label>
                <input type="text" name="tipe" class="form-control" placeholder="Tipe Kendaran..">
            </div>
            <div class="mb-3">
                <label for="">Warna</label>
                <input type="text" name="warna" class="form-control" placeholder="Warna Kendaran..">
            </div>
            <div class="mb-3">
                <label for="">Tahun</label>
                <input type="number" name="tahun" class="form-control" placeholder="201x">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary form-control">Simpan</button></button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>