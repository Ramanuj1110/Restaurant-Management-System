<?php
 session_start();
 include("../connection.php");
 $userprofile=$_SESSION['USERNAME'];
 if ($userprofile == true)
  {
   
 }
 else{
  header("location:l.php");
 }


?>

<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {
  $NAME = $_POST["NAME"];
  $USERNAME = $_SESSION["USERNAME"];
  $GUEST = $_POST['GUEST'];
  $DATE = $_POST['DATE'];
  $TIME = $_POST['TIME'];
  
    $query = "INSERT INTO reservation (Name,TGUEST,DATE, TIME,USERNAME) VALUES ('$NAME','$GUEST','$DATE','$TIME','$USERNAME')";
    $register = mysqli_query($con, $query);

    if ($register) {
        echo "<script>alert('TABLE RESERVE Successfully');</script>";
        
    }
  }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Table Reservation</title>
  <link rel="stylesheet" href="./Reservation_style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
  <nav class="navbar">
    <div class="navbar-container container">
        <input type="checkbox" name="" id="" />
        <div class="hamburger-lines">
          <span class="line line1"></span>
          <span class="line line2"></span>
          <span class="line line3"></span>
        </div>
        <ul class="menu-items">
          <li><a href="../Website.php">Home</a></li>
        </ul>
      <h1 class="logo">Red Chillies</h1>
    </div>
  </nav>
  <section class="showcase-area" id="showcase">
    <div class="showcase-container">
      <h1 class="main-title" id="home">Table Booking</h1>
    </div>
  </section>
  <div class="form-container">
    <div class="form-wrapper">
      <form action="#" method="POST" id="bookingForm">
        <label for="fName" class="form-label">Name</label>
        <input type="text" name="NAME" id="Name" placeholder="Name" class="form-input" required/>

        <label for="guest" class="form-label">How many guests are you bringing?</label>
        <input type="number" name="GUEST" id="guest" placeholder="5" class="form-input" required/>

        <label for="date" class="form-label">Date</label>
        <input type="date" name="DATE" id="date" class="form-input" required/>

        <label for="time" class="form-label">Time</label>
        <input type="time" name="TIME" id="time" class="form-input" required/>

        <label for="toggleSwitch" class="form-label">Click For Confirmation!!</label>
        <div class="toggle-switch">
          <input type="checkbox" id="toggleSwitch" class="toggle-input" required>
          <label for="toggleSwitch" class="toggle-label"></label>
        </div>

        <button type="submit" class="form-btn">Submit</button>
      </form>
      <div id="confirmationMessage" class="confirmation-message">
        <p>Your reservation has been successfully submitted!</p>
      </div>
    </div>
  </div>
</body>

</html>
