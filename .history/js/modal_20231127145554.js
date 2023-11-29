$(document).ready(function () {
   // Show the modal when clicking the button
   $('.login-modal').click(function () {
      $('#login-signup-modal').show();
   });

   // Hide the modal when clicking the close button
   $('.modal-close').click(function () {
      $('#login-signup-modal').hide();
   });

   // Show the login form when the login button is clicked
   $('.login').click(function () {
      $('#login-form').show();
      $('#signup-form').hide();
   });

   // Show the signup form when the signup button is clicked
   $('.signup').click(function () {
      $('#signup-form').show();
      $('#login-form').hide();
   });
});
