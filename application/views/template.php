<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?= base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="<?= base_url() ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <link href="<?= base_url() ?>assets/build/css/custom.min.css" rel="stylesheet">


    <meta name="robots" content="noindex, nofollow">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="clearfix"></div>
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="<?= base_url() ?>assets/images/logo.png" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">

                            <h4><b>S I A K A D</b></h4>

                            <h8><b>SMKKR PONTIANAK</b></h7>
                        </div>
                    </div>
                    <br />
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                                <li><a href="<?= site_url('Dashboard') ?>"><i class="fa fa-home"></i>Home </a>
                                </li>
                                <?php if ($this->fungsi->user_login()->level == 'Admin') { ?>
                                    <li><a href="<?= site_url('Siswa') ?>"><i class="fa fa-users"></i>Siswa</a>
                                    </li>
                                    <li><a href="<?= site_url('Bidang_Keahlian') ?>"><i class="fa fa-stethoscope"></i>Bidang Keahlian</a>
                                    </li>
                                    <li><a href="<?= site_url('Guru') ?>"><i class="fa fa-user"></i>Guru</a>
                                    </li>
                                    <li><a href="<?= site_url('Alumni') ?>"><i class="fa fa-mortar-board"></i>Alumni</a>
                                    </li>
                                    <li><a href="<?= site_url('Kelas') ?>"><i class="fa fa-archive"></i>Kelas</a>
                                    </li>
                                    <li><a href="<?= site_url('Tahun_Ajaran') ?>"><i class="fa fa-calendar"></i>Tahun Ajaran</a>
                                    </li>
                                    <li><a href="<?= site_url('Mata_Pelajaran') ?>"><i class="fa fa-list-alt"></i>Mata pelajaran</a>
                                    </li>
                                    <li><a href="<?= site_url('Jadwal_Pelajaran') ?>"><i class="fa fa-table"></i>Jadwal Pelajaran</a>
                                    </li>
                                    <li><a href="<?= site_url('User') ?>"><i class="fa fa-user"></i> User</a>
                                    </li>
                                <?php } ?>

                                <?php if ($this->fungsi->user_login()->level == 'Kepala Sekolah') { ?>
                                    <li><a href="<?= site_url('Siswa') ?>"><i class="fa fa-users"></i>Siswa</a>
                                    </li>
                                    <li><a href="<?= site_url('Alumni') ?>"><i class="fa fa-mortar-board"></i>Alumni</a>
                                    </li>
                                <?php } ?>

                                <?php if ($this->fungsi->user_login()->level == 'Guru') { ?>
                                    <li><a href="<?= site_url('Alumni') ?>"><i class="fa fa-mortar-board"></i>Alumni</a>
                                    </li>
                                    <li><a href="<?= site_url('Siswa') ?>"><i class="fa fa-users"></i>Siswa</a>
                                    </li>
                                    <li><a href="<?= site_url('Jadwal_Pelajaran') ?>"><i class="fa fa-table"></i>Jadwal Pelajaran</a>
                                    </li>
                                    <li><a href="<?= site_url('Rapor') ?>"><i class="fa fa-table"></i>Rapor</a>
                                    </li>
                                <?php } ?>
                                
                                <?php if ($this->fungsi->user_login()->level == 'Siswa') { ?>
                                    <li><a href="<?= site_url('Jadwal_Pelajaran') ?>"><i class="fa fa-table"></i>Jadwal Pelajaran</a>
                                    </li>
                                    <li><a href="<?= site_url('Rapor') ?>"><i class="fa fa-table"></i>Rapor</a>
                                    </li>
                                <?php } ?>
                                <li><a href="<?= site_url('Auth/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile" aria-haspopup="true" id="" data-toggle="" aria-expanded="false">
                                    <img src="<?= base_url() ?>assets/images/user.png" alt=""><span>Selamat Datang,</span>
                                    <?php if ($this->fungsi->user_login()->level == 'Siswa') : ?>
                                        <?= $this->fungsi->user_login()->nama_siswa ?>
                                    <?php elseif ($this->fungsi->user_login()->level == 'Guru') : ?>
                                        <?= $this->fungsi->user_login()->nama_guru ?>
                                    <?php else : ?>
                                        <?= $this->fungsi->user_login()->nama ?>
                                    <?php endif; ?>
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="javascript:;"> Profile</a>
                                    <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="content-wrapper">
                <?php echo $contents ?>
            </div>
            <footer>
                <div class="pull-center">
                    <strong>Copyright &copy; 2022 SMKKR PONTIANAK.</strong> All rights reserved. <b>Version</b> 1.0
                </div>
                <div class="clearfix"></div>
            </footer>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="<?= base_url() ?>assets/ajax.js"></script>
    <script src="<?= base_url() ?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <script src="<?= base_url() ?>assets/vendors/nprogress/nprogress.js"></script>
    <script src="<?= base_url() ?>assets/build/js/custom.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/pdfmake/build/vfs_fonts.js"></script>


    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6ed73de34abf49c0","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#table1').DataTable()
        })
    </script>
</body>

</html>