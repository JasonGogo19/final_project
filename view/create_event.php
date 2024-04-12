<?php
// Start the session
session_start();

// Check if the user is logged in, if not, redirect to login page
if (!isset($_SESSION['user_id'])) {
    header('Location: ../login/login.php');
    exit;
}

// Include the database configuration file
require '../settings/config.php';

// Define variables and initialize with empty values
$event_name = $event_description = $event_date = $event_time = $event_location = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $event_name = trim($_POST["event_name"]);
    $event_description = trim($_POST["event_description"]);
    $event_date = trim($_POST["event_date"]);
    $event_time = trim($_POST["event_time"]);
    $event_location = trim($_POST["event_location"]);
    
    // Prepare an insert statement
    $sql = "INSERT INTO events (name, description, date, time, location) VALUES (?, ?, ?, ?, ?)";
     
    if ($stmt = $conn->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("sssss", $event_name, $event_description, $event_date, $event_time, $event_location);
        
        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            echo "Event created successfully.";
        } else {
            echo "Error: Could not execute the query: $stmt->error";
        }
        $stmt->close();

        $_SESSION['event_creation_success'] = "Event created successfully.";

        header("Location: dashboard.php");
        exit;
        
        // Close statement
        
    } else {
        echo "Error: Could not prepare the query: $conn->error";
    }

    // Close connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Event - J's Event</title>
    <link rel="stylesheet" href="../css/create_event.css">

</head>
<body>
<?php
    // Check for the session variable and display the message
    if (isset($_SESSION['event_creation_success'])) {
        echo "<div class='success-message'>" . htmlspecialchars($_SESSION['event_creation_success']) . "</div>";
        // Unset the success message so it doesn't show again after refresh
        unset($_SESSION['event_creation_success']);
    }
    ?>
    <h2>Create Event</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div>
            <label for="event_name">Event Name:</label>
            <input type="text" name="event_name" id="event_name" required>
        </div>
        <div>
            <label for="event_description">Event Description:</label>
            <textarea name="event_description" id="event_description" required></textarea>
        </div>
        <div>
            <label for="event_date">Event Date:</label>
            <input type="date" name="event_date" id="event_date" required>
        </div>
        <div>
            <label for="event_time">Event Time:</label>
            <input type="time" name="event_time" id="event_time" required>
        </div>
        <div>
            <label for="event_location">Event Location:</label>
            <input type="text" name="event_location" id="event_location" required>
        </div>
        <div>
            <input type="submit" value="Create Event">
        </div>
    </form>
</body>
</html>
