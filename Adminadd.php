
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

if($_SERVER['REQUEST_METHOD']=="POST") {
    $FOOD = $_POST["FOOD"];
    $PRICE = $_POST["PRICE"];
	$DESCRIPTION = $_POST["DESCRIPTION"];
	$CATEGORY = $_POST["CATEGORY"];

    $filename = $_FILES["IMAGE"]["name"];
    $tempname = $_FILES["IMAGE"]["tmp_name"];
    $folder = "foodimages/" . $filename;
    move_uploaded_file($tempname, $folder);

    $query = "INSERT INTO food_detail( FOOD_IMAGE,FOOD, PRICE,DESCRIPTIONS,CATEGORY) VALUES ( '$folder','$FOOD', '$PRICE','$DESCRIPTION','$CATEGORY')";

    $data = mysqli_query($con, $query);

    if($data) {
      
       
    } else {
        echo "Failed to insert data into the database.";
    }
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="./Adminadd_style.css">

	<title>Admin Dashboard</title>
</head>
<body>
	<section id="sidebar">
		<a href="#" class="brand">
			<span class="text">Red Chillies</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="./Adminindex.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="./Adminfood.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Food</span>
				</a>
			</li>
			<li>
				<a href="./AdminAnalytics.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Analytics</span>
				</a>
			</li>
			<li>
				<a href="./AdminFeedback.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Feedback</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Add on</span>
				</a>
			</li>
			<li>
				<a href="./AdminUser_details.php">
					<i class='bx bxs-group' ></i>
					<span class="text">User Details</span>
				</a>
			</li>
			<li>
				<a href="./Reservation_admin.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Reservation</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
			     <a href="./Adminlogout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				 </a>
			</li>
		</ul>
	</section>
	<section id="content">
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="./img/img1.jpg">
			</a>
		</nav>
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Add on</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Add on</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>	

			<div class="table-data">
				<div class="formBx">
					<h2>Register Food!!</h2>
	
					<form method="post" action="#" enctype="multipart/form-data">
						
						<div class="inputBx">
							<span>IMAGE</span>
							<input type="FILE"name="IMAGE">
						</div>
						<div class="inputBx">
							<span>FOOD</span>
							<input type="name" name="FOOD">
						</div>
						<div class="inputBx">
							<span>PRICE</span>
							<input type="VALUE" name="PRICE">
						</div>
						<div class="inputBx">
							<span>DESCRIPTION</span>
							<input type="VALUE" name="DESCRIPTION">
						</div>

						<div class="inputBx">
							<span>CATEGORY</span>
							<input type="VALUE" name="CATEGORY">
						</div>
					  
						
						<div class="inputBx">
							<input type="submit" name="submit" value="UPLOAD">
						</div>
					</form>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Todos</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div>
			</div>
		</main>
	</section>
	<script src="./Adminscript.js"></script>
</body>
</html>