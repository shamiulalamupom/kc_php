<?php require_once "header.php" ?>
<?php
function loginUser(string $email, string $password): bool
{
    if ($email === "test@gmail.com" && $password === "ABC123") {
        session_regenerate_id(true);
        $_SESSION["email"] = $email;
        header("Location: index.php");
        return true;
    } else {
        return false;
    }
}
if (isset($_POST["email"])) {

    $result = loginUser($_POST["email"], $_POST["password"]);
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
    <?php if (!$result): ?>
        <p>Invalid email user or password</p>
    <?php endif; ?>
<?php endif; ?>

<?php require_once "footer.php" ?>