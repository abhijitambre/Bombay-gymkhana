<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from duruthemes.com/demo/html/cappa/demo1/restaurant.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jul 2022 10:35:08 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Gallery</title>
    <?php include 'header-link.php' ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
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
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/slider/fnb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h1>Gallery</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="gallery menu section-padding bg-cream">
        <div class="container">
            <div class="row">
                <div class="wrap">

                    <div class="gallery-wrap">

                        <ul id="filters" class="clearfix">
                            <li><span class="filter active" data-filter=".brunch, .cookout, .stir">All</span></li>
                            <li><span class="filter" data-filter=".brunch">Sunday Brunch</span></li>
                            <li><span class="filter" data-filter=".cookout">Cookout</span></li>
                            <li><span class="filter" data-filter=".stir">Stir Fry</span></li>
                        </ul>

                        <div class="gallery-loop">
                        <div id="gallery">
                                <a class="gallery-item brunch" href="/images/gallery/sunday-brunch/1.jpg  " data-fancybox="gallery" data-cat="brunch"><div class="inside"><img src="/images/gallery/sunday-brunch/1.jpg  " alt="" /></div></a>
                                <a class="gallery-item brunch" href="/images/gallery/sunday-brunch/2.jpg  " data-fancybox="gallery" data-cat="brunch"><div class="inside"><img src="/images/gallery/sunday-brunch/2.jpg  " alt="" /></div></a>
                                <a class="gallery-item brunch" href="/images/gallery/sunday-brunch/3.jpg  " data-fancybox="gallery" data-cat="brunch"><div class="inside"><img src="/images/gallery/sunday-brunch/3.jpg  " alt="" /></div></a>
                                <a class="gallery-item cookout" href="/images/gallery/cookout/IMG_2602.jpg " data-fancybox="gallery" data-cat="cookout"><div class="inside"><img src="/images/gallery/cookout/IMG_2602.jpg " alt="" /></div></a>
                                <a class="gallery-item cookout" href="/images/gallery/cookout/IMG_2609.jpg " data-fancybox="gallery" data-cat="cookout"><div class="inside"><img src="/images/gallery/cookout/IMG_2609.jpg " alt="" /></div></a>
                                <a class="gallery-item stir" href="/images/gallery/stir-fry/IMG_2564.jpg" data-fancybox="gallery" data-cat="stir"><div class="inside"><img src="/images/gallery/stir-fry/IMG_2564.jpg" alt="" /></div></a>
                                <a class="gallery-item stir" href="/images/gallery/stir-fry/IMG_2571.jpg" data-fancybox="gallery" data-cat="stir"><div class="inside"><img src="/images/gallery/stir-fry/IMG_2571.jpg" alt="" /></div></a>
                                <a class="gallery-item stir" href="/images/gallery/stir-fry/IMG_2581.jpg" data-fancybox="gallery" data-cat="stir"><div class="inside"><img src="/images/gallery/stir-fry/IMG_2581.jpg" alt="" /></div></a>



                            </div>
                        </div>
                        <!--/gallery-->

                    </div>
                    <!--/gallery-wrap-->

                </div>
            </div>
        </div>
        <button class="pwa-button" onclick="window.history.back()"><img src="images/yellow-icons/left-arrow.png" alt="" style="height: 36px;margin-top:10px;"></button>
    </section>


    <!-- Footer -->
    <?php include 'footer.php' ?>


    <?php include 'footer-link.php' ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
    <script>
        // Fancybox Config
        $('[data-fancybox="gallery"]').fancybox({
            buttons: [
                "slideShow",
                "thumbs",
                "zoom",
                "fullScreen",
                "share",
                "close"
            ],
            loop: false,
            protect: true
        });
    </script>
    <script>
        $(function() {

            var filterList = {

                init: function() {

                    // https://mixitup.kunkalabs.com/
                    $('#gallery').mixItUp({
                        selectors: {
                            target: '.gallery-item',
                            filter: '.filter'
                        },
                        load: {
                            filter: '.brunch, .cookout, .stir' // show all items on page load.
                        }
                    });

                }

            };

            // Filter ALL the things
            filterList.init();

        });
    </script>

</html>