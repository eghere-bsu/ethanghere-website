$(document).ready(function () {
   // Open login-signup modal
   $('.login-modal').click(function () {
      $('#login-signup-modal').show();
      $('#login-form').show();
      $('#signup-form').hide();
      $('.signup').removeClass('active');
      $('.login').addClass('active');
   });

   // Login button
   $('.login').click(function () {
      $('#login-form').show();
      $('#signup-form').hide();
      $('.signup').removeClass('active');
      $('.login').addClass('active');
   });

   // Show the signup form when the signup button is clicked
   $('.signup').click(function () {
      $('#signup-form').show();
      $('#login-form').hide();
      $('.login').removeClass('active');
      $('.signup').addClass('active');
   });

   // Close modal
   $('.modal-close').click(function () {
      $('#login-signup-modal').hide();
   });

   //Handle modal opening from a redirect
   if (window.location.href.indexOf('#login') !== -1 || window.location.href.indexOf('#signup') !== -1) {
      $('#login-signup-modal').show();

      if (window.location.href.indexOf('#login') !== -1) {
         $('#login-form').show();
         $('#signup-form').hide();
         $('.login').addClass('active');
         $('.signup').removeClass('active');
      } else {
         $('#signup-form').show();
         $('#login-form').hide();
         $('.signup').addClass('active');
         $('.login').removeClass('active');
      }
   }
});
