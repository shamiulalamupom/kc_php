<?php 
include_once "../lib/movies.php";
include_once "../lib/directors.php";
include_once "../lib/comments.php";

if (isset($_GET["movieId"])) {
    $movie = getMovieById($pdo, htmlspecialchars($_GET["movieId"]));
    if (isset($movie["director_id"])) {
        $director = getDirectorById($pdo, htmlspecialchars($movie["director_id"]));
        $comments = getCommentsByMovieId($pdo, htmlspecialchars($movie["id"]));
    }
};

include_once "header.php";
?>

<?php 
if (!$movie):
    header("refresh:5;url=../index.php");
    echo 'Movie not found. Click <a href="../index.php">here</a> to go to homepage.';
else:
?>
<h2><?= htmlspecialchars($movie["title"]) ?></h2>
<ul>
    <li><?= htmlspecialchars($movie["summary"]) ?></li>
    <li><?= htmlspecialchars($movie["release_date"]) ?></li>
    <li><?= htmlspecialchars($director["first_name"])." ".htmlspecialchars($director["last_name"]) ?></li>
</ul>

<h1>Comments</h1>
<?php if ($comments): ?>
    <?php foreach($comments as $comment): ?>
        <p><?= htmlspecialchars($comment["content"]) ?></p>
    <?php endforeach; ?>
<?php else: ?>
    <p>No comments yet. Be the first to comment.</p>
<?php endif; ?>
<form action="" method="post">
    <p>
        <input type="textbox" name="content" id="content">
        <input type="submit" value="Comment">
    </p>
</form>
<?php endif; ?>

<?php include_once "footer.php"; ?>