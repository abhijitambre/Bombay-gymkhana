<?php
$host = "localhost";
$dbname = "u924494635_bombaygym1";
$username = "u924494635_bombaygym1";
$password = "Ask@1gym";

// create a PDO instance
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "success";
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
<?php
$jsonfields = file_get_contents('php://input');
$requestdata = json_decode($jsonfields, true);
$Clientid1 = $_COOKIE['Clientid1'];
$Clientid2 = $_COOKIE['Clientid2'];
$Clientid3 = $_COOKIE['Clientid3'];
$fullid = $Clientid1 . "-" . $Clientid2 . "   " . $Clientid3;
setcookie('fullid', $fullid);
$fullid = $_COOKIE['validmemcode'];
echo "memcode=" . $fullid;
$narration = "Payment through website :" . $referenceId;
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
echo $response;
// echo "success";
curl_close($curl);
?>
	<?php
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    } catch (PDOException $e) {
        die("Database connection failed: " . $e->getMessage());
    }

    // prepare the SQL statement
    $stmt = $pdo->prepare("INSERT INTO `transaction` (`Transaction`, `Status`, `Date`, `Amount`, `memid`, `paymentMode`, `customerName`, `transactiontime`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    // bind parameters to the statement
    $transaction = $referenceId;
    $status = $paymentMode;
    $date = date("Y-m-d");
    echo $date;
    $amount = $orderAmount;
    $memid = $fullid;
    $paymentMode = $paymentMode;
    $customerName = "test";
    $transactiontime = date("h:i:s A");

    $stmt->bindParam(1, $transaction);
    $stmt->bindParam(2, $status);
    $stmt->bindParam(3, $date);
    $stmt->bindParam(4, $amount);
    $stmt->bindParam(5, $memid);
    $stmt->bindParam(6, $paymentMode);
    $stmt->bindParam(7, $customerName);
    $stmt->bindParam(8, $transactiontime);

    // execute the statement
    if ($stmt->execute()) {
        echo "Transaction inserted successfully.";
    } else {
        echo "Error inserting transaction.";
    }
    ?>