<?php
    //Create connection credentials
    $db_host = "localhost";
    $user = "root";
    $password = "pass123";
    $db_name = "quizzer";
    
    $mysqli = new mysqli($db_host, $user, $password, $db_name);
    if($mysqli->connect_error){
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
?>