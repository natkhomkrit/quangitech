<?php
$con = new mysqli("localhost", "quangitech_web", "yTss3Cj8", "quangitech_web");

if ($con->connect_errno) {
    echo "Failed to connect to MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
    exit();
}

$url = "https://quangitech.com/";

$blog_bonus = 10;   // Blog Activation Bonus
$art_bonus  = 10;   // Article Activation Bonus
$login_bonus = 10;  // Daily Login Bonus

$money = "$";
?>
