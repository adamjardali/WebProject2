<?php


function returnJsonArray($fileName){
    $data = file_get_contents("/Users/adamjardali/Desktop/WebProject/Database"
 . $fileName);

    if ($data === false) {
        // Unable to read the file, handle the error as needed
        return false;
    }

    // Decode the JSON data
    $data = json_decode($data, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        // Error decoding JSON, handle the error as needed
        return false;
    }

    return $data;
}


function getGalleryImages(){
    $imagesData = returnJsonArray('/imagesDB.json');
    $htmlImageArray = array();

    foreach ($imagesData as $image) {
        // Assuming each $image has a key 'img' containing the image name (e.g., "image_name.jpg")
        $imgAttribute =  $image['img'];
        $htmlImageArray[] = $imgAttribute;
    }

    return $htmlImageArray;
}



function getByUsername($username) {
    // Read the contents of UsersDB.json
    $usersData = returnJsonArray('/UsersDB.json');


    // Loop through users and check if the given username exists
    foreach ($usersData as $user) {
        if ($user['UserName'] === $username) {
            // Username exists, return the user data or perform further actions
            return $user;
        }
    }

    // Username not found
    return false;
}




function authenticateUser($username, $password) {
    // Read the contents of UsersDB.json
    $user = getByUsername($username);


    if($user === false){
        return false;
    }

    if($user['Password'] === $password){
        return $user;
    }

    return false;

}

// authenticateUser("aa","sss");


function addUserToDatabase($userName, $fullName, $password, $dateOfBirth, $sex) {
    // Check if the UserName is already used
    $user = getByUsername($userName);

    if ($user !== false) {
        return false;
    }

    // Create a new user record
    $newUser = [
        'UserName' => $userName,
        'FullName' => $fullName,
        'Password' => $password,
        'DateOfBirth' => $dateOfBirth,
        'Sex' => $sex
    ];

    // Read the existing data from UsersDB.json
    $usersData = file_get_contents("/Users/adamjardali/Desktop/WebProject/Database/UsersDB.json"); // Use the global variable here
    $users = json_decode($usersData, true);

    // If the file does not exist or is empty, create a new array
    if ($users === null) {
        $users = [];
    }

    // Append the new user to the array
    $users[] = $newUser;

    // Encode the array back to JSON
    $jsonUsers = json_encode($users, JSON_PRETTY_PRINT);

    // Save the updated JSON data back to the file
    file_put_contents("/Users/adamjardali/Desktop/WebProject/Database/UsersDB.json", $jsonUsers); // Use the global variable here

    // You can return the user ID or any other relevant information if needed
    return true;
}





?>
