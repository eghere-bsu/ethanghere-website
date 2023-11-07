<?php
session_start();
require_once 'Dao.php'; // Include your Dao class
require_once 'KLogger.php';

$dao = new Dao();
$log = new Klogger("log.txt", Klogger::WARN);

$username = $_POST['username'];
$password = $_POST['password'];
$log->LogDebug("User [$username] attempting to log in");

if (empty($username) || empty($password)) {
  $_SESSION['message'] = "Username and password are required.";
} else if ($dao->validateUser($username, $password)) {
  $_SESSION['auth'] = true;
  $_SESSION['message'] = 'Successfully logged in!';
  $_SESSION['username'] = $username;
  $_SESSION['powerlvl'] = $userInfo['powerlvl'];
} else {
  $_SESSION['message'] = 'Invalid Username or password:' . $username . $password;
}

echo $_SESSION['message'];

header("Location: login.php"); 
exit;