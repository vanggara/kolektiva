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
  <?php require 'convertRupiahs.php' ?>
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
              <img src='<?php echo base_url('assets/uploads/campaign/'.$key['image'])?>' alt="">
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
                <?php $datetime1 = new DateTime("now");
                $datetime2 = new DateTime($key['dueDate']);
                $interval = $datetime1->diff($datetime2);?>
                <div class="col-lg-4 col-4">
                  <?php if ($interval->format('%R%a') < 0) {?>
                  <button disabled class="btn btn-primary btn-user btn-block">
                    <a style="color: black;">Too Late</a></button>
                  <?php } else{?>
                  <?php if(isset($_SESSION['login']) && $_SESSION['fullName']){?>
                    <button class="btn btn-primary btn-user btn-block">
                    <a href="#" data-toggle="modal" data-target="#getTicket2" style="color: black;"
                      data-packagename='Harap Dijawab <?php echo $key['eventName'] ?>' data-price2=<?php echo $key['price']?>
                      data-gift=<?php echo $key['id'] ?> data-date='<?php echo $key['eventDate'] ?>' data-venue='<?php echo $key['venue'] ?>'>Dapatkan
                      Tiket</a>
                  </button>
                  <?php } else{?>
                    <button class="btn btn-primary btn-user btn-block">
                    <a href="#" data-toggle="modal" style="color: black;" data-target="#sorryModal">Dapatkan Tiket</a>
                  </button>
                  <?php } ?>
                  <!-- <button class="btn btn-primary btn-user btn-block">
                    <a href="#" data-toggle="modal" data-target="#getTicket" style="color: black;">Get a
                      ticket</a></button> -->
                  <?php } ?>
                </div>
              </div>
              <p>Akan diadakan pada <?php 
              function getDay($date){
                $datetime = DateTime::createFromFormat('Y-m-d', $date);
                return $datetime->format('l');
               }
               
               function getHari($date){
                $day=getDay($date);
                switch ($day) {
                 case 'Sunday':
                  $hari = 'Minggu';
                  break;
                 case 'Monday':
                  $hari = 'Senin';
                  break;
                 case 'Tuesday':
                  $hari = 'Selasa';
                  break;
                 case 'Wednesday':
                  $hari = 'Rabu';
                  break;
                 case 'Thursday':
                  $hari = 'Kamis';
                  break;
                 case 'Friday':
                  $hari = 'Jum\'at';
                  break;
                 case 'Saturday':
                  $hari = 'Sabtu';
                  break;
                 default:
                  $hari = 'Tidak ada';
                  break;
                }
                return $hari;
               }
               
              echo getHari($key['eventDate']); ?>
              <!-- <?php echo DateTime::createFromFormat('Y-m-d', $key['eventDate'])->format('l'); ?> -->
              ,
                <?php echo $key['eventDate'] ?><br>Follow kami di Instagram:
                <a href="https://www.instagram.com/<?php echo $key['instagram'] ?>"
                  target="_blank">@<?php echo $key['instagram'] ?></a></p>
              <table>
                <tr>
                  <th>Penyelenggara</th>
                  <th>Batas Tanggal Kampanye</th>
                  <th>Tempat</th>
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
                      Selesai</p>
                  <?php } else{?>
                  <p><span style="color: #FF7065;font-size: 30px;font-weight:bold"
                      data-toggle="counter-up"><?php echo $interval->format('%R%a') ?></span>
                    Hari Lagi</p>
                  <?php } ?>
                </div>
                <div class="col-lg-2 col-2 text-center">
                </div>
                <div class="col-lg-6 col-6 text-center">
                  <p><span style="color: #FF7065;font-size: 30px;font-weight:bold"
                      data-toggle="counter-up"><?php echo $key['persentase'] ?></span>%
                    dari <?php echo rupiah($key['target']) ?>
                    </h4>
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

        <!-- <div class="owl-carousel clients-carousel"> -->
          <?php foreach ($content2->result_array() as $key):?>
          <div class="row flex-items-xs-middle flex-items-xs-center">
            <div class="card">
              <img style="height: 238px; width: 300px"
                src='<?php echo base_url('assets/uploads/gift/')?><?php echo $key['image'] ?>' alt="">
              <p>Donasi Sesukamu</p>
              <p><?php echo $key['package_name'] ?><br>
                <?php echo $key['detail'] ?>
              </p>
              <hr>
              <div class="row counters">
                <div class="col-lg-12 col-12 text-center">
                  <?php if(isset($_SESSION['login']) && $_SESSION['fullName']){?>
                  <button class="btn btn-primary btn-user btn-block">
                    <a href="#" data-toggle="modal" data-target="#getTicket2" style="color: white;"
                      data-packagename='Harap Jawab <?php echo $key['package_name'] ?>' data-price2=<?php echo $key['price']?>
                      data-gift=<?php echo $key['id'] ?> data-date='<?php echo $key['eventDate'] ?>' data-venue='<?php echo $key['venue'] ?>'>Pilih</a>
                  </button>
                  <?php } else{?>
                    <button class="btn btn-primary btn-user btn-block">
                    <a href="#" data-toggle="modal" style="color: white;" data-target="#sorryModal">Pilih</a>
                  </button>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach ?>

        <!-- </div> -->
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
    <?php include 'pick_this.php' ?>
    <?php include 'pick_no_package.php' ?>
</body>

</html>