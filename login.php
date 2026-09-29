<?php
session_start();


// login check
if (isset($_SESSION['isLoggedIn']) == true) {

    if ($_SESSION['isLoggedIn'] == "YES") {
        header("Location: profile.php");
        exit;
    }
}

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

// exit;

// for dummy authentication
$usernameOriginal = "admin@gmail.com";
$passwordOriginal = "123456";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // get user input
    $email = $_POST['email'];
    $pwd   = $_POST['pwd'];

    if ($email  == $usernameOriginal && $pwd == $passwordOriginal) {

        //startig session
        $_SESSION["isLoggedIn"] = "YES";

        // redirect to profile page
        header("Location: profile.php");
        exit;
    } else {
        $_SESSION["isLoggedIn"] = "NO";
        // redirect to loign page
        header("Location: login_form.php");
        exit;
    }
} else {

    $_SESSION["isLoggedIn"] = "NO";
    // redirect to loign page
    header("Location: login_form.php");
    exit;
}
