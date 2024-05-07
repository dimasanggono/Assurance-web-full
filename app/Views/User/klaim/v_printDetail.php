<div class="col-lg-12">
    <div class="table-responsive">
        <table class="table table-borderless">
            <tr>
                <th>Kepada Yth.</th>
            </tr>
            <tr>
                <th width="200px">Bengkel</th>
                <th width="30px">:</th>
                <td><?= $klaim['bengkel'] ?></td>
            </tr>
            <tr>
                <th width="200px">Perihal</th>
                <th>:</th>
                <td>PERMINTAAN PERBAIKAN KENDARAAN (<?= sprintf('%04d', $klaim['id_klaim']) ?>)</td>
            </tr>
            <tr>
                <th colspan="3">Dengan hormat, Mohon dapat dikerjakan perbaikan kendaraan dengan data di bawah ini</th>
            </tr>
            <tr>
                <th>Nomor Polis</th>
                <th>:</th>
                <td><?= sprintf('%04d', $klaim['id_user']) ?></td>
            </tr>
            <tr>
                <th>Tertanggung</th>
                <th>:</th>
                <td><?= $klaim['nama_user'] ?></td>
            </tr>
            <tr>
                <th>Kendaraan</th>
                <th>:</th>
                <td><?= $klaim['nopol'] ?> | <?= $klaim['merk'] ?> | <?= $klaim['tipe'] ?> | <?= $klaim['nosin'] ?> | <?= $klaim['norang'] ?> </td>
            </tr>
        </table>
        <ol>
            <li>Mohon bengkel mengerjakan sesuai panel yang disebutkan dalam WO ini</li>
            <li>Untuk jasa lain yang dibutuhkan dan belum ada di WO ini, mohon bengkel berkordinasi dengan PT. Asuransi Sinar Mas</li>
            <li>Terkait dengan ketentuan pembayaran dan hal lainnya tetap mengacu kepada PKS Bengkel</li>
        </ol>

        <table class="table table-borderless">
            <tr>
                <th width="200px">Hormat Kami.</th>
                <td></td>
            </tr>
            <tr>
                <td><img src="<?= base_url('foto/' . $klaim['tand_tgn']) ?>" width="200px"></td>
            </tr>
            <tr>
                <th><?= $klaim['nama_admin'] ?></th>
            </tr>
            <tr>
                <th>Surveyor MBU</th>
            </tr>

            <tr>
                <th>Perincian Permintaan Kerja </th>
                <th>:</th>
                <td><?= $klaim['deskripsi'] ?></td>
            </tr>
        </table>
    </div>
</div>