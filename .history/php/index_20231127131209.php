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
      <div class="form-container">  
        <form id="contact" action="" method="post">
          <h3>Colorlib Contact Form</h3>
          <h4>Contact us for custom quote</h4>
          <fieldset>
            <input placeholder="Your name" type="text" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Your Email Address" type="email" tabindex="2" required>
          </fieldset>
          <fieldset>
            <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
          </fieldset>
          <fieldset>
            <input placeholder="Your Web Site (optional)" type="url" tabindex="4" required>
          </fieldset>
          <fieldset>
            <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
          </fieldset>
          <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
          </fieldset>
          <p class="copyright">Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a></p>
        </form>
      </div>
    </div>
    <!-- <div class="modal" id="login-signup-modal">
      <div class="modal-content">
        <button class="modal-close" onclick="closeModal()">&times;</button>
        <div class="modal-body">
      </div>
    </div> -->
  </section>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="../js/modal.js"></script>
  <script src="../js/scroll.js"></script>
</body>

<!-- <div class="tab" id="signup-tab" style="display: none;">
            <h2>Sign Up</h2>
            <form id="signup-form">
              <label for="signup-name">Name:</label>
              <input type="text" id="signup-name" name="name" required>
              <label for="signup-password">Password:</label>
              <input type="password" id="signup-password" name="password" required>
              <button type="submit">Sign Up</button>
            </form>
          </div> -->

