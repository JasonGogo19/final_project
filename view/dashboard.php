<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
if (!isset($_SESSION['user_id'])) {
    // If the user is not logged in, redirect to the login page.
    header('Location: ../login/login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - J's Events</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
    <div class="sidebar">
        <!-- Sidebar content -->
    </div>
    <div class="main-content">
        <header>
            <h1>Dashboard</h1>
            <nav class="header-nav">
                <ul>
                    <li><a href="profile_management.php">Profile Management</a></li>
                    <li><a href="create_event.php">Create Event</a></li>
                    <li><a href="manage_events.php">Manage Events</a></li>
                    <li><a href="browse_events.php">Browse Events</a></li>
                    <li><a href="../login/logout.php">Log Out</a></li>
                </ul>
             </nav>
        </header>
        <div class="cards">
            <!-- Card components -->
        </div>
        <div class="charts">
            <canvas id="line-chart"></canvas>
            <canvas id="pie-chart"></canvas>
        </div>
        <!-- Additional content -->
    </div>
</body>
</html>
