
<?php
 session_start();
 include("connection.php");
 $userprofile=$_SESSION['USERNAME'];
 if ($userprofile == true)
  {
   
 }
 else{
  header("location:l.php");
 }


?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurant Menu</title>
  <link rel="stylesheet" href="./H_style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
  <nav class="navbar">
    <div class="navbar-container container">
      <h1 class="logo">Red Chillies</h1>
    </div>

</nav>
<section class="showcase-area" id="showcase">
    <div class="showcase-container">
        <h1 class="main-title" id="home">Hot & Spicy</h1>
    </div>
</section>
  <div class="container">
    <div class="menu">
      <h2 class="menu-group-heading">
        Noodles
      </h2>
      <div class="menu-group">
      <?php
        $query = "SELECT * FROM `food_detail` WHERE CATEGORY = 'Noodles'";
        $data = mysqli_query($con, $query);

        $total = mysqli_num_rows($data);

        if ($total != 0) {
          while ($result = mysqli_fetch_assoc($data)) {
            echo "
              <div class='menu-item'>
                <img class='menu-item-image' src='" . $result['FOOD_IMAGE'] . "' alt='" . $result['FOOD'] . "'>
                <div class='menu-item-text'>
                  <h3 class='menu-item-heading'>
                    <span class='menu-item-name'>" . $result['FOOD'] . "</span>
                    <span class='menu-item-price'>&#8377;" . $result['PRICE'] . "</span>
                  </h3>
                  <p class='menu-item-description'>" . $result['DESCRIPTIONS'] . "</p>
                  <a href='./cartlinker.php?food_id= $result[FOOD_ID];'><button type='submit' class='btn btn-primary'>Add To Cart</button></a>
                </div>
              </div>
            ";
          }
        }
        ?>
      </div>
      <h2 class="menu-group-heading">
        Manchurian
      </h2>
      <div class="menu-group">
      <?php
        $query = "SELECT * FROM `food_detail` WHERE CATEGORY = 'Manchurian'";
        $data = mysqli_query($con, $query);

        $total = mysqli_num_rows($data);

        if ($total != 0) {
          while ($result = mysqli_fetch_assoc($data)) {
            echo "
              <div class='menu-item'>
                <img class='menu-item-image' src='" . $result['FOOD_IMAGE'] . "' alt='" . $result['FOOD'] . "'>
                <div class='menu-item-text'>
                  <h3 class='menu-item-heading'>
                    <span class='menu-item-name'>" . $result['FOOD'] . "</span>
                    <span class='menu-item-price'>&#8377;" . $result['PRICE'] . "</span>
                  </h3>
                  <p class='menu-item-description'>" . $result['DESCRIPTIONS'] . "</p>
                  <a href='./cartlinker.php?food_id= $result[FOOD_ID];'><button type='submit' class='btn btn-primary'>Add To Cart</button></a>
                </div>
              </div>
            ";
          }
        }
        ?>
      </div>
      <h2 class="menu-group-heading">
        Soup
      </h2>
      <div class="menu-group">
      <?php
       $query = "SELECT * FROM `food_detail` WHERE CATEGORY = 'Soup'";
        $data = mysqli_query($con, $query);

        $total = mysqli_num_rows($data);

        if ($total != 0) {
          while ($result = mysqli_fetch_assoc($data)) {
            echo "
              <div class='menu-item'>
                <img class='menu-item-image' src='" . $result['FOOD_IMAGE'] . "' alt='" . $result['FOOD'] . "'>
                <div class='menu-item-text'>
                  <h3 class='menu-item-heading'>
                    <span class='menu-item-name'>" . $result['FOOD'] . "</span>
                    <span class='menu-item-price'>&#8377;" . $result['PRICE'] . "</span>
                  </h3>
                  <p class='menu-item-description'>" . $result['DESCRIPTIONS'] . "</p>
                  <a href='./cartlinker.php?food_id= $result[FOOD_ID];'><button type='submit' class='btn btn-primary'>Add To Cart</button></a>
                </div>
              </div>
            ";
          }
        }
        ?>
    </div>
 </div>
</body>
</html>
          