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
       <li><a href="#">Home</a></li>
       <li><a href="help.php">Help</a></li>
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
      <div class="Mcontent">
        <div class="Mitem">
          <img class="logo" src="logo.svg"/>
          <p>Hello, and welcome to my cookbook! I am Ms. Grey and as you can see, I like grayscale. However, there is one other thing
          I do like: colorful food! In this website, you'll have dozens of recipes that I have used to spice my my cooking experience
        from gray to color. Click <a href="help.php">here</a> if you need help with the website!</p>
          </div>
      </div>
    </section>
    <!-- Blank -->
    <script src="js/main.js"></script>
  </body>
</html>
