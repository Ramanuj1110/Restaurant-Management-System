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

<?php

if (isset($_GET['food_id'])) {
    $food_id = $_GET['food_id'];

    
    $check_query = "SELECT * FROM addtocart WHERE FOOD_ID = ? AND USERNAME = ?";

    $check_statement = mysqli_prepare($con, $check_query);

    mysqli_stmt_bind_param($check_statement, "ss", $food_id, $userprofile);

    mysqli_stmt_execute($check_statement);

    $check_result = mysqli_stmt_get_result($check_statement);

    if (mysqli_num_rows($check_result) > 0) {
   
        echo "<script>alert('This food is already in your cart.')</script>";
        ?>
        <meta http-equiv="refresh" content="0;url = http://localhost/Red%20Chilles/addtocart.php"/>
        <?php
    } else {
      
        $query_select = "SELECT * FROM food_detail WHERE FOOD_ID = $food_id";
        $result_select = mysqli_query($con, $query_select);

        if ($result_select) {
            $selected_row = mysqli_fetch_assoc($result_select);

            $query_insert = "INSERT INTO addtocart (FOOD_ID, FOOD_IMAGE,FOOD, PRICE,USERNAME) 
                             VALUES (?, ?, ?, ?, ?)";

            $insert_statement = mysqli_prepare($con, $query_insert);

       
            mysqli_stmt_bind_param($insert_statement, "sssss", $selected_row['FOOD_ID'], $selected_row['FOOD_IMAGE'], $selected_row['FOOD'], $selected_row['PRICE'], $userprofile);

            $result_insert = mysqli_stmt_execute($insert_statement);

            if ($result_insert) {
                echo "<script>alert('Successfully Food Added in cart')</script>";
                ?>
                <meta http-equiv="refresh" content="0;url = http://localhost/Red%20Chilles/addtocart.php"/>
                <?php
            } else {
                echo "Error: " . mysqli_stmt_error($insert_statement);
            }

            mysqli_stmt_close($insert_statement);
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }

    mysqli_stmt_close($check_statement);
} else {
    echo "Food ID not provided!";
}
?>

