$(document).ready(function () {
   // Open login-signup modal
   $('.login-modal').click(function () {
      $('#login-signup-modal').show();
      $('#login-form').show();
      $('#signup-form').hide();
      $('.signup').removeClass('active');
      $(this).closest('li').addClass('active');
   });

   // Login button
   $('.login').click(function () {
      $('#login-form').show();
      $('#signup-form').hide();
      $('.container ul li').removeClass('active');
      $(this).closest('li').addClass('active');
   });

   // Show the signup form when the signup button is clicked
   $('.signup').click(function () {
      $('#signup-form').show();
      $('#login-form').hide();
      $('span .container ul li').removeClass('active');
      $(this).closest('li').addClass('active');
   });

   // Close modal
   $('.modal-close').click(function () {
      $('#login-signup-modal').hide();
   });
});
