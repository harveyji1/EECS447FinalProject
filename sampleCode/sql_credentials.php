<?php
    $mysqli = new mysqli("mysql.eecs.ku.edu", "h589j370", "iegh3Cho", "h589j370");
    /* check connection */
    if ($mysqli->connect_error) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
    
    else{
    printf("Connection successful");
    }
?>
