<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookbook</title>
    <link rel="stylesheet" type="text/css" title="Stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <!-- Header -->
    <header class="header">
      <p>Ms.Grey's Cookbook</p>
      <!-- menu icon -->
      <span class="menuIcon" onclick="openMenu()">&#9776;</span>
    </header>
    <!-- menu -->
    <div id= "sideMenu" class="sideMenu">
      <ul>
      <li><a href="javascript:void(0)" class="close" onclick="closeMenu()">&times;</a></li>
       <li><a href="index.php">Home</a></li>
       <li><a href="#">Help</a></li>
       <li><a href="allrecipes.php">All Recipes</a></li>
       <li><div class="searchContainer">
         <form action="search.php">
           <input type="text" placeholder="Search..." name="search">
           <button type="submit"><i class="fa fa-search"></i></button>
         </form>
       </div></li>
     </ul>
    </div>
    <!-- Content -->
    <section class="info">
      <h1>Help</h1>
      <h3>Question 1, How to I use this website?</h3>
      <p>You can either use the menu and click on 'All Recipes' to look for recipes or if you have a specfic one in mind that I
      might have, then use the search bar in the menu.</p>
    </section>
    <!-- Blank -->
    <script src="js/main.js"></script>
  </body>
</html>
