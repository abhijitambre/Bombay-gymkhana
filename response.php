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
<!DOCTYPE html>
<html>

<head>
	<title>Response Details</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'header-link.php' ?>
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
	<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/slider/verndha.jpg">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left caption mt-90">
					<h1>Your Receipt</h1>
				</div>
			</div>
		</div>
	</div>
	<?php
	$secretkey = "5ed5250b03e7e08a93362249d4a5bac0bf5b5a8a";
	$orderId = $_POST["orderId"];
	$parts = explode("--1", $orderId);
	$suffix = isset($parts[1]) ? $parts[1] : "";
	$fullid = $suffix;
	$orderAmount = $_POST["orderAmount"];
	$referenceId = $_POST["referenceId"];
	$customerName = $_POST["customerName"];
	$txStatus = $_POST["txStatus"];
	$paymentMode = $_POST["paymentMode"];
	$txMsg = $_POST["txMsg"];
	$txTime = $_POST["txTime"];
	$signature = $_POST["signature"];
	$data = $orderId . $orderAmount . $referenceId . $txStatus . $paymentMode . $txMsg . $txTime;
	$hash_hmac = hash_hmac('sha256', $data, $secretkey, true);
	$computedSignature = base64_encode($hash_hmac);
	function logMessage($message)
	{
		error_log(date('[Y-m-d H:i:s]') . ' ' . $message . PHP_EOL, 3, 'log.txt');
	}
	if ($signature == $computedSignature) {
	?>
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
											<td>Order ID</td>
											<td><?php echo $orderId; ?></td>
										</tr>
										<tr>
											<td>Order Amount</td>
											<td><?php echo $orderAmount; ?></td>
										</tr>
										<tr>
											<td>Reference ID</td>
											<td><?php echo $referenceId; ?></td>
										</tr>
										<tr>
											<td>Member Code</td>
											<td><?php echo $fullid; ?></td>
										</tr>
										<tr>
											<td>Transaction Status</td>
											<td><?php echo $txStatus; ?></td>
										</tr>
										<tr>
											<td>Payment Mode </td>
											<td><?php echo $paymentMode; ?></td>
										</tr>
										<tr>
											<td>Message</td>
											<td><?php echo $txMsg; ?></td>
										</tr>
										<tr>
											<td>Transaction Time</td>
											<td><?php echo $txTime; ?></td>
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
	<?php
	} else {

	?>
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
											<td>Order ID</td>
											<td><?php echo $orderId; ?></td>
										</tr>
										<tr>
											<td>Order Amount</td>
											<td><?php echo $orderAmount; ?></td>
										</tr>
										<tr>
											<td>Reference ID</td>
											<td><?php echo $referenceId; ?></td>
										</tr>
										<tr>
											<td>Member Code</td>
											<td><?php echo $fullid; ?></td>
										</tr>
										<tr>
											<td>Transaction Status</td>
											<td><?php echo $txStatus; ?></td>
										</tr>
										<tr>
											<td>Payment Mode </td>
											<td><?php echo $paymentMode; ?></td>
										</tr>
										<tr>
											<td>Message</td>
											<td><?php echo $txMsg; ?></td>
										</tr>
										<tr>
											<td>Transaction Time</td>
											<td><?php echo $txTime; ?></td>
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
	<?php
	}
	?>
	<?php
	$stmtCheck = $pdo->prepare("SELECT COUNT(*) FROM `transaction` WHERE `Transaction` = ?");
	$stmtCheck->bindParam(1, $referenceId);
	$stmtCheck->execute();
	$count = $stmtCheck->fetchColumn();

	if ($count == 0) { // Reference ID not found in the database, make API call
		if ($txStatus === 'SUCCESS') {
			$narration = "Payment through website: " . 'transaction id - ' . $referenceId . 'memid- ' . $fullid;
			$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsSaveMemberReceipt/FunSaveMemberReceipt?Clubid=13&ClientId=011.001&Amount=' . urlencode($orderAmount) . '&MemberCode=' . urlencode($fullid) . '&Narration=' . urlencode($narration) . '&NEFTNo=1234&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
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
			logMessage('API call made successfully.' . 'transaction id - ' . $referenceId . 'memid - ' . $fullid);
		} else {
			logMessage('API call made Failed.' . 'transaction id - ' . $referenceId . 'memid - ' . $fullid);
		}
	} else {
	}
	$stmt = $pdo->prepare("INSERT INTO `transaction` (`Transaction`, `Status`, `Date`, `Amount`, `memid`, `paymentMode`, `customerName`, `transactiontime`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

	// bind parameters to the statement
	$transaction = $referenceId;
	$status = $txStatus;
	$date = date("Y-m-d");
	$amount = $orderAmount;
	$memid = $fullid;
	$paymentMode = $paymentMode;
	$customerName = "Website Payment" . $memberid;
	$transactiontime = date("h:i:s A");

	$stmt->bindParam(1, $transaction);
	$stmt->bindParam(2, $status);
	$stmt->bindParam(3, $date);
	$stmt->bindParam(4, $amount);
	$stmt->bindParam(5, $memid);
	$stmt->bindParam(6, $paymentMode);
	$stmt->bindParam(7, $customerName);
	$stmt->bindParam(8, $transactiontime);
	// prepare the SQL statement


	// execute the statement
	if ($stmt->execute()) {
		logMessage('Transaction record inserted successfully.' . 'transaction id - ' . $referenceId . 'memid - ' . $fullid);
	} else {
		logMessage('Error inserting transaction record: ' . $e->getMessage());
	}
	?>
	</section>
	<?php include 'footer.php' ?>
	<?php include 'footer-link.php' ?>
	<script>

	</script>
</body>

</html>