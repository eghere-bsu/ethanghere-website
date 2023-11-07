<?php 
   $page = 'dev';
   include_once 'navbar.php';
?>
<body>
   <h1>Dev Page</h1>
   <?php
   if (isset($_SESSION['powerlvl']) && $_SESSION['powerlvl'] == 1) {
      // User has power level 1, so show the "Create Post" button
      echo '<button id="showPostFormButton" name="showPostFormButton">Create Post</button>';
   }
   if (isset($_POST['showPostFormButton'])) {
   // User clicked the "Create Post" button, so show the form\
   include_once 'post.php';
   }
   ?>
</body>
<?php
   include_once 'footer.php';
?>