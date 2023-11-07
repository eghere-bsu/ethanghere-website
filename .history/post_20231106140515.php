<style>
   .createPostButton {
      display: <?php echo ($_SESSION['powerlvl'] == 1) ? 'inline' : 'none';?>;
   }
</style>

<h1>Add a New Post</h1>
<form id ="hiddenForm" action="post_handler.php" method="post" enctype="multipart/form-data">
   <label for="title">Title:</label>
   <input type="text" id="title" name="title" required><br>

   <label for="description">Description:</label><br>
   <textarea id="description" name="description" rows="4" cols="50" required></textarea><br>

   <label for="post_link">Post Link:</label>
   <input type="text" id="post_link" name="post_link"><br>

   <label for="image_url">Image URL:</label>
   <input type="text" id="image_url" name="image_url"><br>

   <input type="submit" value="Submit">
</form>
