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
        <h4 class="modal-title">RSVP &nbsp</h4>
        <h4 class="modal-title" id="modal-packagename"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-12 col-12 text-left">
            <div class="col-lg-9 col-9 text-left row">
              <p class="modal-title">Name: &nbsp </p>
              <p class="modal-title" id="fullName2"><?php echo $_SESSION['fullName'] ?></p>
            </div>
            <br>
            <div class="col-lg-9 col-9 text-left row">
              <p class="modal-title">Event Date: &nbsp</p>
              <p class="modal-title" id="modal-date"></p>
            </div>
            <br>
            <div class="col-lg-9 col-9 text-left row">
              <p class="modal-title">Venue: &nbsp</p>
              <p class="modal-title" id="modal-venue"></p>
            </div>
            <br>
            <div class="col-lg-9 col-9 text-left row">
              <p class="modal-title">Price: Rp.&nbsp </p>
              <p class="modal-title" id="modal-price2"></p>
            </div>
            <br>
            <div class="col-lg-9 col-9 text-left row">
              <p hidden class="modal-title">Gift: Rp.&nbsp </p>
              <p hidden class="modal-title" id="modal-gift"></p>
            </div>
            <hr>
            <div class="col-lg-9 col-9 text-left row">
              <p class="modal-title">Total Pay: Rp. &nbsp</p>
              <p class="modal-title" id="total_price2"></p>
            </div>
            <hr>
          </div>
          <div class="col-lg-3 col-3 text-center">
            <div class="col-lg-12 col-12 text-center">
              <div class="form-group">
                <div class="row">
                  <label for="total_ticket2">&nbsp Count</label>
                  <select class="form-control" id="total_ticket2" name="total_ticket">
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
            <input hidden type="text" class="form-control form-control-user" id="emailRsvp2" name="emailRsvp2"
              aria-describedby="emailHelp" placeholder="yourEmail@gmail.com" value=<?php echo $_SESSION['email'] ?>></p>
          </div>
        </div>
        <div class="modal-body text-center">
          <button id="pay-button2" type="submit" class="bg-text-red">Buy Now</button>
        </div>
      </div>

    </div>
  </div>
  </div>

  <?php endforeach ?>
  <!-- TODO: Remove ".sandbox" from script src URL for production environment. Also input your client key in "data-client-key" -->
  <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-_hdan0rRy8sHtwJM"></script>
  <script type="text/javascript">
    // data-* attributes to scan when populating modal values
    var ATTRIBUTES = ['packagename', 'price2','gift', 'date', 'venue'];

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

      var total_ticket2 = document.getElementById("total_ticket2");
      window.price2 = document.getElementById('modal-price2').innerHTML;
      window.strUser2 = total_ticket2.options[total_ticket2.selectedIndex].value;
      window.summary2 = price2 * strUser2;
      window.eventName2 = document.getElementById('modal-packagename').innerHTML;
      window.fullName2 = document.getElementById('fullName2').innerHTML;
      document.getElementById('total_price2').innerHTML = window.summary2;
      var id_gift = document.getElementById('modal-gift').innerHTML;
    });


    function cek2() {
      var total_ticket2 = document.getElementById("total_ticket2");
      window.price2 = document.getElementById('modal-price2').innerHTML;
      window.strUser2 = total_ticket2.options[total_ticket2.selectedIndex].value;
      window.summary2 = price2 * strUser2;
      window.eventName2 = document.getElementById('modal-packagename').innerHTML;
      window.fullName2 = document.getElementById('fullName2').innerHTML;
      document.getElementById('total_price2').innerHTML = window.summary2;
    }

    document.getElementById('pay-button2').onclick = function () {
      sessionStorage.setItem("idGift", document.getElementById('modal-gift').innerHTML);
        // alert(sessionStorage.getItem("idGift"));
      var mEmail = document.getElementById('emailRsvp2').value;
      // This is minimal request body as example.
      // Please refer to docs for all available options: https://snap-docs.midtrans.com/#json-parameter-request-body
      // TODO: you should change this gross_amount and order_id to your desire. 
      var requestBody = {
        transaction_details: {
          gross_amount: window.summary2,
          // as example we use timestamp as order ID
          order_id: 'C-' + Math.round((new Date()).getTime() / 1000)
        },
        item_details: {
          name: 'Package ' + window.eventName2,
          quantity: window.strUser2,
          price: window.price2
        },
        customer_details: {
          first_name: window.fullName,
          email: mEmail
        }
      }

      getSnapToken(requestBody, function (response) {
        var response = JSON.parse(response);
        console.log("new token response", response);
        // Open SNAP payment popup, please refer to docs for all available options: https://snap-docs.midtrans.com/#snap-js
        snap.pay(response.token, {
          skipOrderSummary: false
        });
      })
    };

    // 
    /**
     * Send AJAX POST request to checkout.php, then call callback with the API response
     * @param {object} requestBody: request body to be sent to SNAP API
     * @param {function} callback: callback function to pass the response
     */
    function getSnapToken(requestBody, callback) {
      var xmlHttp = new XMLHttpRequest();
      xmlHttp.onreadystatechange = function () {
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
          callback(xmlHttp.responseText);
        }
      }
      xmlHttp.open("post", "http://localhost/PROJECT_RUNDEVELOPER/kolektiva/checkout.php");
      xmlHttp.send(JSON.stringify(requestBody));
    }
  </script>