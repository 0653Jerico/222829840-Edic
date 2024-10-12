<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Sequence</title>
</head>
<body>

    <?php
    // Initialize the first two numbers of the sequence
    $num1 = 0;
    $num2 = 1;

    // Print the first two numbers
    echo "$num1 $num2 ";

    // Generate and print the remaining 8 numbers using a while loop
    $count = 8;
    while ($count > 0) {
        $nextNum = $num1 + $num2;
        echo "$nextNum ";

        // Update the numbers for the next iteration
        $num1 = $num2;
        $num2 = $nextNum;

        $count--;
    }
    ?>
</body>
</html>