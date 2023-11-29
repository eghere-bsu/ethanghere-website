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
    <p>Ethan Ghere 2023. <a href="#login" id="modal_trigger" class="button">Log In</a></p>
    <div id="modal" class="popupContainer" style="display:none;">
				<header class="popupHeader">
						<span class="header_title">Login</span>
						<span class="modal_close"><i class="fa fa-times"></i></span>
				</header>

				<section class="popupBody">
						<!-- Social Login -->
						<div class="social_login">
								<div class="">
										<a href="#" class="social_box fb">
												<span class="icon"><i class="fa fa-facebook"></i></span>
												<span class="icon_title">Connect with Facebook</span>

										</a>

										<a href="#" class="social_box google">
												<span class="icon"><i class="fa fa-google-plus"></i></span>
												<span class="icon_title">Connect with Google</span>
										</a>
								</div>

								<div class="centeredText">
										<span>Or use your Email address</span>
								</div>

								<div class="action_btns">
										<div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
										<div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
								</div>
						</div>

						<!-- Username & Password Login form -->
						<div class="user_login">
								<form>
										<label>Email / Username</label>
										<input type="text" />
										<br />

										<label>Password</label>
										<input type="password" />
										<br />

										<div class="checkbox">
												<input id="remember" type="checkbox" />
												<label for="remember">Remember me on this computer</label>
										</div>

										<div class="action_btns">
												<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
												<div class="one_half last"><a href="#" class="btn btn_red">Login</a></div>
										</div>
								</form>

								<a href="#" class="forgot_password">Forgot password?</a>
						</div>

						<!-- Register Form -->
						<div class="user_register">
								<form>
										<label>Full Name</label>
										<input type="text" />
										<br />

										<label>Email Address</label>
										<input type="email" />
										<br />

										<label>Password</label>
										<input type="password" />
										<br />

										<div class="checkbox">
												<input id="send_updates" type="checkbox" />
												<label for="send_updates">Send me occasional email updates</label>
										</div>

										<div class="action_btns">
												<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
												<div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
										</div>
								</form>
						</div>
				</section>
		</div>
  </section>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="../js/modal.js"></script>
  <script src="../js/login.js"></script>
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

