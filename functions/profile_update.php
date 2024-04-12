<?php
// Start the session
session_start();
require '../settings/config.php';

// Check if the user is logged in, if not, redirect to login page
if (!isset($_SESSION['user_id'])) {
    header('Location: ../login/login.php');
    exit;
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize the input values
    $fullname = $conn->real_escape_string(trim($_POST['fullname']));
    $email = $conn->real_escape_string(trim($_POST['email']));
    $user_id = $_SESSION['user_id'];

    // Prepare the SQL statement to update the user's information
    if ($stmt = $conn->prepare("UPDATE users SET fullname = ?, email = ? WHERE id = ?")) {
        $stmt->bind_param("ssi", $fullname, $email, $user_id);

        // Execute the statement and check for success
        if ($stmt->execute()) {
            // Redirect to the profile page with a success message
            header("Location: ../view/profile_management.php?status=success");
            exit;
        } else {
            // Redirect to the profile page with an error message
            header("Location: ../view/profile_management.php?status=error");
            exit;
        }
        // Close the prepared statement
        
    } else {
        // Handle errors in preparation
        echo "Error preparing statement: " . $conn->error;
        // Consider redirecting to an error page or logging the error
    }
} else {
    // Redirect to the profile management page if the request method isn't POST
    header("Location: ../view/profile_management.php");
    exit;
}

$_SESSION['update_success'] = "Profile successfully updated.";
header("Location: ../view/profile_management.php");
exit;
?>
