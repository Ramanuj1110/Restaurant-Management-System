
<?php
 session_start();

 include("connection.php");
 
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
  $USERNAME=  $_POST["USERNAME"];
  $PASSWORD = $_POST['PASSWORD'];

  if(!empty($PASSWORD) && !empty($USERNAME))
  {

    $query="select * from user_data where USERNAME ='$USERNAME' limit 1";
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
          <meta http-equiv="refresh" content="0;url = http://localhost/Red%20Chilles/Website.php"/>
          <?php
        }
        else{
            echo "<script type='text/javascript'> alert('WRONG USERNAME AND PASSWORD')</script>";
          }
      }
    }
    else{
      echo "<script type='text/javascript'> alert('WRONG USERNAME AND PASSWORD')</script>";
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

    <link rel="stylesheet" href="./s.css">
    <title>Login</title>
</head> 
<body>
    <section>
        <div class="imgBx">
            <img src="./Red Chillies logo(2).jpg" alt="Login background image">
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h2>Welcome back!</h2>
                <form method="post">
                    <div class="inputBx">
                        <span>Username</span>
                        <input type="username" name="USERNAME" >
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="PASSWORD">
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Log In">
                    </div>
                    <div class="inputBx">
                        <p>Don't have an account yet? <a href="s.php">Sign Up</a></p><span><a href="Admin_login.php">Admin login</span></p>
                        <span><a href="forgetp.php">Forget Password?</span>
                    </p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
