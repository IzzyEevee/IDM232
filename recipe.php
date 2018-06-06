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
        <?php
        $id = $_GET['id'];
        $query = "SELECT * FROM Food WHERE ID = $id";
        $result = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($result)){ ?>
          <h1><?php echo $row['Main_Heading']?></h1>
          <h3><?php echo $row['Sub_Heading']?></h3>
          <div class="content">
            <div class="item">
              <picture>
                 <source srcset="<?php echo $row['Main_Pic'];?>" media="(min-width: 768px)" />
                 <img src="<?php echo $row['Main_Pic'];?>" style="width: 100%;" />
               </picture>
            </div>
            <div class="item">
              <p><?php echo $row['Description']; ?></p>
            </div>
          </div>
          <h3>Ingredients</h3>
          <div class="content">
            <div class="itemIng">
              <picture>
                 <source srcset="<?php echo $row['Ingredients_Pic'];?>" media="(min-width: 768px)" />
                 <img src="<?php echo $row['Ingredients_Pic'];?>" />
               </picture>
            </div>
            <div class="itemIng">
              <ul>
                <?php echo $row['Ingredients'];?>
              </ul>
            </div>
          </div>
          <h3>Directions</h3>
          <div class="content">
            <div class="item">
              <picture>
                 <source srcset="<?php echo $row['Step_One_Pic'];?>" media="(min-width: 768px)" />
                 <img src="<?php echo $row['Step_One_Pic'];?>" />
               </picture>
            </div>
            <div class="item">
              <p><?php echo $row['Step_One'];?></p>
            </div>
          </div>
          <div class="content">
            <div class="item">
              <picture>
                 <source srcset="<?php echo $row['Step_Two_Pic'];?>" media="(min-width: 768px)" />
                 <img src="<?php echo $row['Step_Two_Pic'];?>" />
               </picture>
            </div>
            <div class="item">
              <p><?php echo $row['Step_Two'];?></p>
            </div>
          </div>
          <div class="content">
            <div class="item">
              <picture>
                 <source srcset="<?php echo $row['Step_Three_Pic'];?>" media="(min-width: 768px)" />
                 <img src="<?php echo $row['Step_Three_Pic'];?>" />
               </picture>
            </div>
            <div class="item">
              <p><?php echo $row['Step_Three'];?></p>
            </div>
          </div>
          <div class="content">
            <div class="item">
              <picture>
                 <source srcset="<?php echo $row['Step_Four_Pic'];?>" media="(min-width: 768px)" />
                 <img src="<?php echo $row['Step_Four_Pic'];?>" />
               </picture>
            </div>
            <div class="item">
              <p><?php echo $row['Step_Four'];?></p>
            </div>
          </div>
          <div class="content">
            <div class="item">
              <picture>
                 <source srcset="<?php echo $row['Step_Five_Pic'];?>" media="(min-width: 768px)" />
                 <img src="<?php echo $row['Step_Five_Pic'];?>" />
               </picture>
            </div>
            <div class="item">
              <p><?php echo $row['Step_Five'];?></p>
            </div>
          </div>
          <div class="content">
            <div class="item">
              <picture>
                 <source srcset="<?php echo $row['Step_Six_Pic'];?>" media="(min-width: 768px)" />
                 <img src="<?php echo $row['Step_Six_Pic'];?>" />
               </picture>
            </div>
            <div class="item">
              <p><?php echo $row['Step_Six'];?></p>
            </div>
          </div>
        <?php }


        ?>
      <!--</section>-->
    <!-------------->


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
