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
	        <title>My Lifts Page</title>
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
$skierID = $_SESSION['skierid'];
$queryLifts = "SELECT TICKETID, LIFTS.RESORTNAME, LIFTNAME FROM LIFTS, TICKETS WHERE TICKETS.SKIERID='$skierID' AND TICKETS.RESORTNAME=LIFTS.RESORTNAME";
$result = $mysqli->query($queryLifts);

if($result->num_rows > 0) {
  // output data of each row
  ?>
  <div class="table-container"> <!--FORMAT THIS TABLE PLEASE, The div table-container might help: its purpose is to keep the footer where its at-->
 <table>
                <thead>
                    <th scope="col" class="table-header"> Ticket ID </th>
                    <th scope="col" class="table-header"> Resort name </th>
                    <th scope="col" class="table-header"> Liftname </th>
                    <th scope="col" class="table-header">  </th>
                </thead>
  <?php
  while($row = $result->fetch_assoc()) {
          $_SESSION['ticketID']=$row['TICKETID'];
          $_SESSION['resortName']=$row['RESORTNAME'];
          $_SESSION['liftName']=$row['LIFTNAME'];
           ?>
                      <tr>
                          <td> <?php echo $_SESSION['ticketID']; ?></td>
                          <td> <?php echo $_SESSION['resortName']; ?> </td>
                          <td> <?php echo $_SESSION['liftName']; ?> </td>
                      </tr>
                      <?php
      }
      ?>
      </table>
      <?php
  }

else{ //FORMAT THIS PLEASE
  echo "<p>No Tickets found. If you believe this an error, please contact Customer Support.</p>";
}
        ?>
<?php
    }
    else{
            header("Location: ../customerLoginPage.php");
            exit();
    }
    ?>
    </div>
 </main>
 </body>
     <footer>
        <p align="left">©2023 JINO SKI RESORTS</p>
    </footer>
 </html>
