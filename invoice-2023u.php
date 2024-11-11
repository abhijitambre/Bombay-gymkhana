<!DOCTYPE html>
    <html lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <title>Bombay Gymkhana</title>
        <?php include 'header-link.php' ?>
        <style>
            .android-invoice{
                display: none;
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
        <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/banner.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 caption mt-90">
                        <h1>Invoice 2023</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Desktop Invoices-->
        <section id="menu" class="invoice-year menu section-padding desktop-invoice">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="post-slide">
                            <div class="post-review">
                                <div class="post-date">
                                    Jan
                                    <small>2023</small>
                                </div>
                                <div class="post-title">
                                    <a href="" target="_blank" id="invoice-btn-Jan" class="notice-title">Invoice Jan 2023
                                        <ul class="post-comment">
                                            <li class="notice-download">Download
                                                <i class="ti-download"></i>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="post-slide">
                            <div class="post-review">
                                <div class="post-date">
                                Feb
                                    <small>2023</small>
                                </div>
                                <div class="post-title">
                                    <a href="" id="invoice-btn-Feb" target="_blank" class="notice-title">Invoice Feb 2023
                                        <ul class="post-comment">
                                            <li class="notice-download">Download
                                                <i class="ti-download"></i>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="post-slide">
                            <div class="post-review">
                                <div class="post-date">
                                March
                                    <small>2023</small>
                                </div>
                                <div class="post-title">
                                    <a href="" id="invoice-btn-March" target="_blank" class="notice-title">Invoice March 2023
                                        <ul class="post-comment">
                                            <li class="notice-download">Download
                                                <i class="ti-download"></i>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="post-slide">
                            <div class="post-review">
                                <div class="post-date">
                                April
                                    <small>2023</small>
                                </div>
                                <div class="post-title">
                                    <a href="" id="invoice-btn-april" target="_blank" class="notice-title">Invoice April 2023
                                        <ul class="post-comment">
                                            <li class="notice-download">Download
                                                <i class="ti-download"></i>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="pwa-button" onclick="window.history.back()"><img src="images/yellow-icons/left-arrow.png" alt="" style="height: 36px;margin-top:10px;"></button>
        </section>
        <!-- Footer -->
        <?php include 'footer.php' ?>
        <?php include 'footer-link.php' ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://smtpjs.com/v3/smtp.js">
        </script>
        <script>
            var invoicelink1 = Cookies.get('invoicedata');
            var invoicelinkdata1 = "invoice/";
            var client1val1 = Cookies.get('Clientid1');
            var client2val1 = Cookies.get('Clientid2');
            var CookieValue1 = Cookies.get('response');
            const obj1 = JSON.parse(CookieValue1);
            let clientfinal1 = client1val1 + '-' + client2val1;
            let invoice1link1 = invoicelinkdata1 + '2023/' + '01/' + clientfinal1 + '-01-2023.pdf';
            let invoice1link2 = invoicelinkdata1 + '2023/' + '02/' + clientfinal1 + '-02-2023.pdf';
            let invoice1link3 = invoicelinkdata1 + '2023/' + '03/' + clientfinal1 + '-03-2023.pdf';
            let invoice1link4 = invoicelinkdata1 + '2023/' + '04/' + clientfinal1 + '-04-2023.pdf';
            $('#invoice-btn-Jan').attr('href', invoice1link1);
            $('#invoice-btn-Feb').attr('href', invoice1link2);
            $('#invoice-btn-March').attr('href', invoice1link3);
            $('#invoice-btn-april').attr('href', invoice1link4);
        </script>


    </body>

    </html>