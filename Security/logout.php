<?php
session_start();

// Log out the user
session_destroy();
header("Location: ../index.php"); // Redirect to the main page after logout
exit();
?>
