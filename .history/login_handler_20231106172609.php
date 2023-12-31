<?php
session_start();
require_once 'Dao.php'; // Include your Dao class
require_once 'KLogger.php';

$dao = new Dao();
$log = new Klogger("log.txt", Klogger::INFO);

$username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
$password = $_POST['password'];
$log->LogInfo("User [$username] attempting to log in");

if (empty($username) || empty($password)) {
  $_SESSION['message'] = "Username and password are required.";
  $log->LogWarn("User login fail: no credentials");
} else if ($dao->validateUser($username, $password)) {
  $powerlvl = $dao->getPowerlvl($username);
  $_SESSION['auth'] = true;
  $_SESSION['username'] = $username;
  $_SESSION['powerlvl'] = $userRow['powerlvl'];
  $_SESSION['message'] = 'Successfully logged in!';
  $log->LogInfo("User [$username] successfully logged in");
} else {
  $_SESSION['message'] = 'Invalid Username or password';
  $log->LogWarn("User [$username] login fail: invalid credentials");
}

echo $_SESSION['message'];

header("Location: login.php"); 
exit;