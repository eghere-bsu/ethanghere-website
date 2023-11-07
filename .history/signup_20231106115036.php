<?php
   session_start();
   $page = 'login';
   include_once 'navbar.php';
?>

<html>
   <h1>Sign Up</h1>
   <?php 
      if(isset($_SESSION['message'])) {
         echo $_SESSION['message'] ;
         unset($_SESSION['message']);
      }
   ?>
   <form method="post" action="signup_handler.php">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username"><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password"><br>
      <input type="submit" value="Create Account">
   </form>
</html>

<?php include_once 'footer.php'; ?>
