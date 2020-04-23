<header id="header">
    <div class="container">

        <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <h1 class="text-light"><a href=<?php echo base_url('home')?> class="scrollto"><span>KOLEKTIVA</span></a></h1>
            <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
        </div>

        <nav class="main-nav float-right d-none d-lg-block">
            <ul>
                <li><a href=<?php echo base_url('home')?>>Home</a></li>
                <?php if(isset($_SESSION['login']) && $_SESSION['fullName']){?>
                <li><a href=<?php echo base_url('dashboard')?>>Dashboard</a></li>
                <?php } else{?>
                <li><a data-toggle="modal" href="#" data-target="#dashboard">Dashboard</a></li>
                <?php } ?>
                <li><a href=<?php echo base_url('contact')?>>Contact</a></li>
                <?php if(isset($_SESSION['login']) && $_SESSION['fullName']){?>
                <li class="drop-down btn btn-primary"><a href=""
                        style="color:white;"><?php echo $_SESSION['fullName'] ?></a>
                    <ul>
                        <li><a href=<?php echo base_url('logout')?>>Logout</a></li>
                    </ul>
                </li>
                <?php } else{?>
                <li class="btn btn-primary"><a href="#" data-toggle="modal" data-target="#myModal"
                        style="color:white;">Login</a></li>
                <?php } ?>
            </ul>
        </nav><!-- .main-nav -->

    </div>
</header><!-- #header -->

<!-- Modal -->

<div class="modal fade" id="dashboard" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Maaf, Anda harus login terlebih dahulu!</h4>
            </div>
            <div class="modal-body text-center">
                <button type="button" class="bg-text-red" data-dismiss="modal">OK</button>
            </div>
        </div>

    </div>
</div>