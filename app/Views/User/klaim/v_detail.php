 <div class="col-md-12">
     <div class="card">
         <div class="card-header">
             <h4 class="card-title text-center">Detail Data</h4>
             <a href="<?= base_url('User/Klaim/riwayat') ?>" class="btn btn-md btn-primary">
                 <i class="fa fa-arrow-left" aria-hidden="true"></i>

                 Back
             </a>
         </div>
         <div class="card-body">
             <table class="table table-striped">
                 <tr>
                     <th width="140px">Nomor Polisi</th>
                     <th width="30px">:</th>
                     <td><?= $klaim['nopol'] ?></td>
                     <th width="140px">Mobil</th>
                     <th width="30px">:</th>
                     <td><?= $klaim['merk'] ?></td>
                 </tr>
                 <tr>
                     <th width="140px">Nama</th>
                     <th width="30px">:</th>
                     <td><?= $klaim['nama_user'] ?></td>
                     <th width="140px">Status</th>
                     <th width="30px">:</th>
                     <td><?php if ($klaim['status'] == 'Pending') { ?>
                             <h5><span class="badge btn-warning rounded-pill shadow"><?= $klaim['status'] ?></span></h5>
                         <?php } elseif ($klaim['status'] == 'Terima') { ?>
                             <h5><span class="badge btn-success rounded-pill shadow"><?= $klaim['status'] ?></span></h5>
                         <?php } elseif ($klaim['status'] == 'Tolak') { ?>
                             <h5><span class="badge btn-danger rounded-pill shadow"><?= $klaim['status'] ?></span></h5>
                         <?php } ?>
                     </td>
                 </tr>
                 <tr>
                     <th width="140px">Tanggal Upload</th>
                     <th width="30px">:</th>
                     <td><?= $klaim['tgl_upload'] ?></td>
                     <th width="140px">Tanggal update</th>
                     <th width="30px">:</th>
                     <td><?= $klaim['tgl_update'] ?></td>
                 </tr>
                 <tr>
                     <th width="200px">Ktp</th>
                     <th width="30px">:</th>
                     <td><img src="<?= base_url('uploads/' . $klaim['ktp']) ?>" alt="" class="w-75 h-50"></td>
                 </tr>
                 <tr>
                     <th width="100px">SIM</th>
                     <th width="30px">:</th>
                     <td><img src="<?= base_url('uploads/' . $klaim['sim']) ?>" alt="" class="w-75 h-50"></td>
                 </tr>

                 <tr>
                     <th width="100px">STNK</th>
                     <th width="30px">:</th>
                     <td><img src="<?= base_url('uploads/' . $klaim['stnk']) ?>" alt="" class="w-75 h-50"></td>
                 </tr>

                 <tr>
                     <th width="100px">Kendaran</th>
                     <th width="30px">:</th>
                     <td><img src="<?= base_url('uploads/' . $klaim['f_kendaraan']) ?>" class="w-75 h-50"></td>
                 </tr>
                 <tr>
                     <th width="100px">Kendaran Depan</th>
                     <th width="30px">:</th>
                     <td><img src="<?= base_url('uploads/' . $klaim['kendaran_depan']) ?>" class="w-75 h-50"></td>
                 </tr>
                 <tr>
                     <th width="100px">Kendaran belakang</th>
                     <th width="30px">:</th>
                     <td><img src="<?= base_url('uploads/' . $klaim['kendaran_belakang']) ?>" class="w-75 h-50"></td>
                 </tr>
                 <tr>
                     <th width="100px">Kendaran samping</th>
                     <th width="30px">:</th>
                     <td><img src="<?= base_url('uploads/' . $klaim['kendaran_samping']) ?>" class="w-75 h-50"></td>
                 </tr>
             </table>
         </div>
     </div>

 </div>
 <div class="col-sm-15">
 </div>