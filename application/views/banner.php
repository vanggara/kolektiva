    <section id="intro" class="clearfix">
        <div class="container d-flex h-100">
            <div class="row justify-content-center align-self-center">
                <div class="col-md-12 intro-info order-md-first order-last">
                    <h2>An online crowdfunding platfrom to make your event comes true by collectively</h2>
                    <div class="row">
                    <?php if(isset($_SESSION['login'])){ ?>
                        <a href="#about" class="btn-get-started scrollto">Make Your Campaign</a>
                    <?php } else{?>
                        <a href="#about" class="btn-get-started scrollto">Make Your Campaign</a>
                        <a href="register" class="btn-get-started scrollto">Sign Up</a>
                    <?php } ?>
                    </div>
                </div>

                <div class="col-md-6 intro-img order-md-last order-first">
                    <!-- <img src=<?php echo base_url('assets/img/intro-img.svg')?> alt="" class="img-fluid"> -->
                </div>
            </div>

        </div>
    </section><!-- #intro -->