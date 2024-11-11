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
                        <h1>Invoice 2022</h1>
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
                                    June
                                    <small>2022</small>
                                </div>
                                <div class="post-title">
                                    <a href="" target="_blank" id="invoice-btn-June1" class="notice-title">Invoice June 2022
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
                                    July
                                    <small>2022</small>
                                </div>
                                <div class="post-title">
                                    <a href="" id="invoice-btn-July1" target="_blank" class="notice-title">Invoice July 2022
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
                                    Aug
                                    <small>2022</small>
                                </div>
                                <div class="post-title">
                                    <a href="" id="invoice-btn-Aug1" target="_blank" class="notice-title">Invoice August 2022
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
                                    Sept
                                    <small>2022</small>
                                </div>
                                <div class="post-title down-load">
                                    <a href="" id="invoice-btn-Sept1" target="_blank" class="notice-title">Invoice September 2022
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
                                    Oct
                                    <small>2022</small>
                                </div>
                                <div class="post-title down-load">
                                    <a href="" id="invoice-btn-Oct1" target="_blank" class="notice-title">Invoice October 2022
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
                                    Nov
                                    <small>2022</small>
                                </div>
                                <div class="post-title down-load">
                                    <a href="" id="invoice-btn-Nov1" target="_blank" class="notice-title">Invoice November 2022
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
                                    Dec
                                    <small>2022</small>
                                </div>
                                <div class="post-title down-load">
                                    <a href="" id="invoice-btn-Dec1" target="_blank" class="notice-title">Invoice December 2022
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
            var invoicelinkdata1 = "invoice/";
            var client1val1 = Cookies.get('clientid1');
            var client2val1 = Cookies.get('clientid2');
            var CookieValue1 = Cookies.get('response');
            const obj1 = JSON.parse(CookieValue1);
            let clientfinal1 = client1val1 + '-' + client2val1;
            let invoice1link1 = invoicelinkdata1 + '2022/' + '06/' + clientfinal1 + '-06-2022.pdf';
            let invoice1link2 = invoicelinkdata1 + '2022/' + '07/' + clientfinal1 + '-07-2022.pdf';
            let invoice1link3 = invoicelinkdata1 + '2022/' + '08/' + clientfinal1 + '-08-2022.pdf';
            let invoice1link4 = invoicelinkdata1 + "2022/" + "09/" + clientfinal1 + "-09-2022.pdf";
            let invoice1link5 = invoicelinkdata1 + "2022/" + "10/" + clientfinal1 + "-10-2022.pdf";
            let invoice1link6 = invoicelinkdata1 + "2022/" + "11/" + clientfinal1 + "-11-2022.pdf";
            let invoice1link7 = invoicelinkdata1 + "2022/" + "12/" + clientfinal1 + "-12-2022.pdf";
            $('#invoice-btn-June1').attr('href', invoice1link1);
            $('#invoice-btn-July1').attr('href', invoice1link2);
            $('#invoice-btn-Aug1').attr('href', invoice1link3);
            $('#invoice-btn-Sept1').attr('href', invoice1link4);
            $('#invoice-btn-Oct1').attr('href', invoice1link5);
            $('#invoice-btn-Nov1').attr('href', invoice1link6);
            $('#invoice-btn-Dec1').attr('href', invoice1link7);
        </script>


    </body>

    </html>