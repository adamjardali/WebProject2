<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Page</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <style>
        /* Add a CSS style to make the username red */
        .loggedInUser {
            color: red;
        }
    </style>
</head>
<body>

<nav>
    <ul>
        <?php
        if (isset($_SESSION['user'])) {
            // User is logged in
            $loggedInUser = $_SESSION['user']['UserName']; // Assuming 'user' is the key where you store the username in the session
            // $loggedInUser = "Adam" ;// Assuming 'user' is the key where you store the username in the session
            echo '<li><a href="http://localhost:8000/index.php">Main</a></li>';
            echo '<li><a href="CV/index.php">Check CV</a></li>';
            echo '<li><a href="Gallery/index.php">Gallery</a></li>';
            echo '<li><a href="Security/logout.php">Logout</a></li>';
            echo '<li>Welcome, ' . $loggedInUser . '</span></li>';

        } else {

            // User is not logged in
            echo '<li><a href="Security/signin.php">Sign In</a></li>';
            echo '<li><a href="Security/signup.php">Sign Up</a></li>';
        }
        ?>
    </ul>
</nav>


    <h1>This is the Main Page</h1>
</body>
</html>
