<?php
// header ("Content-Type: text/Calendar"); 
// header ("Content-Disposition: inline; filename=iCalendar.ics"); 
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
// $dbhandle =  mysqli_connect("localhost", "root", "");
// mysqli_select_db($dbhandle,"myprofile");

// Database connection is created 
$dbhandle =  mysqli_connect("localhost", "u924494635_bombaygym", "Ask@1gym");
mysqli_select_db($dbhandle, "u924494635_bombaygym");

// This line will help to identify which event is selected from the events page
if (isset($_REQUEST['event'])) {
    // id for the seclted event is fetched 
    $id = $_REQUEST['event'];
    // Cookie is created for the requested id of the event
    setcookie("idnew", $id);
    // fetch file to download from database
    // The event selcted from the table where id is equal to the requested id
    $sqls = "SELECT * FROM profile WHERE id=$id";
    $results = mysqli_query($dbhandle, $sqls);
    // The result for the following query in the result variable
    $event = mysqli_fetch_assoc($results);
    // The date for the event is fetched fromt hetable for the specific id
    $sdate = new DateTime($event['Date']);
    // The date stored is splitted in 3 parts day,month,year
    $gsdate = date('F j, Y', $sdate->getTimestamp());
    // The event endate is fetched and stored
    $edate = new DateTime($event['end_date']);
    // The enddate stored is splitted in 3 parts day,month,year
    $gedate = date('F j, Y', $edate->getTimestamp());
    // The time for the event is fetched fo the event id
    $eidtt = $event['time'];
    $time = new DateTime($eidtt);
    // The format for the time is set for example h = house and i = minute and s = seconds
    $stime = $time->format('h:i:s A');


    $eeidtt = $event['end_time'];
    $time = new DateTime($eeidtt);
    $etime = $time->format('h:i:s A');
    $eventrel = $event['Eventgroup'];
    // echo $eventrel;
}
if (!empty($eventrel)) {
    $sql1 = "SELECT * FROM profile WHERE Eventgroup = '$eventrel' ORDER BY eventdate, time;";
    $result1 = mysqli_query($dbhandle, $sql1);
    // Rest of your code to handle the query result
}
else{

}



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
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/slider/banner.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <!-- <span>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                    </span> -->
                    <!-- <h5>Bombay Gymkhana</h5> -->
                    <h1>Event Details</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Rooms -->
    <section class="section-padding">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="rooms2 animate-box" data-animate-effect="fadeInUp">

                        <!-- The image for the following event is printed from the database and encoded using base64 encrytpion -->
                        <figure><?php echo '<img src="data:image/jpeg;base64,' . base64_encode($event['image']) . '"/>' ?></figure>
                        <div class="caption">
                            <h4><?php echo $event['name_ach']; ?></h4>
                            <p><?php echo $event['description']; ?></p>
                            <div class="row room-facilities">
                                <div class="col-md-4">
                                    <ul>
                                        <!-- Date for the event is printed form the database -->
                                        <li><img src="images/yellow-icons/calendar.png" alt="" class="events-icon"> <?php echo $event['Date']; ?></li>
                                        <li><img src="images/yellow-icons/location.png" alt="" class="events-icon"> Mumbai</li>

                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <!-- Time for the event is printed form the database -->
                                        <li><img src="images/yellow-icons/wall-clock.png" alt="" class="events-icon"><?php echo $event['time']; ?></li>
                                        <!-- <li><i class="flaticon-breakfast"></i> Breakfast</li> -->
                                    </ul>
                                </div>
                                <!-- <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-clock-1"></i> 200 sqft room</li>
                                        <li><i class="flaticon-swimming"></i> Swimming Pool</li>
                                    </ul>
                                </div> -->
                            </div>
                            <hr class="border-2">
                            <div class="info-wrapper">
                                <div class="">
                                    <!-- Name ,description,satarting date nad end date is sent to the calender for the following event to store in the calender for the user to save in the system calender -->
                                    <button class="addToCal" data-ace='{"title":"<?php echo $event['name_ach']; ?>","desc":"<?php echo $event['description']; ?>","location":"Location of Event 2","time":{"start":"<?php echo $gsdate ?> <?php echo $eidtt ?>", "end":"<?php echo $gedate ?> <?php echo $eeidtt ?>", "zone":"+05:30"}, "organizer":{"name":"Lord Abbett", "email": "email@gmail.com"}}'><span>Add To Calendar</span></button>

                                    <div class="addToCalOptions">
                                        <!-- <a href="#" data-type="ics">Outlook Calendar</a> -->
                                        <a href="#" data-type="google">Google Calendar</a>
                                        <a href="#" data-type="yahoo">Yahoo Calendar</a>
                                        <!-- <a href="#" data-type="hotmail">Hotmail Calendar</a> -->
                                        <a href="#" data-type="ics">iCal Calendar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>


                </div>
            </div>
        </div>

    </section>
    <?php
    if ($result1) {
        echo '<section class="news section-padding ">';
        echo '<div class="container">';
        echo '<div class="row">';
        echo '<div class="col-md-12">';
        echo '<div class="section-title"><span>Founders Day Events</span></div>';
        echo '</div>';
        echo '  </div>';
        echo '  <div class="row">';
        echo '      <div class="col-md-12">';
        echo '          <div id="eventbox">';


        // Check if there are any rows returned
        if (mysqli_num_rows($result1) > 0) {
            // Loop through the results and generate the HTML for the events
            echo '<div class="owl-carousel owl-theme" id="eventsContainer">';
            while ($proo = mysqli_fetch_assoc($result1)) {
                // Generate HTML for each event
                echo '<div class="item" style="margin:0 10px;">';
                echo '<div class="position-re o-hidden">';
                echo '<img src="data:image/jpeg;base64,' . base64_encode($proo['image']) . '"/>';
                echo '<div class="date">';
                echo '<a href="event-details.php">';
                echo '<span>' . date('M', strtotime($proo['eventdate'])) . '</span>';
                echo '<i>' . date('j', strtotime($proo['eventdate'])) . '</i>';
                echo '</a>';
                echo '</div>';
                echo '</div>';
                echo '<div class="con">';
                echo '<h5><a href="event-details.php?event=' . $proo['id'] . '" class="event-title">' . $proo["name_ach"] . '</a></h5>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>';
        } else {
            // No rows returned
            echo "No results found.";
        }

        echo ' </div>';
        echo '      </div>';
        echo '   </div>';
        echo '  </div>';
        echo '  </section>';
    } else {
        // Query execution failed
        
    }


    ?>
    <button class="pwa-button" onclick="window.history.back()"><img src="images/yellow-icons/left-arrow.png" alt="" style="height: 36px;margin-top:10px;"></button>
    <!-- Footer -->
    <?php include 'footer.php' ?>


    <?php include 'footer-link.php' ?>
    <script src="js/addtocalender.js"></script>

    <script>
        $(document).ready(function() {
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
        });
    </script>
</body>

</html>