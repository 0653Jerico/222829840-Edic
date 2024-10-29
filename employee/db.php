<?php

    $servername = "localhost";
    $username = "jekai";
    $pwd = "Jekai@0653560";
    $dbname = "employee";


    $conn = new mysqli($servername, $username, $pwd, $dbname);

    if ($conn->connect_error){
        die("Connection Failed" . $conn->connect_error);
    }
?>