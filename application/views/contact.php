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
    Footer
  ============================-->
        <section id="footer">
            <div class="footer-top">
                <div class="container">

                    <div class="row">

                        <div class="col-lg-6">

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="footer-links">
                                        <h3>KOLEKTIVA</h3>
                                        <h4>Contact Us</h4>
                                        <p>
                                            A108 Adam Street <br>
                                            New York, NY 535022<br>
                                            United States <br>
                                            <strong>Phone:</strong> +1 5589 55488 55<br>
                                            <strong>Email:</strong> info@example.com<br>
                                        </p>
                                    </div>

                                    <div class="social-links">
                                        <a href="#" class="twitter"><i class="fa fa-phone"></i></a>
                                        <a href="#" class="facebook"><i class="fa fa-at"></i></a>
                                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>

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
        <!-- <div id="preloader"></div> -->

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


        <!--==========================
    Login Section
  ============================-->
        <?php include 'login.php' ?>

</body>

</html>