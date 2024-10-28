<?php

    include 'db.php';

    $id = "";
    $name = $position = $salary = "";

    if (isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "SELECT * FROM employees WHERE id=$id;";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $name = $row['name'];
            $position = $row['position'];
            $salary = $row['salary'];
        }else{
            echo "No employee found with that ID!";
        }
    }

    if ($_SERVER['REQUEST_METHOD']=="POST"){
        $name = $_POST['name'];
        $position = $_POST['position'];
        $salary = $_POST['salary'];
        $id = $_POST['id'];

        if (!empty($name) && !empty($position) && !empty($salary)){
            $sql = "UPDATE employees SET name='$name', position='$position', salary='$salary' WHERE id=$id;";

            if ($conn->query($sql)===TRUE){
                echo "Employee updated successfully!";
            }else{
                echo "Failed to update Employee!" . $sql . "<br>" . $conn->error;
            }
        }else{
            echo "Please fill in all inputs!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>

    <h3>Update Employees</h3>
    
    <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
        Enter the name:
        <input type="text" name="name" value="<?php echo $name; ?>"><br><br>

        Enter the position:
        <input type="text" name="position" value="<?php echo $position; ?>"><br><br>

        Enter the salary:
        <input type="number" name="salary" value="<?php echo $salary; ?>"><br><br>

        <input type="submit" value="Update Employee">
    </form>


    <br>
    <a href="index.php">Go to Employees</a>
</body>
</html>