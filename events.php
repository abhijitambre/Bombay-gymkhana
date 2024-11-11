<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

// Database Connection Created to fetch the data for all the events
$dbhandle =  mysqli_connect("localhost", "u924494635_bombaygym", "Ask@1gym");
mysqli_select_db($dbhandle, "u924494635_bombaygym");
//query to fetch the events according to the eventdate
$sql = "SELECT * FROM profile ORDER BY eventdate";
// The result is fetched from database  and stored in variable result
$result = mysqli_query($dbhandle, $sql);

?>


<!DOCTYPE html>
<html lang="zxx">

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
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/slider/event.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h1>Events</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- News  -->
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

    <!-- Footer -->
    <?php include 'footer.php' ?>


    <?php include 'footer-link.php' ?>
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