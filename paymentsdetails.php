<?php
$host = "localhost";
$dbname = "u924494635_bombaygym";
$username = "u924494635_bombaygym";
$password = "Ask@1gym";

// create a PDO instance
try {
	$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
	die("Database connection failed: " . $e->getMessage());
}
?>
<?php
$res = $_REQUEST;

$responsecode = $res['Response_Code'];

$uniquerefnumber = $res['Unique_Ref_Number'];

$servicetaxamount = $res['Service_Tax_Amount'];

$processingfee = $res['Processing_Fee_Amount'];

$totalamount = $res['Total_Amount'];

$transactionamount = $res['Transaction_Amount'];

$transactiondate = $res['Transaction_Date'];
$interchangevalue = $res['Interchange_Value'];
$tdr = $res['TDR'];
$paymode = $res['Payment_Mode'];
$submerchantid = $res['SubMerchantId'];
$referenceno = $res['ReferenceNo'];

$id = $res['ID'];
$tps = $res['TPS'];
$hrs = $res['RS'];
$mandatory = $res['mandatory_fields'];

// First, split the string by the "|" separator
$parts = explode('|', $mandatory);

// Since you're interested in "Z. ACCOUNT" and "Z-0 01", which are expected to be the 4th and 5th parts respectively
$accountName = isset($parts[3]) ? trim($parts[3]) : ""; // Trim in case of extra whitespace
$accountCode = isset($parts[4]) ? trim($parts[4]) : ""; // Trim in case of extra whitespace
$status = 'error'; // Default status is 'error'

if ($responsecode === "E000") {
	$status = 'success';
} else if ($responsecode === "E0801") {
	$status = 'failure'; // Example: handle specific failure case
	// Add more else-if blocks as needed for other specific response codes
}
else if ($responsecode === "E001") {
	$status = 'Unauthorized Payment Mode'; // Example: handle specific failure case
}
else if ($responsecode === "E002") {
	$status = 'Unauthorized Key'; // Example: handle specific failure case
}
else if ($responsecode === "E003") {
	$status = 'Unauthorized Packet'; // Example: handle specific failure case
}
else if ($responsecode === "E004") {
	$status = 'Unauthorized Merchant'; // Example: handle specific failure case
}
else if ($responsecode === "E005") {
	$status = 'Unauthorized Return URL'; // Example: handle specific failure case
}
else if ($responsecode === "E006") {
	$status = 'Transaction is already paid'; // Example: handle specific failure case
}
else if ($responsecode === "E007") {
	$status = 'Transaction Failed'; // Example: handle specific failure case
}
else if ($responsecode === "E008") {
	$status = 'Failured from third party due to Technical Error'; // Example: handle specific failure case
}
else if ($responsecode === "E009") {
	$status = 'Bill Already Expired'; // Example: handle specific failure case
}
else if ($responsecode === "E00315") {
	$status = 'Wrong Email Format'; // Example: handle specific failure case
}
else {
	$status = 'failure'; // Handle all other cases that are not explicitly defined
}
function logMessage($message)
	{
		error_log(date('[Y-m-d H:i:s]') . ' ' . $message . PHP_EOL, 3, 'log.txt');
	}
$stmt = $pdo->prepare("INSERT INTO `transaction` (`Transaction`, `Status`, `Date`, `Amount`, `memid`, `paymentMode`, `customerName`, `transactiontime`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

// Assuming $transactiondate is your datetime string, e.g., "29-03-2024 19:06:50"
list($date, $time) = explode(' ', $transactiondate);

// Prepare your data for insertion
$transaction = $uniquerefnumber;
$statuspay = $status;
$date1 = date("Y-m-d"); // Use the separated date
$amount = $totalamount;
$memid = $accountCode;
$paymentMode = $paymode;
$customerName = $accountName; // Added a space for formatting
$time1 = $time; // Use the separated time

$stmt->execute([$transaction, $statuspay, $date1, $amount, $memid, $paymentMode, $customerName, $time1]);
?>
<?php


$narration = "Payment through website (icici bank): " . 'transaction id - ' . $uniquerefnumber . 'memid- ' . $accountCode;
if ($status === 'success') {
	$narration = "Payment through website (icici bank): " . 'transaction id - ' . $uniquerefnumber . 'memid- ' . $accountCode;
	$apiurl ='https://fmprod.dishco.com/shawmanservices/api/CmsSaveMemberReceipt/FunSaveMemberReceipt?Clubid=13&ClientId=011.001&Amount=' . urlencode($totalamount) . '&MemberCode=' . urlencode($accountCode) . '&TransactionId=' . urlencode($uniquerefnumber) . '&Narration=' . urlencode($narration) . '&NEFTNo=1234&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA';
	$curl = curl_init();
	curl_setopt_array($curl, array(  
		CURLOPT_URL => $apiurl,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		CURLOPT_HTTPHEADER => array(
			'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
			'Cookie: ARRAffinity=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2; ARRAffinitySameSite=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2'
		),
	));

	$response = curl_exec($curl);
	curl_close($curl);
	logMessage('API call made successfully.' . 'Request - ' . $apiurl . '    Response - ' .$response);
} 
?>
<!DOCTYPE html>
<html>

<head>
	<title>Response Details</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'header-link.php' ?>
	<style>
		.banner-header {
			background-image: url(img/slider/verndha.jpg);
		}
	</style>
</head>

<body>
	<!-- Progress scroll totop -->
	<div class="progress-wrap cursor-pointer">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
		</svg>
	</div>
	<?php include 'menu.php' ?>
	<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/slider/verndha.jpg">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left caption mt-90">
					<h1>Your Receipt</h1>
				</div>
			</div>
		</div>
	</div>
	<section id="menu" class=" menu section-padding bg-black">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-danger" style="border-radius: 0 !important;">
						<div class="panel-heading" style="padding:10px">Payment Details</div>
						<div class="panel-body">
							<!-- <div class="container"> -->
							<table class="table table-hover">
								<tbody>
									<tr>
										<td>Payment status</td>
										<td><?php echo $status; ?></td>
									</tr>
									<tr>
										<td>Member Name</td>
										<td><?php echo $accountName ?></td>
									</tr>
									<tr>
										<td>Member Id</td>
										<td><?php echo $accountCode ?></td>
									</tr>
									<tr>
										<td>Total Amount</td>
										<td><?php echo $totalamount; ?></td>
									</tr>
									<tr>
										<td>Transaction Date</td>
										<td><?php echo $transactiondate; ?></td>
									</tr>
									<tr>
										<td>Payment Mode</td>
										<td><?php echo $paymode; ?></td>
									</tr>
									<tr>
										<td>SubMerchant Id</td>
										<td><?php echo $submerchantid; ?></td>
									</tr>
									<tr>
										<td>Transaction Id</td>
										<td><?php echo $uniquerefnumber; ?></td>
									</tr>
								</tbody>
							</table>
							<!-- </div> -->

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<?php include 'footer.php' ?>
	<?php include 'footer-link.php' ?>
	<script>

	</script>
</body>

</html>