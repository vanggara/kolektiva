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
    <!-- Main Stylesheet File -->
    <link href=<?php echo base_url('assets/css/style.css')?> rel="stylesheet">

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

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <!-- <i class="fas fa-fw fa-book"></i> -->
                    <span>Campaign</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Campaign Services:</h6>
                        <a class="collapse-item" href="<?php echo base_url('CAdmin/campaign')?>">List
                            Campaign</a>
                        <a class="collapse-item" href="<?php echo base_url('CAdmin/transaction_ticket')?>">Transaction Ticket</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - User -->

            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <!-- <i class="fas fa-fw fa-user"></i> -->
                    <span>Gift</span>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Gift Services:</h6>
                        <a class="collapse-item active" href="<?php echo base_url('CAdmin/gift')?>">Gift List</a>
                        <a class="collapse-item" href="<?php echo base_url('CAdmin/transaction_gift')?>">Transaction Gift</a>
                    </div>
                </div>
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
                        <!-- <a class="collapse-item" href="ganti_password">Ganti Password</a> -->
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
                        <h1 class="h3 mb-2 text-gray-800">Gift</h1>
                        <a href="<?php echo base_url('CAdmin/tambah_gift')?>"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-60"></i> Tambah</a>
                    </div>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">List Gift</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="card-body">
                                    <label for="category">Filter by Campaign Name</label>
                                    <div id='category'>
                                    </div>
                                </div>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Campaign Name</th>
                                            <th>Package Name</th>
                                            <th>Price</th>
                                            <th>Detail</th>
                                            <th>Gift Stock</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php $no=1; foreach ($content->result_array() as $key): ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $key['eventName'] ?></td>
                                        <td><?php echo $key['package_name'] ?></td>
                                        <td><?php echo $key['price'] ?></td>
                                        <td><?php echo $key['detail'] ?></td>
                                        <td><?php echo $key['gift_stock'] ?></td>
                                        <td>
                                            <button class="btn btn-primary btn-xs"
                                                onclick="window.location.href = '<?php echo base_url() ?>CAdmin/edit_gift/<?php echo $key['id'] ?>'"><i
                                                    class="fa fa-edit"></i></button>
                                            <button class="btn btn-danger btn-xs"
                                                onclick="hapus('<?php echo base_url() ?>CAdmin/hapus_gift/<?php echo $key['id'] ?>');"><i
                                                    class="fa fa-trash "></i></button>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
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
                                    <a type="button" class="alert alert-info"
                                        href=<?php echo base_url('logout')?>>Ya</a>
                                    <button type="button" class="alert alert-info" data-dismiss="modal">Tidak</button>
                                </div>
                            </div>

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
    <script src=<?php echo base_url('assets/js/approve-popup.js')?>></script>

</body>

</html>