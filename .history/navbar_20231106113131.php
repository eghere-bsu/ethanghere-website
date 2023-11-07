<?php 
   // session_start();
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
   <a class="<?php if ($page == 'blog')
                 { echo 'active'; }?>" href='blog.php'>Blog</a>	
   <a href="assets/resume.pdf">Resume</a>
   <a class="<?php if ($page == 'login')
                 { echo 'active'; }?>" href='login.php'>Log In</a>
</div>
