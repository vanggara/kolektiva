
    <header id="header">
        <div class="container">

            <div class="logo float-left">
                <!-- Uncomment below if you prefer to use an image logo -->
                <h1 class="text-light"><a href="home" class="scrollto"><span>KOLEKTIVA</span></a></h1>
                <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
            </div>

            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="dashboard">Dashboard</a></li>
                    <li><a href="contact">Contact</a></li>
                    <?php if(isset($_SESSION['login']) && $_SESSION['fullName']){?>
                    <li class="drop-down btn btn-primary btn-user"><a href="" style="color:white;"><?php echo $_SESSION['fullName'] ?></a>
                        <ul>
                            <li><a href="logout">Logout</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                            <li><a href="#">Drop Down 5</a></li>
                        </ul>
                    </li>
                    <?php } else{?>
                    <li class="btn btn-primary btn-user"><a href="#" data-toggle="modal" data-target="#myModal"
                            style="color:white;">Login</a></li>
                    <?php } ?>
                </ul>
            </nav><!-- .main-nav -->

        </div>
    </header><!-- #header -->

    <!--==========================
    Banner Section
  ============================-->