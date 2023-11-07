<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
  unset($_SESSION['auth']);
  unset($_SESSION['username']);
  unset($_SESSION['powerlvl']);

  header("Location: index.php"); // Redirect to home page after logging out
  exit;
}

require_once 'Dao.php'; // Include your Dao class

$dao = new Dao();
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