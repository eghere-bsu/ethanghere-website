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

