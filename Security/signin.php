<?php
include('LogedIn.php');
include('../Database/Database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Call the authenticateUser function from Database.php
    $userData = authenticateUser($username, $password);
    // $userData = false;

    if ($userData !== false) {
        $_SESSION["user"] = $userData;
        header("Location: ../index.php"); // Redirect to the welcome page after successful login
        exit();
    } else {
        $error_message = "Invalid username or password";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
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

        .signin-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .signin-form h2 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .error-message {
            color: red;
            margin-top: 5px;
        }

        .signup-link {
            margin-top: 10px;
            display: block;
            color: #337ab7;
            text-decoration: none;
        }

        .signup-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="signin-form">
        <h2>Sign In</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Sign In</button>
            </div>
            <p id="error-message" class="error-message"><?php echo isset($error_message) ? $error_message : ""; ?></p>
        </form>
        <a href="http://localhost:8000/Security/signup.php" class="signup-link">No account? Sign up</a>
    </div>

    <script>
        function validateForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var errorMessage = document.getElementById("error-message");

            // Basic client-side validation
            if (username === "" || password === "") {
                errorMessage.innerHTML = "Username and password are required";
                return false;
            } else {
                errorMessage.innerHTML = "";
                return true;
            }
        }
    </script>

</body>
</html>
