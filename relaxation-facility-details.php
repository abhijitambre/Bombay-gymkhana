<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from duruthemes.com/demo/html/cappa/demo1/restaurant.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jul 2022 10:35:08 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Bombay Gymkhana</title>
    <?php include 'header-link.php' ?>
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
    <div id="carouselExampleSlidesOnly" class="carousel slide banner-header section-padding valign bg-img bg-fixed" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="..." alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Third slide">
            </div>
        </div>
    </div>
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/slider/verndha.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h1>Unwind Zone </h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Restaurant Menu -->
    <section id="menu" class="restaurant-menu restaurant-menu2  menu section-padding bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="tabs-icon col-md-10 offset-md-1 text-center">
                            <div class="owl-carousel owl-theme">
                                <div id="tab-1" class="active item">
                                    <h6>Children's Park</h6>
                                </div>
                                <div id="tab-2" class="item">
                                    <h6> Siesta Room</h6>
                                </div>

                            </div>
                        </div>
                        <div class="restaurant-menu-content col-md-12">
                            <!-- Starters -->
                            <div id="tab-1-content" class="cont active">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="mb-30">Bombay Gym has an open and safe haven for children to play and enjoy themselves while families and friends enjoy the Club facilities.
                                        </p>




                                        <ul class="list-unstyled page-list mb-30">
                                            <li>


                                                <div class="page-list-icon">
                                                    <h6>Timing : </h6>
                                                </div>
                                                <div class="page-list-text">
                                                    <p> 07.00 AM to 09.00 PM</p>
                                                </div>
                                            </li>


                                        </ul>


                                    </div>


                                </div>
                            </div>
                            <!-- Mains -->
                            <div id="tab-2-content" class="cont">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="mb-30">Located on the first floor adjacent to the library is the Gentlemen’s Siesta Room which is a cozy room with reclining chairs for members to relax.
                                        </p>




                                        <ul class="list-unstyled page-list mb-30">
                                            <li>


                                                <div class="page-list-icon">
                                                    <h6>Timing : </h6>
                                                </div>
                                                <div class="page-list-text">
                                                    <p> 08.00 AM to 08.30 PM</p>
                                                </div>
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
        <button class="pwa-button" onclick="window.history.back()"><img src="images/yellow-icons/left-arrow.png" alt="" style="height: 36px;margin-top:10px;"></button>
    </section>
    <script>
        $('.carousel').carousel({
            interval: 2000
        })
    </script>


    <!-- Footer -->
    <?php include 'footer.php' ?>


    <?php include 'footer-link.php' ?>

</html>