<?php 
require_once "../lib/pdo.php";
require_once "../lib/auth.php";
require_once "header.php";
?>
<?php
$result = false;
if (isset($_POST["email"]) && isset($_POST["nickname"]) && isset($_POST["password"])) {
    if ($_POST["email"] !== "" && $_POST["nickname"] !== "" && $_POST["password"] !== "") {
        $result = createUserByEmailPass($pdo, htmlspecialchars($_POST["nickname"]), htmlspecialchars($_POST["email"]), htmlspecialchars($_POST["password"]));
        if ($result) {
            session_regenerate_id(true);
            $_SESSION["email"] = $_POST["email"];
            header("Location: profile.php");
        }
    }
}
?>

<h1>Login</h1>
<form action="" method="post">
    <p>
        <label for="nickname">Nickname</label>
        <input type="text" name="nickname" id="nickname">
    </p>
    <p>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </p>
    <p>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </p>
    <input type="submit" value="Signup">
</form>
<?php if (isset($_POST["email"]) && isset($_POST["password"])): ?>
    <?php if (!$result): ?>
        <p>Invalid nickname, email or password. Check if your account already exists.</p>
    <?php endif; ?>
<?php endif; ?>

<?php require_once "footer.php" ?>