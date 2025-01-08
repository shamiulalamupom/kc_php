<?php
$movies = [
    ["title" => "Under Paris", "year" => 2024],
    ["title" => "Titanic", "year" => 1997],
    ["title" => "Mercy", "year" => 1992]
];
$oldest_movie = null;
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
        <?php 
        $oldest_year = $movies[0];
        foreach ($movies as $movie) { ?>
            <li><?="Movie: {$movie["title"]} Release Year: {$movie["year"]}" ?></li>

        <?php
            if ($movie["year"] < $oldest_year) {
                $oldest_year = $movie["year"];
                $oldest_movie = $movie["title"];
            } 
        };
        echo "<p>The biggest population country is $oldest_movie</p>";
        ?>
    </ul>
</body>
</html>