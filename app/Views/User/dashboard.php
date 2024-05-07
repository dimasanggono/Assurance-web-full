<div class="col-md-12 grid-margin">
    <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Welcome <?= session()->get('nama_user') ?></h3>
        </div>
        <div class="col-12 col-xl-4">
            <div class="justify-content-end d-flex">
                <div class="flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white" type="button" aria-haspopup="true" aria-expanded="true">
                        <i class="mdi mdi-calendar"></i> Today (<?= date('d-m-Y') ?>)
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="row">
        <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-dark-blue">
                <a href="<?= base_url('User/Klaim') ?>" class="text-white" style="text-decoration: none;">
                    <div class="card-body text-center">
                        <i class="fas fa-laptop mb-2" aria-hidden="true" style="font-size: 3rem ;"></i>
                        <h2>Pengajuan Klaim</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card" style="background-color: red;">
                <a href="<?= base_url('User/Kendaran/Add') ?>" class="text-white" style="text-decoration: none;">
                    <div class="card-body text-center">
                        <i class="fas fa-car-side mb-2" aria-hidden="true" style="font-size: 3rem ;"></i>
                        <h2>Tambah Kendaran</h2>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>