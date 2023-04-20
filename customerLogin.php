<?php
    
	$conn = mysql_connect('mysql.eecs.ku.edu', 'h589j370', 'iegh3Cho')
    		or die('Could not connect: ' . mysql_error());
	echo 'Connected successfully <br>';
	mysql_select_db('h589j370') or die('Could not select database');
    
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "SELECT * FROM SKIER WHERE EMAIL = '$email' AND PASSWORD = '$password'";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
    
    echo "Number of records: ".mysql_num_rows($result)."<br>";
    
    if(mysql_num_rows($result) == 0){
        echo 'Invalid Email or Username. Please Try Again';
    }
    
    else{
        echo'Login Succesful!';
    }
    
    // Free resultset
	mysql_free_result($result);

// Close connection
	mysql_close($link);

?> 
  
