<?php
session_start();
include("connection.php");

if(isset($_GET['food_id'])) {
    $food_id = $_GET['food_id'];

    $query="DELETE FROM bestsaller where FOOD_ID='$food_id'";
    $data = mysqli_query($con,$query);

    if($data){
    echo "<script>alert('Food Deleted From Bestseller ')</script>";
    ?>
    <meta http-equiv="refresh" content="0;url = http://localhost/Red%20Chilles/Adminfood.php"/>
    <?php
    }


}

?>