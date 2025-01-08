<?php 
$db_name = "exercise11";
$db_user = "root";
$db_password = "";

try {
    // var_dump($_SERVER);
    $config = parse_ini_file(dirname(__FILE__)."/../.env");
    $pdo = new PDO('mysql:dbname='.$config["db_name"].';host:localhost;charset=utf8mb4', $config["db_user"], $config["db_password"]);
} catch (Exception $e) {
    die("Error: ".$e->getMessage());
}
?>