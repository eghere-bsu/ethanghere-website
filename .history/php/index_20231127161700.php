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
$loginHref = $loggedIn ? 'login_handler.php?action=logout' : '#login';
$loginClass = $loggedIn ? 'button' : 'button login-modal';
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

<body>
  <!-- Home -->
  <section id="home">
    <h1>Ethan Ghere</h1>
    <p>Boise State CS major. Aspiring software developer. Forever learner.</p>
    <span>
      <a href="https://www.linkedin.com/in/ethan-ghere-08532a23a" class="button linkedin"><img
          src="../svg/icons8-linkedin.svg">LinkedIn</a>
      <a href="https://www.facebook.com/profile.php?id=100085450836702" class="button facebook"><img
          src="../svg/icons8-facebook-24.svg">Facebook</a>
      <a href="https://github.com/eghere-bsu" class="button"><img src="../svg/icons8-github-24.png">GitHub</a>
      <a href="../assets/resume.pdf" class="button">Resume</a>
    </span>
  </section>
  <!-- Skills -->
  <section id="skills">
    <h1>Skills</h1>
  </section>
  <!-- Portfolio -->
  <section id="portfolio">
    <h1>Portfolio</h1>
  </section>
  <!-- Contact -->
  <section id="contact">
    <h1>Contact</h1>
  </section>
  <!-- Footer -->
  <section id="footer">
    <span>
      <p>Ethan Ghere 2023.
        <?php
        if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
          if (isset($_SESSION['username'])) {
            echo 'Logged in as ' . $_SESSION['username'];
          } else {
            echo 'Username not found.';
          }
        } else {
          echo 'Not logged in.';
        }
        ?>
        <a href="<?php echo $loginHref ?>" class="<?php echo $loginClass ?>">
          <?php echo $loginText ?>
        </a>
      </p>
    </span>
  </section>
  <div class="modal" id="login-signup-modal">
    <div class="modal-content">
      <button class="modal-close" onclick="closeModal()">X</button>
      <span class="container">
        <ul>
          <li class="login">
            <a href="#login" class="navlink">Log In</a>
          </li>
          <li class="signup">
            <a href="#signup" class="navlink">Sign Up</a>
          </li>
        </ul>
      </span>
      <span>
        <?php
        if (isset($_SESSION['message'])) {
          echo htmlspecialchars($_SESSION['message'], ENT_QUOTES, 'UTF-8');
          unset($_SESSION['message']);
        }
        ?>
      </span>
      <form method="post" action="login_handler.php" id="login-form">
        <input placeholder="Username: " type="username" id="username" name="username" required>
        <input placeholder="Password: " type="password" id="password" name="password" required>
        <button type="submit" class="button">Log In</button>
      </form>
      <form method="post" action="signup_handler.php" id="signup-form">
        <input placeholder="Username: " type="username" id="username" name="username" required>
        <input placeholder="Password: " type="password" id="password" name="password" required>
        <input placeholder="Confirm password: " type="password" id="pwconfirm" name="pwconfirm" required>
        <button type="submit" class="button">Sign Up</button>
      </form>
      <div class="modal-body"></div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="../js/login.js"></script>
  <script src="../js/scroll.js"></script>
</body>