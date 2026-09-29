<?php
session_start();

//removing variables / key of associative array
unset($_SESSION['isLoggedIn']);

//logout suer
session_destroy();

//redirect to login form
header("Location: login_form.php");
exit;


?>