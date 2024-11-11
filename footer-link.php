    <!-- jQuery -->

    <!-- <script src="js/jquery-3.6.0.min.js?v=1"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


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
    <script src="js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.js?v=1"></script>
    <script src="js/cookie.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js?v=1"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1356355/responsiveslides.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.20/daterangepicker.min.js" integrity="sha512-aXnAK+6GibEb/kjcoPp4LXVpLbJGsxT2S1KccmNeaDNkqaGM463fu/szQo8TyczzeSsHiimGjG81fK3ntcjqpA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- bootstrap-datetimepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js" integrity="sha512-AIOTidJAcHBH2G/oZv9viEGXRqDNmfdPVPYOYKGy3fti0xIplnlgMHUGfuNRzC6FkzIo0iIxgFnr9RikFxK+sw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            // The function fetches the cookie names validmemcode 
            var valcook = Cookies.get('validmemcode');
            // if the cookie is empty it will take the user to the before login page or else the user will remain logged in
            if (valcook == "" || valcook == null) {
                window.location.href = "/index.php";
            }
        });
        $(document).ready(function() {
            $(".hamburger").click(function() {
                $(this).toggleClass("is-active");
            });
        });

        $(document).ready(function() {
            // When click on the logout button the cookies anmed validmemcode and response are deleted and the user is redirected to the before login page
            $('#logout').click(function() {
                $.removeCookie("validmemcode");
                $.removeCookie("response");
                window.location.href = "/index.php";
            });
        });
        $(document).ready(function() {
            $('#logout1').click(function() {
                $.removeCookie("validmemcode");
                $.removeCookie("response");
                window.location.href = "/index.php";
            });
        });
    </script>
    <script>
        $('.carousel').carousel({
            interval: 2000
        })
    </script>