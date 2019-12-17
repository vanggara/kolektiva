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

  <style>
    table,
    th,
    td {
      border: 1px solid black;
      padding: 5px;
      text-align: center;
    }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <!--==========================
  Header
  ============================-->
  <?php include 'topbar.php' ?>

  <!--==========================
    Banner Section
  ============================-->

  <!-- <?php include 'banner.php' ?> -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">

      <div class="container">
        <div class="row">

          <?php foreach ($content->result_array() as $key): ?>
          <div class="col-lg-6 col-md-6">
            <div class="about-img">
              <img src=<?php echo base_url('assets/uploads/'.$key['image'])?> alt="">
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="about-content">
              <h5 class="bg-text-red"><?php echo $key['category'] ?></h5>
              <div class="row">
                <div class="col-lg-4 col-4">
                  <h2><?php echo $key['eventName'] ?></h2>
                </div>
                <div class="col-lg-4 col-4">
                </div>
                <div class="col-lg-4 col-4">
                  <button class="btn btn-primary btn-user btn-block">
                  <a href="#" data-toggle="modal" data-target="#getTicket" style="color: black;">Get a ticket</a></button>
                </div>
              </div>
              <p>Will be held on Friday, <?php echo $key['eventDate'] ?><br>Follow us on Instagram:
                @<?php echo $key['instagram'] ?></p>
              <table>
                <tr>
                  <th>Campaigner</th>
                  <th>Due Date</th>
                  <th>Venue</th>
                </tr>
                <tr>
                  <th><?php echo $key['campaigner'] ?></th>
                  <th><?php echo $key['dueDate'] ?></th>
                  <th><?php echo $key['venue'] ?></th>
                </tr>
              </table>
              <p>
                <p><?php echo $key['detail'] ?></p>
              </p>
              <hr>
              <?php $datetime1 = new DateTime("now");
                $datetime2 = new DateTime($key['dueDate']);
                $interval = $datetime1->diff($datetime2);?>
              <div class="row counters">
                <div class="col-lg-4 col-4 text-center">
                  <?php if ($interval->format('%R%a') < 0) {?>
                  <p><span style="color: #FF7065;font-size: 30px;font-weight:bold">
                      Finish</p>
                  <?php } else{?>
                  <p><span style="color: #FF7065;font-size: 30px;font-weight:bold"
                      data-toggle="counter-up"><?php echo $interval->format('%R%a') ?></span>
                    More Days</p>
                  <?php } ?>
                </div>
                <div class="col-lg-2 col-2 text-center">
                </div>
                <div class="col-lg-6 col-6 text-center">
                  <p><span style="color: #FF7065;font-size: 30px;font-weight:bold" data-toggle="counter-up">60</span>%
                    to Rp.<?php echo $key['target'] ?></h4>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach ?>
        </div>
      </div>
    </section><!-- #about -->


    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <div class="owl-carousel clients-carousel">
          <div class="row flex-items-xs-middle flex-items-xs-center">
            <div class="card">
              <img src="assets/img/about-img.jpg" alt="">
              <p>Rp100.000</p>
              <p>Package 1<br>
                With package 1 you will get our
                merchandise T-Shirt.
              </p>
              <hr>
              <div class="row counters">
                <div class="col-lg-4 col-4 text-center">
                  <p><span style="color: #FF7065;font-size: 20px;font-weight:bold" data-toggle="counter-up">274</span>
                    Left</p>
                </div>
                <div class="col-lg-2 col-2 text-center">
                </div>
                <div class="col-lg-6 col-6 text-center">
                  <div class="btn bg-text-red">Pick This</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row flex-items-xs-middle flex-items-xs-center">
            <div class="card">
              <img src="assets/img/about-img.jpg" alt="">
              <p>Rp100.000</p>
              <p>Package 1<br>
                With package 1 you will get our
                merchandise T-Shirt.
              </p>
              <hr>
              <div class="row counters">
                <div class="col-lg-4 col-4 text-center">
                  <p><span style="color: #FF7065;font-size: 20px;font-weight:bold" data-toggle="counter-up">274</span>
                    Left</p>
                </div>
                <div class="col-lg-2 col-2 text-center">
                </div>
                <div class="col-lg-6 col-6 text-center">
                  <div class="btn bg-text-red">Pick This</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #clients -->
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
    <?php include 'get_a_ticket.php' ?>

</body>

</html>