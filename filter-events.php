<?php
// Assuming you have the necessary database connection and setup already
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

$dbhandle =  mysqli_connect("localhost", "u924494635_bombaygym", "Ask@1gym");
mysqli_select_db($dbhandle, "u924494635_bombaygym");
// Check if the start date and end date are set
// Check if the start date and end date are set
if (isset($_POST['sdate']) && isset($_POST['edate'])) {
    $startDate = $_POST['sdate'];
    $endDate = $_POST['edate'];

    // Construct the SQL query with date filtering
    $sql = "SELECT * FROM profile WHERE eventdate BETWEEN '$startDate' AND '$endDate' ORDER BY eventdate";
} else {
    // No start and end dates set, retrieve events for the current date and future dates
    $currentDate = date('Y-m-d');
    $sql = "SELECT * FROM profile WHERE eventdate >= '$currentDate' ORDER BY eventdate";
}

// Execute the query
$result = mysqli_query($dbhandle, $sql);

// Check if there are any events
if (mysqli_num_rows($result) > 0) {
    // Loop through the results and generate the HTML for the events
    $eventHTML = '<div class="owl-carousel owl-theme" id="eventsContainer">';
    while ($proo = mysqli_fetch_assoc($result)) {
        // Generate HTML for each event
        $eventHTML .= '<div class="item" style="margin:0 10px;">';
        $eventHTML .= '<div class="position-re o-hidden">';
        $eventHTML .= '<img src="data:image/jpeg;base64,' . base64_encode($proo['image']) . '"/>';
        $eventHTML .= '<div class="date">';
        $eventHTML .= '<a href="event-details.php">';
        $eventHTML .= '<span>' . date('M', strtotime($proo['eventdate'])) . '</span>';
        $eventHTML .= '<i>' . date('j', strtotime($proo['eventdate'])) . '</i>';
        $eventHTML .= '</a>';
        $eventHTML .= '</div>';
        $eventHTML .= '</div>';
        $eventHTML .= '<div class="con">';
        $eventHTML .= '<h5><a href="event-details.php?event=' . $proo['id'] . '" class="event-title">' . $proo['name_ach'] . '</a></h5>';
        $eventHTML .= '</div>';
        $eventHTML .= '</div>';
    }
    $eventHTML .= '</div>';
    echo $eventHTML;
} else {
    // No events found
    echo '<p>No events found.</p>';
}
