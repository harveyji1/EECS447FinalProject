<?php
    session_start();
    $loggedIn=false;
    if(isset($_SESSION['password']) && isset($_SESSION['email'])){
        $loggedIn=true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Featured Resorts</title>
    <link rel="stylesheet" href="customer.css">
</head>
<body>
    <nav>
        <div class="container">
            <a href="customerFrontend.php" class="logo">JINO SKI RESORTS</a>

            <div class="menu-toggle">&#9776;</div>

            <ul>
                <li><a href="myTickets.php">MY TICKETS</a></li>
                <li><a href="buyTickets.php">BUY TICKETS</a></li>
                <li><a href="resortsPage.php">RESORTS</a></li>
                <li><a href="myLifts.php">MY LIFTS</a></li>
                <?php if($loggedIn){ ?>
                <li><a href="profile.php">PROFILE</a></li>
                <?php }
                else{ ?>
                <li><a href="../customerLoginPage.php">SIGN IN</a></li>
                <?php }?>
            </ul>
        </div>
    </nav>
    <main>
    <p> Resorts is all you Audrey! This shouldn't require any php. Just make it look nice </p>
    </main>
    <footer>
        <p align="left">©2023 JINO SKI RESORTS</p>
    </footer>

</body>
</html>
