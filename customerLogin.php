<?php

session_start();
$mysqli = new mysqli("mysql.eecs.ku.edu", "h589j370", "iegh3Cho", "h589j370");

if ($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_error); exit();
  echo "<h1>Fail</h1>";
}

$isSuccess=0;
$email = $_POST["email"];
$password = $_POST["password"];
$querySkier = "SELECT * FROM SKIER WHERE EMAIL='$email' AND PASSWORD='$password'";
$result = $mysqli->query($querySkier);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      $dbPassword = $row['PASSWORD'];
      $dbEmail = $row['EMAIL'];
      if($dbPassword == $password && $dbEmail == $email)
      {
          $_SESSION['name']=$row['NAME'];
          $_SESSION['email']=$row['EMAIL'];
          $_SESSION['dob']=$row['DOB'];
          $_SESSION['password']=$row['PASSWORD'];
          $_SESSION['skierid']=$row['SKIERID'];
          $isSuccess=1;
          echo "Login Found";
      }
  }
}
else {
  echo "0 results";
}



if ($isSuccess == 0) {
    header("Location: customerLoginPage.php?error=Incorrect User Name or Password");
} else 
{
    header("Location: customer/profile.php");
}

$mysqli->close();
?> 
  
