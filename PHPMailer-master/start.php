<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>Payment-Gateway</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <?php include 'header-link.php' ?>
  <style>
    .input1_inner input {
      padding: 10px;
    }
  </style>
</head>

<body>
  <div class="preloader-bg"></div>
  <div id="preloader">
    <div id="preloader-status">
      <div class="preloader-position loader"> <span></span> </div>
    </div>
  </div>
  <!-- Progress scroll totop -->
  <div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <?php include 'menu.php' ?>
  <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/slider/banner.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-left caption mt-90">
          <h1>Payment Gateway</h1>
        </div>
      </div>
    </div>
  </div>
  <section id="menu" class=" menu section-padding bg-black">
    <div class="container fluid">
      <div class="row">
        <div class="col-md-6 booking-box" style="margin:auto">
          <form id="redirectForm" method="post" action="request.php">
            <div class="row">
              <div class="form-group input1_inner" style="display: none;">
                <label>App ID:</label><br>
                <input class="form-control" name="appId" value="2085107e5782293cd8b7f3872a015802" />
              </div>
              <div class="form-group input1_inner" style="display: none;">
                <label>Order Note:</label><br>
                <input class="form-control" name="orderNote" value="Desktop Payment" placeholder="Enter Order Note here (Ex. Test order)" />
              </div>
              <div class="form-group input1_inner" style="display: none;">
                <label>Order ID:</label><br>
                <input class="form-control" name="orderId" value="<?php $today = date("Ymd");
                                                                  $rand = strtoupper(substr(uniqid(sha1(time())), 0, 4));
                                                                  echo $unique = $today . $rand; ?>" placeholder="Enter Order ID here (Ex. order00001)" />
              </div>
              <div class="col-md-6">
                <div class="form-group input1_inner">
                  <label>Payable Amount:</label><br>
                  <input class="form-control" name="orderAmount" id="balancepay" placeholder="Enter Order Amount here (Ex. 100)" />
                </div>
              </div>

              <div class="form-group input1_inner" style="display: none;">
                <label>Order Currency:</label><br>
                <input class="form-control" name="orderCurrency" value="INR" placeholder="Enter Currency here (Ex. INR)" />
              </div>

              <div class="col-md-6">
                <div class="form-group input1_inner">
                  <label>MemberCode:</label><br>
                  <input class="form-control" id="membercode" value="" name="membercode" placeholder="Enter your name here (Ex. John Doe)" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group input1_inner">
                  <label>Name:</label><br>
                  <input class="form-control" id="profilename" value="" name="customerName" placeholder="Enter your name here (Ex. John Doe)" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group input1_inner">
                  <label>Email:</label><br>
                  <input class="form-control" id="usermailid" name="customerEmail" placeholder="Enter your email address here (Ex. Johndoe@test.com)" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group input1_inner">
                  <label>Phone:</label><br>
                  <input class="form-control" id="user-phone" name="customerPhone" placeholder="Enter your phone number here (Ex. 9999999999)" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group input1_inner" style="display:none;">
                  <label>Return URL:</label><br>
                  <input class="form-control" name="returnUrl" value="https://bombaygymkhana.com/response" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group input1_inner" style="display:none;">
                  <label>Notify URL:</label><br>
                  <input class="form-control" name="notifyUrl" value="https://bombaygymkhana.com/response" />
                </div>
              </div>
              <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-block btn-form1-submit mt-15" value="Pay">Pay</button>
              </div>
              <br>
              <br>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <?php include 'footer.php' ?>
  <?php include 'footer-link.php' ?>
  <script>
    $(document).ready(function() {
      var CookieValue = Cookies.get('response')
      const obj = JSON.parse(CookieValue);
      document.getElementById("membercode").value = obj.Result[0].MemberCode;
      document.getElementById("profilename").value = obj.Result[0].MemberName;
      document.getElementById("usermailid").value = obj.Result[0].EmailId;
      document.getElementById("user-phone").value = obj.Result[0].MobileNo;
      var amountpay = Cookies.get('amountpay');
      var balancedue = Cookies.get('balancedue');
      if (amountpay !== undefined) {
        document.getElementById("balancepay").value = amountpay;
      }
      else if(balancedue !== undefined){
        document.getElementById("balancepay").value = balancedue;
      }
    });
  </script>
  <script>
  $(document).ready(function() {
    var CookieValue = Cookies.get('response')
    const obj = JSON.parse(CookieValue);
    var memberid = obj.Result[0].MemberCode;

    $.ajax({
      url: "response.php",
      method: "POST",
      data: { memberid: memberid },
      success: function(response) {
        console.log(response);
      },
      error: function(xhr, status, error) {
        console.error(error);
      }
    });
  });
</script>
</body>

</html>