<?php
   session_start();
   $page = 'login';
   include_once 'navbar.php';
?>

<html>
   <h1>Sign Up</h1>
   <form method="post" action="signup_handler.php">
      <label for="username">Username:</label>
      <input type="text" id="username" username="username">
      <label for="password">Password:</label>
      <input type="password" id="password" password="password">
      <input type="submit" value="Create Account">
   </form>
</html>
<?php include_once 'footer.html'; ?>
