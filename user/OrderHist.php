
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


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./odr_his_style.css" />

    <title>My Profile</title>
  </head>
  <style>
    .table-data {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
      overflow: hidden;
    }

    .table-data h2 {
      margin-bottom: 10px;
      font-size: 18px;
      color: #333;
    }

    .table-data table {
      width: 100%;
      margin-bottom: 20px;
      border-collapse: collapse;
    }

    .table-data table th,
    .table-data table td {
      padding: 10px;
      border-bottom: 1px solid #f0f0f0;
      text-align: left;
    }

    .table-data table th {
      background-color: #f8f8f8;
      font-weight: bold;
      color: #555;
    }

    .table-data table tbody tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    .table-data table tfoot {
      background-color: #f8f8f8;
      font-weight: bold;
      color: #555;
    }

    .table-data table tfoot td {
      padding: 10px;
      text-align: right;
    }
  </style>

  <body>
    <section id="sidebar">
      <a href="#" class="brand">
        <span class="text">Red Chillies</span>
      </a>
      <ul class="side-menu top">
        <li class="active">
          <a href="./index.php">
            <i class="bx bxs-dashboard"></i>
            <span class="text">My Profile</span>
          </a>
        </li>
        <li>
          <a href="./ChangePas.php">
            <i class="bx bxs-shopping-bag-alt"></i>
            <span class="text">Change Password</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bxs-doughnut-chart"></i>
            <span class="text">Order History</span>
          </a>
        </li>
        <li>
          <ul class="side-menu">
            <li>
              <a href="#">
                <i class="bx bxs-cog"></i>
                <span class="text">Settings</span>
              </a>
            </li>
            <li>
              <a href="../Logout.php" class="logout">
                <i class="bx bxs-log-out-circle"></i>
                <span class="text">Logout</span>
              </a>
            </li>
          </ul>
        </li>
    </section>
    <section id="content">
      <main>
        <div class="head-title">
          <div class="left">
            <h1>Analytics</h1>
            <ul class="breadcrumb">
              <li>
                <a href="#">My Profile</a>
              </li>
              <li><i class="bx bx-chevron-right"></i></li>
              <li>
                <a class="active" href="#">Order History</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="table-data">
          <!-- Order 1 -->
          <div class="order-details">
            <h2>Order Details</h2>
           
            <div class="order-items">
              
              <table>
                <thead>
                  <tr>
                  <th>Order ID</th>
                    <th>Item</th>
                    <th>DATE</th>
                    
                    <th>Total Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Burger</td>
                    <td>2</td>
                    <td>₹20.00</td>
                    <td>₹40.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- End of Order 1 -->

          <!-- Order 2 -->
          <div class="order-details">
            <h2>Order Details</h2>
            <table>
              <thead>
                <tr>
                  <th>Order ID</th>
                  <th>Date</th>
                  <th>Total Amount</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>2</td>
                  <td>2024-07-01</td>
                  <td>₹25.00</td>
                </tr>
              </tbody>
            </table>
            <div class="order-items">
              <h2>Order Items</h2>
              <table>
                <thead>
                  <tr>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Pizza</td>
                    <td>1</td>
                    <td>₹15.00</td>
                    <td>₹15.00</td>
                  </tr>
                  <tr>
                    <td>Salad</td>
                    <td>1</td>
                    <td>₹10.00</td>
                    <td>₹10.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- End of Order 2 -->

        </div>

      </main>
    </section>
    <script src="./script.js"></script>
  </body>
</html>
