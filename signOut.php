<?php
session_start();
$_SESSION['url'] = $_SERVER['HTTP_REFERER'];
if (isset($_SESSION['url'])) {
    $url = $_SESSION['url'];
} else {
    $url = "index.php";
}

session_destroy();
header("location:" . $url);
