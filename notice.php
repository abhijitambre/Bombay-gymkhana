<?php
$categoryname = $_COOKIE['categoryname'];
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
$dbhandle =  mysqli_connect("localhost", "u924494635_bombaygym", "Ask@1gym");
mysqli_select_db($dbhandle, "u924494635_bombaygym");

// Calculate the date three months ago
$threeMonthsAgo = date('Y-m-d', strtotime('-2 months'));

// Modify the SQL query to fetch notices within the last three months
$sql1 = "SELECT * FROM notice WHERE sdate >= '$threeMonthsAgo' ORDER BY sdate DESC;";
$result1 = mysqli_query($dbhandle, $sql1);
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Notices</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <?php include 'header-link.php' ?>
    <style>
        .post-slide .post-review {
            display: flex;
            height: 110px;
            margin: 20px 0px;
            /* padding: 0px 0px 16px 0; */
            box-shadow: 0px 0px 4px 0px #0000005c;
        }

        .post-slide .post-date {
            float: none;
            margin-right: 10px;
            padding: 8px 15px;
            text-align: center;
            background: #edd97d;
            font-size: 26px;
            color: #fff;
            font-weight: 700;
            transition: background 0.20s linear 0s;
        }

        .post-slide .post-title a {
            font-size: 18px;
            color: #444;
            font-family: 'EBGaramond', serif;
            margin-bottom: 13px;
            font-weight: 500;
            text-transform: uppercase;
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
                    <h1>Notices</h1>
                </div>
            </div>
        </div>
    </div>

    <section id="menu" class=" menu section-padding">
        <div class="container fluid">

            <div class="row">
                <div class="col-md-12 agm-notice">
                    <div class="butn-dark intersterd " style="margin-top:20px;"> <a href="/agm-notice.php"><span>Agm Notice</span></a></div>
                </div>

                <div class="col-md-12" style="display: flex;align-items: center;justify-content: center;align-content: center;flex-wrap: wrap;">
                    <?php
                    while ($not = mysqli_fetch_assoc($result1)) {

                        $date = new DateTime($not['ndate']);
                        $datef = date('M j', $date->getTimestamp());

                        $ndates = explode(" ", $datef);
                        setcookie("time", $date);
                        $iparr = explode(" ", $datef);
                    ?>
                        <div class="col-md-4">
                            <div class="post-slide">


                                <!-- <img src="images/img-1.jpg" alt=""> -->

                                <div class="post-review">

                                    <div class="post-date">

                                        <?php echo  $iparr[1] ?>

                                        <small><?php echo  $iparr[0] ?></small>

                                    </div>

                                    <div class="post-title">

                                        <a href="bgcms\production\uploads\<?php echo $not['pdflink'] ?>" class="notice-title"><?php echo $not['ntitle'] ?></a>
                                        <ul class="post-comment">
                                            <li><a href="bgcms\production\uploads\<?php echo $not['pdflink'] ?>">
                                                    Download <i class="ti-download"></i></a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                            </div>
                        </div>
                    <?php } ?>
                </div>

            </div>
        </div>
        <button class="pwa-button" onclick="window.history.back()"><img src="images/yellow-icons/left-arrow.png" alt="" style="height: 36px;margin-top:10px;"></button>
    </section>
    <?php include 'footer.php' ?>
    <?php include 'footer-link.php' ?>
    <script>
        $(document).ready(function() {
            var CookieValue = Cookies.get('memberdet');
            const obj = JSON.parse(CookieValue);
            var CategoryName = obj.Result[0].CategoryName;

            if (
                CategoryName === "CLUB ACCOUNT" ||
                CategoryName === "PERMANENT MEMBER" ||
                CategoryName === "PERMANENT COMMUTED" ||
                CategoryName === "LIFE MEMBER" ||
                CategoryName === "LADY PERMANENT MEMBER"
            ) {
                $(".agm-notice").addClass("show");
            }
        });
    </script>
</body>

</html>