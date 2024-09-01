<?php
session_start();
include("connection.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $NAME = $_POST["NAME"];
    $USERNAME = $_POST["USERNAME"];
    $EMAILID = $_POST['EMAIL'];
    $ADDRESS = $_POST['ADDRESS'];
    $PASSWORD = $_POST['PASSWORD'];

    $filename = $_FILES["IMAGE"]["name"];
    $tempname = $_FILES["IMAGE"]["tmp_name"];
    $folder = "userimages/" . $filename;

    // Check if the image was uploaded without errors
    if (move_uploaded_file($tempname, $folder)) {
        if (!empty($NAME) && !empty($USERNAME) && !empty($EMAILID) && !empty($PASSWORD) && !empty($ADDRESS)) {
            $query = "INSERT INTO user_data (NAME, USERNAME, EMAIL, ADDRESS, PASSWORD, userimages) VALUES ('$NAME', '$USERNAME', '$EMAILID', '$ADDRESS', '$PASSWORD', '$folder')";
            $register = mysqli_query($con, $query);

            if ($register) {
                echo "<script>alert('Registered Successfully');</script>";
                echo '<meta http-equiv="refresh" content="0;url=http://localhost/Red%20Chilles/l.php"/>';
            } else {
                echo "<script>alert('Registration failed. Please try again.');</script>";
            }
        } else {
            echo "<script>alert('Please enter all the details.');</script>";
        }
    } else {
        echo "<script>alert('Image upload failed.');</script>";
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./s.css">
    <title>Sign up</title>
</head>
<body>
    <section>
        <div class="imgBx">
            <img src="./Red Chillies logo(2).jpg" alt="Login background image">
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h2>Register Yourself!!</h2>
                <form method="post" enctype="multipart/form-data">
                    <div class="inputBx">
                        <span>IMAGE</span>
                        <input type="file" name="IMAGE" required>
                    </div>
                    <div class="inputBx">
                        <span>Name</span>
                        <input type="text" name="NAME" placeholder="Enter your name" required>
                    </div>
                    <div class="inputBx">
                        <span>Username</span>
                        <input type="text" name="USERNAME" placeholder="Enter your username in capital" required>
                    </div>
                    <div class="inputBx">
                        <span>Email</span>
                        <input type="email" name="EMAIL" placeholder="Enter your email" required>
                    </div>
                    <div class="inputBx">
                        <span>Address</span>
                        <input type="text" name="ADDRESS" placeholder="Enter your address" required>
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="PASSWORD" placeholder="Enter your password" required>
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Submit" onclick="return check()">
                    </div>
                    <p class="subtitle">Already registered <a href="l.php">User Login</a></p>
                </form>
            </div>
        </div>
    </section>
    <script>
        function check() {
            return confirm('Are you sure you want to Register?');
        }
    </script>
</body>
</html>
