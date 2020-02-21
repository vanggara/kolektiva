<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>KOLEKTIVA</title>

    <!-- Custom fonts for this template -->
    <link href='<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css')?>' rel="stylesheet"
        type="text/css">

    <!-- Custom styles for this template -->
    <link href=<?php echo base_url('assets/css/sb-admin-2.min.css')?> rel="stylesheet">

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
            <div class="logo float-left">
                <!-- Uncomment below if you prefer to use an image logo -->
                <h1 class="text-white">&nbsp KOLEKTIVA </h1>
                <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
            </div>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item -  -->
            <!-- Divider -->
            <!-- <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Service
      </div> -->
            <!-- Nav Item - Books -->

            <li class="nav-item active">
                <a class="nav-link" href="admin">
                    <!-- <i class="fas fa-fw fa-home"></i> -->
                    <span>Campaign</span></a>
            </li>
            <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
          aria-controls="collapseOne">
          <i class="fas fa-fw fa-book"></i>
          <span>Campaign</span>
        </a>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Campaign Services:</h6>
            <a class="collapse-item active" href="informasi-bootcamp">Daftar Campaign</a>
            <a class="collapse-item" href="jadwal_bootcamp">Jadwal</a>
            <a class="collapse-item" href="peserta_bootcamp">Peserta</a>
            <a class="collapse-item" href="latihan_soal">Latihan Soal</a>
            <a class="collapse-item" href="modul">Modul</a>
            <a class="collapse-item" href="sertifikat_bootcamp">Sertifikat Bootcamp</a>
          </div>
        </div>
      </li> -->

            <!-- Nav Item - User -->

            <li class="nav-item">
                <a class="nav-link" href="admin">
                    <!-- <i class="fas fa-fw fa-home"></i> -->
                    <span>Gift</span></a>
            </li>
            <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="fas fa-fw fa-user"></i>
          <span>Sertifikasi</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sertifikasi Services:</h6>
            <a class="collapse-item" href="informasi-sertifikasi">Informasi Sertifikasi</a>
            <a class="collapse-item" href="jadwal_sertifikasi">Jadwal</a>
            <a class="collapse-item" href="peserta_sertifikasi">Peserta</a>
          </div>
        </div>
      </li> -->

            <li class="nav-item">
                <a class="nav-link" href="admin">
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
                <?php include 'application/views/admin/topbar.php'?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-2 text-gray-800">New Campaign</h1>
                    </div>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->


                    <form action="<?php echo base_url();?>crud/action_tambah_anggota" method="post">
                        <div class="card-body">
                            <!--main content start-->
                            <section id="main-content">
                                <section class="wrapper">
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="eventName">Event Name</label>
                                            <input required type="text" class="form-control" id="eventName"
                                                name="eventName">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="eventDate">Event Date</label>
                                            <input required type="date" class="form-control" id="eventDate"
                                                name="eventDate">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label>Upload Poster</label>
                                            <div class="input-group">
                                                <input required type="text" name="image" accept="image/*"
                                                    class="file form-control" disabled placeholder="Upload File" />
                                                <span class="input-group-btn">
                                                    <span class="btn btn-primary btn-file">
                                                        Browse… <input required type="file" id="imgInp" name="imgInp" />
                                                    </span>
                                                </span>
                                            </div>
                                            <img src="https://placehold.it/80x80" style="height: 150px; width: 150px;"
                                                id="img-upload" class="img-thumbnail">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="ticket">Ticket Price</label>
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">Rp.</div>
                                                </div>
                                                <input required type="text" onkeypress="return isNumberKey(event)"
                                                    class="form-control round-form" name="ticket" id="ticket">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="venue">Instagram Name</label>
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">@</div>
                                                </div>
                                                <input type="text" class="form-control round-form" name="instagram"
                                                    id="instagram">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <label for="campaigner">Campaigner</label>
                                            <input required type="text" class="form-control" name="campaigner"
                                                id="campaigner">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="dueDate">Campaign Due Date</label>
                                            <input required type="date" class="form-control" name="dueDate"
                                                id="dueDate">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="venue">Event Venue</label>
                                            <input required type="text" class="form-control" name="venue" id="venue">
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                            <div class="row">
                                                <label for="target">Target</label>
                                                <div class="input-group mb-2 mr-sm-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">Rp.</div>
                                                    </div>
                                                    <input required type="text" onkeypress="return isNumberKey(event)"
                                                        class="form-control round-form" name="target" id="target">
                                                </div>
                                            </div>
                                        </div> -->

                                    <div class="form-group">
                                        <div class="row">
                                            <label for="detail">Detail</label>
                                            <textarea required style="height:200px" type="text"
                                                class="form-control round-form" name="detail"></textarea>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <div class="row">
                                            <label>Upload KTP</label>
                                            <div class="input-group my-3">
                                                <input required type="text" name="image" accept="image/*"
                                                    class="file form-control" disabled placeholder="Upload File" />
                                                <span class="input-group-btn">
                                                    <span class="btn btn-primary btn-file">
                                                        Browse… <input required type="file" id="imgKtp" name="imgKtp" />
                                                    </span>
                                                </span>
                                            </div>
                                            <img src="https://placehold.it/80x80" style="height: 150px; width: 150px;"
                                                id="img-ktp" class="img-thumbnail">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label>Upload Proposal</label>
                                            <div class="input-group my-3">
                                                <input required type="text" name="image" class="file form-control"
                                                    disabled placeholder="Upload File" />
                                                <span class="input-group-btn">
                                                    <span class="btn btn-primary btn-file">
                                                        Browse… <input required type="file" id="pdfProposal"
                                                            name="pdfProposal" size="50" />
                                                        <input type="hidden" />
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="submit" name="addGift" value="Add Gift"
                                                class="btn btn-primary btn-user btn-block">
                                                Save and Add Gift
                                            </button>
                                        </div>
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

        </div>
        <!-- End of Content Wrapper -->


    </div>
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
    <script src=<?php echo base_url('assets/js/sb-admin-2.js')?>></script>

    <!-- Page level plugins -->
    <script src=<?php echo base_url('assets/vendor/datatables/jquery.dataTables.js')?>></script>
    <script src=<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js')?>></script>

    <!-- Page level custom scripts -->
    <script src=<?php echo base_url('assets/js/demo/datatables-demo.js')?>></script>

    <!-- Page level custom scripts -->
    <script src=<?php echo base_url('assets/js/table.js')?>></script>
    <script src=<?php echo base_url('assets/js/hapus-popup.js')?>></script>
    <script src=<?php echo base_url('assets/js/is-number.js')?>></script>

</body>

</html>