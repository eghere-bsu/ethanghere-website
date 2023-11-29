<?php
class Widgets
{
   public static function renderCards($posts, $powerlvl) {
      echo '<div class="card-container">';
      echo '<ul>';
    
      foreach ($posts as $index => $post) {
        echo '<li>';
    
        echo '<div class="left">';
        echo '<img src="' . $post['image_url'] . '" style="max-width: 100%; max-height: 100%; object-fit: contain;">';
        echo '<a href="' . $post['post_link'] . '" class="button small">Visit</a>';
        echo '</div>';
    
        echo '<div class="right">';
        echo '<span>';
        echo '<h3>' . $post['title'] . '</h3>';
        if ($powerlvl === 1) {echo '<a href="post_handler.php?action=delete&id=' . $post['post_id'] . '" class="close">X</a>';}
        echo '</span>';
        echo '<p>' . $post['description'] . '</p>';
        echo '<span class="category">' . $post['category'] . '</span>';
        echo '</div>';

        echo '</li>'; 
      }
      echo '</ul>';
      echo '</div>';
      if ($powerlvl === 1) {echo "<a href='#post' class='button post-modal'>New Post</a>";}
    }
    
   public static function renderSkills($skillsDirectory) {
      $skills = glob($skillsDirectory . '/*.svg');

      foreach ($skills as $skill) {
         $svgFilename = basename($skill);
         $svgPath = $skillsDirectory . '/' . $svgFilename;

         echo '<li>';
         echo '<img src="' . $svgPath . '" style="max-height:100%;">';
         echo '</li>';
      }
   }
}
