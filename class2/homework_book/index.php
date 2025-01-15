<?php 
require_once 'Book.php';
require_once 'Manga.php';

$book = new Book('PHP', 1500, 20);
$manga = new Manga('Anime', 700, 20);
$manga->mangaType = 'Shonen';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <article>
        <h1><?=$book->getTitle() ?></h1>
        <p>$<?=$book->getPrice() ?></p>
        <p>$<?=$book->getTotalWithVat() ?></p>
    </article>
    <article>
        <h1><?=$manga->getTitle() ?></h1>
        <p><?=$manga->mangaType ?></p>
        <p>$<?=$manga->getPrice() ?></p>
        <p>$<?=$manga->getTotalWithVat() ?></p>
    </article>
</body>
</html>