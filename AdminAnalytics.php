
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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./AdminAnalytics_style.css" />

    <title>Analytics</title>
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
        <i class="bx bx-menu"></i>
        <a href="#" class="nav-link">Categories</a>
        <form action="#">
          <div class="form-input">
            <input type="search" placeholder="Search..." />
            <button type="submit" class="search-btn">
              <i class="bx bx-search"></i>
            </button>
          </div>
        </form>
        <input type="checkbox" id="switch-mode" hidden />
        <label for="switch-mode" class="switch-mode"></label>
        <a href="#" class="notification">
          <i class="bx bxs-bell"></i>
          <span class="num">8</span>
        </a>
        <a href="#" class="profile">
          <img src="./img/img1.jpg" />
        </a>
      </nav>
      <main>
        <div class="head-title">
          <div class="left">
            <h1>Analytics</h1>
            <ul class="breadcrumb">
              <li>
                <a href="#">Dashboard</a>
              </li>
              <li><i class="bx bx-chevron-right"></i></li>
              <li>
                <a class="active" href="#">Analytics</a>
              </li>
            </ul>
          </div>
          <a href="#" class="btn-download">
            <i class="bx bxs-cloud-download"></i>
            <span class="text">Download PDF</span>
          </a>
        </div>

        <div class="table-data">
          <div class="chart-container">
            <canvas id="barChart"></canvas>
          </div>

          <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
          <script>
           
            var barChartData = {
              labels: [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday",
                "Sunday",
              ],
              datasets: [
                {
                  label: "Daily Sales",
                  backgroundColor: "rgba(75, 192, 192, 0.6)",
                  borderColor: "rgba(75, 192, 192, 1)",
                  borderWidth: 1,
                  data: [120, 150, 200, 180, 250, 220, 170],
                },
              ],
            };
            var barCtx = document.getElementById("barChart").getContext("2d");
            var barChart = new Chart(barCtx, {
              type: "bar",
              data: barChartData,
              options: {
                scales: {
                  y: {
                    beginAtZero: true,
                  },
                },
              },
            });
          </script>
          <div class="chart-container">
            <div class="chart-container">
              <canvas id="pieChart"></canvas>
              <div class="legend">
                <div class="legend-item">
                  <div
                    class="legend-color"
                    style="background-color: #ff6347"
                  ></div>
                  <span>Sales</span>
                </div>
                <div class="legend-item">
                  <div
                    class="legend-color"
                    style="background-color: #3498db"
                  ></div>
                  <span>Customers</span>
                </div>
                <div class="legend-item">
                  <div
                    class="legend-color"
                    style="background-color: #f1c40f"
                  ></div>
                  <span>New Login</span>
                </div>
              </div>
            </div>

            <script>
              window.onload = function () {
                var ctx = document.getElementById("pieChart").getContext("2d");
                var pieChart = new Chart(ctx, {
                  type: "pie",
                  data: {
                    labels: ["Sales", "Customers", "New Login"],
                    datasets: [
                      {
                        data: [30, 40, 30],
                        backgroundColor: ["#ff6347", "#3498db", "#f1c40f"],
                      },
                    ],
                  },
                  options: {
                    responsive: true,
                    maintainAspectRatio: false,
                  },
                });
              };
            </script>
          </div>
          <div id="chart-container">
            <canvas id="lineChart"></canvas>
        </div>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
        <script>
            // Sample data for the line chart
            var lineChartData = {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [{
                    label: 'Sales',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    pointBackgroundColor: 'rgba(75, 192, 192, 1)',
                    fill: false,
                    data: [65, 59, 80, 81, 56, 55]
                }]
            };
    
            // Create Line Chart
            var lineCtx = document.getElementById('lineChart').getContext('2d');
            var lineChart = new Chart(lineCtx, {
                type: 'line',
                data: lineChartData,
                options: {
                    scales: {
                        x: {
                            type: 'linear',
                            position: 'bottom'
                        },
                        y: {
                            beginAtZero: true
                        }
                    },
                    elements: {
                        point: {
                            radius: 5,
                            pointStyle: 'circle',
                            backgroundColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 2,
                            borderColor: 'rgba(75, 192, 192, 1)'
                        }
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return 'Sales: ' + context.raw;
                                }
                            }
                        }
                    }
                }
            });
        </script>
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
