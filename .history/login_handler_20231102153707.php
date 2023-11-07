<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'KLogger.php';
$logger = new KLogger("log.txt", KLogger::WARN);

$username = $_POST['username'];
$password = $_POST['password'];
$logger->LogDebug("User [{$username}] attempting to log in");

// Check the database for the provided username and password
require_once 'Dao.php'; // Include your Dao class

$dao = new Dao();
if ($dao->validateUser($username, $password)) {
    $_SESSION['auth'] = true;
    $_SESSION['message'] = 'Successfully logged in!';
    header("Location: index.php");
    exit();
} else {
    $_SESSION['message'] = 'Invalid Username or password';
    header("Location: login.php");
    exit();
}
