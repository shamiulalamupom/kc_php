<?php
include_once "pdo.php";

function getAllMovies(PDO $pdo, bool $showAll = false): array|bool {
    if (isset($pdo) && $showAll) {
        $query = $pdo->prepare("SELECT * FROM movie");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $query = $pdo->prepare("SELECT * FROM movie ORDER BY id DESC LIMIT 3");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    return false;
};

function getMovieById(PDO $pdo, int $movieId): array|bool {
    if (isset($pdo) && isset($movieId)) {
        $query = $pdo->prepare("SELECT * FROM movie WHERE id = :movieId");
        $query->bindValue(':movieId', $movieId, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    return false;
}
?>