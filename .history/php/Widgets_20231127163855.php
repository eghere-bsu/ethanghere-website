<?php
class Widgets {
   require_once 'Dao.php';
$dao = new Dao();
$posts = $dao->getPosts();
   public static function renderCards() {

   }
}