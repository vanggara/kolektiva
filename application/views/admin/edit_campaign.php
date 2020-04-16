<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>KOLEKTIVA</title>

    <!-- Custom fonts for this template-->
    <link href=<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css')?> rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href=<?php echo base_url('assets/css/sb-admin-2.css')?> rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href=<?php echo base_url('assets/lib/bootstrap/css/bootstrap.min.css')?> rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href=<?php echo base_url('assets/lib/font-awesome/css/font-awesome.min.css')?> rel="stylesheet">
    <link href=<?php echo base_url('assets/lib/animate/animate.min.css')?> rel="stylesheet">
    <link href=<?php echo base_url('assets/lib/ionicons/css/ionicons.min.css')?> rel="stylesheet">
    <link href=<?php echo base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css')?> rel="stylesheet">
    <link href=<?php echo base_url('assets/lib/lightbox/css/lightbox.min.css')?> rel="stylesheet">

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

            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <!-- <i class="fas fa-fw fa-book"></i> -->
                    <span>Campaign</span>
                </a>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Campaign Services:</h6>
                        <a class="collapse-item active" href="<?php echo base_url('CAdmin/campaign')?>">List
                            Campaign</a>
                        <a class="collapse-item" href="<?php echo base_url('CAdmin/transaction_ticket')?>">Transaction Ticket</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - User -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <!-- <i class="fas fa-fw fa-user"></i> -->
                    <span>Gift</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Gift Services:</h6>
                        <a class="collapse-item" href="<?php echo base_url('CAdmin/gift')?>">Gift List</a>
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
                        <h1 class="h3 mb-2 text-gray-800">Edit Campaign</h1>
                    </div>
                    <?php foreach ($content->result_array() as $key): ?>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->
                    <form class="user" action="<?php echo base_url();?>CAdmin/action_edit_campaign/<?php echo $key['id']?>" method="post"
                        enctype="multipart/form-data">
                        <div class="card-body">
                            <!--main content start-->
                            <section id="main-content">
                                <section class="wrapper">
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="category">Category</label>
                                            <select class="form-control " id="category" name="category">
                                                <?php foreach ($content2->result_array() as $key2): ?>
                                                <option><?php echo $key2['category_name'] ?></option>
                                                <?php endforeach ?>
                                            </select>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="eventName">Event Name</label>
                                            <input required type="text" class="form-control" id="eventName"
                                                name="eventName" value="<?php echo $key['eventName'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="eventDate">Event Date</label>
                                            <input required type="date" class="form-control" id="eventDate"
                                                name="eventDate" value="<?php echo $key['eventDate'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label>Upload Poster (Allowed file: .JPG, .JPEG, .PNG)</label>
                                            <div class="input-group">
                                                <input required type="text" name="imgInp" accept="image/*"
                                                    class="file form-control" readonly="readonly" placeholder="Upload File" value="<?php echo $key['image'] ?>"/>
                                                <span class="input-group-btn">
                                                    <span class="btn btn-primary btn-file">
                                                        Browse… <input type="file" id="imgInp2" name="imgInp2" />
                                                    </span>
                                                </span>
                                            </div>
                                            <img style="height: 150px; width: 150px;"
                                                id="img-upload" class="img-thumbnail" src="<?php echo base_url()?>assets/uploads/campaign/<?php echo $key['image']?>">
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
                                                    class="form-control round-form" name="ticket" id="ticket" value="<?php echo $key['price'] ?>">
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
                                                    id="instagram" value="<?php echo $key['instagram'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <label for="campaigner">Campaigner</label>
                                            <input required type="text" class="form-control" name="campaigner"
                                                id="campaigner" value="<?php echo $key['campaigner'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="dueDate">Campaign Due Date</label>
                                            <input required type="date" class="form-control" name="dueDate"
                                                id="dueDate" value="<?php echo $key['dueDate'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="venue">Event Venue</label>
                                            <input required type="text" class="form-control" name="venue" id="venue" value="<?php echo $key['venue'] ?>">
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
                                                class="form-control round-form" name="detail" value="<?php echo $key['detail'] ?>"><?php echo $key['detail'] ?></textarea>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <div class="row">
                                            <label>Upload KTP (Allowed file: .JPG, .JPEG, .PNG)</label>
                                            <div class="input-group my-3">
                                                <input required type="text" name="imgKtp"
                                                    class="file form-control"  readonly="readonly" placeholder="Upload File" value="<?php echo $key['imageKtp'] ?>"/>
                                                <span class="input-group-btn">
                                                    <span class="btn btn-primary btn-file">
                                                        Browse… <input type="file" id="imgKtp2" name="imgKtp2" accept = "image/jpeg , image/jpg, image/png"/>
                                                    </span>
                                                </span>
                                            </div>
                                            <img src="<?php echo base_url()?>assets/uploads/campaign/<?php echo $key['imageKtp']?>" style="height: 150px; width: 150px;"
                                                id="img-ktp" class="img-thumbnail">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label>Upload Proposal (Only accepts a .PDF file)</label>
                                            <div class="input-group my-3">
                                                <input required type="text" name="pdfProposal" class="file form-control"
                                                readonly="readonly" placeholder="Upload File" value="<?php echo $key['proposal'] ?>"/>
                                                <span class="input-group-btn">
                                                    <span class="btn btn-primary btn-file">
                                                        Browse… <input type="file" id="pdfProposal2"
                                                            name="pdfProposal2" size="50" />
                                                        <input type="hidden" />
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="submit" name="submit" value="Add Gift"
                                                class="btn btn-primary btn-user btn-block">
                                                Save
                                            </button>
                                        </div>
                                    </div>
                                </section>
                            </section>
                        </div>
                    </form>
                    <?php endforeach ?>
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
    <script src=<?php echo base_url('assets/vendor/jquery/jquery.js')?>></script>
    <script src=<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>></script>

    <!-- Core plugin JavaScript-->
    <script src=<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>></script>

    <!-- Custom scripts for all pages-->
    <script src=<?php echo base_url('assets/js/sb-admin-2.min.js')?>></script>
    <!-- Page level custom scripts -->
    <script src=<?php echo base_url('assets/js/table.js')?>></script>
    <script src=<?php echo base_url('assets/js/hapus-popup.js')?>></script>
    <script src=<?php echo base_url('assets/js/is-number.js')?>></script>

</body>

</html>