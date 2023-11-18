<?php
session_start();

// Check if the user is signed in
if (isset($_SESSION['user'])) {
    header("Location: ../index.php"); // Redirect to the main page if signed in
    exit();
}
?>

