<?php
function getUserByEmailPass(PDO $pdo, string $email, string $password): array|bool {
    if (isset($pdo) && isset($email) && isset($password)) {
        $query = $pdo->prepare("SELECT * FROM user WHERE email = :email");
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);

        if (isset($user) & password_verify($password, $user["password"])) {
            return $user;
        }
    }
    return false;
}

function createUserByEmailPass(PDO $pdo, string $nickname, string $email, string $password): bool {
    if (isset($pdo) && isset($email) && isset($password)) {
        $query = $pdo->prepare("SELECT * FROM user WHERE email = :email");
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            $query = $pdo->prepare("INSERT INTO user (nickname, email, password) VALUES (:nickname, :email, :password)");
            $query->bindValue(':nickname', $nickname, PDO::PARAM_STR);
            $query->bindValue(':email', $email, PDO::PARAM_STR);
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $query->bindValue(':password', $hash, PDO::PARAM_STR);
            $result = $query->execute();
            return $result;
        }
    }
    return false;
}
?>