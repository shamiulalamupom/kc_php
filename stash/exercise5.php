<?php
$games = [
    ["name" => "GTA V", "type" => "rpg", "editor" => "Rockstar Games"],
    ["name" => "Red Dead Redemption", "type" => "rpg", "editor" => "Rockstar Games"],
    ["name" => "Valorant", "type" => "fps", "editor" => "Riot Games"],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php foreach($games as $game) { ?>
        <li><?="{$game["name"]} - {$game["type"]} - {$game["editor"]}" ?></li>
    <?php } ?>
    </ul> 
</body>
</html>