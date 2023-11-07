<?php 
$page = 'dev';
include_once 'navbar.php' ?>

<?php
require_once 'Dao.php';

$dao = new Dao();
$posts = $dao->getPosts();

// Initialize a flag to keep track of the first post
$firstPost = true;

foreach ($posts as $index => $post) {
    // Determine the CSS class based on the index
    $cssClass = ($firstPost) ? 'item-1' : 'item-2';

    // Output the HTML for the post card
    echo '<div class="' . $cssClass . '">';
    echo '<a href="' . $post['POST_LINK'] . '" class="card">';
    echo '<div class="thumb" style="background-image: url(' . $post['IMAGE_URL'] . ');"></div>';
    echo '<article>';
    echo '<h1>' . $post['TITLE'] . '</h1>';
    echo '<p>' . $post['DESCRIPTION'] . '</p>';
    echo '<span>' . $post['CATEGORY'] . '</span>';
    echo '</article>';
    echo '</a>';
    echo '</div>';

    // Set the flag to false after the first post
    if ($firstPost) {
        $firstPost = false;
    }
}

?>


<!-- <html>
   <head>
      <link rel="stylesheet" href="dev.css">
   </head>
   <body>
      <div class="support-grid"></div>
      <div class="band">
         <div class="item-1">
               <a href="" class="card">
               <div class="thumb" style="background-image: url(assets/placeholder.jpg);"></div>
               <article>
                  <h1>Big Card Placeholder</h1>
                  <p>sample text</p>
                  <span>Bottom Text</span>
               </article>
               </a>
         </div>
         <div class="item-2">
               <a href="" class="card">
               <div class="thumb" style="background-image: url(assets/placeholder.jpg);"></div>
               <article>
                  <h1>Small Card Placeholder</h1>
                  <p>Some sample text showing what it might look like to put a description on said small card placeholder.</p>
                  <span>Bottom Text</span>
               </article>
               </a>
         </div>
      </div>
   </body>
</html> -->

<?php include_once 'footer.php';