
 
<?php
session_start();
include("connection.php");
$userprofile=$_SESSION['USERNAME'];
if ($userprofile == true)
 {
  
}
else{
 header("location:Admin_login.php");
}


?>
<?php

 if($_SERVER['REQUEST_METHOD']=="POST")
 {
   $NAME=  $_POST["NAME"];
   $USERNAME=  $_POST["USERNAME"];
   $EMAILID = $_POST['EMAIL'];
   $PASSWORD = $_POST['PASSWORD'];
   
 
   if(!empty($NAME) && !empty($USERNAME) && !empty($EMAILID)  && !empty($PASSWORD)  )  
   {
	$query ="Insert into admin_data(Name,USERNAME,Email,PASSWORD)values('$NAME','$USERNAME',' $EMAILID','$PASSWORD')";

    $register=mysqli_query($con,$query);

	
    if($register){
        echo "<script>alert('Registerd Successfully')</script>";
        ?>
        <meta http-equiv="refresh" content="0;url =http://localhost/Red%20Chilles/Adminindex.php"/>
        <?php
    }

  

   }
   else{
	echo "<script type='text/javascript'> alert('Please enter the detail')</script>";
	 }
	}

 

?>




<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <link rel="stylesheet" href="./admin_style.css">
</head>
<body>
  <div class="container">
    <div class="card">
          <h1 class="card-title">Welcome!!</h1>
          <small class="card-subtitle">Enter your credentials to get yourself Register!!</small>
          <form class="card-form" method ="post">
            <label for="username">Name</label>
              <div class="card-input-container username">
                  <input type="text" name="NAME" placeholder="Enter your name" id="name">
              </div>
              <label for="username">Username</label>
              <div class="card-input-container username">
                  <input type="text" name ="USERNAME" placeholder="Enter your username" id="username">
              </div>
              <label for="password">Email</label>
              <div class="card-input-container password">
                  <input type="email" name ="EMAIL" placeholder="Enter your email" id="email">
              </div>
              <label for="password">Password</label>
              <div class="card-input-container password">
                  <input type="password" name="PASSWORD" placeholder="Enter your password" id="password">
              </div>
              <button class="card-button">Sign Up</button>
              <p class="subtitle"> <a href="Adminindex.php">Dashboard </a></p>
              
          </form>
      </div>
  </div>
</body>
</html>