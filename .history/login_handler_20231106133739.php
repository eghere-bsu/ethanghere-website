<?php
session_start();
require_once 'Dao.php'; // Include your Dao class
require_once 'KLogger.php';

$dao = new Dao();
$log = new Klogger("log.txt", Klogger::INFO);

$username = $_POST['username'];
$password = $_POST['password'];
$log->LogInfo("User [$username] attempting to log in");

if (empty($username) || empty($password)) {
  $_SESSION['message'] = "Username and password are required.";
  $log->LogWarn("User login fail: no credentials");
} else if ($dao->validateUser($username, $password)) {
  $_SESSION['auth'] = true;
  $_SESSION['message'] = 'Successfully logged in!';
  $_SESSION['username'] = $username;
  $_SESSION['powerlvl'] = $userInfo['powerlvl'];
  $log->LogInfo("User [$username] successfully logged in");
  header("index.php");
  exit;
} else {
  $_SESSION['message'] = 'Invalid Username or password:' . $username . $password;
  $log->LogWarn("User [$username] login fail: invalid credentials");
}

echo $_SESSION['message'];

header("Location: login.php"); 
exit;