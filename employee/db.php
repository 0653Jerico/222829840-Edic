<?php

    $servername = "localhost";
    $username = "root";
    $pwd = "";
    $dbname = "employee";


    $conn = new mysqli($servername, $username, $pwd, $dbname);

    if ($conn->connect_error){
        die("Connection Failed" . $conn->connect_error);
    }
?>