<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-klaim | <?= $title ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url('skydash') ?>/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= base_url('skydash') ?>/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url('skydash') ?>/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url('skydash') ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?= base_url('skydash') ?>/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="<?= base_url('skydash') ?>/text/css" href="js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('skydash') ?>/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url('skydash') ?>/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="<?= base_url('User/DashboardUser') ?>">E-KLAIM</a>
                <a class="navbar-brand brand-logo-mini" href="<?= base_url('User/DashboardUser') ?>">EK</a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="icon-bell mx-0"></i>
                            <?php if ($getnotif == "Pending") { ?>
                                <span class="count" hidden></span>
                            <?php } elseif ($getnotif == "Terima" || $getnotif == "Tolak") { ?>
                                <span class="count"></span>
                            <?php } else { ?>
                                <span class="count" hidden></span>
                            <?php } ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                            <?php if ($getnotif == "Pending") { ?>
                                <p class="mb-0 font-weight-normal float-left dropdown-header">Status Klaim masih Dalam Proses</p>
                            <?php } elseif ($getnotif == "Terima") { ?>
                                <p class="mb-0 font-weight-normal float-left dropdown-header">Status Klaim diterima</p>
                            <?php } elseif ($getnotif == "Tolak") { ?>
                                <p class="mb-0 font-weight-normal float-left dropdown-header">Status Klaim ditolak</p>
                            <?php } else { ?>
                                <p class="mb-0 font-weight-normal float-left dropdown-header">Tidak ada notifikasi</p> <!-- Tampilkan teks jika tidak ada notifikasi yang sesuai -->
                            <?php } ?>
                        </div>
                    </li>

                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <i class="fa fa-user-circle" aria-hidden="true" style="font-size: 24px;"></i>
                            <span>Hai, <?= session()->get('nama_user') ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="<?= base_url('AuthController/logout') ?>">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('User/DashboardUser') ?>">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('User/Klaim/riwayat') ?>">
                            <i class="fa fa-newspaper menu-icon" aria-hidden="true"></i>
                            <span class="menu-title">Riwayat Klaim</span>
                        </a>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('User/Kendaran') ?>">
                            <i class="fa fa-car menu-icon" aria-hidden="true"></i>
                            <span class="menu-title">Data Kendaran</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('User/Akun') ?>">
                            <i class="fa fa-user menu-icon"></i>
                            <span class="menu-title">Akun</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">

                    </div>
                    <div class="row">
                        <?php
                        if ($pages) {
                            echo view($pages);
                        }
                        ?>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
                    </div>
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="<?= base_url('skydash') ?>/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= base_url('skydash') ?>/vendors/chart.js/Chart.min.js"></script>
    <script src="<?= base_url('skydash') ?>/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="<?= base_url('skydash') ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="<?= base_url('skydash') ?>/js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url('skydash') ?>/js/off-canvas.js"></script>
    <script src="<?= base_url('skydash') ?>/js/hoverable-collapse.js"></script>
    <script src="<?= base_url('skydash') ?>/js/template.js"></script>
    <script src="<?= base_url('skydash') ?>/js/settings.js"></script>
    <script src="<?= base_url('skydash') ?>/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="<?= base_url('skydash') ?>/js/dashboard.js"></script>
    <script src="<?= base_url('skydash') ?>/js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->

    <!-- <script>
        // Menangani klik pada item dropdown
        document.getElementById('notificationDropdown').addEventListener('click', function() {
            // Atur kembali nilai-nilai notifikasi dan dropdown header ke kondisi default
            document.querySelector('.count').remove(); // Kosongkan teks pada count
            document.querySelector('.dropdown-header').innerText = 'Tidak ada notifikasi'; // Atur teks dropdown header kembali ke default
        });
    </script> -->
</body>

</html>