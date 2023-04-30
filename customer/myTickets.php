<?php
    session_start();
    
    if(isset($_SESSION['password']) && isset($_SESSION['email'])){
        $mysqli = new mysqli("mysql.eecs.ku.edu", "h589j370", "iegh3Cho", "h589j370");

    if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error); exit();
    echo "<h1>Connection to Database Fail</h1>";
}   

$numTicket=0;
$skierID = $_SESSION['skierid'];
$queryTicket = "SELECT TICKETID, TICKETS.SKIERID, NAME, PURCHASEDDATE, EXPIRATIONDATE, RESORTNAME FROM TICKETS, SKIER WHERE TICKETS.SKIERID='$skierID' AND SKIER.SKIERID=TICKETS.SKIERID";
$result = $mysqli->query($queryTicket);

if($result->num_rows > 0) {
  // output data of each row
  ?>
  <!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>My Tickets Page</title>
    <link rel="stylesheet" href="customer.css">
</head>
 <table class="table table-hover table-borderless" >
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
                      </html> <?php
      }
  }

else{
  echo "No Tickets found. If you believe this an error, please contact Customer Support.";
}
        ?>
<?php
    }
    else{
            header("Location: ../customerLoginPage.php");
            exit();
    }
    ?>
