<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['user'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Error: Not Logged In</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }

            .error-container {
                text-align: center;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                background-color: #fff;
            }

            h1 {
                color: #d9534f; /* Bootstrap's danger color */
            }

            p {
                margin-top: 20px;
            }

            a {
                color: #337ab7; /* Bootstrap's primary color */
                text-decoration: none;
            }

            a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <div class="error-container">
            <h1>Error: Not Logged In</h1>
            <p>You are not logged in. Please <a href="http://localhost:8000/Security/signin.php">log in</a> to access this page.</p>
        </div>
    </body>
    </html>
    <?php
    exit(); // Terminate script execution
}
?>
