<?php
   session_start();
   $page = 'login';
   include_once 'navbar.php';
   include_once 'footer.html';
   
?>

<html>
   <h1>Log In</h1>
   <?php 
      if(isset($_SESSION['message'])) {
         echo $_SESSION['message'] ;
         unset($_SESSION['message']);
      }
   ?>
   <form method="post" action="login_handler.php">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username"><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password"><br><br>
      <input type="submit" value="Send Request"><br>
   </form>
   <span>
      <h3>Want to make an account? <a href="signup.php">Sign up</a> here.</h3>
   </span>
</html>
