<?php
include_once "pdo.php";

function createCommentByMovieId(PDO $pdo, int $movieId, int $userId, string $content): array|bool {
    if (isset($pdo) && isset($movieId)) {
        $query = $pdo->prepare("SELECT * FROM comment WHERE movie_id = :movieId");
        $query->bindValue(':movieId', $movieId, PDO::PARAM_INT);
        $query->execute();
        $comments = $query->fetch(PDO::FETCH_ASSOC);
    }
    return false;
}

function getCommentsByMovieId(PDO $pdo, int $movieId): array|bool {
    if (isset($pdo) && isset($movieId)) {
        $query = $pdo->prepare("SELECT * FROM comment WHERE movie_id = :movieId");
        $query->bindValue(':movieId', $movieId, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    return false;
}
?>