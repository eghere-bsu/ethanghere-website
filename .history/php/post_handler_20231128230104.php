<?php
session_start();
require_once 'Dao.php';

$dao = new Dao();
$username = $_SESSION['username'];
$title = $_POST['title'];
$description = $_POST['description'];
$post_link = $_POST['post_link'];
$image_url = $_POST['image_url'];
$category = $_POST['category'];

// Store form input values in session for error handling
$_SESSION['post_data'] = [
   'title' => $title,
   'description' => $description,
   'post_link' => $post_link,
   'image_url' => $image_url,
   'category' => $category,
];

if ($dao->getPowerlvl($username) != 1) {
   $_SESSION['message'] = "You don't have permission to post!";
} elseif (empty($title) || empty($description) || empty($post_link) || empty($image_url) || empty($category)) {
   $_SESSION['message'] = 'Incomplete post. Confirm that all form elements have data.';
} else {
   $dao->createPost($dao->getUserId($username), $title, $description, $post_link, $image_url, $category);
   $_SESSION['message'] = 'Post created!';
}

header("Location: dev.php");
exit;