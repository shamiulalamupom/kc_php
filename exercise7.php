<?php 
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
    <?php 
    $priceWithTax = getPriceWithVAT(100, 20);
    echo $priceWithTax;
    ?>
</body>
</html>