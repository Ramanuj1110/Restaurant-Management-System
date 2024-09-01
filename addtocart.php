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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./add_cart.css">
</head>
<body>

    <nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
                <ul class="menu-items">
                <li><a href="./Website.php">Home</a></li>


            </ul>
            <h1 class="logo">Red Chillies</h1>            
            </div>

    </nav>


        <section class="showcase-area" id="showcase">
        <div class="showcase-container">
            <h1 class="main-title" id="home">Your Cart</h1>
            <a href="./Website.php#food" class="btn btn-primary">Menu</a>
        </div>

   

    </section>


    <section class="pt-5 pb-5">
      <div class="container">
        <div class="row w-100">
            <div class="col-lg-12 col-md-12 col-12">
            <?php

            $query = "SELECT * FROM addtocart WHERE USERNAME = '$userprofile'";
              $data = mysqli_query($con, $query);

                 $total = mysqli_num_rows($data);

                    if ($total != 0) {
                      ?>
                <table id="shoppingCart" class="table table-condensed table-responsive">
                    <thead>
                        <tr>
                            <th style="width:20%">Product</th>
                            <th style="width:10%">Product</th>
                            <th style="width:10%">Price</th>
                            <th style="width:10%">Quantity</th>
                            <th style="width:16%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                      while ($result = mysqli_fetch_assoc($data)) {
                      echo "<tr>
                          <td><img src='" . $result['FOOD_IMAGE'] . "' height='100px' width='100px'></td>
                           <td>" . $result['FOOD'] . "</td>
                           <td data-th='Price'>" . $result['PRICE'] . "</td>
                          <td data-th='Quantity'>
                             <input type='number' class='form-control form-control-lg text-center' value='1'>
                          </td>
                          <td>
                              <a href='./deleteaddtocart.php?food_id=" . $result['FOOD_ID'] . "'><button class ='Button' onclick='return checkdelete()'>Delete</button></a>
                          </td>
                        </tr>";
                         }
                         ?>
                    </tbody>
              </table>
              <div class="float-right text-right">
                    <h4>Subtotal:</h4>
                    <h1>  </h1>
                </div>
            </div>
        </div>
        <div class="row mt-4 d-flex align-items-center">
            <div class="col-sm-6 order-md-2 text-right">
                <a href="./Payment.php" class="btn btn-primary mb-4 btn-lg pl-5 pr-5" onclick = "return check()" > Checkout</a>
            </div>
            <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
                <a href="./Website.php">
                                <button class="Button"><p>Continue Shopping</p></button></a>
            </div>
        </div>
    </div>

<?php
}
?>
    </section>
  

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var quantityInputs = document.querySelectorAll('.form-control-lg');
            var subtotalElement = document.querySelector('.float-right h1');
            updateSubtotal();
            quantityInputs.forEach(function(input) {
                input.addEventListener('input', function() {
                    updateSubtotal();
                });
            });
            function updateSubtotal() {
                var subtotal = 0;                
                var rows = document.querySelectorAll('#shoppingCart tbody tr');
                rows.forEach(function(row) {
                    var price = parseFloat(row.querySelector('td[data-th="Price"]').textContent.replace('$', ''));
                    var quantity = parseInt(row.querySelector('.form-control-lg').value);
                    subtotal += price * quantity;
                });               
                subtotalElement.textContent = '₹' + subtotal.toFixed(2);
            }
        });
    
</script>
<script>
		function checkdelete()
		{
			return confirm('Are you sure you want to delete this Food ? ')
		}


 </script>
 <script>
		function check()
		{
			return confirm('Are you sure you want to Place the Order ? ')
		}
 </script>



 </body>
 </html>