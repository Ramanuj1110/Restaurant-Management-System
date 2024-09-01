
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
            echo "<script>alert('Order Successfully Placed')</script>";
               

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <style>
        body {
            background: url('./pay.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .overlay {
            background-color: rgba(255, 255, 255, 0.9);
            text-align: center;
            padding: 20px;
            border-radius: 10px;
        }
        .checkmark {
            fill: none;
            stroke: green;
            stroke-width: 3;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-dasharray: 48px;
            stroke-dashoffset: 48px;
            animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
        }
        .Back {
            font-size: 15px;
            padding: 8px 16px;
            color: white;
            border-radius: 20px;
            font-weight: 700;
            background-color: green;
            margin-top: 20px;
            cursor: pointer;
        }
        @keyframes stroke {
            to {
                stroke-dashoffset: 0;
            }
        }
        h1 {
            color: green;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        p {
            color: #333;
            font-size: 18px;
            line-height: 1.5;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="overlay">
        <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24">
            <path class="checkmark" d="M20.4 4.7l-11 11-4.4-4.4"/>
        </svg>
        <h1>Payment Successful!</h1>
        <p>Thank you for your purchase. We have received your payment, and your order will be processed shortly.</p>
        <a href="./Website.php"><button class="Back">Go To Home</button></a>
    </div>
    <script>
        window.onload = function() {
            var checkmark = document.querySelector('.checkmark');
            checkmark.classList.add('checkmark-animate');
        };
    </script>
</body>
</html>
