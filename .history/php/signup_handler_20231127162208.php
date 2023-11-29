<?php
session_start();
require_once 'Dao.php';

// require_once 'KLogger.php';
// $logger = new KLogger ("log.txt" , KLogger::WARN);

$username = $_POST['username'];
$password = $_POST['password'];
$pwconfirm = $_POST['pwconfirm'];
$usernamePattern = "/^[a-zA-Z0-9-]{3,20}$/"; //alphanumeric, underline, hyphens, 3-20 chars
$passwordPattern = "/^(?=.*\d)(?=.*[a-zA-Z]).{6,255}$/"; //1+ letters, 1+ numbers, 6-255 chars


$dao = new Dao();

if (empty($username) || empty($password)) {
    $_SESSION['message'] = "Username and password are required.";
    header("Location: signup.php");
    exit;
} elseif ($dao->usernameExists($username)) {
   $_SESSION['message'] = "Username already exists. Please choose a different one.";
   header("Location: signup.php"); 
   exit;
} elseif (!preg_match($usernamePattern, $username)) {
   $_SESSION['message'] = "Invalid username: Must be only letters, numbers, underscores, and hyphens 3-20 characters in length.";
   header("Location: signup.php");
   exit;
} elseif (!preg_match($passwordPattern, $password)) {
   $_SESSION['message'] = "Invalid password format. It should contain at least one letter, one number, and be 6 characters or longer.";
   header("Location: signup.php");
   exit;
} else {
   $dao->createUser($username, $password);
   $_SESSION['message'] = "Thanks for signing up! Please login.";
   header("Location: login.php");
}
