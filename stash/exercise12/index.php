<?php 
include_once "lib/products.php";
if (isset($_GET["showAll"])) {
    $products = getAllProducts($pdo, true);
} else {
    $products = getAllProducts($pdo);
}
include_once "template/header.php";
?>

<h1>Homepage</h1>

<?php foreach ($products as $product): ?>
<article>
    <h3><?=$product["name"] ?></h3>
    <h5><?=$product["price"] ?></h5>
    <a href="template/product.php?productId=<?=$product["id"] ?>"><button>Read More</button></a>
</article>
<?php endforeach; ?>

<?php if (!isset($_GET["showAll"])): ?>
<a href="index.php?showAll=true"><button>Show More...</button></a>
<?php endif; ?>

<?php include_once "template/footer.php"; ?>