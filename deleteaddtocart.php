<?php
session_start();
include("connection.php");

if(isset($_GET['food_id'])) {
    $food_id = $_GET['food_id'];

    $query="DELETE FROM addtocart where FOOD_ID='$food_id'";
    $data = mysqli_query($con,$query);
    $data = mysqli_query($con,$query);
    if($data){
    echo "<script>alert('Food Deleted From cart ')</script>";
    ?>
    <meta http-equiv="refresh" content="0;url = http://localhost/Red%20Chilles/addtocart.php"/>
    <?php
    }


}

?>