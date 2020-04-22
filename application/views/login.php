
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
    
<!-- Modal -->

        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">LOGIN</h4>
              </div>
              <div class="modal-body">
                  <form class="user" method="post" action="<?php echo base_url();?>login">
                    <div class="form-group">
                      <div class="row">
                        <input type="text" class="form-control form-control-user" id="email" name="email"
                          aria-describedby="emailHelp" placeholder="E-mail">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <input type="password" class="form-control form-control-user" name="password" id="password"
                          placeholder="Password">
                      </div>
                    </div>
                    <hr>
                    <button type="submit" name="login" value="login" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    <hr>
                    <p>Belum punya akun? <a href="register">Daftar sekarang!</a></p>
                  </form>
              </div>
            </div>

          </div>
        </div>
