 <div class="col-lg-3 col-6">
     <!-- small box -->
     <div class="small-box bg-info shadow">
         <div class="inner">
             <h3>
                 <?= $total_day ?>
             </h3>
             <p class="fw-bold">Pengajuan Perhari</p>
         </div>
         <div class="icon">
             <i class="fa fa-car-side" aria-hidden="true"></i>
         </div>
         <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
     </div>
 </div>
 <div class="col-lg-3 col-6">
     <!-- small box -->
     <div class="small-box bg-warning shadow">
         <div class="inner">
             <h3><?= $total_klaim ?></h3>

             <p class="fw-bold">Total Pengajuan</p>
         </div>
         <div class="icon">
             <i class="fa fa-chart-bar" aria-hidden="true"></i>
         </div>
         <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
     </div>
 </div>
 <div class="col-lg-3 col-6">
     <!-- small box -->
     <div class="small-box bg-primary shadow">
         <div class="inner">
             <h3><?= $total_user ?></h3>

             <p class="fw-bold">Total User</p>
         </div>
         <div class="icon">
             <i class="fa fa-user-plus" aria-hidden="true"></i>
         </div>
         <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
     </div>
 </div>
 <div class="col-lg-3 col-6">
     <!-- small box -->
     <div class="small-box bg-success shadow">
         <div class="inner">
             <h3><?= $total_pegawai ?></h3>

             <p class="fw-bold">Total Pegawai</p>
         </div>
         <div class="icon">
             <i class="fa fa-users" aria-hidden="true"></i>
         </div>
         <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
     </div>
 </div>


 <div class="col-md-12">
     <div class="card">
         <h1 class="text-center">Pengajuan Klaim</h1>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-striped">
                     <thead>
                         <tr class="text-center">
                             <th>No</th>
                             <th>Nama User</th>
                             <th>Nomor Polisi</th>
                             <th>Tanggal</th>
                             <th>Status</th>
                             <th>Aksi</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php $no = 1;
                            foreach ($klaim as $key => $value) { ?>
                             <tr class="text-center">
                                 <td><?= $no++ ?></td>
                                 <td><?= $value['nama_user'] ?></td>
                                 <td><?= $value['nopol'] ?></td>
                                 <td><?= $value['tgl_upload'] ?></td>
                                 <td>
                                     <?php if ($value['status'] == 'Pending') { ?>
                                         <h5><span class="badge bg-warning rounded-pill shadow"><?= $value['status'] ?></span></h5>
                                     <?php } elseif ($value['status'] == 'Terima') { ?>
                                         <h5><span class="badge bg-success rounded-pill shadow"><?= $value['status'] ?></span></h5>
                                     <?php } elseif ($value['status'] == 'Tolak') { ?>
                                         <h5><span class="badge btn btn-danger rounded-pill shadow"><?= $value['status'] ?></span></h5>
                                     <?php } ?>
                                 </td>
                                 <td>
                                     <a href="<?= base_url('Admin/Klaim/DetailData/' . $value['id_klaim']) ?>" class="btn btn-md btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                     <a href="<?= base_url('Admin/Klaim/editData/' . $value['id_klaim']) ?>" class="btn btn-md btn-success"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a>
                                 </td>
                             </tr>
                         <?php   } ?>
                     </tbody>
                 </table>
             </div>
         </div>

     </div>
 </div>