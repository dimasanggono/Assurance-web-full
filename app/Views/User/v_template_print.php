<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Surat Persetujuan Klaim</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url("template_user") ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url("template_user") ?>/dist/css/adminlte.min.css">
</head>

<style>
    .page-header {
        font-size: 35px;
        font-weight: bold;
        color: #000;
        text-align: end;
        margin-top: 20px;
    }

    address {
        text-align: end;
    }
</style>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Main content -->
        <section class="invoice">
            <!-- title row -->
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <h3 class="page-header">PT. Asuransi Sinar Mas</h3>
                        <address>
                            <strong>
                                <font size=4>(<?= sprintf('%04d', $klaim['id_klaim']) ?>)</font>
                            </strong><br>
                        </address>
                    </div>
                    <div class="col-12">
                        <h5>
                            AGENCY MANGGA DUA (<?= date('d/m/Y', strtotime($klaim['tgl_update'])) ?>)
                        </h5>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="container">
                    <?php
                    if ($pages) {
                        echo view($pages);
                    }
                    ?>
                    <!-- /.col -->
                </div>
            </div>
            <!-- /.row -->

            <!-- /.row -->

        </section>
    </div>


    <!-- jQuery -->
    <script src="<?= base_url("template_user") ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url("template_user") ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url("template_user") ?>/dist/js/adminlte.min.js"></script>
    <script>
        window.addEventListener("load", window.print());
    </script>
</body>

</html>