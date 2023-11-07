<?php
session_start();
require_once 'Dao.php';

// require_once 'KLogger.php';
// $logger = new KLogger ("log.txt" , KLogger::WARN);

$username = $_POST['username'];
$password = $_POST['password'];
$dao = new Dao();

if (empty($username) || empty($password)) {
    $_SESSION['message'] = "Username and password are required.";
    header("Location: signup.php");
    exit;
} else if ($dao->usernameExists($username)) {
   $_SESSION['message'] = "Username already exists. Please choose a different one.";
   header("Location: signup.php"); 
   exit;
} else {
   $dao->createUser($username, $password);
   $_SESSION['message'] = "Thanks for signing up! Please login.";
   header("Location: login.php");
}

