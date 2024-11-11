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

$sql = "SELECT * FROM profile";
$result = mysqli_query($dbhandle, $sql);


$sql1 = "SELECT * FROM notice";
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


        </div>



    </header>


    <!-- About -->

    <section class="about section-padding">
        <!-- <button class="add-button">Add to home screen</button> -->

        <div class="container">

            <div class="row">

                <div class="col-md-6 mb-30 animate-box sm-block" data-animate-effect="fadeInUp">

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

                    <p>Aside from its outstanding history and timeless architecture... </p>
                    <div class="butn-dark intersterd" style="margin-top:20px;"> <a href="club.php" target="blank"><span>Read More</span></a>
                    </div>

                    <!-- call -->

                    <!-- <div class="reservations">

                        <div class="icon"><span class="flaticon-call"></span></div>

                        <div class="text">

                            <p>Reservation</p> <a href="tel:855-100-4444">855 100 4444</a>

                        </div>

                    </div> -->

                </div>

                <div class="col col-md-3 animate-box sm-img-blk" data-animate-effect="fadeInUp">

                    <img src="img/about1.JPG" alt="" class="mt-90 mb-30 about-img ">

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

                    <!-- <div class="section-subtitle"><span>Hotel Blog</span></div> -->

                    <div class="section-title"><span>Events</span></div>

                </div>

            </div>

            <div class="row">

                <div class="col-md-12">

                    <div class="owl-carousel owl-theme">
                        <?php
                        while ($proo = mysqli_fetch_assoc($result)) {

                            $date = new DateTime($proo['Date']);
                            $mes = date('M j', $date->getTimestamp());

                            setcookie("time", $date);
                            $iparr = explode(" ", $mes);


                        ?>
                            <div class="item">

                                <div class="position-re o-hidden">
                                    <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($proo['image']) . '"/>' ?>

                                    <div class="date">

                                        <a href="event-details.php"> <span><?php echo  $iparr[0] ?></span>
                                            <i><?php echo  $iparr[1] ?></i> </a>

                                    </div>

                                </div>

                                <div class="con">
                                    <!-- <span class="category">

                    <a href="event-details.php">Restaurant</a>

                </span> -->

                                    <h5><a href="event-details.php?event=<?php echo $proo['id']; ?>" class="event-title "><?php echo $proo['name_ach']; ?></a></h5>

                                </div>

                            </div>
                        <?php } ?>

                        <!-- <div class="item">

                            <div class="position-re o-hidden"> <img src="img/news/2.jpg" alt="">

                                <div class="date">

                                    <a href="event-details.php"> <span>Aug</span> <i>08</i> </a>

                                </div>

                            </div>

                            <div class="con">

                                <h5><a href="event-details.php">Book Club August 2022</a></h5>

                            </div>

                        </div>

                        <div class="item">

                            <div class="position-re o-hidden"> <img src="img/news/3.jpg" alt="">

                                <div class="date">

                                    <a href="event-details.php"> <span>Aug</span> <i>07</i> </a>

                                </div>

                            </div>

                            <div class="con">

                                <h5><a href="event-details.php">Housie August 2022</a></h5>

                            </div>

                        </div>

                        <div class="item">

                            <div class="position-re o-hidden"> <img src="img/news/4.jpg" alt="">

                                <div class="date">

                                    <a href="event-details.php"> <span>July</span> <i>23</i> </a>

                                </div>

                            </div>

                            <div class="con">


                                <h5><a href="event-details.php">Live Band 2022</a></h5>

                            </div>

                        </div>



                        <div class="item">

                            <div class="position-re o-hidden"> <img src="img/news/5.jpg" alt="">

                                <div class="date">

                                    <a href="event-details.php"> <span>Aug</span> <i>27</i> </a>

                                </div>

                            </div>

                            <div class="con">

                                <h5><a href="event-details.php">Movie August 2022 </a></h5>

                            </div>

                        </div>

                        <div class="item">

                            <div class="position-re o-hidden"> <img src="img/news/6.jpg" alt="">

                                <div class="date">

                                    <a href="event-details.php"> <span>Aug</span> <i>03</i> </a>

                                </div>

                            </div>

                            <div class="con">

                                <h5><a href="event-details.php">Talk on Covide 19</a>

                                </h5>

                            </div>

                        </div>

 -->



                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- Facilties -->

    <section class="facilties section-padding bg-cream">
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

                        <img src="images/Facilities/FNB.png" class="facility-icons" alt="">

                        <h5>F&B </h5>

                        <p>Experience theClub Affiliataion culinary wonders of dining with appetizers and cuisines which transcends
                            continents. </p>

                        <div class="facility-shape"> <img src="images/Facilities/FNB.png" class="facility-icons" alt=""> </div>

                    </a>


                </div>

                <div class="item">

                    <a href="sports-facility-details.php" class="single-facility animate-box" data-animate-effect="fadeInUp">

                        <img src="images/Facilities/Sports.png" class="facility-icons" alt="">

                        <h5>Sports </h5>

                        <p>A hub for exciting opportunities across numerous sports which cater variety of interests and
                            abilities.</p>

                        <div class="facility-shape"> <img src="images/Facilities/Sports.png" class="facility-icons" alt=""> </div>

                    </a>

                </div>

                <div class="item">

                    <a href="personal-grooming-facility-details.php" class="single-facility animate-box" data-animate-effect="fadeInUp">

                        <img src="images/Facilities/Preening point.png" class="facility-icons" alt="">

                        <h5>Preening point </h5>

                        <p>An exquisite place to treat yourself with a grooming session of integral and impeccable
                            style.</p>

                        <div class="facility-shape"> <img src="images/Facilities/Preening point.png" class="facility-icons" alt=""> </div>

                    </a>

                </div>

                <div class="item">

                    <a href="relaxation-facility-details.php" class="single-facility animate-box" data-animate-effect="fadeInUp">

                        <img src="images/Facilities/slide.png" class="facility-icons" alt="">

                        <h5>Unwind zone </h5>

                        <p>Find calm amid chaos and let your inner child out at the serene places.</p>

                        <div class="facility-shape"> <img src="images/Facilities/slide.png" class="facility-icons" alt=""> </div>

                    </a>

                </div>

                <div class="item">
                    <a href="library-facility-details.php" class="single-facility animate-box" data-animate-effect="fadeInUp">

                        <img src="images/Facilities/Library.png" class="facility-icons" alt="">

                        <h5>Library </h5>

                        <p>The nucleus of learning which opens the door to knowledge through the magic of books.</p>

                        <div class="facility-shape"><img src="images/Facilities/Library.png" class="facility-icons" alt=""></div>

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

    <!-- Rooms -->

    <section class="rooms1 section-padding " data-scroll-index="1">
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
                        <a href="dining-hall.php">

                            <div class="position-re o-hidden"> <img src="img/restaurant/3.png" alt=""> </div>



                            <div class="con">
                                <h5> THE DINING HALL </h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-5">
                                        <ul>
                                            <li><img src="images/white-icons/Dinning Hall_2.png" alt="" class="restaurant-icons"></li>
                                            <li><img src="images/white-icons/Food_1.png" alt="" class="restaurant-icons"></li>
                                        </ul>
                                    </div>
                                    <div class=" col col-md-7 text-right">
                                        <div class="permalink">Details<i class="ti-arrow-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="item">
                        <a href="gymsinbar.php">
                            <div class="position-re o-hidden"> <img src="img/restaurant/2.jpg" alt=""> </div>
                            <div class="con">
                                <h5> GYM`S INN BAR </h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-5">
                                        <ul>
                                            <li><img src="images/white-icons/Barr_2.png" alt="" class="restaurant-icons"></li>
                                            <li><img src="images/white-icons/Dinner_1.png" alt="" class="restaurant-icons"></li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-7 text-right">
                                        <div class="permalink">Details <i class="ti-arrow-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <a href="foodcourt.php">
                            <div class="position-re o-hidden"> <img src="img/restaurant/food-court1.png" alt=""> </div>
                            <div class="con">
                                <h5>FOOD COURT</h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-5">
                                        <ul>
                                            <li><img src="images/white-icons/Food_1.png" alt="" class="restaurant-icons"></li>
                                            <li><img src="images/white-icons/Dinner_1.png" alt="" class="restaurant-icons"></li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-7 text-right">
                                        <div class="permalink">Details <i class="ti-arrow-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="item">
                        <a href="verandah.php">
                            <div class="position-re o-hidden"> <img src="img/restaurant/5.png" alt=""> </div>
                            <div class="con">
                                <h5> VERANDAH</h5>

                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-7">
                                        <ul>
                                            <li><img src="images/white-icons/Windy (courtside)_2.png" alt="" class="restaurant-icons"></li>
                                            <li><img src="images/white-icons/Food_1.png" alt="" class="restaurant-icons"></li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-5 text-right">
                                        <div class="permalink">Details <i class="ti-arrow-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="item">
                        <a href="palm-court.php">
                            <div class="position-re o-hidden"> <img src="img/restaurant/6.png" alt=""> </div>
                            <div class="con">
                                <h5>PALM COURT</h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-7">
                                        <ul>
                                            <li><img src="images/white-icons/Windy (courtside)_2.png" alt="" class="restaurant-icons"></li>
                                            <li><img src="images/white-icons/Palm Court_2.png" alt="" class="restaurant-icons"></li>
                                        </ul>
                                    </div>
                                    <div class=" col col-md-5 text-right">
                                        <div class="permalink">Details <i class="ti-arrow-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
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
                            <a href="affiliataion.php"><span>See More</span></a>

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
                    while ($not = mysqli_fetch_assoc($result1)) {

                        $date = new DateTime($not['ndate']);
                        $datef = date('M j', $date->getTimestamp());

                        $ndates = explode(" ", $datef);
                    ?>
                        <div class="post-slide">


                            <!-- <img src="images/img-1.jpg" alt=""> -->

                            <div class="post-review">

                                <div class="post-date">

                                    <?php echo  $iparr[1] ?>

                                    <small><?php echo  $iparr[0] ?></small>

                                </div>

                                <div class="post-title">

                                    <a href="bgcms\production\uploads\<?php echo $not['pdflink'] ?>" download class="notice-title"><?php echo $not['ntitle'] ?></a>
                                    <ul class="post-comment">

                                        <li><a href="bgcms\production\uploads\<?php echo $not['pdflink'] ?>" download>

                                                Download <i class="ti-download"></i></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                        </div>
                    <?php } ?>
                    


                    <!-- <div class="post-slide">


                        <div class="post-review">

                            <div class="post-date">

                                12

                                <small>feb</small>

                            </div>

                            <div class="post-title">

                                <a href="#">Tender Document - ARC for Offset Printing Jobs</a>
                                <ul class="post-comment">

                                    <li><a href=""> Download

                                            <i class="ti-download"></i></a>
                                    </li>
                                </ul>
                            </div>


                        </div>

                    </div>

                    <div class="post-slide">


                        <div class="post-review">

                            <div class="post-date">

                                12

                                <small>feb</small>

                            </div>

                            <div class="post-title">

                                <a href="#">Tender Document - ARC for Offset Printing Jobs</a>
                                <ul class="post-comment">

                                    <li><a href=""> Download

                                            <i class="ti-download"></i></a>
                                    </li>
                                </ul>
                            </div>


                        </div>

                    </div>

                    <div class="post-slide">


                        <div class="post-review">

                            <div class="post-date">

                                12

                                <small>feb</small>

                            </div>
                            <div class="post-title">

                                <a href="#">Tender Document - ARC for Offset Printing Jobs</a>
                                <ul class="post-comment">

                                    <li><a href=""> Download

                                            <i class="ti-download"></i></a>
                                    </li>
                                </ul>
                            </div>


                        </div>

                    </div> -->
                    
                </div>
                
            </div>
            <div class="butn-dark intersterd" style="text-align:center;margin-top:20px;"> <a href="notice.php"><span>See All</span></a>
                    </div>
        </div>

    </section>



    <!-- Testiominals -->

    <!-- <section class="testimonials">

        <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/slider/2.jpg"

            data-overlay-dark="3">

            <div class="container">

                <div class="row">

                    <div class="col-md-8 offset-md-2">

                        <div class="testimonials-box">

                            <div class="head-box">

                                <h6>Testimonials</h6>

                                <h4>What Client's Say?</h4>

                                <div class="line"></div>

                            </div>

                            <div class="owl-carousel owl-theme">

                                <div class="item">

                                    <span class="quote"><img src="img/quot.png" alt=""></span>

                                    <p>Hotel dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the

                                        lemon sanleo nectan feugiat erat hendrerit necuis ve ante otel inilla duiman at

                                        finibus viverra neca the sene on satien the miss drana inc

                                        fermen norttito sit space, mus nellentesque habitan.</p>

                                    <div class="info">

                                        <div class="author-img"> <img src="img/team/4.jpg" alt=""> </div>

                                        <div class="cont"> <span><i class="star-rating"></i><i

                                                    class="star-rating"></i><i class="star-rating"></i><i

                                                    class="star-rating"></i><i class="star-rating"></i></span>

                                            <h6>Emily Brown</h6> <span>Guest review</span>

                                        </div>

                                    </div>

                                </div>

                                <div class="item">

                                    <span class="quote"><img src="img/quot.png" alt=""></span>

                                    <p>Hotel dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the

                                        lemon sanleo nectan feugiat erat hendrerit necuis ve ante otel inilla duiman at

                                        finibus viverra neca the sene on satien the miss drana inc

                                        fermen norttito sit space, mus nellentesque habitan.</p>

                                    <div class="info">

                                        <div class="author-img"> <img src="img/team/1.jpg" alt=""> </div>

                                        <div class="cont"> <span><i class="star-rating"></i><i

                                                    class="star-rating"></i><i class="star-rating"></i><i

                                                    class="star-rating"></i><i class="star-rating"></i></span>

                                            <h6>Nolan White</h6> <span>Guest review</span>

                                        </div>

                                    </div>

                                </div>

                                <div class="item">

                                    <span class="quote"><img src="img/quot.png" alt=""></span>

                                    <p>Hotel dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the

                                        lemon sanleo nectan feugiat erat hendrerit necuis ve ante otel inilla duiman at

                                        finibus viverra neca the sene on satien the miss drana inc

                                        fermen norttito sit space, mus nellentesque habitan.</p>

                                    <div class="info">

                                        <div class="author-img"> <img src="img/team/5.jpg" alt=""> </div>

                                        <div class="cont"> <span><i class="star-rating"></i><i

                                                    class="star-rating"></i><i class="star-rating"></i><i

                                                    class="star-rating"></i><i class="star-rating"></i></span>

                                            <h6>Olivia Martin</h6> <span>Guest review</span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section> -->

    <!-- Services -->

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
    <?php include 'footer.php' ?>


    <?php include 'footer-link.php' ?>



</body>






</html>