<?php

    include 'db.php';

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_POST["name"];
        $position = $_POST["position"];
        $salary = $_POST["salary"];


        if (!empty($name) && !empty($position) && !empty($salary)){
            $sql = "INSERT INTO employees (name, position, salary) VALUES ('$name', '$position', '$salary');";

            if ($conn->query($sql)===TRUE){
                echo "New Employee added successfully!";
            }else{
                echo "Failed to add new Employee!";
            }
        }else{
            echo "Please fill out all the fields";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
</head>
<body>

    <h3>Add Employees</h3>
    
    <form action="addEmployee.php" method="post">
        <label for="name">Enter the name:</label><br>
        <input type="text" name="name" id="name"><br><br>

        <label for="position">Enter the position:</label><br>
        <input type="text" name="position" id="position"><br><br>

        <label for="salary">Enter the salary:</label><br>
        <input type="number" name="salary" id="salary"><br><br>

        <input type="submit" value="Add Employee">
    </form>


    <br>
    <a href="index.php">Go to Employees</a>
</body>
</html>