<?php
$buttonToShow = false; // Initialize the flag to control the display of the Pay button
$formToShow = true;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $buttonToShow = true; // Set to true when form is submitted
    $formToShow = false;

    $merchant_id = $_POST['merchantid'] ?? '';
    $mandatoryFieldsConcatenated = implode('|', [
        $_POST['reference'] ?? '',
        $_POST['submerchantid'] ?? '',
        $_POST['orderamount'] ?? '',
        $_POST['profilename'] ?? '',
        $_POST['membercode'] ?? '',
        $_POST['usermailid'] ?? '',
        $_POST['remarks'] ?? '',
        $_POST['bank-details'] ?? '',
        $_POST['user-phone'] ?? '',        
        $_POST['user-phone'] ?? ''
    ]);

    $return_url = $_POST['returnUrl'] ?? '';
    $reference_no = $_POST['reference'] ?? '';
    $submerchant_id = $_POST['submerchantid'] ?? '';
    $amount = $_POST['orderamount'] ?? '';
    $paymode = $_POST['paymode'] ?? '';
    $optional = '';

    // Build the URL with plain text values
    $apiUrl = "https://eazypay.icicibank.com/EazyPG?merchantid=$merchant_id&mandatoryfields=$mandatoryFieldsConcatenated&optional fields=$optional&returnurl=$return_url&ReferenceNo=$reference_no&submerchantid=$submerchant_id&transactionamount=$amount&paymode=$paymode";
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Payment</title>
</head>

<body>

    <?php if ($formToShow) : ?>
        <form id="iciciform" method="post" action="">
            <div class="row">
                <div class="col-md-6 form-group input1_inner">
                    <label for="merchantid">Merchant ID:</label><br>
                    <input class="form-control" type="text" name="merchantid" id="merchantid" required />
                </div>
                <div class="col-md-6 form-group input1_inner">
                    <label for="reference">Reference No:</label><br>
                    <input class="form-control" type="text" name="reference" id="reference" required />
                </div>
                <div class="col-md-6 form-group input1_inner">
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
                <div class="col-md-6 form-group input1_inner">
                    <label for="remarks">Remarks:</label><br>
                    <input class="form-control" type="text" name="remarks" id="remarks" />
                </div>
                <div class="col-md-6 form-group input1_inner">
                    <label for="bank-details">Payment Bank Details:</label><br>
                    <input class="form-control" type="text" name="bank-details" id="bank-details" />
                </div>
                <div class="col-md-6 form-group input1_inner">
                    <label for="paymode">Paymode:</label><br>
                    <input class="form-control" type="text" name="paymode" id="paymode" required />
                </div>
                <div class="col-md-6 form-group input1_inner">
                    <label for="returnUrl">Return URL:</label><br>
                    <input class="form-control" type="url" name="returnUrl" id="returnUrl" value="https://www.bombaygymkhana.com/iciciresponse.php" required />
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-block btn-form1-submit mt-15">Pay</button>
                </div>
            </div>
        </form>
    <?php endif; ?>
    <?php if ($buttonToShow) : ?>
        <div class="row">
            <div class="br-1" style="width: 100%;" id="member-details-table">
                <div class="d-flex br-1 flex-wrap">
                    <div class="col-md-3 col-sm-3 br-1 p-10" style="border-bottom: 0.1px solid #ffffff26 !important;">
                        <h6>Member Code</h6>
                    </div>
                    <div class="col-md-9 col-sm-9 br-1 p-10">
                        <?php echo "<p>" . $membercode . "</p>" ?>
                    </div>
                </div>
                <div class="d-flex br-1 flex-wrap">
                    <div class="col-md-3 col-sm-3 br-1 p-10" style="border-bottom: 0.1px solid #ffffff26 !important;">
                        <h6>Member Name</h6>
                    </div>
                    <div class="col-md-9 col-sm-9 br-1 p-10">
                        <?php echo "<p>" . $profilename . "</p>" ?>
                    </div>
                </div>
                <div class="d-flex br-1 flex-wrap">
                    <div class="col-md-3 col-sm-3 br-1 p-10" style="border-bottom: 0.1px solid #ffffff26 !important;">
                        <h6>Amount</h6>
                    </div>
                    <div class="col-md-9 col-sm-9 br-1 p-10">
                        <?php echo "<p>" . $orderamount . "</p>" ?>
                    </div>
                </div>
                <div class="d-flex br-1 flex-wrap">
                    <div class="col-md-3 col-sm-3 br-1 p-10" style="border-bottom: 0.1px solid #ffffff26 !important;">
                        <h6>Email Id</h6>
                    </div>
                    <div class="col-md-9 col-sm-9 br-1 p-10">
                        <?php echo "<p>" . $usermailid . "</p>" ?>
                    </div>
                </div>
                <div class="d-flex br-1 flex-wrap">
                    <div class="col-md-3 col-sm-3 br-1 p-10" style="border-bottom: 0.1px solid #ffffff26 !important;">
                        <h6>Phone Number</h6>
                    </div>
                    <div class="col-md-9 col-sm-9 br-1 p-10">
                        <?php echo "<p>" . $userphone . "</p>" ?>
                    </div>
                </div>
            </div>
        </div>
        <a href="<?= $apiUrl ?>" target="_blank" class="">Pay</a>
    <?php endif; ?>

</body>

</html>