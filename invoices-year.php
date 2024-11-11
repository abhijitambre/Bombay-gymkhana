<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from duruthemes.com/demo/html/cappa/demo1/restaurant.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jul 2022 10:35:08 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Invoices</title>
    <?php include 'header-link.php' ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <style>
        .invoice-box{
            margin-right: 15px;
        }
        @media (max-width:768px) {
            .invoice-box{
            margin-bottom: 15px;
            margin-right: 0;
        }   
        }
    </style>
</head>

<body>
    <!-- Preloader -->
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
    <!-- Navbar -->
    <?php include 'menu.php' ?>
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/banner.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h1>Invoices</h1>
                </div>
            </div>
        </div>
    </div>
    <section id="menu" class="invoice-year menu section-padding bg-black">
        <div class="container">
            <div class="row">
            <div class="invoice-box col-md-2 sm-img-blk">
                    <a href="/invoice-2024.php">
                        <div class="icon-font">
                            <div class="icon">
                                <img src="images/yellow-icons/invoice.png" class="profile-icons" alt="">
                                <p>2024</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="invoice-box col-md-2 sm-img-blk">
                    <a href="/invoice-2023.php">
                        <div class="icon-font">
                            <div class="icon">
                                <img src="images/yellow-icons/invoice.png" class="profile-icons" alt="">
                                <p>2023</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="invoice-box col-md-2 sm-img-blk">
                    <a href="/invoice-2022.php">
                        <div class="icon-font">
                            <div class="icon">
                                <img src="images/yellow-icons/invoice.png" class="profile-icons" alt="">
                                <p>2022</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <button class="pwa-button" onclick="window.history.back()"><img src="images/yellow-icons/left-arrow.png" alt="" style="height: 36px;margin-top:10px;"></button>
    </section>



    <!-- Footer -->
    <?php include 'footer.php' ?>
    <?php include 'footer-link.php' ?>

</html>