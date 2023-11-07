<?php 
   $page = 'dev';
   require_once 'navbar.php';
   require_once 'Dao.php';
?>
<body>
   <?php
   $dao = new Dao();
   //Check if user has permission to create a post
   if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
      if (isset($_SESSION['username']) && $dao->getPowerlvl($_SESSION['username'] == 1)) {
         echo 'user has permission';
      }
   } 
   
   ?>
</body>
<?php
   require_once 'footer.php';
?>