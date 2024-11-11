<?php
function encryptData($data, $cipher, $key)
{
    // Encrypt the data using the specified cipher and key
    return openssl_encrypt($data, $cipher, $key, $options = 0, "");
}

$buttonToShow = false; // Initialize the flag to control the display of the Pay button
$formToShow = true;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $buttonToShow = true; // Set to true when form is submitted
    $formToShow = false;
    $cipher = "aes-128-ecb";
    $key = "3862351407801163";

    // Concatenate the values of mandatory fields
    $mandatoryFieldsConcatenated = implode('|', [
        $_POST['reference'] ?? '',
        $_POST['submerchantid'] ?? '',
        $_POST['orderamount'] ?? '',
        $_POST['profilename'] ?? '',
        $_POST['membercode'] ?? '',
        $_POST['usermailid'] ?? '',
        $_POST['remarks'] ?? '',
        $_POST['bank-details'] ?? '',
        $_POST['user-phone'] ?? ''
    ]);

    // Encrypt the concatenated mandatory fields
    $encryptedMandatoryFields = encryptData($mandatoryFieldsConcatenated, $cipher, $key);
    $membercode = $_POST['membercode'] ?? '';
    $profilename = $_POST['profilename'] ?? '';
    $usermailid = $_POST['usermailid'] ?? '';
    $userphone = $_POST['user-phone'] ?? '';
    $orderamount = $_POST['orderamount'] ?? '';
    // Encrypt individual fields
    $merchant_id = $_POST['merchantid'] ?? '';
    $e_man_fields = $encryptedMandatoryFields;
    $e_opt_fields = ''; // Assuming optional fields are handled separately
    $e_return_url = encryptData($_POST['returnUrl'] ?? '', $cipher, $key);
    $e_ref_no = encryptData($_POST['reference'] ?? '', $cipher, $key);
    $e_sub_mer_id = encryptData($_POST['submerchantid'] ?? '', $cipher, $key);
    $e_amt = encryptData($_POST['orderamount'] ?? '', $cipher, $key);
    $e_paymode = encryptData($_POST['paymode'] ?? '', $cipher, $key);

    // Build the encrypted URL
    $apiUrl = htmlspecialchars("https://eazypay.icicibank.com/EazyPG?merchantid=$merchant_id&mandatory fields=$e_man_fields&optional fields=$e_opt_fields&returnurl=$e_return_url&Reference No=$e_ref_no&submerchantid=$e_sub_mer_id&transaction amount=$e_amt&paymode=$e_paymode");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment-Gateway</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <?php include 'header-link.php' ?>
    <style>
        .payment-details-box {
            position: relative;
            background: #222;
            padding: 40px;
            margin-bottom: 0px;
            box-shadow: 1px 1px 20px 3px #00000036;
        }

        .payment-details-box-inner {
            border: 1px solid #fff;
        }

        .payment-details-box .bd-1 {
            border-bottom: 1px solid #fff;
        }

        .payment-details-box .br-1 {
            border-right: 1px solid #fff;
        }

        .payment-details-box .p-10 {
            padding: 10px;
        }

        .pay-btn {
            font-weight: 400;
            font-family: 'Montserrat', sans-serif;
            text-transform: uppercase;
            background: #edd97d;
            color: #000;
            padding: 10px 55px;
            margin: 0;
            position: relative;
            margin-top: 30px;
            font-size: 12px;
            letter-spacing: 1px;
        }

        .banner-header {
            background-image: url(img/slider/banner.jpg);
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
    <section id="menu" class="menu section-padding bg-black">
        <div class="container fluid">
            <div class="row">
                <?php if ($formToShow) : ?>
                    <div class="col-md-8 booking-box" style="margin:auto">

                        <form id="iciciform" method="post" action="">
                            <div class="row">
                                <div class="col-md-6 form-group input1_inner" style="display: none;">
                                    <label for="merchantid">Merchant ID:</label><br>
                                    <input class="form-control" type="text" name="merchantid" id="merchantid" value="380786" required />
                                </div>
                                <div class="col-md-6 form-group input1_inner">
                                    <label for="reference">Reference No:</label><br>
                                    <input class="form-control" type="text" name="reference" id="reference" required />
                                </div>
                                <div class="col-md-6 form-group input1_inner" style="display: none;">
                                    <label for="submerchantid">Submerchant ID:</label><br>
                                    <input class="form-control" type="text" name="submerchantid" id="submerchantid" />
                                </div>
                                <div class="col-md-6 form-group input1_inner">
                                    <label for="orderamount">Payable Amount:</label><br>
                                    <input class="form-control" type="text" name="orderamount" id="orderamount" required />
                                </div>
                                <div class="col-md-6 form-group input1_inner">
                                    <label for="membercode">MemberCode:</label><br>
                                    <input class="form-control" type="text" name="membercode" id="membercode" />
                                </div>
                                <div class="col-md-6 form-group input1_inner">
                                    <label for="profilename">Name:</label><br>
                                    <input class="form-control" type="text" name="profilename" id="profilename" required />
                                </div>
                                <div class="col-md-6 form-group input1_inner">
                                    <label for="usermailid">Email:</label><br>
                                    <input class="form-control" type="email" name="usermailid" id="usermailid" required />
                                </div>
                                <div class="col-md-6 form-group input1_inner">
                                    <label for="user-phone">Phone:</label><br>
                                    <input class="form-control" type="tel" name="user-phone" id="user-phone" required />
                                </div>
                                <div class="col-md-6 form-group input1_inner" style="display: none;">
                                    <label for="remarks">Remarks:</label><br>
                                    <input class="form-control" type="text" name="remarks" value="Payment Through Website" id="remarks" />
                                </div>
                                <div class="col-md-6 form-group input1_inner" style="display: none;">
                                    <label for="bank-details">Payment Bank Details:</label><br>
                                    <input class="form-control" type="text" name="bank-details" value="icici bank" id="bank-details" />
                                </div>
                                <div class="col-md-6 form-group input1_inner" style="display: none;">
                                    <label for="paymode">Paymode:</label><br>
                                    <input class="form-control" type="text" name="paymode" id="paymode" value="9" required />
                                </div>
                                <div class="col-md-6 form-group input1_inner" style="display: none;">
                                    <label for="returnUrl">Return URL:</label><br>
                                    <input class="form-control" type="url" name="returnUrl" id="returnUrl" value="https://www.bombaygymkhana.com/iciciresponse" required />
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block btn-form1-submit mt-15">Pay</button>
                                </div>
                            </div>
                        </form>

                    </div>

                <?php endif; ?>
                <?php if ($buttonToShow) : ?>
                    <div class="col-md-8 payment-details-box" style="margin:auto">

                        <div class="row m-0">
                            <div class="payment-details-box-inner" style="width: 100%;" id="member-details-table">
                                <div class="d-flex br-1 flex-wrap bd-1">
                                    <div class="col-md-4 col-sm-4 p-10 br-1">
                                        <h6>Member Code</h6>
                                    </div>
                                    <div class="col-md-8 col-sm-8 p-10">
                                        <?php echo "<p>" . $membercode . "</p>" ?>
                                    </div>
                                </div>
                                <div class="d-flex br-1 flex-wrap bd-1">
                                    <div class="col-md-4 col-sm-4 p-10 br-1">
                                        <h6>Member Name</h6>
                                    </div>
                                    <div class="col-md-8 col-sm-8 p-10">
                                        <?php echo "<p>" . $profilename . "</p>" ?>
                                    </div>
                                </div>
                                <div class="d-flex br-1 flex-wrap bd-1">
                                    <div class="col-md-4 col-sm-4 p-10 br-1">
                                        <h6>Amount</h6>
                                    </div>
                                    <div class="col-md-8 col-sm-8 p-10">
                                        <?php echo "<p>" . $orderamount . "</p>" ?>
                                    </div>
                                </div>
                                <div class="d-flex br-1 flex-wrap bd-1">
                                    <div class="col-md-4 col-sm-4 p-10 br-1">
                                        <h6>Email Id</h6>
                                    </div>
                                    <div class="col-md-8 col-sm-8 p-10">
                                        <?php echo "<p>" . $usermailid . "</p>" ?>
                                    </div>
                                </div>
                                <div class="d-flex br-1 flex-wrap bd-1">
                                    <div class="col-md-4 col-sm-4 p-10 br-1">
                                        <h6>Phone Number</h6>
                                    </div>
                                    <div class="col-md-8 col-sm-8 p-10">
                                        <?php echo "<p>" . $userphone . "</p>" ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="<?= $apiUrl ?>" target="_blank" class="pay-btn">Pay</a>
                        </div>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>



    <?php include 'footer.php' ?>
    <?php include 'footer-link.php' ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            var CookieValue = Cookies.get('response')
            const obj = JSON.parse(CookieValue);
            document.getElementById("membercode").value = obj.Result[0].MemberCode;
            const memberid = obj.Result[0].MemberCode;
            document.getElementById("profilename").value = obj.Result[0].MemberName;
            const emails = obj.Result[0].EmailId;
            const emailList = emails.split(";");
            const firstEmail = emailList[0];
            document.getElementById("usermailid").value = firstEmail;
            const mobilenumber = obj.Result[0].MobileNo;
            const mobilenumberList = mobilenumber.split(";");
            const firstmobilenumber = mobilenumberList[0];
            document.getElementById("user-phone").value = firstmobilenumber;
            const today = new Date();
            const year = today.getFullYear().toString();
            let month = (today.getMonth() + 1).toString();
            let day = today.getDate().toString();
            if (month.length < 2) {
                month = "0" + month;
            }
            if (day.length < 2) {
                day = "0" + day;
            }
            const dateString = year + month + day;

            const rand = Math.floor(Math.random() * 10000).toString().padStart(4, '0');
            const rand1 = Math.floor(Math.random() * 10000).toString().padStart(5, '0');
            const unique = dateString + rand;
            const unique1 = dateString + rand1;
            document.getElementById("submerchantid").value = unique;
            document.getElementById("reference").value = unique1;
            console.log(unique); // or use document.wr

            var amountpay = Cookies.get('amountpay');
            var balancedue = Cookies.get('balancedue');
            if (amountpay !== undefined) {
                document.getElementById("balancepay").value = amountpay;
            } else if (balancedue !== undefined) {
                document.getElementById("balancepay").value = balancedue;
            }
        });
    </script>
</body>

</html>