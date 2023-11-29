<?php
require_once 'Dao.php';
require_once 'Widgets.php';

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
      <li class="portfolio">
        <a href="#portfolio" class="navlink">Portfolio</a>
      </li>
      <li class="skills">
        <a href="#skills" class="navlink">Skills</a>
      </li>
      <li class="about">
        <a href="#about" class="navlink">About</a>
      </li>
    </ul>
  </div>
</nav>

<body>
  <!-- Home -->
  <section id="home">
    <img src="../assets/me.jpg" class="hero">
    <h1>Ethan Ghere</h1>
    <p>Boise State CS major. Aspiring software developer. Forever learner.</p>
    <span>
      <a href="https://www.linkedin.com/in/ethan-ghere-08532a23a" class="button linkedin">
        <img src="../svg/icons8-linkedin.svg">LinkedIn</a>
      <a href="https://www.facebook.com/profile.php?id=100085450836702" class="button facebook">
        <img src="../svg/icons8-facebook-48.svg" style="max-height:100%;">Facebook</a>
      <a href="https://github.com/eghere-bsu" class="button">
        <img src="../svg/icons8-github-24.png" style="max-height:100%;">GitHub</a>
      <a href="../assets/resume.pdf" class="button">Resume</a>
    </span>
  </section>

  <!-- Portfolio -->
  <section id="portfolio">
  <h1>Portfolio</h1>
  <!-- <div class="card-container">
    <ul>
      <li>
        <div class="left">
          <img src='../assets/transparent.jpg' style="max-width: 100%; max-height: 100%; object-fit: contain;">
          <a href="#" class="button small">View Site</a>
        </div>
        <div class="right">
          <span>
            <h3>Title</h3>
            <button class="close">X</button>
          </span>
          <p>This is a description of a portfolio card. Some text would go here to simulate what it would be like if I had some text here. Isn't that great? Poopy fart smelly bunghole.</p>
          <span class="category">Category or some shit</span>
        </div>
      </li>
    </ul>
  </div> -->
  <?php
  $dao = new Dao();
  $posts = $dao->getPosts();
  $powerlvl = (isset($_SESSION['powerlvl']) && $_SESSION['powerlvl'] === 1) ? 1 : 0;
  Widgets::renderCards($posts, $powerlvl);
  ?>
  </section>

  <!-- Skills -->
  <section id="skills">
  <div class="wrapper">
    <h1>Skills</h1>
    <span>
      <ul class="skills-list">
        <?php
        $skillsDirectory = '../skills';
        Widgets::renderSkills($skillsDirectory);
        ?>
      </ul>
    </span>
  </div>
  </section>
  <!-- About -->
  <section id="about">
    <h1>About Me</h1>
    <div class="about-container">
      <div class="left">
        <p>
          I learned from a young age that I have best expressed my ideas on a computer. Whether the medium is code, music, or games, I've channeled my knowledge to design projects that excel in both form and function. 
        </p><p>
          Currently, I am studying computer science at Boise State University. Through my education, I've fostered a passion for all things related to software development and design. I enjoy creating things that "just work;" I believe your projects should work for you, not the other way around.
        </p>
      </div>
      <div class="right"></div>
    </div>
  </section>
  <!-- Footer -->
  <section id="footer">
    <span>
      <p>Ethan Ghere 2023. 
        <?php
        if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
          if (isset($_SESSION['username'])) {
            echo 'Logged in as ' . $_SESSION['username'] .  '.';
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
  <!-- Login Modal -->
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
      <span class="message">
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
  <!-- New Post Modal -->
  <div class="modal" id="post-modal">
    <div class="modal-content">
      <button class="modal-close" onclick="closeModal()">X</button>
      <span class="container">
        <ul>
          <li class="post">
            <a href="#post">New Post</a>
          </li>
        </ul>
      </span>
      <span class="message">
        <?php
        if (isset($_SESSION['message'])) {
          echo htmlspecialchars($_SESSION['message'], ENT_QUOTES, 'UTF-8');
          unset($_SESSION['message']);
        }
        ?>
      </span>
      <form action="post_handler.php" method="post" enctype="multipart/form-data">
        <input placeholder="Title: " type="text" id="title" name="title" value="<?php echo isset($_SESSION['post_data']['title']) ? htmlspecialchars($_SESSION['post_data']['title'], ENT_QUOTES, 'UTF-8') : ''; ?>" required>

        <label for="description">Description:</label>
        <textarea placeholder="Description: " id="description" name="description" rows="4" cols="50"><?php echo isset($_SESSION['post_data']['description']) ? htmlspecialchars($_SESSION['post_data']['description'], ENT_QUOTES, 'UTF-8') : ''; ?></textarea><br>

        <label for="post_link">Post Link:</label>
        <input type="text" id="post_link" name="post_link" value="<?php echo isset($_SESSION['post_data']['post_link']) ? htmlspecialchars($_SESSION['post_data']['post_link'], ENT_QUOTES, 'UTF-8') : ''; ?>"><br>

        <label for="image_url">Image URL:</label>
        <input type="text" id="image_url" name="image_url" value="<?php echo isset($_SESSION['post_data']['image_url']) ? htmlspecialchars($_SESSION['post_data']['image_url'], ENT_QUOTES, 'UTF-8') : ''; ?>"><br>

        <label for="category">Category:</label>
        <input type="text" id="category" name="category" value="<?php echo isset($_SESSION['post_data']['category']) ? htmlspecialchars($_SESSION['post_data']['category'], ENT_QUOTES, 'UTF-8') : ''; ?>"><br>

        <button type="submit" class="button">Post!</button>
      </form>
      <form method="post" action="post_handler.php" id="post-form">
        <input placeholder="Username: " type="username" id="username" name="username" required>
        <input placeholder="Password: " type="password" id="password" name="password" required>
        
      </form>
      <div class="modal-body"></div>
    </div>
  </div>
  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="../js/modal.js"></script>
  <script src="../js/scroll.js"></script>
</body>