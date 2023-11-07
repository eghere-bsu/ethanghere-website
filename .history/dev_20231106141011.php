<?php 
   $page = 'dev';
   require_once 'navbar.php';
?>
<body>
   <h1>Dev Page</h1>
   <?php
   if (isset($_SESSION['powerlvl']) && $_SESSION['powerlvl'] == 1) {
      // User has power level 1, so show the "Create Post" button
      echo '<span>user has permission</span>';
   }
   ?>
</body>
<?php
   require_once 'footer.php';
?>