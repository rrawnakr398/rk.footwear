<?php
// Start the session
session_start();

// Check if the session variables are set (i.e., user is logged in)
if (!isset($_SESSION['user_id']) || !isset($_SESSION['username']) || !isset($_SESSION['role'])) {
    // Redirect to login page (index.php)
    header("Location: index.php");
    exit();
}
?>