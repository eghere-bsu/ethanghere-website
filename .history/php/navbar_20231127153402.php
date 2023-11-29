<?php
  session_start();
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['auth']);
    unset($_SESSION['username']);
    unset($_SESSION['powerlvl']);
  }
  $loggedIn = isset($_SESSION['auth']) && $_SESSION['auth'] === true;
  $loginText = $loggedIn ? 'Log Out' : 'Log In';
  $loginHref = $loggedIn ? 'login.php?action=logout' : 'login.php';

  $loginButton = '<a class="' . ($page == 'login' ? 'active' : '') . '" href="' . $loginHref . '">' . $loginText . '</a>';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Ethan Ghere</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="icon" type="image/x-icon" href="../favicon.ico">
</head>

<nav>
  <div class="container">
    <ul>
      <li class="home active">
        <a href="#home" class="navlink">Home</a>
      </li>
      <li class="skills">
        <a href="#skills" class="navlink">Skills</a>
      </li>
      <li class="portfolio">
        <a href="#portfolio" class="navlink">Portfolio</a>
      </li>
      <li class="contact">
        <a href="#contact" class="navlink">Contact</a>
      </li>
    </ul>
  </div>
</nav>