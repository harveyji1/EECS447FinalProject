<?php
    session_start();
    
    if(isset($_SESSION['password']) && isset($_SESSION['email'])){
    
        ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Profile Page</title>
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
                <li><a href="profile.php">PROFILE</a></li>
            </ul>
        </div>
    </nav>
    <main>
        <div class="container">
            <div class="profile">
                <div class="profile-image">
                    <img src="img/oreji.jpg" alt="Profile Picture"> <!--Change the picture please, other things could use some better formatting as well-->
                </div>
                <div class="profile-details">
                    <h2><?php echo $_SESSION['name']; ?></h2>
                    <p>Skier ID:<?php echo $_SESSION['skierid'];?></p>
                    <ul>
                        <li><span>Email:</span> <?php echo $_SESSION['email']; ?></li>
                        <li><span>DOB:</span> <?php echo $_SESSION['dob']; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p align="left">©2023 JINO SKI RESORTS</p>
        <a href = "logout.php"> <p align="right">LOGOUT</p></a> <!--This needs formatting-->
    </footer>

    <script>
        const menuToggle = document.querySelector('.menu-toggle');
        const nav = document.querySelector('nav ul');

        menuToggle.addEventListener('click', () => {
            nav.classList.toggle('active');
        });
    </script>
</body>
</html>
<?php
    }
    else{
            header("Location: ../customerLoginPage.php");
            exit();
    }
    ?>

