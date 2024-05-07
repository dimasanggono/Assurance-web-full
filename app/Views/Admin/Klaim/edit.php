<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <?= form_open('Admin/Klaim/UpdateStatus/' . $klaim['id_klaim']) ?>
            <div class="mb-3">
                <label for="">Nama</label>
                <input type="text" name="name_user" class="form-control" value="<?= $klaim['nama_user'] ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="">Nomor Polisi</label>
                <input type="text" name="nopol" class="form-control" value="<?= $klaim['nopol'] ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="">Tanggal Upload</label>
                <input type="text" name="tgl_upload" class="form-control" value="<?= $klaim['tgl_upload'] ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="">Bengkel</label>
                <input type="text" name="bengkel" class="form-control" value="<?= $klaim['bengkel'] ?>">
            </div>
            <div class="mb-3">
                <label for="">Status</label>
                <Select name="status" class="form-control">
                    <option value="<?= $klaim['status'] ?>"><?= $klaim['status'] ?></option>
                    <option value="Terima">Terima</option>
                    <option value="Tolak">Tolak</option>
                </Select>
            </div>
            <div class="mb-3">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="summernote" cols="50" rows="40" class="form-control"><?= $klaim['deskripsi'] ?></textarea>
            </div>
            <div class="mb-3">
                <button type="submit " class="btn btn-md btn-primary form-control">Simpan</button>
            </div>

            <?= form_close() ?>
        </div>
    </div>
</div>