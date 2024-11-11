<!DOCTYPE html>
<html lang="zxx">

<head>
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
                    <h1>Verification</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="about section-padding bg-black" id="about">
        <!-- <button class="add-button">Add to home screen</button> -->
        <div class="container">
            <div class="row ">
                <div class="col-md-6" style="margin:auto">
                    <div class="booking-box" id="log-form">
                        <div class="head-box">
                            <!-- <h6>Rooms & Suites</h6> -->
                            <h4>Generate Password</h4>
                        </div>
                        <div class="booking-inner">
                            <form method="post" class="form1" action="javascript:void(0);" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input1_wrapper">
                                            <!-- <label>Check in</label> -->
                                            <div class="input1_inner">
                                                <input type="text" name="clientid1reset" id="clientid1reset" oninput="this.value = this.value.toUpperCase()" class="form-control input " placeholder="e.g A/AB" disabled>
                                                <label for="clientid1reset" class="error"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input1_wrapper">
                                            <!-- <label>Check in</label> -->
                                            <div class="input1_inner">
                                                <input type="text" name="clientid2reset" id="clientid2reset" class="form-control input " placeholder="e.g 001" disabled>
                                                <label for="clientid2reset" class="error"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input1_wrapper">
                                            <!-- <label>Check in</label> -->
                                            <div class="input1_inner">
                                                <input type="text" name="clientid3reset" id="clientid3reset" class="form-control input " placeholder="e.g 01" disabled>
                                                <label for="clientid3reset" class="error"></label>
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
                                        <button type="submit" id="submit" name="submit" class="btn-form1-submit mt-15">Generate Password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

                        <div class="booking-box">

                            <div class="head-box">

                                <!-- <h6>Rooms & Suites</h6> -->

                                <h4>Connect With Us</h4>

                            </div>

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


    <!-- <script src="js/jquery-3.6.0.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- <script src="js/popper.min.js"></script> -->

    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- <script src="js/jquery.validate.js"></script> -->

    <script src="js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.js"></script>
    <script src="js/cookie.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            var CookieValue1 = Cookies.get('clientid1');
            document.getElementById("clientid1reset").value = CookieValue1;
            var CookieValue2 = Cookies.get('clientid2');
            document.getElementById("clientid2reset").value = CookieValue2;
            var CookieValue3 = Cookies.get('clientid3');
            document.getElementById("clientid3reset").value = CookieValue3;
        });
    </script>
    <script>
        $(document).ready(function() {
            var CookieValue1 = Cookies.get('verify');
            var verify = CookieValue1;
            if (verify === "verified") {} else {
                window.location.href = "https://bombaygymkhana.com/verification.php";
            }
        });
    </script>
    <script>
        $('#submit').click(function() {

            const clientid1 = $('input[name="clientid1reset"]').val();
            const clientid2 = $('input[name="clientid2reset"]').val();
            const clientid4 = clientid2;
            const numbersAndSpaces1 = clientid1.match(/[0-9a-zA-Z]/g);
            const count1 = numbersAndSpaces1 ? numbersAndSpaces1.length : 0;
            const numbersAndSpaces = clientid2.match(/[0-9a-zA-Z\s]/g);
            const count = numbersAndSpaces ? numbersAndSpaces.length : 0;
            console.log(count);
            const clientid3 = $('input[name="clientid3reset"]').val();
            const pass = $('input[name="pass"]').val();
            if (count1 === 1) {
                if (count === 1) {
                    var fullid1 = clientid1 + "-" + clientid4 + "     " + clientid3;
                    var settings = {
                        "url": "https://fmprod.dishco.com/shawmanservices/api/CmsResetMemberPassword/FunResetMemberPassword?Clubid=13&NewPassword=" + pass + "&ClientId=011.001&MemberCode=" + fullid1 + "&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA",
                        "method": "GET",
                        "timeout": 0,
                        "headers": {
                            "ShawManKey": "xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==",
                            "Cookie": "ARRAffinity=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50; ARRAffinitySameSite=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50"
                        },
                    };
                    $.ajax(settings).done(function(response) {
                        console.log(response);
                        var cookieValue1 = JSON.stringify(response); // convert the object to JSON string
                        document.cookie = "pwdchange=" + cookieValue1 + ";path=/";
                        if (response.StatusCode === 0 && response.StatusDescription === "Success") {
                            Swal.fire({
                                title: "Password Generated",
                                text: "Your password has been generated successfully",
                                icon: "success",
                                button: "Okay",
                            }).then(() => {
                                window.location.href = "https://bombaygymkhana.com/index.php";
                            });
                        } else {
                            Swal.fire("Password Generation Failed", "", "error");
                        }
                    })
                } else if (count === 2) {
                    var fullid2 = clientid1 + "-" + clientid4 + "    " + clientid3;
                    var settings = {
                        "url": "https://fmprod.dishco.com/shawmanservices/api/CmsResetMemberPassword/FunResetMemberPassword?Clubid=13&NewPassword=" + pass + "&ClientId=011.001&MemberCode=" + fullid2 + "&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA",
                        "method": "GET",
                        "timeout": 0,
                        "headers": {
                            "ShawManKey": "xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==",
                            "Cookie": "ARRAffinity=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50; ARRAffinitySameSite=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50"
                        },
                    };
                    $.ajax(settings).done(function(response) {
                        console.log(response);
                        var cookieValue1 = JSON.stringify(response); // convert the object to JSON string
                        document.cookie = "pwdchange=" + cookieValue1 + ";path=/";
                        if (response.StatusCode === 0 && response.StatusDescription === "Success") {
                            Swal.fire({
                                title: "Password Generated",
                                text: "Your password has been generated successfully",
                                icon: "success",
                                button: "Okay",
                            }).then(() => {
                                window.location.href = "https://bombaygymkhana.com/index.php";
                            });
                        } else {
                            Swal.fire("Password Generation Failed", "", "error");
                        }
                    })
                } else if (count === 3) {
                    var fullid3 = clientid1 + "-" + clientid4 + "   " + clientid3;
                    var settings = {
                        "url": "https://fmprod.dishco.com/shawmanservices/api/CmsResetMemberPassword/FunResetMemberPassword?Clubid=13&NewPassword=" + pass + "&ClientId=011.001&MemberCode=" + fullid3 + "&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA",
                        "method": "GET",
                        "timeout": 0,
                        "headers": {
                            "ShawManKey": "xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==",
                            "Cookie": "ARRAffinity=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50; ARRAffinitySameSite=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50"
                        },
                    };
                    $.ajax(settings).done(function(response) {
                        console.log(response);
                        var cookieValue1 = JSON.stringify(response); // convert the object to JSON string
                        document.cookie = "pwdchange=" + cookieValue1 + ";path=/";
                        if (response.StatusCode === 0 && response.StatusDescription === "Success") {
                            Swal.fire({
                                title: "Password Generated",
                                text: "Your password has been generated successfully",
                                icon: "success",
                                button: "Okay",
                            }).then(() => {
                                window.location.href = "https://bombaygymkhana.com/index.php";
                            });
                        } else {
                            Swal.fire("Password Generation Failed", "", "error");
                        }
                    })
                } else if (count === 4) {
                    var fullid3 = clientid1 + "-" + clientid4 + "  " + clientid3;
                    var settings = {
                        "url": "https://fmprod.dishco.com/shawmanservices/api/CmsResetMemberPassword/FunResetMemberPassword?Clubid=13&NewPassword=" + pass + "&ClientId=011.001&MemberCode=" + fullid3 + "&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA",
                        "method": "GET",
                        "timeout": 0,
                        "headers": {
                            "ShawManKey": "xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==",
                            "Cookie": "ARRAffinity=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50; ARRAffinitySameSite=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50"
                        },
                    };
                    $.ajax(settings).done(function(response) {
                        console.log(response);
                        var cookieValue1 = JSON.stringify(response); // convert the object to JSON string
                        document.cookie = "pwdchange=" + cookieValue1 + ";path=/";
                        if (response.StatusCode === 0 && response.StatusDescription === "Success") {
                            Swal.fire({
                                title: "Password Generated",
                                text: "Your password has been generated successfully",
                                icon: "success",
                                button: "Okay",
                            }).then(() => {
                                window.location.href = "https://bombaygymkhana.com/index.php";
                            });
                        } else {
                            Swal.fire("Password Generation Failed", "", "error");
                        }
                    })
                } else if (count === 5) {
                    var fullid3 = clientid1 + "-" + clientid4 + " " + clientid3;
                    var settings = {
                        "url": "https://fmprod.dishco.com/shawmanservices/api/CmsResetMemberPassword/FunResetMemberPassword?Clubid=13&NewPassword=" + pass + "&ClientId=011.001&MemberCode=" + fullid3 + "&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA",
                        "method": "GET",
                        "timeout": 0,
                        "headers": {
                            "ShawManKey": "xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==",
                            "Cookie": "ARRAffinity=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50; ARRAffinitySameSite=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50"
                        },
                    };
                    $.ajax(settings).done(function(response) {
                        console.log(response);
                        var cookieValue1 = JSON.stringify(response); // convert the object to JSON string
                        document.cookie = "pwdchange=" + cookieValue1 + ";path=/";
                        if (response.StatusCode === 0 && response.StatusDescription === "Success") {
                            Swal.fire({
                                title: "Password Generated",
                                text: "Your password has been generated successfully",
                                icon: "success",
                                button: "Okay",
                            }).then(() => {
                                window.location.href = "https://bombaygymkhana.com/index.php";
                            });
                        } else {
                            Swal.fire("Password Generation Failed", "", "error");
                        }
                    })
                } else {
                    var fullid3 = clientid1 + "-" + clientid4 + "" + clientid3;
                    var settings = {
                        "url": "https://fmprod.dishco.com/shawmanservices/api/CmsResetMemberPassword/FunResetMemberPassword?Clubid=13&NewPassword=" + pass + "&ClientId=011.001&MemberCode=" + fullid3 + "&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA",
                        "method": "GET",
                        "timeout": 0,
                        "headers": {
                            "ShawManKey": "xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==",
                            "Cookie": "ARRAffinity=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50; ARRAffinitySameSite=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50"
                        },
                    };
                    $.ajax(settings).done(function(response) {
                        console.log(response);
                        var cookieValue1 = JSON.stringify(response); // convert the object to JSON string
                        document.cookie = "pwdchange=" + cookieValue1 + ";path=/";
                        if (response.StatusCode === 0 && response.StatusDescription === "Success") {
                            Swal.fire({
                                title: "Password Generated",
                                text: "Your password has been generated successfully",
                                icon: "success",
                                button: "Okay",
                            }).then(() => {
                                window.location.href = "https://bombaygymkhana.com/index.php";
                            });
                        } else {
                            Swal.fire("Password Generation Failed", "", "error");
                        }
                    })
                }

            } 
            else if (count1 === 2) {
                if (count === 1) {
                    var fullid1 = clientid1 + "-" + clientid4 + "    " + clientid3;
                    var settings = {
                        "url": "https://fmprod.dishco.com/shawmanservices/api/CmsResetMemberPassword/FunResetMemberPassword?Clubid=13&NewPassword=" + pass + "&ClientId=011.001&MemberCode=" + fullid1 + "&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA",
                        "method": "GET",
                        "timeout": 0,
                        "headers": {
                            "ShawManKey": "xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==",
                            "Cookie": "ARRAffinity=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50; ARRAffinitySameSite=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50"
                        },
                    };
                    $.ajax(settings).done(function(response) {
                        console.log(response);
                        var cookieValue1 = JSON.stringify(response); // convert the object to JSON string
                        document.cookie = "pwdchange=" + cookieValue1 + ";path=/";
                        if (response.StatusCode === 0 && response.StatusDescription === "Success") {
                            Swal.fire({
                                title: "Password Generated",
                                text: "Your password has been generated successfully",
                                icon: "success",
                                button: "Okay",
                            }).then(() => {
                                window.location.href = "https://bombaygymkhana.com/index.php";
                            });
                        } else {
                            Swal.fire("Password Generation Failed", "", "error");
                        }
                    })
                } else if (count === 2) {
                    var fullid2 = clientid1 + "-" + clientid4 + "   " + clientid3;
                    var settings = {
                        "url": "https://fmprod.dishco.com/shawmanservices/api/CmsResetMemberPassword/FunResetMemberPassword?Clubid=13&NewPassword=" + pass + "&ClientId=011.001&MemberCode=" + fullid2 + "&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA",
                        "method": "GET",
                        "timeout": 0,
                        "headers": {
                            "ShawManKey": "xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==",
                            "Cookie": "ARRAffinity=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50; ARRAffinitySameSite=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50"
                        },
                    };
                    $.ajax(settings).done(function(response) {
                        console.log(response);
                        var cookieValue1 = JSON.stringify(response); // convert the object to JSON string
                        document.cookie = "pwdchange=" + cookieValue1 + ";path=/";
                        if (response.StatusCode === 0 && response.StatusDescription === "Success") {
                            Swal.fire({
                                title: "Password Generated",
                                text: "Your password has been generated successfully",
                                icon: "success",
                                button: "Okay",
                            }).then(() => {
                                window.location.href = "https://bombaygymkhana.com/index.php";
                            });
                        } else {
                            Swal.fire("Password Generation Failed", "", "error");
                        }
                    })
                } else if (count === 3) {
                    var fullid3 = clientid1 + "-" + clientid4 + "  " + clientid3;
                    var settings = {
                        "url": "https://fmprod.dishco.com/shawmanservices/api/CmsResetMemberPassword/FunResetMemberPassword?Clubid=13&NewPassword=" + pass + "&ClientId=011.001&MemberCode=" + fullid3 + "&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA",
                        "method": "GET",
                        "timeout": 0,
                        "headers": {
                            "ShawManKey": "xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==",
                            "Cookie": "ARRAffinity=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50; ARRAffinitySameSite=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50"
                        },
                    };
                    $.ajax(settings).done(function(response) {
                        console.log(response);
                        var cookieValue1 = JSON.stringify(response); // convert the object to JSON string
                        document.cookie = "pwdchange=" + cookieValue1 + ";path=/";
                        if (response.StatusCode === 0 && response.StatusDescription === "Success") {
                            Swal.fire({
                                title: "Password Generated",
                                text: "Your password has been generated successfully",
                                icon: "success",
                                button: "Okay",
                            }).then(() => {
                                window.location.href = "https://bombaygymkhana.com/index.php";
                            });
                        } else {
                            Swal.fire("Password Generation Failed", "", "error");
                        }
                    })
                } else if (count === 4) {
                    var fullid3 = clientid1 + "-" + clientid4 + " " + clientid3;
                    var settings = {
                        "url": "https://fmprod.dishco.com/shawmanservices/api/CmsResetMemberPassword/FunResetMemberPassword?Clubid=13&NewPassword=" + pass + "&ClientId=011.001&MemberCode=" + fullid3 + "&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA",
                        "method": "GET",
                        "timeout": 0,
                        "headers": {
                            "ShawManKey": "xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==",
                            "Cookie": "ARRAffinity=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50; ARRAffinitySameSite=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50"
                        },
                    };
                    $.ajax(settings).done(function(response) {
                        console.log(response);
                        var cookieValue1 = JSON.stringify(response); // convert the object to JSON string
                        document.cookie = "pwdchange=" + cookieValue1 + ";path=/";
                        if (response.StatusCode === 0 && response.StatusDescription === "Success") {
                            Swal.fire({
                                title: "Password Generated",
                                text: "Your password has been generated successfully",
                                icon: "success",
                                button: "Okay",
                            }).then(() => {
                                window.location.href = "https://bombaygymkhana.com/index.php";
                            });
                        } else {
                            Swal.fire("Password Generation Failed", "", "error");
                        }
                    })
                } else if (count === 5) {
                    var fullid3 = clientid1 + "-" + clientid4 + "" + clientid3;
                    var settings = {
                        "url": "https://fmprod.dishco.com/shawmanservices/api/CmsResetMemberPassword/FunResetMemberPassword?Clubid=13&NewPassword=" + pass + "&ClientId=011.001&MemberCode=" + fullid3 + "&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA",
                        "method": "GET",
                        "timeout": 0,
                        "headers": {
                            "ShawManKey": "xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==",
                            "Cookie": "ARRAffinity=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50; ARRAffinitySameSite=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50"
                        },
                    };
                    $.ajax(settings).done(function(response) {
                        console.log(response);
                        var cookieValue1 = JSON.stringify(response); // convert the object to JSON string
                        document.cookie = "pwdchange=" + cookieValue1 + ";path=/";
                        if (response.StatusCode === 0 && response.StatusDescription === "Success") {
                            Swal.fire({
                                title: "Password Generated",
                                text: "Your password has been generated successfully",
                                icon: "success",
                                button: "Okay",
                            }).then(() => {
                                window.location.href = "https://bombaygymkhana.com/index.php";
                            });
                        } else {
                            Swal.fire("Password Generation Failed", "", "error");
                        }
                    })
                }
            }
            else if (count1 === 3) {
                if (count === 1) {
                    var fullid1 = clientid1 + "-" + clientid4 + "   " + clientid3;
                    var settings = {
                        "url": "https://fmprod.dishco.com/shawmanservices/api/CmsResetMemberPassword/FunResetMemberPassword?Clubid=13&NewPassword=" + pass + "&ClientId=011.001&MemberCode=" + fullid1 + "&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA",
                        "method": "GET",
                        "timeout": 0,
                        "headers": {
                            "ShawManKey": "xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==",
                            "Cookie": "ARRAffinity=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50; ARRAffinitySameSite=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50"
                        },
                    };
                    $.ajax(settings).done(function(response) {
                        console.log(response);
                        var cookieValue1 = JSON.stringify(response); // convert the object to JSON string
                        document.cookie = "pwdchange=" + cookieValue1 + ";path=/";
                        if (response.StatusCode === 0 && response.StatusDescription === "Success") {
                            Swal.fire({
                                title: "Password Generated",
                                text: "Your password has been generated successfully",
                                icon: "success",
                                button: "Okay",
                            }).then(() => {
                                window.location.href = "https://bombaygymkhana.com/index.php";
                            });
                        } else {
                            Swal.fire("Password Generation Failed", "", "error");
                        }
                    })
                } else if (count === 2) {
                    var fullid2 = clientid1 + "-" + clientid4 + "  " + clientid3;
                    var settings = {
                        "url": "https://fmprod.dishco.com/shawmanservices/api/CmsResetMemberPassword/FunResetMemberPassword?Clubid=13&NewPassword=" + pass + "&ClientId=011.001&MemberCode=" + fullid2 + "&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA",
                        "method": "GET",
                        "timeout": 0,
                        "headers": {
                            "ShawManKey": "xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==",
                            "Cookie": "ARRAffinity=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50; ARRAffinitySameSite=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50"
                        },
                    };
                    $.ajax(settings).done(function(response) {
                        console.log(response);
                        var cookieValue1 = JSON.stringify(response); // convert the object to JSON string
                        document.cookie = "pwdchange=" + cookieValue1 + ";path=/";
                        if (response.StatusCode === 0 && response.StatusDescription === "Success") {
                            Swal.fire({
                                title: "Password Generated",
                                text: "Your password has been generated successfully",
                                icon: "success",
                                button: "Okay",
                            }).then(() => {
                                window.location.href = "https://bombaygymkhana.com/index.php";
                            });
                        } else {
                            Swal.fire("Password Generation Failed", "", "error");
                        }
                    })
                } else if (count === 3) {
                    var fullid3 = clientid1 + "-" + clientid4 + " " + clientid3;
                    var settings = {
                        "url": "https://fmprod.dishco.com/shawmanservices/api/CmsResetMemberPassword/FunResetMemberPassword?Clubid=13&NewPassword=" + pass + "&ClientId=011.001&MemberCode=" + fullid3 + "&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA",
                        "method": "GET",
                        "timeout": 0,
                        "headers": {
                            "ShawManKey": "xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==",
                            "Cookie": "ARRAffinity=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50; ARRAffinitySameSite=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50"
                        },
                    };
                    $.ajax(settings).done(function(response) {
                        console.log(response);
                        var cookieValue1 = JSON.stringify(response); // convert the object to JSON string
                        document.cookie = "pwdchange=" + cookieValue1 + ";path=/";
                        if (response.StatusCode === 0 && response.StatusDescription === "Success") {
                            Swal.fire({
                                title: "Password Generated",
                                text: "Your password has been generated successfully",
                                icon: "success",
                                button: "Okay",
                            }).then(() => {
                                window.location.href = "https://bombaygymkhana.com/index.php";
                            });
                        } else {
                            Swal.fire("Password Generation Failed", "", "error");
                        }
                    })
                } else if (count === 4) {
                    var fullid3 = clientid1 + "-" + clientid4 + "" + clientid3;
                    var settings = {
                        "url": "https://fmprod.dishco.com/shawmanservices/api/CmsResetMemberPassword/FunResetMemberPassword?Clubid=13&NewPassword=" + pass + "&ClientId=011.001&MemberCode=" + fullid3 + "&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA",
                        "method": "GET",
                        "timeout": 0,
                        "headers": {
                            "ShawManKey": "xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==",
                            "Cookie": "ARRAffinity=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50; ARRAffinitySameSite=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50"
                        },
                    };
                    $.ajax(settings).done(function(response) {
                        console.log(response);
                        var cookieValue1 = JSON.stringify(response); // convert the object to JSON string
                        document.cookie = "pwdchange=" + cookieValue1 + ";path=/";
                        if (response.StatusCode === 0 && response.StatusDescription === "Success") {
                            Swal.fire({
                                title: "Password Generated",
                                text: "Your password has been generated successfully",
                                icon: "success",
                                button: "Okay",
                            }).then(() => {
                                window.location.href = "https://bombaygymkhana.com/index.php";
                            });
                        } else {
                            Swal.fire("Password Generation Failed", "", "error");
                        }
                    })
                }
            }
            else if (count1 === 4) {
                if (count === 1) {
                    var fullid1 = clientid1 + "-" + clientid4 + "  " + clientid3;
                    var settings = {
                        "url": "https://fmprod.dishco.com/shawmanservices/api/CmsResetMemberPassword/FunResetMemberPassword?Clubid=13&NewPassword=" + pass + "&ClientId=011.001&MemberCode=" + fullid1 + "&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA",
                        "method": "GET",
                        "timeout": 0,
                        "headers": {
                            "ShawManKey": "xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==",
                            "Cookie": "ARRAffinity=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50; ARRAffinitySameSite=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50"
                        },
                    };
                    $.ajax(settings).done(function(response) {
                        console.log(response);
                        var cookieValue1 = JSON.stringify(response); // convert the object to JSON string
                        document.cookie = "pwdchange=" + cookieValue1 + ";path=/";
                        if (response.StatusCode === 0 && response.StatusDescription === "Success") {
                            Swal.fire({
                                title: "Password Generated",
                                text: "Your password has been generated successfully",
                                icon: "success",
                                button: "Okay",
                            }).then(() => {
                                window.location.href = "https://bombaygymkhana.com/index.php";
                            });
                        } else {
                            Swal.fire("Password Generation Failed", "", "error");
                        }
                    })
                } else if (count === 2) {
                    var fullid2 = clientid1 + "-" + clientid4 + " " + clientid3;
                    var settings = {
                        "url": "https://fmprod.dishco.com/shawmanservices/api/CmsResetMemberPassword/FunResetMemberPassword?Clubid=13&NewPassword=" + pass + "&ClientId=011.001&MemberCode=" + fullid2 + "&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA",
                        "method": "GET",
                        "timeout": 0,
                        "headers": {
                            "ShawManKey": "xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==",
                            "Cookie": "ARRAffinity=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50; ARRAffinitySameSite=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50"
                        },
                    };
                    $.ajax(settings).done(function(response) {
                        console.log(response);
                        var cookieValue1 = JSON.stringify(response); // convert the object to JSON string
                        document.cookie = "pwdchange=" + cookieValue1 + ";path=/";
                        if (response.StatusCode === 0 && response.StatusDescription === "Success") {
                            Swal.fire({
                                title: "Password Generated",
                                text: "Your password has been generated successfully",
                                icon: "success",
                                button: "Okay",
                            }).then(() => {
                                window.location.href = "https://bombaygymkhana.com/index.php";
                            });
                        } else {
                            Swal.fire("Password Generation Failed", "", "error");
                        }
                    })
                } else if (count === 3) {
                    var fullid3 = clientid1 + "-" + clientid4 + "" + clientid3;
                    var settings = {
                        "url": "https://fmprod.dishco.com/shawmanservices/api/CmsResetMemberPassword/FunResetMemberPassword?Clubid=13&NewPassword=" + pass + "&ClientId=011.001&MemberCode=" + fullid3 + "&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA",
                        "method": "GET",
                        "timeout": 0,
                        "headers": {
                            "ShawManKey": "xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==",
                            "Cookie": "ARRAffinity=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50; ARRAffinitySameSite=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50"
                        },
                    };
                    $.ajax(settings).done(function(response) {
                        console.log(response);
                        var cookieValue1 = JSON.stringify(response); // convert the object to JSON string
                        document.cookie = "pwdchange=" + cookieValue1 + ";path=/";
                        if (response.StatusCode === 0 && response.StatusDescription === "Success") {
                            Swal.fire({
                                title: "Password Generated",
                                text: "Your password has been generated successfully",
                                icon: "success",
                                button: "Okay",
                            }).then(() => {
                                window.location.href = "https://bombaygymkhana.com/index.php";
                            });
                        } else {
                            Swal.fire("Password Generation Failed", "", "error");
                        }
                    })
                } 
            }
            else if (count1 === 5) {
                if (count === 1) {
                    var fullid1 = clientid1 + "-" + clientid4 + " " + clientid3;
                    var settings = {
                        "url": "https://fmprod.dishco.com/shawmanservices/api/CmsResetMemberPassword/FunResetMemberPassword?Clubid=13&NewPassword=" + pass + "&ClientId=011.001&MemberCode=" + fullid1 + "&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA",
                        "method": "GET",
                        "timeout": 0,
                        "headers": {
                            "ShawManKey": "xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==",
                            "Cookie": "ARRAffinity=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50; ARRAffinitySameSite=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50"
                        },
                    };
                    $.ajax(settings).done(function(response) {
                        console.log(response);
                        var cookieValue1 = JSON.stringify(response); // convert the object to JSON string
                        document.cookie = "pwdchange=" + cookieValue1 + ";path=/";
                        if (response.StatusCode === 0 && response.StatusDescription === "Success") {
                            Swal.fire({
                                title: "Password Generated",
                                text: "Your password has been generated successfully",
                                icon: "success",
                                button: "Okay",
                            }).then(() => {
                                window.location.href = "https://bombaygymkhana.com/index.php";
                            });
                        } else {
                            Swal.fire("Password Generation Failed", "", "error");
                        }
                    })
                } else if (count === 2) {
                    var fullid2 = clientid1 + "-" + clientid4 + "" + clientid3;
                    var settings = {
                        "url": "https://fmprod.dishco.com/shawmanservices/api/CmsResetMemberPassword/FunResetMemberPassword?Clubid=13&NewPassword=" + pass + "&ClientId=011.001&MemberCode=" + fullid2 + "&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA",
                        "method": "GET",
                        "timeout": 0,
                        "headers": {
                            "ShawManKey": "xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==",
                            "Cookie": "ARRAffinity=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50; ARRAffinitySameSite=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50"
                        },
                    };
                    $.ajax(settings).done(function(response) {
                        console.log(response);
                        var cookieValue1 = JSON.stringify(response); // convert the object to JSON string
                        document.cookie = "pwdchange=" + cookieValue1 + ";path=/";
                        if (response.StatusCode === 0 && response.StatusDescription === "Success") {
                            Swal.fire({
                                title: "Password Generated",
                                text: "Your password has been generated successfully",
                                icon: "success",
                                button: "Okay",
                            }).then(() => {
                                window.location.href = "https://bombaygymkhana.com/index.php";
                            });
                        } else {
                            Swal.fire("Password Generation Failed", "", "error");
                        }
                    })
                } 
            }
        });
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
                else {
                    Swal.fire("Incorrect password", "", "error");
                    $("#preloader").fadeOut();
                }
            });
        };
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"></script>

</body>


</html>