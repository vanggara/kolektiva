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
<?php foreach ($content2->result_array() as $key): ?>
<div class="modal fade" id="getTicket2" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"> &nbsp</h4>
        <h4 class="modal-title" id="modal-packagename"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form id="payment-form" method="post" action="<?php echo base_url();?>save-ticket-transaction">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12 col-12 text-left">
              <div class="col-lg-9 col-9 text-left row">
                <p class="modal-title">Nama: &nbsp </p>
                <p class="modal-title" id="fullName2"><?php echo $_SESSION['fullName'] ?></p>
              </div>
              <br>
              <div class="col-lg-9 col-9 text-left row">
                <p class="modal-title">Tanggal Pelaksanaan Acara: &nbsp</p>
                <p class="modal-title" id="modal-date"></p>
              </div>
              <br>
              <div class="col-lg-9 col-9 text-left row">
                <p class="modal-title">Tempat: &nbsp</p>
                <p class="modal-title" id="modal-venue"></p>
              </div>
              <br>
              <div class="col-lg-9 col-9 text-left row">
                <p class="modal-title">Harga: Rp.&nbsp </p>
                <p class="modal-title" id="modal-price2"></p>
              </div>
              <br>
              <div class="col-lg-9 col-9 text-left row">
                <p hidden class="modal-title">Gift: &nbsp </p>
                <p hidden class="modal-title" id="modal-gift"></p>
                <p class="modal-title" id="modal-campaign"></p>
              </div>
              <div class="col-lg-9 col-9 text-left row">
                <p hidden class="modal-title">Total Bayar: Rp. &nbsp</p>
                <p hidden class="modal-title" id="total_price2"></p>
              </div>
              <hr>
            </div>
            
            <!-- <div class="col-lg-12 col-12 text-left row">
                <p  id="lbl_total_ticket2" class="modal-title">&nbsp Jumlah paket yang dibeli&nbsp </p>
                <input type="number" class="modal-title" id="total_ticket21" name="quantity21">
              </div> -->
            <div class="col-lg-12 col-12 text-center">
              <div class="col-lg-12 col-12 text-center">
                <div class="form-group">
                  <div class="row">
                    <label id="lbl_total_ticket2" for="total_ticket2">&nbsp Total Tiket</label>
                    <!-- <input type="number" class="modal-title" id="total_ticket2" name="quantity"> -->
                    <select class="form-control" id="total_ticket2" name="quantity">
                      <option value='1' onclick="cek2()">1</option>
                      <option value='2' onclick="cek2()">2</option>
                      <option value='3' onclick="cek2()">3</option>
                      <option value='4' onclick="cek2()">4</option>
                      <option value='5' onclick="cek2()">5</option>
                    </select>
                    <br>
                  </div>
                </div>
              </div>
            </div>
            <hr>
          </div>
          <br>
          <div class="form-group">
            <div class="row">
              <input  type="text" class="form-control form-control-user" id="emailRsvp2" name="emailRsvp2"
                aria-describedby="emailHelp" placeholder="yourEmail@gmail.com" value=<?php echo $_SESSION['email'] ?>>
              <input  type="text" class="form-control form-control-user" type="text" id="gross_amount"
                name="gross_amount">
              <input  type="number" class="modal1-title" id="price2" name="price2">
              <input  type="text" class="form-control form-control-user" type="text" id="order_id" name="order_id">
              <input  type="text" class="form-control form-control-user" type="text" id="name2" name="name">
              <input  type="text" class="form-control form-control-user" type="text" id="first_name" name="first_name">
              <input  type="text" class="form-control form-control-user" type="text" id="id_gift2" name="id_gift">
              <input  type="text" class="form-control form-control-user" type="text" id="isCampaign" name="isCampaign">
              </p>
            </div>
          </div>
          <div class="modal-body text-center">
            <button id="pay-button2" type="submit" class="bg-text-red">Lanjut</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php endforeach ?>
<!-- TODO: Remove ".sandbox" from script src URL for production environment. Also input your client key in "data-client-key" -->
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-_hdan0rRy8sHtwJM"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript">
  // data-* attributes to scan when populating modal values
  var ATTRIBUTES = ['packagename', 'price2', 'campaign4', 'gift', 'date', 'venue'];

  $('[data-toggle="modal"]').on('click', function (e) {
    // convert target (e.g. the button) to jquery object
    var $target = $(e.target);
    // modal targeted by the button
    var modalSelector = $target.data('target');

    // iterate over each possible data-* attribute
    ATTRIBUTES.forEach(function (attributeName) {
      // retrieve the dom element corresponding to current attribute
      var $modalAttribute = $(modalSelector + ' #modal-' + attributeName);
      var dataValue = $target.data(attributeName);

      // if the attribute value is empty, $target.data() will return undefined.
      // In JS boolean expressions return operands and are not coerced into
      // booleans. That way is dataValue is undefined, the left part of the following
      // Boolean expression evaluate to false and the empty string will be returned
      $modalAttribute.text(dataValue || '');
    });
    $('#getTicket2').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var campaign = button.data('campaign') // Extract info from data-* attributes
      $(this).find(".modal-campaign").text(campaign);
      document.getElementById('camp').value = $(this).find(".modal-campaign").text(campaign);
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      // var modal = $(this)
      // modal.find('.modal-title').text('New message to ' + recipient)
      // modal.find('.modal-body input').val(recipient)
    })

    var total_ticket2 = document.getElementById("total_ticket2");
    if(document.getElementById('modal-price2').innerHTML==''){
      document.getElementById("lbl_total_ticket2").style.visibility = "hidden";
      document.getElementById("modal-price2").style.visibility = "hidden";
      document.getElementById("price2").style.display  = "block";
      $('#total_ticket2').prop('hidden', true);
      total_ticket2.options[total_ticket2.selectedIndex].value = 1;
      window.strUser2 = total_ticket2.options[total_ticket2.selectedIndex].value;
      window.price2 = document.getElementById("price2").value;
      window.summary2 = price2 * strUser2;
      $("#price2").bind("input", function() {
        document.getElementById('total_price2').innerHTML = $("#price2").val();
        document.getElementById('gross_amount').value = $("#price2").val();
      });
      // document.getElementById('gross_amount').value = window.summary2;
      document.getElementById('total_price2').innerHTML = window.summary2;
      document.getElementById('price2').value = window.price2;
    }else{
      document.getElementById("lbl_total_ticket2").style.visibility = "visible";
      $('#total_ticket2').prop('hidden', false);
      window.strUser2 = total_ticket2.options[total_ticket2.selectedIndex].value;
      document.getElementById("modal-price2").style.visibility = "visible";
      document.getElementById("price2").value = document.getElementById("modal-price2").innerHTML;
      document.getElementById("price2").style.display  = "none";
      window.price2 = document.getElementById("price2").value;
      window.summary2 = price2 * strUser2;
      document.getElementById('gross_amount').value = window.summary2;
      document.getElementById('total_price2').innerHTML = window.summary2;
      document.getElementById('price2').value = window.price2;
    }
    window.eventName2 = document.getElementById('modal-packagename').innerHTML;
    window.fullName2 = document.getElementById('fullName2').innerHTML;
    var id_gift2 = document.getElementById('modal-gift').innerHTML;
    var order_id = document.getElementById('modal-packagename').innerHTML;
    var myarr = order_id.split(" ");
    if(myarr[1]=="Dijawab"){
      document.getElementById('order_id').value = 'C-' + Math.round((new Date()).getTime() / 1000);
    }else{
      document.getElementById('order_id').value = 'G-' + Math.round((new Date()).getTime() / 1000);
    }
    document.getElementById('name2').value = 'Package ' + window.eventName2;
    document.getElementById('first_name').value = window.fullName2;
    document.getElementById('id_gift2').value = id_gift2;
  });


  function cek2() {
    var id_gift2 = document.getElementById('modal-gift').innerHTML;
    var total_ticket2 = document.getElementById("total_ticket2");
    window.price2 = document.getElementById('modal-price2').innerHTML;
    window.strUser2 = total_ticket2.options[total_ticket2.selectedIndex].value;
    window.summary2 = price2 * strUser2;
    window.eventName2 = document.getElementById('modal-packagename').innerHTML;
    window.fullName2 = document.getElementById('fullName2').innerHTML;
    document.getElementById('total_price2').innerHTML = window.summary2;
    document.getElementById('gross_amount').value = window.summary2;
    document.getElementById('order_id').value = 'C-' + Math.round((new Date()).getTime() / 1000);
    document.getElementById('name2').value = 'Package ' + window.eventName2;
    document.getElementById('first_name').value = window.fullName2;
    document.getElementById('id_gift2').value = id_gift2;
    document.getElementById('price2').value = window.price2;
  }
  $(function () {
    $("#pay-button2").click(function (event) {
      event.preventDefault();
      var harga = window.price2;

      $.ajax({
        type: "post",
        url: '<?=base_url()?>index.php/CUser/token',
        cache: false,
        data: $('#payment-form').serialize(),

        success: function (data) {
          //location = data;

          console.log('token = ' + data);

          var resultType = document.getElementById('result-type');
          var resultData = document.getElementById('result-data');

          function changeResult(type, data) {
            $("#result-type").val(type);
            $("#result-data").val(JSON.stringify(data));
            // resultType.innerHTML = type;
            // window.price2 = JSON.stringify(data);
            // window.strUser2 = JSON.stringify(data);
          }

          snap.pay(data, {

            onSuccess: function (result) {
              changeResult('success', result);
              console.log(result.status_message);
              console.log(result);
              $("#payment-form").submit();
            },
            onPending: function (result) {
              changeResult('pending', result);
              console.log(result.status_message);
              $("#payment-form").submit();
            },
            onError: function (result) {
              changeResult('error', result);
              console.log(result.status_message);
              $("#payment-form").submit();
            }
          });
        }
      });
    });
  });
</script>