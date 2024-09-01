
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
  <link rel="stylesheet" href="./term_style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
  <nav class="navbar">
    <div class="navbar-container container">
      <h1 class="logo">Red Chillies</h1>
    </div>

</nav>
<div class="wrapper flex_align_justify">
    <div class="tc_wrap">
        <div class="tabs_list">
          <ul>
            <li data-tc="tab_item_1" class="active">Terms of use</li>
            <li data-tc="tab_item_2">Intellectual property rights</li>
            <li data-tc="tab_item_3">Prohibited activities</li>
            <li data-tc="tab_item_4">Termination clause</li>
            <li data-tc="tab_item_5">Governing law</li>
          </ul>
        </div>
        <div class="tabs_content">
           <div class="tab_head">
             <h2>Terms & Conditions</h2>
           </div>
           <div class="tab_body">
             <div class="tab_item tab_item_1">
                 <h3>Terms of use</h3>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At fugit praesentium reiciendis aut debitis minima earum fugiat quam aspernatur qui. Labore, aliquam iste. A quasi ut accusantium laboriosam eius sequi?</p>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At fugit praesentium reiciendis aut debitis minima earum fugiat quam aspernatur qui. Labore, aliquam iste. A quasi ut accusantium laboriosam eius sequi?</p>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At fugit praesentium reiciendis aut debitis minima earum fugiat quam aspernatur qui. Labore, aliquam iste. A quasi ut accusantium laboriosam eius sequi?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At fugit praesentium reiciendis aut debitis minima earum fugiat quam aspernatur qui. Labore, aliquam iste. A quasi ut accusantium laboriosam eius sequi?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At fugit praesentium reiciendis aut debitis minima earum fugiat quam aspernatur qui. Labore, aliquam iste. A quasi ut accusantium laboriosam eius sequi?</p>
             </div>
             <div class="tab_item tab_item_2" style="display: none;">
                 <h3>Intellectual property rights</h3>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia odit neque a natus fuga incidunt, facilis, consequatur ducimus vitae consectetur reiciendis tempora explicabo animi quis laborum possimus totam voluptatum illum.</p>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At fugit praesentium reiciendis aut debitis minima earum fugiat quam aspernatur qui. Labore, aliquam iste. A quasi ut accusantium laboriosam eius sequi?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At fugit praesentium reiciendis aut debitis minima earum fugiat quam aspernatur qui. Labore, aliquam iste. A quasi ut accusantium laboriosam eius sequi?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At fugit praesentium reiciendis aut debitis minima earum fugiat quam aspernatur qui. Labore, aliquam iste. A quasi ut accusantium laboriosam eius sequi?</p>
             </div>
             <div class="tab_item tab_item_3"  style="display: none;">
                 <h3>Prohibited activities</h3>
                 <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat sit commodi esse enim? Cum tempore deserunt numquam molestias. Pariatur, minima consequatur nam exercitationem explicabo porro quibusdam. Excepturi, voluptatibus repellendus. Provident!</p>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At fugit praesentium reiciendis aut debitis minima earum fugiat quam aspernatur qui. Labore, aliquam iste. A quasi ut accusantium laboriosam eius sequi?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At fugit praesentium reiciendis aut debitis minima earum fugiat quam aspernatur qui. Labore, aliquam iste. A quasi ut accusantium laboriosam eius sequi?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At fugit praesentium reiciendis aut debitis minima earum fugiat quam aspernatur qui. Labore, aliquam iste. A quasi ut accusantium laboriosam eius sequi?</p>
             </div>
             <div class="tab_item tab_item_4"  style="display: none;">
                 <h3>Termination clause</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quae ipsa, enim aspernatur ducimus vero! Repellendus exercitationem dolore, voluptatibus consectetur facere eveniet in, corporis, nostrum animi unde recusandae repudiandae. Excepturi.</p>
             </div>
             <div class="tab_item tab_item_5"  style="display: none;">
                 <h3>Governing law</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem alias nemo eius aspernatur doloremque laboriosam velit, consequatur nesciunt, ipsum facere autem, dicta quam consectetur! Nostrum quae odit adipisci omnis asperiores!</p>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem alias nemo eius aspernatur doloremque laboriosam velit, consequatur nesciunt, ipsum facere autem, dicta quam consectetur! Nostrum quae odit adipisci omnis asperiores!</p>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem alias nemo eius aspernatur doloremque laboriosam velit, consequatur nesciunt, ipsum facere autem, dicta quam consectetur! Nostrum quae odit adipisci omnis asperiores!</p>
             </div>
           </div>
           <div class="tab_foot flex_align_justify">
            <a href="./Website.php"><button class="back">Back</button></a>             
           </div>
        </div>
    </div>
 </div>
 <script src="./term.js"></script>
</body>
</html>