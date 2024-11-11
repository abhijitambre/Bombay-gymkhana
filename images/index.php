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
    <script>
        Notification.requestPermission().then(function(permission) {
            if (permission === 'granted') {
                // Create a push subscription
                navigator.serviceWorker.ready.then(function(serviceWorkerRegistration) {
                    serviceWorkerRegistration.pushManager.subscribe({
                        userVisibleOnly: true
                    }).then(function(subscription) {
                        // Send a notification
                        fetch('/send-notification', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify({
                                subscription: subscription,
                                message: 'Hello, world!'
                            })
                        });
                    });
                });
            }
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
                <a href="/index">
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
                            <li class="dropdown-item "><a href="/about-us">About Club</a></li>
                            <li class="dropdown-item"><a href="/about-club">Club History</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#facilties" To>Facilities</a></li>
                    <li class="nav-item"><a class="nav-link" href="#resto" To>Restaurant</a></li>
                    <li class="nav-item"><a class="nav-link" href="/gallery" To>Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact" To>Contact Us</a></li>
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
                <div class="v-middle caption">
                    <div class="container">
                    </div>
                </div>
            </div>
        </div>
    </header>
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
                    <div class="butn-dark intersterd" style="margin-top:20px;"> <a href="about-us.php" target="blank"><span>Read More</span></a>
                    </div>
                </div>
                <div class=" col-md-3 col-6 col-sm-6 animate-box sm-img-blk" data-animate-effect="fadeInUp">
                    <img src="images/banner-images/Home_2nd_section_image.png" alt="" class="mt-90 mb-30 about-img ">
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
                                            <p>12.00 Noon to 11.00 PM</p>
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
                                            <p>06:00 AM to 09:30 PM</p>
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
                                            <p>07.00 AM to 09.45 PM</p>
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
                                            <p>08:00 AM to 08:30 PM </p>
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
                                            <p>08:00 AM to 08:30 PM</p>
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
    <!-- Rooms -->
    <section class="rooms1 section-padding bg-cream" data-scroll-index="1" id="resto">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle" style="visibility: hidden !important;">Bombay Gymkhana</div>
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
                                            <p>08.00 AM to 08.00 PM</p>
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
                                            <p>08.00 AM to 10.00 PM (last order 09.30 PM)</p>
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
                                            <p>07:30 AM to 11:00 PM (last order 10.30 PM</p>
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
                                            <p>12:30pm to 11:0pm Last order 10:30pm</p>
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
                    <div class="tagembed-container" style=" width:100%;height:100%;overflow: auto;">
                        <div class="tagembed-socialwall" data-wall-id="66835" view-url="https://widget.tagembed.com/66835?view"> </div>
                        <script src="//widget.tagembed.com/embed.min.js" type="text/javascript"></script>
                    </div>
                    <div class="butn-dark intersterd" style="text-align:center;margin-top:20px;"> <a href="https://www.instagram.com/bombaygymkhana/?hl=en" target="blank"><span>View More</span></a>
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
                                        <a href="#about" To><span>Read More</span></a>

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

                            <p class="footer-bottom-copy-right">© Copyright 2022
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
                                                    <input type="number" name="clientid2" class="form-control input " placeholder="e.g 001">
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
                                                <a href="javascript:genpass()" id="">
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
                                            <p id="passwordmsg">Invalid User</p>
                                            <button type="submit" id="genpassword" class="btn-form1-submit mt-15">Genrate</button>
                                            <p class="gentxt">
                                                <a href="javascript:returnlog()" id="">
                                                    <b> Return to Login</b>
                                                </a>
                                            </p>
                                        </div>
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


    <!-- jQuery -->
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
    <!-- jQuery -->
    <div class="modal" id="myModal3" tabindex="-1" role="dialog">
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
                                <p>Step1 : Click on the 3 Dots</p>
                                <p>Step2 : Click on Install App</p>
                                <p>Tap <img src="images/black-icons/upload.png" style="width: 20px;" alt=""> and then "install".</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



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
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>

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
        $(window).on('load', function() {
            var userAgent = window.navigator.userAgent,
                platform = window.navigator?.userAgentData?.platform || window.navigator.platform,
                macosPlatforms = ['Macintosh', 'MacIntel', 'MacPPC', 'Mac68K', 'macOS'],
                windowsPlatforms = ['Win32', 'Win64', 'Windows', 'WinCE'],
                iosPlatforms = ['iPhone', 'iPad', 'iPod'],
                os = null;
            window.addEventListener('appinstalled', (evt) => {
                alert('a2hs installed');
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
                if (window.matchMedia('(display-mode: standalone)').matches) {
                    console.log("This is running as standalone.");
                    $('#popup2').modal('hide');
                } else {
                    $('#popup2').modal('show');
                }
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
                window.location.href = "/home";
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
                            window.location.href = "/home";

                            // jwtfunction();

                        } else {
                            // alert("worng userid or pasword");
                            $('#preloader').fadeOut(300, function() {
                                $('#preloader').remove();
                            });
                            document.getElementById("errormsg").style.display = "block ";
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

                            document.getElementById("passwordmsg").style.display = "block ";
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                navigation: true,
                items: 1,
                loop: true,
                nav: true,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
            });
        });
    </script>
    <script>
        window.OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "6e1ea221-dacb-439f-a6cc-f54908f79540",
                safari_web_id: "web.onesignal.auto.184c7445-8c69-4a83-85c0-51cef14a5d89",
                notifyButton: {
                    enable: true,
                },
            });
        });
    </script>

</body>


</html>