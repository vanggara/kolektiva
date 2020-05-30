<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rapid Bootstrap Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href=<?php echo base_url('assets/img/favicon.png')?> rel="icon">
    <link href=<?php echo base_url('assets/img/apple-touch-icon.png')?> rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href=<?php echo base_url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700')?>
        rel="stylesheet">

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

    <!-- Custom fonts for this template -->
    <link href=<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css')?> rel="stylesheet" type="text/css">
    <link
        href=<?php echo base_url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')?>
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href=<?php echo base_url('assets/css/sb-admin-2.css')?> rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href=<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.min.css')?> rel="stylesheet">

    <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
    <!--==========================
  Header
  ============================-->
    <?php include 'topbar.php' ?>

    <!--==========================
    Banner Section
  ============================-->

    <?php include 'banner.php' ?>

    <main id="main">

        <!--==========================
      Services Section
    ============================-->
        <section id="services" class="section-bg">
            <div class="container">
                <!-- Page Wrapper -->
                <div id="wrapper">

                    <!-- Content Wrapper -->
                    <div id="content-wrapper" class="d-flex flex-column">

                        <!-- Main Content -->
                        <div id="content">

                            <!-- Begin Page Content -->
                            <div class="container-fluid">

                                <!-- Page Heading -->
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h1 class="h3 mb-2 text-gray-800">Acara</h1>
                                    <div id="myBtnContainer">
                                        <button class="btn btn-primary" onclick="window.location.href = '<?php echo base_url() ?>CUser/crownfunding'"> Semua</button>
                                        <button class="btn btn-primary" onclick="window.location.href = '<?php echo base_url() ?>CUser/search/1'"> Tanpa Imbalan</button>
                                        <button class="btn btn-primary" onclick="window.location.href = '<?php echo base_url() ?>CUser/search/0'"> Dengan Imbalan</button>
                                    </div>
                                </div>
                                
                                <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

                                <!-- DataTales Example -->
                                
                                <div class="shadow mb-4">
                                    <div class="card-body">
                                            <!-- <div class="form-group">
                                                <label for="category">Filter by Category</label>
                                                <div id='category'>
                                                </div>
                                            </div> -->
                                            <br>
                                            <div class="row">
                                                <?php foreach ($content->result_array() as $key): ?>
                                                <?php if($key['donasi']==1){?>
                                                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s" onclick="window.location.href = '<?php echo base_url() ?>CUser/contribute/<?php echo $key['id'] ?>'">
                                                <?php } else{?>
                                                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s" onclick="window.location.href = '<?php echo base_url() ?>CUser/contribute3/<?php echo $key['id'] ?>'">
                                                <?php } ?>
                                                    <!-- Card -->
                                                    <div class="box filterDiv <?php echo $key['donasi'] ?>" style="width:270px;">
                                                        <!-- Card image -->
                                                        <img class="card-img-top"
                                                            src="<?php echo base_url('assets/uploads/campaign/')?><?php echo $key['image'] ?>"
                                                            alt="Card image cap">

                                                        <!-- Card content -->
                                                        <div class="card-body">

                                                            <!-- Title -->
                                                            <h4 class="card-title"><b><?php echo $key['eventName'] ?></b>
                                                            </h4>
                                                            <!-- Text -->
                                                            <p class="card-text"><?php echo $key['venue'] ?></p>
                                                            <!-- Button -->

                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- Card -->
                                                <?php endforeach ?>
                                            </div>
                                    </div>
                                </div>

                            </div>
                            <!-- End of Main Content -->

                        </div>
                        <!-- End of Content Wrapper -->

                    </div>
                    <!-- End of Page Wrapper -->
                </div>
        </section><!-- #services -->

        <!--==========================
    Footer
  ============================-->
        <section id="footer">

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong>Rapid</strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
        -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </section><!-- #footer -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        <!-- Uncomment below i you want to use a preloader -->

        <!-- JavaScript Libraries -->
        <script src=<?php echo base_url('assets/lib/jquery/jquery.min.js')?>></script>
        <script src=<?php echo base_url('assets/lib/jquery/jquery-migrate.min.js')?>></script>
        <script src=<?php echo base_url('assets/lib/bootstrap/js/bootstrap.bundle.min.js')?>></script>
        <script src=<?php echo base_url('assets/lib/easing/easing.min.js')?>></script>
        <script src=<?php echo base_url('assets/lib/mobile-nav/mobile-nav.js')?>></script>
        <script src=<?php echo base_url('assets/lib/wow/wow.min.js')?>></script>
        <script src=<?php echo base_url('assets/lib/waypoints/waypoints.min.js')?>></script>
        <script src=<?php echo base_url('assets/lib/counterup/counterup.min.js')?>></script>
        <script src=<?php echo base_url('assets/lib/owlcarousel/owl.carousel.min.js')?>></script>
        <script src=<?php echo base_url('assets/lib/isotope/isotope.pkgd.min.js')?>></script>
        <script src=<?php echo base_url('assets/lib/lightbox/js/lightbox.min.js')?>></script>
        <!-- Contact Form JavaScript File -->
        <script src=<?php echo base_url('assets/contactform/contactform.js')?>></script>

        <!-- Template Main Javascript File -->
        <script src=<?php echo base_url('assets/js/main.js')?>></script>


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

        <!--==========================
    Login Section
  ============================-->
        <?php include 'login.php' ?>
</body>

</html>
