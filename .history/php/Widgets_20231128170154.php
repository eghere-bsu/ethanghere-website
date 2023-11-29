<?php
class Widgets {
   public static function renderCards($posts) {
      $firstPost = true;

      foreach ($posts as $index => $post) {
         $cssClass = ($firstPost) ? 'item-1' : 'item-2';

         echo '<div class="' . $cssClass . '">';
         echo '<a href="' . $post['post_link'] . '" class="card">';
         echo '<div class="thumb" style="background-image: url(' . $post['image_url'] . ');"></div>';
         echo '<article>';
         echo '<h1>' . $post['title'] . '</h1>';
         echo '<p>' . $post['description'] . '</p>';
         echo '<span>' . $post['category'] . '</span>';
         // echo '<span><a href="edit_post.php?id=' . $post['post_id'] . '">Edit</a></span>';
         echo '<span></span>';
         echo '</article>';
         echo '</a>';
         echo '</div>';

         $firstPost = false;
      }
   }

   public static function renderCards($posts) {
      $isFirstPost = true;
  
      echo '<section id="content" class="main-area">';
      echo '<ul class="cards">';
  
      foreach ($posts as $index => $post) {
          $cssClass = ($isFirstPost) ? 'card-item double' : 'card-item';
  
          echo '<li class="' . $cssClass . '">';
          echo '<a href="' . $post['post_link'] . '" target="_blank" rel="nofollow">';
          echo '<figure class="card">';
          echo '<img src="' . $post['image-url'] . '">';
          echo '<figcaption class="caption">';
          echo '<h3 class="caption-title">' . $post['title'] . '</h3>';
          echo '<div class="location">' . $post['category'] . '</div>';
          echo '<p>' . $post['description'] . '</p>';
          echo '</figcaption>';
          echo '</figure>';
          echo '</a>';
          echo '</li>';
  
          $isFirstPost = false;
      }
  
      echo '</ul>';
      echo '</section>';
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
