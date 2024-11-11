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

    <div class="progress-wrap cursor-pointer">

        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">

            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />

        </svg>

    </div>
    <section class="facilties section-padding bg-cream">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ">


                    <div class="post-slide">

                        <div class="post-review">
                            <div class="post-date">
                                <img src="images/white-icons/notes.png" class="profile-icons" alt="">
                            </div>
                            <div class="post-title">
                                <a href="pdf/menu/Ala Carte Food Menu.pdf">Ala Carte Food Menu</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="post-slide">
                        <div class="post-review">
                            <div class="post-date">
                                <img src="images/white-icons/notes.png" class="profile-icons" alt="">
                            </div>
                            <div class="post-title">
                                <a href="pdf/menu/Bar Menu.pdf">Bar Menu</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="post-slide">
                        <div class="post-review">
                            <div class="post-date">
                                <img src="images/white-icons/notes.png" class="profile-icons" alt="">
                            </div>
                            <div class="post-title">
                                <a href="pdf/menu/Coffee Menu .pdf">Coffee Menu</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="post-slide">
                        <div class="post-review">
                            <div class="post-date">
                                <img src="images/white-icons/notes.png" class="profile-icons" alt="">
                            </div>
                            <div class="post-title">
                                <a href="pdf/menu/The Cafe Menu.pdf">The Cafe Menu</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="post-slide">
                        <div class="post-review">
                            <div class="post-date">
                                <img src="images/white-icons/notes.png" class="profile-icons" alt="">
                            </div>
                            <div class="post-title">
                                <a href="pdf/menu/The Pavilion Menu.pdf">The Pavilion Menu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    
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
        const constraints = {
            name: {
                presence: {
                    allowEmpty: false
                }
            },
            email: {
                presence: {
                    allowEmpty: false
                },
                email: true
            },
            mobile: {
                presence: {
                    allowEmpty: false
                }
            }
        };
        const form = document.getElementById('contact-form');
        form.addEventListener('submit', function(event) {
            const formValues = {
                name: form.elements.name.value,
                email: form.elements.email.value,
                mobile: form.elements.mobile.value
            };
            const errors = validate(formValues, constraints);
            if (errors) {
                event.preventDefault();
                const errorMessage = Object
                    .values(errors)
                    .map(function(fieldValues) {
                        return fieldValues.join(', ')
                    })
                    .join("\n");
                alert(errorMessage);
            }
        }, false);
    </script>

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
            var clientid2 = jQuery('input[name="clientid2"]');
            var clientid4 = clientid2.val();
            const numbersAndSpaces1 = clientid1.match(/[0-9a-zA-Z]/g);
            const count1 = numbersAndSpaces1 ? numbersAndSpaces1.length : 0;
            const numbersAndSpaces = clientid2.val().match(/[0-9a-zA-Z\s]/g);
            const count = numbersAndSpaces ? numbersAndSpaces.length : 0; // Count the numbers, or default to 0 if no numbers found
            console.log(count);
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

            if (count1 === 1) {
                if (count === 0) {
                    var fullid = clientid1 + "-" + clientid2.val() + "      " + clientid3;
                } else if (count === 1) {
                    var fullid = clientid1 + "-" + clientid2.val() + "     " + clientid3;
                } else if (count === 2) {
                    var fullid = clientid1 + "-" + clientid2.val() + "    " + clientid3;
                } else if (count === 3) {
                    var fullid = clientid1 + "-" + clientid2.val() + "   " + clientid3;
                } else if (count === 4) {
                    var fullid = clientid1 + "-" + clientid2.val() + "  " + clientid3;
                } else if (count === 5) {
                    var fullid = clientid1 + "-" + clientid2.val() + " " + clientid3;
                } else {
                    var fullid = clientid1 + "-" + clientid2.val() + "" + clientid3;
                }
            } else if (count1 === 2) {
                if (count === 0) {
                    var fullid = clientid1 + "-" + clientid2.val() + "     " + clientid3;
                } else if (count === 1) {
                    var fullid = clientid1 + "-" + clientid2.val() + "    " + clientid3;
                } else if (count === 2) {
                    var fullid = clientid1 + "-" + clientid2.val() + "   " + clientid3;
                } else if (count === 3) {
                    var fullid = clientid1 + "-" + clientid2.val() + "  " + clientid3;
                } else if (count === 4) {
                    var fullid = clientid1 + "-" + clientid2.val() + " " + clientid3;
                } else if (count === 5) {
                    var fullid = clientid1 + "-" + clientid2.val() + "" + clientid3;
                }
            } else if (count1 === 3) {
                if (count === 0) {
                    var fullid = clientid1 + "-" + clientid2.val() + "    " + clientid3;
                } else if (count === 1) {
                    var fullid = clientid1 + "-" + clientid2.val() + "   " + clientid3;
                } else if (count === 2) {
                    var fullid = clientid1 + "-" + clientid2.val() + "  " + clientid3;
                } else if (count === 3) {
                    var fullid = clientid1 + "-" + clientid2.val() + " " + clientid3;
                } else if (count === 4) {
                    var fullid = clientid1 + "-" + clientid2.val() + "" + clientid3;
                }
            } else if (count1 === 4) {
                if (count === 0) {
                    var fullid = clientid1 + "-" + clientid2.val() + "   " + clientid3;
                } else if (count === 1) {
                    var fullid = clientid1 + "-" + clientid2.val() + "  " + clientid3;
                } else if (count === 2) {
                    var fullid = clientid1 + "-" + clientid2.val() + " " + clientid3;
                } else if (count === 3) {
                    var fullid = clientid1 + "-" + clientid2.val() + "" + clientid3;
                }
            } else if (count1 === 5) {
                if (count === 0) {
                    var fullid = clientid1 + "-" + clientid2.val() + "  " + clientid3;
                } else if (count === 1) {
                    var fullid = clientid1 + "-" + clientid2.val() + " " + clientid3;
                } else if (count === 2) {
                    var fullid = clientid1 + "-" + clientid2.val() + "" + clientid3;
                }
            } else if (count1 === 6) {
                if (count === 0) {
                    var fullid = clientid1 + "-" + clientid2.val() + " " + clientid3;
                } else if (count === 1) {
                    var fullid = clientid1 + "-" + clientid2.val() + "" + clientid3;
                }
            }
            console.log(fullid);
            var expirationTime2 = new Date();
            expirationTime2.setTime(expirationTime2.getTime() + (60 * 60 * 24 * 30 * 6 * 1000));

            $.cookie('pass', pass, {
                expires: expirationTime2,
                path: '/'
            });
            $.cookie('uniqid', uniqid, {
                expires: expirationTime2,
                path: '/'
            });
            $.cookie('clientid1', clientid1, {
                expires: expirationTime2,
                path: '/'
            });
            $.cookie('clientid2', clientid4, {
                expires: expirationTime2,
                path: '/'
            });
            $.cookie('clientid3', clientid3, {
                expires: expirationTime2,
                path: '/'
            });


            $("#preloader").fadeIn();

            var settings = {
                "url": "https://fmprod.dishco.com/shawmanservices/api/CmsValidateMemberPassword/FunValidateMemberPassword?MemberCode=" + fullid + "&Password=" + pass + "&ClubId=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA",
                "method": "POST",
                "timeout": 0,
                "headers": {
                    "ShawManKey": "xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==",
                    "Cookie": "ARRAffinity=48ca49c0ff92bc16f64fbd83ee082709435e8cfad3e75950ce8986cacd2e3113; ARRAffinitySameSite=48ca49c0ff92bc16f64fbd83ee082709435e8cfad3e75950ce8986cacd2e3113"
                },
            };

            $.ajax(settings).done(function(memcode) {
                console.log(memcode);
                if (memcode.StatusCode === 0 && memcode.Result.length > 0) {
                    var expirationTime2 = new Date();
                    expirationTime2.setTime(expirationTime2.getTime() + (60 * 60 * 24 * 30 * 6 * 1000));
                    $.cookie('validmemcode', fullid, {
                        expires: expirationTime2,
                        path: '/'
                    });
                    $.cookie('memcode', JSON.stringify(memcode), {
                        expires: expirationTime2,
                        path: '/'

                    });
                    window.location.href = "/myprofile.php#user-profile";
                    var correct = "correct";
                }
            });
        };
    </script>
</body>


</html>