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
    <!-- <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/slider/fnb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h1>Gallery</h1>
                </div>
            </div>
        </div>
    </div> -->
    <section class="gallery menu section-padding bg-cream" style="padding-top:80px !important;">
        <div class="container">
            <div class="row">
                <div class="wrap">

                    <div class="gallery-wrap">

                        <ul id="filters" class="clearfix">
                            <li><span class="filter active" data-filter=".pip , .edm , .msc , .dj, .esp , .book , .jazz , .merlin">All</span></li>
                            <li><span class="filter" data-filter=".pip">Push India Push challenge</span></li>
                            <li><span class="filter" data-filter=".edm">EDM Night</span></li>
                            <li><span class="filter" data-filter=".msc">Magic show and Circus</span></li>
                            <li><span class="filter" data-filter=".dj">DJ & VDJ Night</span></li>
                            <li><span class="filter" data-filter=".esp">Deepak Rao Special ESP Session</span></li>
                            <li><span class="filter" data-filter=".book">Book reading and craft workshop</span></li>
                            <li><span class="filter" data-filter=".jazz">Jazz Nation by Schubert Vaz Live</span></li>
                            <li><span class="filter" data-filter=".merlin">Merlin and SoulYatra Live</span></li>
                        </ul>

                        <div class="gallery-loop">
                            <div id="gallery">
                                <a class="gallery-item pip" href="/images/gallery/push-up/1.jpg" data-fancybox="gallery" data-cat="pip">
                                    <div class="inside"><img src="/images/gallery/push-up/1.jpg  " alt="" /></div>
                                </a>
                                <a class="gallery-item pip" href="/images/gallery/push-up/2.jpg" data-fancybox="gallery" data-cat="pip">
                                    <div class="inside"><img src="/images/gallery/push-up/2.jpg  " alt="" /></div>
                                </a>
                                <a class="gallery-item pip" href="/images/gallery/push-up/3.jpg" data-fancybox="gallery" data-cat="pip">
                                    <div class="inside"><img src="/images/gallery/push-up/3.jpg  " alt="" /></div>
                                </a>
                                <a class="gallery-item pip" href="/images/gallery/push-up/4.jpg" data-fancybox="gallery" data-cat="pip">
                                    <div class="inside"><img src="/images/gallery/push-up/4.jpg  " alt="" /></div>
                                </a>
                                <a class="gallery-item pip" href="/images/gallery/push-up/5.jpg" data-fancybox="gallery" data-cat="pip">
                                    <div class="inside"><img src="/images/gallery/push-up/5.jpg  " alt="" /></div>
                                </a>

                                <a class="gallery-item edm" href="/images/gallery/edm/1.jpg" data-fancybox="gallery" data-cat="edm">
                                    <div class="inside"><img src="/images/gallery/edm/1.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item edm" href="/images/gallery/edm/2.jpg" data-fancybox="gallery" data-cat="edm">
                                    <div class="inside"><img src="/images/gallery/edm/2.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item edm" href="/images/gallery/edm/3.jpg" data-fancybox="gallery" data-cat="edm">
                                    <div class="inside"><img src="/images/gallery/edm/3.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item edm" href="/images/gallery/edm/4.jpg" data-fancybox="gallery" data-cat="edm">
                                    <div class="inside"><img src="/images/gallery/edm/4.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item edm" href="/images/gallery/edm/5.jpg" data-fancybox="gallery" data-cat="edm">
                                    <div class="inside"><img src="/images/gallery/edm/5.jpg" alt="" /></div>
                                </a>

                                <a class="gallery-item msc" href="/images/gallery/circus/1.jpg" data-fancybox="gallery" data-cat="msc">
                                    <div class="inside"><img src="/images/gallery/circus/1.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item msc" href="/images/gallery/circus/2.jpg" data-fancybox="gallery" data-cat="msc">
                                    <div class="inside"><img src="/images/gallery/circus/2.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item msc" href="/images/gallery/circus/3.jpg" data-fancybox="gallery" data-cat="msc">
                                    <div class="inside"><img src="/images/gallery/circus/3.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item msc" href="/images/gallery/circus/4.jpg" data-fancybox="gallery" data-cat="msc">
                                    <div class="inside"><img src="/images/gallery/circus/4.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item msc" href="/images/gallery/circus/5.jpg" data-fancybox="gallery" data-cat="msc">
                                    <div class="inside"><img src="/images/gallery/circus/5.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item msc" href="/images/gallery/circus/6.jpg" data-fancybox="gallery" data-cat="msc">
                                    <div class="inside"><img src="/images/gallery/circus/6.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item msc" href="/images/gallery/circus/7.jpg" data-fancybox="gallery" data-cat="msc">
                                    <div class="inside"><img src="/images/gallery/circus/7.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item msc" href="/images/gallery/circus/8.jpg" data-fancybox="gallery" data-cat="msc">
                                    <div class="inside"><img src="/images/gallery/circus/8.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item msc" href="/images/gallery/circus/9.jpg" data-fancybox="gallery" data-cat="msc">
                                    <div class="inside"><img src="/images/gallery/circus/9.jpg" alt="" /></div>
                                </a>


                                <a class="gallery-item dj" href="/images/gallery/dj night/1.jpg" data-fancybox="gallery" data-cat="dj">
                                    <div class="inside"><img src="/images/gallery/dj night/1.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item dj" href="/images/gallery/dj night/2.jpg" data-fancybox="gallery" data-cat="dj">
                                    <div class="inside"><img src="/images/gallery/dj night/2.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item dj" href="/images/gallery/dj night/3.jpg" data-fancybox="gallery" data-cat="dj">
                                    <div class="inside"><img src="/images/gallery/dj night/3.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item dj" href="/images/gallery/dj night/4.jpg" data-fancybox="gallery" data-cat="dj">
                                    <div class="inside"><img src="/images/gallery/dj night/4.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item dj" href="/images/gallery/dj night/5.jpg" data-fancybox="gallery" data-cat="dj">
                                    <div class="inside"><img src="/images/gallery/dj night/5.jpg" alt="" /></div>
                                </a>

                                <a class="gallery-item esp" href="/images/gallery/esp/1.jpg" data-fancybox="gallery" data-cat="esp">
                                    <div class="inside"><img src="/images/gallery/esp/1.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item esp" href="/images/gallery/esp/2.jpg" data-fancybox="gallery" data-cat="esp">
                                    <div class="inside"><img src="/images/gallery/esp/2.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item esp" href="/images/gallery/esp/3.jpg" data-fancybox="gallery" data-cat="esp">
                                    <div class="inside"><img src="/images/gallery/esp/3.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item esp" href="/images/gallery/esp/4.jpg" data-fancybox="gallery" data-cat="esp">
                                    <div class="inside"><img src="/images/gallery/esp/4.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item esp" href="/images/gallery/esp/5.jpg" data-fancybox="gallery" data-cat="esp">
                                    <div class="inside"><img src="/images/gallery/esp/5.jpg" alt="" /></div>
                                </a>

                                <a class="gallery-item book" href="/images/gallery/book/1.jpg" data-fancybox="gallery" data-cat="book">
                                    <div class="inside"><img src="/images/gallery/book/1.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item book" href="/images/gallery/book/2.jpg" data-fancybox="gallery" data-cat="book">
                                    <div class="inside"><img src="/images/gallery/book/2.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item book" href="/images/gallery/book/3.jpg" data-fancybox="gallery" data-cat="book">
                                    <div class="inside"><img src="/images/gallery/book/3.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item book" href="/images/gallery/book/4.jpg" data-fancybox="gallery" data-cat="book">
                                    <div class="inside"><img src="/images/gallery/book/4.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item book" href="/images/gallery/book/5.jpg" data-fancybox="gallery" data-cat="book">
                                    <div class="inside"><img src="/images/gallery/book/5.jpg" alt="" /></div>
                                </a>


                                <a class="gallery-item jazz" href="/images/gallery/jazz/1.jpg" data-fancybox="gallery" data-cat="jazz">
                                    <div class="inside"><img src="/images/gallery/jazz/1.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item jazz" href="/images/gallery/jazz/2.jpg" data-fancybox="gallery" data-cat="jazz">
                                    <div class="inside"><img src="/images/gallery/jazz/2.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item jazz" href="/images/gallery/jazz/3.jpg" data-fancybox="gallery" data-cat="jazz">
                                    <div class="inside"><img src="/images/gallery/jazz/3.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item jazz" href="/images/gallery/jazz/4.jpg" data-fancybox="gallery" data-cat="jazz">
                                    <div class="inside"><img src="/images/gallery/jazz/4.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item jazz" href="/images/gallery/jazz/5.jpg" data-fancybox="gallery" data-cat="jazz">
                                    <div class="inside"><img src="/images/gallery/jazz/5.jpg" alt="" /></div>
                                </a>

                                <a class="gallery-item merlin" href="/images/gallery/merlin/1.jpg" data-fancybox="gallery" data-cat="merlin">
                                    <div class="inside"><img src="/images/gallery/merlin/1.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item merlin" href="/images/gallery/merlin/2.jpg" data-fancybox="gallery" data-cat="merlin">
                                    <div class="inside"><img src="/images/gallery/merlin/2.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item merlin" href="/images/gallery/merlin/3.jpg" data-fancybox="gallery" data-cat="merlin">
                                    <div class="inside"><img src="/images/gallery/merlin/3.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item merlin" href="/images/gallery/merlin/4.jpg" data-fancybox="gallery" data-cat="merlin">
                                    <div class="inside"><img src="/images/gallery/merlin/4.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item merlin" href="/images/gallery/merlin/5.jpg" data-fancybox="gallery" data-cat="merlin">
                                    <div class="inside"><img src="/images/gallery/merlin/5.jpg" alt="" /></div>
                                </a>
                                <a class="gallery-item merlin" href="/images/gallery/merlin/6.jpg" data-fancybox="gallery" data-cat="merlin">
                                    <div class="inside"><img src="/images/gallery/merlin/6.jpg" alt="" /></div>
                                </a>

                            </div>
                        </div>
                        <!--/gallery-->

                    </div>
                    <!--/gallery-wrap-->

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
                    // The div is slected using id gallery for passin the data from the div to the mix it up function
                    $('#gallery').mixItUp({
                        selectors: {
                            // the class gallery item acts as a target for the gallery section where the images are reflected 
                            target: '.gallery-item',
                            // filter class is selected for the keeping the tab for the filters
                            filter: '.filter'
                        },
                        load: {
                            // This fucntion will load all the images for the classes present
                            filter: '.pip , .edm , .msc , .dj, .esp , .book , .jazz , .merlin' // show all items on page load.
                        }
                    });

                }

            };
            // Filter ALL the things
            filterList.init();
        });
    </script>

</html>