<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <?php if (isset($_SESSION["email"])): ?>
                    <li><a href="../templates/profile.php">Profile</a></li>
                    <li><a href="../templates/logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="../templates/login.php">Login</a></li>
                    <li><a href="../templates/signup.php">Signup</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>