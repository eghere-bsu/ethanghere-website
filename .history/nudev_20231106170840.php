<?php 
   $page = 'dev';
   require_once 'navbar.php';
   require_once 'Dao.php';
   $dao = new Dao();
   $display = 'none';
   //Check if user has permission to create a post
   if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
      if (isset($_SESSION['username']) && ($dao->getPowerlvl($_SESSION['username']) == 1)) {
         $display = 'inline'; //show "create post" button
      }
   } 
?>

<html>
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
</html>