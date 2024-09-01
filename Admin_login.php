

<?php
 session_start();

 include("connection.php");
 
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
  $USERNAME=  $_POST["USERNAME"];
  $PASSWORD = $_POST["PASSWORD"];

  if(!empty($PASSWORD) && !empty($USERNAME))
  {

    $query="select * from admin_data where USERNAME ='$USERNAME' limit 1";
    $result = mysqli_query($con,$query);

    if($result)
    {

      if($result && mysqli_num_rows($result)>0)
      {
        $user_data = mysqli_fetch_assoc($result);

        if($user_data['PASSWORD'] == $PASSWORD)
        {
          $_SESSION['USERNAME']=$USERNAME;
       
                   echo "<script>alert('Login Successfully')</script>";
                    ?>
                    <meta http-equiv="refresh" content="0;url = http://localhost/Red%20Chilles/Adminindex.php"/>
                    <?php
                  }
                  else{
                    echo "<script type='text/javascript'> alert('WRONG USERNAME AND PASSWORD')</script>";
                  }
        }
        else{
          echo "<script type='text/javascript'> alert('WRONG USERNAME AND PASSWORD')</script>";
        }
      }
      else{
        echo "<script type='text/javascript'> alert('WRONG USERNAME AND PASSWORD')</script>";
      }
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
          <h1 class="card-title">Hello Admin!</h1>
          <small class="card-subtitle">Enter your credentials and get access</small>
          <form class="card-form" method="post">
              <label for="username">Username</label>
              <div class="card-input-container username">
                  <input type="text" placeholder="Enter your username" name="USERNAME" id="USERNAME">
              </div>
              <label for="password">Password</label>
              <div class="card-input-container password">
                  <input type="password" placeholder="Enter your password" name="PASSWORD" id="PASSWORD">
              </div>
              <button class="card-button">Sign In</button>
             
              
              <small><a href="l.php">User Login </a></p></small>
             
                    </p>
          </form>
      </div>
  </div>
</body>
</html>