<?php

    include 'db.php';

    if (isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "DELETE FROM employees WHERE id=$id;";
        if ($conn->query($sql) === TRUE){
            echo "Employee deleted successfully!";
        }else{
            echo "Error deleting employee!" . $sql . "<br>" . $conn->error;
        }
    }


    header("Location: index.php");
    exit();
?>