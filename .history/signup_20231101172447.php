<?php
   session_start();
   $page = 'login';
   include_once 'navbar.php';
   if(isset($_SESSION['message'])) {
      echo "$_SESSION['message']" ;
      unset($_SESSION['message']);
   }
?>

<html>
   <h1>Sign Up</h1>
   <form method="post" action="signup_handler.php">
      <label for="username">Username:</label>
      <input type="text" id="username" username="username"><br>
      <label for="password">Password:</label>
      <input type="password" id="password" password="password"><br>
      <input type="submit" value="Create Account">
   </form>
</html>

<?php include_once 'footer.html'; ?>
