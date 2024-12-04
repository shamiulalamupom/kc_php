<?php
$countries = [
    ["name" => "France", "population" => 1000],
    ["name" => "Bangladesh", "population" => 5000000],
    ["name" => "Nepal", "population" => 800000]
];
$biggest_population_country = null;
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
        $biggest_population = 0;
        foreach ($countries as $country) { ?>
            <li><?="Country: {$country["name"]} Population: {$country["population"]}" ?></li>

        <?php
            if ($country["population"] > $biggest_population) {
                $biggest_population = $country["population"];
                $biggest_population_country = $country["name"];
            } 
        };
        echo "<p>The biggest population country is $biggest_population_country</p>";
        ?>
    </ul>
</body>
</html>