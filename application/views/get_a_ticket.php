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

<?php foreach ($content->result_array() as $key): ?>
<div class="modal fade" id="getTicket" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">RSVP</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-9 col-9 text-left">
                        <p class="modal-title">Rp. <?php echo $key['price'] ?></p>
                    </div>
                    <div class="col-lg-3 col-3 text-center">
                        <div class="form-group">
                            <div class="row">
                                <!-- <label for="total_ticket">Category</label> -->
                                <select class="form-control " id="total_ticket" name="total_ticket">
                                    <option>1</option>
                                </select>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-7 text-left">
                        <p class="modal-title">Choose Pay Method</p>
                    </div>
                    <div class="col-lg-5 col-5 text-center">
                        <div class="form-group">
                            <div class="row">
                                <!-- <label for="total_ticket">Category</label> -->
                                <select class="form-control " id="pay_method" name="pay_method">
                                    <option>Bank BCA</option>
                                </select>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <p>Order Summary</p>
                <p>Order Summary</p>
                <hr>
            </div>
            <div class="modal-body text-center">
                <button type="button" class="bg-text-red" data-dismiss="modal">Buy Now</button>
            </div>
        </div>

    </div>
</div>
<?php endforeach ?>