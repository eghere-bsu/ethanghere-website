<?php
class Widgets
{
   // public static function renderCards($posts) {
   //    $firstPost = true;

   //    foreach ($posts as $index => $post) {
   //       $cssClass = ($firstPost) ? 'item-1' : 'item-2';

   //       echo '<div class="' . $cssClass . '">';
   //       echo '<a href="' . $post['post_link'] . '" class="card">';
   //       echo '<div class="thumb" style="background-image: url(' . $post['image_url'] . ');"></div>';
   //       echo '<article>';
   //       echo '<h1>' . $post['title'] . '</h1>';
   //       echo '<p>' . $post['description'] . '</p>';
   //       echo '<span>' . $post['category'] . '</span>';
   //       // echo '<span><a href="edit_post.php?id=' . $post['post_id'] . '">Edit</a></span>';
   //       echo '<span></span>';
   //       echo '</article>';
   //       echo '</a>';
   //       echo '</div>';

   //       $firstPost = false;
   //    }
   // }

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
        if ($powerlvl === 1) {echo '<button class="close">X</button>';}
        echo '</span>';
        echo '<p>' . $post['description'] . '</p>';
        echo '<span class="category">' . $post['category'] . '</span>';
        echo '</div>';

        echo '</li>'; 
      }
      if ($powerlvl === 1) {echo "<a href='#post' class='button'>New Post</a>";}
      echo '</ul>';
      echo '</div>';
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
