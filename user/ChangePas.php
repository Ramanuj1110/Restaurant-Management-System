<?php
session_start();
include("../connection.php");

$userprofile = $_SESSION['USERNAME'];
if (!$userprofile) {
    header("location:l.php");
    exit(); 
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $re_new_password = $_POST['re_new_password'];

    // Check if new passwords match
    if ($new_password != $re_new_password) {
        $error = "New passwords do not match!";
    } else {
        // Fetch the current password from the database
        $query = "SELECT PASSWORD FROM user_data WHERE USERNAME = '$userprofile'";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $current_password = $row['PASSWORD'];

            // Verify the old password
            if ($old_password == $current_password) {

                // Update the new password in the database
                $update_query = "UPDATE user_data SET PASSWORD = '$new_password' WHERE USERNAME = '$userprofile'";
                if (mysqli_query($con, $update_query)) {
                    $success = "Password updated successfully!";
                } else {
                    $error = "Error updating password. Please try again later.";
                }
            } else {
                $error = "Old password is incorrect!";
            }
        } else {
            $error = "User not found!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./f_style.css">
    <title>My Profile</title>
    <style>
        main {
            padding: 20px; 
        }
        .table-data {
            background-color: #fff; 
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 70%;
            margin-top: 20px;
        }
        .order {
            margin-bottom: 20px; 
        }
        .order .head {
            margin-bottom: 15px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table td {
            padding: 8px;
            border-bottom: 1px solid #f0f0f0; 
        }
        table td:first-child {
            font-weight: 600;
            color: #555;
            width: 30%; 
            max-width: 150px; 
        }
        input[type="password"] {
            width: calc(100% - 16px);
            padding: 10px; 
            border: 2px solid var(--blue); 
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
            box-sizing: border-box;
            margin-bottom: 8px; 
            max-width: 400px; 
        }
        input[type="password"]:focus {
            border-color: var(--blue); 
            outline: none;
        }
    </style>
</head>
<body>
    <section id="sidebar">
        <a href="#" class="brand">
            <span class="text">Red Chillies</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="./index.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">My Profile</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">Change Password</span>
                </a>
            </li>
            <li>
                <a href="./OrderHist.php">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Order History</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="../Logout.php" class="Logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <section id="content">
        <nav>
        </nav>
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Change Password</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">My Profile</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Change Password</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Update Password</h3>
                    </div>
                    <?php
                    if (isset($error)) {
                        echo "<p style='color: red;'>$error</p>";
                    }
                    if (isset($success)) {
                        echo "<p style='color: green;'>$success</p>";
                    }
                    ?>
                    <form method="POST" action="">
                        <table>
                            <tr>
                                <td>Old Password</td>
                                <td><input type="password" name="old_password" placeholder="Enter your old password" required></td>
                            </tr>
                            <tr>
                                <td>New Password</td>
                                <td><input type="password" name="new_password" placeholder="Enter your new password" required></td>
                            </tr>
                            <tr>
                                <td>Re-enter New Password</td>
                                <td><input type="password" name="re_new_password" placeholder="Re-enter your new password" required></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="submit" value="Update Password"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </main>
    </section>
    <script src="./script.js"></script>
</body>
</html>
