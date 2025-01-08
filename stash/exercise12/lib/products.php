<?php
include_once "pdo.php";

function getAllProducts(PDO $pdo, bool $showAll = false): array|bool {
    if (isset($pdo) && $showAll) {
        $query = $pdo->prepare("SELECT * FROM product");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $query = $pdo->prepare("SELECT * FROM product ORDER BY id DESC LIMIT 3");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    return false;
};

function getProductById(PDO $pdo, int $productId): array|bool {
    if (isset($pdo) && isset($productId)) {
        $query = $pdo->prepare("SELECT * FROM product WHERE id = :productId");
        $query->bindValue(':productId', $productId, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    return false;
}
?>