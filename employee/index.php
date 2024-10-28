<?php
include 'db.php';

$sql = "SELECT * FROM employees;";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
</head>

<body>

    <h2>Employees</h2>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Salary</th>
            <th>Action</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["position"] . "</td>";
                echo "<td>" . $row["salary"] . "</td>";
                echo "<td><a href='delete.php?id=" . $row['id'] . " '>Delete</a></td>";
                echo "<td><a href='edit.php?id=" . $row['id'] . " '>Edit</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No Employee</td></tr>";
        }
        ?>
    </table>

    <br>
    <a href="addEmployee.php">Add new Employee</a>
</body>

</html>