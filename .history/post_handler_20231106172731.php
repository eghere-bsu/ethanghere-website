<?php
require_once 'Dao.php';

$username = $_SESSION['username']; 
$title = $_POST['title'];
$description = $_POST['description'];
$post_link = $_POST['post_link'];
$image_url = $_POST['image_url'];
$category = $_POST['category']; 

$dao->createPost($user_id, $title, $description, $post_link, $image_url, $category);