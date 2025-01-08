<?php
include_once "pdo.php";

function getDirectorById(PDO $pdo, int $directorId): array|bool {
    if (isset($pdo) && isset($directorId)) {
        $query = $pdo->prepare("SELECT * FROM director WHERE id = :directorId");
        $query->bindValue(':directorId', $directorId, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    return false;
}
?>