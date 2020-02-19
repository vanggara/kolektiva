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
        <h4 class="modal-title">RSVP &nbsp</h4>
        <h4 class="modal-title" id="event_name"><?php echo $key['eventName'] ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-9 col-9 text-left">
            <div class="col-lg-9 col-9 text-left row">
              <p class="modal-title">Name: &nbsp</p>
              <p class="modal-title" id="fullName"><?php echo $_SESSION['fullName'] ?></p>
            </div>
            <br>
            <div class="col-lg-9 col-9 text-left row">
              <p class="modal-title">Event Name: &nbsp</p>
              <p class="modal-title"><?php echo $key['eventName'] ?></p>
            </div>
            <br>
            <div class="col-lg-9 col-9 text-left row">
              <p class="modal-title">Event Date: &nbsp</p>
              <p class="modal-title"><?php echo $key['eventDate'] ?></p>
            </div>
            <br>
            <div class="col-lg-9 col-9 text-left row">
              <p class="modal-title">Venue: &nbsp</p>
              <p class="modal-title"><?php echo $key['venue'] ?></p>
            </div>
            <br>
            <div class="col-lg-9 col-9 text-left row">
              <p class="modal-title">Price: Rp. &nbsp</p>
              <p class="modal-title" id="price"><?php echo $key['price'] ?></p>
            </div>
            <hr>
            <div class="col-lg-9 col-9 text-left row">
              <p class="modal-title">Total Pay: Rp. &nbsp</p>
              <p class="modal-title" id="total_price"><?php echo $key['price'] ?></p>
            </div>
            <hr>
          </div>
          <div class="col-lg-3 col-3 text-center">
            <div class="col-lg-12 col-12 text-center">
              <div class="form-group">
                <div class="row">
                  <label for="total_ticket">&nbsp Count</label>
                  <select class="form-control" id="total_ticket" name="total_ticket">
                    <option value='1' onclick="cek()">1</option>
                    <option value='2' onclick="cek()">2</option>
                    <option value='3' onclick="cek()">3</option>
                    <option value='4' onclick="cek()">4</option>
                    <option value='5' onclick="cek()">5</option>
                  </select>
                  <br>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
              <input hidden type="text" class="form-control form-control-user" id="emailRsvp" name="emailRsvp"
                aria-describedby="emailHelp" placeholder="yourEmail@gmail.com" value=<?php echo $_SESSION['email'] ?>></p>
          </div>
        </div>
      </div>
      <div class="modal-body text-center">
        <button id="pay-button" type="submit" class="bg-text-red">Buy Now</button>
      </div>
    </div>

  </div>
</div>
<?php endforeach ?>
<!-- TODO: Remove ".sandbox" from script src URL for production environment. Also input your client key in "data-client-key" -->
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-_hdan0rRy8sHtwJM"></script>
<script type="text/javascript">
  var total_ticket = document.getElementById("total_ticket");
  window.price = document.getElementById('price').innerHTML;
  window.strUser = total_ticket.options[total_ticket.selectedIndex].value;
  window.summary = price * strUser;
  window.eventName = document.getElementById('event_name').innerHTML;
  window.fullName = document.getElementById('fullName').innerHTML;
  document.getElementById('total_price').innerHTML = window.summary;

  function cek() {
    var total_ticket = document.getElementById("total_ticket");
    window.price = document.getElementById('price').innerHTML;
    window.strUser = total_ticket.options[total_ticket.selectedIndex].value;
    window.summary = price * strUser;
    window.eventName = document.getElementById('event_name').innerHTML;
    window.fullName = document.getElementById('fullName').innerHTML;
    document.getElementById('total_price').innerHTML = window.summary;
  }

  document.getElementById('pay-button').onclick = function () {
    var mEmail = document.getElementById('emailRsvp').value;
    // This is minimal request body as example.
    // Please refer to docs for all available options: https://snap-docs.midtrans.com/#json-parameter-request-body
    // TODO: you should change this gross_amount and order_id to your desire. 
    var requestBody = {
      transaction_details: {
        gross_amount: window.summary,
        // as example we use timestamp as order ID
        order_id: 'T-' + Math.round((new Date()).getTime() / 1000)
      },
      item_details: {
        name: 'Ticket ' + window.eventName,
        quantity: window.strUser,
        price: window.price
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