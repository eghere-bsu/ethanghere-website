<?php
require_once 'Dao.php';
class Widgets {

   private $dao;

   public function __construct($dao) {
       $this->dao = $dao;
   }

   public static function renderCards() {
       $posts = $dao->getPosts();
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
}
