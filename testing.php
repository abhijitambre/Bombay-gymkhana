<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from duruthemes.com/demo/html/cappa/demo1/restaurant.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jul 2022 10:35:08 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Bombay Gymkhana</title>
    <?php include 'header-link.php' ?>

    <style>
        .desktop-section {
            display: block;
        }

        .mobile-section {
            display: none;
        }

        #myDiv1 {
            display: none;
        }

        #myDiv2 {
            display: none;
        }

        .br-1 {
            border: 1px solid #fff;
        }

        .p-10 {
            padding: 10px;
        }

        .checkin-btn {
            cursor: pointer;
            width: 100px;
            display: block;
            position: relative;
            height: 120px;
            line-height: 65px;
            font-size: 40px;
            text-align: center;
            text-decoration: none;
            color: #ffffff;
            margin: 10px 0px;
            transition: .5s;
        }

        @media (max-width:830px) {

            .mobile-section {
                display: block;
            }
        }

        @media (max-width:768px) {

            .radio-options {
                display: flex !important;
                flex-direction: column;
                align-items: flex-start;
            }

            .radio-options input {
                margin: 0 !important;
            }
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        .d-none {
            display: none;
        }

        .d-block {
            display: block;
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
    <!-- Restaurant Slider -->
    <!-- <header class="header slider">
        <div class="owl-carousel owl-theme">
           
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/restaurant/1.jpg"></div>
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/restaurant/2.jpg"></div>
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/restaurant/3.jpg"></div>
        </div>
       
        <div class="arrow bounce text-center">
            <a href="#" data-scroll-nav="1" class=""> <i class="ti-arrow-down"></i> </a>
        </div>
    </header> -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/slider/banner.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <!-- <span>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                    </span> -->
                    <!-- <h5>Bombay Gymkhana</h5> -->
                    <h1>My Profile</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Restaurant Menu -->
    <section id="menu" class=" menu desktop-section section-padding bg-black">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="row">

                        <div class="restaurant-menu-content col-md-12">
                            <!-- Starters -->
                            <div id="tab-1-content" class="cont active">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12 text-left">

                                                    <!-- <div class="section-subtitle">An Experience for the Senses</div> -->
                                                    <div class="section-titlew">Member Details</div>
                                                </div>
                                                <div class="col-md-12" id="user-profile">


                                                    <ul class="list-unstyled page-list mb-30">
                                                        <div class="row m-20 align-items-center">
                                                            <div class="col-md-3" style="margin-bottom:30px;">
                                                                <div class="profile-card__img">
                                                                    <img src="" id="data4" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="br-1" style="width: 100%;" id="member-details-table">
                                                                    <div class="d-flex br-1 flex-wrap">
                                                                        <div class="col-md-3 col-sm-3 br-1 p-10" style="border-bottom: 0.1px solid #ffffff26 !important;">
                                                                            <h6>Member Code</h6>
                                                                        </div>
                                                                        <div class="col-md-9 col-sm-9 br-1 p-10">
                                                                            <p id="link1"></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex br-1 flex-wrap">
                                                                        <div class="col-md-3 col-sm-3 br-1 p-10" style="border-bottom: 0.1px solid #ffffff26 !important;">
                                                                            <h6>Member Name</h6>
                                                                        </div>
                                                                        <div class="col-md-9 col-sm-9 br-1 p-10">
                                                                            <p id="link2"></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex br-1 flex-wrap">
                                                                        <div class="col-md-3 col-sm-3 br-1 p-10" style="border-bottom: 0.1px solid #ffffff26 !important;">
                                                                            <h6>Resident Address</h6>
                                                                        </div>
                                                                        <div class="col-md-9 col-sm-9 br-1 p-10">
                                                                            <p id="link3"></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex br-1 flex-wrap">
                                                                        <div class="col-md-3 col-sm-3 br-1 p-10" style="border-bottom: 0.1px solid #ffffff26 !important;">
                                                                            <h6>Email Id</h6>
                                                                        </div>
                                                                        <div class="col-md-9 col-sm-9 br-1 p-10">
                                                                            <p id="link4"></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex br-1 flex-wrap">
                                                                        <div class="col-md-3 col-sm-3 br-1 p-10" style="border-bottom: 0.1px solid #ffffff26 !important;">
                                                                            <h6>Phone Number</h6>
                                                                        </div>
                                                                        <div class="col-md-9 col-sm-9 br-1 p-10">
                                                                            <p id="mobile1"></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex br-1 flex-wrap">
                                                                        <div class="col-md-3 col-sm-3 br-1 p-10" style="border-bottom: 0.1px solid #ffffff26 !important;">
                                                                            <h6>Date of Birth</h6>
                                                                        </div>
                                                                        <div class="col-md-9 col-sm-9 br-1 p-10">
                                                                            <p id="link5"></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>


                                            <div class="row" id="amountoutstanding">
                                                <div class="col-md-12 text-left">

                                                    <div class="section-titlew">Member Outstanding</div>
                                                </div>
                                                <div class="col-md-12">
                                                    <ul class="list-unstyled page-list mb-30">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="d-flex radio-options">
                                                                    <div><input type="radio" name="show_hide" value="show" checked="checked"> Outstanding Amount</div>
                                                                    <div><input type="radio" name="show_hide" style="margin-left: 30px;" value="hide"> Other Amount</div>
                                                                </div>
                                                                <div id="myDiv" style="margin-top:30px">
                                                                    <h6>Due Balance</h6>
                                                                    <form id="myForm">
                                                                        <div class="form-group input1_inner" style="margin-top: 20px;">
                                                                            <input class="form-control" type="number" step="any" id="balancedue" name="balancedue">
                                                                        </div>
                                                                        <input class="butn-dark " type="submit" value="Pay">
                                                                    </form>
                                                                </div>
                                                                <div id="myDiv1" style="margin-top:30px">
                                                                    <h6>Pay Amount</h6>
                                                                    <form id="myForm1">

                                                                        <div class="form-group input1_inner" style="margin-top: 20px;">
                                                                            <input class="form-control" type="number" step="any" id="amountpay" name="amountpay" placeholder="Enter Amount">
                                                                        </div>
                                                                        <input class="butn-dark " type="submit" value="Pay">
                                                                    </form>
                                                                </div>
                                                            </div>


                                                        </div>

                                                    </ul>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6>UnBill Amount</h6>
                                                    <h6 id="UnBill" name="UnBill" style="color:#ffffff"></h6>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section id="menu" class=" menu bg-black mobile-tab-list">
        <div class="container">

            <div class="">
                <div class="">
                    <div class="">

                        <div class="">
                            <!-- Starters -->
                            <div id="tab-1-content" class="cont active">
                                <div class="">
                                    <div class="">
                                        <div class="">
                                            <div class="">
                                            </div>
                                            <div class="">
                                                <div class="wrapper">
                                                    <div class="profile-card js-profile-card">
                                                        <div class="profile-card__cnt js-profile-cnt">
                                                            <div class="profile-card-social">
                                                                <ul class="das-btn row">

                                                                    <li class="col-md-3 col-4">
                                                                        <button id="checkinButton" class="profile-card-social__item checkin-btn">
                                                                            <div class="icon-font checkin-icon">
                                                                                <div class="icon">
                                                                                    <img src="images/yellow-icons/location.png" class="profile-icons" alt="">
                                                                                    <p>Check In</p>
                                                                                    <p id="demo" style="visibility: hidden;"></p>
                                                                                </div>
                                                                            </div>
                                                                        </button>
                                                                    </li>
                                                                    <li class="col-md-3 col-4">
                                                                        <a href="start.php" class="profile-card-social__item facebook">
                                                                            <div class="icon-font">
                                                                                <div class="icon">
                                                                                    <img src="images/yellow-icons/pay.png" class="profile-icons" alt="">
                                                                                    <p>Tap to Pay</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>

                                                                    <li class="col-md-3 col-4">
                                                                        <a href="/events.php" class="profile-card-social__item">
                                                                            <div class="icon-font">
                                                                                <div class="icon">
                                                                                    <img src="images/yellow-icons/event.png" class="profile-icons" alt="">
                                                                                    <p>Events</p>
                                                                                </div>
                                                                            </div>

                                                                        </a>
                                                                    </li>
                                                                    <li class="col-md-3 col-4">
                                                                        <a href="/contact-details.php" class="profile-card-social__item">
                                                                            <div class="icon-font">
                                                                                <div class="icon">
                                                                                    <img src="images/yellow-icons/agenda.png" class="profile-icons" alt="">
                                                                                    <p>Phone Directory</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="col-md-3 col-4">
                                                                        <a href="/invoices-year.php" class="profile-card-social__item">
                                                                            <div class="icon-font">
                                                                                <div class="icon">
                                                                                    <img src="images/yellow-icons/invoice.png" class="profile-icons" alt="">
                                                                                    <p>Invoices</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="col-md-3 col-4">
                                                                        <a href="/notice.php" class="profile-card-social__item">
                                                                            <div class="icon-font">
                                                                                <div class="icon">
                                                                                    <img src="images/yellow-icons/notice.png" class="profile-icons" alt="">
                                                                                    <p>Notices</p>
                                                                                </div>
                                                                            </div>

                                                                        </a>
                                                                    </li>
                                                                    <li class="col-md-3 col-4">
                                                                        <a href="/affiliation.php" class="profile-card-social__item">
                                                                            <div class="icon-font">
                                                                                <div class="icon">
                                                                                    <img src="images/yellow-icons/affiliate.png" class="profile-icons" alt="">
                                                                                    <p>Affiliations</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="col-md-3 col-4">
                                                                        <a href="/transactions.php" class="profile-card-social__item">
                                                                            <div class="icon-font">
                                                                                <div class="icon">
                                                                                    <img src="images/yellow-icons/transaction.png" class="profile-icons" alt="">
                                                                                    <p>Transaction History</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="col-md-3 col-4">
                                                                        <a href="/gallery-videos.php" class="profile-card-social__item facebook">
                                                                            <div class="icon-font">
                                                                                <div class="icon">
                                                                                    <img src="images/yellow-icons/gallery.png" class="profile-icons" alt="">
                                                                                    <p>Gallery</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="col-md-3 col-4">
                                                                        <a href="/committee.php" class="profile-card-social__item">
                                                                            <div class="icon-font">
                                                                                <div class="icon">
                                                                                    <img src="images/yellow-icons/group.png" class="profile-icons" alt="">
                                                                                    <p>Committee</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>

                                                                    <li class="col-md-3 col-4">
                                                                        <a href="https://www.google.com/maps?ll=18.937233,72.830847&z=16&t=m&hl=en&gl=IN&mapclient=embed&cid=10561592378355304387" class="profile-card-social__item" target="_blank">
                                                                            <div class="icon-font">
                                                                                <div class="icon">
                                                                                    <img src="images/yellow-icons/signpost.png" class="profile-icons" alt="">
                                                                                    <p>Way to Club</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="col-md-3 col-4">
                                                                        <a href="/pdf/bng/BG-September-2023.pdf" class="profile-card-social__item facebook">
                                                                            <div class="icon-font">
                                                                                <div class="icon">
                                                                                    <img src="images/yellow-icons/membership.png" class="profile-icons" alt="">
                                                                                    <p>Black &amp; Gold</p>
                                                                                </div>
                                                                            </div>

                                                                        </a>
                                                                    </li>
                                                                </ul>

                                                            </div>


                                                        </div>



                                                    </div>

                                                </div>



                                            </div>
                                        </div>

                                    </div>
                                </div>

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
    <script>
        $(document).ready(function() {
            var validmemcode = Cookies.get('validmemcode')
            var fullid = validmemcode;

            var settings = {
                "url": "https://fmprod.dishco.com/shawmanservices/api/CmsMemberDetails/FunGetMemberDetails?Clubid=13&ClientId=011.001&MemberCode=" + fullid + "&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA",
                "method": "GET",
                "timeout": 0,
                "headers": {
                    "ShawManKey": "xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==",
                    "Cookie": "ARRAffinity=48ca49c0ff92bc16f64fbd83ee082709435e8cfad3e75950ce8986cacd2e3113; ARRAffinitySameSite=48ca49c0ff92bc16f64fbd83ee082709435e8cfad3e75950ce8986cacd2e3113"
                },
            };

            $.ajax(settings).done(function(response) {
                console.log(response);
                if (response.StatusCode === 0 && response.Result.length > 0) {
                    var expirationTime2 = new Date();
                    expirationTime2.setTime(expirationTime2.getTime() + (60 * 60 * 24 * 30 * 6 * 1000));

                    // Using document.cookie to set cookies
                    $.cookie('response', JSON.stringify(response), {
                        expires: expirationTime2,
                        path: '/'

                    });
                }
            });

            var settings = {
                "url": "https://fmprod.dishco.com/shawmanservices/api/CmsDetailsForMemberCode/FunGetDetailsOfMemberCode?Clubid=13&ClientId=011.001&MemberCode=" + fullid + "&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA",
                "method": "GET",
                "timeout": 0,
                "headers": {
                    "ShawManKey": "xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==",
                    "Cookie": "ARRAffinity=48ca49c0ff92bc16f64fbd83ee082709435e8cfad3e75950ce8986cacd2e3113; ARRAffinitySameSite=48ca49c0ff92bc16f64fbd83ee082709435e8cfad3e75950ce8986cacd2e3113"
                },
            };


            $.ajax(settings).done(function(memberdet) {
                console.log(memberdet);
                if (memberdet.StatusCode === 0 && memberdet.Result.length > 0) {
                    var expirationTime2 = new Date();
                    expirationTime2.setTime(expirationTime2.getTime() + (60 * 60 * 24 * 30 * 6 * 1000));

                    $.cookie('memberdet', JSON.stringify(memberdet), {
                        expires: expirationTime2,
                        path: '/'

                    });
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            var CookieValue = Cookies.get('memberdet');
            const obj = JSON.parse(CookieValue);
            var status = obj.StatusDescription;

            if (status === "Invalid Member Details") {
                swal({
                    title: "Membership Expired",
                    text: "Your Membership at the Gym has been expired please contact at the gym",
                    icon: "error",
                    button: "Okay",
                }).then(() => {
                    $.removeCookie("validmemcode");
                    $.removeCookie("response");
                    window.location.href = "/index.php";
                });
            } else {

            }
        });
    </script>


    <script>
        $(document).ready(function() {
            var validmemcode = Cookies.get('validmemcode')
            var membercode = validmemcode;
            var settings = {
                "url": "https://fmprod.dishco.com/shawmanservices/api/CmsMemberOutstanding/FunGetMemberOutstanding?Clubid=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA&MemberCode=" + membercode + "!",
                "method": "GET",
                "timeout": 0,
                "headers": {
                    "ShawManKey": "xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==",
                    "Cookie": "ARRAffinity=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50; ARRAffinitySameSite=03fb2e4eb6cb0de44f221325d996d9f8f9f7ce6e0a598c37c59cff625e37bf50"
                },
            };

            $.ajax(settings).done(function(response) {
                console.log(response);

                // Check if the response is successful
                if (response.StatusCode === 0 && response.Result.length > 0) {
                    // Get the balance value
                    var balance = response.Result[0].Balance;
                    var ActualBalance = response.Result[0].ActualBalance;
                    var UnBillAmount = response.Result[0].UnBillAmount;
                    document.getElementById("balancedue").value = balance;
                    document.getElementById("UnBill").innerHTML = UnBillAmount;
                    // Set the balance value as a cookie with a name of "balance"
                    document.cookie = "balance=" + encodeURIComponent(balance) + "; path=/";
                    document.cookie = "ActualBalance=" + encodeURIComponent(ActualBalance) + "; path=/";
                    document.cookie = "UnBillAmount=" + encodeURIComponent(UnBillAmount) + "; path=/";
                }
            });
        });
    </script>
    <script>
        // Get the radio buttons and the divs
        var showButton = document.getElementsByName("show_hide")[0];
        var hideButton = document.getElementsByName("show_hide")[1];

        var myDiv = document.getElementById("myDiv");
        var myDiv1 = document.getElementById("myDiv1");

        // Add event listeners to the radio buttons
        showButton.addEventListener("click", function() {
            if (showButton.checked) {
                myDiv.classList.add("d-block");
                myDiv.classList.remove("d-none");

                myDiv1.classList.add("d-none");
                myDiv1.classList.remove("d-block");

            }
        });

        hideButton.addEventListener("click", function() {
            if (hideButton.checked) {
                myDiv1.classList.add("d-block");
                myDiv1.classList.remove("d-none");

                myDiv.classList.add("d-none");
                myDiv.classList.remove("d-block");

            }
        });
    </script>

    <script>
        // balance cookie is stored in the balance value having data of the outstanding amount of the user
        $(document).ready(function() {
            var balanceValue = Cookies.get('balance');
            document.getElementById("balancedue").value = balanceValue;
            // Get the form element
            var myForm = document.getElementById("myForm");

            // Add a submit event listener to the form
            myForm.addEventListener("submit", function(event) {
                // Prevent the default form submission behavior
                event.preventDefault();

                // Get the field values and store them in variables
                var balancedue = document.getElementById("balancedue").value;
                $.cookie("balancedue", balancedue);
                $.removeCookie("amountpay");
                // Redirect to the new page with the field values as URL parameters
                window.location.href = "/payments.php";
            });
        });
    </script>
    <script>
        // Get the form element
        var myForm = document.getElementById("myForm1");

        // Add a submit event listener to the form
        myForm1.addEventListener("submit", function(event) {
            // Prevent the default form submission behavior
            event.preventDefault();

            // Get the field values and store them in variables
            var amountpay = document.getElementById("amountpay").value;
            $.cookie("amountpay", amountpay);
            $.removeCookie("balancedue");
            // Redirect to the new page with the field values as URL parameters
            window.location.href = "/payments.php";
        });
    </script>
    <script>
        $(document).ready(function() {
            // response cookie is stored in cookie value varible
            var CookieValue = Cookies.get('memcode')
            // alert(CookieValue);
            // parse function is used on CookieValue to convert data in json and stored in obj variable
            const obj = JSON.parse(CookieValue);
            // alert(obj.Result[0].MemberCode);
            // data from the cookie value is set to the div for the designated field are using the variable name from the json string
            document.getElementById("link1").innerHTML = obj.Result[0].MemberCode;
            document.getElementById("link2").innerHTML = obj.Result[0].MemberName;
            document.getElementById("link3").innerHTML = obj.Result[0].ResidentAddress;
            // document.getElementById("link4").innerHTML = obj.Result[0].EmailId;
            var emailIds = obj.Result.map(function(item) {
                return item.EmailId;
            }).join("<br>");

            document.getElementById("link4").innerHTML = emailIds;
            document.getElementById("mobile1").innerHTML = obj.Result[0].MobileNo;
            var membername = obj.Result[0].MemberName;
            var membercode = obj.Result[0].MemberCode;

        });
    </script>
    <script>
        $(document).ready(function() {
            var CookieValue = Cookies.get('memcode')
            const obj = JSON.parse(CookieValue);
            document.getElementById("link5").innerHTML = obj.Result[0].dtDateofBirth;
            var CategoryName = obj.Result[0].CategoryName;
            document.cookie = "categoryname=" + encodeURIComponent(CategoryName);
        });
    </script>
    <script>
        $(document).ready(function() {
            var CookieValue = Cookies.get('memberdet')
            const obj3 = JSON.parse(CookieValue);
            var CategoryName = obj3.Result[0].CategoryName;
            document.cookie = "categoryname=" + encodeURIComponent(CategoryName);
        });
    </script>
    <script>
        $(document).ready(function() {
            var CookieValue = Cookies.get('memcode')
            const obj = JSON.parse(CookieValue);
            var profileimage = obj.Result[0].MemberPhoto;
            console.log(profileimage);
            if (profileimage === null || profileimage === "") {
                var finalimage1 = "images/member-images/profile.png"
                $('#data4').attr('src', finalimage1);
            } else {
                var urlentry = "images/member-images/"
                var finalimage = urlentry.concat(profileimage);
                $('#data4').attr('src', finalimage);
            }
        });
    </script>
    <script>
        var checkinButton = document.getElementById("checkinButton");
        checkinButton.addEventListener("click", getLocation);
        checkinButton.addEventListener("touchend", getLocation);
        // response cookie is stored in cookie value varible
        var CookieValue = Cookies.get('memcode')
        // parse function is used on CookieValue to convert data in json and stored in obj variable
        const obj = JSON.parse(CookieValue);
        // membername is stored in variable member name
        var membername = obj.Result[0].MemberName;
        // membercode is stored in variable member code
        var membercode = obj.Result[0].MemberCode;
        var x = document.getElementById("demo");

        function getLocation() {
            if (navigator.geolocation) {
                // the getcurrent function is used for permission request for accessing location of the system
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            // the getcurrent function isused to get the latitude and longitude of the user
            x.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude;
            // user current latitude
            lat1 = 18.938473;
            // user current longitude
            lon1 = 72.830380;
            console.log(lon1);
            console.log(lat1);

            alert(getDistanceFromLatLonInKm(lat1, lon1, 18.938473, 72.830380).toFixed(1));
            // a function is runned and lat & lon of user and the fixed center of the circular area is passed
            function getDistanceFromLatLonInKm(lat1, lon1, lat2, lon2) {

                var R = 6371; // Radius of the earth in km
                var dLat = deg2rad(lat2 - lat1); // deg2rad below
                var dLon = deg2rad(lon2 - lon1);
                var a =
                    Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                    Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) *
                    Math.sin(dLon / 2) * Math.sin(dLon / 2);
                var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
                var d = R * c * 1000; // Distance in km
                console.log(d);

                var CookieValue = Cookies.get('checkedin')
                if (CookieValue == "checkedin") {
                    swal({
                        title: "Already Checkdin",
                        icon: "warning",
                        buttons: ["Cancel", "Checkout"],
                        dangerMode: true,
                    })
                } else {
                    // if distance is less than 500 meters the api is runned 
                    // member name and member code is pased as input to the api for checkin in the bg premises
                    if (d <= 500) {
                        var settings = {
                            "url": "https://fmprod.dishco.com/shawmanservices/api/CmsMemebrCheckIn/FunPubInsertCheckInDetails?SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA&ClubId=13&MemberCode=" + membercode + "&Name=" + membername + "!",
                            "method": "POST",
                            "timeout": 0,
                            "headers": {
                                "ShawManKey": "xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==",
                                "Cookie": "ARRAffinity=fea5fae105dd5b8c95a5513db34ed607a7bf0b9dd7c14a101d073ad1bb67015d; ARRAffinitySameSite=fea5fae105dd5b8c95a5513db34ed607a7bf0b9dd7c14a101d073ad1bb67015d"
                            },
                        };
                        $.ajax(settings).done(function(response) {
                            console.log(response);
                        });
                        // a cookie is created for after checkin
                        // Get the current date and time
                        var currentDate = new Date();
                        // Set the time to the end of the current day
                        currentDate.setHours(23, 59, 59, 999);

                        // Convert the expiration date to a string in the UTC format
                        var expirationDateString = currentDate.toUTCString();

                        // Set the cookie with the calculated expiration time
                        document.cookie = "checkedin=checkedin; expires=" + expirationDateString;

                        swal("Checked in", "", "success");
                    } else {
                        swal("Checked in Failed", "Get Near the Gym", "error");
                    }
                }
            }


            function deg2rad(deg) {
                return deg * (Math.PI / 180)
            }
        }

        function showError(error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    x.innerHTML = "User denied the request for Geolocation."
                    break;
                case error.POSITION_UNAVAILABLE:
                    x.innerHTML = "Location information is unavailable."
                    break;
                case error.TIMEOUT:
                    x.innerHTML = "The request to get user location timed out."
                    break;
                case error.UNKNOWN_ERROR:
                    x.innerHTML = "An unknown error occurred."
                    break;
            }
        }
    </script>
</body>

</html>