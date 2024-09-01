<?php
session_start();
include("../connection.php");
$userprofile = $_SESSION['USERNAME'];
if ($userprofile == true) {
    // User is logged in
} else {
    header("location:l.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./style.css">
    <title>My Profile</title>
</head>
<body>
    <section id="sidebar">
        <a href="#" class="brand">
            <span class="text">Red Chillies</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">My Profile</span>
                </a>
            </li>
            <li>
                <a href="./ChangePas.php">
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
            <div class="home-button">
                <a href="../Website.php" class="btn-home">Home</a>
            </div>
        </nav>
        <main>
            <?php
            $USERNAME = $_SESSION['USERNAME'];
            $query = "SELECT * FROM user_data WHERE USERNAME = '$USERNAME'";
            $data = mysqli_query($con, $query);
            $result = mysqli_fetch_assoc($data);

            $NAME = $result["NAME"];
            $EMAILID = $result['EMAIL'];
            $ADDRESS = $result['ADDRESS'];
            $userImage = $result["userimages"];
            ?>
            <div class="head-title">
                <div class="left">
                    <h1>My Profile</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">My Profile</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>              
            </div>
            <ul class="box-info">
                <li>
                    <div class="profile-section">
                        <label for="profile-photo" >Profile Photo</label>
                        <?php echo "<img src=' $userImage ' >"; ?>
                    </div>
                </li>
            </ul>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Details</h3>
                    </div>
                    <table>

                        <tr>
                            <td>Name</td>
                            <td><input type="text" value="<?php echo $NAME; ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" value="<?php echo $USERNAME; ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="email" value="<?php echo $EMAILID; ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><input type="text" value="<?php echo $ADDRESS; ?>" readonly></td>
                        </tr>                       
                    </table>
                </div>              
            </div>
        </main>
    </section>
    <script src="./script.js"></script>
</body>
</html>
