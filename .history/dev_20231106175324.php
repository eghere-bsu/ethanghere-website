<?php 
   $page = 'dev';
   require_once 'navbar.php';
   require_once 'Dao.php';
   $dao = new Dao();
   $display = 'none';
   //Check if user has permission to create a post
   if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
      if (isset($_SESSION['username']) && ($dao->getPowerlvl($_SESSION['username']) == 1)) {
         $display = 'inline'; //show "create post" button
      }
   } 
?>


<div style="<?php echo 'display: ' . $display . ';'?>">
   <h1>Add a New Post</h1>
   <?php 
      if(isset($_SESSION['message'])) {
         echo htmlspecialchars($_SESSION['message'], ENT_QUOTES, 'UTF-8');
         unset($_SESSION['message']);
      }
   ?>
   <form action="post_handler.php" method="post" enctype="multipart/form-data">
      <label for="title">Title:</label><br>
      <input type="text" id="title" name="title" required><br>

      <label for="description">Description:</label><br>
      <textarea id="description" name="description" rows="4" cols="50"></textarea><br>

      <label for="post_link">Post Link:</label>
      <input type="text" id="post_link" name="post_link"><br>

      <label for="image_url">Image URL:</label>
      <input type="text" id="image_url" name="image_url"><br>

      <label for="category">Category:</label>
      <input type="text" id="category" name="category"><br>


      <input type="submit" value="Submit">
   </form>
</div>
<?php
   require_once 'footer.php';
?>