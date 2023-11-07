<?php 
   $page = 'dev';
   include_once 'navbar.php';
   require_once 'Dao.php';

   $dao = new Dao();
   $posts = $dao->getPosts();

   // Initialize a flag to keep track of the first post
   $firstPost = true;
?>




<html>
   <head>
      <link rel="stylesheet" href="dev.css">
   </head>
   <body>
      <div class="support-grid"></div>
      <div class="band">
      <?php
         foreach ($posts as $index => $post) {
            // Determine the CSS class based on the index
            $cssClass = ($firstPost) ? 'item-1' : 'item-2';

            // Output the HTML for the post card
            echo '<div class="' . $cssClass . '">';
            echo '<a href="' . $post['post_link'] . '" class="card">';
            echo '<div class="thumb" style="background-image: url(' . $post['image_url'] . ');"></div>';
            echo '<article>';
            echo '<h1>' . $post['title'] . '</h1>';
            echo '<p>' . $post['description'] . '</p>';
            echo '<span>' . $post['category'] . '</span>';
            echo '</article>';
            echo '</a>';
            echo '</div>';

            // Set the flag to false after the first post
            if ($firstPost) {
               $firstPost = false;
            }
         }
      ?>
      </div>
   </body>
</html>

<?php include_once 'footer.php';