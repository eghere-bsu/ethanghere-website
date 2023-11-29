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
         echo '<span>' . $post['category'] . ' </span>';
         echo '<span></span>';
         echo '</article>';
         echo '</a>';
         echo '</div>';

         $firstPost = false;
      }
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
