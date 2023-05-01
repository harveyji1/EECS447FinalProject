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
    <title>JINO SKI RESORTS</title>
    <link rel="stylesheet" href="customer.css">
</head>
<body>
    <nav>
        <div class="container">
            <a href="customerFrontend.php" class="logo">JINO SKI RESORTS</a>

            <div class="menu-toggle">&#9776;</div>

            <ul>
                <li><a href= "myTickets.php">MY TICKETS</a></li>
                <li><a href="buyTickets.php">BUY TICKETS</a></li>
                <li><a href="resortsPage.php">RESORTS</a></li>
                <li><a href="myLifts.php">MY LIFTS</a></li>
                <?php if ($loggedIn){?>
                <li id="profile"><a href="profile.php">PROFILE</a></li>
                <?php
                    }
                    else{ ?>
                <li><a href="../customerLoginPage.php">SIGN IN</a></li>
                <?php } ?>
            </ul>
        </div>
    </nav>

    <main>
        <section>
            <h2>WELCOME TO JINO SKI RESORTS</h2>

            <p>Welcome to Jino Ski Resort! Our website is your one-stop-shop for all things skiing. 
                Whether you're looking to buy a ticket, explore other ski resorts, or check out our lifts, we've got you covered. 
                Our site is designed to be easy to navigate and provide you with all the information you need to plan your next ski adventure. 
                So come on in, take a look around, and get ready to hit the slopes!</p>
        </section>
        <h2>Search Resorts</h2>
        <form class="lift-search">
            <label for="resort-select">Select a resort:</label>
            <select id="resort-select">
              <option value="">Choose a Resort</option>
              <option value="crestedButte">Crested Butte Mountain Resort</option>
              <option value="winterPark">Winter Park Resort</option>
              <option value="breckenridge">Breckenridge Ski Resort</option>
              <option value="parkCity">Park City Mountain Resort</option>
              <option value="bigSky">Big Sky Resort</option>
              <option value="jacksonHole">Jackson Hole Mountain Resort</option>
            </select>
            <label for="lift-select">Select a Lift Type:</label>
            <select id="lift-select" name="lift-select">
              <option value="">Choose a Lift</option>
              <option value="chairLift">Chair Lift</option>
              <option value="gondola">Gondola</option>
            </select>
            <button type="submit">Search</button>
          </form>

        <section class="resorts">
        </br><h2>Featured Resorts</h2>
            <div class="resort-container">
                <div class="resort">
                <a href="#crestedButte">
                    <img src="img/crestedButte.jpg" alt="Crested Butte Mountain Resort">
                    <h3>Crested Butte Mountain Resort</h3>
                </a>
                </div>
                <div class="resort">
                <a href="#winterPark">
                    <img src="img/winterPark.jpg" alt="Winter Park Resort">
                    <h3>Winter Park Resort</h3></br>
                </a>
                </div>
                <div class="resort">
                <a href="#breckenridge">
                    <img src="img/breckenridge.jpg" alt="Breckenridge Ski Resort">
                    <h3>Breckenridge Ski Resort</h3>
                </a>
                </div>
                <div class="resort">
                <a href="#parkCity">
                    <img src="img/parkCity.jpg" alt="Park City Mountain Resort">
                    <h3>Park City Mountain Resort</h3>
                </a>
                </div>
                <div class="resort">
                <a href="#bigSky">
                    <img src="img/bigSky.jpg" alt="Big Sky Resort">
                    <h3>Big Sky Resort</h3>
                </a>
                </div>
                <div class="resort">
                <a href="#jacksonHole">
                    <img src="img/jacksonHole.jpg" alt="Jackson Hole Mountain Resort">
                    <h3>Jackson Hole Mountain Resort</h3>
                </a>
                </div>
            </div>
            </section>
              
    </main>

    <footer>
        <p align="left">©2023 JINO SKI RESORTS</p>
    </footer>

    <!--<script>
        const menuToggle = document.querySelector('.menu-toggle');
        const nav = document.querySelector('nav ul');
        const signinLink = document.querySelector('nav ul li:nth-child(6) a');
        const profileLink = document.querySelector('#profile');

        menuToggle.addEventListener('click', () => {
            nav.classList.toggle('active');
        });

       /* signinLink.addEventListener('click', (event) => {
            event.preventDefault();
            signinLink.href = "../customerLoginPage.php";
        });*/
        <?php if($loggedIn){?>
            profileLink.style.display = 'inline';
            signinLink.style.display = 'none';<?php
        }?> 
    </script>-->
</body>
</html>
