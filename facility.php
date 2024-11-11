<!DOCTYPE html>
<html lang="zxx">


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
    <!-- <div class="banner-header section-padding valign bg-img bg-fixed bg-center" data-overlay-dark="4" data-background="img/slider/Tennis.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <h1>Facilities</h1>
                </div>
            </div>
        </div>
    </div> -->
    <div class="banner-header" style="position:relative;overflow: hidden;">
        <div id="carouselExampleFade" class="carousel slide carousel-fade md-none" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/banner-new/1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/banner-new/25.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/banner-new/26.png" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/banner-new/27.png" alt="Four slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/banner-new/28.png" alt="Five slide">
                </div>
            </div>
        </div>
        <div id="carouselExampleFade" class="carousel slide carousel-fade md-block" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/banner-new/mobile1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/banner-new/mobile2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/banner-new/mobile3.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/banner-new/mobile4.jpg" alt="Four slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/banner-new/mobile5.jpg" alt="Five slide">
                </div>
            </div>
        </div>
        <div class="bg-overlay">
            <h1>Facilities</h1>
        </div>
    </div>
    <!-- About -->
    <!-- Facilties -->

    <section class="rooms1 section-padding bg-cream" data-scroll-index="1" id="resto">

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="/fnb-facility-details.php" class="">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="images/banner-images/dining-hall1.jpg" alt=""> </div>
                            <div class="con">
                                <h5> Banquets</h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-5">
                                        <ul>
                                            <li class="tooltip"><img src="images/white-icons/Dinning Hall_2.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Dining room</span></li>
                                            <li class="tooltip"><img src="images/white-icons/Food_1.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Scullery ( Back Kitchen )</span></li>
                                            <li class="tooltip"><img src="images/white-icons/Barr_2.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">lounge</span></li>
                                            <li class="tooltip"><img src="images/white-icons/Windy (courtside)_2.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Seating area</span></li>
                                            <li class="tooltip"><img src="images/white-icons/Palm Court_2.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Pristine ambiance</span></li>
                                        </ul>
                                    </div>
                                    <div class=" col col-md-7 text-right">
                                        <div class="permalink"></div>
                                    </div>
                                </div>
                                <div class="line mb-5"></div>
                                <h5>Timings</h5>
                                <ul class="list-unstyled page-list mb-5">
                                    <li>
                                        <div class="page-list-icon"> <span class="ti-time"></span>
                                        </div>
                                        <div class="page-list-text text-small">
                                            <p>12.00 Noon to 11.00 PM</p>
                                        </div>
                                    </li>
                                    <li style="visibility: hidden;">
                                        <div class="page-list-icon"> <span class="ti-time"></span>
                                        </div>
                                        <div class="page-list-text text-small">
                                            <p>11:30 AM to 08:30 PM (last order 08.00 PM)</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="/sports-facility-details.php" class="">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="images/Facilities/sports.jpg" alt=""> </div>
                            <div class="con">
                                <h5>Sports</h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-8">
                                        <ul>
                                            <li class="tooltip"><img src="images/Facilities/badminton.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Badminton</span></li>
                                            <li class="tooltip"><img src="images/Facilities/billiard.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Billiards & Snookers</span></li>
                                            <li class="tooltip"><img src="images/Facilities/cricket.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Cricket</span></li>
                                            <li class="tooltip"><img src="images/Facilities/fitness.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Fitness Center</span></li>
                                            <li class="tooltip"><img src="images/Facilities/poker-cards.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Bridge</span></li>
                                            <li class="tooltip"><img src="images/Facilities/rugby.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Rugby</span></li>
                                            <li class="tooltip"><img src="images/Facilities/soccer-player.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Football</span></li>
                                            <li class="tooltip"><img src="images/Facilities/squash.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Squash</span></li>
                                            <li class="tooltip"><img src="images/Facilities/swimming.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Swimming</span></li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-2 text-right">
                                        <div class="permalink"></div>
                                    </div>
                                </div>
                                <div class="line mb-5"></div>
                                <h5>Timings</h5>
                                <ul class="list-unstyled page-list mb-5">
                                    <li>
                                        <div class="page-list-icon"> <span class="ti-time"></span>
                                        </div>
                                        <div class="page-list-text text-small">
                                            <p>06:00 AM to 09:30 PM</p>
                                        </div>
                                    </li>
                                    <li style="visibility: hidden;">
                                        <div class="page-list-icon"> <span class="ti-time"></span>
                                        </div>
                                        <div class="page-list-text text-small">
                                            <p>11:30 AM to 08:30 PM (last order 08.00 PM)</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="/preening-facility-details.php" class="">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="images/Facilities/preening.jpg" alt=""> </div>
                            <div class="con">
                                <h5>Preening Point</h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-5">
                                        <ul>
                                            <li class="tooltip"><img src="images/Facilities/steam-room.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Steam Room</span></li>
                                            <li class="tooltip"><img src="images/Facilities/manicure.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Manicure & Pedicure</span></li>
                                            <li class="tooltip"><img src="images/Facilities/spa.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Massage Facility</span></li>
                                            <li class="tooltip"><img src="images/Facilities/barbershop.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Hairdressing Salon</span></li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-7 text-right">
                                        <div class="permalink"></div>
                                    </div>
                                </div>
                                <div class="line mb-5"></div>
                                <h5>Timings</h5>
                                <ul class="list-unstyled page-list mb-5">
                                    <li>
                                        <div class="page-list-icon"> <span class="ti-time"></span>
                                        </div>
                                        <div class="page-list-text text-small">
                                            <p>07.00 AM to 09.45 PM</p>
                                        </div>
                                    </li>
                                    <li style="visibility: hidden;">
                                        <div class="page-list-icon"> <span class="ti-time"></span>
                                        </div>
                                        <div class="page-list-text text-small">
                                            <p>11:30 AM to 08:30 PM (last order 08.00 PM)</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6">
                    <a href="/unwind-facility-details.php" class="">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="images/Facilities/unwind.jpg" alt=""> </div>
                            <div class="con">
                                <h5>Unwind Zone</h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-7">
                                        <ul>
                                            <li class="tooltip"><img src="images/Facilities/playground.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Children's Park</span></li>
                                            <li class="tooltip"><img src="images/Facilities/recliner.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Siesta Room</span></li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-5 text-right">
                                        <div class="permalink"></div>
                                    </div>
                                </div>
                                <div class="line mb-5"></div>
                                <h5>Timings</h5>
                                <ul class="list-unstyled page-list mb-5">
                                    <li>
                                        <div class="page-list-icon"> <span class="ti-time"></span>
                                        </div>
                                        <div class="page-list-text text-small">
                                            <p>08:00 AM to 08:30 PM </p>
                                        </div>
                                    </li>
                                    <li style="visibility: hidden;">
                                        <div class="page-list-icon"> <span class="ti-time"></span>
                                        </div>
                                        <div class="page-list-text text-small">
                                            <p>11:30 AM to 08:30 PM (last order 08.00 PM)</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="/library-facility-details.php" class="">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="images/Facilities/Library.jpg" alt=""> </div>
                            <div class="con">
                                <h5>Library</h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-7">
                                        <ul>
                                            <li class="tooltip"><img src="images/Facilities/reading.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Children's Library</span></li>
                                            <li class="tooltip"><img src="images/Facilities/book.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Library</span></li>
                                        </ul>
                                    </div>
                                    <div class=" col col-md-5 text-right">
                                        <div class="permalink"></div>
                                    </div>
                                </div>
                                <div class="line mb-5"></div>
                                <h5>Timings</h5>
                                <ul class="list-unstyled page-list mb-5">
                                    <li>
                                        <div class="page-list-icon"> <span class="ti-time"></span>
                                        </div>
                                        <div class="page-list-text text-small">
                                            <p>08:00 AM to 08:30 PM</p>
                                        </div>
                                    </li>
                                    <li style="visibility: hidden;">
                                        <div class="page-list-icon"> <span class="ti-time"></span>
                                        </div>
                                        <div class="page-list-text text-small">
                                            <p>11:30 AM to 08:30 PM (last order 08.00 PM)</p>
                                        </div>
                                    </li>
                                </ul>
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
    <script>
        $('.carousel').carousel({
            interval: 2000
        })
    </script>
</body>

 
</html>