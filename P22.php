<?php
// Set a cookie with a name, value, and expiration time (in seconds)
setcookie("username", "Sahil", time() + 3600); // Expires in 1 hour
if (isset($_COOKIE["username"])) {
    $username = $_COOKIE["username"];
    echo "Cookies :: Welcome back, $username!\n\n";
} else {
    echo "Cookies :: No username cookie found.";
}

session_start();
$_SESSION["username"] = "Sahil";
$_SESSION["user_id"] = 123;
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    $user_id = $_SESSION["user_id"];
    echo "\n\nSeesion ::  Welcome back, $username (User ID: $user_id)!";
} else {
    echo "Seesion :: No session data found.";
}
session_destroy();
?>
