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

// Initialize variables
$fullname = '';
$email = '';

// Get user ID from the session
$user_id = $_SESSION['user_id'];

// Prepare the SQL statement
if ($stmt = $conn->prepare("SELECT fullname, email FROM users WHERE id = ?")) {
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        // Handle no user found
        $error = "No user found with ID: " . $user_id;
        // You could redirect to an error page or handle it differently
    } else {
        $user = $result->fetch_assoc();
        $fullname = $user['fullname'];
        $email = $user['email'];
    }
    $stmt->close();
} else {
    // Handle SQL preparation error
    $error = "SQL Error: " . $conn->error;
}

// Check for and handle any potential error
if (!empty($error)) {
    echo "<p>Error: " . $error . "</p>";
    // Potentially redirect or handle the error appropriately here
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile Management - ProAcc</title>
    <link rel="stylesheet" href="../css/profile_management.css"> <!-- Update the path -->
</head>
<body>
    <nav class="navbar">
        <div class="navbar-brand">User Profile Management</div>
        <div class="navbar-links">
            <a href="dashboard.php">Dashboard</a>
            <a href="../login/logout.php">Logout</a>
        </div>
    </nav>

    <div class="container">
        <aside class="sidebar">
            <!-- Sidebar content here -->
            <nav>
                <ul>
                    <li><a href="#">Personal Info</a></li>
                    <!-- Add more sidebar items here -->
                </ul>
            </nav>
        </aside>
        <div class="main-content">
            <section class="profile-section">
                <!-- Profile content here -->
                <h2>Personal Information</h2>
                <form id="profileForm" action="../functions/profile_update.php" method="POST">
                    <!-- Add your form fields here -->
                    <div class="form-group">
                        <label for="fullname">Full Name:</label>
                        <input type="text" id="fullname" name="fullname" value="<?php echo htmlspecialchars($user['fullname']); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
                    </div>
                    <!-- Add more form groups for additional information -->
                    <button type="submit" class="submit-button">Save Changes</button>
                </form>
            </section>
        </div>
    </div>

    <!-- Modal -->
    <div id="successModal" class="modal" style="display:none;">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Profile successfully updated.</p>
            <button id="okButton">OK</button>
        </div>
    </div>

    <?php if (isset($_SESSION['update_success'])): ?>
        <script type='text/javascript'>
            document.addEventListener('DOMContentLoaded', function() {
                var modal = document.getElementById('successModal');
                modal.style.display = 'block';
            });
        </script>
        <?php unset($_SESSION['update_success']); // Clear the session variable ?>
    <?php endif; ?>

    <footer>
        <!-- Footer content here -->
    </footer>
    <script src="../js/modal.js"></script>
    <script type='text/javascript'>
        // When the DOM is ready
        document.addEventListener('DOMContentLoaded', function() {
            // Check if we have a success message to display
            if (<?php echo json_encode($successMessage); ?>) {
                var modal = document.getElementById('successModal');
                var okButton = document.getElementById('okButton');
                var span = document.getElementsByClassName('close')[0];

                // When the user clicks on <span> (x) or OK button, close the modal and redirect
                span.onclick = function() {
                    modal.style.display = 'none';
                };
                okButton.onclick = function() {
                    window.location.href = 'dashboard.php'; // Replace with your actual dashboard path
                };
                
                // Display the modal
                modal.style.display = 'block';
            }
        });
    </script>
</body>
</html>

<?php echo $script; ?>







