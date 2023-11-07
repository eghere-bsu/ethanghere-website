<?php
session_start();

require_once 'KLogger.php';
$logger = new KLogger ("log.txt" , KLogger::WARN);
echo "<html><h1>signup_handler</h1></html>";
sleep(2);

$username = $_POST['username'];
$password = $_POST['password'];
$logger->LogDebug("User [{$username}] attempting to create account");

// $_SESSION['message_type'] = "happy";

// $dao = new Dao();
// $dao->createUser($username, $password);
$_SESSION['message'] = "Thanks for signing up!";
header("Location: signup.php");
