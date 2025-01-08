<?php
require_once "lib/games.php";
$games = getGames();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($games as $index => $game): ?>
    <article>
        <h3><?="{$game["name"]}" ?></h3>
        <a href="game.php?index=<?="$index" ?>"><button>Read More</button></a>
    </article>
    <?php endforeach; ?>
</body>
</html>