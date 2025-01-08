<?php include_once "../lib/products.php";

if (isset($_GET["productId"])) {
    $product = getProductById($pdo, $_GET["productId"]);
};

include_once "header.php";
?>

<?php 
if (!$product):
    header("refresh:5;url=../index.php");
    echo 'Product not found. Click <a href="../index.php">here</a> to go to homepage.';
else:
?>
<ul>
    <li><?= $product["name"] ?></li>
    <li><?= $product["description"] ?></li>
    <li><?= $product["price"] ?></li>
</ul>
<?php endif; ?>

<?php include_once "footer.php"; ?>