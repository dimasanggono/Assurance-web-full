<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-klaim Admin | <?= $title ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('template_user') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('template_user') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('template_user') ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('template_user') ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="<?= base_url('template_user') ?>/plugins/summernote/summernote-bs4.min.css">
    <!-- Theme style -->
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('template_user') ?>/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url('Admin/DashboardAdmin') ?>" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <?php
                        if ($getnotif == '') { ?>
                        <?php
                        } elseif ($getnotif == 1) { ?>
                            <span class="badge badge-warning navbar-badge"><?= $getnotif ?></span>
                        <?php    } ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <?php
                        if ($getnotif == 0) { ?>
                            <span class="dropdown-header">Belum Ada yang mengajukan Klaim</span>
                        <?php
                        } elseif ($getnotif == 1) { ?>
                            <span class="dropdown-header">Anda Memiliki pengajuan klaim sebanyak <?= $getnotif ?></span>
                        <?php    } ?>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span> <?= session()->get('nama_admin') ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <a href="<?= base_url('AuthController/logout') ?>" class="btn btn-block btn-primary">
                            Logout <i class="fas fa-arrow-circle-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="<?= base_url('template_user') ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">E-Klaim</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item ">
                            <a href="<?= base_url('Admin/DashboardAdmin') ?>" class="nav-link <?= $menu == 'Dashboard' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('Admin/Klaim') ?>" class="nav-link <?= $menu == 'Klaim' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Data Pengajuan Klaim
                                </p>
                            </a>
                        </li>
                        <?php
                        if (session()->get('level') == '1') { ?>
                            <li class="nav-item <?php echo $menu == 'Pegawai' || $menu == 'User' ? 'menu-open' : '' ?>">
                                <a href="#" class="nav-link <?= $menu == 'Pegawai' || $menu == 'User' ? 'active' : '' ?>">
                                    <i class="nav-icon fas fa-boxes"></i>
                                    <p>
                                        Master Data
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?= base_url('Admin/Pegawai') ?>" class="nav-link <?= $menu == 'Pegawai' ? 'active' : '' ?>">
                                            <i class="nav-icon fas fa-users"></i>
                                            <p>
                                                Data Pegawai
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('Admin/User') ?>" class="nav-link <?= $menu == 'User' ? 'active' : '' ?>">
                                            <i class="nav-icon fas fa-user-plus"></i>
                                            <p>
                                                User
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php } elseif (session()->get('level') == '2') { ?>
                            <li class="nav-item <?php echo $menu == 'Pegawai' || $menu == 'User' ? 'menu-open' : '' ?>" style="display:none">
                                <a href="#" class="nav-link <?= $menu == 'Pegawai' || $menu == 'User' ? 'active' : '' ?>">
                                    <i class="nav-icon fas fa-boxes"></i>
                                    <p>
                                        Master Data
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?= base_url('Admin/Pegawai') ?>" class="nav-link <?= $menu == 'Pegawai' ? 'active' : '' ?>">
                                            <i class="nav-icon fas fa-users"></i>
                                            <p>
                                                Data Pegawai
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('Admin/User') ?>" class="nav-link <?= $menu == 'User' ? 'active' : '' ?>">
                                            <i class="nav-icon fas fa-user-plus"></i>
                                            <p>
                                                User
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php    }  ?>

                        <li class="nav-item">
                            <a href="<?= Base_url('Admin/Akun') ?>" class="nav-link <?= $menu == 'Akun' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Akun
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?= $title ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#"><?= $title ?></a></li>
                                <li class="breadcrumb-item active"><?= $subtitle ?></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <?php
                        if ($pages) {
                            echo view($pages);
                        }

                        ?>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= base_url('template_user') ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('template_user') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('template_user') ?>/dist/js/adminlte.min.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('template_user') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('template_user') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('template_user') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('template_user') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url('template_user') ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('template_user') ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('template_user') ?>/plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url('template_user') ?>/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url('template_user') ?>/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url('template_user') ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('template_user') ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('template_user') ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- Summernote -->
    <script src="<?= base_url('template_user') ?>/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>