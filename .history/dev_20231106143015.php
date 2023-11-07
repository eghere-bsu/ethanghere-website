<?php 
   $page = 'dev';
   require_once 'navbar.php';
   require_once 'Dao.php';
?>
<body>
   <?php
   $dao = new Dao();
   

   if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
      if (isset($_SESSION['username'])) {
         echo $dao->getPowerlvl($_SESSION['username']);;
      }
   } 
   
   ?>
</body>
<?php
   require_once 'footer.php';
?>