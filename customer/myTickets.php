<?php
    session_start();
    
    if(isset($_SESSION['password']) && isset($_SESSION['email'])){
        $mysqli = new mysqli("mysql.eecs.ku.edu", "h589j370", "iegh3Cho", "h589j370");

    if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error); exit();
    echo "<h1>Connection to Database Fail</h1>";
    }
    ?>
        <!DOCTYPE html>
        <html>
        <head>
	        <meta charset="UTF-8">
	        <title>My Tickets Page</title>
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
<?php
$numTicket=0;
$skierID = $_SESSION['skierid'];
$queryTicket = "SELECT TICKETID, TICKETS.SKIERID, NAME, PURCHASEDDATE, EXPIRATIONDATE, RESORTNAME FROM TICKETS, SKIER WHERE TICKETS.SKIERID='$skierID' AND SKIER.SKIERID=TICKETS.SKIERID";
$result = $mysqli->query($queryTicket);

if($result->num_rows > 0) {
  // output data of each row
  ?>
<div class = "table-container">
 <table> <!--FORMAT THIS TABLE PLEASE, The div table-container might help: its purpose is to keep the footer where its at-->
                <thead>
                    <th scope="col" class="table-header"> Ticket ID </th>
                    <th scope="col" class="table-header"> Purchase Date </th>
                    <th scope="col" class="table-header"> Expiration Date </th>
                    <th scope="col" class="table-header"> Resort name </th>
                    <th scope="col" class="table-header">  </th>
                </thead>
  <?php
  while($row = $result->fetch_assoc()) {
          $_SESSION['ticketID']=$row['TICKETID'];
          $_SESSION['purchasedDate']=$row['PURCHASEDDATE'];
          $_SESSION['expirationDate']=$row['EXPIRATIONDATE'];
          $_SESSION['resortName']=$row['RESORTNAME'];
          $numTicket++;
           ?>
                      <tr>
                          <td> <?php echo $_SESSION['ticketID']; ?></td>
                          <td> <?php echo $_SESSION['purchasedDate']; ?> </td>
                          <td> <?php echo $_SESSION['expirationDate']; ?> </td>
                          <td> <?php echo $_SESSION['resortName']; ?> </td>
                      </tr>
                      
                      <?php
      } ?>
          </table>
          <?php
  }

else{
    //FORMAT PLEASE
  echo "<p>No Tickets found. If you believe this is an error, please contact Customer Support.<p>";
}

    }
    else{
            header("Location: ../customerLoginPage.php");
            exit();
    }
    ?>
    </div>
</main>
    <footer>
        <p align="left">©2023 JINO SKI RESORTS</p>
    </footer>
    </body>
</html>
