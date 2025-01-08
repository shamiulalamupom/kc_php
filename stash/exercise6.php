<?php
$first_name = "Shamiul";
$last_name = "Alam";

function displayFullName(string $firstName, string $lastName): void {
    echo "$firstName $lastName";
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
    <?php displayFullName($first_name, $last_name); ?>
</body>
</html>