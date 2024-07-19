<?php
session_start();
include("connection.php");

if(isset($_GET['feedback_id'])) {
    $FID = $_GET['feedback_id'];

    $query="DELETE FROM feedback where FID='$FID'";
    $data = mysqli_query($con,$query);
    if($data){
        echo "<script>alert('Record Deleted')</script>";
        ?>
        <meta http-equiv="refresh" content="0;url = http://localhost/Red%20Chilles/AdminFeedback.php"/>
        <?php
    }


}

?>