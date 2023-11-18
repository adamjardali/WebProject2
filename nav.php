<!-- nav.php -->

<?php

?>

<nav>
    <ul>
        <?php
         
            // User is logged in
            $loggedInUser = $_SESSION['user']['UserName'];
            echo '<li><a href="http://localhost:8000/index.php">Main</a></li>';
            echo '<li><a href="http://localhost:8000/CV/index.php">Check CV</a></li>';
            echo '<li><a href="http://localhost:8000/Gallery/index.php">Gallery</a></li>';
            echo '<li><a href="http://localhost:8000/Security/logout.php">Logout</a></li>';
            echo '<li>Welcome, <span style="color: red;">' . $loggedInUser . '</span></li>';

        
        ?>
    </ul>
</nav>

<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

nav {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

li {
    display: inline-block;
    margin-right: 20px;
}

a {
    text-decoration: none;
    color: white;
    font-weight: bold;
    font-size: 16px;
}

a:hover {
    color: #ffd700; /* Change color on hover (e.g., gold) */
}

</style>
