<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $title = $_POST["title"];
    $date = $_POST["date"];
    $location = $_POST["location"];
    $tickets = $_POST["tickets"];

    // Validate form data (you can add more validation logic as needed)

    // Process the data (you can store it in a database or perform other actions)
    // For demonstration purposes, we'll simply display the submitted data
    echo "<h2>New Event Details</h2>";
    echo "<p>Title: $title</p>";
    echo "<p>Date: $date</p>";
    echo "<p>Location: $location</p>";
    echo "<p>Tickets: $tickets</p>";
}
else{
    header("location:addevent_message.html");
    exit;
}
?>
