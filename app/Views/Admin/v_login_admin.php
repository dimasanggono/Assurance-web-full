<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Klaim | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('template_user') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('template_user') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('template_user') ?>/dist/css/adminlte.min.css">
</head>

<style>
    body {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.dev/svgjs' width='1440' height='400' preserveAspectRatio='none' viewBox='0 0 1440 400'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1556%26quot%3b)' fill='none'%3e%3crect width='1440' height='400' x='0' y='0' fill='rgba(215%2c 221%2c 229%2c 1)'%3e%3c/rect%3e%3cpath d='M42 400L442 0L628 0L228 400z' fill='url(%26quot%3b%23SvgjsLinearGradient1557%26quot%3b)'%3e%3c/path%3e%3cpath d='M269.6 400L669.6 0L734.1 0L334.1 400z' fill='url(%26quot%3b%23SvgjsLinearGradient1557%26quot%3b)'%3e%3c/path%3e%3cpath d='M481.20000000000005 400L881.2 0L1190.2 0L790.2 400z' fill='url(%26quot%3b%23SvgjsLinearGradient1557%26quot%3b)'%3e%3c/path%3e%3cpath d='M731.8000000000001 400L1131.8000000000002 0L1421.3000000000002 0L1021.3000000000001 400z' fill='url(%26quot%3b%23SvgjsLinearGradient1557%26quot%3b)'%3e%3c/path%3e%3cpath d='M1404 400L1004 0L947 0L1347 400z' fill='url(%26quot%3b%23SvgjsLinearGradient1558%26quot%3b)'%3e%3c/path%3e%3cpath d='M1157.4 400L757.4000000000001 0L452.9000000000001 0L852.9000000000001 400z' fill='url(%26quot%3b%23SvgjsLinearGradient1558%26quot%3b)'%3e%3c/path%3e%3cpath d='M947.8 400L547.8 0L325.79999999999995 0L725.8 400z' fill='url(%26quot%3b%23SvgjsLinearGradient1558%26quot%3b)'%3e%3c/path%3e%3cpath d='M689.1999999999999 400L289.19999999999993 0L148.19999999999993 0L548.1999999999999 400z' fill='url(%26quot%3b%23SvgjsLinearGradient1558%26quot%3b)'%3e%3c/path%3e%3cpath d='M1171.7580507584416 400L1440 131.75805075844175L1440 400z' fill='url(%26quot%3b%23SvgjsLinearGradient1557%26quot%3b)'%3e%3c/path%3e%3cpath d='M0 400L268.24194924155825 400L 0 131.75805075844175z' fill='url(%26quot%3b%23SvgjsLinearGradient1558%26quot%3b)'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1556'%3e%3crect width='1440' height='400' fill='white'%3e%3c/rect%3e%3c/mask%3e%3clinearGradient x1='0%25' y1='100%25' x2='100%25' y2='0%25' id='SvgjsLinearGradient1557'%3e%3cstop stop-color='rgba(15%2c 70%2c 185%2c 0.2)' offset='0'%3e%3c/stop%3e%3cstop stop-opacity='0' stop-color='rgba(15%2c 70%2c 185%2c 0.2)' offset='0.66'%3e%3c/stop%3e%3c/linearGradient%3e%3clinearGradient x1='100%25' y1='100%25' x2='0%25' y2='0%25' id='SvgjsLinearGradient1558'%3e%3cstop stop-color='rgba(15%2c 70%2c 185%2c 0.2)' offset='0'%3e%3c/stop%3e%3cstop stop-opacity='0' stop-color='rgba(15%2c 70%2c 185%2c 0.2)' offset='0.66'%3e%3c/stop%3e%3c/linearGradient%3e%3c/defs%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<body class="hold-transition login-page">
    <div class="login-box">

        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <h1 class="text-center"><b>E-klaim</b></h1>
                <p class="login-box-msg">Halaman Untuk Login Admin & Karyawan</p>
                <?= form_open('AuthController/cekLogin') ?>
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
                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url('template_user') ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('template_user') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('template_user') ?>/dist/js/adminlte.min.js"></script>
</body>

</html>