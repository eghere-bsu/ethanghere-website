<?php
require_once 'Dao.php';

$user_id = $_SESSION['user_id']; // Assuming you have stored the user ID in the session
$title = $_POST['title'];
$description = $_POST['description'];
$post_link = $_POST['post_link'];
$image_url = $_POST['image_url'];
$category = $_POST['category']; // Assuming you have a category field in the form

$dao->createPost($user_id, $title, $description, $post_link, $image_url, $category);