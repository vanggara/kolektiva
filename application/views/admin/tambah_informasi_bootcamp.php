<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perpustakaan dan Arsip Kota Malang</title>

    <!-- Custom fonts for this template -->
    <link href=<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css')?> rel="stylesheet" type="text/css">
    <link
        href=<?php echo base_url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')?>
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href=<?php echo base_url('assets/css/sb-admin-2.min.css')?> rel="stylesheet">
    <link href=<?php echo base_url('assets/css/style.css')?> rel="stylesheet">
    <link href=<?php echo base_url('assets/css/style-responsive.css')?> rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href=<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.min.css')?> rel="stylesheet">

    <!-- Data -->
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon">
                    <img class="img-profile" src="assets/img/perpus2.png" width="225" height="70">
                    <!-- <i class="fas fa-book">  <br>Admin</i> -->
                </div>
                <!-- <div class="sidebar-brand-text mx-3">Perpustakaan Umum</div> -->
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item -  -->
            <!-- Divider -->
            <!-- <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Service
      </div> -->
            <!-- Nav Item - Books -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <!-- <i class="fas fa-fw fa-book"></i> -->
                    <span>Bootcamp</span>
                </a>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Bootcamp Services:</h6>
                        <a class="collapse-item active" href="informasi-bootcamp">Informasi Bootcamp</a>
                        <a class="collapse-item" href="jadwal_bootcamp">Jadwal</a>
                        <a class="collapse-item" href="peserta_bootcamp">Peserta</a>
                        <a class="collapse-item" href="latihan_soal">Latihan Soal</a>
                        <a class="collapse-item" href="modul">Modul</a>
                        <a class="collapse-item" href="sertifikat_bootcamp">Sertifikat Bootcamp</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - User -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <!-- <i class="fas fa-fw fa-user"></i> -->
                    <span>Sertifikasi</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sertifikasi Services:</h6>
                        <a class="collapse-item" href="informasi_sertifikasi">Informasi Sertifikasi</a>
                        <a class="collapse-item" href="jadwal_sertifikasi">Jadwal</a>
                        <a class="collapse-item" href="peserta_sertifikasi">Peserta</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="pengguna">
                    <!-- <i class="fas fa-fw fa-home"></i> -->
                    <span>Pengguna</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Admin
            </div>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Account</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Admin Services:</h6>
                        <a class="collapse-item" href="ganti_password">Ganti Password</a>
                        <a class="collapse-item" data-toggle="modal" href="#" data-target="#myModal">Logout</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'application/views/topbar.php'?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-2 text-gray-800">Tambah Informasi Sertifikasi</h1>
                    </div>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->


                    <form action="<?php echo base_url();?>crud/action_tambah_anggota" method="post">
                        <div class="card-body">
                            <!--main content start-->
                            <section id="main-content">
                                <section class="wrapper">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 col-sm-2 control-label">Nama Sertifikasi</label>
                                            <div class="col-sm-10">
                                                <input required type="text" class="form-control round-form"
                                                    name="nama_sertifikasi">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /form group -->
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 col-sm-2 control-label">Tanggal Mulai
                                                Pendaftaran</label>
                                            <div class="col-sm-10">
                                                <input required type="date" class="form-control round-form"
                                                    name="tanggal_mulai_pendaftaran">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /form group -->
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 col-sm-2 control-label">Tanggal Selesai
                                                Pendaftaran</label>
                                            <div class="col-sm-10">
                                                <input required type="date" class="form-control round-form"
                                                    name="tanggal_selesai_pendaftaran">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /form group -->
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 col-sm-2 control-label">Biaya Pendaftaran</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-2 mr-sm-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">Rp.</div>
                                                    </div>
                                                    <input required type="text" placeholder="1500000"
                                                        onkeypress="return isNumberKey(event)"
                                                        class="form-control round-form" name="biaya_pendaftaran"
                                                        id="biaya_pendaftaran">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /form group -->
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 col-sm-2 control-label">Kuota Pendaftaran</label>
                                            <div class="col-sm-10">
                                                <input required type="date" class="form-control round-form"
                                                    name="kuota_pendaftaran">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /form group -->
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 col-sm-2 control-label">Informasi Tambahan</label>
                                            <div class="col-sm-10">
                                                <textarea required placeholder="Tulis informasi tambahan .."
                                                    style="height:200px" type="text" class="form-control round-form"
                                                    name="informasi_tambahan"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 col-sm-2 control-label">Form Pendaftaran</label>
                                            <div class="col-sm-10">
                                                <input type="checkbox" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /form group -->
                                    <div class="showback">
                                        <button type="submit" class="btn btn-round btn-primary"
                                            value="save">Save</button>
                                        <button type="submit" class="btn btn-round btn-danger" name="cancel"
                                            value="cancel" formnovalidate>Cancel</button>
                                    </div>
                                </section>
                            </section>
                        </div>
                    </form>
                </div>

            </div>
            <!-- End of Main Content -->
            <!-- Modal -->

            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Logout</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Apakah anda yakin ingin keluar?</p>
                        </div>
                        <div class="modal-footer">
                            <a type="button" class="alert alert-info" href=<?php echo base_url('logout')?>>Ya</a>
                            <button type="button" class="alert alert-info" data-dismiss="modal">Tidak</button>
                        </div>
                    </div>

                </div>
            </div>
            <?php include 'application/views/footer.php'?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src=<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>></script>
    <script src=<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>></script>

    <!-- Core plugin JavaScript-->
    <script src=<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>></script>

    <!-- Custom scripts for all pages-->
    <script src=<?php echo base_url('assets/js/sb-admin-2.min.js')?>></script>

    <!-- Page level plugins -->
    <script src=<?php echo base_url('assets/vendor/datatables/jquery.dataTables.min.js')?>></script>
    <script src=<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js')?>></script>

    <!-- Page level custom scripts -->
    <script src=<?php echo base_url('assets/js/demo/datatables-demo.js')?>></script>
    <!--script for this page-->
    <script src=<?php echo base_url('assets/js/jquery-ui-1.9.2.custom.min.js')?>></script>
    <!--custom switch-->
    <script src=<?php echo base_url('assets/js/bootstrap-switch.js')?>></script>

    <script>
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>

</body>

</html>