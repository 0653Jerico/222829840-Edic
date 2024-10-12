<!DOCTYPE html>
<html>
<head>
    <title>Reverse String</title>
</head>
<body>
    <form method="post" action="">
        <label for="string">Enter a string:</label>
        <input type="text" name="input" required>
        <button type="submit">Reverse</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $string = $_POST["input"];

            $reversedString = "";
            for ($i = strlen($string) - 1; $i >= 0; $i--) {
                $reversedString .= $string[$i];
            }

            echo "<h3>Input: </h3>" . $string;
            echo "<h3>Output: </h3>" . $reversedString;
        }
    ?>
</body>
</html>