<?php 
$user = ["first_name" => "Shamiul", "last_name" => "Alam", "email" => "mdshamiulalamupom@gmail.com"];
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?="{$user["first_name"]} {$user["last_name"]}" ?></h1>
    <h2><?=$user["email"] ?></h2>
</body>
</html>