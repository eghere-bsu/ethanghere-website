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
         echo '</article>';
         echo '</a>';
         echo '</div>';

         $firstPost = false;
      }
   }

   public static function renderSkills($skills) {
      
      
      foreach ($skills as $skill) {
         $svgContent = file_get_contents($skill);
         $svgName = basename($skill, '.svg');

         echo '<p>' . $svgName . '</p>';
         echo '<li>';
         echo '<img src="data:image/svg+xml;charset=utf8,' . base64_encode($svgContent) . '" alt="' . $svgName . '">';
         echo '</li>';
      }
   }
}
