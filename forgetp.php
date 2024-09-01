<?php
session_start();
error_reporting(0);
include("connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $emailid = $_POST['EMAIL'];
    $username = $_POST['USERNAME'];
    $newpassword = $_POST['PASSWORD'];
    $re_new_password = $_POST['RE_PASSWORD'];

    if ($newpassword != $re_new_password) {
        $error = "New passwords do not match!";
        echo "<script>alert('$error');</script>";
    } else {
        $ret = mysqli_query($con, "SELECT USER_ID FROM user_data WHERE EMAIL='$emailid' AND USERNAME='$username'");
        $num = mysqli_num_rows($ret);
        if ($num > 0) {
            $query = mysqli_query($con, "UPDATE user_data SET PASSWORD='$newpassword' WHERE EMAIL='$emailid' AND USERNAME='$username'");
            if ($query) {
                echo "<script>alert('Password reset successfully.');</script>";
                ?>
                <meta http-equiv="refresh" content="0;url = http://localhost/Red%20Chilles/forgetp.php"/>
                <?php
            } else {
                echo "<script>alert('Failed to reset password.');</script>";
                ?>
                <meta http-equiv="refresh" content="0;url = http://localhost/Red%20Chilles/forgetp.php"/>
                <?php
            }
        } else {
            echo "<script>alert('Invalid username or email.');</script>";
            ?>
            <meta http-equiv="refresh" content="0;url = http://localhost/Red%20Chilles/forgetp.php"/>
            <?php
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./l.css">
    <title>Forgot Password</title>
</head> 
<body>
    <section>
        <div class="imgBx">
            <img src="./Red Chillies logo(2).jpg" alt="Login background image">
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h2>Welcome Reset Your Password Here!</h2>
                <form method="post">
                    <div class="inputBx">
                        <span>Username</span>
                        <input type="text" name="USERNAME" required>
                    </div>
                    <div class="inputBx">
                        <span>Email</span>
                        <input type="email" name="EMAIL" required>
                    </div>
                    <div class="inputBx">
                        <span>New Password</span>
                        <input type="password" name="PASSWORD" required>
                    </div>
                    <div class="inputBx">
                        <span>Re Enter New Password</span>
                        <input type="password" name="RE_PASSWORD" required>
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Update Password">
                    </div>
                    <p><a href="l.php">User Login</a></p>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
