<?php
session_start();

if(isset($_POST['remove_from_cart'])) {
    $food_id = $_POST['food_id'];

    // Iterate through the cart and remove the item with matching food_id
    foreach($_SESSION['cart'] as $key => $item) {
        if($item['food_id'] == $food_id) {
            unset($_SESSION['cart'][$key]);
            break;
        }
    }
}

// Redirect back to the cart page
header("location: add_cart.php");
?>
