<?php
session_start();

require_once 'KLogger.php';
$logger = new KLogger ("log.txt" , KLogger::WARN);
sleep(2);

$username = $_POST['username'];
$password = $_POST['password'];
$logger->LogDebug("User [{$username}] attempting to create account");

$_SESSION['message_type'] = "happy";

$dao = new Dao();
$dao->saveComment($comment, $imagePath);
$_SESSION['message'] = "Thanks for signing up! Please login below";
header("Location: login.php");
