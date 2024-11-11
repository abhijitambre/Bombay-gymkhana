<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Bombay Gymkhana</title>
    <?php include 'header-link.php' ?>
    <style>
        .contact-details-desktop {
            display: block;
        }

        .contact-details-mobile {
            display: none;
        }

        #mem-mail {
            width: 195px;
        }

        #mem-mail1 {
            width: 230px;
        }

        .profile-card_img1 {
            width: 200px;
            height: 200px;
            margin-left: auto;
            margin-right: auto;
            /* transform: translateY(-50%); */
            border-radius: 50%;
            overflow: hidden;
            position: relative;
            z-index: 4;
            box-shadow: 0px 5px 1px 0px #edd97d, 0px 0px 0px 4px rgb(237 217 125);
            margin-bottom: 30px;
        }

        @media (max-width:768px) {
            .contact-details-desktop {
                display: none !important;
            }

            .contact-details-mobile {
                display: block !important;
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
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/slider/1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <h1>My Card</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="contact-details-desktop bg-cream">
        <div class="container">
            <div class="my-card">
                <div class="card-box">
                    <div class="card-box-inner">
                        <div class="col-md-3">
                            <div class="profile-card_img1" style="margin-bottom:0 !important;">
                                <!-- <img id="mem-img" src="" alt=""> -->
                                <img id="cardphoto" src="" alt="">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <h3 id="mem-code1"></h3>
                            <p id="mem-name1"></p>
                            <p id="mem-mail1"></p>
                            <br>
                            <div class="butn-dark md-none">
                                <a onclick="getLocation()"><span>Check In</span></a>
                                <p id="demo" style="visibility: hidden;"></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="qr-box">
                                <div id="qr1"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="contact-details-mobile bg-cream">
        <div class="container">
            <div class="my-card">
                <div class="card-box">
                    <div class="card-box-inner">
                        <div class="col-md-3">
                            <div class="profile-card__img" style="margin-bottom:0 !important;">
                                <!-- <img id="mem-img" src="" alt=""> -->
                                <img id="cardphoto1" src="" alt="">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <h3 id="mem-code"></h3>
                            <p id="mem-name"></p>
                            <p id="mem-mail"></p>

                        </div>
                    </div>
                </div>
                <div class="qr-box">
                    <div id="qr2"></div>
                </div>
            </div>
        </div>
        <button class="pwa-button" onclick="window.history.back()"><img src="images/yellow-icons/left-arrow.png" alt="" style="height: 36px;margin-top:10px;"></button>
    </section>

    <!-- Footer -->
    <?php include 'footer.php' ?>
    <?php include 'footer-link.php' ?>
    <script src="js/qr/jquery.classyqr.js"></script>
    <script src="js/qr/jquery.classyqr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {

            var CookieValue = Cookies.get('response')
            // alert(CookieValue);
            const obj = JSON.parse(CookieValue);
            // alert(obj.Result[0].MemberCode);
            document.getElementById("mem-code").innerHTML = obj.Result[0].MemberCode;
            document.getElementById("mem-code1").innerHTML = obj.Result[0].MemberCode;
            var memcode = obj.Result[0].MemberCode;
            var memcode1 = obj.Result[0].MemberCode;
            document.getElementById("mem-name").innerHTML = obj.Result[0].MemberName;
            document.getElementById("mem-name1").innerHTML = obj.Result[0].MemberName;
            document.getElementById("mem-mail").innerHTML = obj.Result[0].EmailId;
            document.getElementById("mem-mail1").innerHTML = obj.Result[0].EmailId;
            var profileimage = obj.Result[0].MemberPhoto;
            if (profileimage === null) {
                profileimage = "profile.png";
            }
            var urlentry = "images/member-images/"
            var finalimage = urlentry.concat(profileimage);
            if (finalimage = "images/member-images/") {
                var finalimage1 = "images/member-images/profile.png"
                $('#cardphoto').attr('src', finalimage1);
                $('#cardphoto1').attr('src', finalimage1);
            } else {
                $('#cardphoto').attr('src', finalimage);
                $('#cardphoto1').attr('src', finalimage);
            }
            $("#qr2").ClassyQR({
                create: true,
                type: 'text',
                text: memcode,
            });
            $("#qr1").ClassyQR({
                create: true,
                type: 'text',
                text: memcode1,
            });
        });
    </script>
    <script>
        var CookieValue = Cookies.get('response')
        const obj = JSON.parse(CookieValue);
        var membername = obj.Result[0].MemberName;
        var membercode = obj.Result[0].MemberCode;
        var x = document.getElementById("demo");

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            x.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude;
            lat1 = position.coords.latitude;
            lon1 = position.coords.longitude;
            console.log(lon1);
            console.log(lat1);
            alert(getDistanceFromLatLonInKm(lat1, lon1, 18.938473, 72.830380).toFixed(1));

            function getDistanceFromLatLonInKm(lat1, lon1, lat2, lon2) {
                var R = 6371; // Radius of the earth in km
                var dLat = deg2rad(lat2 - lat1); // deg2rad below
                var dLon = deg2rad(lon2 - lon1);
                var a =
                    Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                    Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) *
                    Math.sin(dLon / 2) * Math.sin(dLon / 2);
                var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
                var d = R * c * 1000; // Distance in km
                console.log(d);
                var CookieValue = Cookies.get('checkedin')
                if (CookieValue == "checkedin") {
                    swal({
                        title: "You are already Checkdin",
                        icon: "warning",
                        buttons: ["Cancel", "Checkout"],
                        dangerMode: true,
                    })
                } else {
                    if (d <= 500) {
                        var settings = {
                            "url": "https://fmprod.dishco.com/shawmanservices/api/CmsMemebrCheckIn/FunPubInsertCheckInDetails?SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA&ClubId=13&MemberCode=" + membercode + "&Name=" + membername + "!",
                            "method": "POST",
                            "timeout": 0,
                            "headers": {
                                "ShawManKey": "xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==",
                                "Cookie": "ARRAffinity=fea5fae105dd5b8c95a5513db34ed607a7bf0b9dd7c14a101d073ad1bb67015d; ARRAffinitySameSite=fea5fae105dd5b8c95a5513db34ed607a7bf0b9dd7c14a101d073ad1bb67015d"
                            },
                        };
                        $.ajax(settings).done(function(response) {
                            console.log(response);
                            document.cookie = response;
                        });
                        // Get the current date and time
                        var currentDate = new Date();
                        // Calculate the expiration date by adding 24 hours to the current date
                        var expirationDate = new Date(currentDate.getTime() + (24 * 60 * 60 * 1000)); // 24 hours in milliseconds
                        // Convert the expiration date to a string in the UTC format
                        var expirationDateString = expirationDate.toUTCString();
                        // Set the cookie with the calculated expiration time
                        document.cookie = "checkedin=checkedin; expires=" + expirationDateString;
                        swal("Checked in", "", "success");
                    } else {
                        swal("Checked in Failed", "Get Near the Gym", "error");
                    }
                }
            }


            function deg2rad(deg) {
                return deg * (Math.PI / 180)
            }
        }

        function showError(error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    x.innerHTML = "User denied the request for Geolocation."
                    break;
                case error.POSITION_UNAVAILABLE:
                    x.innerHTML = "Location information is unavailable."
                    break;
                case error.TIMEOUT:
                    x.innerHTML = "The request to get user location timed out."
                    break;
                case error.UNKNOWN_ERROR:
                    x.innerHTML = "An unknown error occurred."
                    break;
            }
        }
    </script>

</body>

</html>