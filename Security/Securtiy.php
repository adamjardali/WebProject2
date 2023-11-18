<?php

function bcryptPassword($password) {
    // Set the options for the password_hash function
    $options = [
        'cost' => 12, // Adjust the cost factor based on your server's performance
    ];

    // Hash the password using bcrypt
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);

    return $hashedPassword;
}

function verifyPassword($plainPassword, $hashedPassword) {
    // Verify if the plain password matches the hashed password
    return password_verify($plainPassword, $hashedPassword);
}
?>