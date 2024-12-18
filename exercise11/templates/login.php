<?php 
require_once "../lib/pdo.php";
require_once "../lib/auth.php";
require_once "header.php";
?>
<?php
if (isset($_POST["email"])) {
    $user = getUserByEmailPass($pdo, $_POST["email"], $_POST["password"]);
    if ($user) {
        session_regenerate_id(true);
        $_SESSION["email"] = $_POST["email"];
        header("Location: ../index.php");
    }
}
?>

<h1>Login</h1>
<form action="" method="post">
    <p>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </p>
    <p>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </p>
    <input type="submit" value="Login">
</form>
<?php if (isset($_POST["email"]) && isset($_POST["password"])): ?>
    <?php if (!$user): ?>
        <p>Invalid email user or password</p>
    <?php endif; ?>
<?php endif; ?>

<?php require_once "footer.php" ?>