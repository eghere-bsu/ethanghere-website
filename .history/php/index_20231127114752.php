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
      <a href="../assets/resume.pdf" class="button" onclick="openModal()">Resume</a>
      <a href="#" class="button login">Log In</a>
    </span>
    <div class="modal" id="login-signup-modal">
      <div class="modal-content">
        <div class="modal-header">
          <h2>Log In / Sign Up</h2>
          <button class="modal-close" onclick="closeModal()">&times;</button>
        </div>
        <div class="modal-body">
          <div class="tab" id="login-tab">
            <h2>Log In</h2>
            <form id="login-form">
              <label for="login-password">Password:</label>
              <input type="password" id="login-password" name="password" required>
              <button type="submit">Log In</button>
            </form>
          </div>
          <div class="tab" id="signup-tab" style="display: none;">
            <h2>Sign Up</h2>
            <form id="signup-form">
              <label for="signup-name">Name:</label>
              <input type="text" id="signup-name" name="name" required>
              <label for="signup-password">Password:</label>
              <input type="password" id="signup-password" name="password" required>
              <button type="submit">Sign Up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
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
    <p>Ethan Ghere 2023. <a href="login.php" class="button">Log in</a></p>
  </section>
  <script src="../js/jquery-3.7.1-min.js"></script>
  <script src="../js/scroll.js"></script>
  <script src="../js/modal.js"></script>
</body>


