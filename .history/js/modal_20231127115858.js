if (typeof jQuery === 'undefined') {
   alert('jQuery is not loaded!');
   return; // Exit the code execution if jQuery is not loaded
}

alert('loading')
$(document).ready(function () {
   console.log('it works!!');
});

// $(document).ready(function () {
//    // Show the modal when clicking the button
//    $('.login').click(function () {
//       $('#login-signup-modal').show();
//    });

//    // Hide the modal when clicking the close button
//    $('.modal-close').click(function () {
//       $('#login-signup-modal').hide();
//    });

//    // Switch between tabs
//    $('#login-tab').show(); // Show the login tab by default

//    $('.tab a').click(function (e) {
//       e.preventDefault();
//       $(this).parent().addClass('active');
//       $(this).parent().siblings().removeClass('active');
//       var tabContent = $(this).attr('href');
//       $(tabContent).show();
//       $(tabContent).siblings('.tab').hide();
//    });
// });
