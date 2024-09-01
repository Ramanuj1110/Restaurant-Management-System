
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

	<title>User Details</title>
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
				<a href="./Adminadd.php">
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
					<h1>User Details</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">User Details</a>
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
						<h3>Registered User</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<?php

					  $query = "SELECT * FROM user_data";
                       $data = mysqli_query($con, $query);

                       $total = mysqli_num_rows($data);

                       if ($total != 0) {
						?>
                        <table>
						    <thead>
							    <tr>
                                     <th>User ID</th>
                                     <th>Name</th>
								     <th>Username</th>
								     <th>Email</th>
								     <th>Address</th>
									 <th>Operation</th>
							    </tr>
						    </thead>
						    <tbody>
						     <?php
                                while ($result = mysqli_fetch_assoc($data)) {
                                echo "<tr>
                                    <td>" . $result['USER_ID'] . "</td>
                                    <td>" . $result['NAME'] . "</td>
                                    <td>" . $result['USERNAME'] . "</td>
                                    <td>" . $result['EMAIL'] . "</td>
							        <td>" . $result['ADDRESS'] . "</td>
									<td> 
									<a href='./deleteuser.php?USERNAME= $result[USER_ID];'><button onclick = 'return checkdelete()'>Delete</button></a>
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
	<script src="./Adminscript.js"></script>
	
	<script>
		function checkdelete()
		{
			return confirm('Are you sure you want to delete this Food ? ')
		}


	</script>
</body>
</html>