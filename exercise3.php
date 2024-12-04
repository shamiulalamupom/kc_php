<?php
$game_name = "GTA VI";
$new = true;
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
    echo "$game_name";
    if ($new) { ?>
        <strong>
            <?="NEW!" ?>
        </strong>
    <?php } ?>
    </p>
</body>
</html>