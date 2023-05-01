<?php
    session_start();
    
    if(isset($_SESSION['password']) && isset($_SESSION['email'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Lift Tickets</title>
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
        <div class="hero__background__image" aria-hidden="true">
                <img src="img/header.jpeg" alt="hero__background__image">
        </div>
        </br><h1><center>Purchase Lift Tickets</center></h1></br>
        <form class="purchase-form" method="POST" action="buyTicketBackend.php">
            
            <label for="resort-ticket">Resort:</label>
            <select name="resort-ticket" id="resort-ticket">
                <option value="Crested Butte Mountain Resort">Crested Butte Mountain Resort</option>
                <option value="Winter Park Resort">Winter Park Resort</option>
                <option value="Breckenridge Ski Resort">Breckenridge Ski Resort</option>
                <option value="Park City Mountain Resort">Park City Mountain Resort</option>
                <option value="Big Sky Resort">Big Sky Resort</option>
                <option value="Jackson Hole Mountain Resort">Jackson Hole Mountain Resort</option>
            </select>

            </br><label for="ticket-type">Ticket Type:</label>
            <select name="ticket-type" id="ticket-type">
                <option value="adult">Adult (18+)</option>
                <option value="child">Child (7-17)</option>
                <option value="senior">Senior (65+)</option>
            </select>

            </br><label for="date">Wanted Expiration Date:</label>
            <input type="date" id="date" name="date">

        </br><button type="submit">Purchase</button>
        </form>
    </main>
    <footer>
        <p align="left">©2023 JINO SKI RESORTS</p>
    </footer>
<!-- Optional JS
    <script>
        const menuToggle = document.querySelector('.menu-toggle');
        const nav = document.querySelector('nav ul');
        const purchaseForm = document.getElementById('purchase-form');

        menuToggle.addEventListener('click', () => {
            nav.classList.toggle('active');
        });

        purchaseForm.addEventListener('submit', (event) => {
            event.preventDefault();

            const signedIn = false; // Replace with actual sign-in check

            if (signedIn) {
                purchaseForm.submit();
            } else {
                signInLink.href = "/customerLogin.html";
            }
        });
    </script> -->
</body>
</html>

<?php

}
else{
    header("Location: ../customerLoginPage.php");
            exit();
}

?>
