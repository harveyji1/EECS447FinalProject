<?php
session_start();
$mysqli = new mysqli("mysql.eecs.ku.edu", "h589j370", "iegh3Cho", "h589j370");

if ($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_error); exit();
  echo "<h1>Fail</h1>";
}

$email = $_POST["email"];
$queryEmail = "SELECT * FROM SKIER WHERE EMAIL='$email'";
$resultEmail = $mysqli->query($queryEmail);

if ($resultEmail->num_rows > 0) { //FORMAT THIS PLEASE, like the make 
header("Location: signupPage.php?error=Email already being used");
}
else{
    $password = $_POST["password"];
    $fullName = $_POST["fullName"];
    $dob = $_POST["dob"];
    $newSkierID = 0;
    
    do{
        $newSkierID = rand(100000000, 999999999);
        $queryID = "SELECT SKIERID FROM SKIER WHERE SKIERID = '$newSkierID'";
        $resultID = $mysqli->query($queryID);
    }while($resultID->num_rows > 0);

    $queryInsert = "INSERT INTO SKIER VALUES('$newSkierID', '$fullName', '$dob', '$email', '$password')";
    $resultInsert = $mysqli->query($queryInsert) or die('Query failed'.mysqli_error($mysqli));
    
    $queryCheck = "SELECT * FROM SKIER WHERE SKIERID = '$newSkierID'";
    $resultCheck = $mysqli->query($queryCheck);
    
    if($resultCheck->num_rows == 1){ //FORMAT THIS PLEASE
        echo "<p>Account Created Successfully! Please go back to Log in Page<p>";
    }
}

$mysqli->close();
?> 
  
