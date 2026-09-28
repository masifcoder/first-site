<?php

// echo "<pre>";

// print_r($_SERVER);

// echo "</pre>";

// for dummy authentication
$usernameOriginal = "admin@gmail.com";
$passwordOriginal = "123456";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // get user input
    $email = $_POST['email'];
    $pwd   = $_POST['pwd'];

    if ($email  == $usernameOriginal && $pwd == $passwordOriginal) {

        // redirect to profile page
        header("Location: profile.php");
        exit;
    } else {
        // redirect to loign page
        header("Location: login_form.php");
        exit;
    }
} else {

    // redirect to loign page
    header("Location: login_form.php");
    exit;
}
