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
            <a href="customerFrontend.html" class="logo">JINO SKI RESORTS</a>

            <div class="menu-toggle">&#9776;</div>

            <ul>
                <li><a href="ticket.html">TICKETS</a></li>
                <li><a href="#">RESORTS</a></li>
                <li><a href="#">LIFTS</a></li>
                <li><a href="#">PROFILE</a></li>
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
                    <h2><?php echo $_SESSION['name']; ?></h2>
                    <!--<p>ssn: xxx-xx-1234</p>-->
                    <ul>
                        <li><span>Email:</span> <?php echo $_SESSION['email']; ?></li>
                        <li><span>DOB:</span> <?php echo $_SESSION['dob']; ?></li>
                        <li><span>Resort:</span> Crested Butte Mountain Resort</li>
                        <li><span>Ticket ID:</span> 1234</li>
                        <li><span>Purchased:</span> 2023-02-19 14:26:55</li>
                        <li><span>Expiration:</span> 2023-08-10</li>
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
            header("Location: ../customerLogin.html");
            exit();
    }
    ?>


