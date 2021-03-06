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
  <link
    href=<?php echo base_url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')?>
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href=<?php echo base_url('assets/css/sb-admin-2.min.css')?> rel="stylesheet">

  
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

</head>

<body class="bg-gradient-primary">

    <!--==========================
  Header
  ============================-->
  <?php include 'topbar.php' ?>
  
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block">
                <img src="assets/img/konser1.jpeg" style='height: 100%; width: 100%; object-fit: cover'>
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <hr>
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Sign Up
                    </h1>
                  </div>
                  <hr>
                  <form class="user" method="post" action="<?php echo base_url();?>CUser/action_register">
                    <div class="form-group">
                      <div class="row">
                        <input type="text" class="form-control form-control-user" id="fullName" name="fullName"
                        placeholder="Full Name">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <input type="text" class="form-control form-control-user" id="email" name="email"
                          aria-describedby="emailHelp" placeholder="E-mail">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <input type="text" class="form-control form-control-user" 
                        onkeypress="return isNumberKey(event)" id="phoneNumber" name="phoneNumber" placeholder="Phone Number">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <input type="password" class="form-control form-control-user" name="password" id="password"
                          placeholder="Password">
                      </div>
                    </div>
                    <hr>
                    <button type="submit" name="register" value="register" class="btn btn-primary btn-user btn-block">
                      Create Account
                    </button>
                    <hr>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src=<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>></script>
  <script src=<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>></script>

  <!-- Core plugin JavaScript-->
  <script src=<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>></script>

  <!-- Custom scripts for all pages-->
  <script src=<?php echo base_url('assets/js/sb-admin-2.min.js')?>></script>

        <!--==========================
    Login Section
  ============================-->
        <?php include 'login.php' ?>

</body>

<script>
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>
</html>