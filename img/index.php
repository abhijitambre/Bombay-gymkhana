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


    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Barlow&amp;family=Barlow+Condensed&amp;family=Gilda+Display&amp;display=swap">

    <link rel="stylesheet" href="css/plugins.css" />

    <link rel="stylesheet" href="css/style.css" />


    <script>

    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('sw.js?v=1', {
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


    <style>
    #gen-form {
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

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

                    <li class="nav-item"><a class="nav-link " href="#header">Home</a></li>
                    <li class="nav-item"><a class="nav-link " href="#about">About</a></li>

                    <!-- <li class="nav-item dropdown"> <span class="nav-link "> About <i class="ti-angle-down"></i></span>

                        <ul class="dropdown-menu last">

                            <li class="dropdown-item "><a href="club.php">About Club</a></li>

                            <li class="dropdown-item"><a href="club-history.php">Club History</a></li>



                        </ul>

                    </li> -->


                    <li class="nav-item"><a class="nav-link" href="#facilties">Facilities</a></li>

                    <!-- <li class="nav-item"><a class="nav-link" href="about.php">Blog</a></li> -->



                    <li class="nav-item"><a class="nav-link" href="#resto">Restaurant</a></li>




                    <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>


                    <div class="butn-dark intersterd"> <a href="javascript:void(0);"><span>Member Login</span></a>
                    </div>











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

    <!-- Slider -->
    <header class="header slider-fade" id="header">

        <div class="owl-carousel owl-theme">

            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->

            <div class="text-center item bg-img" data-overlay-dark="1" data-background="img/slider/banner.jpg">

                <div class="v-middle caption">

                    <div class="container">

                        <!-- <div class="row">

                            <div class="col-md-10 offset-md-1">

                                <span>

                                    <i class="star-rating"></i>

                                    <i class="star-rating"></i>

                                    <i class="star-rating"></i>

                                    <i class="star-rating"></i>

                                    <i class="star-rating"></i>

                                </span>

                                <h4>Luxury Hotel & Best Resort</h4>

                                <h1>Enjoy a Luxury Experience</h1>

                                <div class="butn-light mt-30 mb-30"> <a href="#" data-scroll-nav="1"><span>Rooms & Suites</span></a> </div>

                            </div>

                        </div> -->

                    </div>

                </div>

            </div>

            <!-- <div class="text-center item bg-img" data-overlay-dark="2" data-background="img/slider/3.jpg">

                <div class="v-middle caption">

                    <div class="container">

                        <div class="row">

                            <div class="col-md-10 offset-md-1">

                                <span>

                                    <i class="star-rating"></i>

                                    <i class="star-rating"></i>

                                    <i class="star-rating"></i>

                                    <i class="star-rating"></i>

                                    <i class="star-rating"></i>

                                </span>

                                <h4>Unique Place to Relax & Enjoy</h4>

                                <h1>The Perfect Base For You</h1>

                                <div class="butn-light mt-30 mb-30"> <a href="#" data-scroll-nav="1"><span>Rooms & Suites</span></a> </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/slider/1.jpg">

                <div class="v-middle caption">

                    <div class="container">

                        <div class="row">

                            <div class="col-md-10 offset-md-1">

                                <span>

                                    <i class="star-rating"></i>

                                    <i class="star-rating"></i>

                                    <i class="star-rating"></i>

                                    <i class="star-rating"></i>

                                    <i class="star-rating"></i>

                                </span>

                                <h4>The Ultimate Luxury Experience</h4>

                                <h1>Enjoy The Best Moments of Life</h1>

                                <div class="butn-light mt-30 mb-30"> <a href="#" data-scroll-nav="1"><span>Rooms & Suites</span></a> </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div> -->

        </div>

        <!-- slider reservation -->

        <!-- <div class="reservation">

            <a href="tel:8551004444">

                <div class="icon d-flex justify-content-center align-items-center">

                    <i class="flaticon-call"></i>

                </div>

                <div class="call"><span> +91 22 2207 0311</span> <br>Connect With Us</div>

            </a>

        </div> -->

    </header>


    <section class="about section-padding" id="about">
        <!-- <button class="add-button">Add to home screen</button> -->

        <div class="container">

            <div class="row">

                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">

                    <!-- <span>

                        <i class="star-rating"></i>

                        <i class="star-rating"></i>

                        <i class="star-rating"></i>

                        <i class="star-rating"></i>

                        <i class="star-rating"></i>

                    </span> -->

                    <div class="section-subtitle">About Club</div>

                    <div class="section-title">Bombay Gymkhana</div>

                    <p>
                        The iconic Bombay Gymkhana is a premiere club established back in 1875 located at the heart of
                        South Mumbai in Fort. With its historical grassy open space, known as Azad Maidan, the club
                        ranks as one of Mumbai's finest and most elegant destinations.</p>

                    <p>Aside from its outstanding history and timeless architecture, several sporting events of
                        historical significance are attributed to the club. It was at these grounds on 15 December 1933,
                        that India played its first Test match.</p>

                    <p>The club offers its members and visiting sporting teams the finest sporting facilities together
                        with a jovial ambiance for social interaction. Along with live music and DJ performances, the
                        club also hosts many sports and community activities, including workshops and food festivals for
                        members. One of the most coveted treasures of the club is its Sunday brunch, a world-class
                        culinary experience worth remembering.</p>
                    <!-- call -->

                    <!-- <div class="reservations">

                        <div class="icon"><span class="flaticon-call"></span></div>

                        <div class="text">

                            <p>Reservation</p> <a href="tel:855-100-4444">855 100 4444</a>

                        </div>

                    </div> -->

                </div>

                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp">

                    <img src="img/about1.JPG" alt="" class="mt-90 mb-30 about-img ">

                </div>

                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp">

                    <img src="img/about2.JPG" alt="" class="about-img ">

                </div>

            </div>

        </div>

    </section>






    <!-- Facilties -->

    <section class="facilties section-padding2 bg-cream" id="facilties">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="section-subtitle">Our Services</div>

                    <div class="section-title"> Facilities</div>

                </div>

            </div>

            <div class="owl-carousel owl-theme">

                <div class="item">


                    <a href="facility-details.php" class="single-facility animate-box" data-animate-effect="fadeInUp">

                        <span class="flaticon-world"></span>

                        <h5>F&B </h5>

                        <p>Experience the culinary wonders of dining with appetizers and cuisines which transcends
                            continents. </p>

                        <div class="facility-shape"> <span class="flaticon-world"></span> </div>

                    </a>


                </div>

                <div class="item">

                    <a href="sports-facility-details.php" class="single-facility animate-box"
                        data-animate-effect="fadeInUp">

                        <span class="flaticon-car"></span>

                        <h5>Sports </h5>

                        <p>A hub for exciting opportunities across numerous sports which cater variety of interests and
                            abilities.</p>

                        <div class="facility-shape"> <span class="flaticon-car"></span> </div>

                    </a>

                </div>

                <div class="item">

                    <a href="personal-grooming-facility-details.php" class="single-facility animate-box"
                        data-animate-effect="fadeInUp">

                        <span class="flaticon-bed"></span>

                        <h5>Preening point </h5>

                        <p>An exquisite place to treat yourself with a grooming session of integral and impeccable
                            style.</p>

                        <div class="facility-shape"> <span class="flaticon-bed"></span> </div>

                    </a>

                </div>

                <div class="item">

                    <a href="relaxation-facility-details.php" class="single-facility animate-box"
                        data-animate-effect="fadeInUp">

                        <span class="flaticon-bed"></span>

                        <h5>Unwind Zone </h5>

                        <p>Find calm amid chaos and let your inner child out at the serene places.</p>

                        <div class="facility-shape"> <span class="flaticon-bed"></span> </div>

                    </a>

                </div>

                <div class="item">
                    <a href="library-facility-details.php" class="single-facility animate-box"
                        data-animate-effect="fadeInUp">

                        <span class="flaticon-bed"></span>

                        <h5>Library </h5>

                        <p>The nucleus of learning which opens the door to knowledge through the magic of books.</p>

                        <div class="facility-shape"> <span class="flaticon-bed"></span> </div>

                    </a>

                </div>

                <!-- <div class="col-md-4">

                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">

                        <span class="flaticon-swimming"></span>

                        <h5>Swimming Pool</h5>

                        <p>Swimming pool tincidunt nise ace park norttito sit space, mus nellentesque habitant.</p>

                        <div class="facility-shape"> <span class="flaticon-swimming"></span> </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">

                        <span class="flaticon-wifi"></span>

                        <h5>Fibre Internet</h5>

                        <p>Wifi tincidunt nis ace park norttito sit amet space, mus nellentesque habitant.</p>

                        <div class="facility-shape"> <span class="flaticon-wifi"></span> </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">

                        <span class="flaticon-breakfast"></span>

                        <h5>Breakfast</h5>

                        <p>Eat tincidunt nisa ace park norttito sit amet space, mus nellentesque habitant</p>

                        <div class="facility-shape"> <span class="flaticon-breakfast"></span> </div>

                    </div>

                </div> -->

            </div>

        </div>

    </section>



    <!-- Promo Video -->

    <section class="video-wrapper video section-padding bg-img bg-fixed" data-overlay-dark="3"
        data-background="img/slider/banner.jpg">

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

                    <a class="vid" href="https://youtu.be/7BGNAGahig8">

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

    <section class="rooms1 section-padding " data-scroll-index="1" id="resto">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <!-- <div class="section-subtitle">Bombay Gymkhana</div> -->

                    <div class="section-title">Restaurant</div>

                </div>

            </div>

            <div class="row">

                <div class="col-md-4">

                    <div class="item">

                        <div class="position-re o-hidden"> <img src="img/restaurant/1.jpg" alt=""> </div>

                        <!-- <span

                            class="category"><a href="restaurant-information.php">Book</a></span> -->

                        <div class="con">

                            <!-- <h6><a href="rooms2.php"><i class="flaticon-bed"></i> 17 Jul 2022 to 23 Jul 2022</a></h6> -->

                            <!-- <h6><a href="room-details.php"> <i class="flaticon-bed"></i> 12:30 PM to 11:00 PM</a></h6> -->



                            <h5><a href="restaurant-information.php">

                                    THE DINING HALL

                                </a> </h5>

                            <div class="line"></div>

                            <div class="row facilities">

                                <div class="col col-md-7">

                                    <ul>

                                        <!-- <li><i class="flaticon-bed"></i></li>

                                        <li><i class="flaticon-bath"></i></li> -->

                                        <li><i class="flaticon-breakfast"></i></li>

                                        <li><i class="flaticon-towel"></i></li>

                                    </ul>

                                </div>

                                <div class=" col col-md-5 text-right">

                                    <div class="permalink"><a href="restaurant-information.php">Details <i
                                                class="ti-arrow-right"></i></a></div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="item">

                        <div class="position-re o-hidden"> <img src="img/restaurant/2.jpg" alt=""> </div>

                        <!-- <span

                            class="category"><a href="rooms2.php">Book</a></span> -->

                        <div class="con">

                            <!-- <h6><a href="rooms2.php"><i class="flaticon-bed"></i> 17 Jul 2022 to 23 Jul 2022</a></h6> -->

                            <!-- <h6><a href="room-details.php"> <i class="flaticon-bed"></i> 12:30 PM to 11:00 PM</a></h6> -->



                            <h5><a href="restaurant-information.php">

                                    GYM`S INN BAR

                                </a> </h5>

                            <div class="line"></div>

                            <div class="row facilities">

                                <div class="col col-md-7">

                                    <ul>

                                        <!-- <li><i class="flaticon-bed"></i></li>

                                        <li><i class="flaticon-bath"></i></li> -->

                                        <li><i class="flaticon-breakfast"></i></li>

                                        <li><i class="flaticon-towel"></i></li>

                                    </ul>

                                </div>

                                <div class="col col-md-5 text-right">

                                    <div class="permalink"><a href="restaurant-information.php">Details <i
                                                class="ti-arrow-right"></i></a></div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="item">

                        <div class="position-re o-hidden"> <img src="img/restaurant/1.jpg" alt=""> </div>

                        <!-- <span

                            class="category"><a href="restaurant-information.php">Book</a></span> -->

                        <div class="con">

                            <!-- <h6><a href="restaurant-information.php"><i class="flaticon-bed"></i> 17 Jul 2022 to 23 Jul 2022</a></h6> -->

                            <!-- <h6><a href="room-details.php"> <i class="flaticon-bed"></i> 12:30 PM to 11:00 PM</a></h6> -->



                            <h5><a href="restaurant-information.php">

                                    FOOD COURT

                                </a> </h5>

                            <div class="line"></div>

                            <div class="row facilities">

                                <div class="col col-md-7">

                                    <ul>

                                        <!-- <li><i class="flaticon-bed"></i></li>

                                        <li><i class="flaticon-bath"></i></li> -->

                                        <li><i class="flaticon-breakfast"></i></li>

                                        <li><i class="flaticon-towel"></i></li>

                                    </ul>

                                </div>

                                <div class="col col-md-5 text-right">

                                    <div class="permalink"><a href="restaurant-information.php">Details <i
                                                class="ti-arrow-right"></i></a></div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="item">

                        <div class="position-re o-hidden"> <img src="img/restaurant/4.png" alt=""> </div>

                        <!-- <span

                            class="category"><a href="restaurant-information.php">Book</a></span> -->

                        <div class="con">

                            <!-- <h6><a href="restaurant-information.php"><i class="flaticon-bed"></i> 17 Jul 2022 to 23 Jul 2022</a></h6> -->

                            <h5><a href="restaurant-information.php">

                                    VERANDAH

                                </a></h5>

                            <div class="line"></div>

                            <div class="row facilities">

                                <div class="col col-md-7">

                                    <ul>

                                        <!-- <li><i class="flaticon-bed"></i></li>

                                        <li><i class="flaticon-bath"></i></li> -->

                                        <li><i class="flaticon-breakfast"></i></li>

                                        <li><i class="flaticon-towel"></i></li>

                                    </ul>

                                </div>

                                <div class="col col-md-5 text-right">

                                    <div class="permalink"><a href="restaurant-information.php">Details <i
                                                class="ti-arrow-right"></i></a></div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="item">

                        <div class="position-re o-hidden"> <img src="img/restaurant/2.jpg" alt=""> </div>

                        <!-- <span

                            class="category"><a href="restaurant-information.php">Book</a></span> -->

                        <div class="con">

                            <!-- <h6><a href="restaurant-information.php"><i class="flaticon-bed"></i> 17 Jul 2022 to 23 Jul 2022</a></h6> -->

                            <h5><a href="restaurant-information.php">

                                    PALM COURT

                                </a></h5>

                            <div class="line"></div>

                            <div class="row facilities">

                                <div class="col col-md-7">

                                    <ul>

                                        <!-- <li><i class="flaticon-bed"></i></li>

                                        <li><i class="flaticon-bath"></i></li> -->

                                        <li><i class="flaticon-breakfast"></i></li>

                                        <li><i class="flaticon-towel"></i></li>

                                    </ul>

                                </div>

                                <div class=" col col-md-5 text-right">

                                    <div class="permalink"><a href="restaurant-information.php">Details <i
                                                class="ti-arrow-right"></i></a></div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>






    <!-- Reservation & Booking Form -->
    <!-- 
    <section class="testimonials">

        <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/slider/banner.jpg"
            data-overlay-dark="2">

            <div class="container">

                <div class="row">


                    <div class="col-md-5 mb-30 mt-30">

                     

                        <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard</h5>

                        <div class="reservations mb-30">

                            <div class="icon color-1"><span class="flaticon-call"></span></div>

                            <div class="text">

                                <p class="color-1">Call Us</p> <a class="color-1" href="tel: 91 22 2207 0311"> +91 22

                                    2207 0311</a>

                            </div>

                        </div>

                        <p><i class="ti-check"></i><small>Call us, it's toll-free.</small></p>

                    </div>


                    <div class="col-md-5 offset-md-2">

                        <div class="booking-box">

                            <div class="head-box">


                                <h4>Connect With Us</h4>

                            </div>

                            <div class="booking-inner clearfix">

                                <form action="http://duruthemes.com/demo/html/cappa/demo1/rooms2.php"
                                    class="form1 clearfix">

                                    <div class="row">

                                        <div class="col-md-12">

                                            <div class="input1_wrapper">

                                                <label>Name</label>

                                                <div class="input1_inner">

                                                    <input type="text" class="form-control input " placeholder="Name">

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-md-12">

                                            <div class="input1_wrapper">

                                                <label>Mobile</label>

                                                <div class="input1_inner">

                                                    <input type="text" class="form-control input " placeholder="Mobile">

                                                </div>

                                            </div>

                                        </div>



                                        <div class="col-md-12">

                                            <div class="input1_wrapper">

                                                <label>Email</label>

                                                <div class="input1_inner">

                                                    <input type="text" class="form-control input" placeholder="Email">

                                                </div>

                                            </div>

                                        </div>





                                        <div class="col-md-12">

                                            <button type="submit" class="btn-form1-submit mt-15">Submit</button>

                                        </div>

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section> -->

    <!-- Clients -->

    <!-- <section class="clients">

        <div class="container">

            <div class="row">

                <div class="col-md-7 owl-carousel owl-theme">

                    <!-- <div class="clients-logo">

                        <a href="#0"><img src="img/clients/1.png" alt=""></a>

                    </div>

                    <div class="clients-logo">

                        <a href="#0"><img src="img/clients/2.png" alt=""></a>

                    </div>

                    <div class="clients-logo">

                        <a href="#0"><img src="img/clients/3.png" alt=""></a>

                    </div>

                    <div class="clients-logo">

                        <a href="#0"><img src="img/clients/4.png" alt=""></a>

                    </div>

                    <div class="clients-logo">

                        <a href="#0"><img src="img/clients/5.png" alt=""></a>

                    </div>

                    <div class="clients-logo">

                        <a href="#0"><img src="img/clients/6.png" alt=""></a>

                    </div> 

                </div>

            </div>

        </div>

    </section> -->

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



                            <div class="footer-language"> <i class="lni ti-world"></i>

                                <select onchange="location = this.value;">

                                    <option value="about.php">Read More</option>

                                    <!-- <option value="http://duruthemes.com/">German</option> -->

                                </select>

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

                            <h3 class="footer-title">Contact</h3>

                            <p class="footer-contact-text">Mahatma Gandhi Road, Opp Fashion Street,<br> Azad Maidan,
                                Fort, Mumbai, Maharashtra 400001.</p>

                            <div class="footer-contact-info">

                                <p class="footer-contact-phone"><span class="flaticon-call"></span> 91 22 2207 0311

                                </p>

                                <p class="footer-contact-mail">admin@bombaygymkhana.com

                                </p>

                            </div>

                            <div class="footer-about-social-list">

                                <a href="#"><i class="ti-instagram"></i></a>

                                <a href="#"><i class="ti-twitter"></i></a>

                                <a href="#"><i class="ti-youtube"></i></a>

                                <a href="#"><i class="ti-facebook"></i></a>

                                <a href="#"><i class="ti-pinterest"></i></a>

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

                                <form action="http://duruthemes.com/demo/html/cappa/demo1/rooms2.php"
                                    class="form1 clearfix">

                                    <div class="row">

                                        <div class="col-md-12">

                                            <div class="input1_wrapper">

                                                <label>Name</label>

                                                <div class="input1_inner">

                                                    <input type="text" class="form-control input " placeholder="Name">

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-md-12">

                                            <div class="input1_wrapper">

                                                <label>Mobile</label>

                                                <div class="input1_inner">

                                                    <input type="text" class="form-control input " placeholder="Mobile">

                                                </div>
                                                <label for="email" class="error"></label>

                                            </div>

                                        </div>



                                        <div class="col-md-12">

                                            <div class="input1_wrapper">

                                                <label>Email</label>

                                                <div class="input1_inner">

                                                    <input type="text" class="form-control input" placeholder="Email">

                                                </div>

                                            </div>

                                        </div>





                                        <div class="col-md-12">

                                            <button type="submit" class="btn-form1-submit mt-15">Submit</button>

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






    <!-- jQuery -->


    <!-- ================ Enquire Now ==================== -->

    <div class="modal fade " tabindex="-1" role="dialog" id="enquire-modal" data-backdrop="static"
        data-keyboard="false">

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


                                <form action="javascript:void(0);" class="form1 clearfix" id="enquire">

                                    <div class="row">

                                        <div class="col-md-4">

                                            <div class="input1_wrapper">

                                                <!-- <label>Check in</label> -->

                                                <div class="input1_inner">

                                                    <input type="text" name="clientid1" class="form-control input "
                                                        placeholder="e.g A/AB">
                                                    <label for="clientid1" class="error"></label>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <div class="input1_wrapper">

                                                <!-- <label>Check in</label> -->

                                                <div class="input1_inner">

                                                    <input type="number" name="clientid2" class="form-control input "
                                                        placeholder="e.g 001">
                                                    <label for="clientid2" class="error"></label>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <div class="input1_wrapper">

                                                <!-- <label>Check in</label> -->

                                                <div class="input1_inner">

                                                    <input type="text" name="clientid3" class="form-control input "
                                                        placeholder="e.g 01">
                                                    <label for="clientid3" class="error"></label>
                                                    <input type="hidden" name="uniqid" value="logpass">
                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-md-12">

                                            <div class="input1_wrapper">

                                                <!-- <label>Check in</label> -->

                                                <div class="input1_inner">

                                                    <input type="password" name="pass" class="form-control input "
                                                        placeholder="Password">
                                                    <label for="pass" class="error"></label>

                                                </div>

                                            </div>

                                        </div>





                                        <div class="col-md-12">

                                            <button type="submit" id="submit"
                                                class="btn-form1-submit mt-15">Login</button>
                                            <p class="gentxt">
                                                Don’t Have a Password? <a href="javascript:genpass('You clicked!')"
                                                    id="">
                                                    <b> Click here</b>
                                                </a> to Generate </p>

                                        </div>

                                        <p id="error"></p>

                                        <!-- <input type="hidden" id="updateot" value="">

                                        <p id="ProfileList"></p>
                                        <p id="link223"></p>

                                        <p id="link1"></p>
                                        <p id="link2"></p>
                                        <p id="link3"></p>
                                        <p id="link4"></p>
                                        <p id="link5"></p>

                                        <p id="pass"></p>
                                        <p id="strmem"></p> -->


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


                                <form action="javascript:void(0);" class="form1 clearfix"  id="genpass-form">

                                    <div class="row">

                                        <div class="col-md-4">

                                            <div class="input1_wrapper">

                                                <!-- <label>Check in</label> -->

                                                <div class="input1_inner">

                                                    <input type="text" name="clientid1reset" class="form-control input "
                                                        placeholder="e.g A/AB">

                                                </div>

                                                <label for="clientid1reset" class="error"></label>
                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <div class="input1_wrapper">

                                                <!-- <label>Check in</label> -->

                                                <div class="input1_inner">

                                                    <input type="number" name="clientid2reset"
                                                        class="form-control input " placeholder="e.g 001">


                                                    <input type="hidden" name="uniqid1" value="genpass">
                                                </div>
                                                <label for="clientid2reset" class="error"></label>

                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <div class="input1_wrapper">

                                                <!-- <label>Check in</label> -->

                                                <div class="input1_inner">

                                                    <input type="text" name="clientid3reset" class="form-control input "
                                                        placeholder="e.g 01">

                                                </div>
                                                <label for="clientid3reset" class="error"></label>

                                            </div>

                                        </div>

                                        <div class="col-md-12">

                                            <div class="input1_wrapper">

                                                <!-- <label>Check in</label> -->

                                                <div class="input1_inner">

                                                    <input type="password" name="passreset" class="form-control input "
                                                        placeholder="Password">

                                                </div>
                                                <label for="passreset" class="error"></label>

                                            </div>

                                        </div>



                                        <div class="col-md-12">

                                            <button type="submit" id="genpassword"
                                                class="btn-form1-submit mt-15">Genrate</button>
                                                <p class="gentxt">
                                                <a href="javascript:returnlog('You clicked!')"
                                                    id="">
                                                    <b> Return to Login</b>
                                                </a>  </p>
                                        </div>


<!-- 
                                        <input type="hidden" id="updateot" value="">

                                        <p id="ProfileList"></p>
                                        <p id="link223"></p>

                                        <p id="link1"></p>
                                        <p id="link2"></p>
                                        <p id="link3"></p>
                                        <p id="link4"></p>
                                        <p id="link5"></p> -->


                                    </div>

                                </form>
                            </div>

                        </div>

                    </div>

                </div>

            </div><!-- /.modal-content -->

        </div><!-- /.modal-dialog -->

    </div>

    <!-- ============================================= -->

    <!-- <script src="js/jquery-3.6.0.min.js?v=1"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js?v=1"></script>

    <script src="js/jquery-migrate-3.0.0.min.js?v=1"></script>

    <script src="js/modernizr-2.6.2.min.js?v=1"></script>

    <script src="js/imagesloaded.pkgd.min.js?v=1"></script>

    <script src="js/jquery.isotope.v3.0.2.js?v=1"></script>

    <script src="js/pace.js?v=1"></script>

    <script src="js/popper.min.js?v=1"></script>

    <!-- <script src="js/bootstrap.min.js?v=1"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js?v=1"></script>


    <script src="js/scrollIt.min.js?v=1"></script>

    <script src="js/jquery.waypoints.min.js?v=1"></script>

    <!-- <script src="js/owl.carousel.min.js?v=1"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.min.js?v=1"></script>

    <script src="js/jquery.stellar.min.js?v=1"></script>

    <script src="js/jquery.magnific-popup.js?v=1"></script>

    <script src="js/YouTubePopUp.js?v=1"></script>

    <script src="js/select2.js?v=1"></script>

    <script src="js/datepicker.js?v=1"></script>

    <script src="js/smooth-scroll.min.js?v=1"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js?v=1"></script> -->
    <script src="js/jquery.validate.js?v=1"></script>

    <script src="js/custom.js?v=1"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.js?v=1"></script>
    <script src="js/cookie.js?v=1"></script>

    <script>
    $(document).ready(function() {
        $(".hamburger").click(function() {
            $(this).toggleClass("is-active");
        });
    });
    </script>


    <script type="text/javascript">
    function genpass(myMessage) {


        document.getElementById("gen-form").style.display = "block";
        document.getElementById("log-form").style.display = "none";
        // $("#otp-sub").removeAttr('disabled')

    }
    </script>


<script type="text/javascript">
    function returnlog(myMessage) {


        document.getElementById("gen-form").style.display = "none";
        document.getElementById("log-form").style.display = "block";
        // $("#otp-sub").removeAttr('disabled')

    }
    </script>


    <script>
    $(document).ready(function() {

        var tokencok = Cookies.get('Token')
        //    alert(tokencok);
        if (tokencok != null) {
            $.ajax({
                type: 'GET',
                url: 'login-in.php',
                dataType: "json",
                data: {
                    token: tokencok
                },
                success: function(data) {
                    if (data.code == "200") {
                        if (typeof data.returnArray !== 'undefined') {
                            var alertMessage = 'You have a valid token! Here is your user Id: ' +
                                data.returnArray;

                            if (typeof data['exp'] !== 'undefined') {
                                alertMessage = alertMessage + ' and your token expires: ' + data[
                                    'exp'];
                            }

                            // alert(alertMessage);
                            window.location.href = "myprofile.php";

                        } else if (typeof data.returnArray !== 'undefined') {
                            alert('Error: ' + data.returnArray);
                            // window.location.href="index.php";
                        } else {
                            // alert('Error: Your request has failed.');
                            // window.location.href="index.php";
                        }
                    } else {
                        // document.getElementById("third-form").style.display = "block";
                        alert("fail");


                    }

                }

            });
        } else {
            // alert('Error: Your request has failed.');
            // window.location.href="index.php";
        }
    });



    $('#submit').click(function() {
        // alert("success");
        //    var clientid1 = $("#client-id1").val();
        // var clientid2 = $("#client-id2").val();
        // var clientid3 = $("#client-id3").val();

        var clientid1 = jQuery('input[name="clientid1"]').val();
        var clientid2 = jQuery('input[name="clientid2"]').val();

        var clientid3 = jQuery('input[name="clientid3"]').val();
        var pass = jQuery('input[name="pass"]').val();
        var uniqid = jQuery('input[name="uniqid"]').val();


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
                    localStorage.token = data.token;
                    // alert('Successfully retrieved token from the server! Token: ' + data.token);
                    // alert("Suceddd");
                    // document.getElementById("updateot").value = data.lead1;
                    // document.getElementById("link223").innerHTML = data.lead1;

                    let checkpass = data.userpass;
                    // document.getElementById("otpsent").innerHTML =
                    //     "OTP Resent !";
                    var mydata = JSON.parse(data.lead1);
                    alert(mydata);

                    console.log(mydata);
                    var CookieValue = Cookies.get('response');

                    //   alert(CookieValue);
                    const obj = JSON.parse(CookieValue);

                    alert(obj.Result[0].MemberCode);
                    // document.getElementById("link1").innerHTML = obj.Result[0].MemberCode;
                    // document.getElementById("link2").innerHTML = obj.Result[0].MemberName;
                    // document.getElementById("link3").innerHTML = obj.Result[0]
                    // .CorrespondenceAddress;
                    // document.getElementById("link4").innerHTML = obj.Result[0].EmailId;
                    // document.getElementById("link5").innerHTML = obj.Result[0].dtDateofBirth;


                    const objpass = JSON.parse(checkpass);
                    document.getElementById("pass").innerHTML = objpass.Result[0].StrMembercode;
                    document.getElementById("strmem").innerHTML = objpass.Result[0].StrPassword;

                    let fullid = clientid1 + "-" + clientid2 + "   " + clientid3;


                    if (fullid == objpass.Result[0].StrMembercode && pass == objpass.Result[0]
                        .StrPassword) {
                        window.location.href = "myprofile.php";
                    } else {
                        // alert("worng userid or pasword");
                        document.getElementById("error").innerHTML = "Wrong Userid or Password";
                    }

                } else {
                    // document.getElementById("third-form").style.display = "block";
                    alert("fail");


                }
            }
        })
    });


    $('#genpassword').click(function() {
        // alert("success");
        //    var clientid1 = $("#client-id1").val();
        // var clientid2 = $("#client-id2").val();
        // var clientid3 = $("#client-id3").val();


        var clientid1 = jQuery('input[name="clientid1reset"]').val();
        var clientid2 = jQuery('input[name="clientid2reset"]').val();

        var clientid3 = jQuery('input[name="clientid3reset"]').val();
        var pass = jQuery('input[name="passreset"]').val();
        var uniqid = jQuery('input[name="uniqid1"]').val();


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
                    localStorage.token = data.token;
                    // alert('Successfully retrieved token from the server! Token: ' + data.token);
                    // alert("Sucedddpass");
                    // document.getElementById("updateot").value = data.lead1;
                    // document.getElementById("link223").innerHTML = data.lead1;
                    // // document.getElementById("otpsent").innerHTML =
                    // //     "OTP Resent !";
                    // var mydata = JSON.parse(data.lead1);
                    document.getElementById("gen-form").style.display = "none";
                    document.getElementById("log-form").style.display = "block";
                    // alert(mydata);

                    // console.log(mydata);
                    // var CookieValue1 = Cookies.get('response')


                    // window.location.href = "my-account.php";


                } else {
                    // document.getElementById("third-form").style.display = "block";
                    alert("fail");


                }
            }
        });




    });
    </script>

</body>


</html>