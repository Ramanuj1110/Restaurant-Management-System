
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
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="./f_style.css">

	<title>Food</title>
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
					<h1>Food</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Food</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Registered food</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<?php

					  $query = "SELECT * FROM food_detail";
                       $data = mysqli_query($con, $query);

                       $total = mysqli_num_rows($data);

                       if ($total != 0) {
						?>
					<table>
						<thead>
							<tr>
                                <th>Food ID</th>
                                <th>Food Image</th>
								<th>Food</th>
								<th>Price</th>
								<th>Description</th>
								<th>Category</th>
                                <th><span>Operations</span></th>
							</tr>
						</thead>
						<tbody>
						<?php
                                while ($result = mysqli_fetch_assoc($data)) {
                                echo "<tr>
                                    <td>" . $result['FOOD_ID'] . "</td>
                                    <td><img src='" . $result['FOOD_IMAGE'] . "' height='100px' width='100px'></td>
                                    <td>" . $result['FOOD'] . "</td>
                                    <td>" . $result['PRICE'] . "</td>
							        <td>" . $result['DESCRIPTIONS'] . "</td>
									<td>" .$result['CATEGORY'] . "</td>
							        <td><a href='./AdminUpdate.php'><button>Update</button></a> 
									<a href='./deletefood.php?food_id= $result[FOOD_ID];'><button onclick = 'return checkdelete()'>Delete</button></a>
                                   <a href='./bestseller.php?food_id= $result[FOOD_ID];'><button onclick = 'return checkadd()'>Bestseller</button></a>
                                   </td>


                        
                                  </tr>";
					              }
                     
                                 
                               ?>
						</tbody>
					</table>

					<?php
                     }
                    ?>
				</div>								
			</div>
			<div class="best-data">
				<div class="bestseller">
					<div class="head">
						<h3>Bestseller Foods</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<?php

					  $query = "SELECT * FROM bestsaller";
                       $data = mysqli_query($con, $query);

                       $total = mysqli_num_rows($data);

                       if ($total != 0) {
						?>
					<table>
						<thead>
							<tr>
                                <th>Food ID</th>
                                <th>Food Image</th>
								<th>Food</th>
								<th>Price</th>
								<th>Description</th>
								<th>Category</th>
                                <th>Operations</th>
							</tr>
						</thead>
						<tbody>
						<?php
                                while ($result = mysqli_fetch_assoc($data)) {
                                echo "<tr>
                                    <td>" . $result['FOOD_ID'] . "</td>
                                    <td><img src='" . $result['FOOD_IMAGE'] . "' height='100px' width='100px'></td>
                                    <td>" . $result['FOOD'] . "</td>
                                    <td>" . $result['PRICE'] . "</td>
							        <td>" . $result['DESCRIPTIONS'] . "</td>
									<td>" .$result['CATEGORY'] . "</td>
							        <td> 
									<a href='./deletebestseller.php?food_id= $result[FOOD_ID];'><button onclick = 'return checkdelete()'>Delete</button></a>
									</td>

                        
                                  </tr>";
					              }
                     
                                 
                               ?>
						</tbody>
					</table>

					<?php
                     }
                    ?>
				</div>			
			</div>
		</main>
	</section>

	<script>
		function checkdelete()
		{
			return confirm('Are you sure you want to delete this Food ? ')
		}


	</script>
	<script>
		function checkadd()
		{
			return confirm('Are you sure you want to add to Bestseller ? ')
		}


	</script>

	<script src="./script.js"></script>
</body>
</html>