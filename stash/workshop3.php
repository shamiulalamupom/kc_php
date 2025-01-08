<?php
$games = [
    ["name" => "GTA V", "minimumAge" => 18],
    ["name" => "Clash Royale", "minimumAge" => 13],
    ["name" => "Godfather III", "minimumAge" => 18],
];

function checkGameAge(int $gameAge, int $userAge): bool {
    return $userAge >= $gameAge;
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
    <form action="" method="post">
        <p>
            <label>Age:</label>
            <input type="text" name="age">
        </p>
    </form>

    <?php 
    if (isset($_POST["age"])) {        
        foreach ($games as $game) { 
            if (checkGameAge($game["minimumAge"], $_POST["age"])) {
    ?>
    <h3>You can play <?="{$game["name"]}" ?></h3>
    <?php } else { ?>
        <h3>You can't play <?="{$game["name"]}" ?></h3>
        <?php } ?>
        <?php } ?>
        <?php } ?>
</body>
</html>