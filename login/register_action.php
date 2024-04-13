<?php
require_once '../settings/config.php';
global $conn;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $fullname = $conn->real_escape_string(trim($_POST['fullname']));
    $email = $conn->real_escape_string(trim($_POST['email']));
    $password = $conn->real_escape_string(trim($_POST['password']));
    
    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if the email already exists
    $sql = "SELECT id FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    if($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }
    
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Email already exists
        echo "Email already exists. Please choose another.";
        $stmt->close();
        $conn->close();
    } else {
        // Insert new user
        $sql = "INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        if($stmt === false) {
            die("Error preparing statement: " . $conn->error);
        }

        $stmt->bind_param("sss", $fullname, $email, $hashed_password);
        
        if ($stmt->execute()) {
            // Success
            header("Location: login.php"); // Redirect to login page upon successful registration
            exit;
        } else {
            // Handle insertion error
            echo "Error: " . $stmt->error;
        }
        
        $stmt->close();
    }
    
    $conn->close();
} else {
    // Redirect to the registration page if the request method is not POST
    header("Location: register.php");
    exit;
}
?>
