<!DOCTYPE html>

<html lang="zxx">



<head>

    <script>
        self.addEventListener('fetch', function(event) {
            event.respondWith(async function() {
                try {
                    var res = await fetch(event.request);
                    var cache = await caches.open('cache');
                    cache.put(event.request.url, res.clone());
                    return res;
                } catch (error) {
                    return caches.match(event.request);
                }
            }());
        });


        self.addEventListener('push', (event) => {
            const payload = event.data?.text() ?? 'no payload';
            event.waitUntil(
                self.registration.showNotification('ServiceWorker Cookbook', {
                    body: payload,
                })
            );
        });
    </script>




    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="manifest" href="manifest.json" />

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <meta name="apple-mobile-web-app-title" content="Add to Home">




    <title>Bombay Gymkhana</title>


    <link rel="shortcut icon" href="img/favicon.ico" />


</head>
<!-- <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Barlow&amp;family=Barlow+Condensed&amp;family=Gilda+Display&amp;display=swap"> -->

<link rel="stylesheet" href="css/plugins.css" />

<link rel="stylesheet" href="css/style.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />

<script>
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('sw.js', {
            scope: '.' // <--- THIS BIT IS REQUIRED
        }).then(function(registration) {
            // Registration was successful
            console.log('ServiceWorker registration successful with scope: ', registration.scope);
        }, function(err) {
            // registration failed :(
            console.log('ServiceWorker registration failed: ', err);
        });
    }
</script>


<!-- This script tag uses JavaScript modules, so the proper `type` attribute value is required -->
<script type="module">
    // This code sample uses features introduced in Workbox v6.
    import {
        Workbox
    } from 'https://storage.googleapis.com/workbox-cdn/releases/6.4.1/workbox-window.prod.mjs';

    if ('serviceWorker' in navigator) {
        const wb = new Workbox('sw.js');
        let registration;

        const showSkipWaitingPrompt = async (event) => {
            // Assuming the user accepted the update, set up a listener
            // that will reload the page as soon as the previously waiting
            // service worker has taken control.
            wb.addEventListener('controlling', () => {
                // At this point, reloading will ensure that the current
                // tab is loaded under the control of the new service worker.
                // Depending on your web app, you may want to auto-save or
                // persist transient state before triggering the reload.
                window.location.reload();
            });

            // When `event.wasWaitingBeforeRegister` is true, a previously
            // updated service worker is still waiting.
            // You may want to customize the UI prompt accordingly.

            // This code assumes your app has a promptForUpdate() method,
            // which returns true if the user wants to update.
            // Implementing this is app-specific; some examples are:
            // https://open-ui.org/components/alert.research or
            // https://open-ui.org/components/toast.research
            const updateAccepted = await promptForUpdate();

            if (updateAccepted) {
                wb.messageSkipWaiting();
            }
        };

        // Add an event listener to detect when the registered
        // service worker has installed but is waiting to activate.
        wb.addEventListener('waiting', (event) => {
            showSkipWaitingPrompt(event);
        });

        wb.register();
    }
</script>
<style>
    p {
        color: #fff !important;
    }

    .section-padding h4 {
        margin: 15px 0 !important;
    }
</style>
</head>
<!-- <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Barlow&amp;family=Barlow+Condensed&amp;family=Gilda+Display&amp;display=swap"> -->

<link rel="stylesheet" href="css/plugins.css" />

<link rel="stylesheet" href="css/style.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />



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

    <nav class="navbar navbar-expand-lg">

        <div class="container">

            <!-- Logo -->

            <div class="logo-wrapper navbar-brand valign">

                <a href="/index.php">

                    <div class="logo">

                        <img src="img/logo-dark.png" class="logo-img" alt="">

                    </div>

                </a>

            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span

            class="icon-bar">

            <i class="ti-layout-line-solid"></i>

            <i class="ti-layout-line-solid"></i>
            <i class="ti-layout-line-solid"></i>


            <i class="ti-line-double"></i>

            </span>  -->
                <div class="three col">
                    <div class="hamburger" id="hamburger-6">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>

            </button>

            <!-- Navbar links -->

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link " href="/index.php" To>Home</a></li>
                    <!-- <li class="nav-item"><a class="nav-link " href="#" To>About</a></li> -->

                    <li class="nav-item dropdown"> <span class="nav-link"> About <i class="ti-angle-down"></i></span>

                        <ul class="dropdown-menu last">

                            <li class="dropdown-item "><a href="/about-us.php">About Club</a></li>

                            <li class="dropdown-item"><a href="/about-club.php">Club History</a></li>



                        </ul>

                    </li>


                    <li class="nav-item"><a class="nav-link" href="/#facilties" To>Facilities</a></li>

                    <!-- <li class="nav-item"><a class="nav-link" href="about.php">Blog</a></li> -->



                    <li class="nav-item"><a class="nav-link" href="/#resto" To>Restaurant</a></li>
                    <li class="nav-item"><a class="nav-link" href="/gallery.php" To>Gallery</a></li>




                    <li class="nav-item"><a class="nav-link" href="/#contact" To>Contact Us</a></li>


                    <div class="butn-dark intersterd md-none"> <a href="javascript:void(0);" To><span>Member Login</span></a></div>
                    <div class="butn-dark intersterd md-block"> <a href="/login" To><span>Member Login</span></a></div>
                </ul>

            </div>

        </div>

    </nav>
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/slider/about.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <!-- <h5>Luxury Hotel</h5> -->
                    <h1>Privacy Policy</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- About -->
    <section class="policy section-padding bg-black">
        <div class="container">
            <div class="">
                <h4>Terms & Conditions</h4>
                <ol class="number-marker">
                    <li>Online payment is intended for members use only.</li>
                    <li>The amount paid through online payment method will be deducted from debit / credit card.</li>
                    <li>Online payment transaction may take up to 24 Hours to reflect in Bombay Gymkhana system.</li>
                    <li>Bombay Gymkhana will not be responsible if online transaction fails due to network /internet issues</li>
                    <li>By using Bombay Gymkhana Website you agree to be responsible for maintaining the confidentiality of member’s username and Password</li>
                </ol>
                <h4 style="width: 100%;">Communications</h4>
                <div>
                    <ol class="number-marker">
                        <li>By using online payment mode you agree to be bound to use electronic medium for communication.</li>
                        <li>You may receive email and/or SMS for the transaction that you do on our website.</li>
                    </ol>
                </div>
                <h4 style="width: 100%;">Privacy Policy</h4>
                <p style="color:#fff;">We value the trust you place in us at Bombay Gymkhana</p>
                <p style="color:#fff;">Please read the following statement to learn about our information gathering and dissemination practices.</p>
                <p style="color:#fff;">We view protection of your privacy as a very important principle and we understand clearly that You and Your Personal Information is one of our most important assets.</p>
                <ol class="number-marker">
                    <li>Our privacy policy is subject to change without notice at any time, to make sure you are aware of
                        any changes, please review this policy periodically.</li>
                    <li>By using <a href="www.bombaygymkhana.com">bombaygymkhana</a> website you agree all the terms and conditions of
                        Bombay Gymkhana</li>
                    <li>Credit Card / Debit Card / Net banking details are not stored on our website/servers.</li>
                    <li>Only Online transaction records are stored on website for further accounting references.</li>
                    <li>Bombay Gymkhana does not share member’s personal information with any other third party domain outside Bombay Gymkhana.</li>
                    <li>It is important for you to protect yourself against unauthorised access to your password and to your computer during online transactions.</li>
                    <li>Please make sure to sign off when you finish using a shared computer for online transaction.</li>
                </ol>
                <h4>Refund Policy</h4>
                <ol class="number-marker">
                    <li>Payment made via online payment towards monthly bill settlement cannot be refunded online.</li>
                    <li>Any discrepancy should be reported to Accounts department during business working hours
                        from 10 Am To 5 Pm except Sundays & Bank Holidays</li>
                    <li>While availing any of the payment method/s available on the Website/ App, we will not be
                        responsible or assume any liability, whatsoever in respect of any loss or damage arising directly
                        or indirectly to you due to:
                        <ul class="page-list mb-30 list-style-none">
                            <li>
                                <div class="page-list-icon"><img src="images/yellow-icons/bullet-point.png" class="bullet-points" alt=""></div>
                                <div>
                                    <p>Lack of authorization for any transaction/s, or</p>
                                </div>
                            </li>
                            <li>
                                <div class="page-list-icon"><img src="images/yellow-icons/bullet-point.png" class="bullet-points" alt=""></div>
                                <div>
                                    <p>Exceeding the preset limit mutually agreed by You and between “Bank/s”, or</p>
                                </div>
                            </li>
                            <li>
                                <div class="page-list-icon"><img src="images/yellow-icons/bullet-point.png" class="bullet-points" alt=""></div>
                                <div>
                                    <p>Any payment issues arising out of the transaction, or</p>
                                </div>
                            </li>
                            <li>
                                <div class="page-list-icon"><img src="images/yellow-icons/bullet-point.png" class="bullet-points" alt=""></div>
                                <div>
                                    <p>Decline of transaction for any other reason/s</p>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ol>
            </div>
        </div>
        <button class="pwa-button" onclick="window.history.back()"><img src="images/yellow-icons/left-arrow.png" alt="" style="height: 36px;margin-top:10px;"></button>
    </section>





    <!-- Footer -->
    <!-- Footer -->

    <footer class="footer" id="contact">

        <div class="footer-top">

            <div class="container">

                <div class="row">

                    <div class="col-md-4 ">

                        <div class="footer-column footer-about">

                            <h3 class="footer-title">Bombay Gymkhana</h3>

                            <p class="footer-about-text">Bombay Gymkhana established in 1875, is one of the premiere
                                gymkhanas (sports arena) in the city of Mumbai (Bombay), India.</p>



                            <div class="footer-language">

                                <div>
                                    <div class="butn-dark ">
                                        <!-- <option value="about.php">Read More</option> -->
                                        <!-- <a href="#about">Read More</a> -->
                                        <a href="/about-us.php" To><span>Read More</span></a>

                                    </div>
                                    <!-- <option value="http://duruthemes.com/">German</option> -->

                                </div>

                            </div>
                            <br>
                            <br>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3773.864349987316!2d72.8286042!3d18.9373975!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7d1dea37f4519%3A0x9292504f765747c3!2sBombay%20Gymkhana!5e0!3m2!1sen!2sin!4v1660075298449!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


                        </div>

                    </div>

                    <!-- <div class="col-md-3 offset-md-1">

                        <div class="footer-column footer-explore clearfix">

                            <h3 class="footer-title">Quick links</h3>

                            <ul class="footer-explore-list list-unstyled">

                                <li><a href="#"> Rules & Regulations</a></li>

                                <li><a href="#">Membership Tender</a></li>

                                <li><a href="#">Documents Annual Report</a></li>

                                <li><a href="#">Committee</a></li>

                                <li><a href="#">Black & Gold</a></li>

                                <li><a href="#">Monthly Activites at a glance</a></li>

                            </ul>

                        </div>

                    </div> -->

                    <div class="col-md-4">

                        <div class="footer-column footer-contact">
                            <h3 class="footer-title">Quick links</h3>

                            <ul class="footer-explore-list list-unstyled">

                                <li><a href="tender-documents.php">Tender Documents </a></li>
                                <li><a href="privacypolicy.php">Privacy Policy</a></li>
                                <li><a href="csrpolicy.php">CSR Policy</a></li>
                                <li class="md-none"><a href="/about-us.php#desktop-vmv">Vision</a></li>
                                <li class="md-block"><a href="/about-us.php#mobile-vmv">Vision</a></li>
                            </ul>
                            <h3 class="footer-title">Contact</h3>

                            <p class="footer-contact-text">Mahatma Gandhi Road, Opp Fashion Street,<br> Azad Maidan,
                                Fort, Mumbai, Maharashtra 400001.</p>

                            <div class="footer-contact-info">
                                <p class="footer-contact-phone"><a href="tel:+912243223400">
                                        <img src="/images/white-icons/Call_1.png" class="footer-icons" alt=""> 022 4322 3400</a>

                                </p>

                                <p class="footer-contact-mail"><a href="mailto:admin@bombaygymkhana.com">
                                        <img src="/images/white-icons/Email_1.png" class="footer-icons" alt=""> admin@bombaygymkhana.com</a>

                                </p>

                            </div>

                            <div class="footer-about-social-list">

                                <a href="https://www.instagram.com/bombaygymkhana/?igshid=YmMyMTA2M2Y%3D" target="_blank"><i class="ti-instagram"></i></a>



                                <a href="https://www.facebook.com/BombayGymkhanaOfficial" target="_blank"><i class="ti-facebook"></i></a>


                            </div>

                        </div>

                    </div>


                    <div class="col-md-4">

                        <div class="booking-inner clearfix">
                            <form method="post" action="" class="form1 clearfix">

                                <div class="row">

                                    <div class="col-md-12">

                                        <div class="input1_wrapper">

                                            <label>Name</label>

                                            <div class="input1_inner">

                                                <input type="text" name="clientname" class="form-control input " placeholder="Name">

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-md-12">

                                        <div class="input1_wrapper">

                                            <label>Mobile</label>

                                            <div class="input1_inner">

                                                <input type="text" name="phone" class="form-control input " placeholder="Mobile">

                                            </div>
                                            <label for="email" class="error"></label>

                                        </div>

                                    </div>



                                    <div class="col-md-12">

                                        <div class="input1_wrapper">

                                            <label>Email</label>

                                            <div class="input1_inner">

                                                <input type="text" name="email" class="form-control input" placeholder="Email">

                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" name="enquirysubmit" class="btn-form1-submit mt-15">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <?php

                            use PHPMailer\PHPMailer\PHPMailer;
                            use PHPMailer\PHPMailer\Exception;

                            require 'PHPMailer-master/src/PHPMailer.php';
                            require 'PHPMailer-master/src/Exception.php';
                            require 'PHPMailer-master/src/SMTP.php';

                            if (isset($_POST['enquirysubmit'])) {
                                $name = $_POST['clientname'];
                                $phone = $_POST['phone'];
                                $email = $_POST['email'];


                                $mail = new PHPMailer(true);
                                $subject = "Enquiry Form"; //getting subject line from client
                                //Message for client confirmation
                                $message2 = "Name : " . $name . "\n\n" 
                                    . "Phone : " . $phone . "\n\n"
                                    . "Email : " . $email . "\n\n";

                                $mail->isSMTP();
                                $mail->Host = 'smtpbp.falconide.com';
                                $mail->SMTPAuth = true;
                                $mail->Username = 'bombaygymkhana';
                                $mail->Password = 'Mumbai@16';
                                $mail->SMTPSecure = 'Tls';
                                $mail->Port = '587';
                                $mail->setFrom('admin@bombaygymkhana.com');
                                $mail->addAddress('admin@bombaygymkhana.com');
                                $mail->isHTML(true);
                                $mail->Subject =  $subject;
                                $mail->Body = $message2;
                                $mail->send();

                                echo "<script>alert('Form Submitted');</script>";
                            }
                            ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="footer-bottom">

            <div class="container">

                <div class="row">

                    <div class="col-md-12">

                        <div class="footer-bottom-inner">

                            <p class="footer-bottom-copy-right">© Copyright 2023. Designed & Developed by The Works
                                <a href="#"></a>
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </footer>






    <div class="modal fade " tabindex="-1" role="dialog" id="enquire-modal" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- Booking From -->
                    <div class="col-md-12">
                        <div class="booking-box" id="log-form">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <div class="head-box">
                                <!-- <h6>Rooms & Suites</h6> -->
                                <h4>Member Login</h4>
                            </div>
                            <div class="booking-inner clearfix">
                                <form action="javascript:void(0);" class="form1 clearfix" id="enquire" onsubmit="return save_landing_pageinfo();">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="input1_wrapper">
                                                <!-- <label>Check in</label> -->
                                                <div class="input1_inner">
                                                    <input type="text" name="clientid1" oninput="this.value = this.value.toUpperCase()" class="form-control input " placeholder="e.g A/AB">
                                                    <label for="clientid1" class="error"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input1_wrapper">
                                                <!-- <label>Check in</label> -->
                                                <div class="input1_inner">
                                                    <input type="text" name="clientid2" class="form-control input " placeholder="e.g 001">
                                                    <label for="clientid2" class="error"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input1_wrapper">
                                                <!-- <label>Check in</label> -->
                                                <div class="input1_inner">
                                                    <input type="text" name="clientid3" class="form-control input " placeholder="e.g 01">
                                                    <label for="clientid3" class="error"></label>
                                                    <input type="hidden" name="uniqid" value="logpass">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="input1_wrapper">
                                                <!-- <label>Check in</label> -->
                                                <div class="input1_inner">
                                                    <input type="password" name="pass" class="form-control input " placeholder="Password">
                                                    <label for="pass" class="error"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <p id="errormsg">Invalid User Id or Password</p>
                                            <button type="submit" id="submit" class="btn-form1-submit mt-15">Login</button>
                                            <p class="gentxt">
                                                Don’t Have a Password?
                                                <a href="/generate.php" id="">
                                                    <b> Click here</b>
                                                </a> to Generate
                                            </p>
                                        </div>
                                        <p id="pass"></p>
                                        <p id="strmem"></p>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <!-- ============================================= -->

    <!-- <script src="js/jquery-3.6.0.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script src="js/jquery-migrate-3.0.0.min.js"></script>

    <script src="js/modernizr-2.6.2.min.js"></script>

    <script src="js/imagesloaded.pkgd.min.js"></script>

    <!-- <script src="js/jquery.isotope.v3.0.2.js"></script> -->

    <script src="js/pace.js"></script>

    <!-- <script src="js/popper.min.js"></script> -->

    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


    <script src="js/scrollIt.min.js"></script>

    <script src="js/jquery.waypoints.min.js"></script>

    <!-- <script src="js/owl.carousel.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.min.js"></script>

    <script src="js/jquery.stellar.min.js"></script>

    <script src="js/jquery.magnific-popup.js"></script>

    <script src="js/YouTubePopUp.js"></script>

    <script src="js/select2.js"></script>

    <script src="js/datepicker.js"></script>

    <script src="js/smooth-scroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

    <!-- <script src="js/jquery.validate.js"></script> -->

    <script src="js/custom.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.js"></script>

    <script src="js/cookie.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script>
        const constraints = {
            name: {
                presence: {
                    allowEmpty: false
                }
            },
            email: {
                presence: {
                    allowEmpty: false
                },
                email: true
            },
            mobile: {
                presence: {
                    allowEmpty: false
                }
            }
        };
        const form = document.getElementById('contact-form');
        form.addEventListener('submit', function(event) {
            const formValues = {
                name: form.elements.name.value,
                email: form.elements.email.value,
                mobile: form.elements.mobile.value
            };
            const errors = validate(formValues, constraints);
            if (errors) {
                event.preventDefault();
                const errorMessage = Object
                    .values(errors)
                    .map(function(fieldValues) {
                        return fieldValues.join(', ')
                    })
                    .join("\n");
                alert(errorMessage);
            }
        }, false);
    </script>

    <script>
        $(document).ready(function() {
            $(".hamburger").click(function() {
                $(this).toggleClass("is-active");
            });


            $("li.nav-item").click(function() {
                $(".hamburger").removeClass("is-active");
                $(".navbar-toggler").removeClass("collapsed");
                $(".navbar-collapse").removeClass("show");
            });


        });
    </script>



<script>
        $(document).ready(function() {
            var valcook = Cookies.get('validmemcode');

            // alert(valcook);

            if (typeof valcook !== "undefined") {
                window.location.href = "/myprofile.php#user-profile";
            }

        });

        function save_landing_pageinfo(elm) {
            setTimeout(function() {
                $('input[type="submit"]').attr('disabled', 'disabled');
            }, 5000);
            var clientid1 = jQuery('input[name="clientid1"]').val();
            var clientid2 = jQuery('input[name="clientid2"]');
            var clientid4 = clientid2.val();
            const numbersAndSpaces1 = clientid1.match(/[0-9a-zA-Z]/g);
            const count1 = numbersAndSpaces1 ? numbersAndSpaces1.length : 0;
            const numbersAndSpaces = clientid2.val().match(/[0-9a-zA-Z\s]/g);
            const count = numbersAndSpaces ? numbersAndSpaces.length : 0; // Count the numbers, or default to 0 if no numbers found
            console.log(count);
            var clientid3 = jQuery('input[name="clientid3"]').val();
            var pass = jQuery('input[name="pass"]').val();
            var uniqid = jQuery('input[name="uniqid"]').val();
            if (clientid1 == "") {
                return false;
            }

            if (clientid2 == "") {
                return false;
            }


            if (clientid1 == "") {
                return false;
            }


            if (pass == "") {
                return false;
            }

            if (count1 === 1) {
                if (count === 0) {
                    var fullid = clientid1 + "-" + clientid2.val() + "      " + clientid3;
                } else if (count === 1) {
                    var fullid = clientid1 + "-" + clientid2.val() + "     " + clientid3;
                } else if (count === 2) {
                    var fullid = clientid1 + "-" + clientid2.val() + "    " + clientid3;
                } else if (count === 3) {
                    var fullid = clientid1 + "-" + clientid2.val() + "   " + clientid3;
                } else if (count === 4) {
                    var fullid = clientid1 + "-" + clientid2.val() + "  " + clientid3;
                } else if (count === 5) {
                    var fullid = clientid1 + "-" + clientid2.val() + " " + clientid3;
                } else {
                    var fullid = clientid1 + "-" + clientid2.val() + "" + clientid3;
                }
            } else if (count1 === 2) {
                if (count === 0) {
                    var fullid = clientid1 + "-" + clientid2.val() + "     " + clientid3;
                } else if (count === 1) {
                    var fullid = clientid1 + "-" + clientid2.val() + "    " + clientid3;
                } else if (count === 2) {
                    var fullid = clientid1 + "-" + clientid2.val() + "   " + clientid3;
                } else if (count === 3) {
                    var fullid = clientid1 + "-" + clientid2.val() + "  " + clientid3;
                } else if (count === 4) {
                    var fullid = clientid1 + "-" + clientid2.val() + " " + clientid3;
                } else if (count === 5) {
                    var fullid = clientid1 + "-" + clientid2.val() + "" + clientid3;
                }
            } else if (count1 === 3) {
                if (count === 0) {
                    var fullid = clientid1 + "-" + clientid2.val() + "    " + clientid3;
                } else if (count === 1) {
                    var fullid = clientid1 + "-" + clientid2.val() + "   " + clientid3;
                } else if (count === 2) {
                    var fullid = clientid1 + "-" + clientid2.val() + "  " + clientid3;
                } else if (count === 3) {
                    var fullid = clientid1 + "-" + clientid2.val() + " " + clientid3;
                } else if (count === 4) {
                    var fullid = clientid1 + "-" + clientid2.val() + "" + clientid3;
                }
            } else if (count1 === 4) {
                if (count === 0) {
                    var fullid = clientid1 + "-" + clientid2.val() + "   " + clientid3;
                } else if (count === 1) {
                    var fullid = clientid1 + "-" + clientid2.val() + "  " + clientid3;
                } else if (count === 2) {
                    var fullid = clientid1 + "-" + clientid2.val() + " " + clientid3;
                } else if (count === 3) {
                    var fullid = clientid1 + "-" + clientid2.val() + "" + clientid3;
                }
            } else if (count1 === 5) {
                if (count === 0) {
                    var fullid = clientid1 + "-" + clientid2.val() + "  " + clientid3;
                } else if (count === 1) {
                    var fullid = clientid1 + "-" + clientid2.val() + " " + clientid3;
                } else if (count === 2) {
                    var fullid = clientid1 + "-" + clientid2.val() + "" + clientid3;
                }
            } else if (count1 === 6) {
                if (count === 0) {
                    var fullid = clientid1 + "-" + clientid2.val() + " " + clientid3;
                } else if (count === 1) {
                    var fullid = clientid1 + "-" + clientid2.val() + "" + clientid3;
                }
            }
            console.log(fullid);
            var expirationTime2 = new Date();
            expirationTime2.setTime(expirationTime2.getTime() + (60 * 60 * 24 * 30 * 6 * 1000));

            $.cookie('pass', pass, {
                expires: expirationTime2,
                path: '/'
            });
            $.cookie('uniqid', uniqid, {
                expires: expirationTime2,
                path: '/'
            });
            $.cookie('clientid1', clientid1, {
                expires: expirationTime2,
                path: '/'
            });
            $.cookie('clientid2', clientid4, {
                expires: expirationTime2,
                path: '/'
            });
            $.cookie('clientid3', clientid3, {
                expires: expirationTime2,
                path: '/'
            });


            $("#preloader").fadeIn();

            var settings = {
                "url": "https://fmprod.dishco.com/shawmanservices/api/CmsValidateMemberPassword/FunValidateMemberPassword?MemberCode=" + fullid + "&Password=" + pass + "&ClubId=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA",
                "method": "POST",
                "timeout": 0,
                "headers": {
                    "ShawManKey": "xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==",
                    "Cookie": "ARRAffinity=48ca49c0ff92bc16f64fbd83ee082709435e8cfad3e75950ce8986cacd2e3113; ARRAffinitySameSite=48ca49c0ff92bc16f64fbd83ee082709435e8cfad3e75950ce8986cacd2e3113"
                },
            };

            $.ajax(settings).done(function(memcode) {
                console.log(memcode);
                if (memcode.StatusCode === 0 && memcode.Result.length > 0) {
                    var expirationTime2 = new Date();
                    expirationTime2.setTime(expirationTime2.getTime() + (60 * 60 * 24 * 30 * 6 * 1000));
                    $.cookie('validmemcode', fullid, {
                        expires: expirationTime2,
                        path: '/'
                    });
                    $.cookie('memcode', JSON.stringify(memcode), {
                        expires: expirationTime2,
                        path: '/'

                    });
                    window.location.href = "/myprofile.php#user-profile";
                    var correct = "correct";
                }
            });
        };
    </script>
</body>


</html>