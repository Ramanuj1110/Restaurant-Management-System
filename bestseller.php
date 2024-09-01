<?php
session_start();
include("connection.php");

if(isset($_GET['food_id'])) {
    $food_id = $_GET['food_id'];
    
    
    $query_select = "SELECT * FROM food_detail WHERE FOOD_ID = $food_id";
    $result_select = mysqli_query($con, $query_select);
    
    if ($result_select) {
        $selected_row = mysqli_fetch_assoc($result_select);
        
        
        $query_insert = "INSERT INTO bestsaller (FOOD_ID, FOOD_IMAGE, FOOD, PRICE, DESCRIPTIONS, CATEGORY) 
                         VALUES ('{$selected_row['FOOD_ID']}', '{$selected_row['FOOD_IMAGE']}', '{$selected_row['FOOD']}', 
                         '{$selected_row['PRICE']}', '{$selected_row['DESCRIPTIONS']}', '{$selected_row['CATEGORY']}')";
                         
        $result_insert = mysqli_query($con, $query_insert);
        
        if ($result_insert) {
           
            echo "<script>alert('Successfully Food Added in Bestseller ')</script>";
           ?>
            <meta http-equiv="refresh" content="0;url = http://localhost/Red%20Chilles/Adminfood.php"/>
             <?php
        } else {
            echo "Error: " . mysqli_error($con);
        }
    } else {
        echo "Error: " . mysqli_error($con);
    }
} else {
    echo "Food ID not provided!";
}
?>

