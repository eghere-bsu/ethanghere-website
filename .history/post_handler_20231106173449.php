<?php
require_once 'Dao.php';

$dao = new Dao();
$username = $_SESSION['username']; 
$title = $_POST['title'];
$description = $_POST['description'];
$post_link = $_POST['post_link'];
$image_url = $_POST['image_url'];
$category = $_POST['category']; 

if ()
if (empty($title) || empty($description) || empty($post_link) || empty($image_url) || empty($category)) {
   $_SESSION['message'] = 'Incomplete post. Confirm that all form elements have data.';
} 

