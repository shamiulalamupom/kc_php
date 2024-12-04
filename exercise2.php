<?php
$user_name = "ShamiulAlam74";
$age = 20;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    <?php 
    if ($age < 18) {
        echo "Our game is not suitable for players under the age of 18";
    } else {
        echo "Welcome to our webiste $user_name";
    }
    ?>
    </p>
</body>
</html>