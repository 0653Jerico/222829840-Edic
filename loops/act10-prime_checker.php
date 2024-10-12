<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Check</title>
</head>
<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="number">Enter a number: </label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST['number']); 
        $isPrime = true; 

        if ($number <= 1) {
            $isPrime = false;
        } else {
            for ($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
        }

        if ($isPrime) {
            echo "$number is a prime number.";
        } else {
            echo "$number is not a prime number.";
        }
    }
    ?>

</body>
</html>
