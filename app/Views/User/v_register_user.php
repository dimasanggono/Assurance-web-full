<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-klaim | <?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('asurance-web') ?>/style/styles.css">
</head>

<style>
    body {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.dev/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1005%26quot%3b)' fill='none'%3e%3crect width='1440' height='560' x='0' y='0' fill='rgba(229%2c 48%2c 48%2c 1)'%3e%3c/rect%3e%3cpath d='M0%2c335.553C64.371%2c330.033%2c132.704%2c325.29%2c182.953%2c284.681C231.4%2c245.528%2c248.267%2c181.073%2c265.291%2c121.154C280.261%2c68.463%2c287.073%2c13.896%2c275.071%2c-39.549C263.651%2c-90.403%2c223.415%2c-126.488%2c199.302%2c-172.696C166.028%2c-236.459%2c172.377%2c-333.814%2c106.476%2c-362.623C42.739%2c-390.485%2c-23.807%2c-325.987%2c-87.525%2c-298.081C-143.023%2c-273.775%2c-208.394%2c-260.153%2c-242.237%2c-209.9C-275.179%2c-160.984%2c-258.091%2c-96.572%2c-262.82%2c-37.788C-267.205%2c16.729%2c-277.885%2c68.883%2c-269.005%2c122.85C-257.654%2c191.836%2c-259.138%2c274.528%2c-204.296%2c317.891C-149.571%2c361.163%2c-69.511%2c341.514%2c0%2c335.553' fill='%23c51919'%3e%3c/path%3e%3cpath d='M1440 969.267C1517.868 971.841 1600.313 951.6 1658.04 899.277 1713.0529999999999 849.414 1706.278 763.14 1740.254 697.1220000000001 1776.62 626.462 1870.482 578.241 1864.028 499.034 1857.628 420.49 1769.407 377.826 1710.018 326.028 1658.388 280.997 1607.018 234.23399999999998 1540.704 217.03300000000002 1475.558 200.135 1410.343 224.231 1343.375 230.92399999999998 1258.837 239.373 1163.795 210.93200000000002 1095.5430000000001 261.526 1025.224 313.652 985.156 407.399 987.258 494.906 989.284 579.238 1061.683 640.817 1106.374 712.362 1144.779 773.845 1173.596 840.933 1231.032 885.1610000000001 1291.753 931.919 1363.404 966.735 1440 969.267' fill='%23eb6161'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1005'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3c/defs%3e%3c/svg%3e");
        background-position: center;
        background-size: cover;
        min-height: 100vh;
    }

    .footer {
        margin-top: 200px;
        background-color: #fff;
        width: 100%;
        padding: 5px;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="#">E-Klaim</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url('Home') ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Home') ?>">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Home') ?>layanan">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('login') ?>" class="btn btn-md btn-danger btn-login px-4">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section class="login">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="card shadow">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6 box-left">
                                        <img src="<?= base_url('asurance-web') ?>/assets/windows-p74ndnYWRY4-unsplash.jpg " alt="" class="w-100 p-1">
                                    </div>
                                    <div class="col-md-6 box-right">
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
                                        if (session()->getFlashdata('message')) {
                                            echo '<div class="alert alert-danger alert-dismissible">';
                                            echo session()->getFlashdata('message');
                                            echo '</div>';
                                        } ?>

                                        <?php echo form_open('AuthController/addUser');  ?>
                                        <div class="mb-3">
                                            <label for="nama_user" class="form-label">Nama</label>
                                            <input type="text" class="form-control" name="nama_user" id="nama_user" placeholder="Masukan Nama...">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Masukan Email...">
                                        </div>
                                        <div class="mb-3">
                                            <label for="no_tlpn" class="form-label">No Telpon</label>
                                            <input type="number" id="no_tlpn" class="form-control" name="no_tlpn" placeholder="Masukan No Telpon...">
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" id="password" class="form-control" name="password" placeholder="Masukan Password...">
                                        </div>
                                        <div class="mb-3">
                                            Sudah punya akun?
                                            <a href="<?= base_url('AuthController/login') ?>" class="text-decoration-none text-dark fw-bold">Login disini</a>
                                        </div>
                                        <button type="submit" class="btn btn-danger px-4 ms-auto">Masuk</button>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>


    <div class="footer">
        <footer class=" py-1 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3 py-2">
                <!-- <li class="nav-item"><a href="#" class="nav-link px-2 text-dark">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-dark">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-dark">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-dark">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-dark">About</a></li> -->
            </ul>
            <p class="text-center text-dark">&copy; 2024 Company, Inc</p>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        window.setTimeout(function() {
            $('.alert').fadeTo(5000, 0).slideUp(500, function() {
                $(this).remove();
            })
        }, 2500)
    </script>
</body>

</html>