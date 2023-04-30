<?php
    session_start();
    
    if(isset($_SESSION['password']) && isset($_SESSION['email'])){
    
        ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Profile Page</title>
    <link rel="stylesheet" href="employee.css">
</head>
<body>
    <nav>
        <div class="container">
            <a href="employeeFrontend.php" class="logo">JINO SKI RESORTS</a>

            <div class="menu-toggle">&#9776;</div>

            <ul>
                <li><a href="#">BUY TICKETS</a></li>
                <li><a href="resorts.php">RESORTS</a></li>
                <li><a href="#">LIFTS</a></li>
                <li><a href="profile.php">PROFILE</a></li>
            </ul>
        </div>
    </nav>
    <main>
        <div class="container">
            <div class="profile">
                <div class="profile-image">
                    <img src="img/oreji.jpg" alt="Profile Picture">
                </div>
                <div class="profile-details">
                    <h2><?php echo $_SESSION['employeeName']; ?></h2>
                    <p>Employee ID:<?php echo $_SESSION['employeeID'];?></p>
                    <ul>
                        <li><span>Email:</span> <?php echo $_SESSION['email']; ?></li>
                        <li><span>Salary:</span> <?php echo $_SESSION['salary']; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p align="left">©2023 JINO SKI RESORTS</p>
        <a algin="right" href = "logout.php"> Logout</a>
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
            header("Location: ../employeeLoginPage.php");
            exit();
    }
    ?>


