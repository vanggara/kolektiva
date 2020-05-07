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
                    <header class="section-header">
                        <h3>TENTANG KOLEKTIVA</h3>
                        <p>Kami mewujudkan solusi inovatif untuk pelaksanaan sebuah acara sehingga memudahkan panitia acara dan donatur melalui penggalangan dana secara daring berbasis donasi dan imbalan serta menyediakan pendaftaran untuk peserta yang ingin hadir pada acara tersebut</p>
                    </header>
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                            <div class="box" style="min-height: 284px; background: #FF7065">
                                <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-rose"
                                        style="color: #3fcdc7;"></i></div>
                                <h4 class="title"><a href="<?php echo base_url('CUser/crownfunding')?>">PENGGALANGAN DANA</a></h4>
                                <p class="description">Melakukan penggalangan dana berbasis donasi  ataupun hadiah sebagai dukungan untuk mewujudkan
                                sebuah acara.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                            <div class="box" style="min-height: 284px; background: #FF7065">
                                <div class="icon" style="background: #fceef3;"><i class="ion-ios-paperplane"
                                        style="color: #ff689b;"></i></div>
                                <h4 class="title"><a href="<?php echo base_url('CUser/campaign')?>">PENDAFTARAN PESERTA</a></h4>
                                <p class="description">Melakukan pendaftaran sebagai peserta pada sebuah acara yang ingin kita hadiri.</p>
                            </div>
                        </div>
                    </div>
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