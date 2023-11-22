<?php
// Start the session
session_start();

// Check if the user is already logged in
if (isset($_SESSION['nis']) == null ) {
    // Redirect to the dashboard if already logged in
    header("Location: ../dashboard/");
    exit();
}

// Continue with the rest of your login page content
?>
