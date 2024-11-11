<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);


// $id = 0;
//     $update = false;

//   $dbhandle =  mysqli_connect("localhost", "root", "");
//    mysqli_select_db($dbhandle,"myprofile");
$dbhandle =  mysqli_connect("localhost", "u924494635_bombaygym", "Ask@1gym");
mysqli_select_db($dbhandle, "u924494635_bombaygym");

// $sql = "SELECT * FROM profile ORDER BY eventdate";
// $result = mysqli_query($dbhandle, $sql);
$sql1 = "SELECT * FROM notice ORDER BY sdate DESC;";
$result1 = mysqli_query($dbhandle, $sql1)
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Bombay Gymkhana</title>
    <?php include 'header-link.php' ?>

    </script>

    <style>
        .post-slide .post-review {
            display: flex;
            height: 140px;
            margin: 20px 0px;
            /* padding: 0px 0px 16px 0; */
            box-shadow: 0px 0px 4px 0px #0000005c;
        }

        .post-slide .post-date {
            float: none;
            margin-right: 10px;
            padding: 8px 15px;
            text-align: center;
            background: #edd97d;
            font-size: 26px;
            color: #fff;
            font-weight: 700;
            transition: background 0.20s linear 0s;
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
    <!-- Slider -->
    <header class="header slider-fade">
        <div class="">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="text-center item bg-img" data-overlay-dark="1" id="" data-background="">
                <div class="v-bottom caption caption1">
                    <div class="container">
                        <span>Welcome to</span>
                        <h1>Bombay Gymkhana</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- About -->
    <section class="about section-padding">
        <!-- <button class="add-button">Add to home screen</button> -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 animate-box sm-block" data-animate-effect="fadeInUp">
                    <div class="section-subtitle">About Club</div>
                    <div class="section-title">Bombay Gymkhana</div>
                    <p>Bombay Gymkhana is an institution with a rich tradition and history. At heart it is a sporting institution and has been host to a number of iconic sporting events over the years. Its membership is aspirational and it is recognized as a quality institution in the society at large and one of the pre-eminent clubs of India. It is represented by a lovely heritage building with a verandah at its heart from where all sports facilities and restaurants emanate.</p>
                    <br>
                    <p>A regular Bombay Gymkhana member is often someone who has grown up in the club, is comforted by its familiarity, enjoys and plays a number of sports and participates in its various social activities. They take pride when their sporting teams do well and enjoy the popularity of its social milieu. They develop strong bonds with fellow members leading often to enduring friendships... </p>
                    <div class="butn-dark intersterd" style="margin-top:20px;"> <a href="/club.php" target="blank"><span>Read More</span></a>
                    </div>
                </div>
                <div class="col col-md-3 animate-box sm-img-blk" data-animate-effect="fadeInUp">
                    <img src="images/banner-new/Home page banner.png" alt="" class="mt-90 mb-30 about-img ">
                </div>
                <div class="col col-md-3 animate-box sm-img-blk" data-animate-effect="fadeInUp">
                    <img src="img/about2.JPG" alt="" class="about-img ">
                </div>
            </div>
        </div>
    </section>
    <!-- News -->
    <section class="news section-padding bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title" style="display: inline-block;"><span>Events</span></div>
                    <form id="eventSearchForm" style="display: inline-block; float: right;">
                        <input type="date" style="height: 44px;" id="sdate" name="sdate">
                        <input type="date" style="height: 44px;" id="edate" name="edate">
                        <input type="submit" name="eventsearch" id="eventSearchBtn">
                        <button type="button" id="clearBtn">Clear</button>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div id="eventbox">
                        <!-- Include the events.php file here -->
                        <?php include 'filter-events.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Facilties -->
    <?php include 'facilities-section.php'; ?>
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

    <!-- Rooms -->
    <section class="rooms1 section-padding bg-cream" data-scroll-index="1" id="resto">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">Restaurant</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="dining-hall.php" class="">
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
                    <a href="gymsinbar.php" class="">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/restaurant/2.jpg" alt=""> </div>
                            <div class="con">
                                <h5>GYM`S INN BAR</h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-5">
                                        <ul>
                                            <li class="tooltip"><img src="images/white-icons/Barr_2.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Dining</span></li>
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
                    <a href="foodcourt.php" class="">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="images/banner-images/food-court1.jpg" alt=""> </div>
                            <div class="con">
                                <h5>The Cafe</h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-5">
                                        <ul>
                                            <li class="tooltip"><img src="images/white-icons/Food_1.png" alt="" class="restaurant-icons"><span class="tooltiptext" id="bottom">Diner </span></li>
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
                    <a href="verandah.php" class="">
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
                    <a href="palm-court.php" class="">
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
                    <a href="pavilion.php" class="">
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
    <!-- Pricing -->

    <section class="pricing section-padding bg-black">

        <div class="container">

            <div class="row">

                <div class="col-md-4">

                    <!-- <div class="section-subtitle"><span>Best Prices</span></div> -->

                    <div class="section-title"><span style="color:#fff !important;">Club Affiliataion</span></div>

                    <p class="color-2 affi">A number of premium and private membership clubs are affiliated with the club,
                        where members avail the club's services, and amenities and have access to prestigious clubs
                        worldwide.</p>


                    <div class="reservations mb-30">

                        <div class="butn-dark ">
                            <!-- <option value="about.php">Read More</option> -->
                            <!-- <a href="#about">Read More</a> -->
                            <a href="/affiliation.php"><span>See More</span></a>

                        </div>

                    </div>

                </div>

                <div class="col-md-8">

                    <div class="owl-carousel owl-theme">

                        <div class="pricing-card affiliation-card">

                            <!-- <img src="img/pric</div>ing/1.jpg" alt=""> -->

                            <div class="desc">

                                <div class="name">Ahmedabad Gymkhana</div>

                                <div class="amount"><span> Ahmedabad Cantonment, Shahibaug, Ahmedabad, Gujarat

                                        380004.</span></div>

                                <ul class="list-unstyled list">

                                    <li><img src="images/Footer/Call.png" alt="" class="affiliation-icons"> 07922867161</li>

                                    <li><img src="images/Footer/Email.png" alt="" class="affiliation-icons"> info@ahmedabadgymkhana.com</li>

                                    <!-- <li><i class="flaticon-call"></i>Clean sorem ipsum morbin</li> -->

                                </ul>

                            </div>

                        </div>

                        <div class="pricing-card affiliation-card">

                            <!-- <img src="img/pricing/1.jpg" alt=""> -->

                            <div class="desc">

                                <div class="name">Bangalore Club</div>

                                <div class="amount"><span>Field Marshal K.M. Cariappa Road, Bangalore - 560 025.</span>

                                </div>

                                <ul class="list-unstyled list">

                                    <li><img src="images/Footer/Call.png" alt="" class="affiliation-icons"> 08040220000</li>

                                    <li><img src="images/Footer/Email.png" alt="" class="affiliation-icons">secretary@bangaloreclub.com</li>

                                    <!-- <li><i class="flaticon-call"></i>Clean sorem ipsum morbin</li> -->

                                </ul>

                            </div>

                        </div>

                        <div class="pricing-card affiliation-card">

                            <!-- <img src="img/pricing/1.jpg" alt=""> -->

                            <div class="desc">

                                <div class="name">Beldih Club</div>

                                <div class="amount"><span>Beldih Residency, Beldih Triangle, Post Box No.4, Jamshedpur –

                                        831 001</span></div>

                                <ul class="list-unstyled list">

                                    <li><img src="images/Footer/Call.png" alt="" class="affiliation-icons"> 06572223439</li>
                                    <li><img src="images/Footer/Email.png" alt="" class="affiliation-icons"> info@ahmedabadgymkhana.com</li>

                                    <!-- <li><i class="flaticon-call"></i>info@bedihclub.comClean sorem ipsum morbin</li> -->

                                </ul>

                            </div>

                        </div>

                        <div class="pricing-card affiliation-card">

                            <!-- <img src="img/pricing/1.jpg" alt=""> -->

                            <div class="desc">

                                <div class="name">Central Provinces Club Nagpur LTD</div>

                                <div class="amount"><span> Civil Lines, Nagpur 440 001</span></div>

                                <ul class="list-unstyled list">

                                    <li><img src="images/Footer/Call.png" alt="" class="affiliation-icons">07122540341</li>

                                    <li><img src="images/Footer/Email.png" alt="" class="affiliation-icons">admin@cpclub.in</li>

                                    <!-- <li><i class="flaticon-call"></i>Clean sorem ipsum morbin</li> -->

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- Team -->

    <section class="team section-padding bg-cream">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <!-- <div class="section-subtitle">Professionals</div> -->

                    <div class="section-title">Notice Board</div>

                </div>

            </div>

            <div class="row">

                <div class="col-md-12 owl-carousel owl-theme">
                    <?php
                    $counter = 0; // Counter variable to keep track of the number of records retrieved
                    while ($not = mysqli_fetch_assoc($result1)) {
                        $date = new DateTime($not['ndate']);
                        $datef = date('M j', $date->getTimestamp());

                        $ndates = explode(" ", $datef);
                        setcookie("time", $date);
                        $iparr = explode(" ", $datef);

                        // Increment the counter
                        $counter++;

                        if ($counter > 5) {
                            break; // Exit the loop when the counter reaches five
                        }
                    ?>
                        <div class="">
                            <div class="post-slide">


                                <!-- <img src="images/img-1.jpg" alt=""> -->

                                <div class="post-review">

                                    <div class="post-date">

                                        <?php echo  $iparr[1] ?>

                                        <small><?php echo  $iparr[0] ?></small>

                                    </div>

                                    <div class="post-title">

                                        <a href="bgcms\production\uploads\<?php echo $not['pdflink'] ?>" class="notice-title"><?php echo $not['ntitle'] ?></a>
                                        <ul class="post-comment">
                                            <li><a href="bgcms\production\uploads\<?php echo $not['pdflink'] ?>">
                                                    Download <i class="ti-download"></i></a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                            </div>
                        </div>
                    <?php } ?>

                </div>

            </div>
            <div class="butn-dark intersterd" style="text-align:center;margin-top:20px;"> <a href="/notice.php"><span>See All</span></a>
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
                    <div class="embedsocial-hashtag" data-ref="41b81d2c7d5323317150dc9a6058f9191d1221e8"> <a class="feed-powered-by-es feed-powered-by-es-feed-new" href="https://embedsocial.com/social-media-aggregator/" target="_blank" title="Widget by EmbedSocial"> <span></span> </a> </div>
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






    <!-- Footer -->
    <?php include 'footer.php' ?>


    <?php include 'footer-link.php' ?>
    <!-- <script>
        $('#sdate').datetimepicker({
            timepicker: false,
            format: 'y-m-d',
        });

        $('#edate').datetimepicker({
            timepicker: false,
            format: 'y-m-d',
        });
    </script> -->
    <script>
        $(document).ready(function() {
            // Handle form submission
            $('#eventSearchForm').submit(function(event) {
                event.preventDefault(); // Prevent page refresh

                var startDate = $('#sdate').val();
                var endDate = $('#edate').val();

                // Show preloader
                $('#eventbox').html('<div class="preloader">Loading...</div>');

                // Send AJAX request to the server
                $.ajax({
                    url: 'filter-events.php', // Replace with the server-side script URL
                    method: 'POST',
                    data: {
                        sdate: startDate,
                        edate: endDate
                    },
                    success: function(response) {
                        // Update events container with the retrieved events
                        $('#eventbox').html(response);
                        initCarousel();
                    },
                    error: function() {
                        // Handle errors if any
                        console.log('Error occurred while fetching events.');
                    }
                });
            });

            // Handle clear button click
            $('#clearBtn').click(function(event) {
                event.preventDefault(); // Prevent page refresh

                // Reset the form and fetch all events
                $('#sdate').val('');
                $('#edate').val('');

                // Show preloader
                $('#eventbox').html('<div class="preloader">Loading...</div>');

                // Send AJAX request to the server
                $.ajax({
                    url: 'filter-events.php', // Replace with the server-side script URL
                    method: 'POST',
                    data: {},
                    success: function(response) {
                        // Update events container with the retrieved events
                        $('#eventbox').html(response);
                        initCarousel();
                    },
                    error: function() {
                        // Handle errors if any
                        console.log('Error occurred while fetching events.');
                    }
                });
            });

            // Initialize Owl Carousel
            function initCarousel() {
                $('#eventsContainer').owlCarousel({
                    loop: true,
                    margin: 30,
                    mouseDrag: true,
                    autoplay: false,
                    dots: true,
                    autoplayHoverPause: true,
                    nav: false,
                    navText: ["<span class='lnr ti-angle-left'></span>", "<span class='lnr ti-angle-right'></span>"],
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 3
                        }
                    }
                });
            }

            // Initial carousel initialization
            initCarousel();
        });
    </script>




</body>






</html>