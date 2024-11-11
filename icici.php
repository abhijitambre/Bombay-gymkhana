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
                <div class="col-md-8 booking-box" style="margin:auto">
                    <form id="iciciform" method="" action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group input1_inner">
                                    <label>merchantid:</label><br>
                                    <input class="form-control" name="merchantid" id="merchantid" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group input1_inner">
                                    <label>Reference No:</label><br>
                                    <input class="form-control" name="reference" id="reference" value="Desktop Payment" placeholder="Enter Order Note here (Ex. Test order)" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group input1_inner">
                                    <label>Submerchant ID:</label><br>
                                    <input class="form-control" id="submerchantid" name="submerchantid" value="" placeholder="Enter Order ID here (Ex. order00001)" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group input1_inner">
                                    <label>Payable Amount:</label><br>
                                    <input class="form-control" name="orderamount" id="orderamount" placeholder="Enter Order Amount here (Ex. 100)" />
                                </div>
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
                                    <input class="form-control" id="profilename" value="" name="profilename" placeholder="Enter your name here (Ex. John Doe)" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group input1_inner">
                                    <label>Email:</label><br>
                                    <input class="form-control" id="usermailid" name="usermailid" placeholder="Enter your email address here (Ex. Johndoe@test.com)" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group input1_inner">
                                    <label>Phone:</label><br>
                                    <input class="form-control" id="user-phone" name="user-phone" placeholder="Enter your phone number here (Ex. 9999999999)" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group input1_inner">
                                    <label>Remarks:</label><br>
                                    <input class="form-control" id="remarks" name="remarks" placeholder="Enter your phone number here (Ex. 9999999999)" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group input1_inner">
                                    <label>Payment bank Details:</label><br>
                                    <input class="form-control" id="bank-details" name="bank-details" placeholder="Enter your phone number here (Ex. 9999999999)" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group input1_inner">
                                    <label>Paymode:</label><br>
                                    <input class="form-control" id="paymode" name="paymode" placeholder="Enter your phone number here (Ex. 9999999999)" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group input1_inner">
                                    <label>Return URL:</label><br>
                                    <input class="form-control" name="returnUrl" id="returnUrl" value="https://bombaygymkhana.com/iciciresponse.php" />
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

    <!-- <script>
        $(document).ready(function() {
            $("#iciciform").submit(function(e) {
                e.preventDefault(); // Prevent the default form submission

                // Collecting form data
                var formData = {
                    merchantid: $("#merchantid").val(),
                    reference: $("#reference").val(),
                    submerchantid: $("#submerchantid").val(),
                    orderAmount: $("#orderamount").val(),
                    membercode: $("#membercode").val(),
                    customerName: $("#profilename").val(),
                    customerEmail: $("#usermailid").val(),
                    customerPhone: $("#user-phone").val(),
                    returnUrl: $("#returnUrl").val(),
                    remarks: $("#remarks").val(),
                    bankdetails: $("#bank-details").val(),
                    paymode: $("paymode").val(),
                    // Add other form fields here as needed
                    mandotary = reference + "|" + submerchantid + "|" + orderAmount + "|" + customerName + "|" + membercode + "|" + customerEmail + "|" + remarks + "|" + bankdetails + "|" + customerPhone,
                };

                var settings = {
                    "url": "https://eazypay.icicibank.com/EazyPG?merchantid=" + merchantid + "&mandatory fields=" + mandotary + "&optional fields=testing&returnurl=" + returnUrl + "&Reference No=" + reference + "&submerchantid=" + submerchantid + "&transaction amount=" + orderAmount + "&paymode=" + paymode + "",
                    "method": "POST",
                    "timeout": 0,
                    "headers": {
                        "api_key": "d8ae999e-67fc-11ee-8c99-0242ac120002",
                        "client_id": "website",
                        "Content-Type": "application/json"
                        // Removed "Cookie" from headers for security reasons
                    },
                    "data": JSON.stringify(formData), // Convert formData to JSON string
                };

                $.ajax(settings).done(function(response) {
                    console.log(response);
                    // Here you can handle the response, like redirecting to another page or showing a success message
                }).fail(function(error) {
                    console.log(error);
                    // Here you can handle errors
                });
            });
        });
    </script> -->
    <script>
        $(document).ready(function() {
            $("#iciciform").submit(function(e) {
                e.preventDefault(); // Prevent default form submission.

                // Correctly gather form data.
                var merchantid = $("#merchantid").val();
                var reference = $("#reference").val();
                var submerchantid = $("#submerchantid").val();
                var orderAmount = $("#orderamount").val();
                var membercode = $("#membercode").val();
                var customerName = $("#profilename").val();
                var customerEmail = $("#usermailid").val();
                var customerPhone = $("#user-phone").val();
                var returnUrl = $("#returnUrl").val();
                var remarks = $("#remarks").val();
                var bankdetails = $("#bank-details").val();
                var paymode = $("#paymode").val();

                // Mandatory fields concatenation.
                var mandatoryFields = reference + "|" + submerchantid + "|" + orderAmount + "|" + customerName + "|" + membercode + "|" + customerEmail + "|" + remarks + "|" + bankdetails + "|" + customerPhone;

                // API URL construction with proper query parameters.
                var apiUrl = "https://eazypay.icicibank.com/EazyPG?";
                apiUrl += "merchantid=" + encodeURIComponent(merchantid);
                apiUrl += "&mandatory fields=" + encodeURIComponent(mandatoryFields);
                apiUrl += "&optional fields=" + encodeURIComponent("testing"); // Assuming "testing" is constant.
                apiUrl += "&returnurl=" + encodeURIComponent(returnUrl);
                apiUrl += "&Reference No=" + encodeURIComponent(reference);
                apiUrl += "&submerchantid=" + encodeURIComponent(submerchantid);
                apiUrl += "&transaction amount=" + encodeURIComponent(orderAmount);
                apiUrl += "&paymode=" + encodeURIComponent(paymode);

                // Setting up the AJAX request.
                var settings = {
                    "url": apiUrl,
                    "method": "GET", // Assuming GET, as we are appending data in the URL. Change if needed.
                    "timeout": 0,
                    "headers": {
                        "Content-Type": "application/json"
                    }
                };

                $.ajax(settings).done(function(response) {
                    console.log(response);
                    // Handle the response here, like redirecting or displaying a message.
                }).fail(function(error) {
                    console.error("Error:", error);
                    // Handle errors here.
                });
            });
        });
    </script>

</body>

</html>