<?php
  include 'database.php';

  $query = "SELECT * FROM Food";
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die ("Database query failed.");
  }
?>

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
       <li><a href="help.php">Help</a></li>
       <li><a href="#">All Recipes</a></li>
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
      <h1>All Recipes</h1>
      <div class="grid">
      <!------------>
      <?php

      $query = "SELECT * FROM Food";
      $result = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($result)) { ?>

          <div class="container">
              <a href="recipe.php?id=<?php echo $row['ID'] ?>"><img width=300px height=300px src="<?php echo $row['Main_Pic'];?>"></a>
              <h3><?php echo $row['Main_Heading'] ?></h3>
              <h4><?php echo $row['Sub_Heading'] ?></h4>
          </div>
        <?php
          }?>


      <!---------->
        </div>
      </section>

      <?php
        mysqli_free_result($result);
      ?>
      <?php
        mysqli_close($connection);
      ?>

    <!-- Blank -->
    <script src="js/main.js"></script>
  </body>
</html>
