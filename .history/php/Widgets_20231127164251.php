<?php
require_once 'Dao.php';
class Widgets {
   private $dao = new Dao();
   public function renderCards() {
      $posts = $dao->getPosts();
   }
}