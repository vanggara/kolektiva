    <section id="intro" class="clearfix">
        <div class="container d-flex h-100">
            <div class="row justify-content-center align-self-center">
                <div class="col-md-12 intro-info order-md-first order-last">
                    <h2>Sebuah wadah penggalangan dana daring untuk mewujudkan sebuah acara secara kolektif.</h2>
                    <div class="row">
                    <?php if(isset($_SESSION['login'])){ ?>
                        <a href="<?php echo base_url('add-campaign')?>" class="btn-get-started scrollto">Buat Kampanye Acaramu</a>
                    <?php } else{?>
                        <a href="#" data-toggle="modal" data-target="#sorryModal" class="btn-get-started scrollto">Buat Kampanye Acaramu</a>
                        <a href="register" class="btn-get-started scrollto">Daftar</a>
                    <?php } ?>
                    </div>
                </div>

                <div class="col-md-6 intro-img order-md-last order-first">
                    <!-- <img src=<?php echo base_url('assets/img/intro-img.svg')?> alt="" class="img-fluid"> -->
                </div>
            </div>

        </div>
    </section><!-- #intro -->

    
<!-- Modal -->

<div class="modal fade" id="sorryModal" role="dialog">
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