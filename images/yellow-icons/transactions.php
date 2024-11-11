<?php

$jsonfields = file_get_contents('php://input');
$requestdata = json_decode($jsonfields, true);
$Clientid1 = $_COOKIE['Clientid1'];
$Clientid2 = $_COOKIE['Clientid2'];
$Clientid3 = $_COOKIE['Clientid3'];
$fullid = $Clientid1 . "-" . $Clientid2 . "   " . $Clientid3;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$dbhandle = mysqli_connect("localhost", "u924494635_bombaygym", "Ask@1gym", "u924494635_bombaygym");
$sql1 = "SELECT * FROM transaction WHERE memid = '$fullid' ORDER BY YEAR(Date),MONTH(Date), DAY(Date) Desc";
$result1 = mysqli_query($dbhandle, $sql1);
if (!$result1) {
    die('Error: ' . mysqli_error($dbhandle));
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Transaction Logs</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <?php include 'header-link.php' ?>
    <style>
        .transaction-list li {
            background: #ddd;
            margin-bottom: 10px;
            box-shadow: 0px 5px 10px 1px #878787;
        }

        .m-auto {
            margin: auto;
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
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/slider/verndha.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h1>Transactions</h1>
                </div>
            </div>
        </div>
    </div>
    
    <section id="menu" class="menu section-padding">
        <div class="container fluid">
            <div class="row">
                <div class="col-md-8 p-0 m-auto">
                    <div style="background:#ddd;color:#111;margin-bottom: 10px;box-shadow: 0px 5px 10px 1px #878787;padding: 10px;">Transaction History</div>
                    <ul class="transaction-list">
                        <?php while ($row = mysqli_fetch_assoc($result1)) {
                        ?>
                            <li>
                                <div class="transaction-box">
                                    <div><strong>Transaction Id :</strong> <?php echo $row['Transaction']; ?></div>
                                    <div><strong>Transaction Status :</strong> <span style="color:#86c04d"><?php echo $row['Status']; ?></span></div>
                                    <div><strong>Date & Time :</strong> <?php echo $row['Date'] . ' ' . $row['transactiontime']; ?></div>
                                    <div><strong>Amount :</strong> <?php echo $row['Amount']; ?></div>
                                </div>
                            </li>
                        <?php
                        } ?>
                    </ul>
                </div>
            </div>
        </div>
        <button onclick="window.history.back()"><img src="images/yellow-icon/left-arrow.png" alt=""></button>
    </section>

    <?php include 'footer.php' ?>
    <?php include 'footer-link.php' ?>
    <script>
        function sendDownloadRequest(nid) {
            // send a request to mark the notice as read
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "mark_as_read.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.send("nid=" + nid);
        }
    </script>
</body>

</html>