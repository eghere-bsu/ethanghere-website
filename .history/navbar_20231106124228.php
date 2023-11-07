<?php 
   session_start();
   ini_set('display_errors', 1);
   error_reporting(E_ALL);
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
   <?php if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) { ?>
      <a href="logout.php">Log Out</a>
   <?php } else { ?>
      <a class="<?php if ($page == 'login') { echo 'active'; } ?>" href='login.php'>Log In</a>
  <?php } ?>
</div>
