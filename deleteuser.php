<?php
session_start();
include("connection.php");

if (isset($_GET['USERNAME'])) {
    $username = mysqli_real_escape_string($con, $_GET['USERNAME']);

    $query = "DELETE FROM user_data WHERE USER_ID = '$username'";
    $data = mysqli_query($con, $query);

    if ($data) {
        echo "<script>alert('User  Deleted From Database')</script>";
        header("Location: http://localhost/Red%20Chilles/AdminUser_details.php");
    } else {
        echo "<script>alert('User not Deleted From Database. Error: " . mysqli_error($con) . "')</script>";
    }
}
?>