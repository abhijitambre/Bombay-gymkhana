<?php
// The membercode for the user is fetched
$fullid = $_COOKIE['validmemcode'];
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Database connection completed
$dbhandle = mysqli_connect("localhost", "u924494635_bombaygym", "Ask@1gym", "u924494635_bombaygym");
// Query to fetch the transaction log for the user in descending order around date where the userid matches the membercode of the user
$sql1 = "SELECT * FROM `transaction` WHERE memid = '$fullid' ORDER BY `Date` Desc";
// The data from the query is stored in the result1 variable
$result1 = mysqli_query($dbhandle, $sql1);
// checking if the data returned from the query is empty or not
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
            padding: 10px;
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
    
    <section id="menu" class="menu section-padding bg-black">
        <div class="container fluid">
            <div class="row">
                <div class="col-md-8 p-0 m-auto">
                    <div style="background:#ddd;color:#111;margin-bottom: 10px;padding: 10px;">Transaction History</div>
                    <ul class="transaction-list">
                        <!-- The result of the query is runned in while loop untill all the data row are printed according to the aligned field -->
                        <?php while ($row = mysqli_fetch_assoc($result1)) {
                        ?>
                            <li>
                                <div class="transaction-box">
                                    <!-- The transaction id of the payments made is displayed -->
                                    <div><strong>Transaction Id :</strong> <?php echo $row['Transaction']; ?></div>
                                    <!-- The transaction Status of the payments made is displayed -->
                                    <div><strong>Transaction Status :</strong> <span style="color:#86c04d"><?php echo $row['Status']; ?></span></div>
                                    <!-- The transaction Date of the payments made is displayed -->
                                    <div><strong>Date & Time :</strong> <?php echo $row['Date']; ?></div>
                                    <!-- The transaction Amount of the payments made is displayed -->
                                    <div><strong>Amount :</strong> <?php echo $row['Amount']; ?></div>
                                </div>
                            </li>
                        <?php
                        } ?>
                    </ul>
                </div>
            </div>
        </div>
        <button class="pwa-button" onclick="window.history.back()"><img src="images/yellow-icons/left-arrow.png" alt="" style="height: 36px;margin-top:10px;"></button>
    </section>

    <?php include 'footer.php' ?>
    <?php include 'footer-link.php' ?>
</body>

</html>