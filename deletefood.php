<?php
session_start();
include("connection.php");

if(isset($_GET['food_id'])) {
    $food_id = $_GET['food_id'];

    $query="DELETE FROM food_detail where FOOD_ID='$food_id'";
    $data = mysqli_query($con,$query);
    if($data){
    echo "<script>alert('Food Deleted')</script>";
    ?>
    <meta http-equiv="refresh" content="0;url = http://localhost/Red%20Chilles/Adminfood.php"/>
    <?php
    }
}




?>