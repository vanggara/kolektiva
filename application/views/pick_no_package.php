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
<div class="modal fade" id="getTicket3" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">RSVP &nbsp</h4>
        <h4 class="modal-title" id="modal1-packagename"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form id="payment-form2" method="post" action="<?php echo base_url();?>CUser/save_ticket_transaction2">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12 col-12 text-left">
              <div class="col-lg-9 col-9 text-left row">
                <p class="modal-title">Name: &nbsp </p>
                <p class="modal-title" id="fullName5"><?php echo $_SESSION['fullName'] ?></p>
              </div>
              <br>
              <div class="col-lg-9 col-9 text-left row">
                <p class="modal-title">Event Date: &nbsp</p>
                <p class="modal-title" id="modal1-date"></p>
              </div>
              <br>
              <div class="col-lg-9 col-9 text-left row">
                <p class="modal-title">Venue: &nbsp</p>
                <p class="modal-title" id="modal1-venue"></p>
              </div>
              <br>
              <div class="col-lg-9 col-9 text-left row">
                <p class="modal-title">Donasi: Rp.&nbsp </p>
                <input type="number" class="modal1-title" id="price5" name="price5">
                <!-- <p class="modal-title" id="modal-price3"></p> -->
              </div>
              <br>
              <div class="col-lg-9 col-9 text-left row">
                <p hidden class="modal-title">Gift: Rp.&nbsp </p>
                <p class="modal-title" id="modal1-gift"></p>
              </div>
              <hr>
              <div class="col-lg-9 col-9 text-left row">
                <input type="number" class="form-control form-control-user" id="gross_amount5" name="gross_amount5">
                <input type="number" class="modal-title" id="total_ticket5" name="quantity5">
              </div>
              <hr>
            </div>
            <br>
            <div class="form-group">
              <div class="row">
                <input hidden type="text" class="form-control form-control-user" id="emailRsvp2" name="emailRsvp5"
                  aria-describedby="emailHelp" placeholder="yourEmail@gmail.com" value=<?php echo $_SESSION['email'] ?>>
                </p>
                <input type="text" class="form-control form-control-user" type="text" id="order_id5" name="order_id5">
                <input type="text" class="form-control form-control-user" type="text" id="name5" name="name5">
                <input type="text" class="form-control form-control-user" type="text" id="first_name5"
                  name="first_name5">
                <input type="text" class="form-control form-control-user" type="text" id="id_gift5" name="id_gift5">
                <input type="text" class="form-control form-control-user" type="text" name="quantity5" value='1'>
              </div>
            </div>
            <div class="modal-body text-center">
              <button id="pay-button3" type="submit" class="bg-text-red">Buy Now</button>
            </div>
          </div>
      </form>
    </div>
  </div>
</div>

<?php endforeach ?>
<!-- TODO: Remove ".sandbox" from script src URL for production environment. Also input your client key in "data-client-key" -->
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-_hdan0rRy8sHtwJM"></script>
<script type="text/javascript">
  // data-* attributes to scan when populating modal values
  var ATTRIBUTES = ['packagename', 'price2', 'gift', 'date', 'venue'];

  $('[data-toggle="modal"]').on('click', function (e) {
    // convert target (e.g. the button) to jquery object
    var $target = $(e.target);
    // modal targeted by the button
    var modalSelector = $target.data('target');

    // iterate over each possible data-* attribute
    ATTRIBUTES.forEach(function (attributeName) {
      // retrieve the dom element corresponding to current attribute
      var $modalAttribute = $(modalSelector + ' #modal1-' + attributeName);
      var dataValue = $target.data(attributeName);

      // if the attribute value is empty, $target.data() will return undefined.
      // In JS boolean expressions return operands and are not coerced into
      // booleans. That way is dataValue is undefined, the left part of the following
      // Boolean expression evaluate to false and the empty string will be returned
      $modalAttribute.text(dataValue || '');
    });
    var strUser5 = 1;
    var price5 = document.getElementById('price5').value;
    var id_gift5 = document.getElementById('modal1-gift').innerHTML;
    window.eventName5 = document.getElementById('modal1-packagename').innerHTML;
    window.fullName5 = document.getElementById('fullName5').innerHTML;
    document.getElementById('gross_amount5').value = price5;
    document.getElementById('order_id5').value = 'C-' + Math.round((new Date()).getTime() / 1000);
    document.getElementById('name5').value = 'Package ' + window.eventName5;
    document.getElementById('first_name5').value = window.fullName5;
    document.getElementById('id_gift5').value = id_gift5;
  });
  
  $(function () {
    $("#pay-button3").click(function (event) {
      event.preventDefault();

      $.ajax({
        type: "post",
        url: '<?=base_url()?>index.php/CUser/token2',
        cache: false,
        data: $('#payment-form2').serialize(),

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
  // document.getElementById('pay-button3').onclick = function () {
  //   sessionStorage.setItem("idGift", document.getElementById('modal1-gift').innerHTML);
  //     // alert(sessionStorage.getItem("idGift")  );
  //   // var eventName = document.getElementById('modal-packagename').innerHTML;
  //   var packagename = document.getElementById('modal1-packagename').innerHTML;
  //   var mEmail = document.getElementById('emailRsvp2').value;
  //   var strUser2 = 1;
  //   var price2 = document.getElementById('price2').value;
  //   var summary = price2;
  //   // This is minimal request body as example.
  //   // Please refer to docs for all available options: https://snap-docs.midtrans.com/#json-parameter-request-body
  //   // TODO: you should change this gross_amount and order_id to your desire. 
  //   var requestBody = {
  //     transaction_details: {
  //       gross_amount: summary,
  //       // as example we use timestamp as order ID
  //       order_id: 'C-' + Math.round((new Date()).getTime() / 1000)
  //     },
  //     item_details: {
  //       name: 'Package ' + packagename,
  //       quantity: strUser2,
  //       price: price2
  //     },
  //     customer_details: {
  //       first_name: window.fullName,
  //       email: mEmail
  //     }
  //   }

  //   getSnapToken(requestBody, function (response) {
  //     var response = JSON.parse(response);
  //     console.log("new token response2", response);
  //     // Open SNAP payment popup, please refer to docs for all available options: https://snap-docs.midtrans.com/#snap-js
  //     snap.pay(response.token, {
  //       skipOrderSummary: false
  //     });
  //   })
  // };

  // // 
  // /**
  //  * Send AJAX POST request to checkout.php, then call callback with the API response
  //  * @param {object} requestBody: request body to be sent to SNAP API
  //  * @param {function} callback: callback function to pass the response
  //  */
  // function getSnapToken(requestBody, callback) {
  //   var xmlHttp = new XMLHttpRequest();
  //   xmlHttp.onreadystatechange = function () {
  //     if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
  //       callback(xmlHttp.responseText);
  //     }
  //   }
  //   xmlHttp.open("post", "http://localhost:8080/PROJECT_RUNDEVELOPER/kolektiva/checkout.php");
  //   xmlHttp.send(JSON.stringify(requestBody));
  // }
</script>