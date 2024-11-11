<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from duruthemes.com/demo/html/cappa/demo1/restaurant.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jul 2022 10 : 35 : 08 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Bombay Gymkhana</title>
    <?php include 'header-link.php' ?>
    <style>
        .bg-overlay {
            position: absolute;
            bottom: 0;
            padding: 0 0 40px 40px;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
        }

        .bg-overlay h1 {
            position: absolute;
            bottom: 20px;
        }

        .banner-header {
            height: 400px !important;
            background-position: bottom;
        }

        

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 500px) {

            .md-none {
                display: none;
            }

            .md-block {
                display: block !important;
            }

            .banner-header {
                height: 60vh !important;
                background-position: bottom;
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
    <!-- <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="images/banner-images/banner.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h1>Sports</h1>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="banner-header" style="position:relative;overflow: hidden;">
        <div id="carouselExampleFade" class="carousel slide carousel-fade md-none" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/banner-new/25.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/banner-new/29.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/banner-new/30.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/banner-new/31.jpg" alt="Four slide">
                </div>
            </div>
        </div>
        <div id="carouselExampleFade" class="carousel slide carousel-fade md-block" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/banner-new/mobile2.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/banner-new/mobile6.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/banner-new/mobile7.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/banner-new/mobile8.jpg" alt="Four slide">
                </div>
            </div>
        </div>
        <div class="bg-overlay">
            <h1>Sports</h1>
        </div>
    </div> -->
    <!-- Restaurant Menu -->
    <div class="top-slider">
        <div class="slides">
            <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="images/sports-banner/Badminton.png">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left caption mt-90">
                            <h1>Badminton</h1>
                        </div>
                        <div class="nav-dots">
                            1/13
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="images/sports-banner/Snooker.png">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left caption mt-90">
                            <h1>Billiards & Snooker</h1>
                        </div>
                        <div class="nav-dots">
                            2/13
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="images/sports-banner/Bridge.png">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left caption mt-90">
                            <h1>Bridge</h1>
                        </div>
                        <div class="nav-dots">
                            3/13
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="images/sports-banner/cricket2.png">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left caption mt-90">
                            <h1>Cricket</h1>
                        </div>
                        <div class="nav-dots">
                            4/13
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="images/sports-banner/Football.png">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left caption mt-90">
                            <h1>Football</h1>
                        </div>
                        <div class="nav-dots">
                            5/13
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="images/sports-banner/Fitness.png">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left caption mt-90">
                            <h1>Fitness Center</h1>
                        </div>
                        <div class="nav-dots">
                            6/13
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="images/sports-banner/Rugby.png">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left caption mt-90">
                            <h1>Rugby</h1>
                        </div>
                        <div class="nav-dots">
                            7/13
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="images/sports-banner/Squash.png">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left caption mt-90">
                            <h1>Squash</h1>
                        </div>
                        <div class="nav-dots">
                            8/13
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="images/sports-banner/Swimming.png">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left caption mt-90">
                            <h1>Swimming</h1>
                        </div>
                        <div class="nav-dots">
                            9/13
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="images/sports-banner/Tennis.png">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left caption mt-90">
                            <h1>Tennis</h1>
                        </div>
                        <div class="nav-dots">
                            10/13
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="images/sports-banner/tt.png">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left caption mt-90">
                            <h1>Table Tennis</h1>
                        </div>
                        <div class="nav-dots">
                            11/13
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="images/sports-banner/throwball.png">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left caption mt-90">
                            <h1>Throwball</h1>
                        </div>
                        <div class="nav-dots">
                            12/13
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="images/sports-banner/yoga.png">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left caption mt-90">
                            <h1>Yoga</h1>
                        </div>
                        <div class="nav-dots">
                            13/13
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="restaurant-menu restaurant-menuold  menu section-padding bg-black" style="padding-top: 100px !important;margin-top:-20px;">
        <div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="container">

                            <div class="middle-slider">
                                <div class="slides">
                                    <div class="item">
                                        <h6>Badminton </h6>
                                    </div>
                                    <div class="item">
                                        <h6>Billiards & Snooker </h6>
                                    </div>
                                    <div class="item">
                                        <h6>Bridge </h6>
                                    </div>
                                    <div class="item">
                                        <h6> Cricket</h6>
                                    </div>
                                    <div class=" item">
                                        <h6>Football</h6>
                                    </div>

                                    <div class="item">
                                        <h6>Fitness Center </h6>
                                    </div>

                                    <div class="item">
                                        <h6>Rugby </h6>
                                    </div>
                                    <div class="item">
                                        <h6>Squash </h6>
                                    </div>
                                    <div class="item">
                                        <h6>Swimming </h6>
                                    </div>
                                    <div class="item">
                                        <h6>Tennis </h6>
                                    </div>
                                    <div class="item">
                                        <h6>Table Tennis </h6>
                                    </div>
                                    <div class="item">
                                        <h6>Throwball</h6>

                                    </div>
                                    <div class="item">
                                        <h6>Yoga </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="three-slide-slider">
                                <div class="slides">
                                    <div class="text-wrapper">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-30">Bombay Gymkhana boasts of a spacious fully Air-conditioned
                                                    Badminton Hall that houses three courts and a generous seating area. All
                                                    three courts have layered teakwood flooring for enhanced player comfort,
                                                    with a synthetic Hova court laid on the centre court to allow players to
                                                    experience the surface employed in all international tournaments.
                                                </p>
                                                <p class="mb-30">Five professionals are available to play with the members.
                                                    A regular coaching scheme by former international player Mr. Mangarish
                                                    Palekar is on throughout the year for members and their dependents.
                                                </p>
                                                <ul class="list-unstyled page-list mb-30">
                                                    <h4 class="margin-b-0">Daily :</h4>
                                                    <li class="margin-b-0">
                                                        <div class="page-list-icon"><span class="ti-time"></span>
                                                        </div>
                                                        <div class="page-list-text">
                                                            <p>07.00 AM to 08.30 PM.</p>
                                                        </div>
                                                    </li><br>
                                                    <h6 class="margin-b-0">Coaching Timings</h6>
                                                    <h4 class="margin-b-0">Wednesday :</h4>
                                                    <li class="margin-b-0">
                                                        <div class="page-list-icon"><span class="ti-time"></span>
                                                        </div>
                                                        <div class="page-list-text">
                                                            <p>04.00 PM to 06.00 PM.</p>
                                                        </div>
                                                    </li><br>
                                                    <h4 class="margin-b-0">Saturday & Sunday :</h4>
                                                    <li class="margin-b-0">
                                                        <div class="page-list-icon"><span class="ti-time"></span>
                                                        </div>
                                                        <div class="page-list-text">
                                                            <p>11.30 AM to 01.00 PM</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="menu-info">
                                                    <h5>Members <span class="price">Rs 2000.00 PER MONTH Exclusive of GST Rates</span></h5>
                                                    <h5>Members Guests <span class="price">Rs 2500.00 PER MONTH Exclusive of GST Rates</span>
                                                    </h5>
                                                    <br />
                                                    <h6>Guest Charges at Badminton Courts</h6><br />
                                                    <h5>Weekdays <span class="price">Rs 142.00 Inclusive of GST.</span></h5>
                                                    <h5>Weekends and Bank Holidays<span class="price">Rs 177.00 Inclusive of GST</span></h5>
                                                    <h5>Makers Charges for 30 minutes<span class="price">Rs 50 Exclusive of GST Rates</span></h5>
                                                </div>
                                                <br>
                                                <div id="carouselExampleIndicators7" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carouselExampleIndicators7" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carouselExampleIndicators7" data-slide-to="1"></li>
                                                        <li data-target="#carouselExampleIndicators7" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100" src="images/gallery/sports/badminton/1.jpg" alt="Badminton">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="images/gallery/sports/badminton/2.jpg" alt="Badminton">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="images/gallery/sports/badminton/3.jpg" alt="Badminton">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-wrapper">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-30">The Bombay Gymkhana Billiards & Snooker Room is a fully
                                                    air-conditioned facility with 6 (six) majestic Billiard/Snooker tables.
                                                </p>

                                                <p class="mb-30">Our Billiards Room has been used for playing renowned
                                                    tournaments throughout the year.
                                                </p>

                                                <p class="mb-30">World Champions like Mr. Wilson Jones, Mr. Michael Ferreira,
                                                    Mr. Geet Sethi, Yasin Merchant, Mr. Om Agarwal and Mr. Pankaj Advani, to
                                                    name a few , have played at the Bombay Gymkhana Billiards Room. Six
                                                    professional markers are available to play with members and their guests
                                                </p>
                                                <ul class="list-unstyled page-list mb-30">
                                                    <h6 class="margin-b-0">Daily : </h6>
                                                    <li class="margin-b-0">
                                                        <div class="page-list-icon"> <span class="ti-time"></span>
                                                        </div>
                                                        <div class="page-list-text">
                                                            <p> 11.00 AM to 09.00 PM</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="menu-info">
                                                    <h6>Guest Charges At Billiards And Snooker Room</h6>

                                                    <h5>Weekdays <span class="price">Rs 142.00 Inclusive of GST.</span></h5>
                                                    <h5>Weekends and Bank Holidays <span class="price">Rs 177.00 Inclusive of
                                                            GST Rates.</span></h5>
                                                    <h5> Marker Charges for 30 minutes <span class="price">Rs. 30 Exclusive of GST Rates</span>
                                                    </h5>
                                                    <br>
                                                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                                                        <ol class="carousel-indicators">
                                                            <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                                                            <li data-target="#carouselExampleIndicators2" data-slide-to="1">
                                                            </li>
                                                            <li data-target="#carouselExampleIndicators2" data-slide-to="2">
                                                            </li>
                                                        </ol>
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img class="d-block w-100" src="images/gallery/sports/billiards/1.jpg" alt="Billiards">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block w-100" src="images/gallery/sports/billiards/2.jpg" alt="Billiards">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block w-100" src="images/gallery/sports/billiards/3.jpg" alt="Billiards">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-wrapper">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-30">The Bombay Gymkhana has a fully Air-conditioned Bridge Room,
                                                    regular Pairs Bridge tournaments are conducted on first and third Saturdays
                                                    and every Sunday of the month.
                                                </p>
                                                <ul class="list-unstyled page-list mb-30">
                                                    <h6 class="margin-b-0">Daily : </h6>
                                                    <li class="margin-b-0">
                                                        <div class="page-list-icon"> <span class="ti-time"></span>
                                                        </div>
                                                        <div class="page-list-text">
                                                            <p>01.00 PM to 08.30 PM</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <h4>Note:</h4>
                                                <ol class="lower-alpha-marker">
                                                    <li>Bridge Tournament is held on the first and third Saturday, and on all
                                                        Sundays of the month</li>
                                                </ol>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="menu-info">
                                                    <h6>Guest Charges at Bridge Room</h6>

                                                    <h5>Weekdays <span class="price">Rs 142.00 Inclusive of GST.</span></h5>
                                                    <h5>Weekends and Bank Holidays <span class="price">Rs 177.00 Inclusive of
                                                            GST.</span></h5>
                                                </div>

                                                <div class="menu-info">
                                                    <h6>Entry Fee 1st & 3rd Saturdays tournaments</h6>

                                                    <h5>Member <span class="price">Rs 250.00 Inclusive of GST.</span></h5>
                                                    <h5>Guest <span class="price">
                                                            Rs 350.00 Inclusive of GST.</span></h5>

                                                </div>
                                                <div class="menu-info">
                                                    <h6>Entry Fee All Sunday tournaments</h6>

                                                    <h5>Member <span class="price">Rs 150.00 Inclusive of GST.</span></h5>
                                                    <h5>Guest <span class="price">
                                                            Rs 250.00 Inclusive of GST.</span></h5>

                                                </div>
                                                <br>
                                                <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                                                        <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100" src="images/banner-new/14.png" alt="Bridge">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="images/banner-new/15.png" alt="Bridge">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="images/banner-new/16.png" alt="Bridge">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-wrapper">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-30">Bombay Gymkhana Ltd., established in 1875, is one of the oldest
                                                    and most prestigious Clubs in India with a rich sporting culture and
                                                    tradition. It is said to be the birthplace of Indian Cricket by virtue of
                                                    having staged Presidency, Triangular, and Quadrangular and Pentangular
                                                    tournament during 1892 to 1933. The Gymkhana was the venue of the first ever
                                                    International match that was played between the “Hindus” and the MCC, led by
                                                    Sir Arthur Gilligan, in Mumbai and the first test match played on Indian
                                                    soil on December 15, 1933, India (led by Col. C K Nayadu) and England (led
                                                    by Mr. D R Jardine) clashed out in the open, fighting hard in a cricketing
                                                    battle that lasted 4 days. It was the first ever test match played on Indian
                                                    soil and it was played right here at the Bombay Gymkhana Grounds.
                                                </p>

                                                <p class="mb-30">The Bombay Gymkhana ground is well maintained during all
                                                    seasons. Lot of quality matches are played round the year and even first
                                                    class matches are played on our lush green ground.</b>
                                                </p>
                                                <h6>Season Duration : October – May </h6>
                                                <p class="mb-10">
                                                    The Cricket Academy is operational from October to May under the supervision
                                                    of Head Coach Mr. Farhad Daruwala. The sub-junior coaching for the age group
                                                    of 7-14 years is operational under the supervision of coach Mr. Rushikesh
                                                    Mayekar.
                                                </p>
                                                <ul class="page-list mb-30">
                                                    <li>

                                                        <div class="page-list-icon"><img src="images/yellow-icons/bullet-point.png" class="bullet-points" alt=""></div>
                                                        <div>
                                                            <p> Members only tournaments</p>
                                                        </div>
                                                    </li>

                                                    <li>

                                                        <div class="page-list-icon"><img src="images/yellow-icons/bullet-point.png" class="bullet-points" alt=""></div>
                                                        <div>
                                                            <p> MCA tournaments</p>
                                                        </div>
                                                    </li>
                                                    <li>

                                                        <div class="page-list-icon"><img src="images/yellow-icons/bullet-point.png" class="bullet-points" alt=""></div>
                                                        <div>
                                                            <p>Weekly Night matches</p>
                                                        </div>
                                                    </li>

                                                    <li>

                                                        <div class="page-list-icon"><img src="images/yellow-icons/bullet-point.png" class="bullet-points" alt=""></div>
                                                        <div>
                                                            <p>Saturday Half Day Friendly Matches</p>
                                                        </div>
                                                    </li>


                                                    <li>

                                                        <div class="page-list-icon"><img src="images/yellow-icons/bullet-point.png" class="bullet-points" alt=""></div>
                                                        <div>
                                                            <p>Corporate Masters Cricket tournament</p>
                                                        </div>
                                                    </li>

                                                    <li>

                                                        <div class="page-list-icon"><img src="images/yellow-icons/bullet-point.png" class="bullet-points" alt=""></div>
                                                        <div>
                                                            <p>Bombay Gymkhana Premier League (BGPL)</p>
                                                        </div>
                                                    </li>

                                                    <li>

                                                        <div class="page-list-icon"><img src="images/yellow-icons/bullet-point.png" class="bullet-points" alt=""></div>
                                                        <div>
                                                            <p>BG Double Wicket tournament</p>
                                                        </div>
                                                    </li>

                                                    <li>

                                                        <div class="page-list-icon"><img src="images/yellow-icons/bullet-point.png" class="bullet-points" alt=""></div>
                                                        <div>
                                                            <p>Social Cricket for 45 and above Age Category</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <h6>For details contact the Sports Department on <a href="tel:+912243223411">+91
                                                        22 43223411</a> <a href="tel:+912243223443">/43223443</a></h6>
                                            </div>
                                            <div class="col-md-6">
                                                <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                                                        <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100" src="images/gallery/sports/cricket/1.jpg" alt="Cricket">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="images/gallery/sports/cricket/2.jpg" alt="Cricket">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="images/gallery/sports/cricket/3.jpg" alt="Cricket">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-wrapper">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-10">The Bombay Gymkhana grounds are used as a full sized grass
                                                    turf football pitch during the football season. The pitch is floodlit for
                                                    tournaments & regular practice.
                                                </p>
                                                <p class="mb-10">Regular coaching for members and special coaching for children
                                                    is conducted throughout the season.
                                                </p>
                                                <ul class="list-unstyled page-list mb-30">
                                                    <h6 class="margin-b-0">Kids Coaching -</h6>
                                                    <h4 class="margin-b-0">Monday, Wednesday and Friday-</h4>
                                                    <li class="margin-b-0">
                                                        <div class="page-list-icon"> <span class="ti-time"></span>
                                                        </div>
                                                        <div class="page-list-text">
                                                            <p>05.00 PM to 06.00 PM</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <h6>For details contact the Sports Department on <br> <a href="tel:+912243223411">+91 22 43223411</a><a href="tel:+912243223443">/43223443</a></h6>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="menu-info">
                                                    <h6>Charges</h6>
                                                    <h5>Members <span class="price">Rs 1000.00 Per Month Exclusive of GST Rates</span></h5>
                                                    <h5>Members Guests<span class="price">Rs 3000.00 Per Month Exclusive of GST Rates</span>
                                                    </h5>
                                                </div>
                                                <br>
                                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100" src="images/gallery/sports/football/1.jpg" alt="Football">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="images/gallery/sports/football/2.jpg" alt="Football">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="images/gallery/sports/football/3.jpg" alt="Football">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-wrapper">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-30">The Bombay Gymkhana has a fully Air-conditioned Gymnasium
                                                    facility which is equipped with the latest gym equipment.
                                                </p>
                                                <ul class="list-unstyled page-list mb-30">
                                                    <h4 class="margin-b-0">Daily :</h4>
                                                    <li class="margin-b-0">
                                                        <div class="page-list-icon"><span class="ti-time"></span>
                                                        </div>
                                                        <div class="page-list-text">
                                                            <p>06.00 AM to 09.30 PM</p>
                                                        </div>
                                                    </li>
                                                    <h6 class="mb-10">Bootcamp: </h6>
                                                    <h4 class="margin-b-0">Tuesday & Thursday :</h4>
                                                    <li class="margin-b-0">
                                                        <div class="page-list-icon"><span class="ti-time"></span>
                                                        </div>
                                                        <div class="page-list-text">
                                                            <p>07.30 AM to 08.30 AM</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="menu-info">
                                                    <h5>Bootcamp <span class="price">Rs. 1,500 Inclusive of GST.</span></h5>
                                                    <br>
                                                    <div id="carouselExampleIndicators6" class="carousel slide" data-ride="carousel">
                                                        <ol class="carousel-indicators">
                                                            <li data-target="#carouselExampleIndicators6" data-slide-to="0" class="active"></li>
                                                            <li data-target="#carouselExampleIndicators6" data-slide-to="1">
                                                            </li>
                                                            <li data-target="#carouselExampleIndicators6" data-slide-to="2">
                                                            </li>
                                                        </ol>
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img class="d-block w-100" src="images/gallery/sports/fitness/1.jpg" alt="Fitness">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block w-100" src="images/gallery/sports/fitness/2.jpg" alt="Fitness">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block w-100" src="images/gallery/sports/fitness/3.jpg" alt="Fitness">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-wrapper">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-30">The Bombay Gymkhana is one of the homes of Rugby in India, with
                                                    the sport having been played here since the early 1900s! We have a vibrant
                                                    Rugby culture and strong history and association with the game, with our
                                                    senior team participating in the elite division of National Rugby and a
                                                    large proportion of senior team having represented India since India’s
                                                    international debut in 1998.
                                                </p>
                                                <p class="mb-30">Rugby is currently one of the fastest growing sports in India,
                                                    involving women, men, girls and boys spread across the entire country.
                                                </p>
                                                <ul class="list-unstyled page-list mb-30">
                                                    <h6>Season Duration : June – October </h6>
                                                    <h4>Tuesdays, Thursday & Saturdays</h4>
                                                    <li>
                                                        <div class="page-list-icon"><span class="ti-time"></span></div>
                                                        <div class="page-list-text">
                                                            <p>05.30 PM onwards</p>
                                                        </div>
                                                    </li><br>
                                                    <h6>Touch Rugby Season Duration : November – May </h6>
                                                    <h4>Saturdays</h4>
                                                    <li>
                                                        <div class="page-list-icon"><span class="ti-time"></span></div>
                                                        <div class="page-list-text">
                                                            <p>07.30 PM onwards </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <h6>For details contact the Sports Department on <a href="tel:+912243223411">+91
                                                        22 43223411</a><a href="tel:+912243223443">/43223443</a></h6>
                                            </div>
                                            <div class="col-md-6">
                                                <div id="carouselExampleIndicators10" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carouselExampleIndicators10" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carouselExampleIndicators10" data-slide-to="1"></li>
                                                        <li data-target="#carouselExampleIndicators10" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100" src="images/gallery/sports/rugby/1.jpg" alt="Rugby">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="images/gallery/sports/rugby/2.jpg" alt="Rugby">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="images/gallery/sports/rugby/3.jpg" alt="Rugby">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-wrapper">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-30">The Bombay Gymkhana Squash Courts are situated in a lovely
                                                    heritage building at a walking distance of three minutes from the main
                                                    Gymkhana building. All of these courts are air-conditioned glass back
                                                    courts.
                                                </p>
                                                <p class="mb-30">These International standard Squash Courts have teakwood
                                                    flooring making them the best Squash Courts in Mumbai.
                                                </p>
                                                <p class="mb-30">Five squash professionals who substitute as referees during
                                                    tournaments are available to play with the members. There is a dressing room
                                                    facility for Men and Women players and a wonderful viewing gallery for
                                                    spectators to view the matches. A regular coaching program is conducted
                                                    under the guidance Mr. Avinash Bhavnani of Zest for Sports and More
                                                    throughout the year.
                                                </p>
                                                <ul class="list-unstyled page-list mb-30">
                                                    <h4 class="margin-b-0">Weekdays :</h4>
                                                    <li class="margin-b-0">
                                                        <div class="page-list-icon"><span class="ti-time"></span>
                                                        </div>
                                                        <div class="page-list-text">
                                                            <p>07.00 AM to 08.30 PM.</p>
                                                        </div>
                                                    </li><br>
                                                    <h4 class="margin-b-0">Sunday & Public Holidays :</h4>
                                                    <li class="margin-b-0">
                                                        <div class="page-list-icon"><span class="ti-time"></span>
                                                        </div>
                                                        <div class="page-list-text">
                                                            <p>08.00 AM to 07.30 PM.</p>
                                                        </div>
                                                    </li><br>
                                                    <h6 class="mb-10">Coaching Timings</h6>
                                                    <h4 class="margin-b-0">Tuesday-Friday :</h4>
                                                    <li class="margin-b-0">
                                                        <div class="page-list-icon"><span class="ti-time"></span>
                                                        </div>
                                                        <div class="page-list-text">
                                                            <p>02.30 PM to 5.30 PM</p>
                                                        </div>
                                                    </li>
                                                    <h4 class="margin-b-0">Saturday & Sunday :</h4>
                                                    <li class="margin-b-0">
                                                        <div class="page-list-icon"><span class="ti-time"></span>
                                                        </div>
                                                        <div class="page-list-text">
                                                            <p>09.00 AM to 1.00 PM</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="menu-info">
                                                    <h6>Charges </h6>
                                                    <h5>Beginners <span class="price"> RS 6000.00 Per Month Exclusive of GST Rates</span></h5>
                                                    <h6>For Members </h6>
                                                    <h5>Intermediate <span class="price"> RS 8500.00 Per Month Exclusive of GST Rates</span>
                                                    </h5>
                                                    <h5>Advance<span class="price"> RS 13,500.00 Per Month Exclusive of GST Rates</span></h5>
                                                    <h5>Elite <span class="price">RS 16,500.00 Per Month Exclusive of GST Rates</span></h5>
                                                    <h6>For Non-Member </h6>
                                                    <h5>Intermediate <span class="price"> RS 13,500.00 Per Month Exclusive of GST Rates</span>
                                                    </h5>
                                                    <h5>Advance<span class="price"> RS 16,500.00 Per Month Exclusive of GST Rates</span></h5>
                                                    <h5>Elite <span class="price">RS 22,000.00 Per Month Exclusive of GST Rates</span></h5>
                                                    <h6>Guest Charges At Squash</h6>
                                                    <h5>Weekdays <span class="price">Rs 142.00 Inclusive of GST</span></h5>
                                                    <h5>Weekends and Bank Holidays <span class="price">Rs 177.00 Inclusive of
                                                            GST</span></h5>
                                                    <h5>Marker Charges for 30mins<span class="price">Rs 50.00 Exclusive of GST Rates </span></h5>
                                                </div>
                                                <br>
                                                <div id="carouselExampleIndicators9" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carouselExampleIndicators9" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carouselExampleIndicators9" data-slide-to="1"></li>
                                                        <li data-target="#carouselExampleIndicators9" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100" src="images/gallery/sports/squash/1.jpg" alt="Squash">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="images/gallery/sports/squash/2.jpg" alt="Squash">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="images/gallery/sports/squash/3.jpg" alt="Squash">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-wrapper">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-30">We have a beautiful Swimming Pool, which is 25 meters long,
                                                    10.95 meters wide, the deepness ranging from 1.20 meters to 3.6 meters, with
                                                    diving boards of height 1 meter, 3 meters and 5 meters.
                                                </p>

                                                <p class="mb-30">The pool has excellent changing rooms, heating facilities
                                                    during winter and new filtration plant with Ozonator.
                                                </p>
                                                <ul class="list-unstyled page-list mb-30">
                                                    <h6 class="margin-b-0">Daily : </h6>
                                                    <li class="margin-b-0">
                                                        <div class="page-list-icon"> <span class="ti-time"></span>
                                                        </div>
                                                        <div class="page-list-text">
                                                            <p>06.30 AM to 09.30 PM</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <h4>Note:</h4>
                                                <ol class="lower-alpha-marker">
                                                    <li>Member to vacate the pool at 9.15 PM</li>
                                                    <li>pool closed from 2.00 PM to 3.00 PM for maintenance</li>
                                                </ol>
                                                <br>
                                                <br>
                                                <div class="butn-dark"> <a href="https://docs.google.com/forms/d/e/1FAIpQLSd6OMbQH4o_cFrpbRC_Zm72KBBxNrfjALEB4765AZ9ffwKrzQ/viewform" target="_blank"><span>Feedback Form</span></a> </div>


                                            </div>
                                            <div class="col-md-6">
                                                <div class="menu-info">
                                                    <h6>Kids Coaching for Three Months</h6>
                                                    <h5>Charges <span class="price">Rs 3500.00 per Month Exclusive of GST Rates per Member
                                                        </span></h5>
                                                </div>
                                                <div class="menu-info">
                                                    <h6>Aqua Aerobics</h6>
                                                    <h5>Charges <span class="price">Rs 3000.00 per Month Exclusive of GST Rates per Member
                                                        </span></h5>
                                                </div>
                                                <div class="menu-info">
                                                    <h6>Adult Coaching for 26 Sessions</h6>
                                                    <h5>Charges <span class="price">Rs 500.00 per Session Exclusive of GST Rates per Member
                                                        </span></h5>
                                                </div>
                                                <div class="menu-info">
                                                    <h6>Guest Charges at Swimming</h6>
                                                    <h5>Weekdays <span class="price">Rs 142.00 Inclusive of GST.</span></h5>
                                                    <h5>Weekends and Bank Holidays <span class="price">Rs 177.00 Inclusive of
                                                            GST.</span></h5>
                                                </div>
                                                <br>
                                                <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carouselExampleIndicators4" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carouselExampleIndicators4" data-slide-to="1"></li>
                                                        <li data-target="#carouselExampleIndicators4" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100" src="images/gallery/sports/swimming/1.jpg" alt="Swimming">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="images/gallery/sports/swimming/2.jpg" alt="Swimming">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="images/gallery/sports/swimming/3.jpg" alt="Swimming">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-wrapper">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-30">Bombay Gymkhana has six floodlit Tennis Courts. Being the first
                                                    Club in the country to floodlight its Tennis courts, it has six synthetic
                                                    all weather courts laid with Australian duco turf for a true playing surface
                                                    to keep abreast with the latest technology and to keep in sync with the
                                                    times.</p>
                                                <p>With all facilities given to Members like new balls every day, our markers
                                                    are in great demand by the Members thus making the Tennis section the most
                                                    popular game with maximum Members participating every day.</p>
                                                <p class="mb-10">Year round tournaments are held, like the Corporate cup, In
                                                    house tournaments for Members and Members dependents and our very own Tata
                                                    Shield which is over 100 years old and the Intra Club tournaments for all
                                                    age groups which is immensely popular.</p>
                                                <ul class="list-unstyled page-list mb-30">

                                                    <h4 class="margin-b-0">Daily :</h4>
                                                    <li class="margin-b-0">
                                                        <div class="page-list-icon"><span class="ti-time"></span>
                                                        </div>
                                                        <div class="page-list-text">
                                                            <p>07.00 AM to 09.30 PM.</p>
                                                        </div>
                                                    </li><br>
                                                    <h6 class="margin-b-0">Coaching Timings</h6>
                                                    <h4 class="margin-b-0">Monday to Friday :</h4>
                                                    <li class="margin-b-0">
                                                        <div class="page-list-icon"><span class="ti-time"></span>
                                                        </div>
                                                        <div class="page-list-text">
                                                            <p>03.30 PM to 06.30 PM.</p>
                                                        </div>
                                                    </li><br>
                                                    <h4 class="margin-b-0">Saturday & Sunday :</h4>
                                                    <li class="margin-b-0">
                                                        <div class="page-list-icon"><span class="ti-time"></span>
                                                        </div>
                                                        <div class="page-list-text">
                                                            <p>09.30 AM to 11.30 AM</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 ">
                                                <div class="menu-info">
                                                    <h6>Beginner's Batch Three Times A Week For 1 Hour Each</h6>
                                                    <h5>Charges <span class="price">Rs 1960.00 Per Month Inclusive of GST Rates</span>
                                                    </h5>
                                                </div>
                                                <div class="menu-info">
                                                    <h6> Beginner's Batch Five Times A Week For 1 Hour Each</h6>
                                                    <h5>Charges <span class="price">Rs 3043.00 Per Month Inclusive of GST Rates</span>
                                                    </h5>
                                                </div>
                                                <div class="menu-info">
                                                    <h6> Mini Tennis (4 to 6 Years) Three Times A Week For 1 Hour Each</h6>
                                                    <h5>Charges <span class="price">Rs 1304.00 Per Month Inclusive of GST Rates</span>
                                                    </h5>
                                                </div>
                                                <div class="menu-info">
                                                    <h6>Junior's Batch -Sat/Sun</h6>
                                                    <h5>Charges <span class="price">Rs 3643.00 Per Month Inclusive of GST Rates</span>
                                                    </h5>
                                                </div>
                                                <div class="menu-info">
                                                    <h6>Adult's Batch -Sat/Sun</h6>
                                                    <h5>Charges <span class="price">Rs 3492.00 Per Month Inclusive of GST Rates</span>
                                                    </h5>
                                                </div>
                                                <div class="menu-info">
                                                    <h6> Intermediate Batch Three Times A Week</h6>
                                                    <h5>Charges <span class="price">Rs 3491.00 Per Month Without Fitness Inclusive of GST Rates</span>
                                                    </h5>
                                                    <h5>Charges <span class="price">Rs 5705.00 Per Month With Fitness Inclusive of GST Rates</span>
                                                    </h5>
                                                </div>
                                                <div class="menu-info">
                                                    <h6>Intermediate Batch Five Times A Week</h6>
                                                    <h5>Charges <span class="price"> Rs 5819.00 Per Month Without Fitness Inclusive of GST Rates</span>
                                                    </h5>
                                                    <h5>Charges <span class="price"> Rs 8033.00 Per Month With Fitness Inclusive of GST Rates</span>
                                                    </h5>
                                                </div>
                                                <div class="menu-info">
                                                    <h6>Advanced Batch Three Times A Week For 1 Hour Each </h6>
                                                    <h5>Charges <span class="price"> Rs 5035.00 Per Month Without Fitness Inclusive of GST Rates</span>
                                                    </h5>
                                                    <h5>Charges <span class="price"> Rs 7095.00 Per Month With Fitness Inclusive of GST Rates</span>
                                                    </h5>
                                                </div>
                                                <div class="menu-info">
                                                    <h6>Advanced Batch Five Times A Week For 1 Hour</h6>
                                                    <h5>Charges <span class="price"> Rs 9340.00 Per Month Without Fitness Inclusive of GST Rates</span>
                                                    </h5>
                                                    <h5>Charges <span class="price"> Rs 11400.00 Per Month With Fitness Inclusive of GST Rates</span>
                                                    </h5>
                                                </div>
                                                <div class="menu-info">
                                                    <h6>Advanced Batch Three Times A Week For 1.5 Hour Each</h6>
                                                    <h5>Charges <span class="price">Rs 11,300 Per Month Inclusive of GST Rates</span></h5>
                                                </div>
                                                <div class="menu-info">
                                                    <h6>Advanced Batch Five Times A Week For 1.5 Hour Each</h6>
                                                    <h5>Charges <span class="price">Rs 15,420 Per Month Inclusive of GST Rates</span></h5>
                                                </div>
                                                <div class="menu-info">
                                                    <h6>Advanced Batch Playing Members Five Times A Week For 1.5 Hour Each</h6>
                                                    <h5>Charges <span class="price">Rs 23,415 Per Month Inclusive of GST Rates</span></h5>
                                                </div>
                                                <div class="menu-info">
                                                    <h6>Super Advance Five Times A Week For 2 Hour Each</h6>
                                                    <h5>Charges <span class="price">Rs 20,055 Per Month Inclusive of GST Rates</span></h5>
                                                </div>
                                                <div class="menu-info">
                                                    <h6>Guest Charges At Tennis Court</h6>
                                                    <h5>Weekdays <span class="price"> Rs 142.00 Inclusive of GST</span></h5>
                                                    <h5>Weekends and Bank Holidays<span class="price"> Rs 177.00 Inclusive of
                                                            GST</span></h5>
                                                </div>
                                                <div class="menu-info">
                                                    <h5>Maker Charges for 45 minutes <span class="price">Rs 75 Exclusive of GST Rates</span></h5>
                                                </div>
                                                <br>
                                                <div id="carouselExampleIndicators8" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carouselExampleIndicators8" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carouselExampleIndicators8" data-slide-to="1"></li>
                                                        <li data-target="#carouselExampleIndicators8" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100" src="images/gallery/sports/tennis/1.jpg" alt="Tennis">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="images/gallery/sports/tennis/2.jpg" alt="Tennis">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="images/gallery/sports/tennis/3.jpg" alt="Tennis">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-wrapper">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-30">The Bombay Gymkhana Table Tennis Facility is open for all and
                                                    rackets & bats available with custodian, this is given by sports</p>
                                                <h6>For details contact the Sports Department on <a href="tel:+912243223411">+91
                                                        22 43223411</a><a href="tel:+912243223443">/43223443</a></h6>
                                            </div>
                                            <div class="col-md-6">
                                                <div id="carouselExampleIndicators11" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carouselExampleIndicators11" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carouselExampleIndicators11" data-slide-to="1"></li>
                                                        <li data-target="#carouselExampleIndicators11" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100" src="images/gallery/sports/table-tenis/1.jpg" alt="Table Tennis">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="images/gallery/sports/table-tenis/2.jpg" alt="Table Tennis">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="images/gallery/sports/table-tenis/3.jpg" alt="Table Tennis">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-wrapper">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="list-unstyled page-list mb-30">
                                                    <h4>Every Friday </h4>
                                                    <li>
                                                        <div class="page-list-icon"><span class="ti-time"></span></div>
                                                        <div class="page-list-text">
                                                            <p>6.00 pm to 8.00 pm</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <h6>For details contact the Sports Department on <a href="tel:+912243223411">+91 22 43223411</a><a href="tel:+912243223443">/43223443</a></h6>
                                            </div>
                                            <div class="col-md-6">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-wrapper">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-30">Yoga is an ancient science with complete answers to the healing
                                                    process for human body, mind and soul, with fantastic benefits for not only
                                                    physical problems but for hypertension, stress, acidity-the list is endless.
                                                </p>

                                                <p class="mb-30">The Yoga classes held at Bombay Gymkhana have steadily gained
                                                    in popularity.
                                                </p>

                                                <p class="mb-30">The classes are conducted under the banner of ‘Shiv Holistic
                                                    Yoga’ conducted by Mr. Shivkumar Mishra.
                                                </p>
                                                <ul class="list-unstyled page-list mb-30">
                                                    <h6 class="margin-b-0">Yoga Classes: </h6>
                                                    <h4 class="margin-b-0">Monday, Wednesday and Friday-</h4>
                                                    <li class="margin-b-0">
                                                        <div class="page-list-icon"><span class="ti-time"></span>
                                                        </div>
                                                        <div class="page-list-text">
                                                            <p>08.15 AM to 09.15 AM</p>
                                                        </div>
                                                    </li>
                                                </ul>


                                            </div>
                                            <div class="col-md-6">
                                                <div class="menu-info">
                                                    <!-- <h6>GUEST CHARGES AT BILLIARDS AND SNOOKER ROOM</h6> -->
                                                    <!-- <h5>Charges  :  <span class="price">Rs 1100.00 Plus Taxes  per
                                                    Month</span></h5> -->
                                                    <!-- <h5>Weekends and Bank Holidays <span class="price">Rs 150.00 Plus Taxes</span></h5> -->
                                                </div>
                                                <div class="menu-info">
                                                    <h6>Hybrid Yoga Sessions at the Palm Court on Mon/Wed/Fri</h6>
                                                    <h5>Members<span class="price">Rs 500.00 per Month Exclusive of GST Rates</span></h5>
                                                    <h5>Members Guests<span class="price">Rs 1000.00 per Month Exclusive of GST Rates</span>
                                                    </h5>
                                                </div>
                                                <br>
                                                <div id="carouselExampleIndicators5" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carouselExampleIndicators5" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carouselExampleIndicators5" data-slide-to="1"></li>
                                                        <li data-target="#carouselExampleIndicators5" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100" src="images/gallery/sports/yoga/1.jpg" alt="Yoga">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="images/gallery/sports/yoga/2.jpg" alt="Yoga">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="images/gallery/sports/yoga/3.jpg" alt="Yoga">
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
    </section>
   



    <!-- Footer -->
    <?php include 'footer.php' ?>


    <?php include 'footer-link.php' ?>
    <script>
        $(".top-slider .slides").slick({
            dots: false,
            arrows: false,
            infinite: true,
            loop: true,
            speed: 1000,
            focusOnSelect: true,
            autoplay: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: ".middle-slider .slides, .three-slide-slider .slides",
        });
        $(".middle-slider .slides").slick({
            dots: false,
            arrows: true,
            infinite: true,
            loop: true,
            speed: 1000,
            focusOnSelect: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: ".top-slider .slides, .three-slide-slider .slides",
            responsive: [{
                breakpoint: 500,
                settings: {
                    slidesToShow: 1
                }
            }]
        });
        $(".three-slide-slider .slides").slick({
            dots: false,
            arrows: false,
            infinite: true,
            loop: true,
            speed: 1000,
            focusOnSelect: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true,
            asNavFor: ".top-slider .slides,.middle-slider .slides",
            responsive: [{
                breakpoint: 425,
                settings: {
                    slidesToShow: 1
                }
            }]
        });
    </script>
    <script>
        $('.carousel').carousel({
            interval: 2000
        })
    </script>

</html>