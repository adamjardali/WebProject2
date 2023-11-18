<?php
    // Include necessary files
    include('LogedIn.php');
    include('../Database/Database.php');

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input
        $userName = $_POST["username"];
        $fullName = $_POST["fullname"];
        $password = $_POST["password1"];
        $dateOfBirth = $_POST["dob"];
        $sex = $_POST["sex"];

        // Call the addUserToDatabase function from Database.php
        $userData = addUserToDatabase($userName, $fullName, $password, $dateOfBirth, $sex);

        // Check if user registration was successful
        if ($userData !== false) {
            // Redirect to the login page after successful registration
            header("Location: http://localhost:8000/Security/signin.php");
            exit();
        } else {
            $error_message = "The username is already used, Try Again!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
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

        .signup-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .signup-form h2 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
        }

        .form-group input,
        .form-group select {
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
            display: block;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="signup-form">
        <h2>Sign Up</h2>
        <form action="#" method="post" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" pattern="[A-Za-z ]+" title="Only letters and spaces are allowed" required>
            </div>
            <div class="form-group">
                <label for="password1">Password:</label>
                <input type="password" id="password1" name="password1" required>
            </div>
            <div class="form-group">
                <label for="password2">Confirm Password:</label>
                <input type="password" id="password2" name="password2" required>
                <p id="password-error" class="error-message"></p>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="sex">Sex:</label>
                <select id="sex" name="sex" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Sign Up</button>
            </div>
            <a href="http://localhost:8000/Security/signin.php" class="signup-link">Already have an account? Sign in</a>

            <?php if (isset($error_message)): ?>
                <p class="error-message"><?php echo $error_message; ?></p>
            <?php endif; ?>

        </form>
    </div>

    <script>
        function validateForm() {
            var password1 = document.getElementById("password1").value;
            var password2 = document.getElementById("password2").value;
            var passwordError = document.getElementById("password-error");

            if (password1 !== password2) {
                passwordError.innerHTML = "Passwords do not match";
                return false;
            } else {
                passwordError.innerHTML = "";
                return true;
            }
        }
    </script>

</body>
</html>
