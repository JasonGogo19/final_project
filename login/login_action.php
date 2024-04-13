<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require '../settings/config.php'; // Adjust the path as needed
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string(trim($_POST["email"]));
    $password = trim($_POST["password"]);

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        // Handle error here
        echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
        exit;
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        // Authentication success
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['fullname'] = $user['fullname']; // Or 'username', depending on your database structure
        header("Location: ../view/dashboard.php"); // Adjust the path as necessary
        exit;
    } else {
        // Authentication failed
        echo "Invalid email or password.";
    }

    $stmt->close();
} else {
    // Not a POST request
    header("Location: login/login.php"); // Adjust the path as necessary
    exit;
}
?>

