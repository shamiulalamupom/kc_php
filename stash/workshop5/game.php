<?php include_once "lib/games.php";

if (isset($_GET["index"])) {
    $game = getGameByIndex($_GET["index"]);
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $game["name"] ?></title>
</head>
<body>
    <ul>
        <li><?= $game["name"] ?></li>
        <li><?= "{$game["editor"]} - {$game["year"]}" ?></li>
        <li><?= $game["description"] ?></li>
    </ul>
</body>
</html>