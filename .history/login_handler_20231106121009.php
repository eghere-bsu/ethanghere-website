<?php
$username = $_POST['username'];
$password = $_POST['password'];

require_once 'Dao.php'; // Include your Dao class

$dao = new Dao();
if (empty($username) || empty($password)) {
  $_SESSION['message'] = "Username and password are required.";
  header("Location: login.php"); 
  exit;
} else if ($dao->validateUser($username, $password)) {
    $_SESSION['auth'] = true;
    $_SESSION['message'] = 'Successfully logged in!';
    $_SESSION['username'] = $username;
    header("Location: login.php");
    exit();
} else {
    $_SESSION['message'] = 'Invalid Username or password:' . $username . $password;
    header("Location: login.php");
    exit();
}
