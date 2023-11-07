<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

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
    header("Location: login.php");
    exit();
} else {
    $_SESSION['message'] = 'Invalid Username or password';
    header("Location: login.php");
    exit();
}
