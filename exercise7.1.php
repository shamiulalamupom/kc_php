<?php
$products = [
    ["name" => "Dell laptop", "price_without_vat" => 1000, "vat" => 20],
    ["name" => "Asus laptop", "price_without_vat" => 1500, "vat" => 20]
];
function getPriceWithVAT(float $price, float $vat): float {
    return $price * (1 + $vat / 100); 
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
    <table>
        <tr>
            <th>Product Name</th>
            <th>Prix HT</th>
            <th>Prix TTC</th>
        </tr>
        <?php foreach($products as $product) { ?>
        <tr>
            <td><?="{$product["name"]}" ?></td>
            <td><?="{$product["price_without_vat"]}" ?></td>
            <td><?php echo getPriceWithVAT($product["price_without_vat"], $product["vat"]) ?></td>
        </tr>
        <?php } ?>
    </table>
    <?php 
    
    ?>
</body>
</html>