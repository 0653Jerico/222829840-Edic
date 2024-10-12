<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Validator</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="pass">Please enter the password: </label><br>
        <input id="pass" type="password" name="pass"><br><br>
        <input type="submit" value="Login">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"  ){
            $correctPass = "password123";
            $passInput=htmlspecialchars($_POST['pass']);
            
            
            do{
                if ($passInput !== $correctPass){
                    echo "<h3>Incorrect Password</h3>";
                    break;
                }
                echo "<h3>Access Granted</h3>";
                break;
            }while ($passInput == $correctPass);
            
            
        };

    ?>

</body>
</html>