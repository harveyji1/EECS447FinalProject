<?php
    $sname = "mysql.eecs.ku.edu";
    $uname = "h589j370";
    $password = "iegh3Cho";
    $db_name = "h589j370";
    
    $conn = mysqli_connect($sname, $uname, $password, $db_name);
    /* check connection */
    if(!$conn){
       echo "Connection Failed";
    }

?>

