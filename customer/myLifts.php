<?php
    session_start();
    
    if(isset($_SESSION['password']) && isset($_SESSION['email'])){
        $mysqli = new mysqli("mysql.eecs.ku.edu", "h589j370", "iegh3Cho", "h589j370");

    if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error); exit();
    echo "<h1>Connection to Database Fail</h1>";
}   

$skierID = $_SESSION['skierid'];
$queryLifts = "SELECT TICKETID, LIFTS.RESORTNAME, LIFTNAME FROM LIFTS, TICKETS WHERE TICKETS.SKIERID='$skierID' AND TICKETS.RESORTNAME=LIFTS.RESORTNAME";
$result = $mysqli->query($queryLifts);

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
