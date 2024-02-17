<?php
session_start();
require_once('zip.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['zip'])) {
    $userZip = $_POST['zip'];

    if (array_key_exists($userZip, $zip)) {
        $_SESSION['found_city'] = $zip[$userZip];
        header("Location: success.php");
        exit;
    } else {
        $_SESSION['Wrong Zip Code'] = 'City not found. Please try again.';
        header("Location:success.php");
        exit;
    }
} else {
    $_SESSION['Wrong Zip Code'] = 'Please try again.';
    header("Location: index.php");
    exit;
}
?>
