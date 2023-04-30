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
            <a href="customerFrontend.html" class="logo">JINO SKI RESORTS</a>

            <div class="menu-toggle">&#9776;</div>

            <ul>
                <li><a href="#">TICKETS</a></li>
                <li><a href="#">RESORTS</a></li>
                <li><a href="#">LIFTS</a></li>
                <li><a href="profile.php">PROFILE</a></li>
            </ul>
        </div>
    </nav>
    <main>
        <div class="hero__background__image" aria-hidden="true">
                <img src="img/header.jpeg" alt="hero__background__image">
        </div>
        </br><h1><center>Purchase Lift Tickets</center></h1></br>
        <form class="purchase-form" method="POST">
            
            <label for="resort-ticket">Resort:</label>
            <select name="resort-ticket" id="resort-ticket">
                <option value="crestedButte">Crested Butte Mountain Resort</option>
                <option value="winterPark">Winter Park Resort</option>
                <option value="breckenridge">Breckenridge Ski Resort</option>
                <option value="parkCity">Park City Mountain Resort</option>
                <option value="bigSky">Big Sky Resort</option>
                <option value="jacksonHole">Jackson Hole Mountain Resort</option>
            </select>

            </br><label for="ticket-type">Ticket Type:</label>
            <select name="ticket-type" id="ticket-type">
                <option value="adult">Adult (18+)</option>
                <option value="child">Child (7-17)</option>
                <option value="senior">Senior (65+)</option>
            </select>

            </br><label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" max="10">

            </br><label for="date">Date:</label>
            <input type="date" id="date" name="date">

        </br><button type="submit">Purchase</button>
        </form>
    </main>
    <footer>
        <p align="left">©2023 JINO SKI RESORTS</p>
    </footer>

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
    </script>
</body>
</html>
