<?php require_once "header.php" ?>

<?php if(!isset($_SESSION['email'])){
    header("Location: login.php");
} ?>

<?php if (isset($_SESSION["email"])): ?>
    <h2>Connected user: <?= htmlspecialchars($_SESSION["email"]) ?></h2>
<?php endif; ?>

<?php require_once "footer.php" ?>