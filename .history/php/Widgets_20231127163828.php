<?php
require_once 'Dao.php';
$dao = new Dao();
$posts = $dao->getPosts();

class Widgets {
   
   public static function renderCards() {

   }
}