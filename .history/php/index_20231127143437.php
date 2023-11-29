<?php
  require_once 'navbar.php';
?>

<body>
  <section id="home">
    <h1>Ethan Ghere</h1>
    <p>Boise State CS major. Aspiring software developer. Forever learner.</p>
    <span>
      <a href="https://www.linkedin.com/in/ethan-ghere-08532a23a" class="button linkedin"><img src="../svg/icons8-linkedin.svg">LinkedIn</a>
      <a href="https://www.facebook.com/profile.php?id=100085450836702" class="button facebook"><img src="../svg/icons8-facebook-24.svg">Facebook</a>
      <a href="https://github.com/eghere-bsu" class="button"><img src="../svg/icons8-github-24.png">GitHub</a>
      <a href="../assets/resume.pdf" class="button">Resume</a>
    </span>
  </section>
  <section id="skills">
    <h1>Skills</h1>
  </section>
  <section id="portfolio">
    <h1>Portfolio</h1>
  </section>
  <section id="contact">
    <h1>Contact</h1>
  </section>
  <section id="footer">
    <p>Ethan Ghere 2023. <a href="#login" class="button login-modal">Log In</a></p>
    <div class="modal" id="login-signup-modal">
      <div class="modal-content">
        <button class="modal-close" onclick="closeModal()">X</button>
        <span class="container">
          <ul>
            <li class="login active">
              <a href="#login">Log In</a>
            </li>
            <li class="signup">
              <a href="#signup">Sign Up</a>
            </li>
          </ul>
        </span>
        <form method="post" action="login_handler.php" id="login-form">
          <input placeholder="Username: " type="username" id="username" name="username" required>
          <input placeholder="Password: " type="password" id="password" name="password" required>
          <button type="submit" class="button">Log In</button>
        </form>
        <div class="modal-body"></div>
      </div>
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="../js/modal.js"></script>
  <script src="../js/scroll.js"></script>
</body>