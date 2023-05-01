<!DOCTYPE html>
        <html>
        <head>
	        <meta charset="UTF-8">
	        <title>Buy Tickets Page</title>
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

<?php
    session_start();
    
    if(isset($_SESSION['password']) && isset($_SESSION['email'])){
        $mysqli = new mysqli("mysql.eecs.ku.edu", "h589j370", "iegh3Cho", "h589j370");

    if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error); exit();
    echo "<h1>Connection to Database Fail</h1>";
    }
    
    $resort = $_POST["resort-ticket"];
    $ticketType = $_POST["ticket-type"];
    date_default_timezone_set("America/Chicago");
    $currentDate = date("Y-m-d H:i:s");
    $wantedExpire = $_POST["date"];
    $skierID = $_SESSION['skierid'];
    $newTicketID = 0;
    
    do{
        $newTicketID = rand(1000, 9999);
        $queryTicketID = "SELECT TICKETID FROM TICKET WHERE TICKETID = '$newTicketID'";
        $resultTicketID = $mysqli->query($queryTicketID);
    }while($resultTicketID->num_rows > 0);

  
    $queryPurchase = "INSERT INTO TICKETS VALUES('$newTicketID', '$skierID', '$currentDate', '$wantedExpire', '$resort')";
    $mysqli->query($queryPurchase);
    
    $queryCheck = "SELECT * FROM TICKETS WHERE TICKETID = '$newTicketID'";
    $resultCheck = $mysqli->query($queryCheck);
    if($resultCheck->num_rows == 1){//FORMAT THIS PLEASE
        echo "Purchase was Successful! Check your tickets on the My Tickets page!";
    }
    else{
        echo "Purchase was Unsuccessful, please try again. If problem persists, please contact Customer Support";
    }
    ?>
        
    <?php
 }
 else{
    header("Location: ../customerLoginPage.php");
            exit();
 }
 ?>
     </body>
     
        <footer>
        <p align="left">©2023 JINO SKI RESORTS</p>
        </footer>
        
    </html>
