<?php 
   $page = 'dev';
   require_once 'navbar.php';
   include_once 'post.php';
?>
<body>
   <h1>Dev Page</h1>
   <?php
   // if (isset($_SESSION['powerlvl']) && $_SESSION['powerlvl'] == 1) {
   //    // User has power level 1, so show the "Create Post" button
   //    echo '<button id="showPostFormButton" name="showPostFormButton">Create Post</button>';
   // }
   ?>
</body>
<?php
   include_once 'post.php';
   require_once 'footer.php';
?>