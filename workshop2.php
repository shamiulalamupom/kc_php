<?php
$students = [
    ["name" => "John", "value" => "75"],
    ["name" => "Raman", "value" => "95"],
    ["name" => "Sharad", "value" => "85"],
];
$cities = [
    ["name" => "Paris", "value" => "20"],
    ["name" => "Dhaka", "value" => "54"],
    ["name" => "Nepal", "value" => "32"],
];

function getMax(array $list): array {
    $maxItem = null;
    $maxValue = 0;
    foreach ($list as $item) {
        if ($item["value"] > $maxValue) {
            $maxValue = $item["value"];
            $maxItem = $item;
        }
    }
    return $maxItem;
}

function getMin(array $list): array {
    $minItem = $list[0];
    $minValue = $list[0]["value"];
    foreach ($list as $item) {
        if ($item["value"] < $minValue) {
            $minValue = $item["value"];
            $minItem = $item;
        }
    }
    return $minItem;
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
    <h2>
    The best student is  
    <?php 
    $student = getMax($students);
    echo "{$student["name"]}"
    ?>
    with the mark of 
    <?php
    echo "{$student["value"]}"
    ?>
    </h2>

    <h2>
    The worst student is  
    <?php 
    $studentL = getMin($students);
    echo "{$studentL["name"]}"
    ?>
    with the mark of 
    <?php
    echo "{$studentL["value"]}"
    ?>
    </h2>

    <h2>  
    <?php 
    $city = getMax($cities);
    echo "{$city["name"]}"
    ?>
    has the higest temperature of 
    <?php
    echo "{$city["value"]}"
    ?>°C
    </h2>

    <h2>  
    <?php 
    $cityL = getMin($cities);
    echo "{$cityL["name"]}"
    ?>
    has the lowest temperature of 
    <?php
    echo "{$cityL["value"]}"
    ?>°C
    </h2>
</body>
</html>