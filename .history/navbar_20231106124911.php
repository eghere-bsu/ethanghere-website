<?php 
   session_start();
   ini_set('display_errors', 1);
   error_reporting(E_ALL);

   $loggedIn = isset($_SESSION['auth']) && $_SESSION['auth'] === true;
   $loginText = $loggedIn ? 'Log Out' : 'Log In';
   $loginHref = $loggedIn ? 'logout.php' : 'login.php';

   $loginButton = '<a class="' . ($page == 'login' ? 'active' : '') . '" href="' . $loginHref . '">' . $loginText . '</a>';
?>

<head>
	<link rel="stylesheet" href="styles.css">
   <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<header><title>Ethan Ghere</title></header>
<div class="nav">
   <a class="<?php if ($page == 'home') 
                 { echo 'active'; }?>" href='index.php'>Home</a>
   <a class="<?php if ($page == 'dev')
                 { echo 'active'; }?>" href='dev.php'>Dev</a>	
   <a href="assets/resume.pdf">Resume</a>
   <?php echo $loginButton; ?>
</div>
