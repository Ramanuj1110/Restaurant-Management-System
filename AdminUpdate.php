
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






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Food Item</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        #update-food-container {
            width: 80%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            display: grid;
            gap: 20px;
        }

        label {
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            background-color: #e44d26;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #d43e21;
        }

        /* Style for file input */
        input[type="file"] {
            padding: 8px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div id="update-food-container">
        <h1>Update Food Item</h1>

        <form method="post">
        
            <label for="food-name">Food Name:</label>
            <input type="text"  id="food-name" name="food-name" required>

            <label for="food-image">Food Image:</label>
            <input type="file" id="food-image" name="food-image" accept="image/*" required>

            <label for="Price">Price:</label>
            <input type="text"  id="Price" name="price" required>

            <label for="food-description">Food Description:</label>
            <input id="food-description"  name="food-description" rows="4" required></input>

            <label for="food-category">Food Category:</label>
            <input id="food-category" name="food-category" required></input>


            <button type="submit">Update Food</button>

            <a href="./Adminfood.php">Food</a>
        </form>
    </div>
</body>
</html>



