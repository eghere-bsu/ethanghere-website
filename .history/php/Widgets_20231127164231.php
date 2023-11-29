<?php
require_once 'Dao.php';
class Widgets {
   private $dao = new Dao();
   public static function renderCards() {
      $posts = $this->dao->getPosts();
   }
}