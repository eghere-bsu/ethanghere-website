unset($_SESSION['auth']);
unset($_SESSION['username']);
unset($_SESSION['powerlvl']); // Unset powerlvl session variable

header("Location: login.php"); // Redirect to login page
exit;
