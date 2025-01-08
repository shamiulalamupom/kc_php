<?php
function hasMajority(int $age): bool {
    return $age >= 13;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (hasMajority(12)) { ?>
        <h2><?="You are allowed to play the game" ?></h2>
    <?php } else { ?>
        <h2><?="You are not allowed to play the game" ?></h2>
    <?php }  ?>
</body>
</html>