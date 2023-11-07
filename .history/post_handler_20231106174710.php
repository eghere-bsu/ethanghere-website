<?php
require_once 'Dao.php';

$dao = new Dao();
$user_id = $_SESSION['user_id']; 
$title = $_POST['title'];
$description = $_POST['description'];
$post_link = $_POST['post_link'];
$image_url = $_POST['image_url'];
$category = $_POST['category']; 

if ($dao->getPowerlvl($username) != 1) {
   $_SESSION['message'] = "You don't have permission to post!";
} elseif (empty($title) || empty($description) || empty($post_link) || empty($image_url) || empty($category)) {
   $_SESSION['message'] = 'Incomplete post. Confirm that all form elements have data.';
} else {
   $dao->createPost($user_id, $title, $description, $post_link, $image_url, $category);
   $_SESSION['message'] = 'Post added!';
}

