<!DOCTYPE html>

<html lang="zxx">



<head>

    <script>
        self.addEventListener('fetch', function(event) {
            event.respondWith(async function() {
                try {
                    var res = await fetch(event.request);
                    var cache = await
                    caches.open('cache');
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

                <a href="index.php">

                    <div class="logo">

                        <img src="img/logo.png" class="logo-img" alt="">

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

                    <!-- <li class="nav-item dropdown"> <span class="nav-link active"> Home <i class="ti-angle-down"></i></span>

                  <ul class="dropdown-menu last">

                      <li class="dropdown-item active"><a href="index.php">Home Layout 1</a></li>

                      <li class="dropdown-item"><a href="index2.php">Home Layout 2</a></li>

                      <li class="dropdown-item"><a href="index3.php">Home Layout 3</a></li>

                      <li class="dropdown-item"><a href="index4.php">Home Layout 4</a></li>

                      <li class="dropdown-item"><a href="index5.php">Home Layout 5</a></li>

                  </ul>

              </li> -->

                    <li class="nav-item"><a class="nav-link " href="index.php" To>Home</a></li>
                    <!-- <li class="nav-item"><a class="nav-link " href="#" To>About</a></li> -->

                    <li class="nav-item dropdown"> <span class="nav-link"> About <i class="ti-angle-down"></i></span>

                        <ul class="dropdown-menu last">

                            <li class="dropdown-item "><a href="about-us.php">About Club</a></li>

                            <li class="dropdown-item"><a href="about-club.php">Club History</a></li>



                        </ul>

                    </li>


                    <li class="nav-item"><a class="nav-link" href="index.php#facilties" To>Facilities</a></li>

                    <!-- <li class="nav-item"><a class="nav-link" href="about.php">Blog</a></li> -->



                    <li class="nav-item"><a class="nav-link" href="index.php#resto" To>Restaurant</a></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.php" To>Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#contact" To>Contact Us</a></li>
                    <div class="butn-dark intersterd"> <a href="javascript:void(0);" To><span>Member Login</span></a>
                        <!--
              <li class="nav-item dropdown"> <span class="nav-link"> About Gymkhana <i class="ti-angle-down"></i></span>
                  <ul class="dropdown-menu last">
                      <li class="dropdown-item"><a href="rooms.php">Rooms 1</a></li>
                      <li class="dropdown-item"><a href="rooms2.php">Rooms 2</a></li>
                      <li class="dropdown-item"><a href="rooms3.php">Rooms 3</a></li>
                      <li class="dropdown-item"><a href="room-details.php">Room Details</a></li>
                  </ul>

              </li>

              <li class="nav-item"><a class="nav-link" href="spa-wellness.php">Spa</a></li>

              <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>

              <li class="nav-item dropdown"> <span class="nav-link"> News <i class="ti-angle-down"></i></span>

                  <ul class="dropdown-menu last">

                      <li class="dropdown-item"><a href="news.php">News 1</a></li>

                      <li class="dropdown-item"><a href="news2.php">News 2</a></li>

                      <li class="dropdown-item"><a href="post.php">Single Post</a></li>

                  </ul>

              </li>

              <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li> -->

                </ul>

            </div>

        </div>

    </nav>
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/slider/lib.jpg" style="background-image: url('img/slider/lib.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <!-- <h5>Luxury Hotel</h5> -->
                    <h1>Facility Details</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- About -->


    <section id="menu" class="restaurant-menu restaurant-menuold  menu section-padding bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <!-- <div class="section-subtitle"><span>Luxury Hotel</span></div> -->
                    <div class="section-title"><a href="unwindzonefacility.php"><span class="ti-arrow-left"></span> </a><span>Library </span><a href="fnbfacility.php"><span class="ti-arrow-right"></span> </a></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row cstm-price sports-box">
                    </div>
                </div>
            </div>
        </div>
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
                                <li><a href="csrpolicy.php" target="_blank">CSR Policy</a></li>
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

                        <div class="booking-box">

                            <div class="head-box">

                                <!-- <h6>Rooms & Suites</h6> -->

                                <h4>Connect With Us</h4>

                            </div>

                            <div class="booking-inner clearfix">
                                <?php
                                $errors = [];
                                $errorMessage = '';
                                if (!empty($_POST)) {
                                    $name = $_POST['name'];
                                    $email = $_POST['email'];
                                    $mobile = $_POST['mobile'];
                                    if (empty($name)) {
                                        $errors[] = 'Name is empty';
                                    }
                                    if (empty($email)) {
                                        $errors[] = 'Email is empty';
                                    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                        $errors[] = 'Email is invalid';
                                    }
                                    if (empty($mobile)) {
                                        $errors[] = 'Mobile is empty';
                                    }
                                    if (empty($errors)) {
                                        $toEmail = 'admin@bombaygymkhana.com';
                                        $emailSubject = 'New Query';
                                        $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];
                                        $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Mobile:", $mobile];
                                        $body = join(PHP_EOL, $bodyParagraphs);
                                        if (mail($toEmail, $emailSubject, $body, $headers)) {
                                            header('Location: thank-you.html');
                                        } else {
                                            $errorMessage = 'Oops, something went wrong. Please try again later';
                                        }
                                    } else {
                                        $allErrors = join('<br/>', $errors);
                                        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
                                    }
                                }
                                ?>
                                <form method="post" id="contact-form" class="form1 clearfix">

                                    <div class="row">

                                        <div class="col-md-12">

                                            <div class="input1_wrapper">

                                                <label>Name</label>

                                                <div class="input1_inner">

                                                    <input type="text" name="name" class="form-control input " placeholder="Name">

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-md-12">

                                            <div class="input1_wrapper">

                                                <label>Mobile</label>

                                                <div class="input1_inner">

                                                    <input type="text" name="mobile" class="form-control input " placeholder="Mobile">

                                                </div>

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

                                            <button type="submit" class="btn-form1-submit mt-15">Submit</button>

                                        </div>

                                        <div class="col-md-12">
                                            <?php echo ((!empty($errorMessage)) ? $errorMessage : '') ?>
                                        </div>

                                    </div>

                                </form>

                            </div>

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

                            <p class="footer-bottom-copy-right">©  Copyright 2023
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
                                            <p id="errormsg"></p>
                                            <button type="submit" id="submit" class="btn-form1-submit mt-15">Login</button>
                                            <p class="gentxt">
                                                Don’t Have a Password?
                                                <a href="javascript:genpass()" id="">
                                                    <b> Click here</b>
                                                </a> to Generate
                                            </p>

                                        </div>




                                        <!-- <p id="ProfileList"></p>
                                <p id="link223"></p>

                                <p id="link1"></p>
                                <p id="link2"></p>
                                <p id="link3"></p>
                                <p id="link4"></p>
                                <p id="link5"></p> -->

                                        <p id="pass"></p>
                                        <p id="strmem"></p>




                                    </div>

                                </form>
                            </div>

                        </div>




                        <div class="booking-box" id="gen-form">



                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                <span aria-hidden="true">×</span>

                            </button>

                            <div class="head-box">

                                <!-- <h6>Rooms & Suites</h6> -->

                                <h4>Genrate Password</h4>

                            </div>

                            <div class="booking-inner clearfix">


                                <form action="javascript:void(0);" class="form1 clearfix" id="genpass-form" onsubmit="return gen_pageinfo();">

                                    <div class="row">

                                        <div class="col-md-4">

                                            <div class="input1_wrapper">

                                                <!-- <label>Check in</label> -->

                                                <div class="input1_inner">

                                                    <input type="text" name="clientid1reset" oninput="this.value = this.value.toUpperCase()" class="form-control input " placeholder="e.g A/AB">

                                                </div>

                                                <label for="clientid1reset" class="error"></label>
                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <div class="input1_wrapper">

                                                <!-- <label>Check in</label> -->

                                                <div class="input1_inner">

                                                    <input type="number" name="clientid2reset" class="form-control input " placeholder="e.g 001">


                                                    <input type="hidden" name="uniqid1" value="genpass">
                                                </div>
                                                <label for="clientid2reset" class="error"></label>

                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <div class="input1_wrapper">

                                                <!-- <label>Check in</label> -->

                                                <div class="input1_inner">

                                                    <input type="text" name="clientid3reset" class="form-control input " placeholder="e.g 01">

                                                </div>
                                                <label for="clientid3reset" class="error"></label>

                                            </div>

                                        </div>

                                        <div class="col-md-12">

                                            <div class="input1_wrapper">

                                                <!-- <label>Check in</label> -->

                                                <div class="input1_inner">

                                                    <input type="password" name="passreset" class="form-control input " placeholder="Password">

                                                </div>
                                                <label for="passreset" class="error"></label>

                                            </div>

                                        </div>



                                        <div class="col-md-12">
                                            <p id="passwordmsg"></p>

                                            <button type="submit" id="genpassword" class="btn-form1-submit mt-15">Genrate</button>
                                            <p class="gentxt">
                                                <a href="javascript:returnlog()" id="">
                                                    <b> Return to Login</b>
                                                </a>
                                            </p>
                                        </div>




                                        <!-- <input type="hidden" id="updateot" value="">

                                <p id="ProfileList"></p>
                                <p id="link223"></p>

                                <p id="link1"></p>
                                <p id="link2"></p>
                                <p id="link3"></p>
                                <p id="link4"></p>
                                <p id="link5"></p>
-->

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    let library = [
        {
            name: "Children's Library ",
            desc: "The Bombay Gymkhana Library has a children’s wing operated by Akshara Children’s Library. Located near the Main Reception, it has a vast collection of books and puzzles for children between the ages of 2yrs-15 yrs. Parents and children can sit and read there to their heart’s content and can also borrow books/ puzzles at a nominal charge.",
        },
        {
            name: "Library",
            desc: "The Bombay Gymkhana library boasts of a huge collection of books on varied topics ranging from the latest fiction to current affairs to history to art and a host of other topics. A huge selection of magazines and newspapers from around the world are also available for the avid reader. Members can read to their hearts content in a peaceful air-conditioned environment.",
        },

    ]
    for (let i = 0; i < library.length; i++) {
        $(".cstm-price").append(`<div class="pricing-cardint col-md-4 sm-img-blk">
<div class="desc">
    <div class="name">${library[i].name}</div>
    <div class="amount"><span> ${library[i].desc}</span></div>
</div>
</div>`)
    }
    </script>
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
                window.location.href = "myprofile.php";
            }

        });



        function save_landing_pageinfo(elm) {
            setTimeout(function() {
                $('input[type="submit"]').attr('disabled', 'disabled');
            }, 5000);
            // alert("success");
            //    var clientid1 = $("#client-id1").val();
            // var clientid2 = $("#client-id2").val();
            // var clientid3 = $("#client-id3").val();

            var clientid1 = jQuery('input[name="clientid1"]').val();
            var clientid2 = jQuery('input[name="clientid2"]').val();

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



            // setTimeout(function() {
            //     $('#submit').attr('disabled', 'disabled');
            // }, 5000);

            $("#preloader").fadeIn();


            var requetsdata = '{"clientid1":"' + clientid1 + '","clientid2":"' + clientid2 + '","clientid3":"' +
                clientid3 + '","pass":"' + pass + '","uniqid":"' +
                uniqid + '"}';

            $.ajax({
                type: "POST",
                url: "login-in.php",
                dataType: "json",
                data: requetsdata,
                success: function(data) {
                    // $("#preloader").fadeIn();

                    if (data.code == "200") {


                        // alert("Suceddd");
                        // document.getElementById("updateot").value = data.lead1;
                        // document.getElementById("link223").innerHTML = data.lead1;

                        let checkpass = data.userpass;
                        // document.getElementById("otpsent").innerHTML =
                        //     "OTP Resent !";
                        var mydata = JSON.parse(data.lead1);
                        // alert(mydata);

                        console.log(mydata);


                        // alert(obj.Result[0].MemberCode);
                        // document.getElementById("link1").innerHTML = obj.Result[0].MemberCode;
                        // document.getElementById("link2").innerHTML = obj.Result[0].MemberName;
                        // document.getElementById("link3").innerHTML = obj.Result[0]
                        // .CorrespondenceAddress;
                        // document.getElementById("link4").innerHTML = obj.Result[0].EmailId;
                        // document.getElementById("link5").innerHTML = obj.Result[0].dtDateofBirth;

                        var CookieValue = Cookies.get('response');

                        //   alert(CookieValue);
                        const obj = JSON.parse(CookieValue);
                        const objpass = JSON.parse(data.userpass);
                        // document.getElementById("pass").innerHTML = objpass.Result[0].StrMembercode;
                        // document.getElementById("strmem").innerHTML = objpass.Result[0].StrPassword;

                        let fullid = clientid1 + "-" + clientid2 + "   " + clientid3;
                        // var memcode = obj.Result[0].MemberCode;
                        // var mempass = objpass.Result[0].StrPassword;

                        // alert(obj.StatusDescription)

                        if (objpass.StatusDescription == "Success") {

                            $('#preloader').fadeOut(300, function() {
                                $('#preloader').remove();
                            });
                            // $("#preloader").fadeIn();
                            window.location.href = "myprofile.php";

                            // jwtfunction();

                        } else {
                            // alert("worng userid or pasword");
                            $('#preloader').fadeOut(300, function() {
                                $('#preloader').remove();
                            });
                            document.getElementById("errormsg").innerHTML = "Invalid User Id or Password";
                        }

                    } else {
                        // document.getElementById("third-form").style.display = "block";
                        alert("fail");


                    }
                }
            })
        };


        function gen_pageinfo(elm) {

            $('#genpassword').click(function() {

                // setTimeout(function() {
                //     $('input[type="submit"]').attr('disabled', 'disabled');
                // }, 5000);

                var clientid1 = jQuery('input[name="clientid1reset"]').val();
                var clientid2 = jQuery('input[name="clientid2reset"]').val();

                var clientid3 = jQuery('input[name="clientid3reset"]').val();
                var pass = jQuery('input[name="passreset"]').val();
                var uniqid = jQuery('input[name="uniqid1"]').val();



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


                var requetsdata = '{"clientid1":"' + clientid1 + '","clientid2":"' + clientid2 + '","clientid3":"' +
                    clientid3 + '","pass":"' + pass + '","uniqid":"' +
                    uniqid + '"}';


                $.ajax({
                    type: "POST",
                    url: "login-in.php",
                    dataType: "json",
                    data: requetsdata,
                    success: function(data) {
                        if (data.code == "200") {
                            // alert('Successfully retrieved token from the server! Token: ' + data.token);
                            // alert("Sucedddpass");
                            // document.getElementById("updateot").value = data.lead1;
                            // document.getElementById("link223").innerHTML = data.lead1;
                            // document.getElementById("otpsent").innerHTML =
                            //     "OTP Resent !";
                            var passinfo = JSON.parse(data.passifo);

                            document.getElementById("passwordmsg").innerHTML = passinfo.Result[0].Remark;
                            // window.location.href = "my-account.php";
                            setTimeout(function() {
                                document.getElementById("gen-form").style.display = "none";
                                document.getElementById("log-form").style.display = "block";
                                // alert(mydata);
                            }, 8000);


                        } else {
                            // document.getElementById("third-form").style.display = "block";
                            alert("fail");


                        }
                    }
                });

            });
        };
    </script>
    <script>
        (function($) {
            $.fn.timeline = function() {
                var selectors = {
                    id: $(this),
                    item: $(this).find(".timeline-item"),
                    activeClass: "timeline-item--active",
                    img: ".timeline__img"
                };
                selectors.item.eq(0).addClass(selectors.activeClass);
                selectors.id.css(
                    "background-image",
                    "url(" +
                    selectors.item
                    .first()
                    .find(selectors.img)
                    .attr("src") +
                    ")"
                );
                var itemLength = selectors.item.length;
                $(window).scroll(function() {
                    var max, min;
                    var pos = $(this).scrollTop();
                    selectors.item.each(function(i) {
                        min = $(this).offset().top;
                        max = $(this).height() + $(this).offset().top;
                        var that = $(this);
                        if (i == itemLength - 2 && pos > min + $(this).height() / 2) {
                            selectors.item.removeClass(selectors.activeClass);
                            selectors.id.css(
                                "background-image",
                                "url(" +
                                selectors.item
                                .last()
                                .find(selectors.img)
                                .attr("src") +
                                ")"
                            );
                            selectors.item.last().addClass(selectors.activeClass);
                        } else if (pos <= max - 40 && pos >= min) {
                            selectors.id.css(
                                "background-image",
                                "url(" +
                                $(this)
                                .find(selectors.img)
                                .attr("src") +
                                ")"
                            );
                            selectors.item.removeClass(selectors.activeClass);
                            $(this).addClass(selectors.activeClass);
                        }
                    });
                });
            };
        })(jQuery);

        $("#timeline-1").timeline();
    </script>

</body>


</html>