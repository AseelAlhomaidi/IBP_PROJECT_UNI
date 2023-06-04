<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
} elseif ($_SESSION['usertype'] == 'student') {
    header("location:login.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>


    <title>Admin dashboard</title>
</head>

<body class="back_des">
    <?php
    include 'admin_sidebar.php';
    ?>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu' ></i>
            <span class="text">dashboard</span>
        </div>
    </section>
<script src="../js/app.js"></script>
</body>

</html>


<!-- <h1>Admin Panel</h1> -->
<!-- <a href="logout.php">Logout</a> -->