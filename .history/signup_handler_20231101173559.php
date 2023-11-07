<?php
session_start();

require_once 'KLogger.php';
$logger = new KLogger ("log.txt" , KLogger::WARN);
echo "<html><h1>signup_handler</h1></html>";
sleep(2);

$username = $_POST['username'];
$password = $_POST['password'];
$logger->LogDebug("User [{$username}] attempting to create account");

$dao = new Dao();
echo "<html><h1>dao created</h1></html>";
$dao->createUser($username, $password);
echo "<html><h1>user created</h1></html>";
$_SESSION['message'] = "Thanks for signing up!";
header("Location: signup.php");